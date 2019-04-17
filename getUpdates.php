<?php

require_once __DIR__ . '/vendor/autoload.php';

use TuriBot\Client;

$client = new Client("TOKEN");
$offset = 0;

while (true) {
    $updates = $client->getUpdates($offset, $timeout = 0);
    if ($updates->ok == true) {
        foreach ($updates->result as $update) {
            $offset = $update->update_id + 1;

            if (isset($update->message)) {
                $chat_id = $update->message->chat->id;
                $client->sendMessage($chat_id, "pong");
                //$client->sendPhoto($chat_id, $client->inputFile("photo.png"));
            }

        }
    } else {
        die();
    }
}