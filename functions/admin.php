<?php


function kickChatMember($chat_id, $user_id, $until_date = null, $response = RESPONSE)
{
    $args = [
        'chat_id' => $chat_id,
        'user_id' => $user_id,
    ];

    if (isset($until_date)) {
        $args['until_date'] = $until_date;
    }

    if ($response === true) {
        return curlRequest('kickChatMember', $args);
    }
    return jsonPayload('kickChatMember', $args);
}


function unbanChatMember($chat_id, $user_id, $response = RESPONSE)
{
    $args = [
        'chat_id' => $chat_id,
        'user_id' => $user_id,
    ];

    if ($response === true) {
        return curlRequest('unbanChatMember', $args);
    }
    return jsonPayload('unbanChatMember', $args);
}


function restrictChatMember(
    $chat_id,
    $user_id,
    $permissions,
    $until_date = null,
    $response = RESPONSE
) {
    $args = [
        'chat_id'     => $chat_id,
        'user_id'     => $user_id,
        'permissions' => json_encode($permissions),
    ];

    if (isset($until_date)) {
        $args['until_date'] = $until_date;
    }

    if ($response === true) {
        return curlRequest('restrictChatMember', $args);
    }
    return jsonPayload('restrictChatMember', $args);
}


function promoteChatMember(
    $chat_id,
    $user_id,
    $can_change_info = null,
    $can_post_messages = null,
    $can_edit_messages = null,
    $can_delete_messages = null,
    $can_invite_users = null,
    $can_restrict_members = null,
    $can_pin_messages = null,
    $can_promote_members = null,
    $response = RESPONSE
) {
    $args = [
        'chat_id' => $chat_id,
        'user_id' => $user_id,
    ];

    if (isset($can_change_info)) {
        $args['can_change_info'] = $can_change_info;
    }
    if (isset($can_post_messages)) {
        $args['can_post_messages'] = $can_post_messages;
    }
    if (isset($can_edit_messages)) {
        $args['can_edit_messages'] = $can_edit_messages;
    }
    if (isset($can_delete_messages)) {
        $args['can_delete_messages'] = $can_delete_messages;
    }
    if (isset($can_invite_users)) {
        $args['can_invite_users'] = $can_invite_users;
    }
    if (isset($can_restrict_members)) {
        $args['can_restrict_members'] = $can_restrict_members;
    }
    if (isset($can_pin_messages)) {
        $args['can_pin_messages'] = $can_pin_messages;
    }
    if (isset($can_promote_members)) {
        $args['can_promote_members'] = $can_promote_members;
    }

    if ($response === true) {
        return curlRequest('promoteChatMember', $args);
    }
    return jsonPayload('promoteChatMember', $args);
}


function setChatPermissions($chat_id, $permissions, $response = RESPONSE)
{
    $args = [
        'chat_id'     => $chat_id,
        'permissions' => json_encode($permissions),
    ];

    if ($response === true) {
        return curlRequest('setChatPermissions', $args);
    }
    return jsonPayload('setChatPermissions', $args);
}


function exportChatInviteLink($chat_id)
{
    $args = [
        'chat_id' => $chat_id,
    ];

    return curlRequest('exportChatInviteLink', $args);
}


function setChatPhoto($chat_id, $photo)
{
    $file_name = realpath($photo);
    $photo = curl_file_create($file_name);

    $args = [
        'chat_id' => $chat_id,
        'photo'   => $photo,
    ];

    return curlRequest('setChatPhoto', $args);
}


function deleteChatPhoto($chat_id, $response = RESPONSE)
{
    $args = [
        'chat_id' => $chat_id,
    ];

    if ($response === true) {
        return curlRequest('deleteChatPhoto', $args);
    }
    return jsonPayload('deleteChatPhoto', $args);
}


function setChatTitle($chat_id, $title, $response = RESPONSE)
{
    $args = [
        'chat_id' => $chat_id,
        'title'   => $title,
    ];

    if ($response === true) {
        return curlRequest('setChatTitle', $args);
    }
    return jsonPayload('setChatTitle', $args);
}


function setChatDescription($chat_id, $description = null, $response = RESPONSE)
{
    $args = [
        'chat_id' => $chat_id,
    ];

    if (isset($description)) {
        $args['description'] = $description;
    }

    if ($response === true) {
        return curlRequest('setChatDescription', $args);
    }
    return jsonPayload('setChatDescription', $args);
}


function pinChatMessage($chat_id, $message_id, $disable_notification = null, $response = RESPONSE)
{
    $args = [
        'chat_id'    => $chat_id,
        'message_id' => $message_id,
    ];

    if (isset($disable_notification)) {
        $args['disable_notification'] = $disable_notification;
    }

    if ($response === true) {
        return curlRequest('pinChatMessage', $args);
    }
    return jsonPayload('pinChatMessage', $args);
}


function unpinChatMessage($chat_id, $response = RESPONSE)
{
    $args = [
        'chat_id' => $chat_id,
    ];

    if ($response === true) {
        return curlRequest('unpinChatMessage', $args);
    }
    return jsonPayload('unpinChatMessage', $args);
}


function leaveChat($chat_id, $response = RESPONSE)
{
    $args = [
        'chat_id' => $chat_id,
    ];

    if ($response === true) {
        return curlRequest('leaveChat', $args);
    }
    return jsonPayload('leaveChat', $args);
}


function getChatAdministrators($chat_id)
{
    $args = [
        'chat_id' => $chat_id,
    ];

    return curlRequest('getChatAdministrators', $args);
}


function getChatMembersCount($chat_id)
{
    $args = [
        'chat_id' => $chat_id,
    ];

    return curlRequest('getChatMembersCount', $args);
}


function getChatMember($chat_id, $user_id)
{
    $args = [
        'chat_id' => $chat_id,
        'user_id' => $user_id,
    ];

    return curlRequest('getChatMember', $args);
}
