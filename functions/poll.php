<?php

function sendPoll(
    $chat_id,
    $question,
    $options,
    $is_anonymous = null,
    $type = null,
    $allows_multiple_answers = null,
    $correct_option_id = null,
    $is_closed = null,
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

    if ($is_anonymous !== null) {
        $args['is_anonymous'] = $is_anonymous;
    }
    if ($type !== null) {
        $args['type'] = $type;
    }
    if ($allows_multiple_answers !== null) {
        $args['allows_multiple_answers'] = $allows_multiple_answers;
    }
    if ($correct_option_id !== null) {
        $args['correct_option_id'] = $correct_option_id;
    }
    if ($is_closed !== null) {
        $args['is_closed'] = $is_closed;
    }
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
