<?php

/**
 *    Copyright (C) 2017-2018  Davide Turaccio
 *
 *    This program is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU Affero General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    This program is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 **/

if (!isset($_GET['api'])) {
    exit();
}

require_once 'config.php';

$jsonPayload = !RESPONSE;
$curlRequestSession = null;

//receiving updates via the WebHook
$update = json_decode(file_get_contents('php://input'), true);


//soon(tm) I will remove this crap

//All variables are created automatically without the need of $update['message']['text']; (you can simply use $message_text)
//Variables are created using the available telegram types fields https://core.telegram.org/bots/api#available-types
//To get a list of all the variables, visit https://core.telegram.org/bots/api#update
//For example, the update object https://core.telegram.org/bots/api#update has "edited_message" (if there is no edited message in the update received from Telegram the variable will not exist) to read the contents of the text you can just have a look at the type used for edited_message that corresponds to "message" https://core.telegram.org/bots/api#message, if you want to read the message text just use $message_text ("message" + _ + "text")
function easyVars($update, $prefix = '', $first = true)
{
    foreach ($update as $key => $val) {
        $key = $prefix . $key;
        if (is_array($val)) {
            if ($first === true) {
                easyVars($val, '', false);
            } else {
                easyVars($val, $key . '_', false);
            }
        }
        if (!isset($GLOBALS[$key])) {
            $GLOBALS[$key] = $val;
        }
    }
}

if (EASY_VAR === true) {
    easyVars($update);
}

require_once 'base_functions.php';
