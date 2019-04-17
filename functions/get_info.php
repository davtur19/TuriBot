<?php


function getUserProfilePhotos($user_id, $offset = null, $limit = null)
{
    $args = [
        'user_id' => $user_id,
    ];

    if (isset($offset)) {
        $args['offset'] = $offset;
    }
    if (isset($limit)) {
        $args['limit'] = $limit;
    }

    return curlRequest('getUserProfilePhotos', $args);
}


//$info = getFile('11111111'); $file_path = $info['file_path']; $download link = 'https://api.telegram.org/file/bot$info/$file_path' //max 20MB https://core.telegram.org/bots/api#getfile
function getFile($file_id)
{
    $args = [
        'file_id' => $file_id,
    ];

    return curlRequest('getFile', $args);
}


function getChat($chat_id)
{
    $args = [
        'chat_id' => $chat_id,
    ];

    return curlRequest('getChat', $args);
}
