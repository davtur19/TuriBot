<?php

// now you dont have to install anything using composer just use the .phar file provided in the directry for everything
// if you move the example in the root of your project, you must change the path of the require_once below
require_once __DIR__ . "/../turibot.phar";

use TuriBot\Client;


if (!isset($_GET["api"])) {
    exit();
}

$client = new Client($_GET["api"], false);
$update = $client->getUpdate();
if (!isset($update)) {
    exit('json error');
}

if (isset($update->message) or isset($update->edited_message)) {
    $chat_id = $client->easy->chat_id;
    $message_id = $client->easy->message_id;
    $text = $client->easy->text;

    if ($text === "/start") {
        $client->sendMessage($chat_id, "ping");
        $client->sendMessage($chat_id, "pong");
        $client->forwardMessage($chat_id, $chat_id, null, null, $message_id);
        // you need to put your own .png file in the same directory as this file
        $client->sendPhoto($chat_id, $client->inputFile("TuriPixel.png"), "File upload");
    }

    if ($text === "/help") {

        $menu["inline_keyboard"] = [
            [
                [
                    "text"          => "Button 1",
                    "callback_data" => "btn1",
                ],
            ],
            [
                [
                    "text"          => "Button 2",
                    "callback_data" => "btn2",
                ],
                [
                    "text"          => "Button 3",
                    "callback_data" => "btn3",
                ],
            ],
        ];

        $a = $client->sendMessage($chat_id, "help", null, null, null, null, null, null, null, $menu);
    }

    if ($text === "/var") {
        $client->debug($chat_id, $client->easy->message_id, ["key" => "value"], "pong", 3.14);
    }
}

if (isset($update->callback_query)) {

    $id = $update->callback_query->id;
    $message_chat_id = $update->callback_query->message->chat->id;
    $message_message_id = $update->callback_query->message->message_id;

    $menu["inline_keyboard"] = [
        [
            [
                "text"          => "Button 1",
                "callback_data" => "btn1",
            ],
        ],
        [
            [
                "text"          => "Button 2",
                "callback_data" => "btn2",
            ],
            [
                "text"          => "Button 3",
                "callback_data" => "btn3",
            ],
        ],
    ];

    if ($update->callback_query->data === "btn1") {
        $client->answerCallbackQuery($id, "Button 1");
        $client->editMessageText($message_chat_id, $message_message_id, null, "Button 1", null, null, null, $menu);
    } elseif ($update->callback_query->data === "btn2") {
        $client->answerCallbackQuery($id, "Button 2");
        $client->editMessageText($message_chat_id, $message_message_id, null, "Button 2", null, null, null, $menu);
    } elseif ($update->callback_query->data === "btn3") {
        $client->answerCallbackQuery($id, "Button 3");
        $client->editMessageText($message_chat_id, $message_message_id, null, "Button 3", null, null, null, $menu);
    }
}
