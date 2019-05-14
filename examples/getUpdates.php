<?php

require_once __DIR__ . "../vendor/autoload.php";

use TuriBot\Client;


$client = new Client("TOKEN");
$offset = 0;

while (true) {
    $updates = $client->getUpdates($offset, $timeout = 0);
    if ($updates->ok == true) {
        foreach ($updates->result as $update) {
            $offset = $update->update_id + 1;
            $easy = new \TuriBot\EasyVars($update);

            if (isset($update->message)) {
                $chat_id = $update->message->chat->id;
                if ($easy->text == "ping") {
                    $client->sendMessage($chat_id, "pong");
                } else {
                    $client->sendMessage($chat_id, $easy->message_id);
                }
                //$client->sendPhoto($chat_id, $client->inputFile("photo.png"));
            }

        }
    } else {
        exit($updates->description);
    }
}