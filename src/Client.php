<?php

namespace TuriBot;

use CURLFile;

class Client extends Api
{
    public $easy;

    private $endpoint, $curl, $json_payload;


    /*
     * @param string $token Bot API token
     * @param bool $json_payload if true enable json payload, otherwise use always curl
     */

    public function __construct(string $token, bool $json_payload = false)
    {
        $this->endpoint = "https://api.telegram.org/bot" . $token . "/";
        $this->json_payload = $json_payload;
        $this->curl = curl_init();

        curl_setopt_array($this->curl, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST           => true,
            CURLOPT_FORBID_REUSE   => true,
            CURLOPT_HEADER         => false,
            CURLOPT_TIMEOUT        => 120,
            CURLOPT_CONNECTTIMEOUT => 2,
            CURLOPT_HTTPHEADER     => ["Connection: Keep-Alive", "Keep-Alive: 120"],
        ]);
    }


    /*
     * @return \stdClass of update received from webhook
     */

    public function getUpdate(): \stdClass
    {
        $update = json_decode(file_get_contents("php://input"));
        $this->easy = new EasyVars($update);

        return $update;
    }


    /*
     * @param string $path Path of file
     * @return \CURLFile of $path
     */

    public function inputFile(string $path): \CURLFile
    {
        $path = realpath($path);

        return new CURLFile($path);
    }


    /*
     * Make a request to Bot API
     *
     * @param string $method The method of Bot API
     * @param array $args Argument for the method of Bot API
     *
     * @return \stdClass getUpdate if jsonPayload, otherwise response of Telegram
     */

    public function Request(string $method, array $args = []): \stdClass
    {
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
            curl_setopt_array($this->curl, [
                CURLOPT_URL        => $this->endpoint . $method,
                CURLOPT_POSTFIELDS => $args,
            ]);
            $resultCurl = curl_exec($this->curl);
            if ($resultCurl === false) {
                $arr = [
                    "ok"          => false,
                    "error_code"  => curl_errno($this->curl),
                    "description" => curl_error($this->curl),
                    "curl_error"  => true
                ];

                $resultCurl = json_encode($arr);
            }

            $resultJson = json_decode($resultCurl);
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

    public function debug($chat_id, ...$vars): bool
    {
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
