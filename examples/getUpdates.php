<?php

// if you move the example in the root of your project, you must change the path of the require_once below
require_once __DIR__ . "/../vendor/autoload.php";

use TuriBot\Client;


$client = new Client("TOKEN");
$offset = 0;

while (true) {
    $updates = $client->getUpdates($offset, $timeout = 0);
    if ($updates->ok === true) {
        foreach ($updates->result as $update) {
            $offset = $update->update_id + 1;
            $easy = new \TuriBot\EasyVars($update);

            if (isset($update->message)) {
                $chat_id = $update->message->chat->id;
                if (isset($update->message->reply_to_message->from->id)) {
                    $reply_id = $update->message->reply_to_message->from->id;
                }

                if ($easy->text === "ping") {
                    $client->sendMessage($chat_id, "pong");
                } else {
                    $client->sendMessage($chat_id, $easy->message_id);
                }

                if ($easy->text === "test") {
                    $result = $client->sendMessage($chat_id, "test");
                    $client->debug($chat_id, $result);
                }
                //$client->sendPhoto($chat_id, $client->inputFile("photo.png"));

                if ($easy->text === "/mute" and isset($reply_id)) {
                    $perm = [
                        "can_send_messages" => false
                    ];
                    $result = $client->restrictChatMember($chat_id, $reply_id, $perm);
                    $client->debug($chat_id, $result);
                }

                if ($easy->text === '/editmedia') {
                    $result_photo = $client->sendPhoto($chat_id,
                        'https://core.telegram.org/file/811140327/1/zlN4goPTupk/9ff2f2f01c4bd1b013', 'test photo');
                    if ($result_photo->ok === true) {
                        $inputMediaPhoto = [
                            'type'  => 'photo',
                            'media' => $client->inputFile('a.png'),
                        ];
                        $client->editMessageMedia($inputMediaPhoto, $chat_id, $result_photo->result->message_id);
                    }
                }

                if ($easy->text === '/mediagroup') {
                    $inputMediaPhoto1 = [
                        'type'  => 'photo',
                        'media' => 'https://core.telegram.org/file/811140327/1/zlN4goPTupk/9ff2f2f01c4bd1b013',
                    ];
                    $inputMediaPhoto2 = [
                        'type'  => 'photo',
                        'media' => $client->inputFile('a.png'),
                    ];
                    $client->sendMediaGroup($chat_id, [$inputMediaPhoto1, $inputMediaPhoto2]);
                }

            } elseif (isset($update->inline_query)) {
                $out = (string)rand();
                $results[] = [
                    "type"                  => "article",
                    "id"                    => $out,
                    "title"                 => $out,
                    "input_message_content" => [
                        "message_text"             => $out,
                        "disable_web_page_preview" => true
                    ],
                ];
                $client->answerInlineQuery($update->inline_query->id, $results, 1, false);
                unset($results);
            }

        }
    } else {
        exit($updates->description);
    }
}