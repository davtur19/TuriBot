<?php


//payments
function sendInvoice(
    $chat_id,
    $title,
    $description,
    $payload,
    $provider_token,
    $start_parameter,
    $currency,
    $prices,
    $provider_data = null,
    $photo_url = null,
    $photo_size = null,
    $photo_width = null,
    $photo_height = null,
    $need_name = null,
    $need_phone_number = null,
    $need_email = null,
    $need_shipping_address = null,
    $send_phone_number_to_provider = null,
    $send_email_to_provider = null,
    $is_flexible = null,
    $disable_notification = null,
    $reply_to_message_id = null,
    $reply_markup = null,
    $response = RESPONSE
) {
    $args = [
        'chat_id' => $chat_id,
        'title' => $title,
        'description' => $description,
        'payload' => $payload,
        'provider_token' => $provider_token,
        'start_parameter' => $start_parameter,
        'currency' => $currency,
        'prices' => $prices,
    ];

    if (isset($provider_data)) {
        $provider_data = json_encode($provider_data);
        $args['provider_data'] = $provider_data;
    }
    if (isset($photo_url)) {
        $args['photo_url'] = $photo_url;
    }
    if (isset($photo_size)) {
        $args['photo_size'] = $photo_size;
    }
    if (isset($photo_width)) {
        $args['photo_width'] = $photo_width;
    }
    if (isset($photo_height)) {
        $args['photo_height'] = $photo_height;
    }
    if (isset($need_name)) {
        $args['need_name'] = $need_name;
    }
    if (isset($need_phone_number)) {
        $args['need_phone_number'] = $need_phone_number;
    }
    if (isset($need_email)) {
        $args['need_email'] = $need_email;
    }
    if (isset($need_shipping_address)) {
        $args['need_shipping_address'] = $need_shipping_address;
    }
    if (isset($send_phone_number_to_provider)) {
        $args['send_email_to_provider'] = $send_email_to_provider;
    }
    if (isset($send_email_to_provider)) {
        $args['need_shipping_address'] = $need_shipping_address;
    }
    if (isset($is_flexible)) {
        $args['is_flexible'] = $is_flexible;
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
        return curlRequest('sendInvoice', $args);
    }
    return jsonPayload('sendInvoice', $args);
}


function answerShippingQuery(
    $shipping_query_id,
    $ok,
    $shipping_options = null,
    $error_message = null,
    $response = RESPONSE
) {
    $args = [
        'shipping_query_id' => $shipping_query_id,
        'ok' => $ok,
    ];

    if (isset($shipping_options)) {
        $shipping_options = json_encode($shipping_options);
        $args['shipping_options'] = $shipping_options;
    }
    if (isset($error_message)) {
        $args['error_message'] = $error_message;
    }

    if ($response === true) {
        return curlRequest('answerShippingQuery', $args);
    }
    return jsonPayload('answerShippingQuery', $args);
}


function answerPreCheckoutQuery($pre_checkout_query_id, $ok, $error_message = null, $response = RESPONSE)
{
    $args = [
        'pre_checkout_query_id' => $pre_checkout_query_id,
        'ok' => $ok,
    ];

    if (isset($error_message)) {
        $args['error_message'] = $error_message;
    }

    if ($response === true) {
        return curlRequest('answerPreCheckoutQuery', $args);
    }
    return jsonPayload('answerPreCheckoutQuery', $args);
}
