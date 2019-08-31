<?php

function command($input, $parameters = null, $custom = '')
{
    global $text;
    global $chat_id;
    $nickname = strtolower(NICKNAMEBOT);

    if ($text === '' or $chat_id === 0) {
        return false;
    }

    $nicknameEx = explode($input . '@', $text, 2)[1];
    if (isset($nicknameEx)) {
        $nickSplit = preg_split("/\s/", $nicknameEx, 2)[0];
        if (isset($nickSplit) and !(strcasecmp('@' . $nickSplit, $nickname) === 0)) {
            return false;
        }
    }

    if (!isset($parameters)) {
        if (strcasecmp($text, trim($input)) === 0) {
            return true;
        }
        return false;
    } elseif (stripos($text, trim($input)) === 0) {
        if ($parameters === 0) {
            return true;
        }

        $split = preg_split("/\s/", $text, $parameters + 1);
        for ($i = 1; $i <= $parameters; $i++) {
            if (!isset($split[$i]) or $split[$i] == '') {
                $out = 'Error: unspecified text.' . PHP_EOL . 'How to use:' . PHP_EOL . $input . str_repeat(' [text]',
                        $parameters);
                if ($custom !== '') {
                    $out = $custom;
                }
                sendMessage($chat_id, $out, 'HTML');
                return false;
            }
        }
        return $split;
    }
    return false;
}
