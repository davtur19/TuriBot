<?php

function sendPoll(
    $chat_id,
    $question,
    $options,
    $disable_notification = null,
    $reply_to_message_id = null,
    $reply_markup = null,
    $response = RESPONSE
) {
    $args = [
        'chat_id'  => $chat_id,
        'question' => $question,
        'options'  => $options
    ];

    if ($disable_notification !== null) {
        $args['disable_notification'] = $disable_notification;
    }
    if ($reply_to_message_id !== null) {
        $args['reply_to_message_id'] = $reply_to_message_id;
    }
    if ($reply_markup !== null) {
        $args['reply_markup'] = json_encode($reply_markup);
    }

    if ($response === true) {
        return curlRequest('sendPoll', $args);
    }
    return jsonPayload('sendPoll', $args);
}


function stopPoll(
    $chat_id,
    $message_id,
    $reply_markup = null,
    $response = RESPONSE
) {
    $args = [
        'chat_id'    => $chat_id,
        'message_id' => $message_id
    ];

    if ($reply_markup !== null) {
        $args['reply_markup'] = json_encode($reply_markup);
    }

    if ($response === true) {
        return curlRequest('stopPoll', $args);
    }
    return jsonPayload('stopPoll', $args);
}
