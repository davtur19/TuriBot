<?php


//games
function sendGame(
    $chat_id,
    $game_short_name,
    $disable_notification = null,
    $reply_to_message_id = null,
    $reply_markup = null,
    $response = RESPONSE
) {
    $args = [
        'chat_id'         => $chat_id,
        'game_short_name' => $game_short_name,
    ];

    if (isset($disable_notification)) {
        $args['disable_notification'] = $disable_notification;
    }
    if (isset($reply_to_message_id)) {
        $args['reply_to_message_id'] = $reply_to_message_id;
    }
    if (isset($reply_markup)) {
        $reply_markup = json_encode($reply_markup);
        $args['reply_markup'] = $reply_markup;
    }

    if ($response === true) {
        return curlRequest('sendGame', $args);
    }
    return jsonPayload('sendGame', $args);
}


function setGameScore(
    $user_id,
    $score,
    $force = null,
    $disable_edit_message = null,
    $chat_id = null,
    $message_id = null,
    $inline_message_id = null,
    $response = RESPONSE
) {
    $args = [
        'user_id' => $user_id,
        'score'   => $score,
    ];

    if (isset($force)) {
        $args['force'] = $force;
    }
    if (isset($disable_edit_message)) {
        $args['disable_edit_message'] = $disable_edit_message;
    }
    if (isset($chat_id)) {
        $args['chat_id'] = $chat_id;
    }
    if (isset($message_id)) {
        $args['message_id'] = $message_id;
    }
    if (isset($inline_message_id)) {
        $args['inline_message_id'] = $inline_message_id;
    }

    if ($response === true) {
        return curlRequest('setGameScore', $args);
    }
    return jsonPayload('setGameScore', $args);
}


function getGameHighScores($user_id, $chat_id = null, $message_id = null, $inline_message_id = null)
{
    $args = [
        'user_id' => $user_id,
    ];

    if (isset($chat_id)) {
        $args['chat_id'] = $chat_id;
    }
    if (isset($message_id)) {
        $args['message_id'] = $message_id;
    }
    if (isset($inline_message_id)) {
        $args['inline_message_id'] = $inline_message_id;
    }

    return curlRequest('getGameHighScores', $args);
}
