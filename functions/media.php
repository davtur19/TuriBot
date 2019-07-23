<?php


//$photo = file_id or http url or file
//example = "11111111" or "http://your_website.com/photo.jpg" or "photo.jpg" (in same directory)
function sendPhoto(
    $chat_id,
    $photo,
    $caption = null,
    $parse_mode = null,
    $disable_notification = null,
    $reply_to_message_id = null,
    $reply_markup = null,
    $response = RESPONSE
) {
    if ((stripos($photo, 'http') === false) and (stripos($photo, '.') !== false)) {
        $file_name = realpath($photo);
        $photo = curl_file_create($file_name);
        $response = true;
    }

    $args = [
        'chat_id' => $chat_id,
        'photo'   => $photo,
    ];

    if (isset($caption)) {
        $args['caption'] = $caption;
    }
    if (isset($parse_mode)) {
        $args['parse_mode'] = $parse_mode;
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
        return curlRequest('sendPhoto', $args);
    }
    return jsonPayload('sendPhoto', $args);
}


function sendAudio(
    $chat_id,
    $audio,
    $caption = null,
    $parse_mode = null,
    $duration = null,
    $performer = null,
    $title = null,
    $thumb = null,
    $disable_notification = null,
    $reply_to_message_id = null,
    $reply_markup = null,
    $response = RESPONSE
) {
    if ((stripos($audio, 'http') === false) and (stripos($audio, '.') !== false)) {
        $file_name = realpath($audio);
        $audio = curl_file_create($file_name);
        $response = true;
    }

    if ((stripos($thumb, 'http') === false) and (stripos($thumb, '.') !== false)) {
        $file_name = realpath($thumb);
        $thumb = curl_file_create($file_name);
        $response = true;
    }

    $args = [
        'chat_id' => $chat_id,
        'audio'   => $audio,
    ];

    if (isset($caption)) {
        $args['caption'] = $caption;
    }
    if (isset($parse_mode)) {
        $args['parse_mode'] = $parse_mode;
    }
    if (isset($duration)) {
        $args['duration'] = $duration;
    }
    if (isset($performer)) {
        $args['performer'] = $performer;
    }
    if (isset($title)) {
        $args['title'] = $title;
    }
    if (isset($thumb)) {
        $args['thumb'] = $thumb;
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
        return curlRequest('sendAudio', $args);
    }
    return jsonPayload('sendAudio', $args);
}


function sendDocument(
    $chat_id,
    $document,
    $thumb = null,
    $caption = null,
    $parse_mode = null,
    $disable_notification = null,
    $reply_to_message_id = null,
    $reply_markup = null,
    $response = RESPONSE
) {
    if ((stripos($document, 'http') === false) and (stripos($document, '.') !== false)) {
        $file_name = realpath($document);
        $document = curl_file_create($file_name);
        $response = true;
    }

    if ((stripos($thumb, 'http') === false) and (stripos($thumb, '.') !== false)) {
        $file_name = realpath($thumb);
        $thumb = curl_file_create($file_name);
        $response = true;
    }

    $args = [
        'chat_id'  => $chat_id,
        'document' => $document,
    ];

    if (isset($thumb)) {
        $args['thumb'] = $thumb;
    }
    if (isset($caption)) {
        $args['caption'] = $caption;
    }
    if (isset($parse_mode)) {
        $args['parse_mode'] = $parse_mode;
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
        return curlRequest('sendDocument', $args);
    }
    return jsonPayload('sendDocument', $args);
}


function sendVideo(
    $chat_id,
    $video,
    $duration = null,
    $width = null,
    $height = null,
    $thumb = null,
    $caption = null,
    $parse_mode = null,
    $supports_streaming = null,
    $disable_notification = null,
    $reply_to_message_id = null,
    $reply_markup = null,
    $response = RESPONSE
) {
    if ((stripos($video, 'http') === false) and (stripos($video, '.') !== false)) {
        $file_name = realpath($video);
        $video = curl_file_create($file_name);
        $response = true;
    }

    if ((stripos($thumb, 'http') === false) and (stripos($thumb, '.') !== false)) {
        $file_name = realpath($thumb);
        $thumb = curl_file_create($file_name);
        $response = true;
    }

    $args = [
        'chat_id' => $chat_id,
        'video'   => $video,
    ];

    if (isset($duration)) {
        $args['duration'] = $duration;
    }
    if (isset($width)) {
        $args['width'] = $width;
    }
    if (isset($height)) {
        $args['height'] = $height;
    }
    if (isset($thumb)) {
        $args['thumb'] = $thumb;
    }
    if (isset($caption)) {
        $args['caption'] = $caption;
    }
    if (isset($parse_mode)) {
        $args['parse_mode'] = $parse_mode;
    }
    if (isset($supports_streaming)) {
        $args['supports_streaming'] = $supports_streaming;
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
        return curlRequest('sendVideo', $args);
    }
    return jsonPayload('sendVideo', $args);
}


function sendAnimation(
    $chat_id,
    $animation,
    $duration = null,
    $width = null,
    $height = null,
    $thumb = null,
    $caption = null,
    $parse_mode = null,
    $disable_notification = null,
    $reply_to_message_id = null,
    $reply_markup = null,
    $response = RESPONSE
) {
    if ((stripos($animation, 'http') === false) and (stripos($animation, '.') !== false)) {
        $file_name = realpath($animation);
        $animation = curl_file_create($file_name);
        $response = true;
    }

    if ((stripos($thumb, 'http') === false) and (stripos($thumb, '.') !== false)) {
        $file_name = realpath($thumb);
        $thumb = curl_file_create($file_name);
        $response = true;
    }

    $args = [
        'chat_id'   => $chat_id,
        'animation' => $animation,
    ];

    if (isset($duration)) {
        $args['duration'] = $duration;
    }
    if (isset($width)) {
        $args['width'] = $width;
    }
    if (isset($height)) {
        $args['height'] = $height;
    }
    if (isset($thumb)) {
        $args['thumb'] = $thumb;
    }
    if (isset($caption)) {
        $args['caption'] = $caption;
    }
    if (isset($parse_mode)) {
        $args['parse_mode'] = $parse_mode;
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
        return curlRequest('sendAnimation', $args);
    }
    return jsonPayload('sendAnimation', $args);
}


function sendVoice(
    $chat_id,
    $voice,
    $caption = null,
    $parse_mode = null,
    $duration = null,
    $disable_notification = null,
    $reply_to_message_id = null,
    $reply_markup = null,
    $response = RESPONSE
) {
    if ((stripos($voice, 'http') === false) and (stripos($voice, '.') !== false)) {
        $file_name = realpath($voice);
        $voice = curl_file_create($file_name);
        $response = true;
    }

    $args = [
        'chat_id' => $chat_id,
        'voice'   => $voice,
    ];
    if (isset($caption)) {
        $args['caption'] = $caption;
    }
    if (isset($parse_mode)) {
        $args['parse_mode'] = $parse_mode;
    }
    if (isset($duration)) {
        $args['duration'] = $duration;
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
        return curlRequest('sendVoice', $args);
    }
    return jsonPayload('sendVoice', $args);
}


//Sending video notes by a URL is currently unsupported by Telegram (Bot Api 3.4) https://core.telegram.org/bots/api#sendvideonote
function sendVideoNote(
    $chat_id,
    $video_note,
    $duration = null,
    $length = null,
    $thumb = null,
    $disable_notification = null,
    $reply_to_message_id = null,
    $reply_markup = null,
    $response = RESPONSE
) {
    if ((stripos($video_note, 'http') === false) and (stripos($video_note, '.') !== false)) {
        $file_name = realpath($video_note);
        $video_note = curl_file_create($file_name);
        $response = true;
    }

    if ((stripos($thumb, 'http') === false) and (stripos($thumb, '.') !== false)) {
        $file_name = realpath($thumb);
        $thumb = curl_file_create($file_name);
        $response = true;
    }

    $args = [
        'chat_id'    => $chat_id,
        'video_note' => $video_note,
    ];

    if (isset($duration)) {
        $args['duration'] = $duration;
    }
    if (isset($length)) {
        $args['length'] = $length;
    }
    if (isset($thumb)) {
        $args['thumb'] = $thumb;
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
        return curlRequest('sendVideoNote', $args);
    }
    return jsonPayload('sendVideoNote', $args);
}


//in $media send an associative array with type and id/link/path. Exaple: $media = [['type' => 'photo', 'media' => '1234'], ['type' => 'video', 'media' => 'https://site/video.mp4']] https://core.telegram.org/bots/api#inputmedia
function sendMediaGroup($chat_id, $media, $disable_notification = null, $reply_to_message_id = null)
{
    $media = json_encode($media);
    $args = [
        'chat_id' => $chat_id,
        'media'   => $media,
    ];

    if (isset($disable_notification)) {
        $args['disable_notification'] = $disable_notification;
    }
    if (isset($reply_to_message_id)) {
        $args['reply_to_message_id'] = $reply_to_message_id;
    }

    return curlRequest('sendMediaGroup', $args);
}


function sendContact(
    $chat_id,
    $phone_number,
    $first_name,
    $last_name = null,
    $vcard = null,
    $disable_notification = null,
    $reply_to_message_id = null,
    $reply_markup = null,
    $response = RESPONSE
) {
    $args = [
        'chat_id'      => $chat_id,
        'phone_number' => $phone_number,
        'first_name'   => $first_name,
    ];

    if (isset($last_name)) {
        $args['last_name'] = $last_name;
    }
    if (isset($vcard)) {
        $args['vcard'] = $vcard;
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
        return curlRequest('sendContact', $args);
    }
    return jsonPayload('sendContact', $args);
}
