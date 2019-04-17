<?php

function command($input, $parameters = null)
{
    global $text;
    global $chat_id;

    if ($text === '' or $chat_id === 0) {
        return false;
    }

    if (!isset($parameters)) {
        if (strcasecmp($text, $input) === 0 or
            strcasecmp($text, $input . NICKNAMEBOT) === 0 or
            stripos($text, $input . ' ') === 0 or
            stripos($text, $input . NICKNAMEBOT . ' ') === 0) {
            return true;
        }
        return false;
    } elseif (stripos($text, $input) === 0) {
            if ($parameters === 0) {
                return true;
            }

            $save = explode(' ', $text, $parameters + 1);
            for ($i = 1; $i <= $parameters; $i++) {
                if (!isset($save[$i]) or $save[$i] == '') {
                    sendMessage($chat_id, 'Error: unspecified text.' . PHP_EOL . 'How to use:' . PHP_EOL .
                        $input . str_repeat(' [text]', $parameters));
                    return false;
                }
            }
            return $save;
        }
    return false;
}