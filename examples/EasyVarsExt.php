<?php

namespace TuriBot;

class EasyVarsExt extends EasyVars
{
    public $type, $message_id, $from, $fromId, $fromIs_bot, $fromFirst_name, $fromLast_name, $fromUsername, $fromLanguage_code, $forward_date, $author_signature, $sender_chat, $sender_chatId, $sender_chatTitle, $sender_chatUsername, $sender_chatType, $chat, $chatId, $chatTitle, $chatFirst_name, $chatLast_name, $chatUsername, $chatType, $new_chat_members, $new_chat_membersId, $new_chat_membersIs_bot, $new_chat_membersFirst_name, $new_chat_membersLast_name, $new_chat_membersUsername, $left_chat_member, $left_chat_memberId, $left_chat_memberIs_bot, $left_chat_memberFirst_name, $left_chat_memberLast_name, $left_chat_memberUsername, $forward_from, $forward_fromId, $forward_fromIs_bot, $forward_fromFirst_name, $forward_fromLast_name, $forward_fromUsername, $forward_from_chat, $forward_from_chatId, $forward_from_chatTitle, $forward_from_chatUsername, $forward_from_chatType, $forward_from_message_id, $pinned_message, $pinned_messageMessage_id, $pinned_messageFrom, $pinned_messageFromId, $pinned_messageFromIs_bot, $pinned_messageFromFirst_name, $pinned_messageFromLast_name, $pinned_messageFromUsername, $pinned_messageFromLanguage_code, $pinned_messageChat, $pinned_messageChatId, $pinned_messageChatTitle, $pinned_messageChatUsername, $pinned_messageChatType, $pinned_messageDate, $pinned_messageText, $text, $photo, $photoFile_id, $photoFile_size, $photoWidth, $photoHeight, $audio, $audioDuration, $audioMime_type, $audioFile_id, $audioFile_size, $audioTitle, $audioPerformer, $animation, $animationFile_name, $animationMime_type, $animationDuration, $animationWidth, $animationHeight, $animationThumbFile_id, $animationThumbFile_size, $animationThumbWidth, $animationThumbHeight, $animationFile_id, $animationFile_size, $document, $documentFile_name, $documentMime_type, $documentThumbFile_id, $documentThumbFile_size, $documentThumbWidth, $documentThumbHeight, $documentFile_id, $documentFile_size, $sticker, $stickerWidth, $stickerHeight, $stickerEmoji, $stickerThumb, $stickerThumbFile_id, $stickerThumbFile_size, $stickerThumbWidth, $stickerThumbHeight, $stickerFile_id, $stickerFile_size, $video, $videoDuration, $videoWidth, $videoHeight, $videoThumb, $videoThumbFile_id, $videoThumbFile_size, $videoThumbWidth, $videoThumbHeight, $videoFile_id, $videoFile_size, $voice, $voiceDuration, $voiceMime_type, $voiceFile_id, $voiceFile_size, $contact, $contactPhone_number, $contactFirst_name, $contactLast_name, $contactUser_id, $location, $locationLongitude, $locationLatitude, $venue, $venueLocation, $venueTitle, $venueAddress, $venueFoursquare_id, $caption, $caption_entities, $new_chat_title, $date, $media_group_id, $migrate_from_chat_id, $reply_to_message, $reply_to_messageMessage_id, $reply_to_messageFrom, $reply_to_messageFromId, $reply_to_messageFromIs_bot, $reply_to_messageFromFirst_name, $reply_to_messageFromLast_name, $reply_to_messageFromUsername, $reply_to_messageFromLanguage_code, $reply_to_messageChat, $reply_to_messageChatId, $reply_to_messageChatTitle, $reply_to_messageChatFirst_name, $reply_to_messageChatLast_name, $reply_to_messageChatUsername, $reply_to_messageChatType, $reply_to_messageNew_chat_members, $reply_to_messageNew_chat_membersId, $reply_to_messageNew_chat_membersIs_bot, $reply_to_messageNew_chat_membersFirst_name, $reply_to_messageNew_chat_membersLast_name, $reply_to_messageNew_chat_membersUsername, $reply_to_messageLeft_chat_member, $reply_to_messageLeft_chat_memberId, $reply_to_messageLeft_chat_memberIs_bot, $reply_to_messageLeft_chat_memberFirst_name, $reply_to_messageLeft_chat_memberLast_name, $reply_to_messageLeft_chat_memberUsername, $reply_to_messageForward_from, $reply_to_messageForward_fromId, $reply_to_messageForward_fromIs_bot, $reply_to_messageForward_fromFirst_name, $reply_to_messageForward_fromLast_name, $reply_to_messageForward_fromUsername, $reply_to_messageForward_from_chat, $reply_to_messageForward_from_chatId, $reply_to_messageForward_from_chatTitle, $reply_to_messageForward_from_chatUsername, $reply_to_messageForward_from_chatType, $reply_to_messageForward_from_message_id, $reply_to_messageForward_date, $reply_to_messagePinned_message, $reply_to_messagePinned_messageMessage_id, $reply_to_messagePinned_messageFrom, $reply_to_messagePinned_messageFromId, $reply_to_messagePinned_messageFromIs_bot, $reply_to_messagePinned_messageFromFirst_name, $reply_to_messagePinned_messageFromLast_name, $reply_to_messagePinned_messageFromUsername, $reply_to_messagePinned_messageFromLanguage_code, $reply_to_messagePinned_messageChat, $reply_to_messagePinned_messageChatId, $reply_to_messagePinned_messageChatTitle, $reply_to_messagePinned_messageChatUsername, $reply_to_messagePinned_messageChatType, $reply_to_messagePinned_messageDate, $reply_to_messagePinned_messageText, $reply_to_messageText, $reply_to_messagePhoto, $reply_to_messagePhotoFile_id, $reply_to_messagePhotoFile_size, $reply_to_messagePhotoWidth, $reply_to_messagePhotoHeight, $reply_to_messageAudio, $reply_to_messageAudioDuration, $reply_to_messageAudioMime_type, $reply_to_messageAudioFile_id, $reply_to_messageAudioFile_size, $reply_to_messageAudioTitle, $reply_to_messageAudioPerformer, $reply_to_messageAnimation, $reply_to_messageAnimationFile_name, $reply_to_messageAnimationMime_type, $reply_to_messageAnimationDuration, $reply_to_messageAnimationWidth, $reply_to_messageAnimationHeight, $reply_to_messageAnimationThumbFile_id, $reply_to_messageAnimationThumbFile_size, $reply_to_messageAnimationThumbWidth, $reply_to_messageAnimationThumbHeight, $reply_to_messageAnimationFile_id, $reply_to_messageAnimationFile_size, $reply_to_messageDocument, $reply_to_messageDocumentFile_name, $reply_to_messageDocumentMime_type, $reply_to_messageDocumentThumbFile_id, $reply_to_messageDocumentThumbFile_size, $reply_to_messageDocumentThumbWidth, $reply_to_messageDocumentThumbHeight, $reply_to_messageDocumentFile_id, $reply_to_messageDocumentFile_size, $reply_to_messageSticker, $reply_to_messageStickerWidth, $reply_to_messageStickerHeight, $reply_to_messageStickerEmoji, $reply_to_messageStickerThumb, $reply_to_messageStickerThumbFile_id, $reply_to_messageStickerThumbFile_size, $reply_to_messageStickerThumbWidth, $reply_to_messageStickerThumbHeight, $reply_to_messageStickerFile_id, $reply_to_messageStickerFile_size, $reply_to_messageVideo, $reply_to_messageVideoDuration, $reply_to_messageVideoWidth, $reply_to_messageVideoHeight, $reply_to_messageVideoThumb, $reply_to_messageVideoThumbFile_id, $reply_to_messageVideoThumbFile_size, $reply_to_messageVideoThumbWidth, $reply_to_messageVideoThumbHeight, $reply_to_messageVideoFile_id, $reply_to_messageVideoFile_size, $reply_to_messageVoice, $reply_to_messageVoiceDuration, $reply_to_messageVoiceMime_type, $reply_to_messageVoiceFile_id, $reply_to_messageVoiceFile_size, $reply_to_messageContact, $reply_to_messageContactPhone_number, $reply_to_messageContactFirst_name, $reply_to_messageContactLast_name, $reply_to_messageContactUser_id, $reply_to_messageLocation, $reply_to_messageLocationLongitude, $reply_to_messageLocationLatitude, $reply_to_messageVenue, $reply_to_messageVenueLocation, $reply_to_messageVenueTitle, $reply_to_messageVenueAddress, $reply_to_messageVenueFoursquare_id, $reply_to_messageCaption, $reply_to_messageNew_chat_title, $reply_to_messageDate, $reply_to_messageMigrate_from_chat_id, $entities, $via_bot, $via_botId, $via_botIs_bot, $via_botFirst_name, $via_botUsername, $data, $id, $messageChatId, $messageMessage_id, $inline_message_id, $query, $offset, $old_chat_member, $old_chat_memberUserId, $old_chat_memberUserIs_bot, $old_chat_memberUserFirst_name, $old_chat_memberUserLast_name, $old_chat_memberUserUsername, $old_chat_memberStatus, $old_chat_memberCan_be_edited, $old_chat_memberCan_manage_chat, $old_chat_memberCan_change_info, $old_chat_memberCan_post_messages, $old_chat_memberCan_edit_messages, $old_chat_memberCan_delete_messages, $old_chat_memberCan_invite_users, $old_chat_memberCan_restrict_members, $old_chat_memberCan_pin_messages, $old_chat_memberCan_promote_members, $old_chat_memberCan_manage_voice_chats, $old_chat_memberCustom_title, $old_chat_memberIs_anonymous, $new_chat_member, $new_chat_memberUserId, $new_chat_memberUserIs_bot, $new_chat_memberUserFirst_name, $new_chat_memberUserLast_name, $new_chat_memberUserUsername, $new_chat_memberStatus, $new_chat_memberCan_be_edited, $new_chat_memberCan_manage_chat, $new_chat_memberCan_change_info, $new_chat_memberCan_post_messages, $new_chat_memberCan_edit_messages, $new_chat_memberCan_delete_messages, $new_chat_memberCan_invite_users, $new_chat_memberCan_restrict_members, $new_chat_memberCan_pin_messages, $new_chat_memberCan_promote_members, $new_chat_memberCan_manage_voice_chats, $new_chat_memberCustom_title, $new_chat_memberIs_anonymous, $poll_id, $option_ids;

    private $types = [
        "message",
        "edited_message",
        "channel_post",
        "edited_channel_post",
        "callback_query",
        "inline_query",
        "my_chat_member",
        "poll",
        "poll_answer"
    ];

    public function __construct($update)
    {
        parent::__construct($update);

        foreach ($this->types as $type) {
            if (isset($update->{$type})) {
                $this->type = $type;
                break;
            }
        }

        if (isset($this->type)) {
            $up = $update->{$this->type};
            $this->message_id = $up->message_id ?? null;

            $this->from = $up->from ?? null;
            $this->fromId = $up->from->id ?? null;
            $this->fromIs_bot = $up->from->is_bot ?? null;
            $this->fromFirst_name = $up->from->first_name ?? null;
            $this->fromLast_name = $up->from->last_name ?? null;
            $this->fromUsername = $up->from->username ?? null;
            $this->fromLanguage_code = $up->from->language_code ?? null;
            $this->author_signature = $up->author_signature ?? null;

            $this->sender_chat = $up->sender_chat ?? null;
            $this->sender_chatId = $up->sender_chat->id ?? null;
            $this->sender_chatTitle = $up->sender_chat->title ?? null;
            $this->sender_chatUsername = $up->sender_chat->username ?? null;
            $this->sender_chatType = $up->sender_chat->type ?? null;

            $this->chat = $up->chat ?? null;
            $this->chatId = $up->chat->id ?? null;
            $this->chatTitle = $up->chat->title ?? null;
            $this->chatFirst_name = $up->chat->first_name ?? null;
            $this->chatLast_name = $up->chat->last_name ?? null;
            $this->chatUsername = $up->chat->username ?? null;
            $this->chatType = $up->chat->type ?? null;

            $this->new_chat_members = $up->new_chat_members ?? null;
            $this->new_chat_membersId = $up->new_chat_members[0]->id ?? null;
            $this->new_chat_membersIs_bot = $up->new_chat_members[0]->is_bot ?? null;
            $this->new_chat_membersFirst_name = $up->new_chat_members[0]->first_name ?? null;
            $this->new_chat_membersLast_name = $up->new_chat_members[0]->last_name ?? null;
            $this->new_chat_membersUsername = $up->new_chat_members[0]->username ?? null;

            $this->left_chat_member = $up->left_chat_member ?? null;
            $this->left_chat_memberId = $up->left_chat_member->id ?? null;
            $this->left_chat_memberIs_bot = $up->left_chat_member->is_bot ?? null;
            $this->left_chat_memberFirst_name = $up->left_chat_member->first_name ?? null;
            $this->left_chat_memberLast_name = $up->left_chat_member->last_name ?? null;
            $this->left_chat_memberUsername = $up->left_chat_member->username ?? null;

            $this->forward_from = $up->forward_from ?? null;
            $this->forward_fromId = $up->forward_from->id ?? null;
            $this->forward_fromIs_bot = $up->forward_from->is_bot ?? null;
            $this->forward_fromFirst_name = $up->forward_from->first_name ?? null;
            $this->forward_fromLast_name = $up->forward_from->last_name ?? null;
            $this->forward_fromUsername = $up->forward_from->username ?? null;

            $this->forward_from_chat = $up->forward_from_chat ?? null;
            $this->forward_from_chatId = $up->forward_from_chat->id ?? null;
            $this->forward_from_chatTitle = $up->forward_from_chat->title ?? null;
            $this->forward_from_chatUsername = $up->forward_from_chat->username ?? null;
            $this->forward_from_chatType = $up->forward_from_chat->type ?? null;

            $this->forward_from_message_id = $up->forward_from_message_id ?? null;

            $this->forward_date = $up->forward_date ?? null;

            $this->pinned_message = $up->pinned_message ?? null;
            $this->pinned_messageMessage_id = $up->pinned_message->message_id ?? null;
            $this->pinned_messageFrom = $up->pinned_message->from ?? null;
            $this->pinned_messageFromId = $up->pinned_message->from->id ?? null;
            $this->pinned_messageFromIs_bot = $up->pinned_message->from->is_bot ?? null;
            $this->pinned_messageFromFirst_name = $up->pinned_message->from->first_name ?? null;
            $this->pinned_messageFromLast_name = $up->pinned_message->from->last_name ?? null;
            $this->pinned_messageFromUsername = $up->pinned_message->from->username ?? null;
            $this->pinned_messageFromLanguage_code = $up->pinned_message->from->language_code ?? null;
            $this->pinned_messageChat = $up->pinned_message->chat ?? null;
            $this->pinned_messageChatId = $up->pinned_message->chat->id ?? null;
            $this->pinned_messageChatTitle = $up->pinned_message->chat->title ?? null;
            $this->pinned_messageChatUsername = $up->pinned_message->chat->username ?? null;
            $this->pinned_messageChatType = $up->pinned_message->chat->type ?? null;
            $this->pinned_messageDate = $up->pinned_message->date ?? null;
            $this->pinned_messageText = $up->pinned_message->text ?? null;

            $this->text = $up->text ?? null;

            $this->photo = $up->photo ?? null;
            if (isset($up->photo[3])) {
                $arrayPhoto = $up->photo[3];
            } elseif (isset($up->photo[2])) {
                $arrayPhoto = $up->photo[2];
            } elseif (isset($up->photo[1])) {
                $arrayPhoto = $up->photo[1];
            } elseif (isset($up->photo[0])) {
                $arrayPhoto = $up->photo[0];
            }
            $this->photoFile_id = $arrayPhoto->file_id ?? null;
            $this->photoFile_size = $arrayPhoto->file_size ?? null;
            $this->photoWidth = $arrayPhoto->width ?? null;
            $this->photoHeight = $arrayPhoto->height ?? null;

            $this->audio = $up->audio ?? null;
            $this->audioDuration = $up->audio->duration ?? null;
            $this->audioMime_type = $up->audio->mime_type ?? null;
            $this->audioFile_id = $up->audio->file_id ?? null;
            $this->audioFile_size = $up->audio->file_size ?? null;
            $this->audioTitle = $up->audio->title ?? null;
            $this->audioPerformer = $up->audio->performer ?? null;

            $this->animation = $up->animation ?? null;
            $this->animationFile_name = $up->animation->file_name ?? null;
            $this->animationMime_type = $up->animation->mime_type ?? null;
            $this->animationDuration = $up->animation->duration ?? null;
            $this->animationWidth = $up->animation->width ?? null;
            $this->animationHeight = $up->animation->height ?? null;
            $this->animationThumbFile_id = $up->animation->thumb->file_id ?? null;
            $this->animationThumbFile_size = $up->animation->thumb->file_size ?? null;
            $this->animationThumbWidth = $up->animation->thumb->width ?? null;
            $this->animationThumbHeight = $up->animation->thumb->height ?? null;
            $this->animationFile_id = $up->animation->file_id ?? null;
            $this->animationFile_size = $up->animation->file_size ?? null;

            $this->document = $up->document ?? null;
            $this->documentFile_name = $up->document->file_name ?? null;
            $this->documentMime_type = $up->document->mime_type ?? null;
            $this->documentThumbFile_id = $up->document->thumb->file_id ?? null;
            $this->documentThumbFile_size = $up->document->thumb->file_size ?? null;
            $this->documentThumbWidth = $up->document->thumb->width ?? null;
            $this->documentThumbHeight = $up->document->thumb->height ?? null;
            $this->documentFile_id = $up->document->file_id ?? null;
            $this->documentFile_size = $up->document->file_size ?? null;

            $this->sticker = $up->sticker ?? null;
            $this->stickerWidth = $up->sticker->width ?? null;
            $this->stickerHeight = $up->sticker->height ?? null;
            $this->stickerEmoji = $up->sticker->emoji ?? null;
            $this->stickerThumb = $up->sticker->thumb ?? null;
            $this->stickerThumbFile_id = $up->sticker->thumb->file_id ?? null;
            $this->stickerThumbFile_size = $up->sticker->thumb->file_size ?? null;
            $this->stickerThumbWidth = $up->sticker->thumb->width ?? null;
            $this->stickerThumbHeight = $up->sticker->thumb->height ?? null;
            $this->stickerFile_id = $up->sticker->file_id ?? null;
            $this->stickerFile_size = $up->sticker->file_size ?? null;

            $this->video = $up->video ?? null;
            $this->videoDuration = $up->video->duration ?? null;
            $this->videoWidth = $up->video->width ?? null;
            $this->videoHeight = $up->video->height ?? null;
            $this->videoThumb = $up->video->thumb ?? null;
            $this->videoThumbFile_id = $up->video->thumb->file_id ?? null;
            $this->videoThumbFile_size = $up->video->thumb->file_size ?? null;
            $this->videoThumbWidth = $up->video->thumb->width ?? null;
            $this->videoThumbHeight = $up->video->thumb->height ?? null;
            $this->videoFile_id = $up->video->file_id ?? null;
            $this->videoFile_size = $up->video->file_size ?? null;

            $this->voice = $up->voice ?? null;
            $this->voiceDuration = $up->voice->duration ?? null;
            $this->voiceMime_type = $up->voice->mime_type ?? null;
            $this->voiceFile_id = $up->voice->file_id ?? null;
            $this->voiceFile_size = $up->voice->file_size ?? null;

            $this->contact = $up->contact ?? null;
            $this->contactPhone_number = $up->contact->phone_number ?? null;
            $this->contactFirst_name = $up->contact->first_name ?? null;
            $this->contactLast_name = $up->contact->last_name ?? null;
            $this->contactUser_id = $up->contact->user_id ?? null;

            $this->location = $up->location ?? null;
            $this->locationLongitude = $up->location->longitude ?? null;
            $this->locationLatitude = $up->location->latitude ?? null;

            $this->venue = $up->venue ?? null;
            $this->venueLocation = $up->venue->location ?? null;
            $this->venueTitle = $up->venue->title ?? null;
            $this->venueAddress = $up->venue->address ?? null;
            $this->venueFoursquare_id = $up->venue->foursquare_id ?? null;

            $this->caption = $up->caption ?? null;
            $this->new_chat_title = $up->new_chat_title ?? null;
            $this->date = $up->date ?? null;
            $this->media_group_id = $up->media_group_id ?? null;
            $this->migrate_from_chat_id = $up->migrate_from_chat_id ?? null;
            $this->group_chat_created = $up->group_chat_created ?? null;

            $this->reply_to_message = $up->reply_to_message ?? null;
            $this->reply_to_messageMessage_id = $up->reply_to_message->message_id ?? null;

            $this->reply_to_messageFrom = $up->reply_to_message->from ?? null;
            $this->reply_to_messageFromId = $up->reply_to_message->from->id ?? null;
            $this->reply_to_messageFromIs_bot = $up->reply_to_message->from->is_bot ?? null;
            $this->reply_to_messageFromFirst_name = $up->reply_to_message->from->first_name ?? null;
            $this->reply_to_messageFromLast_name = $up->reply_to_message->from->last_name ?? null;
            $this->reply_to_messageFromUsername = $up->reply_to_message->from->username ?? null;
            $this->reply_to_messageFromLanguage_code = $up->reply_to_message->from->language_code ?? null;

            $this->reply_to_messageChat = $up->reply_to_message->chat ?? null;
            $this->reply_to_messageChatId = $up->reply_to_message->chat->id ?? null;
            $this->reply_to_messageChatTitle = $up->reply_to_message->chat->title ?? null;
            $this->reply_to_messageChatFirst_name = $up->reply_to_message->chat->first_name ?? null;
            $this->reply_to_messageChatLast_name = $up->reply_to_message->chat->last_name ?? null;
            $this->reply_to_messageChatUsername = $up->reply_to_message->chat->username ?? null;
            $this->reply_to_messageChatType = $up->reply_to_message->chat->type ?? null;

            $this->reply_to_messageNew_chat_members = $up->reply_to_message->new_chat_members ?? null;
            $this->reply_to_messageNew_chat_membersId = $up->reply_to_message->new_chat_members[0]->id ?? null;
            $this->reply_to_messageNew_chat_membersIs_bot = $up->reply_to_message->new_chat_members[0]->is_bot ?? null;
            $this->reply_to_messageNew_chat_membersFirst_name = $up->reply_to_message->new_chat_members[0]->first_name ?? null;
            $this->reply_to_messageNew_chat_membersLast_name = $up->reply_to_message->new_chat_members[0]->last_name ?? null;
            $this->reply_to_messageNew_chat_membersUsername = $up->reply_to_message->new_chat_members[0]->username ?? null;

            $this->reply_to_messageLeft_chat_member = $up->reply_to_message->left_chat_member ?? null;
            $this->reply_to_messageLeft_chat_memberId = $up->reply_to_message->left_chat_member->id ?? null;
            $this->reply_to_messageLeft_chat_memberIs_bot = $up->reply_to_message->left_chat_member->is_bot ?? null;
            $this->reply_to_messageLeft_chat_memberFirst_name = $up->reply_to_message->left_chat_member->first_name ?? null;
            $this->reply_to_messageLeft_chat_memberLast_name = $up->reply_to_message->left_chat_member->last_name ?? null;
            $this->reply_to_messageLeft_chat_memberUsername = $up->reply_to_message->left_chat_member->username ?? null;

            $this->reply_to_messageForward_from = $up->reply_to_message->forward_from ?? null;
            $this->reply_to_messageForward_fromId = $up->reply_to_message->forward_from->id ?? null;
            $this->reply_to_messageForward_fromIs_bot = $up->reply_to_message->forward_from->is_bot ?? null;
            $this->reply_to_messageForward_fromFirst_name = $up->reply_to_message->forward_from->first_name ?? null;
            $this->reply_to_messageForward_fromLast_name = $up->reply_to_message->forward_from->last_name ?? null;
            $this->reply_to_messageForward_fromUsername = $up->reply_to_message->forward_from->username ?? null;

            $this->reply_to_messageForward_from_chat = $up->reply_to_message->forward_from_chat ?? null;
            $this->reply_to_messageForward_from_chatId = $up->reply_to_message->forward_from_chat->id ?? null;
            $this->reply_to_messageForward_from_chatTitle = $up->reply_to_message->forward_from_chat->title ?? null;
            $this->reply_to_messageForward_from_chatUsername = $up->reply_to_message->forward_from_chat->username ?? null;
            $this->reply_to_messageForward_from_chatType = $up->reply_to_message->forward_from_chat->type ?? null;

            $this->reply_to_messageForward_from_message_id = $up->reply_to_message->forward_from_message_id ?? null;

            $this->reply_to_messageForward_date = $up->reply_to_message->forward_date ?? null;

            $this->reply_to_messagePinned_message = $up->reply_to_message->pinned_message ?? null;
            $this->reply_to_messagePinned_messageMessage_id = $up->reply_to_message->pinned_message->message_id ?? null;
            $this->reply_to_messagePinned_messageFrom = $up->reply_to_message->pinned_message->from ?? null;
            $this->reply_to_messagePinned_messageFromId = $up->reply_to_message->pinned_message->from->id ?? null;
            $this->reply_to_messagePinned_messageFromIs_bot = $up->reply_to_message->pinned_message->from->is_bot ?? null;
            $this->reply_to_messagePinned_messageFromFirst_name = $up->reply_to_message->pinned_message->from->first_name ?? null;
            $this->reply_to_messagePinned_messageFromLast_name = $up->reply_to_message->pinned_message->from->last_name ?? null;
            $this->reply_to_messagePinned_messageFromUsername = $up->reply_to_message->pinned_message->from->username ?? null;
            $this->reply_to_messagePinned_messageFromLanguage_code = $up->reply_to_message->pinned_message->from->language_code ?? null;
            $this->reply_to_messagePinned_messageChat = $up->reply_to_message->pinned_message->chat ?? null;
            $this->reply_to_messagePinned_messageChatId = $up->reply_to_message->pinned_message->chat->id ?? null;
            $this->reply_to_messagePinned_messageChatTitle = $up->reply_to_message->pinned_message->chat->title ?? null;
            $this->reply_to_messagePinned_messageChatUsername = $up->reply_to_message->pinned_message->chat->username ?? null;
            $this->reply_to_messagePinned_messageChatType = $up->reply_to_message->pinned_message->chat->type ?? null;
            $this->reply_to_messagePinned_messageDate = $up->reply_to_message->pinned_message->date ?? null;
            $this->reply_to_messagePinned_messageText = $up->reply_to_message->pinned_message->text ?? null;

            $this->reply_to_messageText = $up->reply_to_message->text ?? null;

            $this->reply_to_messagePhoto = $up->reply_to_message->photo ?? null;
            $this->reply_to_messagePhotoFile_id = $up->reply_to_message->photo[0]->file_id ?? null;
            $this->reply_to_messagePhotoFile_size = $up->reply_to_message->photo[0]->file_size ?? null;
            $this->reply_to_messagePhotoWidth = isset($update->photo[0]->width) ? $up->reply_to_message->photo[0]->width : null;
            $this->reply_to_messagePhotoHeight = isset($update->photo[0]->height) ? $up->reply_to_message->photo[0]->height : null;

            $this->reply_to_messageAudio = $up->reply_to_message->audio ?? null;
            $this->reply_to_messageAudioDuration = $up->reply_to_message->audio->duration ?? null;
            $this->reply_to_messageAudioMime_type = $up->reply_to_message->audio->mime_type ?? null;
            $this->reply_to_messageAudioFile_id = $up->reply_to_message->audio->file_id ?? null;
            $this->reply_to_messageAudioFile_size = $up->reply_to_message->audio->file_size ?? null;
            $this->reply_to_messageAudioTitle = $up->reply_to_message->audio->title ?? null;
            $this->reply_to_messageAudioPerformer = $up->reply_to_message->audio->performer ?? null;

            $this->reply_to_messageAnimation = $up->reply_to_message->animation ?? null;
            $this->reply_to_messageAnimationFile_name = $up->reply_to_message->animation->file_name ?? null;
            $this->reply_to_messageAnimationMime_type = $up->reply_to_message->animation->mime_type ?? null;
            $this->reply_to_messageAnimationDuration = $up->reply_to_message->animation->duration ?? null;
            $this->reply_to_messageAnimationWidth = $up->reply_to_message->animation->width ?? null;
            $this->reply_to_messageAnimationHeight = $up->reply_to_message->animation->height ?? null;
            $this->reply_to_messageAnimationThumbFile_id = $up->reply_to_message->animation->thumb->file_id ?? null;
            $this->reply_to_messageAnimationThumbFile_size = $up->reply_to_message->animation->thumb->file_size ?? null;
            $this->reply_to_messageAnimationThumbWidth = $up->reply_to_message->animation->thumb->width ?? null;
            $this->reply_to_messageAnimationThumbHeight = $up->reply_to_message->animation->thumb->height ?? null;
            $this->reply_to_messageAnimationFile_id = $up->reply_to_message->animation->file_id ?? null;
            $this->reply_to_messageAnimationFile_size = $up->reply_to_message->animation->file_size ?? null;

            $this->reply_to_messageDocument = $up->reply_to_message->document ?? null;
            $this->reply_to_messageDocumentFile_name = $up->reply_to_message->document->file_name ?? null;
            $this->reply_to_messageDocumentMime_type = $up->reply_to_message->document->mime_type ?? null;
            $this->reply_to_messageDocumentThumbFile_id = $up->reply_to_message->document->thumb->file_id ?? null;
            $this->reply_to_messageDocumentThumbFile_size = $up->reply_to_message->document->thumb->file_size ?? null;
            $this->reply_to_messageDocumentThumbWidth = $up->reply_to_message->document->thumb->width ?? null;
            $this->reply_to_messageDocumentThumbHeight = $up->reply_to_message->document->thumb->height ?? null;
            $this->reply_to_messageDocumentFile_id = $up->reply_to_message->document->file_id ?? null;
            $this->reply_to_messageDocumentFile_size = $up->reply_to_message->document->file_size ?? null;

            $this->reply_to_messageSticker = $up->reply_to_message->sticker ?? null;
            $this->reply_to_messageStickerWidth = $up->reply_to_message->sticker->width ?? null;
            $this->reply_to_messageStickerHeight = $up->reply_to_message->sticker->height ?? null;
            $this->reply_to_messageStickerEmoji = $up->reply_to_message->sticker->emoji ?? null;
            $this->reply_to_messageStickerThumb = $up->reply_to_message->sticker->thumb ?? null;
            $this->reply_to_messageStickerThumbFile_id = $up->reply_to_message->sticker->thumb->file_id ?? null;
            $this->reply_to_messageStickerThumbFile_size = $up->reply_to_message->sticker->thumb->file_size ?? null;
            $this->reply_to_messageStickerThumbWidth = $up->reply_to_message->sticker->thumb->width ?? null;
            $this->reply_to_messageStickerThumbHeight = $up->reply_to_message->sticker->thumb->height ?? null;
            $this->reply_to_messageStickerFile_id = $up->reply_to_message->sticker->file_id ?? null;
            $this->reply_to_messageStickerFile_size = $up->reply_to_message->sticker->file_size ?? null;

            $this->reply_to_messageVideo = $up->reply_to_message->video ?? null;
            $this->reply_to_messageVideoDuration = $up->reply_to_message->video->duration ?? null;
            $this->reply_to_messageVideoWidth = $up->reply_to_message->video->width ?? null;
            $this->reply_to_messageVideoHeight = $up->reply_to_message->video->height ?? null;
            $this->reply_to_messageVideoThumb = $up->reply_to_message->video->thumb ?? null;
            $this->reply_to_messageVideoThumbFile_id = $up->reply_to_message->video->thumb->file_id ?? null;
            $this->reply_to_messageVideoThumbFile_size = $up->reply_to_message->video->thumb->file_size ?? null;
            $this->reply_to_messageVideoThumbWidth = $up->reply_to_message->video->thumb->width ?? null;
            $this->reply_to_messageVideoThumbHeight = $up->reply_to_message->video->thumb->height ?? null;
            $this->reply_to_messageVideoFile_id = $up->reply_to_message->video->file_id ?? null;
            $this->reply_to_messageVideoFile_size = $up->reply_to_message->video->file_size ?? null;

            $this->reply_to_messageVoice = $up->reply_to_message->voice ?? null;
            $this->reply_to_messageVoiceDuration = $up->reply_to_message->voice->duration ?? null;
            $this->reply_to_messageVoiceMime_type = $up->reply_to_message->voice->mime_type ?? null;
            $this->reply_to_messageVoiceFile_id = $up->reply_to_message->voice->file_id ?? null;
            $this->reply_to_messageVoiceFile_size = $up->reply_to_message->voice->file_size ?? null;

            $this->reply_to_messageContact = $up->reply_to_message->contact ?? null;
            $this->reply_to_messageContactPhone_number = $up->reply_to_message->contact->phone_number ?? null;
            $this->reply_to_messageContactFirst_name = $up->reply_to_message->contact->first_name ?? null;
            $this->reply_to_messageContactLast_name = $up->reply_to_message->contact->last_name ?? null;
            $this->reply_to_messageContactUser_id = $up->reply_to_message->contact->user_id ?? null;

            $this->reply_to_messageLocation = $up->reply_to_message->location ?? null;
            $this->reply_to_messageLocationLongitude = $up->reply_to_message->location->longitude ?? null;
            $this->reply_to_messageLocationLatitude = $up->reply_to_message->location->latitude ?? null;

            $this->reply_to_messageVenue = $up->reply_to_message->venue ?? null;
            $this->reply_to_messageVenueLocation = $up->reply_to_message->venue->location ?? null;
            $this->reply_to_messageVenueTitle = $up->reply_to_message->venue->title ?? null;
            $this->reply_to_messageVenueAddress = $up->reply_to_message->venue->address ?? null;
            $this->reply_to_messageVenueFoursquare_id = $up->reply_to_message->venue->foursquare_id ?? null;

            $this->reply_to_messageCaption = $up->reply_to_message->caption ?? null;
            $this->reply_to_messageNew_chat_title = $up->reply_to_message->new_chat_title ?? null;
            $this->reply_to_messageDate = $up->reply_to_message->date ?? null;
            $this->reply_to_messageMigrate_from_chat_id = $up->reply_to_message->migrate_from_chat_id ?? null;

            $this->entities = $up->entities ?? null;

            $this->via_bot = $up->via_bot ?? null;
            $this->via_botId = $up->via_bot->id ?? null;
            $this->via_botIs_bot = $up->via_bot->is_bot ?? null;
            $this->via_botFirst_name = $up->via_bot->first_name ?? null;
            $this->via_botUsername = $up->via_bot->username ?? null;

            if ($this->type == "callback_query") {
                $this->id = $up->id ?? null;
                $this->messageMessage_id = $up->message->message_id ?? null;
                $this->messageChatId = $up->message->chat->id ?? null;

                $this->chat = $up->message->chat ?? null;
                $this->chatId = $up->message->chat->id ?? null;
                $this->chatTitle = $up->message->chat->title ?? null;
                $this->chatFirst_name = $up->message->chat->first_name ?? null;
                $this->chatLast_name = $up->message->chat->last_name ?? null;
                $this->chatUsername = $up->message->chat->username ?? null;
                $this->chatType = $up->message->chat->type ?? null;

                $this->date = $up->message->date ?? null;
                $this->text = $up->message->text ?? null;

                $this->photo = $up->message->photo ?? null;
                $this->photoFile_id = $up->message->photo[0]->file_id ?? null;
                $this->photoFile_size = $up->message->photo[0]->file_size ?? null;
                $this->photoWidth = isset($update->photo[0]->width) ? $up->message->photo[0]->width : null;
                $this->photoHeight = isset($update->photo[0]->height) ? $up->message->photo[0]->height : null;

                $this->audio = $up->message->audio ?? null;
                $this->audioDuration = $up->message->audio->duration ?? null;
                $this->audioMime_type = $up->message->audio->mime_type ?? null;
                $this->audioFile_id = $up->message->audio->file_id ?? null;
                $this->audioFile_size = $up->message->audio->file_size ?? null;
                $this->audioTitle = $up->message->audio->title ?? null;
                $this->audioPerformer = $up->message->audio->performer ?? null;

                $this->animation = $up->message->animation ?? null;
                $this->animationFile_name = $up->message->animation->file_name ?? null;
                $this->animationMime_type = $up->message->animation->mime_type ?? null;
                $this->animationDuration = $up->message->animation->duration ?? null;
                $this->animationWidth = $up->message->animation->width ?? null;
                $this->animationHeight = $up->message->animation->height ?? null;
                $this->animationThumbFile_id = $up->message->animation->thumb->file_id ?? null;
                $this->animationThumbFile_size = $up->message->animation->thumb->file_size ?? null;
                $this->animationThumbWidth = $up->message->animation->thumb->width ?? null;
                $this->animationThumbHeight = $up->message->animation->thumb->height ?? null;
                $this->animationFile_id = $up->message->animation->file_id ?? null;
                $this->animationFile_size = $up->message->animation->file_size ?? null;

                $this->document = $up->message->document ?? null;
                $this->documentFile_name = $up->message->document->file_name ?? null;
                $this->documentMime_type = $up->message->document->mime_type ?? null;
                $this->documentThumbFile_id = $up->message->document->thumb->file_id ?? null;
                $this->documentThumbFile_size = $up->message->document->thumb->file_size ?? null;
                $this->documentThumbWidth = $up->message->document->thumb->width ?? null;
                $this->documentThumbHeight = $up->message->document->thumb->height ?? null;
                $this->documentFile_id = $up->message->document->file_id ?? null;
                $this->documentFile_size = $up->message->document->file_size ?? null;

                $this->sticker = $up->message->sticker ?? null;
                $this->stickerWidth = $up->message->sticker->width ?? null;
                $this->stickerHeight = $up->message->sticker->height ?? null;
                $this->stickerEmoji = $up->message->sticker->emoji ?? null;
                $this->stickerThumb = $up->message->sticker->thumb ?? null;
                $this->stickerThumbFile_id = $up->message->sticker->thumb->file_id ?? null;
                $this->stickerThumbFile_size = $up->message->sticker->thumb->file_size ?? null;
                $this->stickerThumbWidth = $up->message->sticker->thumb->width ?? null;
                $this->stickerThumbHeight = $up->message->sticker->thumb->height ?? null;
                $this->stickerFile_id = $up->message->sticker->file_id ?? null;
                $this->stickerFile_size = $up->message->sticker->file_size ?? null;

                $this->video = $up->message->video ?? null;
                $this->videoDuration = $up->message->video->duration ?? null;
                $this->videoWidth = $up->message->video->width ?? null;
                $this->videoHeight = $up->message->video->height ?? null;
                $this->videoThumb = $up->message->video->thumb ?? null;
                $this->videoThumbFile_id = $up->message->video->thumb->file_id ?? null;
                $this->videoThumbFile_size = $up->message->video->thumb->file_size ?? null;
                $this->videoThumbWidth = $up->message->video->thumb->width ?? null;
                $this->videoThumbHeight = $up->message->video->thumb->height ?? null;
                $this->videoFile_id = $up->message->video->file_id ?? null;
                $this->videoFile_size = $up->message->video->file_size ?? null;

                $this->voice = $up->message->voice ?? null;
                $this->voiceDuration = $up->message->voice->duration ?? null;
                $this->voiceMime_type = $up->message->voice->mime_type ?? null;
                $this->voiceFile_id = $up->message->voice->file_id ?? null;
                $this->voiceFile_size = $up->message->voice->file_size ?? null;

                $this->contact = $up->message->contact ?? null;
                $this->contactPhone_number = $up->message->contact->phone_number ?? null;
                $this->contactFirst_name = $up->message->contact->first_name ?? null;
                $this->contactLast_name = $up->message->contact->last_name ?? null;
                $this->contactUser_id = $up->message->contact->user_id ?? null;

                $this->location = $up->message->location ?? null;
                $this->locationLongitude = $up->message->location->longitude ?? null;
                $this->locationLatitude = $up->message->location->latitude ?? null;

                $this->venue = $up->message->venue ?? null;
                $this->venueLocation = $up->message->venue->location ?? null;
                $this->venueTitle = $up->message->venue->title ?? null;
                $this->venueAddress = $up->message->venue->address ?? null;
                $this->venueFoursquare_id = $up->message->venue->foursquare_id ?? null;

                $this->caption = $up->message->caption ?? null;
                $this->caption_entities = $up->message->caption_entities ?? null;
                $this->entities = $up->message->entities ?? null;


                $this->inline_message_id = $up->inline_message_id ?? null;
                $this->chat_instance = $up->chat_instance ?? null;
                $this->data = $up->data ?? null;
            } elseif ($this->type == "inline_query") {
                $this->id = $up->id ?? null;

                $this->from = $up->from ?? null;
                $this->fromId = $up->from->id ?? null;
                $this->fromIs_bot = $up->from->is_bot ?? null;
                $this->fromFirst_name = $up->from->first_name ?? null;
                $this->fromLast_name = $up->from->last_name ?? null;
                $this->fromUsername = $up->from->username ?? null;
                $this->fromLanguage_code = $up->from->language_code ?? null;

                $this->query = $up->query ?? null;
                $this->offset = $up->offset ?? null;
            } elseif ($this->type == "my_chat_member") {
                $this->old_chat_member = $up->old_chat_member ?? null;
                $this->old_chat_memberUserId = $up->old_chat_member->user->id ?? null;
                $this->old_chat_memberUserIs_bot = $up->old_chat_member->user->is_bot ?? null;
                $this->old_chat_memberUserFirst_name = $up->old_chat_member->user->first_name ?? null;
                $this->old_chat_memberUserLast_name = $up->old_chat_member->user->last_name ?? null;
                $this->old_chat_memberUserUsername = $up->old_chat_member->user->username ?? null;
                $this->old_chat_memberStatus = $up->old_chat_member->status ?? null;
                $this->old_chat_memberCan_be_edited = $up->old_chat_member->can_be_edited ?? null;
                $this->old_chat_memberCan_manage_chat = $up->old_chat_member->can_manage_chat ?? null;
                $this->old_chat_memberCan_change_info = $up->old_chat_member->can_change_info ?? null;
                $this->old_chat_memberCan_post_messages = $up->old_chat_member->can_post_messages ?? null;
                $this->old_chat_memberCan_edit_messages = $up->old_chat_member->can_edit_messages ?? null;
                $this->old_chat_memberCan_delete_messages = $up->old_chat_member->can_delete_messages ?? null;
                $this->old_chat_memberCan_invite_users = $up->old_chat_member->can_invite_users ?? null;
                $this->old_chat_memberCan_restrict_members = $up->old_chat_member->can_restrict_members ?? null;
                $this->old_chat_memberCan_pin_messages = $up->old_chat_member->can_pin_messages ?? null;
                $this->old_chat_memberCan_promote_members = $up->old_chat_member->can_promote_members ?? null;
                $this->old_chat_memberCan_manage_voice_chats = $up->old_chat_member->can_manage_voice_chats ?? null;
                $this->old_chat_memberCustom_title = $up->old_chat_member->custom_title ?? null;
                $this->old_chat_memberIs_anonymous = $up->old_chat_member->is_anonymous ?? null;

                $this->new_chat_member = $up->new_chat_member ?? null;
                $this->new_chat_memberUserId = $up->new_chat_member->user->id ?? null;
                $this->new_chat_memberUserIs_bot = $up->new_chat_member->user->is_bot ?? null;
                $this->new_chat_memberUserFirst_name = $up->new_chat_member->user->first_name ?? null;
                $this->new_chat_memberUserLast_name = $up->new_chat_member->user->last_name ?? null;
                $this->new_chat_memberUserUsername = $up->new_chat_member->user->username ?? null;
                $this->new_chat_memberStatus = $up->new_chat_member->status ?? null;
                $this->new_chat_memberCan_be_edited = $up->new_chat_member->can_be_edited ?? null;
                $this->new_chat_memberCan_manage_chat = $up->new_chat_member->can_manage_chat ?? null;
                $this->new_chat_memberCan_change_info = $up->new_chat_member->can_change_info ?? null;
                $this->new_chat_memberCan_post_messages = $up->new_chat_member->can_post_messages ?? null;
                $this->new_chat_memberCan_edit_messages = $up->new_chat_member->can_edit_messages ?? null;
                $this->new_chat_memberCan_delete_messages = $up->new_chat_member->can_delete_messages ?? null;
                $this->new_chat_memberCan_invite_users = $up->new_chat_member->can_invite_users ?? null;
                $this->new_chat_memberCan_restrict_members = $up->new_chat_member->can_restrict_members ?? null;
                $this->new_chat_memberCan_pin_messages = $up->new_chat_member->can_pin_messages ?? null;
                $this->new_chat_memberCan_promote_members = $up->new_chat_member->can_promote_members ?? null;
                $this->new_chat_memberCan_manage_voice_chats = $up->new_chat_member->can_manage_voice_chats ?? null;
                $this->new_chat_memberCustom_title = $up->new_chat_member->custom_title ?? null;
                $this->new_chat_memberIs_anonymous = $up->new_chat_member->is_anonymous ?? null;
            } elseif ($this->type == "poll_answer") {
                $this->poll_id = $up->poll_id ?? null;

                $this->from = $up->user ?? null;
                $this->fromId = $up->user->id ?? null;
                $this->fromIs_bot = $up->user->is_bot ?? null;
                $this->fromFirst_name = $up->user->first_name ?? null;
                $this->fromLast_name = $up->user->last_name ?? null;
                $this->fromUsername = $up->user->username ?? null;
                $this->fromLanguage_code = $up->user->language_code ?? null;

                $this->option_ids = $up->option_ids ?? null;
            }
        }
    }
}