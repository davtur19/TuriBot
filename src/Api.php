<?php /** @noinspection PhpOptionalBeforeRequiredParametersInspection */

//functions automatically generated from https://core.telegram.org/bots/api
//generator source code https://github.com/davtur19/TuriBotGen

namespace TuriBot;

abstract class Api implements ApiInterface
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
            $args['allowed_updates'] = json_encode($allowed_updates);
        }

        return $this->Request('getUpdates', $args);
    }

    public function setWebhook(
        string $url,
        \CURLFile $certificate = null,
        string $ip_address = null,
        int $max_connections = null,
        array $allowed_updates = null,
        bool $drop_pending_updates = null
    ) {
        $args = [
            'url' => $url
        ];

        if ($certificate !== null) {
            $args['certificate'] = $certificate;
        }

        if ($ip_address !== null) {
            $args['ip_address'] = $ip_address;
        }

        if ($max_connections !== null) {
            $args['max_connections'] = $max_connections;
        }

        if ($allowed_updates !== null) {
            $args['allowed_updates'] = json_encode($allowed_updates);
        }

        if ($drop_pending_updates !== null) {
            $args['drop_pending_updates'] = $drop_pending_updates;
        }

        return $this->Request('setWebhook', $args);
    }

    public function deleteWebhook(
        bool $drop_pending_updates = null
    ) {
        $args = [];

        if ($drop_pending_updates !== null) {
            $args['drop_pending_updates'] = $drop_pending_updates;
        }

        return $this->Request('deleteWebhook', $args);
    }

    public function getWebhookInfo()
    {
        return $this->Request('getWebhookInfo', []);
    }

    public function getMe()
    {
        return $this->Request('getMe', []);
    }

    public function logOut()
    {
        return $this->Request('logOut', []);
    }

    public function close()
    {
        return $this->Request('close', []);
    }

    public function sendMessage(
        $chat_id,
        string $text,
        string $parse_mode = null,
        array $entities = null,
        bool $disable_web_page_preview = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id' => $chat_id,
            'text'    => $text
        ];

        if ($parse_mode !== null) {
            $args['parse_mode'] = $parse_mode;
        }

        if ($entities !== null) {
            $args['entities'] = json_encode($entities);
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

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
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

    public function copyMessage(
        $chat_id,
        $from_chat_id,
        int $message_id,
        string $caption = null,
        string $parse_mode = null,
        array $caption_entities = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id'      => $chat_id,
            'from_chat_id' => $from_chat_id,
            'message_id'   => $message_id
        ];

        if ($caption !== null) {
            $args['caption'] = $caption;
        }

        if ($parse_mode !== null) {
            $args['parse_mode'] = $parse_mode;
        }

        if ($caption_entities !== null) {
            $args['caption_entities'] = json_encode($caption_entities);
        }

        if ($disable_notification !== null) {
            $args['disable_notification'] = $disable_notification;
        }

        if ($reply_to_message_id !== null) {
            $args['reply_to_message_id'] = $reply_to_message_id;
        }

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
        }

        if ($reply_markup !== null) {
            $args['reply_markup'] = json_encode($reply_markup);
        }

        return $this->Request('copyMessage', $args);
    }

    public function sendPhoto(
        $chat_id,
        $photo,
        string $caption = null,
        string $parse_mode = null,
        array $caption_entities = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
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

        if ($caption_entities !== null) {
            $args['caption_entities'] = json_encode($caption_entities);
        }

        if ($disable_notification !== null) {
            $args['disable_notification'] = $disable_notification;
        }

        if ($reply_to_message_id !== null) {
            $args['reply_to_message_id'] = $reply_to_message_id;
        }

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
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
        array $caption_entities = null,
        int $duration = null,
        string $performer = null,
        string $title = null,
        $thumb = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
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

        if ($caption_entities !== null) {
            $args['caption_entities'] = json_encode($caption_entities);
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

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
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
        array $caption_entities = null,
        bool $disable_content_type_detection = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
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

        if ($caption_entities !== null) {
            $args['caption_entities'] = json_encode($caption_entities);
        }

        if ($disable_content_type_detection !== null) {
            $args['disable_content_type_detection'] = $disable_content_type_detection;
        }

        if ($disable_notification !== null) {
            $args['disable_notification'] = $disable_notification;
        }

        if ($reply_to_message_id !== null) {
            $args['reply_to_message_id'] = $reply_to_message_id;
        }

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
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
        array $caption_entities = null,
        bool $supports_streaming = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
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

        if ($caption_entities !== null) {
            $args['caption_entities'] = json_encode($caption_entities);
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

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
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
        array $caption_entities = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
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

        if ($caption_entities !== null) {
            $args['caption_entities'] = json_encode($caption_entities);
        }

        if ($disable_notification !== null) {
            $args['disable_notification'] = $disable_notification;
        }

        if ($reply_to_message_id !== null) {
            $args['reply_to_message_id'] = $reply_to_message_id;
        }

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
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
        array $caption_entities = null,
        int $duration = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
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

        if ($caption_entities !== null) {
            $args['caption_entities'] = json_encode($caption_entities);
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

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
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
        bool $allow_sending_without_reply = null,
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

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
        }

        if ($reply_markup !== null) {
            $args['reply_markup'] = json_encode($reply_markup);
        }

        return $this->Request('sendVideoNote', $args);
    }

    public function sendMediaGroup(
        $chat_id,
        array $media,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null
    ) {
        $args = [
            'chat_id' => $chat_id,
            'media'   => json_encode($media)
        ];

        if ($disable_notification !== null) {
            $args['disable_notification'] = $disable_notification;
        }

        if ($reply_to_message_id !== null) {
            $args['reply_to_message_id'] = $reply_to_message_id;
        }

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
        }

        return $this->Request('sendMediaGroup', $args);
    }

    public function sendLocation(
        $chat_id,
        float $latitude,
        float $longitude,
        float $horizontal_accuracy = null,
        int $live_period = null,
        int $heading = null,
        int $proximity_alert_radius = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id'   => $chat_id,
            'latitude'  => $latitude,
            'longitude' => $longitude
        ];

        if ($horizontal_accuracy !== null) {
            $args['horizontal_accuracy'] = $horizontal_accuracy;
        }

        if ($live_period !== null) {
            $args['live_period'] = $live_period;
        }

        if ($heading !== null) {
            $args['heading'] = $heading;
        }

        if ($proximity_alert_radius !== null) {
            $args['proximity_alert_radius'] = $proximity_alert_radius;
        }

        if ($disable_notification !== null) {
            $args['disable_notification'] = $disable_notification;
        }

        if ($reply_to_message_id !== null) {
            $args['reply_to_message_id'] = $reply_to_message_id;
        }

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
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
        float $horizontal_accuracy = null,
        int $heading = null,
        int $proximity_alert_radius = null,
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

        if ($horizontal_accuracy !== null) {
            $args['horizontal_accuracy'] = $horizontal_accuracy;
        }

        if ($heading !== null) {
            $args['heading'] = $heading;
        }

        if ($proximity_alert_radius !== null) {
            $args['proximity_alert_radius'] = $proximity_alert_radius;
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
        string $google_place_id = null,
        string $google_place_type = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
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

        if ($google_place_id !== null) {
            $args['google_place_id'] = $google_place_id;
        }

        if ($google_place_type !== null) {
            $args['google_place_type'] = $google_place_type;
        }

        if ($disable_notification !== null) {
            $args['disable_notification'] = $disable_notification;
        }

        if ($reply_to_message_id !== null) {
            $args['reply_to_message_id'] = $reply_to_message_id;
        }

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
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
        bool $allow_sending_without_reply = null,
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

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
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
        bool $is_anonymous = null,
        string $type = null,
        bool $allows_multiple_answers = null,
        int $correct_option_id = null,
        string $explanation = null,
        string $explanation_parse_mode = null,
        array $explanation_entities = null,
        int $open_period = null,
        int $close_date = null,
        bool $is_closed = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id'  => $chat_id,
            'question' => $question,
            'options'  => json_encode($options)
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

        if ($explanation !== null) {
            $args['explanation'] = $explanation;
        }

        if ($explanation_parse_mode !== null) {
            $args['explanation_parse_mode'] = $explanation_parse_mode;
        }

        if ($explanation_entities !== null) {
            $args['explanation_entities'] = json_encode($explanation_entities);
        }

        if ($open_period !== null) {
            $args['open_period'] = $open_period;
        }

        if ($close_date !== null) {
            $args['close_date'] = $close_date;
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

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
        }

        if ($reply_markup !== null) {
            $args['reply_markup'] = json_encode($reply_markup);
        }

        return $this->Request('sendPoll', $args);
    }

    public function sendDice(
        $chat_id,
        string $emoji = null,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id' => $chat_id
        ];

        if ($emoji !== null) {
            $args['emoji'] = $emoji;
        }

        if ($disable_notification !== null) {
            $args['disable_notification'] = $disable_notification;
        }

        if ($reply_to_message_id !== null) {
            $args['reply_to_message_id'] = $reply_to_message_id;
        }

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
        }

        if ($reply_markup !== null) {
            $args['reply_markup'] = json_encode($reply_markup);
        }

        return $this->Request('sendDice', $args);
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

    public function banChatMember(
        $chat_id,
        int $user_id,
        int $until_date = null,
        bool $revoke_messages = null
    ) {
        $args = [
            'chat_id' => $chat_id,
            'user_id' => $user_id
        ];

        if ($until_date !== null) {
            $args['until_date'] = $until_date;
        }

        if ($revoke_messages !== null) {
            $args['revoke_messages'] = $revoke_messages;
        }

        return $this->Request('banChatMember', $args);
    }

    public function unbanChatMember(
        $chat_id,
        int $user_id,
        bool $only_if_banned = null
    ) {
        $args = [
            'chat_id' => $chat_id,
            'user_id' => $user_id
        ];

        if ($only_if_banned !== null) {
            $args['only_if_banned'] = $only_if_banned;
        }

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
        bool $is_anonymous = null,
        bool $can_manage_chat = null,
        bool $can_post_messages = null,
        bool $can_edit_messages = null,
        bool $can_delete_messages = null,
        bool $can_manage_voice_chats = null,
        bool $can_restrict_members = null,
        bool $can_promote_members = null,
        bool $can_change_info = null,
        bool $can_invite_users = null,
        bool $can_pin_messages = null
    ) {
        $args = [
            'chat_id' => $chat_id,
            'user_id' => $user_id
        ];

        if ($is_anonymous !== null) {
            $args['is_anonymous'] = $is_anonymous;
        }

        if ($can_manage_chat !== null) {
            $args['can_manage_chat'] = $can_manage_chat;
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

        if ($can_manage_voice_chats !== null) {
            $args['can_manage_voice_chats'] = $can_manage_voice_chats;
        }

        if ($can_restrict_members !== null) {
            $args['can_restrict_members'] = $can_restrict_members;
        }

        if ($can_promote_members !== null) {
            $args['can_promote_members'] = $can_promote_members;
        }

        if ($can_change_info !== null) {
            $args['can_change_info'] = $can_change_info;
        }

        if ($can_invite_users !== null) {
            $args['can_invite_users'] = $can_invite_users;
        }

        if ($can_pin_messages !== null) {
            $args['can_pin_messages'] = $can_pin_messages;
        }

        return $this->Request('promoteChatMember', $args);
    }

    public function setChatAdministratorCustomTitle(
        $chat_id,
        int $user_id,
        string $custom_title
    ) {
        $args = [
            'chat_id'      => $chat_id,
            'user_id'      => $user_id,
            'custom_title' => $custom_title
        ];

        return $this->Request('setChatAdministratorCustomTitle', $args);
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

    public function createChatInviteLink(
        $chat_id,
        int $expire_date = null,
        int $member_limit = null
    ) {
        $args = [
            'chat_id' => $chat_id
        ];

        if ($expire_date !== null) {
            $args['expire_date'] = $expire_date;
        }

        if ($member_limit !== null) {
            $args['member_limit'] = $member_limit;
        }

        return $this->Request('createChatInviteLink', $args);
    }

    public function editChatInviteLink(
        $chat_id,
        string $invite_link,
        int $expire_date = null,
        int $member_limit = null
    ) {
        $args = [
            'chat_id'     => $chat_id,
            'invite_link' => $invite_link
        ];

        if ($expire_date !== null) {
            $args['expire_date'] = $expire_date;
        }

        if ($member_limit !== null) {
            $args['member_limit'] = $member_limit;
        }

        return $this->Request('editChatInviteLink', $args);
    }

    public function revokeChatInviteLink(
        $chat_id,
        string $invite_link
    ) {
        $args = [
            'chat_id'     => $chat_id,
            'invite_link' => $invite_link
        ];

        return $this->Request('revokeChatInviteLink', $args);
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
        $chat_id,
        int $message_id = null
    ) {
        $args = [
            'chat_id' => $chat_id
        ];

        if ($message_id !== null) {
            $args['message_id'] = $message_id;
        }

        return $this->Request('unpinChatMessage', $args);
    }

    public function unpinAllChatMessages(
        $chat_id
    ) {
        $args = [
            'chat_id' => $chat_id
        ];

        return $this->Request('unpinAllChatMessages', $args);
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

    public function getChatMemberCount(
        $chat_id
    ) {
        $args = [
            'chat_id' => $chat_id
        ];

        return $this->Request('getChatMemberCount', $args);
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

    public function setMyCommands(
        array $commands,
        array $scope = null,
        string $language_code = null
    ) {
        $args = [
            'commands' => json_encode($commands)
        ];

        if ($scope !== null) {
            $args['scope'] = json_encode($scope);
        }

        if ($language_code !== null) {
            $args['language_code'] = $language_code;
        }

        return $this->Request('setMyCommands', $args);
    }

    public function deleteMyCommands(
        array $scope = null,
        string $language_code = null
    ) {
        $args = [];

        if ($scope !== null) {
            $args['scope'] = json_encode($scope);
        }

        if ($language_code !== null) {
            $args['language_code'] = $language_code;
        }

        return $this->Request('deleteMyCommands', $args);
    }

    public function getMyCommands(
        array $scope = null,
        string $language_code = null
    ) {
        $args = [];

        if ($scope !== null) {
            $args['scope'] = json_encode($scope);
        }

        if ($language_code !== null) {
            $args['language_code'] = $language_code;
        }

        return $this->Request('getMyCommands', $args);
    }

    public function editMessageText(
        $chat_id = null,
        int $message_id = null,
        string $inline_message_id = null,
        string $text,
        string $parse_mode = null,
        array $entities = null,
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

        if ($entities !== null) {
            $args['entities'] = json_encode($entities);
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
        array $caption_entities = null,
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

        if ($caption_entities !== null) {
            $args['caption_entities'] = json_encode($caption_entities);
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
        array $media,
        array $reply_markup = null
    ) {
        $args = [
            'media' => json_encode($media)
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
        bool $allow_sending_without_reply = null,
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

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
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
        $png_sticker = null,
        \CURLFile $tgs_sticker = null,
        string $emojis,
        bool $contains_masks = null,
        array $mask_position = null
    ) {
        $args = [
            'user_id' => $user_id,
            'name'    => $name,
            'title'   => $title,
            'emojis'  => $emojis
        ];

        if ($png_sticker !== null) {
            $args['png_sticker'] = $png_sticker;
        }

        if ($tgs_sticker !== null) {
            $args['tgs_sticker'] = $tgs_sticker;
        }

        if ($contains_masks !== null) {
            $args['contains_masks'] = $contains_masks;
        }

        if ($mask_position !== null) {
            $args['mask_position'] = json_encode($mask_position);
        }

        return $this->Request('createNewStickerSet', $args);
    }

    public function addStickerToSet(
        int $user_id,
        string $name,
        $png_sticker = null,
        \CURLFile $tgs_sticker = null,
        string $emojis,
        array $mask_position = null
    ) {
        $args = [
            'user_id' => $user_id,
            'name'    => $name,
            'emojis'  => $emojis
        ];

        if ($png_sticker !== null) {
            $args['png_sticker'] = $png_sticker;
        }

        if ($tgs_sticker !== null) {
            $args['tgs_sticker'] = $tgs_sticker;
        }

        if ($mask_position !== null) {
            $args['mask_position'] = json_encode($mask_position);
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

    public function setStickerSetThumb(
        string $name,
        int $user_id,
        $thumb = null
    ) {
        $args = [
            'name'    => $name,
            'user_id' => $user_id
        ];

        if ($thumb !== null) {
            $args['thumb'] = $thumb;
        }

        return $this->Request('setStickerSetThumb', $args);
    }

    public function answerInlineQuery(
        string $inline_query_id,
        array $results,
        int $cache_time = null,
        bool $is_personal = null,
        string $next_offset = null,
        string $switch_pm_text = null,
        string $switch_pm_parameter = null
    ) {
        $args = [
            'inline_query_id' => $inline_query_id,
            'results'         => json_encode($results)
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
        $chat_id,
        string $title,
        string $description,
        string $payload,
        string $provider_token,
        string $currency,
        array $prices,
        int $max_tip_amount = null,
        array $suggested_tip_amounts = null,
        string $start_parameter = null,
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
        bool $allow_sending_without_reply = null,
        array $reply_markup = null
    ) {
        $args = [
            'chat_id'        => $chat_id,
            'title'          => $title,
            'description'    => $description,
            'payload'        => $payload,
            'provider_token' => $provider_token,
            'currency'       => $currency,
            'prices'         => json_encode($prices)
        ];

        if ($max_tip_amount !== null) {
            $args['max_tip_amount'] = $max_tip_amount;
        }

        if ($suggested_tip_amounts !== null) {
            $args['suggested_tip_amounts'] = json_encode($suggested_tip_amounts);
        }

        if ($start_parameter !== null) {
            $args['start_parameter'] = $start_parameter;
        }

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

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
        }

        if ($reply_markup !== null) {
            $args['reply_markup'] = json_encode($reply_markup);
        }

        return $this->Request('sendInvoice', $args);
    }

    public function answerShippingQuery(
        string $shipping_query_id,
        bool $ok,
        array $shipping_options = null,
        string $error_message = null
    ) {
        $args = [
            'shipping_query_id' => $shipping_query_id,
            'ok'                => $ok
        ];

        if ($shipping_options !== null) {
            $args['shipping_options'] = json_encode($shipping_options);
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
        array $errors
    ) {
        $args = [
            'user_id' => $user_id,
            'errors'  => json_encode($errors)
        ];

        return $this->Request('setPassportDataErrors', $args);
    }

    public function sendGame(
        int $chat_id,
        string $game_short_name,
        bool $disable_notification = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
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

        if ($allow_sending_without_reply !== null) {
            $args['allow_sending_without_reply'] = $allow_sending_without_reply;
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