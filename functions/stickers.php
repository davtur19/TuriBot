<?php


function setChatStickerSet($chat_id, $sticker_set_name, $response = RESPONSE)
{
    $args = [
        'chat_id'          => $chat_id,
        'sticker_set_name' => $sticker_set_name,
    ];

    if ($response === true) {
        return curlRequest('setChatStickerSet', $args);
    }
    return jsonPayload('setChatStickerSet', $args);
}


function deleteChatStickerSet($chat_id, $response = RESPONSE)
{
    $args = [
        'chat_id' => $chat_id,
    ];

    if ($response === true) {
        return curlRequest('deleteChatStickerSet', $args);
    }
    return jsonPayload('deleteChatStickerSet', $args);
}


function sendSticker(
    $chat_id,
    $sticker,
    $disable_notification = null,
    $reply_to_message_id = null,
    $reply_markup = null,
    $response = RESPONSE
) {
    if ((stripos($sticker, 'http') === false) and (stripos($sticker, '.') !== false)) {
        $file_name = realpath($sticker);
        $sticker = curl_file_create($file_name);
        $response = true;
    }

    $args = [
        'chat_id' => $chat_id,
        'sticker' => $sticker,
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
        return curlRequest('sendSticker', $args);
    }
    return jsonPayload('sendSticker', $args);
}


function getStickerSet($name)
{
    $args = [
        'name' => $name,
    ];

    return curlRequest('getStickerSet', $args);
}


function uploadStickerFile($user_id, $png_sticker)
{
    $file_name = realpath($png_sticker);
    $png_sticker = curl_file_create($file_name);

    $args = [
        'user_id'     => $user_id,
        'png_sticker' => $png_sticker,
    ];

    return curlRequest('uploadStickerFile', $args);
}


function createNewStickerSet(
    $user_id,
    $name,
    $title,
    $png_sticker,
    $emojis,
    $contains_masks = null,
    $mask_position = null,
    $response = RESPONSE
) {
    if ((stripos($png_sticker, 'http') === false) and (stripos($png_sticker, '.') !== false)) {
        $file_name = realpath($png_sticker);
        $png_sticker = curl_file_create($file_name);
        $response = true;
    }

    $args = [
        'user_id'     => $user_id,
        'name'        => $name,
        'title'       => $title,
        'png_sticker' => $png_sticker,
        'emojis'      => $emojis,
    ];

    if (isset($contains_masks)) {
        $args['contains_masks'] = $contains_masks;
    }
    if (isset($mask_position)) {
        $mask_position = json_encode($mask_position);
        $args['mask_position'] = $mask_position;
    }

    if ($response === true) {
        return curlRequest('createNewStickerSet', $args);
    }
    return jsonPayload('createNewStickerSet', $args);
}


function addStickerToSet($user_id, $name, $png_sticker, $emojis, $mask_position = null, $response = RESPONSE)
{
    if ((stripos($png_sticker, 'http') === false) and (stripos($png_sticker, '.') !== false)) {
        $file_name = realpath($png_sticker);
        $png_sticker = curl_file_create($file_name);
        $response = true;
    }

    $args = [
        'user_id'     => $user_id,
        'name'        => $name,
        'png_sticker' => $png_sticker,
        'emojis'      => $emojis,
    ];

    if (isset($mask_position)) {
        $mask_position = json_encode($mask_position);
        $args['mask_position'] = $mask_position;
    }

    if ($response === true) {
        return curlRequest('addStickerToSet', $args);
    }
    return jsonPayload('addStickerToSet', $args);
}


function setStickerPositionInSet($sticker, $position, $response = RESPONSE)
{
    $args = [
        'sticker'  => $sticker,
        'position' => $position,
    ];

    if ($response === true) {
        return curlRequest('setStickerPositionInSet', $args);
    }
    return jsonPayload('setStickerPositionInSet', $args);
}


function deleteStickerFromSet($sticker, $response = RESPONSE)
{
    $args = [
        'sticker' => $sticker,
    ];

    if ($response === true) {
        return curlRequest('deleteStickerFromSet', $args);
    }
    return jsonPayload('deleteStickerFromSet', $args);
}