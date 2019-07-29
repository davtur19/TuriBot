<?php /** @noinspection PhpOptionalBeforeRequiredParametersInspection */

//functions automatically generated from https://core.telegram.org/bots/api

namespace TuriBot;

abstract Class Api implements ApiInterface
{

    public function getUpdates(
        int $offset = null,
        int $limit = null,
        int $timeout = null,
        array $allowed_updates = null
    ) {
        $args = [];

        if ($offset !== null) {
            $args['offset'] = $offset;
        }

        if ($limit !== null) {
            $args['limit'] = $limit;
        }

        if ($timeout !== null) {
            $args['timeout'] = $timeout;
        }

        if ($allowed_updates !== null) {
            $args['allowed_updates'] = $allowed_updates;
        }

        return $this->Request('getUpdates', $args);
    }

    public function setWebhook(
        string $url,
        \CURLFile $certificate = null,
        int $max_connections = null,
        array $allowed_updates = null
    ) {
        $args = [
            'url' => $url
        ];

        if ($certificate !== null) {
            $args['certificate'] = $certificate;
        }

        if ($max_connections !== null) {
            $args['max_connections'] = $max_connections;
        }

        if ($allowed_updates !== null) {
            $args['allowed_updates'] = $allowed_updates;
        }

        return $this->Request('setWebhook', $args);
    }

    public function deleteWebhook()
    {
        return $this->Request('deleteWebhook', []);
    }

    public function getWebhookInfo()
    {
        return $this->Request('getWebhookInfo', []);
    }

    public function getMe()
    {
        return $this->Request('getMe', []);
    }

    public function sendMessage(
        $chat_id,
        string $text,
        string $parse_mode = null,
        bool $disable_web_page_preview = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id' => $chat_id,
            'text'    => $text
        ];

        if ($parse_mode !== null) {
            $args['parse_mode'] = $parse_mode;
        }

        if ($disable_web_page_preview !== null) {
            $args['disable_web_page_preview'] = $disable_web_page_preview;
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

        return $this->Request('sendMessage', $args);
    }

    public function forwardMessage(
        $chat_id,
        $from_chat_id,
        bool $disable_notification = null,
        int $message_id
    ) {
        $args = [
            'chat_id'      => $chat_id,
            'from_chat_id' => $from_chat_id,
            'message_id'   => $message_id
        ];

        if ($disable_notification !== null) {
            $args['disable_notification'] = $disable_notification;
        }

        return $this->Request('forwardMessage', $args);
    }

    public function sendPhoto(
        $chat_id,
        $photo,
        string $caption = null,
        string $parse_mode = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id' => $chat_id,
            'photo'   => $photo
        ];

        if ($caption !== null) {
            $args['caption'] = $caption;
        }

        if ($parse_mode !== null) {
            $args['parse_mode'] = $parse_mode;
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

        return $this->Request('sendPhoto', $args);
    }

    public function sendAudio(
        $chat_id,
        $audio,
        string $caption = null,
        string $parse_mode = null,
        int $duration = null,
        string $performer = null,
        string $title = null,
        $thumb = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id' => $chat_id,
            'audio'   => $audio
        ];

        if ($caption !== null) {
            $args['caption'] = $caption;
        }

        if ($parse_mode !== null) {
            $args['parse_mode'] = $parse_mode;
        }

        if ($duration !== null) {
            $args['duration'] = $duration;
        }

        if ($performer !== null) {
            $args['performer'] = $performer;
        }

        if ($title !== null) {
            $args['title'] = $title;
        }

        if ($thumb !== null) {
            $args['thumb'] = $thumb;
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

        return $this->Request('sendAudio', $args);
    }

    public function sendDocument(
        $chat_id,
        $document,
        $thumb = null,
        string $caption = null,
        string $parse_mode = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id'  => $chat_id,
            'document' => $document
        ];

        if ($thumb !== null) {
            $args['thumb'] = $thumb;
        }

        if ($caption !== null) {
            $args['caption'] = $caption;
        }

        if ($parse_mode !== null) {
            $args['parse_mode'] = $parse_mode;
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

        return $this->Request('sendDocument', $args);
    }

    public function sendVideo(
        $chat_id,
        $video,
        int $duration = null,
        int $width = null,
        int $height = null,
        $thumb = null,
        string $caption = null,
        string $parse_mode = null,
        bool $supports_streaming = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id' => $chat_id,
            'video'   => $video
        ];

        if ($duration !== null) {
            $args['duration'] = $duration;
        }

        if ($width !== null) {
            $args['width'] = $width;
        }

        if ($height !== null) {
            $args['height'] = $height;
        }

        if ($thumb !== null) {
            $args['thumb'] = $thumb;
        }

        if ($caption !== null) {
            $args['caption'] = $caption;
        }

        if ($parse_mode !== null) {
            $args['parse_mode'] = $parse_mode;
        }

        if ($supports_streaming !== null) {
            $args['supports_streaming'] = $supports_streaming;
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

        return $this->Request('sendVideo', $args);
    }

    public function sendAnimation(
        $chat_id,
        $animation,
        int $duration = null,
        int $width = null,
        int $height = null,
        $thumb = null,
        string $caption = null,
        string $parse_mode = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id'   => $chat_id,
            'animation' => $animation
        ];

        if ($duration !== null) {
            $args['duration'] = $duration;
        }

        if ($width !== null) {
            $args['width'] = $width;
        }

        if ($height !== null) {
            $args['height'] = $height;
        }

        if ($thumb !== null) {
            $args['thumb'] = $thumb;
        }

        if ($caption !== null) {
            $args['caption'] = $caption;
        }

        if ($parse_mode !== null) {
            $args['parse_mode'] = $parse_mode;
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

        return $this->Request('sendAnimation', $args);
    }

    public function sendVoice(
        $chat_id,
        $voice,
        string $caption = null,
        string $parse_mode = null,
        int $duration = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id' => $chat_id,
            'voice'   => $voice
        ];

        if ($caption !== null) {
            $args['caption'] = $caption;
        }

        if ($parse_mode !== null) {
            $args['parse_mode'] = $parse_mode;
        }

        if ($duration !== null) {
            $args['duration'] = $duration;
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

        return $this->Request('sendVoice', $args);
    }

    public function sendVideoNote(
        $chat_id,
        $video_note,
        int $duration = null,
        int $length = null,
        $thumb = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id'    => $chat_id,
            'video_note' => $video_note
        ];

        if ($duration !== null) {
            $args['duration'] = $duration;
        }

        if ($length !== null) {
            $args['length'] = $length;
        }

        if ($thumb !== null) {
            $args['thumb'] = $thumb;
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

        return $this->Request('sendVideoNote', $args);
    }

    public function sendMediaGroup(
        $chat_id,
        $media,
        bool $disable_notification = null,
        int $reply_to_message_id = null
    ) {
        $args = [
            'chat_id' => $chat_id,
            'media'   => $media
        ];

        if ($disable_notification !== null) {
            $args['disable_notification'] = $disable_notification;
        }

        if ($reply_to_message_id !== null) {
            $args['reply_to_message_id'] = $reply_to_message_id;
        }

        return $this->Request('sendMediaGroup', $args);
    }

    public function sendLocation(
        $chat_id,
        float $latitude,
        float $longitude,
        int $live_period = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id'   => $chat_id,
            'latitude'  => $latitude,
            'longitude' => $longitude
        ];

        if ($live_period !== null) {
            $args['live_period'] = $live_period;
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

        return $this->Request('sendLocation', $args);
    }

    public function editMessageLiveLocation(
        $chat_id = null,
        int $message_id = null,
        string $inline_message_id = null,
        float $latitude,
        float $longitude,
        array $reply_markup = null
    ) {
        $args = [
            'latitude'  => $latitude,
            'longitude' => $longitude
        ];

        if ($chat_id !== null) {
            $args['chat_id'] = $chat_id;
        }

        if ($message_id !== null) {
            $args['message_id'] = $message_id;
        }

        if ($inline_message_id !== null) {
            $args['inline_message_id'] = $inline_message_id;
        }

        if ($reply_markup !== null) {
            $args['reply_markup'] = json_encode($reply_markup);
        }

        return $this->Request('editMessageLiveLocation', $args);
    }

    public function stopMessageLiveLocation(
        $chat_id = null,
        int $message_id = null,
        string $inline_message_id = null,
        array $reply_markup = null
    ) {
        $args = [];

        if ($chat_id !== null) {
            $args['chat_id'] = $chat_id;
        }

        if ($message_id !== null) {
            $args['message_id'] = $message_id;
        }

        if ($inline_message_id !== null) {
            $args['inline_message_id'] = $inline_message_id;
        }

        if ($reply_markup !== null) {
            $args['reply_markup'] = json_encode($reply_markup);
        }

        return $this->Request('stopMessageLiveLocation', $args);
    }

    public function sendVenue(
        $chat_id,
        float $latitude,
        float $longitude,
        string $title,
        string $address,
        string $foursquare_id = null,
        string $foursquare_type = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id'   => $chat_id,
            'latitude'  => $latitude,
            'longitude' => $longitude,
            'title'     => $title,
            'address'   => $address
        ];

        if ($foursquare_id !== null) {
            $args['foursquare_id'] = $foursquare_id;
        }

        if ($foursquare_type !== null) {
            $args['foursquare_type'] = $foursquare_type;
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

        return $this->Request('sendVenue', $args);
    }

    public function sendContact(
        $chat_id,
        string $phone_number,
        string $first_name,
        string $last_name = null,
        string $vcard = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id'      => $chat_id,
            'phone_number' => $phone_number,
            'first_name'   => $first_name
        ];

        if ($last_name !== null) {
            $args['last_name'] = $last_name;
        }

        if ($vcard !== null) {
            $args['vcard'] = $vcard;
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

        return $this->Request('sendContact', $args);
    }

    public function sendPoll(
        $chat_id,
        string $question,
        array $options,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        array $reply_markup = null
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

        return $this->Request('sendPoll', $args);
    }

    public function sendChatAction(
        $chat_id,
        string $action
    ) {
        $args = [
            'chat_id' => $chat_id,
            'action'  => $action
        ];

        return $this->Request('sendChatAction', $args);
    }

    public function getUserProfilePhotos(
        int $user_id,
        int $offset = null,
        int $limit = null
    ) {
        $args = [
            'user_id' => $user_id
        ];

        if ($offset !== null) {
            $args['offset'] = $offset;
        }

        if ($limit !== null) {
            $args['limit'] = $limit;
        }

        return $this->Request('getUserProfilePhotos', $args);
    }

    public function getFile(
        string $file_id
    ) {
        $args = [
            'file_id' => $file_id
        ];

        return $this->Request('getFile', $args);
    }

    public function kickChatMember(
        $chat_id,
        int $user_id,
        int $until_date = null
    ) {
        $args = [
            'chat_id' => $chat_id,
            'user_id' => $user_id
        ];

        if ($until_date !== null) {
            $args['until_date'] = $until_date;
        }

        return $this->Request('kickChatMember', $args);
    }

    public function unbanChatMember(
        $chat_id,
        int $user_id
    ) {
        $args = [
            'chat_id' => $chat_id,
            'user_id' => $user_id
        ];

        return $this->Request('unbanChatMember', $args);
    }

    public function restrictChatMember(
        $chat_id,
        int $user_id,
        array $permissions,
        int $until_date = null
    ) {
        $args = [
            'chat_id'     => $chat_id,
            'user_id'     => $user_id,
            'permissions' => json_encode($permissions)
        ];

        if ($until_date !== null) {
            $args['until_date'] = $until_date;
        }

        return $this->Request('restrictChatMember', $args);
    }

    public function promoteChatMember(
        $chat_id,
        int $user_id,
        bool $can_change_info = null,
        bool $can_post_messages = null,
        bool $can_edit_messages = null,
        bool $can_delete_messages = null,
        bool $can_invite_users = null,
        bool $can_restrict_members = null,
        bool $can_pin_messages = null,
        bool $can_promote_members = null
    ) {
        $args = [
            'chat_id' => $chat_id,
            'user_id' => $user_id
        ];

        if ($can_change_info !== null) {
            $args['can_change_info'] = $can_change_info;
        }

        if ($can_post_messages !== null) {
            $args['can_post_messages'] = $can_post_messages;
        }

        if ($can_edit_messages !== null) {
            $args['can_edit_messages'] = $can_edit_messages;
        }

        if ($can_delete_messages !== null) {
            $args['can_delete_messages'] = $can_delete_messages;
        }

        if ($can_invite_users !== null) {
            $args['can_invite_users'] = $can_invite_users;
        }

        if ($can_restrict_members !== null) {
            $args['can_restrict_members'] = $can_restrict_members;
        }

        if ($can_pin_messages !== null) {
            $args['can_pin_messages'] = $can_pin_messages;
        }

        if ($can_promote_members !== null) {
            $args['can_promote_members'] = $can_promote_members;
        }

        return $this->Request('promoteChatMember', $args);
    }

    public function setChatPermissions(
        $chat_id,
        array $permissions
    ) {
        $args = [
            'chat_id'     => $chat_id,
            'permissions' => json_encode($permissions)
        ];

        return $this->Request('setChatPermissions', $args);
    }

    public function exportChatInviteLink(
        $chat_id
    ) {
        $args = [
            'chat_id' => $chat_id
        ];

        return $this->Request('exportChatInviteLink', $args);
    }

    public function setChatPhoto(
        $chat_id,
        \CURLFile $photo
    ) {
        $args = [
            'chat_id' => $chat_id,
            'photo'   => $photo
        ];

        return $this->Request('setChatPhoto', $args);
    }

    public function deleteChatPhoto(
        $chat_id
    ) {
        $args = [
            'chat_id' => $chat_id
        ];

        return $this->Request('deleteChatPhoto', $args);
    }

    public function setChatTitle(
        $chat_id,
        string $title
    ) {
        $args = [
            'chat_id' => $chat_id,
            'title'   => $title
        ];

        return $this->Request('setChatTitle', $args);
    }

    public function setChatDescription(
        $chat_id,
        string $description = null
    ) {
        $args = [
            'chat_id' => $chat_id
        ];

        if ($description !== null) {
            $args['description'] = $description;
        }

        return $this->Request('setChatDescription', $args);
    }

    public function pinChatMessage(
        $chat_id,
        int $message_id,
        bool $disable_notification = null
    ) {
        $args = [
            'chat_id'    => $chat_id,
            'message_id' => $message_id
        ];

        if ($disable_notification !== null) {
            $args['disable_notification'] = $disable_notification;
        }

        return $this->Request('pinChatMessage', $args);
    }

    public function unpinChatMessage(
        $chat_id
    ) {
        $args = [
            'chat_id' => $chat_id
        ];

        return $this->Request('unpinChatMessage', $args);
    }

    public function leaveChat(
        $chat_id
    ) {
        $args = [
            'chat_id' => $chat_id
        ];

        return $this->Request('leaveChat', $args);
    }

    public function getChat(
        $chat_id
    ) {
        $args = [
            'chat_id' => $chat_id
        ];

        return $this->Request('getChat', $args);
    }

    public function getChatAdministrators(
        $chat_id
    ) {
        $args = [
            'chat_id' => $chat_id
        ];

        return $this->Request('getChatAdministrators', $args);
    }

    public function getChatMembersCount(
        $chat_id
    ) {
        $args = [
            'chat_id' => $chat_id
        ];

        return $this->Request('getChatMembersCount', $args);
    }

    public function getChatMember(
        $chat_id,
        int $user_id
    ) {
        $args = [
            'chat_id' => $chat_id,
            'user_id' => $user_id
        ];

        return $this->Request('getChatMember', $args);
    }

    public function setChatStickerSet(
        $chat_id,
        string $sticker_set_name
    ) {
        $args = [
            'chat_id'          => $chat_id,
            'sticker_set_name' => $sticker_set_name
        ];

        return $this->Request('setChatStickerSet', $args);
    }

    public function deleteChatStickerSet(
        $chat_id
    ) {
        $args = [
            'chat_id' => $chat_id
        ];

        return $this->Request('deleteChatStickerSet', $args);
    }

    public function answerCallbackQuery(
        string $callback_query_id,
        string $text = null,
        bool $show_alert = null,
        string $url = null,
        int $cache_time = null
    ) {
        $args = [
            'callback_query_id' => $callback_query_id
        ];

        if ($text !== null) {
            $args['text'] = $text;
        }

        if ($show_alert !== null) {
            $args['show_alert'] = $show_alert;
        }

        if ($url !== null) {
            $args['url'] = $url;
        }

        if ($cache_time !== null) {
            $args['cache_time'] = $cache_time;
        }

        return $this->Request('answerCallbackQuery', $args);
    }

    public function editMessageText(
        $chat_id = null,
        int $message_id = null,
        string $inline_message_id = null,
        string $text,
        string $parse_mode = null,
        bool $disable_web_page_preview = null,
        array $reply_markup = null
    ) {
        $args = [
            'text' => $text
        ];

        if ($chat_id !== null) {
            $args['chat_id'] = $chat_id;
        }

        if ($message_id !== null) {
            $args['message_id'] = $message_id;
        }

        if ($inline_message_id !== null) {
            $args['inline_message_id'] = $inline_message_id;
        }

        if ($parse_mode !== null) {
            $args['parse_mode'] = $parse_mode;
        }

        if ($disable_web_page_preview !== null) {
            $args['disable_web_page_preview'] = $disable_web_page_preview;
        }

        if ($reply_markup !== null) {
            $args['reply_markup'] = json_encode($reply_markup);
        }

        return $this->Request('editMessageText', $args);
    }

    public function editMessageCaption(
        $chat_id = null,
        int $message_id = null,
        string $inline_message_id = null,
        string $caption = null,
        string $parse_mode = null,
        array $reply_markup = null
    ) {
        $args = [];

        if ($chat_id !== null) {
            $args['chat_id'] = $chat_id;
        }

        if ($message_id !== null) {
            $args['message_id'] = $message_id;
        }

        if ($inline_message_id !== null) {
            $args['inline_message_id'] = $inline_message_id;
        }

        if ($caption !== null) {
            $args['caption'] = $caption;
        }

        if ($parse_mode !== null) {
            $args['parse_mode'] = $parse_mode;
        }

        if ($reply_markup !== null) {
            $args['reply_markup'] = json_encode($reply_markup);
        }

        return $this->Request('editMessageCaption', $args);
    }

    public function editMessageMedia(
        $chat_id = null,
        int $message_id = null,
        string $inline_message_id = null,
        $media,
        array $reply_markup = null
    ) {
        $args = [
            'media' => $media
        ];

        if ($chat_id !== null) {
            $args['chat_id'] = $chat_id;
        }

        if ($message_id !== null) {
            $args['message_id'] = $message_id;
        }

        if ($inline_message_id !== null) {
            $args['inline_message_id'] = $inline_message_id;
        }

        if ($reply_markup !== null) {
            $args['reply_markup'] = json_encode($reply_markup);
        }

        return $this->Request('editMessageMedia', $args);
    }

    public function editMessageReplyMarkup(
        $chat_id = null,
        int $message_id = null,
        string $inline_message_id = null,
        array $reply_markup = null
    ) {
        $args = [];

        if ($chat_id !== null) {
            $args['chat_id'] = $chat_id;
        }

        if ($message_id !== null) {
            $args['message_id'] = $message_id;
        }

        if ($inline_message_id !== null) {
            $args['inline_message_id'] = $inline_message_id;
        }

        if ($reply_markup !== null) {
            $args['reply_markup'] = json_encode($reply_markup);
        }

        return $this->Request('editMessageReplyMarkup', $args);
    }

    public function stopPoll(
        $chat_id,
        int $message_id,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id'    => $chat_id,
            'message_id' => $message_id
        ];

        if ($reply_markup !== null) {
            $args['reply_markup'] = json_encode($reply_markup);
        }

        return $this->Request('stopPoll', $args);
    }

    public function deleteMessage(
        $chat_id,
        int $message_id
    ) {
        $args = [
            'chat_id'    => $chat_id,
            'message_id' => $message_id
        ];

        return $this->Request('deleteMessage', $args);
    }

    public function sendSticker(
        $chat_id,
        $sticker,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id' => $chat_id,
            'sticker' => $sticker
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

        return $this->Request('sendSticker', $args);
    }

    public function getStickerSet(
        string $name
    ) {
        $args = [
            'name' => $name
        ];

        return $this->Request('getStickerSet', $args);
    }

    public function uploadStickerFile(
        int $user_id,
        \CURLFile $png_sticker
    ) {
        $args = [
            'user_id'     => $user_id,
            'png_sticker' => $png_sticker
        ];

        return $this->Request('uploadStickerFile', $args);
    }

    public function createNewStickerSet(
        int $user_id,
        string $name,
        string $title,
        $png_sticker,
        string $emojis,
        bool $contains_masks = null,
        $mask_position = null
    ) {
        $args = [
            'user_id'     => $user_id,
            'name'        => $name,
            'title'       => $title,
            'png_sticker' => $png_sticker,
            'emojis'      => $emojis
        ];

        if ($contains_masks !== null) {
            $args['contains_masks'] = $contains_masks;
        }

        if ($mask_position !== null) {
            $args['mask_position'] = $mask_position;
        }

        return $this->Request('createNewStickerSet', $args);
    }

    public function addStickerToSet(
        int $user_id,
        string $name,
        $png_sticker,
        string $emojis,
        $mask_position = null
    ) {
        $args = [
            'user_id'     => $user_id,
            'name'        => $name,
            'png_sticker' => $png_sticker,
            'emojis'      => $emojis
        ];

        if ($mask_position !== null) {
            $args['mask_position'] = $mask_position;
        }

        return $this->Request('addStickerToSet', $args);
    }

    public function setStickerPositionInSet(
        string $sticker,
        int $position
    ) {
        $args = [
            'sticker'  => $sticker,
            'position' => $position
        ];

        return $this->Request('setStickerPositionInSet', $args);
    }

    public function deleteStickerFromSet(
        string $sticker
    ) {
        $args = [
            'sticker' => $sticker
        ];

        return $this->Request('deleteStickerFromSet', $args);
    }

    public function answerInlineQuery(
        string $inline_query_id,
        $results,
        int $cache_time = null,
        bool $is_personal = null,
        string $next_offset = null,
        string $switch_pm_text = null,
        string $switch_pm_parameter = null
    ) {
        $args = [
            'inline_query_id' => $inline_query_id,
            'results'         => $results
        ];

        if ($cache_time !== null) {
            $args['cache_time'] = $cache_time;
        }

        if ($is_personal !== null) {
            $args['is_personal'] = $is_personal;
        }

        if ($next_offset !== null) {
            $args['next_offset'] = $next_offset;
        }

        if ($switch_pm_text !== null) {
            $args['switch_pm_text'] = $switch_pm_text;
        }

        if ($switch_pm_parameter !== null) {
            $args['switch_pm_parameter'] = $switch_pm_parameter;
        }

        return $this->Request('answerInlineQuery', $args);
    }

    public function sendInvoice(
        int $chat_id,
        string $title,
        string $description,
        string $payload,
        string $provider_token,
        string $start_parameter,
        string $currency,
        $prices,
        string $provider_data = null,
        string $photo_url = null,
        int $photo_size = null,
        int $photo_width = null,
        int $photo_height = null,
        bool $need_name = null,
        bool $need_phone_number = null,
        bool $need_email = null,
        bool $need_shipping_address = null,
        bool $send_phone_number_to_provider = null,
        bool $send_email_to_provider = null,
        bool $is_flexible = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id'         => $chat_id,
            'title'           => $title,
            'description'     => $description,
            'payload'         => $payload,
            'provider_token'  => $provider_token,
            'start_parameter' => $start_parameter,
            'currency'        => $currency,
            'prices'          => $prices
        ];

        if ($provider_data !== null) {
            $args['provider_data'] = $provider_data;
        }

        if ($photo_url !== null) {
            $args['photo_url'] = $photo_url;
        }

        if ($photo_size !== null) {
            $args['photo_size'] = $photo_size;
        }

        if ($photo_width !== null) {
            $args['photo_width'] = $photo_width;
        }

        if ($photo_height !== null) {
            $args['photo_height'] = $photo_height;
        }

        if ($need_name !== null) {
            $args['need_name'] = $need_name;
        }

        if ($need_phone_number !== null) {
            $args['need_phone_number'] = $need_phone_number;
        }

        if ($need_email !== null) {
            $args['need_email'] = $need_email;
        }

        if ($need_shipping_address !== null) {
            $args['need_shipping_address'] = $need_shipping_address;
        }

        if ($send_phone_number_to_provider !== null) {
            $args['send_phone_number_to_provider'] = $send_phone_number_to_provider;
        }

        if ($send_email_to_provider !== null) {
            $args['send_email_to_provider'] = $send_email_to_provider;
        }

        if ($is_flexible !== null) {
            $args['is_flexible'] = $is_flexible;
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

        return $this->Request('sendInvoice', $args);
    }

    public function answerShippingQuery(
        string $shipping_query_id,
        bool $ok,
        $shipping_options = null,
        string $error_message = null
    ) {
        $args = [
            'shipping_query_id' => $shipping_query_id,
            'ok'                => $ok
        ];

        if ($shipping_options !== null) {
            $args['shipping_options'] = $shipping_options;
        }

        if ($error_message !== null) {
            $args['error_message'] = $error_message;
        }

        return $this->Request('answerShippingQuery', $args);
    }

    public function answerPreCheckoutQuery(
        string $pre_checkout_query_id,
        bool $ok,
        string $error_message = null
    ) {
        $args = [
            'pre_checkout_query_id' => $pre_checkout_query_id,
            'ok'                    => $ok
        ];

        if ($error_message !== null) {
            $args['error_message'] = $error_message;
        }

        return $this->Request('answerPreCheckoutQuery', $args);
    }

    public function setPassportDataErrors(
        int $user_id,
        $errors
    ) {
        $args = [
            'user_id' => $user_id,
            'errors'  => $errors
        ];

        return $this->Request('setPassportDataErrors', $args);
    }

    public function sendGame(
        int $chat_id,
        string $game_short_name,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id'         => $chat_id,
            'game_short_name' => $game_short_name
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

        return $this->Request('sendGame', $args);
    }

    public function setGameScore(
        int $user_id,
        int $score,
        bool $force = null,
        bool $disable_edit_message = null,
        int $chat_id = null,
        int $message_id = null,
        string $inline_message_id = null
    ) {
        $args = [
            'user_id' => $user_id,
            'score'   => $score
        ];

        if ($force !== null) {
            $args['force'] = $force;
        }

        if ($disable_edit_message !== null) {
            $args['disable_edit_message'] = $disable_edit_message;
        }

        if ($chat_id !== null) {
            $args['chat_id'] = $chat_id;
        }

        if ($message_id !== null) {
            $args['message_id'] = $message_id;
        }

        if ($inline_message_id !== null) {
            $args['inline_message_id'] = $inline_message_id;
        }

        return $this->Request('setGameScore', $args);
    }

    public function getGameHighScores(
        int $user_id,
        int $chat_id = null,
        int $message_id = null,
        string $inline_message_id = null
    ) {
        $args = [
            'user_id' => $user_id
        ];

        if ($chat_id !== null) {
            $args['chat_id'] = $chat_id;
        }

        if ($message_id !== null) {
            $args['message_id'] = $message_id;
        }

        if ($inline_message_id !== null) {
            $args['inline_message_id'] = $inline_message_id;
        }

        return $this->Request('getGameHighScores', $args);
    }


}