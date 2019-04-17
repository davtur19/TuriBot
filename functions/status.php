<?php


function sendChatAction($chat_id, $action, $response = RESPONSE)
{
    $args = [
        'chat_id' => $chat_id,
        'action' => $action,
    ];

    if ($response === true) {
        return curlRequest('sendChatAction', $args);
    }
    return jsonPayload('sendChatAction', $args);
}


function answerCallbackQuery(
    $callback_query_id,
    $text = null,
    $show_alert = null,
    $url = null,
    $cache_time = null,
    $response = RESPONSE
) {
    $args = [
        'callback_query_id' => $callback_query_id,
    ];

    if (isset($text)) {
        $args['text'] = $text;
    }
    if (isset($show_alert)) {
        $args['show_alert'] = $show_alert;
    }
    if (isset($url)) {
        $args['url'] = $url;
    }
    if (isset($cache_time)) {
        $args['cache_time'] = $cache_time;
    }

    if ($response === true) {
        return curlRequest('answerCallbackQuery', $args);
    }
    return jsonPayload('answerCallbackQuery', $args);
}