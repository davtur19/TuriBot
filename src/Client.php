<?php

namespace TuriBot;

use Amp\ByteStream\BufferException;
use Amp\ByteStream\StreamException;
use Amp\Http\Client\Form;
use Amp\Http\Client\HttpClientBuilder;
use Amp\Http\Client\Request;

class Client extends Api {
    public EasyVars $easy;

    private bool                        $json_payload;
    private string                      $endpoint;
    private \Amp\Http\Client\HttpClient $httpClient;

    /*
     * @param string $token Bot API token
     * @param bool $json_payload if true enable json payload, otherwise use always curl
     * @param string $endpoint custom endpoint url for self-hosted BotApi
     * @param array $curl_options change curl settings, to be able to use a proxy or something else, use it at your own risk
     */

    public function __construct(
        string $token,
        bool $json_payload = false,
        string $endpoint = "https://api.telegram.org/bot"
    ) {
        $this->endpoint = $endpoint . $token . "/";
        $this->json_payload = $json_payload;
        $this->httpClient = HttpClientBuilder::buildDefault();
    }


    /*
     * @return \stdClass of update received from webhook
     */

    public function getUpdate(string $body = null): ?\stdClass {
        if (isset($body)) {
            $update = json_decode($body);
        } else {
            $update = json_decode(file_get_contents("php://input"));
        }
        $this->easy = new EasyVars($update);

        return $update;
    }


    /*
     * Make a request to Bot API
     *
     * @param string $method The method of Bot API
     * @param array $args Argument for the method of Bot API
     *
     * @return \stdClass getUpdate if jsonPayload, otherwise response of Telegram
     */

    public function Request(string $method, array $args = []) {
        if ($this->json_payload) {
            $args["method"] = $method;
            $request = json_encode($args);
            ob_start();
            header("Content-Type: application/json");
            header("Connection: close");
            header("Content-Length: " . strlen($request));
            echo $request;
            ob_end_flush();
            ob_flush();
            flush();
            $this->json_payload = false;

            return $this->getUpdate();
        } else {
            try {
                $request = new Request($this->endpoint . $method, 'POST');
                $body = new Form;
                //var_dump($args);

                foreach ($args as $name => $value) {
                    //var_dump($value);
                    if ($value instanceof InputFile) {
                        $body->addFile($name, $value->getPath());
                    } else {
                        $body->addField($name, $value);
                    }
                }
                $request->setBody($body);
                //$request->setProtocolVersions(["1.1"]);
                $response = $this->httpClient->request($request);
                $resultHttp = $response->getBody()->buffer();
            } catch (BufferException|StreamException  $e) {
                $arr = [
                    "ok"          => false,
                    "error_code"  => $e->getCode(),
                    "description" => $e->getMessage(),
                    "http_error"  => true
                ];
                $resultHttp = json_encode($arr);
            }
            //var_dump($resultHttp);

            $resultJson = json_decode($resultHttp);
            if ($resultJson === null) {
                $arr = [
                    "ok"          => false,
                    "error_code"  => json_last_error(),
                    "description" => json_last_error_msg(),
                    "json_error"  => true
                ];
                $resultJson = json_decode(json_encode($arr));
            }

            return $resultJson;
        }
    }


    /*
     * Make var_export() and send it in the actual chat_id
     *
     * @param int|string $chat_id for the target chat
     * @param mixed,... $var unlimited optional variable to send
     *
     * @return bool true if can send message, otherwise false
     */

    public function debug($chat_id, ...$vars): bool {
        foreach ($vars as $debug) {
            $str = var_export($debug, true);
            $array_str = str_split($str, 4050);

            foreach ($array_str as $value) {
                $result = $this->sendMessage($chat_id, "Debug:" . PHP_EOL . $value);
                if ($result->ok === false) {
                    return false;
                }
            }
        }

        return true;
    }

}
