<?php


function jsonPayload($method, $args = [])
{
    global $jsonPayload;

    if ($jsonPayload === true) {
        $args['method'] = $method;
        $json = json_encode($args);

        ob_start();
        header('Content-Type: application/json');
        header('Connection: close');
        header('Content-Length: ' . strlen($json));
        echo $json;
        ob_end_flush();
        ob_flush();
        flush();

        $jsonPayload = false;
        return true;
    }

    return curlRequest($method, $args);
}


function curlRequest($method, $args = [])
{
    global $curlRequestSession;
    if (!isset($curlRequestSession)) {
        $curlRequestSession = curl_init();
        curl_setopt_array($curlRequestSession, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_HEADER => false,
            CURLOPT_TIMEOUT => 120,
            CURLOPT_HTTPHEADER => ["Connection: Keep-Alive", "Keep-Alive: 120"]
        ]);
    }

    curl_setopt_array($curlRequestSession, [
        CURLOPT_URL => 'https://api.telegram.org/bot' . $_GET['api'] . '/' . $method,
        CURLOPT_POSTFIELDS => $args,
    ]);
    $response = curl_exec($curlRequestSession);
    return json_decode($response, true);
}


function curlRequestApi($api, $method, $args = [])
{
    global $curlRequestSession;
    if (!isset($curlRequestSession)) {
        $curlRequestSession = curl_init();
        curl_setopt_array($curlRequestSession, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_HEADER => false,
            CURLOPT_TIMEOUT => 120,
            CURLOPT_HTTPHEADER => ["Connection: Keep-Alive", "Keep-Alive: 120"]
        ]);
    }

    curl_setopt_array($curlRequestSession, [
        CURLOPT_URL => 'https://api.telegram.org/bot' . $api . '/' . $method,
        CURLOPT_POSTFIELDS => $args,
    ]);
    $response = curl_exec($curlRequestSession);
    return json_decode($response, true);
}


//base functions
function sendMessage(
    $chat_id,
    $text,
    $parse_mode = null,
    $disable_web_page_preview = null,
    $disable_notification = null,
    $reply_to_message_id = null,
    $reply_markup = null,
    $response = RESPONSE
) {
    $args = [
        'chat_id' => $chat_id,
        'text' => $text,
    ];

    if (isset($parse_mode)) {
        $args['parse_mode'] = $parse_mode;
    }
    if (isset($disable_web_page_preview)) {
        $args['disable_web_page_preview'] = $disable_web_page_preview;
    }
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
        return curlRequest('sendMessage', $args);
    }
    return jsonPayload('sendMessage', $args);
}


function forwardMessage($chat_id, $from_chat_id, $message_id, $disable_notification = null, $response = RESPONSE)
{
    $args = [
        'chat_id' => $chat_id,
        'from_chat_id' => $from_chat_id,
        'message_id' => $message_id,
    ];

    if (isset($disable_notification)) {
        $args['disable_notification'] = $disable_notification;
    }

    if ($response === true) {
        return curlRequest('forwardMessage', $args);
    }
    return jsonPayload('forwardMessage', $args);
}


include_once 'functions/media.php';
include_once 'functions/edit.php';
include_once 'functions/admin.php';
include_once 'functions/get_info.php';
include_once 'functions/status.php';
include_once 'functions/location.php';
include_once 'functions/updates.php';
include_once 'functions/inline.php';
include_once 'functions/stickers.php';
include_once 'functions/payments.php';
include_once 'functions/games.php';

include_once 'functions/input.php';
include_once 'functions/debug.php';
