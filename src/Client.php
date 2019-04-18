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
     * @return stdClass of update received from webhook
     */

    public function getUpdate(): \stdClass
    {
        $update = json_decode(file_get_contents("php://input"));
        $this->easy = new EasyVars($update);

        return $update;
    }


    /*
     * @param string $path Path of file
     * @return CURLFile of $path
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
     * @return stdClass getUpdate if jsonPayload, otherwise response of Telegram
     */

    public function Request(string $method, array $args = [])
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
            $result = curl_exec($this->curl);

            return json_decode($result);
        }
    }


    /*
     * Make var_export() and send it in the actual chat_id
     *
     * @param mixed,... unlimited optional variable to send
     *
     * @return bool true if can send message, otherwise false
     */
    public function debug(...$vars): bool
    {
        if ($this->easy->chat_id === 0) {
            return false;
        }

        foreach ($vars as $debug) {
            $str = var_export($debug, true);
            $array_str = str_split($str, 4050);

            foreach ($array_str as $value) {
                $result = $this->sendMessage($this->easy->chat_id, 'Debug:' . PHP_EOL . $value);
                if ($result->ok === false) {
                    return false;
                }
            }
        }

        return true;
    }


    /*
     * Search in text for command
     *
     * @param string command to search
     *
     * @param int number of parameters required by the command
     *
     * @return mixed true if the command is found, otherwise false; if parameters are passed it will return the exploded array with ' '
     */
    public function command(string $input, int $parameters = null)
    {
        if ($this->easy->text === '' or $this->easy->chat_id === 0) {
            return false;
        }
        if (!isset($parameters)) {
            //or strcasecmp($this->easy->text,$input . $this->nicknamebot) === 0
            if (strcasecmp($this->easy->text, $input) === 0 or stripos($this->easy->text, $input . ' ') === 0) {
                return true;
            }

            return false;
        } elseif (stripos($this->easy->text, $input) === 0) {
            if ($parameters === 0) {
                return true;
            }
            $save = explode(' ', $this->easy->text, $parameters + 1);
            for ($i = 1; $i <= $parameters; $i++) {
                if (!isset($save[$i]) or $save[$i] == '') {
                    //sendMessage($chat_id, 'Error: unspecified text.' . PHP_EOL . 'How to use:' . PHP_EOL . $input . str_repeat(' [text]', $parameters));
                    return false;
                }
            }

            return $save;
        }

        return false;
    }
}
