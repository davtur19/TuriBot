<?php
/** @noinspection PhpUnused */

//functions automatically generated from https://core.telegram.org/bots/api
//generator source code https://github.com/davtur19/TuriBotGen

namespace TuriBot;

abstract class Api implements ApiInterface {

    /**
     * Use this method to receive incoming updates using long polling (wiki). Returns an Array of Update
     * objects.
     *
     * @param int|null $offset Identifier of the first update to be returned. Must be greater by one than the highest among the
     *                                       identifiers of previously received updates. By default, updates starting with the earliest
     *                                       unconfirmed update are returned. An update is considered confirmed as soon as getUpdates is called
     *                                       with an offset higher than its update_id. The negative offset can be specified to retrieve updates
     *                                       starting from -offset update from the end of the updates queue. All previous updates will be
     *                                       forgotten.
     * @param int|null $limit Limits the number of updates to be retrieved. Values between 1-100 are accepted. Defaults to 100.
     * @param int|null $timeout Timeout in seconds for long polling. Defaults to 0, i.e. usual short polling. Should be positive,
     *                                       short polling should be used for testing purposes only.
     * @param array|null $allowed_updates A JSON-serialized list of the update types you want your bot to receive. For example, specify
     *                                       ["message", "edited_channel_post", "callback_query"] to only receive updates of these types. See
     *                                       Update for a complete list of available update types. Specify an empty list to receive all update
     *                                       types except chat_member, message_reaction, and message_reaction_count (default). If not specified,
     *                                       the previous setting will be used.Please note that this parameter doesn't affect updates created
     *                                       before the call to the getUpdates, so unwanted updates may be received for a short period of time.
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#getupdates
     */
    public function getUpdates(
        int $offset = null,
        int $limit = null,
        int $timeout = null,
        array $allowed_updates = null
    ): \stdClass {
        $args = [];

        if (null !== $offset) $args['offset'] = $offset;
        if (null !== $limit) $args['limit'] = $limit;
        if (null !== $timeout) $args['timeout'] = $timeout;
        if (null !== $allowed_updates) $args['allowed_updates'] = json_encode($allowed_updates);

        return $this->Request('getUpdates', $args);
    }

    /**
     * Use this method to specify a URL and receive incoming updates via an outgoing webhook. Whenever
     * there is an update for the bot, we will send an HTTPS POST request to the specified URL, containing
     * a JSON-serialized Update. In case of an unsuccessful request, we will give up after a reasonable
     * amount of attempts. Returns True on success.
     * If you'd like to make sure that the webhook was set by you, you can specify secret data in the
     * parameter secret_token. If specified, the request will contain a header
     * “X-Telegram-Bot-Api-Secret-Token” with the secret token as content.
     *
     * @param string $url HTTPS URL to send updates to. Use an empty string to remove webhook integration
     * @param \CURLFile|null $certificate Upload your public key certificate so that the root certificate in use can be checked. See our
     *                                       self-signed guide for details.
     * @param string|null $ip_address The fixed IP address which will be used to send webhook requests instead of the IP address resolved
     *                                       through DNS
     * @param int|null $max_connections The maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery,
     *                                       1-100. Defaults to 40. Use lower values to limit the load on your bot's server, and higher values to
     *                                       increase your bot's throughput.
     * @param array|null $allowed_updates A JSON-serialized list of the update types you want your bot to receive. For example, specify
     *                                       ["message", "edited_channel_post", "callback_query"] to only receive updates of these types. See
     *                                       Update for a complete list of available update types. Specify an empty list to receive all update
     *                                       types except chat_member, message_reaction, and message_reaction_count (default). If not specified,
     *                                       the previous setting will be used.Please note that this parameter doesn't affect updates created
     *                                       before the call to the setWebhook, so unwanted updates may be received for a short period of time.
     * @param bool|null $drop_pending_updates Pass True to drop all pending updates
     * @param string|null $secret_token A secret token to be sent in a header “X-Telegram-Bot-Api-Secret-Token” in every webhook
     *                                       request, 1-256 characters. Only characters A-Z, a-z, 0-9, _ and - are allowed. The header is useful
     *                                       to ensure that the request comes from a webhook set by you.
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#setwebhook
     */
    public function setWebhook(
        string $url,
        \CURLFile $certificate = null,
        string $ip_address = null,
        int $max_connections = null,
        array $allowed_updates = null,
        bool $drop_pending_updates = null,
        string $secret_token = null
    ): \stdClass {
        $args = [
            'url' => $url
        ];

        if (null !== $certificate) $args['certificate'] = $certificate;
        if (null !== $ip_address) $args['ip_address'] = $ip_address;
        if (null !== $max_connections) $args['max_connections'] = $max_connections;
        if (null !== $allowed_updates) $args['allowed_updates'] = json_encode($allowed_updates);
        if (null !== $drop_pending_updates) $args['drop_pending_updates'] = $drop_pending_updates;
        if (null !== $secret_token) $args['secret_token'] = $secret_token;

        return $this->Request('setWebhook', $args);
    }

    /**
     * Use this method to remove webhook integration if you decide to switch back to getUpdates. Returns
     * True on success.
     *
     * @param bool|null $drop_pending_updates Pass True to drop all pending updates
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#deletewebhook
     */
    public function deleteWebhook(
        bool $drop_pending_updates = null
    ): \stdClass {
        $args = [];

        if (null !== $drop_pending_updates) $args['drop_pending_updates'] = $drop_pending_updates;

        return $this->Request('deleteWebhook', $args);
    }

    /**
     * Use this method to get current webhook status. Requires no parameters. On success, returns a
     * WebhookInfo object. If the bot is using getUpdates, will return an object with the url field empty.
     *
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#getwebhookinfo
     */
    public function getWebhookInfo(): \stdClass {
        return $this->Request('getWebhookInfo', []);
    }

    /**
     * A simple method for testing your bot's authentication token. Requires no parameters. Returns basic
     * information about the bot in form of a User object.
     *
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#getme
     */
    public function getMe(): \stdClass {
        return $this->Request('getMe', []);
    }

    /**
     * Use this method to log out from the cloud Bot API server before launching the bot locally. You must
     * log out the bot before running it locally, otherwise there is no guarantee that the bot will receive
     * updates. After a successful call, you can immediately log in on a local server, but will not be able
     * to log in back to the cloud Bot API server for 10 minutes. Returns True on success. Requires no
     * parameters.
     *
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#logout
     */
    public function logOut(): \stdClass {
        return $this->Request('logOut', []);
    }

    /**
     * Use this method to close the bot instance before moving it from one local server to another. You
     * need to delete the webhook before calling this method to ensure that the bot isn't launched again
     * after server restart. The method will return error 429 in the first 10 minutes after the bot is
     * launched. Returns True on success. Requires no parameters.
     *
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#close
     */
    public function close(): \stdClass {
        return $this->Request('close', []);
    }

    /**
     * Use this method to send text messages. On success, the sent Message is returned.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param int|null $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param string $text Text of the message to be sent, 1-4096 characters after entities parsing
     * @param string|null $parse_mode Mode for parsing entities in the message text. See formatting options for more details.
     * @param array|null $entities A JSON-serialized list of special entities that appear in message text, which can be specified
     *                                       instead of parse_mode
     * @param array|null $link_preview_options Link preview generation options for the message
     * @param bool|null $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool|null $protect_content Protects the contents of the sent message from forwarding and saving
     * @param string|null $message_effect_id Unique identifier of the message effect to be added to the message; for private chats only
     * @param array|null $reply_parameters Description of the message to reply to
     * @param array|null $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply
     *                                       keyboard, instructions to remove a reply keyboard or to force a reply from the user
     * @param string|null $business_connection_id Unique identifier of the business connection on behalf of which the message will be sent
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#sendmessage
     */
    public function sendMessage(
        int|string $chat_id,
        string $text,
        int $message_thread_id = null,
        string $parse_mode = null,
        array $entities = null,
        array $link_preview_options = null,
        bool $disable_notification = null,
        bool $protect_content = null,
        string $message_effect_id = null,
        array $reply_parameters = null,
        array $reply_markup = null,
        string $business_connection_id = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'text' => $text
        ];

        if (null !== $message_thread_id) $args['message_thread_id'] = $message_thread_id;
        if (null !== $parse_mode) $args['parse_mode'] = $parse_mode;
        if (null !== $entities) $args['entities'] = json_encode($entities);
        if (null !== $link_preview_options) $args['link_preview_options'] = json_encode($link_preview_options);
        if (null !== $disable_notification) $args['disable_notification'] = $disable_notification;
        if (null !== $protect_content) $args['protect_content'] = $protect_content;
        if (null !== $message_effect_id) $args['message_effect_id'] = $message_effect_id;
        if (null !== $reply_parameters) $args['reply_parameters'] = json_encode($reply_parameters);
        if (null !== $reply_markup) $args['reply_markup'] = json_encode($reply_markup);
        if (null !== $business_connection_id) $args['business_connection_id'] = $business_connection_id;

        return $this->Request('sendMessage', $args);
    }

    /**
     * Use this method to forward messages of any kind. Service messages and messages with protected
     * content can't be forwarded. On success, the sent Message is returned.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param int|null $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param int|string $from_chat_id Unique identifier for the chat where the original message was sent (or channel username in the
     *                                       format @channelusername)
     * @param bool|null $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool|null $protect_content Protects the contents of the forwarded message from forwarding and saving
     * @param int $message_id Message identifier in the chat specified in from_chat_id
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#forwardmessage
     */
    public function forwardMessage(
        int|string $chat_id,
        int|string $from_chat_id,
        int $message_id,
        int $message_thread_id = null,
        bool $disable_notification = null,
        bool $protect_content = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'from_chat_id' => $from_chat_id,
            'message_id' => $message_id
        ];

        if (null !== $message_thread_id) $args['message_thread_id'] = $message_thread_id;
        if (null !== $disable_notification) $args['disable_notification'] = $disable_notification;
        if (null !== $protect_content) $args['protect_content'] = $protect_content;

        return $this->Request('forwardMessage', $args);
    }

    /**
     * Use this method to forward multiple messages of any kind. If some of the specified messages can't be
     * found or forwarded, they are skipped. Service messages and messages with protected content can't be
     * forwarded. Album grouping is kept for forwarded messages. On success, an array of MessageId of the
     * sent messages is returned.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param int|null $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param int|string $from_chat_id Unique identifier for the chat where the original messages were sent (or channel username in the
     *                                       format @channelusername)
     * @param array $message_ids A JSON-serialized list of 1-100 identifiers of messages in the chat from_chat_id to forward. The
     *                                       identifiers must be specified in a strictly increasing order.
     * @param bool|null $disable_notification Sends the messages silently. Users will receive a notification with no sound.
     * @param bool|null $protect_content Protects the contents of the forwarded messages from forwarding and saving
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#forwardmessages
     */
    public function forwardMessages(
        int|string $chat_id,
        int|string $from_chat_id,
        array $message_ids,
        int $message_thread_id = null,
        bool $disable_notification = null,
        bool $protect_content = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'from_chat_id' => $from_chat_id,
            'message_ids' => json_encode($message_ids)
        ];

        if (null !== $message_thread_id) $args['message_thread_id'] = $message_thread_id;
        if (null !== $disable_notification) $args['disable_notification'] = $disable_notification;
        if (null !== $protect_content) $args['protect_content'] = $protect_content;

        return $this->Request('forwardMessages', $args);
    }

    /**
     * Use this method to copy messages of any kind. Service messages, paid media messages, giveaway
     * messages, giveaway winners messages, and invoice messages can't be copied. A quiz poll can be copied
     * only if the value of the field correct_option_id is known to the bot. The method is analogous to the
     * method forwardMessage, but the copied message doesn't have a link to the original message. Returns
     * the MessageId of the sent message on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param int|null $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param int|string $from_chat_id Unique identifier for the chat where the original message was sent (or channel username in the
     *                                       format @channelusername)
     * @param int $message_id Message identifier in the chat specified in from_chat_id
     * @param string|null $caption New caption for media, 0-1024 characters after entities parsing. If not specified, the original
     *                                       caption is kept
     * @param string|null $parse_mode Mode for parsing entities in the new caption. See formatting options for more details.
     * @param array|null $caption_entities A JSON-serialized list of special entities that appear in the new caption, which can be specified
     *                                       instead of parse_mode
     * @param bool|null $show_caption_above_media Pass True, if the caption must be shown above the message media. Ignored if a new caption isn't
     *                                       specified.
     * @param bool|null $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool|null $protect_content Protects the contents of the sent message from forwarding and saving
     * @param array|null $reply_parameters Description of the message to reply to
     * @param array|null $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply
     *                                       keyboard, instructions to remove a reply keyboard or to force a reply from the user
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#copymessage
     */
    public function copyMessage(
        int|string $chat_id,
        int|string $from_chat_id,
        int $message_id,
        int $message_thread_id = null,
        string $caption = null,
        string $parse_mode = null,
        array $caption_entities = null,
        bool $show_caption_above_media = null,
        bool $disable_notification = null,
        bool $protect_content = null,
        array $reply_parameters = null,
        array $reply_markup = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'from_chat_id' => $from_chat_id,
            'message_id' => $message_id
        ];

        if (null !== $message_thread_id) $args['message_thread_id'] = $message_thread_id;
        if (null !== $caption) $args['caption'] = $caption;
        if (null !== $parse_mode) $args['parse_mode'] = $parse_mode;
        if (null !== $caption_entities) $args['caption_entities'] = json_encode($caption_entities);
        if (null !== $show_caption_above_media) $args['show_caption_above_media'] = $show_caption_above_media;
        if (null !== $disable_notification) $args['disable_notification'] = $disable_notification;
        if (null !== $protect_content) $args['protect_content'] = $protect_content;
        if (null !== $reply_parameters) $args['reply_parameters'] = json_encode($reply_parameters);
        if (null !== $reply_markup) $args['reply_markup'] = json_encode($reply_markup);

        return $this->Request('copyMessage', $args);
    }

    /**
     * Use this method to copy messages of any kind. If some of the specified messages can't be found or
     * copied, they are skipped. Service messages, paid media messages, giveaway messages, giveaway winners
     * messages, and invoice messages can't be copied. A quiz poll can be copied only if the value of the
     * field correct_option_id is known to the bot. The method is analogous to the method forwardMessages,
     * but the copied messages don't have a link to the original message. Album grouping is kept for copied
     * messages. On success, an array of MessageId of the sent messages is returned.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param int|null $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param int|string $from_chat_id Unique identifier for the chat where the original messages were sent (or channel username in the
     *                                       format @channelusername)
     * @param array $message_ids A JSON-serialized list of 1-100 identifiers of messages in the chat from_chat_id to copy. The
     *                                       identifiers must be specified in a strictly increasing order.
     * @param bool|null $disable_notification Sends the messages silently. Users will receive a notification with no sound.
     * @param bool|null $protect_content Protects the contents of the sent messages from forwarding and saving
     * @param bool|null $remove_caption Pass True to copy the messages without their captions
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#copymessages
     */
    public function copyMessages(
        int|string $chat_id,
        int|string $from_chat_id,
        array $message_ids,
        int $message_thread_id = null,
        bool $disable_notification = null,
        bool $protect_content = null,
        bool $remove_caption = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'from_chat_id' => $from_chat_id,
            'message_ids' => json_encode($message_ids)
        ];

        if (null !== $message_thread_id) $args['message_thread_id'] = $message_thread_id;
        if (null !== $disable_notification) $args['disable_notification'] = $disable_notification;
        if (null !== $protect_content) $args['protect_content'] = $protect_content;
        if (null !== $remove_caption) $args['remove_caption'] = $remove_caption;

        return $this->Request('copyMessages', $args);
    }

    /**
     * Use this method to send photos. On success, the sent Message is returned.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param int|null $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param \CURLFile|string|InputFile $photo Photo to send. Pass a file_id as String to send a photo that exists on the Telegram servers
     *                                       (recommended), pass an HTTP URL as a String for Telegram to get a photo from the Internet, or upload
     *                                       a new photo using multipart/form-data. The photo must be at most 10 MB in size. The photo's width
     *                                       and height must not exceed 10000 in total. Width and height ratio must be at most 20. More
     *                                       information on Sending Files »
     * @param string|null $caption Photo caption (may also be used when resending photos by file_id), 0-1024 characters after entities
     *                                       parsing
     * @param string|null $parse_mode Mode for parsing entities in the photo caption. See formatting options for more details.
     * @param array|null $caption_entities A JSON-serialized list of special entities that appear in the caption, which can be specified
     *                                       instead of parse_mode
     * @param bool|null $show_caption_above_media Pass True, if the caption must be shown above the message media
     * @param bool|null $has_spoiler Pass True if the photo needs to be covered with a spoiler animation
     * @param bool|null $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool|null $protect_content Protects the contents of the sent message from forwarding and saving
     * @param string|null $message_effect_id Unique identifier of the message effect to be added to the message; for private chats only
     * @param array|null $reply_parameters Description of the message to reply to
     * @param array|null $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply
     *                                       keyboard, instructions to remove a reply keyboard or to force a reply from the user
     * @param string|null $business_connection_id Unique identifier of the business connection on behalf of which the message will be sent
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#sendphoto
     */
    public function sendPhoto(
        int|string $chat_id,
        \CURLFile|string|InputFile $photo,
        int $message_thread_id = null,
        string $caption = null,
        string $parse_mode = null,
        array $caption_entities = null,
        bool $show_caption_above_media = null,
        bool $has_spoiler = null,
        bool $disable_notification = null,
        bool $protect_content = null,
        string $message_effect_id = null,
        array $reply_parameters = null,
        array $reply_markup = null,
        string $business_connection_id = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'photo' => $photo
        ];

        if (null !== $message_thread_id) $args['message_thread_id'] = $message_thread_id;
        if (null !== $caption) $args['caption'] = $caption;
        if (null !== $parse_mode) $args['parse_mode'] = $parse_mode;
        if (null !== $caption_entities) $args['caption_entities'] = json_encode($caption_entities);
        if (null !== $show_caption_above_media) $args['show_caption_above_media'] = $show_caption_above_media;
        if (null !== $has_spoiler) $args['has_spoiler'] = $has_spoiler;
        if (null !== $disable_notification) $args['disable_notification'] = $disable_notification;
        if (null !== $protect_content) $args['protect_content'] = $protect_content;
        if (null !== $message_effect_id) $args['message_effect_id'] = $message_effect_id;
        if (null !== $reply_parameters) $args['reply_parameters'] = json_encode($reply_parameters);
        if (null !== $reply_markup) $args['reply_markup'] = json_encode($reply_markup);
        if (null !== $business_connection_id) $args['business_connection_id'] = $business_connection_id;

        return $this->Request('sendPhoto', $args);
    }

    /**
     * Use this method to send audio files, if you want Telegram clients to display them in the music
     * player. Your audio must be in the .MP3 or .M4A format. On success, the sent Message is returned.
     * Bots can currently send audio files of up to 50 MB in size, this limit may be changed in the future.
     * For sending voice messages, use the sendVoice method instead.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param int|null $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param \CURLFile|string|InputFile $audio Audio file to send. Pass a file_id as String to send an audio file that exists on the Telegram
     *                                       servers (recommended), pass an HTTP URL as a String for Telegram to get an audio file from the
     *                                       Internet, or upload a new one using multipart/form-data. More information on Sending Files »
     * @param string|null $caption Audio caption, 0-1024 characters after entities parsing
     * @param string|null $parse_mode Mode for parsing entities in the audio caption. See formatting options for more details.
     * @param array|null $caption_entities A JSON-serialized list of special entities that appear in the caption, which can be specified
     *                                       instead of parse_mode
     * @param int|null $duration Duration of the audio in seconds
     * @param string|null $performer Performer
     * @param string|null $title Track name
     * @param \CURLFile|string|InputFile|null $thumbnail Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported
     *                                       server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's
     *                                       width and height should not exceed 320. Ignored if the file is not uploaded using
     *                                       multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can
     *                                       pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under
     *                                       <file_attach_name>. More information on Sending Files »
     * @param bool|null $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool|null $protect_content Protects the contents of the sent message from forwarding and saving
     * @param string|null $message_effect_id Unique identifier of the message effect to be added to the message; for private chats only
     * @param array|null $reply_parameters Description of the message to reply to
     * @param array|null $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply
     *                                       keyboard, instructions to remove a reply keyboard or to force a reply from the user
     * @param string|null $business_connection_id Unique identifier of the business connection on behalf of which the message will be sent
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#sendaudio
     */
    public function sendAudio(
        int|string $chat_id,
        \CURLFile|string|InputFile $audio,
        int $message_thread_id = null,
        string $caption = null,
        string $parse_mode = null,
        array $caption_entities = null,
        int $duration = null,
        string $performer = null,
        string $title = null,
        \CURLFile|string|InputFile $thumbnail = null,
        bool $disable_notification = null,
        bool $protect_content = null,
        string $message_effect_id = null,
        array $reply_parameters = null,
        array $reply_markup = null,
        string $business_connection_id = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'audio' => $audio
        ];

        if (null !== $message_thread_id) $args['message_thread_id'] = $message_thread_id;
        if (null !== $caption) $args['caption'] = $caption;
        if (null !== $parse_mode) $args['parse_mode'] = $parse_mode;
        if (null !== $caption_entities) $args['caption_entities'] = json_encode($caption_entities);
        if (null !== $duration) $args['duration'] = $duration;
        if (null !== $performer) $args['performer'] = $performer;
        if (null !== $title) $args['title'] = $title;
        if (null !== $thumbnail) $args['thumbnail'] = $thumbnail;
        if (null !== $disable_notification) $args['disable_notification'] = $disable_notification;
        if (null !== $protect_content) $args['protect_content'] = $protect_content;
        if (null !== $message_effect_id) $args['message_effect_id'] = $message_effect_id;
        if (null !== $reply_parameters) $args['reply_parameters'] = json_encode($reply_parameters);
        if (null !== $reply_markup) $args['reply_markup'] = json_encode($reply_markup);
        if (null !== $business_connection_id) $args['business_connection_id'] = $business_connection_id;

        return $this->Request('sendAudio', $args);
    }

    /**
     * Use this method to send general files. On success, the sent Message is returned. Bots can currently
     * send files of any type of up to 50 MB in size, this limit may be changed in the future.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param int|null $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param \CURLFile|string|InputFile $document File to send. Pass a file_id as String to send a file that exists on the Telegram servers
     *                                       (recommended), pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload
     *                                       a new one using multipart/form-data. More information on Sending Files »
     * @param \CURLFile|string|InputFile|null $thumbnail Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported
     *                                       server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's
     *                                       width and height should not exceed 320. Ignored if the file is not uploaded using
     *                                       multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can
     *                                       pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under
     *                                       <file_attach_name>. More information on Sending Files »
     * @param string|null $caption Document caption (may also be used when resending documents by file_id), 0-1024 characters after
     *                                       entities parsing
     * @param string|null $parse_mode Mode for parsing entities in the document caption. See formatting options for more details.
     * @param array|null $caption_entities A JSON-serialized list of special entities that appear in the caption, which can be specified
     *                                       instead of parse_mode
     * @param bool|null $disable_content_type_detection Disables automatic server-side content type detection for files uploaded using multipart/form-data
     * @param bool|null $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool|null $protect_content Protects the contents of the sent message from forwarding and saving
     * @param string|null $message_effect_id Unique identifier of the message effect to be added to the message; for private chats only
     * @param array|null $reply_parameters Description of the message to reply to
     * @param array|null $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply
     *                                       keyboard, instructions to remove a reply keyboard or to force a reply from the user
     * @param string|null $business_connection_id Unique identifier of the business connection on behalf of which the message will be sent
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#senddocument
     */
    public function sendDocument(
        int|string $chat_id,
        \CURLFile|string|InputFile $document,
        int $message_thread_id = null,
        \CURLFile|string|InputFile $thumbnail = null,
        string $caption = null,
        string $parse_mode = null,
        array $caption_entities = null,
        bool $disable_content_type_detection = null,
        bool $disable_notification = null,
        bool $protect_content = null,
        string $message_effect_id = null,
        array $reply_parameters = null,
        array $reply_markup = null,
        string $business_connection_id = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'document' => $document
        ];

        if (null !== $message_thread_id) $args['message_thread_id'] = $message_thread_id;
        if (null !== $thumbnail) $args['thumbnail'] = $thumbnail;
        if (null !== $caption) $args['caption'] = $caption;
        if (null !== $parse_mode) $args['parse_mode'] = $parse_mode;
        if (null !== $caption_entities) $args['caption_entities'] = json_encode($caption_entities);
        if (null !== $disable_content_type_detection) $args['disable_content_type_detection'] = $disable_content_type_detection;
        if (null !== $disable_notification) $args['disable_notification'] = $disable_notification;
        if (null !== $protect_content) $args['protect_content'] = $protect_content;
        if (null !== $message_effect_id) $args['message_effect_id'] = $message_effect_id;
        if (null !== $reply_parameters) $args['reply_parameters'] = json_encode($reply_parameters);
        if (null !== $reply_markup) $args['reply_markup'] = json_encode($reply_markup);
        if (null !== $business_connection_id) $args['business_connection_id'] = $business_connection_id;

        return $this->Request('sendDocument', $args);
    }

    /**
     * Use this method to send video files, Telegram clients support MPEG4 videos (other formats may be
     * sent as Document). On success, the sent Message is returned. Bots can currently send video files of
     * up to 50 MB in size, this limit may be changed in the future.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param int|null $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param \CURLFile|string|InputFile $video Video to send. Pass a file_id as String to send a video that exists on the Telegram servers
     *                                       (recommended), pass an HTTP URL as a String for Telegram to get a video from the Internet, or upload
     *                                       a new video using multipart/form-data. More information on Sending Files »
     * @param int|null $duration Duration of sent video in seconds
     * @param int|null $width Video width
     * @param int|null $height Video height
     * @param \CURLFile|string|InputFile|null $thumbnail Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported
     *                                       server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's
     *                                       width and height should not exceed 320. Ignored if the file is not uploaded using
     *                                       multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can
     *                                       pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under
     *                                       <file_attach_name>. More information on Sending Files »
     * @param string|null $caption Video caption (may also be used when resending videos by file_id), 0-1024 characters after entities
     *                                       parsing
     * @param string|null $parse_mode Mode for parsing entities in the video caption. See formatting options for more details.
     * @param array|null $caption_entities A JSON-serialized list of special entities that appear in the caption, which can be specified
     *                                       instead of parse_mode
     * @param bool|null $show_caption_above_media Pass True, if the caption must be shown above the message media
     * @param bool|null $has_spoiler Pass True if the video needs to be covered with a spoiler animation
     * @param bool|null $supports_streaming Pass True if the uploaded video is suitable for streaming
     * @param bool|null $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool|null $protect_content Protects the contents of the sent message from forwarding and saving
     * @param string|null $message_effect_id Unique identifier of the message effect to be added to the message; for private chats only
     * @param array|null $reply_parameters Description of the message to reply to
     * @param array|null $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply
     *                                       keyboard, instructions to remove a reply keyboard or to force a reply from the user
     * @param string|null $business_connection_id Unique identifier of the business connection on behalf of which the message will be sent
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#sendvideo
     */
    public function sendVideo(
        int|string $chat_id,
        \CURLFile|string|InputFile $video,
        int $message_thread_id = null,
        int $duration = null,
        int $width = null,
        int $height = null,
        \CURLFile|string|InputFile $thumbnail = null,
        string $caption = null,
        string $parse_mode = null,
        array $caption_entities = null,
        bool $show_caption_above_media = null,
        bool $has_spoiler = null,
        bool $supports_streaming = null,
        bool $disable_notification = null,
        bool $protect_content = null,
        string $message_effect_id = null,
        array $reply_parameters = null,
        array $reply_markup = null,
        string $business_connection_id = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'video' => $video
        ];

        if (null !== $message_thread_id) $args['message_thread_id'] = $message_thread_id;
        if (null !== $duration) $args['duration'] = $duration;
        if (null !== $width) $args['width'] = $width;
        if (null !== $height) $args['height'] = $height;
        if (null !== $thumbnail) $args['thumbnail'] = $thumbnail;
        if (null !== $caption) $args['caption'] = $caption;
        if (null !== $parse_mode) $args['parse_mode'] = $parse_mode;
        if (null !== $caption_entities) $args['caption_entities'] = json_encode($caption_entities);
        if (null !== $show_caption_above_media) $args['show_caption_above_media'] = $show_caption_above_media;
        if (null !== $has_spoiler) $args['has_spoiler'] = $has_spoiler;
        if (null !== $supports_streaming) $args['supports_streaming'] = $supports_streaming;
        if (null !== $disable_notification) $args['disable_notification'] = $disable_notification;
        if (null !== $protect_content) $args['protect_content'] = $protect_content;
        if (null !== $message_effect_id) $args['message_effect_id'] = $message_effect_id;
        if (null !== $reply_parameters) $args['reply_parameters'] = json_encode($reply_parameters);
        if (null !== $reply_markup) $args['reply_markup'] = json_encode($reply_markup);
        if (null !== $business_connection_id) $args['business_connection_id'] = $business_connection_id;

        return $this->Request('sendVideo', $args);
    }

    /**
     * Use this method to send animation files (GIF or H.264/MPEG-4 AVC video without sound). On success,
     * the sent Message is returned. Bots can currently send animation files of up to 50 MB in size, this
     * limit may be changed in the future.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param int|null $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param \CURLFile|string|InputFile $animation Animation to send. Pass a file_id as String to send an animation that exists on the Telegram servers
     *                                       (recommended), pass an HTTP URL as a String for Telegram to get an animation from the Internet, or
     *                                       upload a new animation using multipart/form-data. More information on Sending Files »
     * @param int|null $duration Duration of sent animation in seconds
     * @param int|null $width Animation width
     * @param int|null $height Animation height
     * @param \CURLFile|string|InputFile|null $thumbnail Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported
     *                                       server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's
     *                                       width and height should not exceed 320. Ignored if the file is not uploaded using
     *                                       multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can
     *                                       pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under
     *                                       <file_attach_name>. More information on Sending Files »
     * @param string|null $caption Animation caption (may also be used when resending animation by file_id), 0-1024 characters after
     *                                       entities parsing
     * @param string|null $parse_mode Mode for parsing entities in the animation caption. See formatting options for more details.
     * @param array|null $caption_entities A JSON-serialized list of special entities that appear in the caption, which can be specified
     *                                       instead of parse_mode
     * @param bool|null $show_caption_above_media Pass True, if the caption must be shown above the message media
     * @param bool|null $has_spoiler Pass True if the animation needs to be covered with a spoiler animation
     * @param bool|null $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool|null $protect_content Protects the contents of the sent message from forwarding and saving
     * @param string|null $message_effect_id Unique identifier of the message effect to be added to the message; for private chats only
     * @param array|null $reply_parameters Description of the message to reply to
     * @param array|null $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply
     *                                       keyboard, instructions to remove a reply keyboard or to force a reply from the user
     * @param string|null $business_connection_id Unique identifier of the business connection on behalf of which the message will be sent
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#sendanimation
     */
    public function sendAnimation(
        int|string $chat_id,
        \CURLFile|string|InputFile $animation,
        int $message_thread_id = null,
        int $duration = null,
        int $width = null,
        int $height = null,
        \CURLFile|string|InputFile $thumbnail = null,
        string $caption = null,
        string $parse_mode = null,
        array $caption_entities = null,
        bool $show_caption_above_media = null,
        bool $has_spoiler = null,
        bool $disable_notification = null,
        bool $protect_content = null,
        string $message_effect_id = null,
        array $reply_parameters = null,
        array $reply_markup = null,
        string $business_connection_id = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'animation' => $animation
        ];

        if (null !== $message_thread_id) $args['message_thread_id'] = $message_thread_id;
        if (null !== $duration) $args['duration'] = $duration;
        if (null !== $width) $args['width'] = $width;
        if (null !== $height) $args['height'] = $height;
        if (null !== $thumbnail) $args['thumbnail'] = $thumbnail;
        if (null !== $caption) $args['caption'] = $caption;
        if (null !== $parse_mode) $args['parse_mode'] = $parse_mode;
        if (null !== $caption_entities) $args['caption_entities'] = json_encode($caption_entities);
        if (null !== $show_caption_above_media) $args['show_caption_above_media'] = $show_caption_above_media;
        if (null !== $has_spoiler) $args['has_spoiler'] = $has_spoiler;
        if (null !== $disable_notification) $args['disable_notification'] = $disable_notification;
        if (null !== $protect_content) $args['protect_content'] = $protect_content;
        if (null !== $message_effect_id) $args['message_effect_id'] = $message_effect_id;
        if (null !== $reply_parameters) $args['reply_parameters'] = json_encode($reply_parameters);
        if (null !== $reply_markup) $args['reply_markup'] = json_encode($reply_markup);
        if (null !== $business_connection_id) $args['business_connection_id'] = $business_connection_id;

        return $this->Request('sendAnimation', $args);
    }

    /**
     * Use this method to send audio files, if you want Telegram clients to display the file as a playable
     * voice message. For this to work, your audio must be in an .OGG file encoded with OPUS, or in .MP3
     * format, or in .M4A format (other formats may be sent as Audio or Document). On success, the sent
     * Message is returned. Bots can currently send voice messages of up to 50 MB in size, this limit may
     * be changed in the future.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param int|null $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param \CURLFile|string|InputFile $voice Audio file to send. Pass a file_id as String to send a file that exists on the Telegram servers
     *                                       (recommended), pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload
     *                                       a new one using multipart/form-data. More information on Sending Files »
     * @param string|null $caption Voice message caption, 0-1024 characters after entities parsing
     * @param string|null $parse_mode Mode for parsing entities in the voice message caption. See formatting options for more details.
     * @param array|null $caption_entities A JSON-serialized list of special entities that appear in the caption, which can be specified
     *                                       instead of parse_mode
     * @param int|null $duration Duration of the voice message in seconds
     * @param bool|null $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool|null $protect_content Protects the contents of the sent message from forwarding and saving
     * @param string|null $message_effect_id Unique identifier of the message effect to be added to the message; for private chats only
     * @param array|null $reply_parameters Description of the message to reply to
     * @param array|null $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply
     *                                       keyboard, instructions to remove a reply keyboard or to force a reply from the user
     * @param string|null $business_connection_id Unique identifier of the business connection on behalf of which the message will be sent
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#sendvoice
     */
    public function sendVoice(
        int|string $chat_id,
        \CURLFile|string|InputFile $voice,
        int $message_thread_id = null,
        string $caption = null,
        string $parse_mode = null,
        array $caption_entities = null,
        int $duration = null,
        bool $disable_notification = null,
        bool $protect_content = null,
        string $message_effect_id = null,
        array $reply_parameters = null,
        array $reply_markup = null,
        string $business_connection_id = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'voice' => $voice
        ];

        if (null !== $message_thread_id) $args['message_thread_id'] = $message_thread_id;
        if (null !== $caption) $args['caption'] = $caption;
        if (null !== $parse_mode) $args['parse_mode'] = $parse_mode;
        if (null !== $caption_entities) $args['caption_entities'] = json_encode($caption_entities);
        if (null !== $duration) $args['duration'] = $duration;
        if (null !== $disable_notification) $args['disable_notification'] = $disable_notification;
        if (null !== $protect_content) $args['protect_content'] = $protect_content;
        if (null !== $message_effect_id) $args['message_effect_id'] = $message_effect_id;
        if (null !== $reply_parameters) $args['reply_parameters'] = json_encode($reply_parameters);
        if (null !== $reply_markup) $args['reply_markup'] = json_encode($reply_markup);
        if (null !== $business_connection_id) $args['business_connection_id'] = $business_connection_id;

        return $this->Request('sendVoice', $args);
    }

    /**
     * As of v.4.0, Telegram clients support rounded square MPEG4 videos of up to 1 minute long. Use this
     * method to send video messages. On success, the sent Message is returned.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param int|null $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param \CURLFile|string|InputFile $video_note Video note to send. Pass a file_id as String to send a video note that exists on the Telegram
     *                                       servers (recommended) or upload a new video using multipart/form-data. More information on Sending
     *                                       Files ». Sending video notes by a URL is currently unsupported
     * @param int|null $duration Duration of sent video in seconds
     * @param int|null $length Video width and height, i.e. diameter of the video message
     * @param \CURLFile|string|InputFile|null $thumbnail Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported
     *                                       server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's
     *                                       width and height should not exceed 320. Ignored if the file is not uploaded using
     *                                       multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can
     *                                       pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under
     *                                       <file_attach_name>. More information on Sending Files »
     * @param bool|null $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool|null $protect_content Protects the contents of the sent message from forwarding and saving
     * @param string|null $message_effect_id Unique identifier of the message effect to be added to the message; for private chats only
     * @param array|null $reply_parameters Description of the message to reply to
     * @param array|null $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply
     *                                       keyboard, instructions to remove a reply keyboard or to force a reply from the user
     * @param string|null $business_connection_id Unique identifier of the business connection on behalf of which the message will be sent
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#sendvideonote
     */
    public function sendVideoNote(
        int|string $chat_id,
        \CURLFile|string|InputFile $video_note,
        int $message_thread_id = null,
        int $duration = null,
        int $length = null,
        \CURLFile|string|InputFile $thumbnail = null,
        bool $disable_notification = null,
        bool $protect_content = null,
        string $message_effect_id = null,
        array $reply_parameters = null,
        array $reply_markup = null,
        string $business_connection_id = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'video_note' => $video_note
        ];

        if (null !== $message_thread_id) $args['message_thread_id'] = $message_thread_id;
        if (null !== $duration) $args['duration'] = $duration;
        if (null !== $length) $args['length'] = $length;
        if (null !== $thumbnail) $args['thumbnail'] = $thumbnail;
        if (null !== $disable_notification) $args['disable_notification'] = $disable_notification;
        if (null !== $protect_content) $args['protect_content'] = $protect_content;
        if (null !== $message_effect_id) $args['message_effect_id'] = $message_effect_id;
        if (null !== $reply_parameters) $args['reply_parameters'] = json_encode($reply_parameters);
        if (null !== $reply_markup) $args['reply_markup'] = json_encode($reply_markup);
        if (null !== $business_connection_id) $args['business_connection_id'] = $business_connection_id;

        return $this->Request('sendVideoNote', $args);
    }

    /**
     * Use this method to send paid media. On success, the sent Message is returned.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername). If the chat is a channel, all Telegram Star proceeds from this media will be
     *                                       credited to the chat's balance. Otherwise, they will be credited to the bot's balance.
     * @param int $star_count The number of Telegram Stars that must be paid to buy access to the media; 1-2500
     * @param array $media A JSON-serialized array describing the media to be sent; up to 10 items
     * @param string|null $payload Bot-defined paid media payload, 0-128 bytes. This will not be displayed to the user, use it for your
     *                                       internal processes.
     * @param string|null $caption Media caption, 0-1024 characters after entities parsing
     * @param string|null $parse_mode Mode for parsing entities in the media caption. See formatting options for more details.
     * @param array|null $caption_entities A JSON-serialized list of special entities that appear in the caption, which can be specified
     *                                       instead of parse_mode
     * @param bool|null $show_caption_above_media Pass True, if the caption must be shown above the message media
     * @param bool|null $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool|null $protect_content Protects the contents of the sent message from forwarding and saving
     * @param array|null $reply_parameters Description of the message to reply to
     * @param array|null $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply
     *                                       keyboard, instructions to remove a reply keyboard or to force a reply from the user
     * @param string|null $business_connection_id Unique identifier of the business connection on behalf of which the message will be sent
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#sendpaidmedia
     */
    public function sendPaidMedia(
        int|string $chat_id,
        int $star_count,
        array $media,
        string $payload = null,
        string $caption = null,
        string $parse_mode = null,
        array $caption_entities = null,
        bool $show_caption_above_media = null,
        bool $disable_notification = null,
        bool $protect_content = null,
        array $reply_parameters = null,
        array $reply_markup = null,
        string $business_connection_id = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'star_count' => $star_count,
            'media' => json_encode($media)
        ];

        if (null !== $payload) $args['payload'] = $payload;
        if (null !== $caption) $args['caption'] = $caption;
        if (null !== $parse_mode) $args['parse_mode'] = $parse_mode;
        if (null !== $caption_entities) $args['caption_entities'] = json_encode($caption_entities);
        if (null !== $show_caption_above_media) $args['show_caption_above_media'] = $show_caption_above_media;
        if (null !== $disable_notification) $args['disable_notification'] = $disable_notification;
        if (null !== $protect_content) $args['protect_content'] = $protect_content;
        if (null !== $reply_parameters) $args['reply_parameters'] = json_encode($reply_parameters);
        if (null !== $reply_markup) $args['reply_markup'] = json_encode($reply_markup);
        if (null !== $business_connection_id) $args['business_connection_id'] = $business_connection_id;

        return $this->Request('sendPaidMedia', $args);
    }

    /**
     * Use this method to send a group of photos, videos, documents or audios as an album. Documents and
     * audio files can be only grouped in an album with messages of the same type. On success, an array of
     * Messages that were sent is returned.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param int|null $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param array $media A JSON-serialized array describing messages to be sent, must include 2-10 items
     * @param bool|null $disable_notification Sends messages silently. Users will receive a notification with no sound.
     * @param bool|null $protect_content Protects the contents of the sent messages from forwarding and saving
     * @param string|null $message_effect_id Unique identifier of the message effect to be added to the message; for private chats only
     * @param array|null $reply_parameters Description of the message to reply to
     * @param string|null $business_connection_id Unique identifier of the business connection on behalf of which the message will be sent
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#sendmediagroup
     */
    public function sendMediaGroup(
        int|string $chat_id,
        array $media,
        int $message_thread_id = null,
        bool $disable_notification = null,
        bool $protect_content = null,
        string $message_effect_id = null,
        array $reply_parameters = null,
        string $business_connection_id = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
        ];

    foreach ($media as $key => $value) {
            if (is_object($value['media'])) {
                $args['upload' . $key] = $value['media'];
                $media[$key]['media'] = 'attach://upload' . $key;
            }
        }
        $args['media'] = json_encode($media);

        if (null !== $message_thread_id) $args['message_thread_id'] = $message_thread_id;
        if (null !== $disable_notification) $args['disable_notification'] = $disable_notification;
        if (null !== $protect_content) $args['protect_content'] = $protect_content;
        if (null !== $message_effect_id) $args['message_effect_id'] = $message_effect_id;
        if (null !== $reply_parameters) $args['reply_parameters'] = json_encode($reply_parameters);
        if (null !== $business_connection_id) $args['business_connection_id'] = $business_connection_id;

        return $this->Request('sendMediaGroup', $args);
    }

    /**
     * Use this method to send point on the map. On success, the sent Message is returned.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param int|null $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param float $latitude Latitude of the location
     * @param float $longitude Longitude of the location
     * @param float|null $horizontal_accuracy The radius of uncertainty for the location, measured in meters; 0-1500
     * @param int|null $live_period Period in seconds during which the location will be updated (see Live Locations, should be between
     *                                       60 and 86400, or 0x7FFFFFFF for live locations that can be edited indefinitely.
     * @param int|null $heading For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360
     *                                       if specified.
     * @param int|null $proximity_alert_radius For live locations, a maximum distance for proximity alerts about approaching another chat member,
     *                                       in meters. Must be between 1 and 100000 if specified.
     * @param bool|null $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool|null $protect_content Protects the contents of the sent message from forwarding and saving
     * @param string|null $message_effect_id Unique identifier of the message effect to be added to the message; for private chats only
     * @param array|null $reply_parameters Description of the message to reply to
     * @param array|null $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply
     *                                       keyboard, instructions to remove a reply keyboard or to force a reply from the user
     * @param string|null $business_connection_id Unique identifier of the business connection on behalf of which the message will be sent
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#sendlocation
     */
    public function sendLocation(
        int|string $chat_id,
        float $latitude,
        float $longitude,
        int $message_thread_id = null,
        float $horizontal_accuracy = null,
        int $live_period = null,
        int $heading = null,
        int $proximity_alert_radius = null,
        bool $disable_notification = null,
        bool $protect_content = null,
        string $message_effect_id = null,
        array $reply_parameters = null,
        array $reply_markup = null,
        string $business_connection_id = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'latitude' => $latitude,
            'longitude' => $longitude
        ];

        if (null !== $message_thread_id) $args['message_thread_id'] = $message_thread_id;
        if (null !== $horizontal_accuracy) $args['horizontal_accuracy'] = $horizontal_accuracy;
        if (null !== $live_period) $args['live_period'] = $live_period;
        if (null !== $heading) $args['heading'] = $heading;
        if (null !== $proximity_alert_radius) $args['proximity_alert_radius'] = $proximity_alert_radius;
        if (null !== $disable_notification) $args['disable_notification'] = $disable_notification;
        if (null !== $protect_content) $args['protect_content'] = $protect_content;
        if (null !== $message_effect_id) $args['message_effect_id'] = $message_effect_id;
        if (null !== $reply_parameters) $args['reply_parameters'] = json_encode($reply_parameters);
        if (null !== $reply_markup) $args['reply_markup'] = json_encode($reply_markup);
        if (null !== $business_connection_id) $args['business_connection_id'] = $business_connection_id;

        return $this->Request('sendLocation', $args);
    }

    /**
     * Use this method to send information about a venue. On success, the sent Message is returned.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param int|null $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param float $latitude Latitude of the venue
     * @param float $longitude Longitude of the venue
     * @param string $title Name of the venue
     * @param string $address Address of the venue
     * @param string|null $foursquare_id Foursquare identifier of the venue
     * @param string|null $foursquare_type Foursquare type of the venue, if known. (For example, “arts_entertainment/default”,
     *                                       “arts_entertainment/aquarium” or “food/icecream”.)
     * @param string|null $google_place_id Google Places identifier of the venue
     * @param string|null $google_place_type Google Places type of the venue. (See supported types.)
     * @param bool|null $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool|null $protect_content Protects the contents of the sent message from forwarding and saving
     * @param string|null $message_effect_id Unique identifier of the message effect to be added to the message; for private chats only
     * @param array|null $reply_parameters Description of the message to reply to
     * @param array|null $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply
     *                                       keyboard, instructions to remove a reply keyboard or to force a reply from the user
     * @param string|null $business_connection_id Unique identifier of the business connection on behalf of which the message will be sent
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#sendvenue
     */
    public function sendVenue(
        int|string $chat_id,
        float $latitude,
        float $longitude,
        string $title,
        string $address,
        int $message_thread_id = null,
        string $foursquare_id = null,
        string $foursquare_type = null,
        string $google_place_id = null,
        string $google_place_type = null,
        bool $disable_notification = null,
        bool $protect_content = null,
        string $message_effect_id = null,
        array $reply_parameters = null,
        array $reply_markup = null,
        string $business_connection_id = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'title' => $title,
            'address' => $address
        ];

        if (null !== $message_thread_id) $args['message_thread_id'] = $message_thread_id;
        if (null !== $foursquare_id) $args['foursquare_id'] = $foursquare_id;
        if (null !== $foursquare_type) $args['foursquare_type'] = $foursquare_type;
        if (null !== $google_place_id) $args['google_place_id'] = $google_place_id;
        if (null !== $google_place_type) $args['google_place_type'] = $google_place_type;
        if (null !== $disable_notification) $args['disable_notification'] = $disable_notification;
        if (null !== $protect_content) $args['protect_content'] = $protect_content;
        if (null !== $message_effect_id) $args['message_effect_id'] = $message_effect_id;
        if (null !== $reply_parameters) $args['reply_parameters'] = json_encode($reply_parameters);
        if (null !== $reply_markup) $args['reply_markup'] = json_encode($reply_markup);
        if (null !== $business_connection_id) $args['business_connection_id'] = $business_connection_id;

        return $this->Request('sendVenue', $args);
    }

    /**
     * Use this method to send phone contacts. On success, the sent Message is returned.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param int|null $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param string $phone_number Contact's phone number
     * @param string $first_name Contact's first name
     * @param string|null $last_name Contact's last name
     * @param string|null $vcard Additional data about the contact in the form of a vCard, 0-2048 bytes
     * @param bool|null $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool|null $protect_content Protects the contents of the sent message from forwarding and saving
     * @param string|null $message_effect_id Unique identifier of the message effect to be added to the message; for private chats only
     * @param array|null $reply_parameters Description of the message to reply to
     * @param array|null $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply
     *                                       keyboard, instructions to remove a reply keyboard or to force a reply from the user
     * @param string|null $business_connection_id Unique identifier of the business connection on behalf of which the message will be sent
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#sendcontact
     */
    public function sendContact(
        int|string $chat_id,
        string $phone_number,
        string $first_name,
        int $message_thread_id = null,
        string $last_name = null,
        string $vcard = null,
        bool $disable_notification = null,
        bool $protect_content = null,
        string $message_effect_id = null,
        array $reply_parameters = null,
        array $reply_markup = null,
        string $business_connection_id = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'phone_number' => $phone_number,
            'first_name' => $first_name
        ];

        if (null !== $message_thread_id) $args['message_thread_id'] = $message_thread_id;
        if (null !== $last_name) $args['last_name'] = $last_name;
        if (null !== $vcard) $args['vcard'] = $vcard;
        if (null !== $disable_notification) $args['disable_notification'] = $disable_notification;
        if (null !== $protect_content) $args['protect_content'] = $protect_content;
        if (null !== $message_effect_id) $args['message_effect_id'] = $message_effect_id;
        if (null !== $reply_parameters) $args['reply_parameters'] = json_encode($reply_parameters);
        if (null !== $reply_markup) $args['reply_markup'] = json_encode($reply_markup);
        if (null !== $business_connection_id) $args['business_connection_id'] = $business_connection_id;

        return $this->Request('sendContact', $args);
    }

    /**
     * Use this method to send a native poll. On success, the sent Message is returned.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param int|null $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param string $question Poll question, 1-300 characters
     * @param string|null $question_parse_mode Mode for parsing entities in the question. See formatting options for more details. Currently, only
     *                                       custom emoji entities are allowed
     * @param array|null $question_entities A JSON-serialized list of special entities that appear in the poll question. It can be specified
     *                                       instead of question_parse_mode
     * @param array $options A JSON-serialized list of 2-10 answer options
     * @param bool|null $is_anonymous True, if the poll needs to be anonymous, defaults to True
     * @param string|null $type Poll type, “quiz” or “regular”, defaults to “regular”
     * @param bool|null $allows_multiple_answers True, if the poll allows multiple answers, ignored for polls in quiz mode, defaults to False
     * @param int|null $correct_option_id 0-based identifier of the correct answer option, required for polls in quiz mode
     * @param string|null $explanation Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style
     *                                       poll, 0-200 characters with at most 2 line feeds after entities parsing
     * @param string|null $explanation_parse_mode Mode for parsing entities in the explanation. See formatting options for more details.
     * @param array|null $explanation_entities A JSON-serialized list of special entities that appear in the poll explanation. It can be specified
     *                                       instead of explanation_parse_mode
     * @param int|null $open_period Amount of time in seconds the poll will be active after creation, 5-600. Can't be used together with
     *                                       close_date.
     * @param int|null $close_date Point in time (Unix timestamp) when the poll will be automatically closed. Must be at least 5 and no
     *                                       more than 600 seconds in the future. Can't be used together with open_period.
     * @param bool|null $is_closed Pass True if the poll needs to be immediately closed. This can be useful for poll preview.
     * @param bool|null $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool|null $protect_content Protects the contents of the sent message from forwarding and saving
     * @param string|null $message_effect_id Unique identifier of the message effect to be added to the message; for private chats only
     * @param array|null $reply_parameters Description of the message to reply to
     * @param array|null $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply
     *                                       keyboard, instructions to remove a reply keyboard or to force a reply from the user
     * @param string|null $business_connection_id Unique identifier of the business connection on behalf of which the message will be sent
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#sendpoll
     */
    public function sendPoll(
        int|string $chat_id,
        string $question,
        array $options,
        int $message_thread_id = null,
        string $question_parse_mode = null,
        array $question_entities = null,
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
        bool $protect_content = null,
        string $message_effect_id = null,
        array $reply_parameters = null,
        array $reply_markup = null,
        string $business_connection_id = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'question' => $question,
            'options' => json_encode($options)
        ];

        if (null !== $message_thread_id) $args['message_thread_id'] = $message_thread_id;
        if (null !== $question_parse_mode) $args['question_parse_mode'] = $question_parse_mode;
        if (null !== $question_entities) $args['question_entities'] = json_encode($question_entities);
        if (null !== $is_anonymous) $args['is_anonymous'] = $is_anonymous;
        if (null !== $type) $args['type'] = $type;
        if (null !== $allows_multiple_answers) $args['allows_multiple_answers'] = $allows_multiple_answers;
        if (null !== $correct_option_id) $args['correct_option_id'] = $correct_option_id;
        if (null !== $explanation) $args['explanation'] = $explanation;
        if (null !== $explanation_parse_mode) $args['explanation_parse_mode'] = $explanation_parse_mode;
        if (null !== $explanation_entities) $args['explanation_entities'] = json_encode($explanation_entities);
        if (null !== $open_period) $args['open_period'] = $open_period;
        if (null !== $close_date) $args['close_date'] = $close_date;
        if (null !== $is_closed) $args['is_closed'] = $is_closed;
        if (null !== $disable_notification) $args['disable_notification'] = $disable_notification;
        if (null !== $protect_content) $args['protect_content'] = $protect_content;
        if (null !== $message_effect_id) $args['message_effect_id'] = $message_effect_id;
        if (null !== $reply_parameters) $args['reply_parameters'] = json_encode($reply_parameters);
        if (null !== $reply_markup) $args['reply_markup'] = json_encode($reply_markup);
        if (null !== $business_connection_id) $args['business_connection_id'] = $business_connection_id;

        return $this->Request('sendPoll', $args);
    }

    /**
     * Use this method to send an animated emoji that will display a random value. On success, the sent
     * Message is returned.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param int|null $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param string|null $emoji Emoji on which the dice throw animation is based. Currently, must be one of “🎲”, “🎯”,
     *                                       “🏀”, “⚽”, “🎳”, or “🎰”. Dice can have values 1-6 for “🎲”,
     *                                       “🎯” and “🎳”, values 1-5 for “🏀” and “⚽”, and values 1-64 for “🎰”.
     *                                       Defaults to “🎲”
     * @param bool|null $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool|null $protect_content Protects the contents of the sent message from forwarding
     * @param string|null $message_effect_id Unique identifier of the message effect to be added to the message; for private chats only
     * @param array|null $reply_parameters Description of the message to reply to
     * @param array|null $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply
     *                                       keyboard, instructions to remove a reply keyboard or to force a reply from the user
     * @param string|null $business_connection_id Unique identifier of the business connection on behalf of which the message will be sent
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#senddice
     */
    public function sendDice(
        int|string $chat_id,
        int $message_thread_id = null,
        string $emoji = null,
        bool $disable_notification = null,
        bool $protect_content = null,
        string $message_effect_id = null,
        array $reply_parameters = null,
        array $reply_markup = null,
        string $business_connection_id = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id
        ];

        if (null !== $message_thread_id) $args['message_thread_id'] = $message_thread_id;
        if (null !== $emoji) $args['emoji'] = $emoji;
        if (null !== $disable_notification) $args['disable_notification'] = $disable_notification;
        if (null !== $protect_content) $args['protect_content'] = $protect_content;
        if (null !== $message_effect_id) $args['message_effect_id'] = $message_effect_id;
        if (null !== $reply_parameters) $args['reply_parameters'] = json_encode($reply_parameters);
        if (null !== $reply_markup) $args['reply_markup'] = json_encode($reply_markup);
        if (null !== $business_connection_id) $args['business_connection_id'] = $business_connection_id;

        return $this->Request('sendDice', $args);
    }

    /**
     * Use this method when you need to tell the user that something is happening on the bot's side. The
     * status is set for 5 seconds or less (when a message arrives from your bot, Telegram clients clear
     * its typing status). Returns True on success.
     * We only recommend using this method when a response from the bot will take a noticeable amount of
     * time to arrive.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param int|null $message_thread_id Unique identifier for the target message thread; for supergroups only
     * @param string $action Type of action to broadcast. Choose one, depending on what the user is about to receive: typing for
     *                                       text messages, upload_photo for photos, record_video or upload_video for videos, record_voice or
     *                                       upload_voice for voice notes, upload_document for general files, choose_sticker for stickers,
     *                                       find_location for location data, record_video_note or upload_video_note for video notes.
     * @param string|null $business_connection_id Unique identifier of the business connection on behalf of which the action will be sent
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#sendchataction
     */
    public function sendChatAction(
        int|string $chat_id,
        string $action,
        int $message_thread_id = null,
        string $business_connection_id = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'action' => $action
        ];

        if (null !== $message_thread_id) $args['message_thread_id'] = $message_thread_id;
        if (null !== $business_connection_id) $args['business_connection_id'] = $business_connection_id;

        return $this->Request('sendChatAction', $args);
    }

    /**
     * Use this method to change the chosen reactions on a message. Service messages can't be reacted to.
     * Automatically forwarded messages from a channel to its discussion group have the same available
     * reactions as messages in the channel. Bots can't use paid reactions. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param int $message_id Identifier of the target message. If the message belongs to a media group, the reaction is set to
     *                                       the first non-deleted message in the group instead.
     * @param array|null $reaction A JSON-serialized list of reaction types to set on the message. Currently, as non-premium users,
     *                                       bots can set up to one reaction per message. A custom emoji reaction can be used if it is either
     *                                       already present on the message or explicitly allowed by chat administrators. Paid reactions can't be
     *                                       used by bots.
     * @param bool|null $is_big Pass True to set the reaction with a big animation
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#setmessagereaction
     */
    public function setMessageReaction(
        int|string $chat_id,
        int $message_id,
        array $reaction = null,
        bool $is_big = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'message_id' => $message_id
        ];

        if (null !== $reaction) $args['reaction'] = json_encode($reaction);
        if (null !== $is_big) $args['is_big'] = $is_big;

        return $this->Request('setMessageReaction', $args);
    }

    /**
     * Use this method to get a list of profile pictures for a user. Returns a UserProfilePhotos object.
     *
     * @param int $user_id Unique identifier of the target user
     * @param int|null $offset Sequential number of the first photo to be returned. By default, all photos are returned.
     * @param int|null $limit Limits the number of photos to be retrieved. Values between 1-100 are accepted. Defaults to 100.
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#getuserprofilephotos
     */
    public function getUserProfilePhotos(
        int $user_id,
        int $offset = null,
        int $limit = null
    ): \stdClass {
        $args = [
            'user_id' => $user_id
        ];

        if (null !== $offset) $args['offset'] = $offset;
        if (null !== $limit) $args['limit'] = $limit;

        return $this->Request('getUserProfilePhotos', $args);
    }

    /**
     * Use this method to get basic information about a file and prepare it for downloading. For the
     * moment, bots can download files of up to 20MB in size. On success, a File object is returned. The
     * file can then be downloaded via the link https://api.telegram.org/file/bot<token>/<file_path>, where
     * <file_path> is taken from the response. It is guaranteed that the link will be valid for at least 1
     * hour. When the link expires, a new one can be requested by calling getFile again.
     *
     * @param string $file_id File identifier to get information about
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#getfile
     */
    public function getFile(
        string $file_id
    ): \stdClass {
        $args = [
            'file_id' => $file_id
        ];


        return $this->Request('getFile', $args);
    }

    /**
     * Use this method to ban a user in a group, a supergroup or a channel. In the case of supergroups and
     * channels, the user will not be able to return to the chat on their own using invite links, etc.,
     * unless unbanned first. The bot must be an administrator in the chat for this to work and must have
     * the appropriate administrator rights. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target group or username of the target supergroup or channel (in the
     *                                       format @channelusername)
     * @param int $user_id Unique identifier of the target user
     * @param int|null $until_date Date when the user will be unbanned; Unix time. If user is banned for more than 366 days or less
     *                                       than 30 seconds from the current time they are considered to be banned forever. Applied for
     *                                       supergroups and channels only.
     * @param bool|null $revoke_messages Pass True to delete all messages from the chat for the user that is being removed. If False, the
     *                                       user will be able to see messages in the group that were sent before the user was removed. Always
     *                                       True for supergroups and channels.
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#banchatmember
     */
    public function banChatMember(
        int|string $chat_id,
        int $user_id,
        int $until_date = null,
        bool $revoke_messages = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'user_id' => $user_id
        ];

        if (null !== $until_date) $args['until_date'] = $until_date;
        if (null !== $revoke_messages) $args['revoke_messages'] = $revoke_messages;

        return $this->Request('banChatMember', $args);
    }

    /**
     * Use this method to unban a previously banned user in a supergroup or channel. The user will not
     * return to the group or channel automatically, but will be able to join via link, etc. The bot must
     * be an administrator for this to work. By default, this method guarantees that after the call the
     * user is not a member of the chat, but will be able to join it. So if the user is a member of the
     * chat they will also be removed from the chat. If you don't want this, use the parameter
     * only_if_banned. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target group or username of the target supergroup or channel (in the
     *                                       format @channelusername)
     * @param int $user_id Unique identifier of the target user
     * @param bool|null $only_if_banned Do nothing if the user is not banned
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#unbanchatmember
     */
    public function unbanChatMember(
        int|string $chat_id,
        int $user_id,
        bool $only_if_banned = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'user_id' => $user_id
        ];

        if (null !== $only_if_banned) $args['only_if_banned'] = $only_if_banned;

        return $this->Request('unbanChatMember', $args);
    }

    /**
     * Use this method to restrict a user in a supergroup. The bot must be an administrator in the
     * supergroup for this to work and must have the appropriate administrator rights. Pass True for all
     * permissions to lift restrictions from a user. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format
     *                                       @supergroupusername)
     * @param int $user_id Unique identifier of the target user
     * @param array $permissions A JSON-serialized object for new user permissions
     * @param bool|null $use_independent_chat_permissions Pass True if chat permissions are set independently. Otherwise, the can_send_other_messages and
     *                                       can_add_web_page_previews permissions will imply the can_send_messages, can_send_audios,
     *                                       can_send_documents, can_send_photos, can_send_videos, can_send_video_notes, and can_send_voice_notes
     *                                       permissions; the can_send_polls permission will imply the can_send_messages permission.
     * @param int|null $until_date Date when restrictions will be lifted for the user; Unix time. If user is restricted for more than
     *                                       366 days or less than 30 seconds from the current time, they are considered to be restricted forever
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#restrictchatmember
     */
    public function restrictChatMember(
        int|string $chat_id,
        int $user_id,
        array $permissions,
        bool $use_independent_chat_permissions = null,
        int $until_date = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'user_id' => $user_id,
            'permissions' => json_encode($permissions)
        ];

        if (null !== $use_independent_chat_permissions) $args['use_independent_chat_permissions'] = $use_independent_chat_permissions;
        if (null !== $until_date) $args['until_date'] = $until_date;

        return $this->Request('restrictChatMember', $args);
    }

    /**
     * Use this method to promote or demote a user in a supergroup or a channel. The bot must be an
     * administrator in the chat for this to work and must have the appropriate administrator rights. Pass
     * False for all boolean parameters to demote a user. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param int $user_id Unique identifier of the target user
     * @param bool|null $is_anonymous Pass True if the administrator's presence in the chat is hidden
     * @param bool|null $can_manage_chat Pass True if the administrator can access the chat event log, get boost list, see hidden supergroup
     *                                       and channel members, report spam messages and ignore slow mode. Implied by any other administrator
     *                                       privilege.
     * @param bool|null $can_delete_messages Pass True if the administrator can delete messages of other users
     * @param bool|null $can_manage_video_chats Pass True if the administrator can manage video chats
     * @param bool|null $can_restrict_members Pass True if the administrator can restrict, ban or unban chat members, or access supergroup
     *                                       statistics
     * @param bool|null $can_promote_members Pass True if the administrator can add new administrators with a subset of their own privileges or
     *                                       demote administrators that they have promoted, directly or indirectly (promoted by administrators
     *                                       that were appointed by him)
     * @param bool|null $can_change_info Pass True if the administrator can change chat title, photo and other settings
     * @param bool|null $can_invite_users Pass True if the administrator can invite new users to the chat
     * @param bool|null $can_post_stories Pass True if the administrator can post stories to the chat
     * @param bool|null $can_edit_stories Pass True if the administrator can edit stories posted by other users, post stories to the chat
     *                                       page, pin chat stories, and access the chat's story archive
     * @param bool|null $can_delete_stories Pass True if the administrator can delete stories posted by other users
     * @param bool|null $can_post_messages Pass True if the administrator can post messages in the channel, or access channel statistics; for
     *                                       channels only
     * @param bool|null $can_edit_messages Pass True if the administrator can edit messages of other users and can pin messages; for channels
     *                                       only
     * @param bool|null $can_pin_messages Pass True if the administrator can pin messages; for supergroups only
     * @param bool|null $can_manage_topics Pass True if the user is allowed to create, rename, close, and reopen forum topics; for supergroups
     *                                       only
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#promotechatmember
     */
    public function promoteChatMember(
        int|string $chat_id,
        int $user_id,
        bool $is_anonymous = null,
        bool $can_manage_chat = null,
        bool $can_delete_messages = null,
        bool $can_manage_video_chats = null,
        bool $can_restrict_members = null,
        bool $can_promote_members = null,
        bool $can_change_info = null,
        bool $can_invite_users = null,
        bool $can_post_stories = null,
        bool $can_edit_stories = null,
        bool $can_delete_stories = null,
        bool $can_post_messages = null,
        bool $can_edit_messages = null,
        bool $can_pin_messages = null,
        bool $can_manage_topics = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'user_id' => $user_id
        ];

        if (null !== $is_anonymous) $args['is_anonymous'] = $is_anonymous;
        if (null !== $can_manage_chat) $args['can_manage_chat'] = $can_manage_chat;
        if (null !== $can_delete_messages) $args['can_delete_messages'] = $can_delete_messages;
        if (null !== $can_manage_video_chats) $args['can_manage_video_chats'] = $can_manage_video_chats;
        if (null !== $can_restrict_members) $args['can_restrict_members'] = $can_restrict_members;
        if (null !== $can_promote_members) $args['can_promote_members'] = $can_promote_members;
        if (null !== $can_change_info) $args['can_change_info'] = $can_change_info;
        if (null !== $can_invite_users) $args['can_invite_users'] = $can_invite_users;
        if (null !== $can_post_stories) $args['can_post_stories'] = $can_post_stories;
        if (null !== $can_edit_stories) $args['can_edit_stories'] = $can_edit_stories;
        if (null !== $can_delete_stories) $args['can_delete_stories'] = $can_delete_stories;
        if (null !== $can_post_messages) $args['can_post_messages'] = $can_post_messages;
        if (null !== $can_edit_messages) $args['can_edit_messages'] = $can_edit_messages;
        if (null !== $can_pin_messages) $args['can_pin_messages'] = $can_pin_messages;
        if (null !== $can_manage_topics) $args['can_manage_topics'] = $can_manage_topics;

        return $this->Request('promoteChatMember', $args);
    }

    /**
     * Use this method to set a custom title for an administrator in a supergroup promoted by the bot.
     * Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format
     *                                       @supergroupusername)
     * @param int $user_id Unique identifier of the target user
     * @param string $custom_title New custom title for the administrator; 0-16 characters, emoji are not allowed
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#setchatadministratorcustomtitle
     */
    public function setChatAdministratorCustomTitle(
        int|string $chat_id,
        int $user_id,
        string $custom_title
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'user_id' => $user_id,
            'custom_title' => $custom_title
        ];


        return $this->Request('setChatAdministratorCustomTitle', $args);
    }

    /**
     * Use this method to ban a channel chat in a supergroup or a channel. Until the chat is unbanned, the
     * owner of the banned chat won't be able to send messages on behalf of any of their channels. The bot
     * must be an administrator in the supergroup or channel for this to work and must have the appropriate
     * administrator rights. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param int $sender_chat_id Unique identifier of the target sender chat
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#banchatsenderchat
     */
    public function banChatSenderChat(
        int|string $chat_id,
        int $sender_chat_id
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'sender_chat_id' => $sender_chat_id
        ];


        return $this->Request('banChatSenderChat', $args);
    }

    /**
     * Use this method to unban a previously banned channel chat in a supergroup or channel. The bot must
     * be an administrator for this to work and must have the appropriate administrator rights. Returns
     * True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param int $sender_chat_id Unique identifier of the target sender chat
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#unbanchatsenderchat
     */
    public function unbanChatSenderChat(
        int|string $chat_id,
        int $sender_chat_id
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'sender_chat_id' => $sender_chat_id
        ];


        return $this->Request('unbanChatSenderChat', $args);
    }

    /**
     * Use this method to set default chat permissions for all members. The bot must be an administrator in
     * the group or a supergroup for this to work and must have the can_restrict_members administrator
     * rights. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format
     *                                       @supergroupusername)
     * @param array $permissions A JSON-serialized object for new default chat permissions
     * @param bool|null $use_independent_chat_permissions Pass True if chat permissions are set independently. Otherwise, the can_send_other_messages and
     *                                       can_add_web_page_previews permissions will imply the can_send_messages, can_send_audios,
     *                                       can_send_documents, can_send_photos, can_send_videos, can_send_video_notes, and can_send_voice_notes
     *                                       permissions; the can_send_polls permission will imply the can_send_messages permission.
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#setchatpermissions
     */
    public function setChatPermissions(
        int|string $chat_id,
        array $permissions,
        bool $use_independent_chat_permissions = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'permissions' => json_encode($permissions)
        ];

        if (null !== $use_independent_chat_permissions) $args['use_independent_chat_permissions'] = $use_independent_chat_permissions;

        return $this->Request('setChatPermissions', $args);
    }

    /**
     * Use this method to generate a new primary invite link for a chat; any previously generated primary
     * link is revoked. The bot must be an administrator in the chat for this to work and must have the
     * appropriate administrator rights. Returns the new invite link as String on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#exportchatinvitelink
     */
    public function exportChatInviteLink(
        int|string $chat_id
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id
        ];


        return $this->Request('exportChatInviteLink', $args);
    }

    /**
     * Use this method to create an additional invite link for a chat. The bot must be an administrator in
     * the chat for this to work and must have the appropriate administrator rights. The link can be
     * revoked using the method revokeChatInviteLink. Returns the new invite link as ChatInviteLink object.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param string|null $name Invite link name; 0-32 characters
     * @param int|null $expire_date Point in time (Unix timestamp) when the link will expire
     * @param int|null $member_limit The maximum number of users that can be members of the chat simultaneously after joining the chat
     *                                       via this invite link; 1-99999
     * @param bool|null $creates_join_request True, if users joining the chat via the link need to be approved by chat administrators. If True,
     *                                       member_limit can't be specified
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#createchatinvitelink
     */
    public function createChatInviteLink(
        int|string $chat_id,
        string $name = null,
        int $expire_date = null,
        int $member_limit = null,
        bool $creates_join_request = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id
        ];

        if (null !== $name) $args['name'] = $name;
        if (null !== $expire_date) $args['expire_date'] = $expire_date;
        if (null !== $member_limit) $args['member_limit'] = $member_limit;
        if (null !== $creates_join_request) $args['creates_join_request'] = $creates_join_request;

        return $this->Request('createChatInviteLink', $args);
    }

    /**
     * Use this method to edit a non-primary invite link created by the bot. The bot must be an
     * administrator in the chat for this to work and must have the appropriate administrator rights.
     * Returns the edited invite link as a ChatInviteLink object.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param string $invite_link The invite link to edit
     * @param string|null $name Invite link name; 0-32 characters
     * @param int|null $expire_date Point in time (Unix timestamp) when the link will expire
     * @param int|null $member_limit The maximum number of users that can be members of the chat simultaneously after joining the chat
     *                                       via this invite link; 1-99999
     * @param bool|null $creates_join_request True, if users joining the chat via the link need to be approved by chat administrators. If True,
     *                                       member_limit can't be specified
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#editchatinvitelink
     */
    public function editChatInviteLink(
        int|string $chat_id,
        string $invite_link,
        string $name = null,
        int $expire_date = null,
        int $member_limit = null,
        bool $creates_join_request = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'invite_link' => $invite_link
        ];

        if (null !== $name) $args['name'] = $name;
        if (null !== $expire_date) $args['expire_date'] = $expire_date;
        if (null !== $member_limit) $args['member_limit'] = $member_limit;
        if (null !== $creates_join_request) $args['creates_join_request'] = $creates_join_request;

        return $this->Request('editChatInviteLink', $args);
    }

    /**
     * Use this method to create a subscription invite link for a channel chat. The bot must have the
     * can_invite_users administrator rights. The link can be edited using the method
     * editChatSubscriptionInviteLink or revoked using the method revokeChatInviteLink. Returns the new
     * invite link as a ChatInviteLink object.
     *
     * @param int|string $chat_id Unique identifier for the target channel chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param string|null $name Invite link name; 0-32 characters
     * @param int $subscription_period The number of seconds the subscription will be active for before the next payment. Currently, it
     *                                       must always be 2592000 (30 days).
     * @param int $subscription_price The amount of Telegram Stars a user must pay initially and after each subsequent subscription period
     *                                       to be a member of the chat; 1-2500
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#createchatsubscriptioninvitelink
     */
    public function createChatSubscriptionInviteLink(
        int|string $chat_id,
        int $subscription_period,
        int $subscription_price,
        string $name = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'subscription_period' => $subscription_period,
            'subscription_price' => $subscription_price
        ];

        if (null !== $name) $args['name'] = $name;

        return $this->Request('createChatSubscriptionInviteLink', $args);
    }

    /**
     * Use this method to edit a subscription invite link created by the bot. The bot must have the
     * can_invite_users administrator rights. Returns the edited invite link as a ChatInviteLink object.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param string $invite_link The invite link to edit
     * @param string|null $name Invite link name; 0-32 characters
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#editchatsubscriptioninvitelink
     */
    public function editChatSubscriptionInviteLink(
        int|string $chat_id,
        string $invite_link,
        string $name = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'invite_link' => $invite_link
        ];

        if (null !== $name) $args['name'] = $name;

        return $this->Request('editChatSubscriptionInviteLink', $args);
    }

    /**
     * Use this method to revoke an invite link created by the bot. If the primary link is revoked, a new
     * link is automatically generated. The bot must be an administrator in the chat for this to work and
     * must have the appropriate administrator rights. Returns the revoked invite link as ChatInviteLink
     * object.
     *
     * @param int|string $chat_id Unique identifier of the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param string $invite_link The invite link to revoke
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#revokechatinvitelink
     */
    public function revokeChatInviteLink(
        int|string $chat_id,
        string $invite_link
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'invite_link' => $invite_link
        ];


        return $this->Request('revokeChatInviteLink', $args);
    }

    /**
     * Use this method to approve a chat join request. The bot must be an administrator in the chat for
     * this to work and must have the can_invite_users administrator right. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param int $user_id Unique identifier of the target user
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#approvechatjoinrequest
     */
    public function approveChatJoinRequest(
        int|string $chat_id,
        int $user_id
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'user_id' => $user_id
        ];


        return $this->Request('approveChatJoinRequest', $args);
    }

    /**
     * Use this method to decline a chat join request. The bot must be an administrator in the chat for
     * this to work and must have the can_invite_users administrator right. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param int $user_id Unique identifier of the target user
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#declinechatjoinrequest
     */
    public function declineChatJoinRequest(
        int|string $chat_id,
        int $user_id
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'user_id' => $user_id
        ];


        return $this->Request('declineChatJoinRequest', $args);
    }

    /**
     * Use this method to set a new profile photo for the chat. Photos can't be changed for private chats.
     * The bot must be an administrator in the chat for this to work and must have the appropriate
     * administrator rights. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param \CURLFile $photo New chat photo, uploaded using multipart/form-data
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#setchatphoto
     */
    public function setChatPhoto(
        int|string $chat_id,
        \CURLFile $photo
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'photo' => $photo
        ];


        return $this->Request('setChatPhoto', $args);
    }

    /**
     * Use this method to delete a chat photo. Photos can't be changed for private chats. The bot must be
     * an administrator in the chat for this to work and must have the appropriate administrator rights.
     * Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#deletechatphoto
     */
    public function deleteChatPhoto(
        int|string $chat_id
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id
        ];


        return $this->Request('deleteChatPhoto', $args);
    }

    /**
     * Use this method to change the title of a chat. Titles can't be changed for private chats. The bot
     * must be an administrator in the chat for this to work and must have the appropriate administrator
     * rights. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param string $title New chat title, 1-128 characters
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#setchattitle
     */
    public function setChatTitle(
        int|string $chat_id,
        string $title
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'title' => $title
        ];


        return $this->Request('setChatTitle', $args);
    }

    /**
     * Use this method to change the description of a group, a supergroup or a channel. The bot must be an
     * administrator in the chat for this to work and must have the appropriate administrator rights.
     * Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param string|null $description New chat description, 0-255 characters
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#setchatdescription
     */
    public function setChatDescription(
        int|string $chat_id,
        string $description = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id
        ];

        if (null !== $description) $args['description'] = $description;

        return $this->Request('setChatDescription', $args);
    }

    /**
     * Use this method to add a message to the list of pinned messages in a chat. If the chat is not a
     * private chat, the bot must be an administrator in the chat for this to work and must have the
     * 'can_pin_messages' administrator right in a supergroup or 'can_edit_messages' administrator right in
     * a channel. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param int $message_id Identifier of a message to pin
     * @param bool|null $disable_notification Pass True if it is not necessary to send a notification to all chat members about the new pinned
     *                                       message. Notifications are always disabled in channels and private chats.
     * @param string|null $business_connection_id Unique identifier of the business connection on behalf of which the message will be pinned
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#pinchatmessage
     */
    public function pinChatMessage(
        int|string $chat_id,
        int $message_id,
        bool $disable_notification = null,
        string $business_connection_id = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'message_id' => $message_id
        ];

        if (null !== $disable_notification) $args['disable_notification'] = $disable_notification;
        if (null !== $business_connection_id) $args['business_connection_id'] = $business_connection_id;

        return $this->Request('pinChatMessage', $args);
    }

    /**
     * Use this method to remove a message from the list of pinned messages in a chat. If the chat is not a
     * private chat, the bot must be an administrator in the chat for this to work and must have the
     * 'can_pin_messages' administrator right in a supergroup or 'can_edit_messages' administrator right in
     * a channel. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param int|null $message_id Identifier of the message to unpin. Required if business_connection_id is specified. If not
     *                                       specified, the most recent pinned message (by sending date) will be unpinned.
     * @param string|null $business_connection_id Unique identifier of the business connection on behalf of which the message will be unpinned
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#unpinchatmessage
     */
    public function unpinChatMessage(
        int|string $chat_id,
        int $message_id = null,
        string $business_connection_id = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id
        ];

        if (null !== $message_id) $args['message_id'] = $message_id;
        if (null !== $business_connection_id) $args['business_connection_id'] = $business_connection_id;

        return $this->Request('unpinChatMessage', $args);
    }

    /**
     * Use this method to clear the list of pinned messages in a chat. If the chat is not a private chat,
     * the bot must be an administrator in the chat for this to work and must have the 'can_pin_messages'
     * administrator right in a supergroup or 'can_edit_messages' administrator right in a channel. Returns
     * True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#unpinallchatmessages
     */
    public function unpinAllChatMessages(
        int|string $chat_id
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id
        ];


        return $this->Request('unpinAllChatMessages', $args);
    }

    /**
     * Use this method for your bot to leave a group, supergroup or channel. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup or channel (in the format
     *                                       @channelusername)
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#leavechat
     */
    public function leaveChat(
        int|string $chat_id
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id
        ];


        return $this->Request('leaveChat', $args);
    }

    /**
     * Use this method to get up-to-date information about the chat. Returns a ChatFullInfo object on
     * success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup or channel (in the format
     *                                       @channelusername)
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#getchat
     */
    public function getChat(
        int|string $chat_id
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id
        ];


        return $this->Request('getChat', $args);
    }

    /**
     * Use this method to get a list of administrators in a chat, which aren't bots. Returns an Array of
     * ChatMember objects.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup or channel (in the format
     *                                       @channelusername)
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#getchatadministrators
     */
    public function getChatAdministrators(
        int|string $chat_id
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id
        ];


        return $this->Request('getChatAdministrators', $args);
    }

    /**
     * Use this method to get the number of members in a chat. Returns Int on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup or channel (in the format
     *                                       @channelusername)
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#getchatmembercount
     */
    public function getChatMemberCount(
        int|string $chat_id
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id
        ];


        return $this->Request('getChatMemberCount', $args);
    }

    /**
     * Use this method to get information about a member of a chat. The method is only guaranteed to work
     * for other users if the bot is an administrator in the chat. Returns a ChatMember object on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup or channel (in the format
     *                                       @channelusername)
     * @param int $user_id Unique identifier of the target user
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#getchatmember
     */
    public function getChatMember(
        int|string $chat_id,
        int $user_id
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'user_id' => $user_id
        ];


        return $this->Request('getChatMember', $args);
    }

    /**
     * Use this method to set a new group sticker set for a supergroup. The bot must be an administrator in
     * the chat for this to work and must have the appropriate administrator rights. Use the field
     * can_set_sticker_set optionally returned in getChat requests to check if the bot can use this method.
     * Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format
     *                                       @supergroupusername)
     * @param string $sticker_set_name Name of the sticker set to be set as the group sticker set
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#setchatstickerset
     */
    public function setChatStickerSet(
        int|string $chat_id,
        string $sticker_set_name
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'sticker_set_name' => $sticker_set_name
        ];


        return $this->Request('setChatStickerSet', $args);
    }

    /**
     * Use this method to delete a group sticker set from a supergroup. The bot must be an administrator in
     * the chat for this to work and must have the appropriate administrator rights. Use the field
     * can_set_sticker_set optionally returned in getChat requests to check if the bot can use this method.
     * Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format
     *                                       @supergroupusername)
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#deletechatstickerset
     */
    public function deleteChatStickerSet(
        int|string $chat_id
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id
        ];


        return $this->Request('deleteChatStickerSet', $args);
    }

    /**
     * Use this method to get custom emoji stickers, which can be used as a forum topic icon by any user.
     * Requires no parameters. Returns an Array of Sticker objects.
     *
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#getforumtopiciconstickers
     */
    public function getForumTopicIconStickers(): \stdClass {
        return $this->Request('getForumTopicIconStickers', []);
    }

    /**
     * Use this method to create a topic in a forum supergroup chat. The bot must be an administrator in
     * the chat for this to work and must have the can_manage_topics administrator rights. Returns
     * information about the created topic as a ForumTopic object.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format
     *                                       @supergroupusername)
     * @param string $name Topic name, 1-128 characters
     * @param int|null $icon_color Color of the topic icon in RGB format. Currently, must be one of 7322096 (0x6FB9F0), 16766590
     *                                       (0xFFD67E), 13338331 (0xCB86DB), 9367192 (0x8EEE98), 16749490 (0xFF93B2), or 16478047 (0xFB6F5F)
     * @param string|null $icon_custom_emoji_id Unique identifier of the custom emoji shown as the topic icon. Use getForumTopicIconStickers to get
     *                                       all allowed custom emoji identifiers.
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#createforumtopic
     */
    public function createForumTopic(
        int|string $chat_id,
        string $name,
        int $icon_color = null,
        string $icon_custom_emoji_id = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'name' => $name
        ];

        if (null !== $icon_color) $args['icon_color'] = $icon_color;
        if (null !== $icon_custom_emoji_id) $args['icon_custom_emoji_id'] = $icon_custom_emoji_id;

        return $this->Request('createForumTopic', $args);
    }

    /**
     * Use this method to edit name and icon of a topic in a forum supergroup chat. The bot must be an
     * administrator in the chat for this to work and must have the can_manage_topics administrator rights,
     * unless it is the creator of the topic. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format
     *                                       @supergroupusername)
     * @param int $message_thread_id Unique identifier for the target message thread of the forum topic
     * @param string|null $name New topic name, 0-128 characters. If not specified or empty, the current name of the topic will be
     *                                       kept
     * @param string|null $icon_custom_emoji_id New unique identifier of the custom emoji shown as the topic icon. Use getForumTopicIconStickers to
     *                                       get all allowed custom emoji identifiers. Pass an empty string to remove the icon. If not specified,
     *                                       the current icon will be kept
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#editforumtopic
     */
    public function editForumTopic(
        int|string $chat_id,
        int $message_thread_id,
        string $name = null,
        string $icon_custom_emoji_id = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'message_thread_id' => $message_thread_id
        ];

        if (null !== $name) $args['name'] = $name;
        if (null !== $icon_custom_emoji_id) $args['icon_custom_emoji_id'] = $icon_custom_emoji_id;

        return $this->Request('editForumTopic', $args);
    }

    /**
     * Use this method to close an open topic in a forum supergroup chat. The bot must be an administrator
     * in the chat for this to work and must have the can_manage_topics administrator rights, unless it is
     * the creator of the topic. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format
     *                                       @supergroupusername)
     * @param int $message_thread_id Unique identifier for the target message thread of the forum topic
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#closeforumtopic
     */
    public function closeForumTopic(
        int|string $chat_id,
        int $message_thread_id
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'message_thread_id' => $message_thread_id
        ];


        return $this->Request('closeForumTopic', $args);
    }

    /**
     * Use this method to reopen a closed topic in a forum supergroup chat. The bot must be an
     * administrator in the chat for this to work and must have the can_manage_topics administrator rights,
     * unless it is the creator of the topic. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format
     *                                       @supergroupusername)
     * @param int $message_thread_id Unique identifier for the target message thread of the forum topic
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#reopenforumtopic
     */
    public function reopenForumTopic(
        int|string $chat_id,
        int $message_thread_id
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'message_thread_id' => $message_thread_id
        ];


        return $this->Request('reopenForumTopic', $args);
    }

    /**
     * Use this method to delete a forum topic along with all its messages in a forum supergroup chat. The
     * bot must be an administrator in the chat for this to work and must have the can_delete_messages
     * administrator rights. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format
     *                                       @supergroupusername)
     * @param int $message_thread_id Unique identifier for the target message thread of the forum topic
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#deleteforumtopic
     */
    public function deleteForumTopic(
        int|string $chat_id,
        int $message_thread_id
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'message_thread_id' => $message_thread_id
        ];


        return $this->Request('deleteForumTopic', $args);
    }

    /**
     * Use this method to clear the list of pinned messages in a forum topic. The bot must be an
     * administrator in the chat for this to work and must have the can_pin_messages administrator right in
     * the supergroup. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format
     *                                       @supergroupusername)
     * @param int $message_thread_id Unique identifier for the target message thread of the forum topic
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#unpinallforumtopicmessages
     */
    public function unpinAllForumTopicMessages(
        int|string $chat_id,
        int $message_thread_id
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'message_thread_id' => $message_thread_id
        ];


        return $this->Request('unpinAllForumTopicMessages', $args);
    }

    /**
     * Use this method to edit the name of the 'General' topic in a forum supergroup chat. The bot must be
     * an administrator in the chat for this to work and must have the can_manage_topics administrator
     * rights. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format
     *                                       @supergroupusername)
     * @param string $name New topic name, 1-128 characters
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#editgeneralforumtopic
     */
    public function editGeneralForumTopic(
        int|string $chat_id,
        string $name
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'name' => $name
        ];


        return $this->Request('editGeneralForumTopic', $args);
    }

    /**
     * Use this method to close an open 'General' topic in a forum supergroup chat. The bot must be an
     * administrator in the chat for this to work and must have the can_manage_topics administrator rights.
     * Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format
     *                                       @supergroupusername)
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#closegeneralforumtopic
     */
    public function closeGeneralForumTopic(
        int|string $chat_id
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id
        ];


        return $this->Request('closeGeneralForumTopic', $args);
    }

    /**
     * Use this method to reopen a closed 'General' topic in a forum supergroup chat. The bot must be an
     * administrator in the chat for this to work and must have the can_manage_topics administrator rights.
     * The topic will be automatically unhidden if it was hidden. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format
     *                                       @supergroupusername)
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#reopengeneralforumtopic
     */
    public function reopenGeneralForumTopic(
        int|string $chat_id
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id
        ];


        return $this->Request('reopenGeneralForumTopic', $args);
    }

    /**
     * Use this method to hide the 'General' topic in a forum supergroup chat. The bot must be an
     * administrator in the chat for this to work and must have the can_manage_topics administrator rights.
     * The topic will be automatically closed if it was open. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format
     *                                       @supergroupusername)
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#hidegeneralforumtopic
     */
    public function hideGeneralForumTopic(
        int|string $chat_id
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id
        ];


        return $this->Request('hideGeneralForumTopic', $args);
    }

    /**
     * Use this method to unhide the 'General' topic in a forum supergroup chat. The bot must be an
     * administrator in the chat for this to work and must have the can_manage_topics administrator rights.
     * Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format
     *                                       @supergroupusername)
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#unhidegeneralforumtopic
     */
    public function unhideGeneralForumTopic(
        int|string $chat_id
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id
        ];


        return $this->Request('unhideGeneralForumTopic', $args);
    }

    /**
     * Use this method to clear the list of pinned messages in a General forum topic. The bot must be an
     * administrator in the chat for this to work and must have the can_pin_messages administrator right in
     * the supergroup. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format
     *                                       @supergroupusername)
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#unpinallgeneralforumtopicmessages
     */
    public function unpinAllGeneralForumTopicMessages(
        int|string $chat_id
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id
        ];


        return $this->Request('unpinAllGeneralForumTopicMessages', $args);
    }

    /**
     * Use this method to send answers to callback queries sent from inline keyboards. The answer will be
     * displayed to the user as a notification at the top of the chat screen or as an alert. On success,
     * True is returned.
     *
     * @param string $callback_query_id Unique identifier for the query to be answered
     * @param string|null $text Text of the notification. If not specified, nothing will be shown to the user, 0-200 characters
     * @param bool|null $show_alert If True, an alert will be shown by the client instead of a notification at the top of the chat
     *                                       screen. Defaults to false.
     * @param string|null $url URL that will be opened by the user's client. If you have created a Game and accepted the conditions
     *                                       via @BotFather, specify the URL that opens your game - note that this will only work if the query
     *                                       comes from a callback_game button.Otherwise, you may use links like t.me/your_bot?start=XXXX that
     *                                       open your bot with a parameter.
     * @param int|null $cache_time The maximum amount of time in seconds that the result of the callback query may be cached
     *                                       client-side. Telegram apps will support caching starting in version 3.14. Defaults to 0.
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#answercallbackquery
     */
    public function answerCallbackQuery(
        string $callback_query_id,
        string $text = null,
        bool $show_alert = null,
        string $url = null,
        int $cache_time = null
    ): \stdClass {
        $args = [
            'callback_query_id' => $callback_query_id
        ];

        if (null !== $text) $args['text'] = $text;
        if (null !== $show_alert) $args['show_alert'] = $show_alert;
        if (null !== $url) $args['url'] = $url;
        if (null !== $cache_time) $args['cache_time'] = $cache_time;

        return $this->Request('answerCallbackQuery', $args);
    }

    /**
     * Use this method to get the list of boosts added to a chat by a user. Requires administrator rights
     * in the chat. Returns a UserChatBoosts object.
     *
     * @param int|string $chat_id Unique identifier for the chat or username of the channel (in the format @channelusername)
     * @param int $user_id Unique identifier of the target user
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#getuserchatboosts
     */
    public function getUserChatBoosts(
        int|string $chat_id,
        int $user_id
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'user_id' => $user_id
        ];


        return $this->Request('getUserChatBoosts', $args);
    }

    /**
     * Use this method to get information about the connection of the bot with a business account. Returns
     * a BusinessConnection object on success.
     *
     * @param string $business_connection_id Unique identifier of the business connection
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#getbusinessconnection
     */
    public function getBusinessConnection(
        string $business_connection_id
    ): \stdClass {
        $args = [
            'business_connection_id' => $business_connection_id
        ];


        return $this->Request('getBusinessConnection', $args);
    }

    /**
     * Use this method to change the list of the bot's commands. See this manual for more details about bot
     * commands. Returns True on success.
     *
     * @param array $commands A JSON-serialized list of bot commands to be set as the list of the bot's commands. At most 100
     *                                       commands can be specified.
     * @param array|null $scope A JSON-serialized object, describing scope of users for which the commands are relevant. Defaults to
     *                                       BotCommandScopeDefault.
     * @param string|null $language_code A two-letter ISO 639-1 language code. If empty, commands will be applied to all users from the given
     *                                       scope, for whose language there are no dedicated commands
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#setmycommands
     */
    public function setMyCommands(
        array $commands,
        array $scope = null,
        string $language_code = null
    ): \stdClass {
        $args = [
            'commands' => json_encode($commands)
        ];

        if (null !== $scope) $args['scope'] = json_encode($scope);
        if (null !== $language_code) $args['language_code'] = $language_code;

        return $this->Request('setMyCommands', $args);
    }

    /**
     * Use this method to delete the list of the bot's commands for the given scope and user language.
     * After deletion, higher level commands will be shown to affected users. Returns True on success.
     *
     * @param array|null $scope A JSON-serialized object, describing scope of users for which the commands are relevant. Defaults to
     *                                       BotCommandScopeDefault.
     * @param string|null $language_code A two-letter ISO 639-1 language code. If empty, commands will be applied to all users from the given
     *                                       scope, for whose language there are no dedicated commands
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#deletemycommands
     */
    public function deleteMyCommands(
        array $scope = null,
        string $language_code = null
    ): \stdClass {
        $args = [];

        if (null !== $scope) $args['scope'] = json_encode($scope);
        if (null !== $language_code) $args['language_code'] = $language_code;

        return $this->Request('deleteMyCommands', $args);
    }

    /**
     * Use this method to get the current list of the bot's commands for the given scope and user language.
     * Returns an Array of BotCommand objects. If commands aren't set, an empty list is returned.
     *
     * @param array|null $scope A JSON-serialized object, describing scope of users. Defaults to BotCommandScopeDefault.
     * @param string|null $language_code A two-letter ISO 639-1 language code or an empty string
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#getmycommands
     */
    public function getMyCommands(
        array $scope = null,
        string $language_code = null
    ): \stdClass {
        $args = [];

        if (null !== $scope) $args['scope'] = json_encode($scope);
        if (null !== $language_code) $args['language_code'] = $language_code;

        return $this->Request('getMyCommands', $args);
    }

    /**
     * Use this method to change the bot's name. Returns True on success.
     *
     * @param string|null $name New bot name; 0-64 characters. Pass an empty string to remove the dedicated name for the given
     *                                       language.
     * @param string|null $language_code A two-letter ISO 639-1 language code. If empty, the name will be shown to all users for whose
     *                                       language there is no dedicated name.
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#setmyname
     */
    public function setMyName(
        string $name = null,
        string $language_code = null
    ): \stdClass {
        $args = [];

        if (null !== $name) $args['name'] = $name;
        if (null !== $language_code) $args['language_code'] = $language_code;

        return $this->Request('setMyName', $args);
    }

    /**
     * Use this method to get the current bot name for the given user language. Returns BotName on success.
     *
     * @param string|null $language_code A two-letter ISO 639-1 language code or an empty string
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#getmyname
     */
    public function getMyName(
        string $language_code = null
    ): \stdClass {
        $args = [];

        if (null !== $language_code) $args['language_code'] = $language_code;

        return $this->Request('getMyName', $args);
    }

    /**
     * Use this method to change the bot's description, which is shown in the chat with the bot if the chat
     * is empty. Returns True on success.
     *
     * @param string|null $description New bot description; 0-512 characters. Pass an empty string to remove the dedicated description for
     *                                       the given language.
     * @param string|null $language_code A two-letter ISO 639-1 language code. If empty, the description will be applied to all users for
     *                                       whose language there is no dedicated description.
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#setmydescription
     */
    public function setMyDescription(
        string $description = null,
        string $language_code = null
    ): \stdClass {
        $args = [];

        if (null !== $description) $args['description'] = $description;
        if (null !== $language_code) $args['language_code'] = $language_code;

        return $this->Request('setMyDescription', $args);
    }

    /**
     * Use this method to get the current bot description for the given user language. Returns
     * BotDescription on success.
     *
     * @param string|null $language_code A two-letter ISO 639-1 language code or an empty string
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#getmydescription
     */
    public function getMyDescription(
        string $language_code = null
    ): \stdClass {
        $args = [];

        if (null !== $language_code) $args['language_code'] = $language_code;

        return $this->Request('getMyDescription', $args);
    }

    /**
     * Use this method to change the bot's short description, which is shown on the bot's profile page and
     * is sent together with the link when users share the bot. Returns True on success.
     *
     * @param string|null $short_description New short description for the bot; 0-120 characters. Pass an empty string to remove the dedicated
     *                                       short description for the given language.
     * @param string|null $language_code A two-letter ISO 639-1 language code. If empty, the short description will be applied to all users
     *                                       for whose language there is no dedicated short description.
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#setmyshortdescription
     */
    public function setMyShortDescription(
        string $short_description = null,
        string $language_code = null
    ): \stdClass {
        $args = [];

        if (null !== $short_description) $args['short_description'] = $short_description;
        if (null !== $language_code) $args['language_code'] = $language_code;

        return $this->Request('setMyShortDescription', $args);
    }

    /**
     * Use this method to get the current bot short description for the given user language. Returns
     * BotShortDescription on success.
     *
     * @param string|null $language_code A two-letter ISO 639-1 language code or an empty string
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#getmyshortdescription
     */
    public function getMyShortDescription(
        string $language_code = null
    ): \stdClass {
        $args = [];

        if (null !== $language_code) $args['language_code'] = $language_code;

        return $this->Request('getMyShortDescription', $args);
    }

    /**
     * Use this method to change the bot's menu button in a private chat, or the default menu button.
     * Returns True on success.
     *
     * @param int|null $chat_id Unique identifier for the target private chat. If not specified, default bot's menu button will be
     *                                       changed
     * @param array|null $menu_button A JSON-serialized object for the bot's new menu button. Defaults to MenuButtonDefault
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#setchatmenubutton
     */
    public function setChatMenuButton(
        int $chat_id = null,
        array $menu_button = null
    ): \stdClass {
        $args = [];

        if (null !== $chat_id) $args['chat_id'] = $chat_id;
        if (null !== $menu_button) $args['menu_button'] = json_encode($menu_button);

        return $this->Request('setChatMenuButton', $args);
    }

    /**
     * Use this method to get the current value of the bot's menu button in a private chat, or the default
     * menu button. Returns MenuButton on success.
     *
     * @param int|null $chat_id Unique identifier for the target private chat. If not specified, default bot's menu button will be
     *                                       returned
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#getchatmenubutton
     */
    public function getChatMenuButton(
        int $chat_id = null
    ): \stdClass {
        $args = [];

        if (null !== $chat_id) $args['chat_id'] = $chat_id;

        return $this->Request('getChatMenuButton', $args);
    }

    /**
     * Use this method to change the default administrator rights requested by the bot when it's added as
     * an administrator to groups or channels. These rights will be suggested to users, but they are free
     * to modify the list before adding the bot. Returns True on success.
     *
     * @param array|null $rights A JSON-serialized object describing new default administrator rights. If not specified, the default
     *                                       administrator rights will be cleared.
     * @param bool|null $for_channels Pass True to change the default administrator rights of the bot in channels. Otherwise, the default
     *                                       administrator rights of the bot for groups and supergroups will be changed.
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#setmydefaultadministratorrights
     */
    public function setMyDefaultAdministratorRights(
        array $rights = null,
        bool $for_channels = null
    ): \stdClass {
        $args = [];

        if (null !== $rights) $args['rights'] = json_encode($rights);
        if (null !== $for_channels) $args['for_channels'] = $for_channels;

        return $this->Request('setMyDefaultAdministratorRights', $args);
    }

    /**
     * Use this method to get the current default administrator rights of the bot. Returns
     * ChatAdministratorRights on success.
     *
     * @param bool|null $for_channels Pass True to get default administrator rights of the bot in channels. Otherwise, default
     *                                       administrator rights of the bot for groups and supergroups will be returned.
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#getmydefaultadministratorrights
     */
    public function getMyDefaultAdministratorRights(
        bool $for_channels = null
    ): \stdClass {
        $args = [];

        if (null !== $for_channels) $args['for_channels'] = $for_channels;

        return $this->Request('getMyDefaultAdministratorRights', $args);
    }

    /**
     * Use this method to edit text and game messages. On success, if the edited message is not an inline
     * message, the edited Message is returned, otherwise True is returned. Note that business messages
     * that were not sent by the bot and do not contain an inline keyboard can only be edited within 48
     * hours from the time they were sent.
     *
     * @param int|string|null $chat_id Required if inline_message_id is not specified. Unique identifier for the target chat or username of
     *                                       the target channel (in the format @channelusername)
     * @param int|null $message_id Required if inline_message_id is not specified. Identifier of the message to edit
     * @param string|null $inline_message_id Required if chat_id and message_id are not specified. Identifier of the inline message
     * @param string $text New text of the message, 1-4096 characters after entities parsing
     * @param string|null $parse_mode Mode for parsing entities in the message text. See formatting options for more details.
     * @param array|null $entities A JSON-serialized list of special entities that appear in message text, which can be specified
     *                                       instead of parse_mode
     * @param array|null $link_preview_options Link preview generation options for the message
     * @param array|null $reply_markup A JSON-serialized object for an inline keyboard.
     * @param string|null $business_connection_id Unique identifier of the business connection on behalf of which the message to be edited was sent
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#editmessagetext
     */
    public function editMessageText(
        string $text,
        int|string $chat_id = null,
        int $message_id = null,
        string $inline_message_id = null,
        string $parse_mode = null,
        array $entities = null,
        array $link_preview_options = null,
        array $reply_markup = null,
        string $business_connection_id = null
    ): \stdClass {
        $args = [
            'text' => $text
        ];

        if (null !== $chat_id) $args['chat_id'] = $chat_id;
        if (null !== $message_id) $args['message_id'] = $message_id;
        if (null !== $inline_message_id) $args['inline_message_id'] = $inline_message_id;
        if (null !== $parse_mode) $args['parse_mode'] = $parse_mode;
        if (null !== $entities) $args['entities'] = json_encode($entities);
        if (null !== $link_preview_options) $args['link_preview_options'] = json_encode($link_preview_options);
        if (null !== $reply_markup) $args['reply_markup'] = json_encode($reply_markup);
        if (null !== $business_connection_id) $args['business_connection_id'] = $business_connection_id;

        return $this->Request('editMessageText', $args);
    }

    /**
     * Use this method to edit captions of messages. On success, if the edited message is not an inline
     * message, the edited Message is returned, otherwise True is returned. Note that business messages
     * that were not sent by the bot and do not contain an inline keyboard can only be edited within 48
     * hours from the time they were sent.
     *
     * @param int|string|null $chat_id Required if inline_message_id is not specified. Unique identifier for the target chat or username of
     *                                       the target channel (in the format @channelusername)
     * @param int|null $message_id Required if inline_message_id is not specified. Identifier of the message to edit
     * @param string|null $inline_message_id Required if chat_id and message_id are not specified. Identifier of the inline message
     * @param string|null $caption New caption of the message, 0-1024 characters after entities parsing
     * @param string|null $parse_mode Mode for parsing entities in the message caption. See formatting options for more details.
     * @param array|null $caption_entities A JSON-serialized list of special entities that appear in the caption, which can be specified
     *                                       instead of parse_mode
     * @param bool|null $show_caption_above_media Pass True, if the caption must be shown above the message media. Supported only for animation, photo
     *                                       and video messages.
     * @param array|null $reply_markup A JSON-serialized object for an inline keyboard.
     * @param string|null $business_connection_id Unique identifier of the business connection on behalf of which the message to be edited was sent
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#editmessagecaption
     */
    public function editMessageCaption(
        int|string $chat_id = null,
        int $message_id = null,
        string $inline_message_id = null,
        string $caption = null,
        string $parse_mode = null,
        array $caption_entities = null,
        bool $show_caption_above_media = null,
        array $reply_markup = null,
        string $business_connection_id = null
    ): \stdClass {
        $args = [];

        if (null !== $chat_id) $args['chat_id'] = $chat_id;
        if (null !== $message_id) $args['message_id'] = $message_id;
        if (null !== $inline_message_id) $args['inline_message_id'] = $inline_message_id;
        if (null !== $caption) $args['caption'] = $caption;
        if (null !== $parse_mode) $args['parse_mode'] = $parse_mode;
        if (null !== $caption_entities) $args['caption_entities'] = json_encode($caption_entities);
        if (null !== $show_caption_above_media) $args['show_caption_above_media'] = $show_caption_above_media;
        if (null !== $reply_markup) $args['reply_markup'] = json_encode($reply_markup);
        if (null !== $business_connection_id) $args['business_connection_id'] = $business_connection_id;

        return $this->Request('editMessageCaption', $args);
    }

    /**
     * Use this method to edit animation, audio, document, photo, or video messages. If a message is part
     * of a message album, then it can be edited only to an audio for audio albums, only to a document for
     * document albums and to a photo or a video otherwise. When an inline message is edited, a new file
     * can't be uploaded; use a previously uploaded file via its file_id or specify a URL. On success, if
     * the edited message is not an inline message, the edited Message is returned, otherwise True is
     * returned. Note that business messages that were not sent by the bot and do not contain an inline
     * keyboard can only be edited within 48 hours from the time they were sent.
     *
     * @param int|string|null $chat_id Required if inline_message_id is not specified. Unique identifier for the target chat or username of
     *                                       the target channel (in the format @channelusername)
     * @param int|null $message_id Required if inline_message_id is not specified. Identifier of the message to edit
     * @param string|null $inline_message_id Required if chat_id and message_id are not specified. Identifier of the inline message
     * @param array $media A JSON-serialized object for a new media content of the message
     * @param array|null $reply_markup A JSON-serialized object for a new inline keyboard.
     * @param string|null $business_connection_id Unique identifier of the business connection on behalf of which the message to be edited was sent
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#editmessagemedia
     */
    public function editMessageMedia(
        array $media,
        int|string $chat_id = null,
        int $message_id = null,
        string $inline_message_id = null,
        array $reply_markup = null,
        string $business_connection_id = null
    ): \stdClass {
        $args = [
        ];

    foreach ($media as $key => $value) {
            if (is_object($value['media'])) {
                $args['upload' . $key] = $value['media'];
                $media[$key]['media'] = 'attach://upload' . $key;
            }
        }
        $args['media'] = json_encode($media);

        if (null !== $chat_id) $args['chat_id'] = $chat_id;
        if (null !== $message_id) $args['message_id'] = $message_id;
        if (null !== $inline_message_id) $args['inline_message_id'] = $inline_message_id;
        if (null !== $reply_markup) $args['reply_markup'] = json_encode($reply_markup);
        if (null !== $business_connection_id) $args['business_connection_id'] = $business_connection_id;

        return $this->Request('editMessageMedia', $args);
    }

    /**
     * Use this method to edit live location messages. A location can be edited until its live_period
     * expires or editing is explicitly disabled by a call to stopMessageLiveLocation. On success, if the
     * edited message is not an inline message, the edited Message is returned, otherwise True is returned.
     *
     * @param int|string|null $chat_id Required if inline_message_id is not specified. Unique identifier for the target chat or username of
     *                                       the target channel (in the format @channelusername)
     * @param int|null $message_id Required if inline_message_id is not specified. Identifier of the message to edit
     * @param string|null $inline_message_id Required if chat_id and message_id are not specified. Identifier of the inline message
     * @param float $latitude Latitude of new location
     * @param float $longitude Longitude of new location
     * @param int|null $live_period New period in seconds during which the location can be updated, starting from the message send date.
     *                                       If 0x7FFFFFFF is specified, then the location can be updated forever. Otherwise, the new value must
     *                                       not exceed the current live_period by more than a day, and the live location expiration date must
     *                                       remain within the next 90 days. If not specified, then live_period remains unchanged
     * @param float|null $horizontal_accuracy The radius of uncertainty for the location, measured in meters; 0-1500
     * @param int|null $heading Direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
     * @param int|null $proximity_alert_radius The maximum distance for proximity alerts about approaching another chat member, in meters. Must be
     *                                       between 1 and 100000 if specified.
     * @param array|null $reply_markup A JSON-serialized object for a new inline keyboard.
     * @param string|null $business_connection_id Unique identifier of the business connection on behalf of which the message to be edited was sent
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#editmessagelivelocation
     */
    public function editMessageLiveLocation(
        float $latitude,
        float $longitude,
        int|string $chat_id = null,
        int $message_id = null,
        string $inline_message_id = null,
        int $live_period = null,
        float $horizontal_accuracy = null,
        int $heading = null,
        int $proximity_alert_radius = null,
        array $reply_markup = null,
        string $business_connection_id = null
    ): \stdClass {
        $args = [
            'latitude' => $latitude,
            'longitude' => $longitude
        ];

        if (null !== $chat_id) $args['chat_id'] = $chat_id;
        if (null !== $message_id) $args['message_id'] = $message_id;
        if (null !== $inline_message_id) $args['inline_message_id'] = $inline_message_id;
        if (null !== $live_period) $args['live_period'] = $live_period;
        if (null !== $horizontal_accuracy) $args['horizontal_accuracy'] = $horizontal_accuracy;
        if (null !== $heading) $args['heading'] = $heading;
        if (null !== $proximity_alert_radius) $args['proximity_alert_radius'] = $proximity_alert_radius;
        if (null !== $reply_markup) $args['reply_markup'] = json_encode($reply_markup);
        if (null !== $business_connection_id) $args['business_connection_id'] = $business_connection_id;

        return $this->Request('editMessageLiveLocation', $args);
    }

    /**
     * Use this method to stop updating a live location message before live_period expires. On success, if
     * the message is not an inline message, the edited Message is returned, otherwise True is returned.
     *
     * @param int|string|null $chat_id Required if inline_message_id is not specified. Unique identifier for the target chat or username of
     *                                       the target channel (in the format @channelusername)
     * @param int|null $message_id Required if inline_message_id is not specified. Identifier of the message with live location to stop
     * @param string|null $inline_message_id Required if chat_id and message_id are not specified. Identifier of the inline message
     * @param array|null $reply_markup A JSON-serialized object for a new inline keyboard.
     * @param string|null $business_connection_id Unique identifier of the business connection on behalf of which the message to be edited was sent
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#stopmessagelivelocation
     */
    public function stopMessageLiveLocation(
        int|string $chat_id = null,
        int $message_id = null,
        string $inline_message_id = null,
        array $reply_markup = null,
        string $business_connection_id = null
    ): \stdClass {
        $args = [];

        if (null !== $chat_id) $args['chat_id'] = $chat_id;
        if (null !== $message_id) $args['message_id'] = $message_id;
        if (null !== $inline_message_id) $args['inline_message_id'] = $inline_message_id;
        if (null !== $reply_markup) $args['reply_markup'] = json_encode($reply_markup);
        if (null !== $business_connection_id) $args['business_connection_id'] = $business_connection_id;

        return $this->Request('stopMessageLiveLocation', $args);
    }

    /**
     * Use this method to edit only the reply markup of messages. On success, if the edited message is not
     * an inline message, the edited Message is returned, otherwise True is returned. Note that business
     * messages that were not sent by the bot and do not contain an inline keyboard can only be edited
     * within 48 hours from the time they were sent.
     *
     * @param int|string|null $chat_id Required if inline_message_id is not specified. Unique identifier for the target chat or username of
     *                                       the target channel (in the format @channelusername)
     * @param int|null $message_id Required if inline_message_id is not specified. Identifier of the message to edit
     * @param string|null $inline_message_id Required if chat_id and message_id are not specified. Identifier of the inline message
     * @param array|null $reply_markup A JSON-serialized object for an inline keyboard.
     * @param string|null $business_connection_id Unique identifier of the business connection on behalf of which the message to be edited was sent
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#editmessagereplymarkup
     */
    public function editMessageReplyMarkup(
        int|string $chat_id = null,
        int $message_id = null,
        string $inline_message_id = null,
        array $reply_markup = null,
        string $business_connection_id = null
    ): \stdClass {
        $args = [];

        if (null !== $chat_id) $args['chat_id'] = $chat_id;
        if (null !== $message_id) $args['message_id'] = $message_id;
        if (null !== $inline_message_id) $args['inline_message_id'] = $inline_message_id;
        if (null !== $reply_markup) $args['reply_markup'] = json_encode($reply_markup);
        if (null !== $business_connection_id) $args['business_connection_id'] = $business_connection_id;

        return $this->Request('editMessageReplyMarkup', $args);
    }

    /**
     * Use this method to stop a poll which was sent by the bot. On success, the stopped Poll is returned.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param int $message_id Identifier of the original message with the poll
     * @param array|null $reply_markup A JSON-serialized object for a new message inline keyboard.
     * @param string|null $business_connection_id Unique identifier of the business connection on behalf of which the message to be edited was sent
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#stoppoll
     */
    public function stopPoll(
        int|string $chat_id,
        int $message_id,
        array $reply_markup = null,
        string $business_connection_id = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'message_id' => $message_id
        ];

        if (null !== $reply_markup) $args['reply_markup'] = json_encode($reply_markup);
        if (null !== $business_connection_id) $args['business_connection_id'] = $business_connection_id;

        return $this->Request('stopPoll', $args);
    }

    /**
     * Use this method to delete a message, including service messages, with the following limitations:- A
     * message can only be deleted if it was sent less than 48 hours ago.- Service messages about a
     * supergroup, channel, or forum topic creation can't be deleted.- A dice message in a private chat can
     * only be deleted if it was sent more than 24 hours ago.- Bots can delete outgoing messages in private
     * chats, groups, and supergroups.- Bots can delete incoming messages in private chats.- Bots granted
     * can_post_messages permissions can delete outgoing messages in channels.- If the bot is an
     * administrator of a group, it can delete any message there.- If the bot has can_delete_messages
     * permission in a supergroup or a channel, it can delete any message there.Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param int $message_id Identifier of the message to delete
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#deletemessage
     */
    public function deleteMessage(
        int|string $chat_id,
        int $message_id
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'message_id' => $message_id
        ];


        return $this->Request('deleteMessage', $args);
    }

    /**
     * Use this method to delete multiple messages simultaneously. If some of the specified messages can't
     * be found, they are skipped. Returns True on success.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param array $message_ids A JSON-serialized list of 1-100 identifiers of messages to delete. See deleteMessage for limitations
     *                                       on which messages can be deleted
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#deletemessages
     */
    public function deleteMessages(
        int|string $chat_id,
        array $message_ids
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'message_ids' => json_encode($message_ids)
        ];


        return $this->Request('deleteMessages', $args);
    }

    /**
     * Use this method to send static .WEBP, animated .TGS, or video .WEBM stickers. On success, the sent
     * Message is returned.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param int|null $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param \CURLFile|string|InputFile $sticker Sticker to send. Pass a file_id as String to send a file that exists on the Telegram servers
     *                                       (recommended), pass an HTTP URL as a String for Telegram to get a .WEBP sticker from the Internet,
     *                                       or upload a new .WEBP, .TGS, or .WEBM sticker using multipart/form-data. More information on Sending
     *                                       Files ». Video and animated stickers can't be sent via an HTTP URL.
     * @param string|null $emoji Emoji associated with the sticker; only for just uploaded stickers
     * @param bool|null $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool|null $protect_content Protects the contents of the sent message from forwarding and saving
     * @param string|null $message_effect_id Unique identifier of the message effect to be added to the message; for private chats only
     * @param array|null $reply_parameters Description of the message to reply to
     * @param array|null $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply
     *                                       keyboard, instructions to remove a reply keyboard or to force a reply from the user
     * @param string|null $business_connection_id Unique identifier of the business connection on behalf of which the message will be sent
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#sendsticker
     */
    public function sendSticker(
        int|string $chat_id,
        \CURLFile|string|InputFile $sticker,
        int $message_thread_id = null,
        string $emoji = null,
        bool $disable_notification = null,
        bool $protect_content = null,
        string $message_effect_id = null,
        array $reply_parameters = null,
        array $reply_markup = null,
        string $business_connection_id = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'sticker' => $sticker
        ];

        if (null !== $message_thread_id) $args['message_thread_id'] = $message_thread_id;
        if (null !== $emoji) $args['emoji'] = $emoji;
        if (null !== $disable_notification) $args['disable_notification'] = $disable_notification;
        if (null !== $protect_content) $args['protect_content'] = $protect_content;
        if (null !== $message_effect_id) $args['message_effect_id'] = $message_effect_id;
        if (null !== $reply_parameters) $args['reply_parameters'] = json_encode($reply_parameters);
        if (null !== $reply_markup) $args['reply_markup'] = json_encode($reply_markup);
        if (null !== $business_connection_id) $args['business_connection_id'] = $business_connection_id;

        return $this->Request('sendSticker', $args);
    }

    /**
     * Use this method to get a sticker set. On success, a StickerSet object is returned.
     *
     * @param string $name Name of the sticker set
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#getstickerset
     */
    public function getStickerSet(
        string $name
    ): \stdClass {
        $args = [
            'name' => $name
        ];


        return $this->Request('getStickerSet', $args);
    }

    /**
     * Use this method to get information about custom emoji stickers by their identifiers. Returns an
     * Array of Sticker objects.
     *
     * @param array $custom_emoji_ids A JSON-serialized list of custom emoji identifiers. At most 200 custom emoji identifiers can be
     *                                       specified.
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#getcustomemojistickers
     */
    public function getCustomEmojiStickers(
        array $custom_emoji_ids
    ): \stdClass {
        $args = [
            'custom_emoji_ids' => json_encode($custom_emoji_ids)
        ];


        return $this->Request('getCustomEmojiStickers', $args);
    }

    /**
     * Use this method to upload a file with a sticker for later use in the createNewStickerSet,
     * addStickerToSet, or replaceStickerInSet methods (the file can be used multiple times). Returns the
     * uploaded File on success.
     *
     * @param int $user_id User identifier of sticker file owner
     * @param \CURLFile $sticker A file with the sticker in .WEBP, .PNG, .TGS, or .WEBM format. See
     *                                       https://core.telegram.org/stickers for technical requirements. More information on Sending Files »
     * @param string $sticker_format Format of the sticker, must be one of “static”, “animated”, “video”
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#uploadstickerfile
     */
    public function uploadStickerFile(
        int $user_id,
        \CURLFile $sticker,
        string $sticker_format
    ): \stdClass {
        $args = [
            'user_id' => $user_id,
            'sticker' => $sticker,
            'sticker_format' => $sticker_format
        ];


        return $this->Request('uploadStickerFile', $args);
    }

    /**
     * Use this method to create a new sticker set owned by a user. The bot will be able to edit the
     * sticker set thus created. Returns True on success.
     *
     * @param int $user_id User identifier of created sticker set owner
     * @param string $name Short name of sticker set, to be used in t.me/addstickers/ URLs (e.g., animals). Can contain only
     *                                       English letters, digits and underscores. Must begin with a letter, can't contain consecutive
     *                                       underscores and must end in "_by_<bot_username>". <bot_username> is case insensitive. 1-64
     *                                       characters.
     * @param string $title Sticker set title, 1-64 characters
     * @param array $stickers A JSON-serialized list of 1-50 initial stickers to be added to the sticker set
     * @param string|null $sticker_type Type of stickers in the set, pass “regular”, “mask”, or “custom_emoji”. By default, a
     *                                       regular sticker set is created.
     * @param bool|null $needs_repainting Pass True if stickers in the sticker set must be repainted to the color of text when used in
     *                                       messages, the accent color if used as emoji status, white on chat photos, or another appropriate
     *                                       color based on context; for custom emoji sticker sets only
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#createnewstickerset
     */
    public function createNewStickerSet(
        int $user_id,
        string $name,
        string $title,
        array $stickers,
        string $sticker_type = null,
        bool $needs_repainting = null
    ): \stdClass {
        $args = [
            'user_id' => $user_id,
            'name' => $name,
            'title' => $title,
            'stickers' => json_encode($stickers)
        ];

        if (null !== $sticker_type) $args['sticker_type'] = $sticker_type;
        if (null !== $needs_repainting) $args['needs_repainting'] = $needs_repainting;

        return $this->Request('createNewStickerSet', $args);
    }

    /**
     * Use this method to add a new sticker to a set created by the bot. Emoji sticker sets can have up to
     * 200 stickers. Other sticker sets can have up to 120 stickers. Returns True on success.
     *
     * @param int $user_id User identifier of sticker set owner
     * @param string $name Sticker set name
     * @param array $sticker A JSON-serialized object with information about the added sticker. If exactly the same sticker had
     *                                       already been added to the set, then the set isn't changed.
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#addstickertoset
     */
    public function addStickerToSet(
        int $user_id,
        string $name,
        array $sticker
    ): \stdClass {
        $args = [
            'user_id' => $user_id,
            'name' => $name,
            'sticker' => json_encode($sticker)
        ];


        return $this->Request('addStickerToSet', $args);
    }

    /**
     * Use this method to move a sticker in a set created by the bot to a specific position. Returns True
     * on success.
     *
     * @param string $sticker File identifier of the sticker
     * @param int $position New sticker position in the set, zero-based
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#setstickerpositioninset
     */
    public function setStickerPositionInSet(
        string $sticker,
        int $position
    ): \stdClass {
        $args = [
            'sticker' => $sticker,
            'position' => $position
        ];


        return $this->Request('setStickerPositionInSet', $args);
    }

    /**
     * Use this method to delete a sticker from a set created by the bot. Returns True on success.
     *
     * @param string $sticker File identifier of the sticker
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#deletestickerfromset
     */
    public function deleteStickerFromSet(
        string $sticker
    ): \stdClass {
        $args = [
            'sticker' => $sticker
        ];


        return $this->Request('deleteStickerFromSet', $args);
    }

    /**
     * Use this method to replace an existing sticker in a sticker set with a new one. The method is
     * equivalent to calling deleteStickerFromSet, then addStickerToSet, then setStickerPositionInSet.
     * Returns True on success.
     *
     * @param int $user_id User identifier of the sticker set owner
     * @param string $name Sticker set name
     * @param string $old_sticker File identifier of the replaced sticker
     * @param array $sticker A JSON-serialized object with information about the added sticker. If exactly the same sticker had
     *                                       already been added to the set, then the set remains unchanged.
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#replacestickerinset
     */
    public function replaceStickerInSet(
        int $user_id,
        string $name,
        string $old_sticker,
        array $sticker
    ): \stdClass {
        $args = [
            'user_id' => $user_id,
            'name' => $name,
            'old_sticker' => $old_sticker,
            'sticker' => json_encode($sticker)
        ];


        return $this->Request('replaceStickerInSet', $args);
    }

    /**
     * Use this method to change the list of emoji assigned to a regular or custom emoji sticker. The
     * sticker must belong to a sticker set created by the bot. Returns True on success.
     *
     * @param string $sticker File identifier of the sticker
     * @param array $emoji_list A JSON-serialized list of 1-20 emoji associated with the sticker
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#setstickeremojilist
     */
    public function setStickerEmojiList(
        string $sticker,
        array $emoji_list
    ): \stdClass {
        $args = [
            'sticker' => $sticker,
            'emoji_list' => json_encode($emoji_list)
        ];


        return $this->Request('setStickerEmojiList', $args);
    }

    /**
     * Use this method to change search keywords assigned to a regular or custom emoji sticker. The sticker
     * must belong to a sticker set created by the bot. Returns True on success.
     *
     * @param string $sticker File identifier of the sticker
     * @param array|null $keywords A JSON-serialized list of 0-20 search keywords for the sticker with total length of up to 64
     *                                       characters
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#setstickerkeywords
     */
    public function setStickerKeywords(
        string $sticker,
        array $keywords = null
    ): \stdClass {
        $args = [
            'sticker' => $sticker
        ];

        if (null !== $keywords) $args['keywords'] = json_encode($keywords);

        return $this->Request('setStickerKeywords', $args);
    }

    /**
     * Use this method to change the mask position of a mask sticker. The sticker must belong to a sticker
     * set that was created by the bot. Returns True on success.
     *
     * @param string $sticker File identifier of the sticker
     * @param array|null $mask_position A JSON-serialized object with the position where the mask should be placed on faces. Omit the
     *                                       parameter to remove the mask position.
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#setstickermaskposition
     */
    public function setStickerMaskPosition(
        string $sticker,
        array $mask_position = null
    ): \stdClass {
        $args = [
            'sticker' => $sticker
        ];

        if (null !== $mask_position) $args['mask_position'] = json_encode($mask_position);

        return $this->Request('setStickerMaskPosition', $args);
    }

    /**
     * Use this method to set the title of a created sticker set. Returns True on success.
     *
     * @param string $name Sticker set name
     * @param string $title Sticker set title, 1-64 characters
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#setstickersettitle
     */
    public function setStickerSetTitle(
        string $name,
        string $title
    ): \stdClass {
        $args = [
            'name' => $name,
            'title' => $title
        ];


        return $this->Request('setStickerSetTitle', $args);
    }

    /**
     * Use this method to set the thumbnail of a regular or mask sticker set. The format of the thumbnail
     * file must match the format of the stickers in the set. Returns True on success.
     *
     * @param string $name Sticker set name
     * @param int $user_id User identifier of the sticker set owner
     * @param \CURLFile|string|InputFile|null $thumbnail A .WEBP or .PNG image with the thumbnail, must be up to 128 kilobytes in size and have a width and
     *                                       height of exactly 100px, or a .TGS animation with a thumbnail up to 32 kilobytes in size (see
     *                                       https://core.telegram.org/stickers#animation-requirements for animated sticker technical
     *                                       requirements), or a WEBM video with the thumbnail up to 32 kilobytes in size; see
     *                                       https://core.telegram.org/stickers#video-requirements for video sticker technical requirements. Pass
     *                                       a file_id as a String to send a file that already exists on the Telegram servers, pass an HTTP URL
     *                                       as a String for Telegram to get a file from the Internet, or upload a new one using
     *                                       multipart/form-data. More information on Sending Files ». Animated and video sticker set thumbnails
     *                                       can't be uploaded via HTTP URL. If omitted, then the thumbnail is dropped and the first sticker is
     *                                       used as the thumbnail.
     * @param string $format Format of the thumbnail, must be one of “static” for a .WEBP or .PNG image, “animated” for a
     *                                       .TGS animation, or “video” for a WEBM video
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#setstickersetthumbnail
     */
    public function setStickerSetThumbnail(
        string $name,
        int $user_id,
        string $format,
        \CURLFile|string|InputFile $thumbnail = null
    ): \stdClass {
        $args = [
            'name' => $name,
            'user_id' => $user_id,
            'format' => $format
        ];

        if (null !== $thumbnail) $args['thumbnail'] = $thumbnail;

        return $this->Request('setStickerSetThumbnail', $args);
    }

    /**
     * Use this method to set the thumbnail of a custom emoji sticker set. Returns True on success.
     *
     * @param string $name Sticker set name
     * @param string|null $custom_emoji_id Custom emoji identifier of a sticker from the sticker set; pass an empty string to drop the
     *                                       thumbnail and use the first sticker as the thumbnail.
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#setcustomemojistickersetthumbnail
     */
    public function setCustomEmojiStickerSetThumbnail(
        string $name,
        string $custom_emoji_id = null
    ): \stdClass {
        $args = [
            'name' => $name
        ];

        if (null !== $custom_emoji_id) $args['custom_emoji_id'] = $custom_emoji_id;

        return $this->Request('setCustomEmojiStickerSetThumbnail', $args);
    }

    /**
     * Use this method to delete a sticker set that was created by the bot. Returns True on success.
     *
     * @param string $name Sticker set name
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#deletestickerset
     */
    public function deleteStickerSet(
        string $name
    ): \stdClass {
        $args = [
            'name' => $name
        ];


        return $this->Request('deleteStickerSet', $args);
    }

    /**
     * Use this method to send answers to an inline query. On success, True is returned.No more than 50
     * results per query are allowed.
     *
     * @param string $inline_query_id Unique identifier for the answered query
     * @param array $results A JSON-serialized array of results for the inline query
     * @param int|null $cache_time The maximum amount of time in seconds that the result of the inline query may be cached on the
     *                                       server. Defaults to 300.
     * @param bool|null $is_personal Pass True if results may be cached on the server side only for the user that sent the query. By
     *                                       default, results may be returned to any user who sends the same query.
     * @param string|null $next_offset Pass the offset that a client should send in the next query with the same text to receive more
     *                                       results. Pass an empty string if there are no more results or if you don't support pagination.
     *                                       Offset length can't exceed 64 bytes.
     * @param array|null $button A JSON-serialized object describing a button to be shown above inline query results
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#answerinlinequery
     */
    public function answerInlineQuery(
        string $inline_query_id,
        array $results,
        int $cache_time = null,
        bool $is_personal = null,
        string $next_offset = null,
        array $button = null
    ): \stdClass {
        $args = [
            'inline_query_id' => $inline_query_id,
            'results' => json_encode($results)
        ];

        if (null !== $cache_time) $args['cache_time'] = $cache_time;
        if (null !== $is_personal) $args['is_personal'] = $is_personal;
        if (null !== $next_offset) $args['next_offset'] = $next_offset;
        if (null !== $button) $args['button'] = json_encode($button);

        return $this->Request('answerInlineQuery', $args);
    }

    /**
     * Use this method to set the result of an interaction with a Web App and send a corresponding message
     * on behalf of the user to the chat from which the query originated. On success, a SentWebAppMessage
     * object is returned.
     *
     * @param string $web_app_query_id Unique identifier for the query to be answered
     * @param array $result A JSON-serialized object describing the message to be sent
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#answerwebappquery
     */
    public function answerWebAppQuery(
        string $web_app_query_id,
        array $result
    ): \stdClass {
        $args = [
            'web_app_query_id' => $web_app_query_id,
            'result' => json_encode($result)
        ];


        return $this->Request('answerWebAppQuery', $args);
    }

    /**
     * Use this method to send invoices. On success, the sent Message is returned.
     *
     * @param int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format
     *                                       @channelusername)
     * @param int|null $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param string $title Product name, 1-32 characters
     * @param string $description Product description, 1-255 characters
     * @param string $payload Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use it for your
     *                                       internal processes.
     * @param string|null $provider_token Payment provider token, obtained via @BotFather. Pass an empty string for payments in Telegram
     *                                       Stars.
     * @param string $currency Three-letter ISO 4217 currency code, see more on currencies. Pass “XTR” for payments in Telegram
     *                                       Stars.
     * @param array $prices Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery
     *                                       cost, delivery tax, bonus, etc.). Must contain exactly one item for payments in Telegram Stars.
     * @param int|null $max_tip_amount The maximum accepted amount for tips in the smallest units of the currency (integer, not
     *                                       float/double). For example, for a maximum tip of US$ 1.45 pass max_tip_amount = 145. See the exp
     *                                       parameter in currencies.json, it shows the number of digits past the decimal point for each currency
     *                                       (2 for the majority of currencies). Defaults to 0. Not supported for payments in Telegram Stars.
     * @param array|null $suggested_tip_amounts A JSON-serialized array of suggested amounts of tips in the smallest units of the currency (integer,
     *                                       not float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must
     *                                       be positive, passed in a strictly increased order and must not exceed max_tip_amount.
     * @param string|null $start_parameter Unique deep-linking parameter. If left empty, forwarded copies of the sent message will have a Pay
     *                                       button, allowing multiple users to pay directly from the forwarded message, using the same invoice.
     *                                       If non-empty, forwarded copies of the sent message will have a URL button with a deep link to the
     *                                       bot (instead of a Pay button), with the value used as the start parameter
     * @param string|null $provider_data JSON-serialized data about the invoice, which will be shared with the payment provider. A detailed
     *                                       description of required fields should be provided by the payment provider.
     * @param string|null $photo_url URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a
     *                                       service. People like it better when they see what they are paying for.
     * @param int|null $photo_size Photo size in bytes
     * @param int|null $photo_width Photo width
     * @param int|null $photo_height Photo height
     * @param bool|null $need_name Pass True if you require the user's full name to complete the order. Ignored for payments in
     *                                       Telegram Stars.
     * @param bool|null $need_phone_number Pass True if you require the user's phone number to complete the order. Ignored for payments in
     *                                       Telegram Stars.
     * @param bool|null $need_email Pass True if you require the user's email address to complete the order. Ignored for payments in
     *                                       Telegram Stars.
     * @param bool|null $need_shipping_address Pass True if you require the user's shipping address to complete the order. Ignored for payments in
     *                                       Telegram Stars.
     * @param bool|null $send_phone_number_to_provider Pass True if the user's phone number should be sent to the provider. Ignored for payments in
     *                                       Telegram Stars.
     * @param bool|null $send_email_to_provider Pass True if the user's email address should be sent to the provider. Ignored for payments in
     *                                       Telegram Stars.
     * @param bool|null $is_flexible Pass True if the final price depends on the shipping method. Ignored for payments in Telegram Stars.
     * @param bool|null $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool|null $protect_content Protects the contents of the sent message from forwarding and saving
     * @param string|null $message_effect_id Unique identifier of the message effect to be added to the message; for private chats only
     * @param array|null $reply_parameters Description of the message to reply to
     * @param array|null $reply_markup A JSON-serialized object for an inline keyboard. If empty, one 'Pay total price' button will be
     *                                       shown. If not empty, the first button must be a Pay button.
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#sendinvoice
     */
    public function sendInvoice(
        int|string $chat_id,
        string $title,
        string $description,
        string $payload,
        string $currency,
        array $prices,
        int $message_thread_id = null,
        string $provider_token = null,
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
        bool $protect_content = null,
        string $message_effect_id = null,
        array $reply_parameters = null,
        array $reply_markup = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'title' => $title,
            'description' => $description,
            'payload' => $payload,
            'currency' => $currency,
            'prices' => json_encode($prices)
        ];

        if (null !== $message_thread_id) $args['message_thread_id'] = $message_thread_id;
        if (null !== $provider_token) $args['provider_token'] = $provider_token;
        if (null !== $max_tip_amount) $args['max_tip_amount'] = $max_tip_amount;
        if (null !== $suggested_tip_amounts) $args['suggested_tip_amounts'] = json_encode($suggested_tip_amounts);
        if (null !== $start_parameter) $args['start_parameter'] = $start_parameter;
        if (null !== $provider_data) $args['provider_data'] = $provider_data;
        if (null !== $photo_url) $args['photo_url'] = $photo_url;
        if (null !== $photo_size) $args['photo_size'] = $photo_size;
        if (null !== $photo_width) $args['photo_width'] = $photo_width;
        if (null !== $photo_height) $args['photo_height'] = $photo_height;
        if (null !== $need_name) $args['need_name'] = $need_name;
        if (null !== $need_phone_number) $args['need_phone_number'] = $need_phone_number;
        if (null !== $need_email) $args['need_email'] = $need_email;
        if (null !== $need_shipping_address) $args['need_shipping_address'] = $need_shipping_address;
        if (null !== $send_phone_number_to_provider) $args['send_phone_number_to_provider'] = $send_phone_number_to_provider;
        if (null !== $send_email_to_provider) $args['send_email_to_provider'] = $send_email_to_provider;
        if (null !== $is_flexible) $args['is_flexible'] = $is_flexible;
        if (null !== $disable_notification) $args['disable_notification'] = $disable_notification;
        if (null !== $protect_content) $args['protect_content'] = $protect_content;
        if (null !== $message_effect_id) $args['message_effect_id'] = $message_effect_id;
        if (null !== $reply_parameters) $args['reply_parameters'] = json_encode($reply_parameters);
        if (null !== $reply_markup) $args['reply_markup'] = json_encode($reply_markup);

        return $this->Request('sendInvoice', $args);
    }

    /**
     * Use this method to create a link for an invoice. Returns the created invoice link as String on
     * success.
     *
     * @param string $title Product name, 1-32 characters
     * @param string $description Product description, 1-255 characters
     * @param string $payload Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use it for your
     *                                       internal processes.
     * @param string|null $provider_token Payment provider token, obtained via @BotFather. Pass an empty string for payments in Telegram
     *                                       Stars.
     * @param string $currency Three-letter ISO 4217 currency code, see more on currencies. Pass “XTR” for payments in Telegram
     *                                       Stars.
     * @param array $prices Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery
     *                                       cost, delivery tax, bonus, etc.). Must contain exactly one item for payments in Telegram Stars.
     * @param int|null $max_tip_amount The maximum accepted amount for tips in the smallest units of the currency (integer, not
     *                                       float/double). For example, for a maximum tip of US$ 1.45 pass max_tip_amount = 145. See the exp
     *                                       parameter in currencies.json, it shows the number of digits past the decimal point for each currency
     *                                       (2 for the majority of currencies). Defaults to 0. Not supported for payments in Telegram Stars.
     * @param array|null $suggested_tip_amounts A JSON-serialized array of suggested amounts of tips in the smallest units of the currency (integer,
     *                                       not float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must
     *                                       be positive, passed in a strictly increased order and must not exceed max_tip_amount.
     * @param string|null $provider_data JSON-serialized data about the invoice, which will be shared with the payment provider. A detailed
     *                                       description of required fields should be provided by the payment provider.
     * @param string|null $photo_url URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a
     *                                       service.
     * @param int|null $photo_size Photo size in bytes
     * @param int|null $photo_width Photo width
     * @param int|null $photo_height Photo height
     * @param bool|null $need_name Pass True if you require the user's full name to complete the order. Ignored for payments in
     *                                       Telegram Stars.
     * @param bool|null $need_phone_number Pass True if you require the user's phone number to complete the order. Ignored for payments in
     *                                       Telegram Stars.
     * @param bool|null $need_email Pass True if you require the user's email address to complete the order. Ignored for payments in
     *                                       Telegram Stars.
     * @param bool|null $need_shipping_address Pass True if you require the user's shipping address to complete the order. Ignored for payments in
     *                                       Telegram Stars.
     * @param bool|null $send_phone_number_to_provider Pass True if the user's phone number should be sent to the provider. Ignored for payments in
     *                                       Telegram Stars.
     * @param bool|null $send_email_to_provider Pass True if the user's email address should be sent to the provider. Ignored for payments in
     *                                       Telegram Stars.
     * @param bool|null $is_flexible Pass True if the final price depends on the shipping method. Ignored for payments in Telegram Stars.
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#createinvoicelink
     */
    public function createInvoiceLink(
        string $title,
        string $description,
        string $payload,
        string $currency,
        array $prices,
        string $provider_token = null,
        int $max_tip_amount = null,
        array $suggested_tip_amounts = null,
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
        bool $is_flexible = null
    ): \stdClass {
        $args = [
            'title' => $title,
            'description' => $description,
            'payload' => $payload,
            'currency' => $currency,
            'prices' => json_encode($prices)
        ];

        if (null !== $provider_token) $args['provider_token'] = $provider_token;
        if (null !== $max_tip_amount) $args['max_tip_amount'] = $max_tip_amount;
        if (null !== $suggested_tip_amounts) $args['suggested_tip_amounts'] = json_encode($suggested_tip_amounts);
        if (null !== $provider_data) $args['provider_data'] = $provider_data;
        if (null !== $photo_url) $args['photo_url'] = $photo_url;
        if (null !== $photo_size) $args['photo_size'] = $photo_size;
        if (null !== $photo_width) $args['photo_width'] = $photo_width;
        if (null !== $photo_height) $args['photo_height'] = $photo_height;
        if (null !== $need_name) $args['need_name'] = $need_name;
        if (null !== $need_phone_number) $args['need_phone_number'] = $need_phone_number;
        if (null !== $need_email) $args['need_email'] = $need_email;
        if (null !== $need_shipping_address) $args['need_shipping_address'] = $need_shipping_address;
        if (null !== $send_phone_number_to_provider) $args['send_phone_number_to_provider'] = $send_phone_number_to_provider;
        if (null !== $send_email_to_provider) $args['send_email_to_provider'] = $send_email_to_provider;
        if (null !== $is_flexible) $args['is_flexible'] = $is_flexible;

        return $this->Request('createInvoiceLink', $args);
    }

    /**
     * If you sent an invoice requesting a shipping address and the parameter is_flexible was specified,
     * the Bot API will send an Update with a shipping_query field to the bot. Use this method to reply to
     * shipping queries. On success, True is returned.
     *
     * @param string $shipping_query_id Unique identifier for the query to be answered
     * @param bool $ok Pass True if delivery to the specified address is possible and False if there are any problems (for
     *                                       example, if delivery to the specified address is not possible)
     * @param array|null $shipping_options Required if ok is True. A JSON-serialized array of available shipping options.
     * @param string|null $error_message Required if ok is False. Error message in human readable form that explains why it is impossible to
     *                                       complete the order (e.g. "Sorry, delivery to your desired address is unavailable'). Telegram will
     *                                       display this message to the user.
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#answershippingquery
     */
    public function answerShippingQuery(
        string $shipping_query_id,
        bool $ok,
        array $shipping_options = null,
        string $error_message = null
    ): \stdClass {
        $args = [
            'shipping_query_id' => $shipping_query_id,
            'ok' => $ok
        ];

        if (null !== $shipping_options) $args['shipping_options'] = json_encode($shipping_options);
        if (null !== $error_message) $args['error_message'] = $error_message;

        return $this->Request('answerShippingQuery', $args);
    }

    /**
     * Once the user has confirmed their payment and shipping details, the Bot API sends the final
     * confirmation in the form of an Update with the field pre_checkout_query. Use this method to respond
     * to such pre-checkout queries. On success, True is returned. Note: The Bot API must receive an answer
     * within 10 seconds after the pre-checkout query was sent.
     *
     * @param string $pre_checkout_query_id Unique identifier for the query to be answered
     * @param bool $ok Specify True if everything is alright (goods are available, etc.) and the bot is ready to proceed
     *                                       with the order. Use False if there are any problems.
     * @param string|null $error_message Required if ok is False. Error message in human readable form that explains the reason for failure
     *                                       to proceed with the checkout (e.g. "Sorry, somebody just bought the last of our amazing black
     *                                       T-shirts while you were busy filling out your payment details. Please choose a different color or
     *                                       garment!"). Telegram will display this message to the user.
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#answerprecheckoutquery
     */
    public function answerPreCheckoutQuery(
        string $pre_checkout_query_id,
        bool $ok,
        string $error_message = null
    ): \stdClass {
        $args = [
            'pre_checkout_query_id' => $pre_checkout_query_id,
            'ok' => $ok
        ];

        if (null !== $error_message) $args['error_message'] = $error_message;

        return $this->Request('answerPreCheckoutQuery', $args);
    }

    /**
     * Returns the bot's Telegram Star transactions in chronological order. On success, returns a
     * StarTransactions object.
     *
     * @param int|null $offset Number of transactions to skip in the response
     * @param int|null $limit The maximum number of transactions to be retrieved. Values between 1-100 are accepted. Defaults to
     *                                       100.
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#getstartransactions
     */
    public function getStarTransactions(
        int $offset = null,
        int $limit = null
    ): \stdClass {
        $args = [];

        if (null !== $offset) $args['offset'] = $offset;
        if (null !== $limit) $args['limit'] = $limit;

        return $this->Request('getStarTransactions', $args);
    }

    /**
     * Refunds a successful payment in Telegram Stars. Returns True on success.
     *
     * @param int $user_id Identifier of the user whose payment will be refunded
     * @param string $telegram_payment_charge_id Telegram payment identifier
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#refundstarpayment
     */
    public function refundStarPayment(
        int $user_id,
        string $telegram_payment_charge_id
    ): \stdClass {
        $args = [
            'user_id' => $user_id,
            'telegram_payment_charge_id' => $telegram_payment_charge_id
        ];


        return $this->Request('refundStarPayment', $args);
    }

    /**
     * Informs a user that some of the Telegram Passport elements they provided contains errors. The user
     * will not be able to re-submit their Passport to you until the errors are fixed (the contents of the
     * field for which you returned the error must change). Returns True on success.
     * Use this if the data submitted by the user doesn't satisfy the standards your service requires for
     * any reason. For example, if a birthday date seems invalid, a submitted document is blurry, a scan
     * shows evidence of tampering, etc. Supply some details in the error message to make sure the user
     * knows how to correct the issues.
     *
     * @param int $user_id User identifier
     * @param array $errors A JSON-serialized array describing the errors
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#setpassportdataerrors
     */
    public function setPassportDataErrors(
        int $user_id,
        array $errors
    ): \stdClass {
        $args = [
            'user_id' => $user_id,
            'errors' => json_encode($errors)
        ];


        return $this->Request('setPassportDataErrors', $args);
    }

    /**
     * Use this method to send a game. On success, the sent Message is returned.
     *
     * @param int $chat_id Unique identifier for the target chat
     * @param int|null $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param string $game_short_name Short name of the game, serves as the unique identifier for the game. Set up your games via
     *                                       @BotFather.
     * @param bool|null $disable_notification Sends the message silently. Users will receive a notification with no sound.
     * @param bool|null $protect_content Protects the contents of the sent message from forwarding and saving
     * @param string|null $message_effect_id Unique identifier of the message effect to be added to the message; for private chats only
     * @param array|null $reply_parameters Description of the message to reply to
     * @param array|null $reply_markup A JSON-serialized object for an inline keyboard. If empty, one 'Play game_title' button will be
     *                                       shown. If not empty, the first button must launch the game.
     * @param string|null $business_connection_id Unique identifier of the business connection on behalf of which the message will be sent
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#sendgame
     */
    public function sendGame(
        int $chat_id,
        string $game_short_name,
        int $message_thread_id = null,
        bool $disable_notification = null,
        bool $protect_content = null,
        string $message_effect_id = null,
        array $reply_parameters = null,
        array $reply_markup = null,
        string $business_connection_id = null
    ): \stdClass {
        $args = [
            'chat_id' => $chat_id,
            'game_short_name' => $game_short_name
        ];

        if (null !== $message_thread_id) $args['message_thread_id'] = $message_thread_id;
        if (null !== $disable_notification) $args['disable_notification'] = $disable_notification;
        if (null !== $protect_content) $args['protect_content'] = $protect_content;
        if (null !== $message_effect_id) $args['message_effect_id'] = $message_effect_id;
        if (null !== $reply_parameters) $args['reply_parameters'] = json_encode($reply_parameters);
        if (null !== $reply_markup) $args['reply_markup'] = json_encode($reply_markup);
        if (null !== $business_connection_id) $args['business_connection_id'] = $business_connection_id;

        return $this->Request('sendGame', $args);
    }

    /**
     * Use this method to set the score of the specified user in a game message. On success, if the message
     * is not an inline message, the Message is returned, otherwise True is returned. Returns an error, if
     * the new score is not greater than the user's current score in the chat and force is False.
     *
     * @param int $user_id User identifier
     * @param int $score New score, must be non-negative
     * @param bool|null $force Pass True if the high score is allowed to decrease. This can be useful when fixing mistakes or
     *                                       banning cheaters
     * @param bool|null $disable_edit_message Pass True if the game message should not be automatically edited to include the current scoreboard
     * @param int|null $chat_id Required if inline_message_id is not specified. Unique identifier for the target chat
     * @param int|null $message_id Required if inline_message_id is not specified. Identifier of the sent message
     * @param string|null $inline_message_id Required if chat_id and message_id are not specified. Identifier of the inline message
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#setgamescore
     */
    public function setGameScore(
        int $user_id,
        int $score,
        bool $force = null,
        bool $disable_edit_message = null,
        int $chat_id = null,
        int $message_id = null,
        string $inline_message_id = null
    ): \stdClass {
        $args = [
            'user_id' => $user_id,
            'score' => $score
        ];

        if (null !== $force) $args['force'] = $force;
        if (null !== $disable_edit_message) $args['disable_edit_message'] = $disable_edit_message;
        if (null !== $chat_id) $args['chat_id'] = $chat_id;
        if (null !== $message_id) $args['message_id'] = $message_id;
        if (null !== $inline_message_id) $args['inline_message_id'] = $inline_message_id;

        return $this->Request('setGameScore', $args);
    }

    /**
     * Use this method to get data for high score tables. Will return the score of the specified user and
     * several of their neighbors in a game. Returns an Array of GameHighScore objects.
     *
     * @param int $user_id Target user id
     * @param int|null $chat_id Required if inline_message_id is not specified. Unique identifier for the target chat
     * @param int|null $message_id Required if inline_message_id is not specified. Identifier of the sent message
     * @param string|null $inline_message_id Required if chat_id and message_id are not specified. Identifier of the inline message
     * @return \stdClass
     *
     * @see https://core.telegram.org/bots/api#getgamehighscores
     */
    public function getGameHighScores(
        int $user_id,
        int $chat_id = null,
        int $message_id = null,
        string $inline_message_id = null
    ): \stdClass {
        $args = [
            'user_id' => $user_id
        ];

        if (null !== $chat_id) $args['chat_id'] = $chat_id;
        if (null !== $message_id) $args['message_id'] = $message_id;
        if (null !== $inline_message_id) $args['inline_message_id'] = $inline_message_id;

        return $this->Request('getGameHighScores', $args);
    }

}