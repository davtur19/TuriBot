<?php
// con parameters a 0 da strcasecmp diventa stripos
function command($input, $parameters = null, $error_msg = '')
{
    global $text;
    global $chat_id;

    $nickname = strtolower(NICKNAMEBOT);

    if ($text === '' or $chat_id === 0) {
        return false;
    }

    $nicknameEx = explode($input . '@', $text, 2);

    if (isset($nicknameEx[1])) {
        $nickSplit = preg_split("/\s/", $nicknameEx[1], 2);
        if (isset($nickSplit[0]) and !(strcasecmp('@' . $nickSplit[0], $nickname) === 0)) {
            return false;
        }
    }

    if (!isset($parameters)) {
        return (strcasecmp($text, trim($input)) === 0 or strcasecmp($text, trim($input) . $nickname) === 0);
    } elseif (stripos($text, trim($input)) === 0) {
        if ($parameters === 0) {
            return true;
        }

        $split = preg_split("/\s/", $text, $parameters + 1);

        for ($i = 1; $i <= $parameters; $i++) {
            if (!isset($split[$i]) or $split[$i] == '') {
                if ($error_msg !== '') {
                    $out = $error_msg;
                } else {
                    $out = 'Error: unspecified text.' . PHP_EOL . 'How to use:' . PHP_EOL . $input . str_repeat(' [text]', $parameters);
                }

                sendMessage($chat_id, $out, 'HTML');
                return false;
            }
        }

        return $split;
    }

    return false;
}
