<?php
namespace TuriBot;

class EasyVarsExt extends EasyVars {
	public $type, $message_id,
		$from, $fromId, $fromIs_bot, $fromFirst_name, $fromLast_name, $fromUsername, $fromLanguage_code, $forward_date, $author_signature,
		$sender_chat, $sender_chatId, $sender_chatTitle, $sender_chatUsername, $sender_chatType,
		$chat, $chatId, $chatTitle, $chatFirst_name, $chatLast_name, $chatUsername, $chatType,
		$new_chat_members, $new_chat_membersId, $new_chat_membersIs_bot, $new_chat_membersFirst_name, $new_chat_membersLast_name, $new_chat_membersUsername,
		$left_chat_member, $left_chat_memberId, $left_chat_memberIs_bot, $left_chat_memberFirst_name, $left_chat_memberLast_name, $left_chat_memberUsername,
		$forward_from, $forward_fromId, $forward_fromIs_bot, $forward_fromFirst_name, $forward_fromLast_name, $forward_fromUsername,
		$forward_from_chat, $forward_from_chatId, $forward_from_chatTitle, $forward_from_chatUsername, $forward_from_chatType, $forward_from_message_id,
		$pinned_message, $pinned_messageMessage_id,
		$pinned_messageFrom, $pinned_messageFromId, $pinned_messageFromIs_bot, $pinned_messageFromFirst_name, $pinned_messageFromLast_name, $pinned_messageFromUsername, $pinned_messageFromLanguage_code,
		$pinned_messageChat, $pinned_messageChatId, $pinned_messageChatTitle, $pinned_messageChatUsername, $pinned_messageChatType,
		$pinned_messageDate, $pinned_messageText,
		$text,
		$photo, $photoFile_id, $photoFile_size, $photoWidth, $photoHeight,
		$audio, $audioDuration, $audioMime_type, $audioFile_id, $audioFile_size, $audioTitle, $audioPerformer,
		$animation, $animationFile_name, $animationMime_type, $animationDuration, $animationWidth, $animationHeight, $animationThumbFile_id, $animationThumbFile_size, $animationThumbWidth, $animationThumbHeight, $animationFile_id, $animationFile_size,
		$document, $documentFile_name, $documentMime_type, $documentThumbFile_id, $documentThumbFile_size, $documentThumbWidth, $documentThumbHeight, $documentFile_id, $documentFile_size,
		$sticker, $stickerWidth, $stickerHeight, $stickerEmoji, $stickerThumb, $stickerThumbFile_id, $stickerThumbFile_size, $stickerThumbWidth, $stickerThumbHeight, $stickerFile_id, $stickerFile_size,
		$video, $videoDuration, $videoWidth, $videoHeight, $videoThumb, $videoThumbFile_id, $videoThumbFile_size, $videoThumbWidth, $videoThumbHeight, $videoFile_id, $videoFile_size,
		$voice, $voiceDuration, $voiceMime_type, $voiceFile_id, $voiceFile_size,
		$contact, $contactPhone_number, $contactFirst_name, $contactLast_name, $contactUser_id,
		$location, $locationLongitude, $locationLatitude,
		$venue, $venueLocation, $venueTitle, $venueAddress, $venueFoursquare_id,
		$caption, $caption_entities,
		$new_chat_title, $date, $media_group_id, $migrate_from_chat_id,
		$reply_to_message, $reply_to_messageMessage_id,
		$reply_to_messageFrom, $reply_to_messageFromId, $reply_to_messageFromIs_bot, $reply_to_messageFromFirst_name, $reply_to_messageFromLast_name, $reply_to_messageFromUsername, $reply_to_messageFromLanguage_code,
		$reply_to_messageChat, $reply_to_messageChatId, $reply_to_messageChatTitle, $reply_to_messageChatFirst_name, $reply_to_messageChatLast_name, $reply_to_messageChatUsername, $reply_to_messageChatType,
		$reply_to_messageNew_chat_members, $reply_to_messageNew_chat_membersId, $reply_to_messageNew_chat_membersIs_bot, $reply_to_messageNew_chat_membersFirst_name, $reply_to_messageNew_chat_membersLast_name, $reply_to_messageNew_chat_membersUsername,
		$reply_to_messageLeft_chat_member, $reply_to_messageLeft_chat_memberId, $reply_to_messageLeft_chat_memberIs_bot, $reply_to_messageLeft_chat_memberFirst_name, $reply_to_messageLeft_chat_memberLast_name, $reply_to_messageLeft_chat_memberUsername,
		$reply_to_messageForward_from, $reply_to_messageForward_fromId, $reply_to_messageForward_fromIs_bot, $reply_to_messageForward_fromFirst_name, $reply_to_messageForward_fromLast_name, $reply_to_messageForward_fromUsername,
		$reply_to_messageForward_from_chat, $reply_to_messageForward_from_chatId, $reply_to_messageForward_from_chatTitle, $reply_to_messageForward_from_chatUsername, $reply_to_messageForward_from_chatType, $reply_to_messageForward_from_message_id,
		$reply_to_messageForward_date,
		$reply_to_messagePinned_message, $reply_to_messagePinned_messageMessage_id,
		$reply_to_messagePinned_messageFrom, $reply_to_messagePinned_messageFromId, $reply_to_messagePinned_messageFromIs_bot, $reply_to_messagePinned_messageFromFirst_name, $reply_to_messagePinned_messageFromLast_name, $reply_to_messagePinned_messageFromUsername, $reply_to_messagePinned_messageFromLanguage_code,
		$reply_to_messagePinned_messageChat, $reply_to_messagePinned_messageChatId, $reply_to_messagePinned_messageChatTitle, $reply_to_messagePinned_messageChatUsername, $reply_to_messagePinned_messageChatType,
		$reply_to_messagePinned_messageDate, $reply_to_messagePinned_messageText,
		$reply_to_messageText,
		$reply_to_messagePhoto, $reply_to_messagePhotoFile_id, $reply_to_messagePhotoFile_size, $reply_to_messagePhotoWidth, $reply_to_messagePhotoHeight,
		$reply_to_messageAudio, $reply_to_messageAudioDuration, $reply_to_messageAudioMime_type, $reply_to_messageAudioFile_id, $reply_to_messageAudioFile_size, $reply_to_messageAudioTitle, $reply_to_messageAudioPerformer,
		$reply_to_messageAnimation, $reply_to_messageAnimationFile_name, $reply_to_messageAnimationMime_type, $reply_to_messageAnimationDuration, $reply_to_messageAnimationWidth, $reply_to_messageAnimationHeight, $reply_to_messageAnimationThumbFile_id, $reply_to_messageAnimationThumbFile_size, $reply_to_messageAnimationThumbWidth, $reply_to_messageAnimationThumbHeight, $reply_to_messageAnimationFile_id, $reply_to_messageAnimationFile_size,
		$reply_to_messageDocument, $reply_to_messageDocumentFile_name, $reply_to_messageDocumentMime_type, $reply_to_messageDocumentThumbFile_id, $reply_to_messageDocumentThumbFile_size, $reply_to_messageDocumentThumbWidth, $reply_to_messageDocumentThumbHeight, $reply_to_messageDocumentFile_id, $reply_to_messageDocumentFile_size,
		$reply_to_messageSticker, $reply_to_messageStickerWidth, $reply_to_messageStickerHeight, $reply_to_messageStickerEmoji, $reply_to_messageStickerThumb, $reply_to_messageStickerThumbFile_id, $reply_to_messageStickerThumbFile_size, $reply_to_messageStickerThumbWidth, $reply_to_messageStickerThumbHeight, $reply_to_messageStickerFile_id, $reply_to_messageStickerFile_size,
		$reply_to_messageVideo, $reply_to_messageVideoDuration, $reply_to_messageVideoWidth, $reply_to_messageVideoHeight, $reply_to_messageVideoThumb, $reply_to_messageVideoThumbFile_id, $reply_to_messageVideoThumbFile_size, $reply_to_messageVideoThumbWidth, $reply_to_messageVideoThumbHeight, $reply_to_messageVideoFile_id, $reply_to_messageVideoFile_size,
		$reply_to_messageVoice, $reply_to_messageVoiceDuration, $reply_to_messageVoiceMime_type, $reply_to_messageVoiceFile_id, $reply_to_messageVoiceFile_size,
		$reply_to_messageContact, $reply_to_messageContactPhone_number, $reply_to_messageContactFirst_name, $reply_to_messageContactLast_name, $reply_to_messageContactUser_id,
		$reply_to_messageLocation, $reply_to_messageLocationLongitude, $reply_to_messageLocationLatitude,
		$reply_to_messageVenue, $reply_to_messageVenueLocation, $reply_to_messageVenueTitle, $reply_to_messageVenueAddress, $reply_to_messageVenueFoursquare_id,
		$reply_to_messageCaption, $reply_to_messageNew_chat_title, $reply_to_messageDate, $reply_to_messageMigrate_from_chat_id, $entities,
		$via_bot, $via_botId, $via_botIs_bot, $via_botFirst_name, $via_botUsername,
		$data, $id, $messageChatId, $messageMessage_id, $inline_message_id, $query, $offset,
		$old_chat_member,
		$old_chat_memberUserId, $old_chat_memberUserIs_bot, $old_chat_memberUserFirst_name, $old_chat_memberUserLast_name, $old_chat_memberUserUsername,
		$old_chat_memberStatus, $old_chat_memberCan_be_edited, $old_chat_memberCan_manage_chat, $old_chat_memberCan_change_info, $old_chat_memberCan_post_messages, $old_chat_memberCan_edit_messages, $old_chat_memberCan_delete_messages, $old_chat_memberCan_invite_users, $old_chat_memberCan_restrict_members, $old_chat_memberCan_pin_messages, $old_chat_memberCan_promote_members, $old_chat_memberCan_manage_voice_chats, $old_chat_memberCustom_title, $old_chat_memberIs_anonymous,
		$new_chat_member,
		$new_chat_memberUserId, $new_chat_memberUserIs_bot, $new_chat_memberUserFirst_name, $new_chat_memberUserLast_name, $new_chat_memberUserUsername,
		$new_chat_memberStatus, $new_chat_memberCan_be_edited, $new_chat_memberCan_manage_chat, $new_chat_memberCan_change_info, $new_chat_memberCan_post_messages, $new_chat_memberCan_edit_messages, $new_chat_memberCan_delete_messages, $new_chat_memberCan_invite_users, $new_chat_memberCan_restrict_members, $new_chat_memberCan_pin_messages, $new_chat_memberCan_promote_members, $new_chat_memberCan_manage_voice_chats, $new_chat_memberCustom_title, $new_chat_memberIs_anonymous,
		$poll_id, $option_ids;

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

	public function __construct($update) {
        parent::__construct($update);

		foreach ($this->types as $type) {
			if (isset($update->{$type})) {
				$this->type = $type;
				break;
			}
		}

		if (isset($this->type)) {
			$up = $update->{$this->type};
			$this->message_id = isset($up->message_id) ? $up->message_id : null;

			$this->from = isset($up->from) ? $up->from : null;
			$this->fromId = isset($up->from->id) ? $up->from->id : null;
			$this->fromIs_bot = isset($up->from->is_bot) ? $up->from->is_bot : null;
			$this->fromFirst_name = isset($up->from->first_name) ? $up->from->first_name : null;
			$this->fromLast_name = isset($up->from->last_name) ? $up->from->last_name : null;
			$this->fromUsername = isset($up->from->username) ? $up->from->username : null;
			$this->fromLanguage_code = isset($up->from->language_code) ? $up->from->language_code : null;
			$this->author_signature = isset($up->author_signature) ? $up->author_signature : null;

			$this->sender_chat = isset($up->sender_chat) ? $up->sender_chat : null;
			$this->sender_chatId = isset($up->sender_chat->id) ? $up->sender_chat->id : null;
			$this->sender_chatTitle = isset($up->sender_chat->title) ? $up->sender_chat->title : null;
			$this->sender_chatUsername = isset($up->sender_chat->username) ? $up->sender_chat->username : null;
			$this->sender_chatType = isset($up->sender_chat->type) ? $up->sender_chat->type : null;

			$this->chat = isset($up->chat) ? $up->chat : null;
			$this->chatId = isset($up->chat->id) ? $up->chat->id : null;
			$this->chatTitle = isset($up->chat->title) ? $up->chat->title : null;
			$this->chatFirst_name = isset($up->chat->first_name) ? $up->chat->first_name : null;
			$this->chatLast_name = isset($up->chat->last_name) ? $up->chat->last_name : null;
			$this->chatUsername = isset($up->chat->username) ? $up->chat->username : null;
			$this->chatType = isset($up->chat->type) ? $up->chat->type : null;

			$this->new_chat_members = isset($up->new_chat_members) ? $up->new_chat_members : null;
			$this->new_chat_membersId = isset($up->new_chat_members[0]->id) ? $up->new_chat_members[0]->id : null;
			$this->new_chat_membersIs_bot = isset($up->new_chat_members[0]->is_bot) ? $up->new_chat_members[0]->is_bot : null;
			$this->new_chat_membersFirst_name = isset($up->new_chat_members[0]->first_name) ? $up->new_chat_members[0]->first_name : null;
			$this->new_chat_membersLast_name = isset($up->new_chat_members[0]->last_name) ? $up->new_chat_members[0]->last_name : null;
			$this->new_chat_membersUsername = isset($up->new_chat_members[0]->username) ? $up->new_chat_members[0]->username : null;

			$this->left_chat_member = isset($up->left_chat_member) ? $up->left_chat_member : null;
			$this->left_chat_memberId = isset($up->left_chat_member->id) ? $up->left_chat_member->id : null;
			$this->left_chat_memberIs_bot = isset($up->left_chat_member->is_bot) ? $up->left_chat_member->is_bot : null;
			$this->left_chat_memberFirst_name = isset($up->left_chat_member->first_name) ? $up->left_chat_member->first_name : null;
			$this->left_chat_memberLast_name = isset($up->left_chat_member->last_name) ? $up->left_chat_member->last_name : null;
			$this->left_chat_memberUsername = isset($up->left_chat_member->username) ? $up->left_chat_member->username : null;

			$this->forward_from = isset($up->forward_from) ? $up->forward_from : null;
			$this->forward_fromId = isset($up->forward_from->id) ? $up->forward_from->id : null;
			$this->forward_fromIs_bot = isset($up->forward_from->is_bot) ? $up->forward_from->is_bot : null;
			$this->forward_fromFirst_name = isset($up->forward_from->first_name) ? $up->forward_from->first_name : null;
			$this->forward_fromLast_name = isset($up->forward_from->last_name) ? $up->forward_from->last_name : null;
			$this->forward_fromUsername = isset($up->forward_from->username) ? $up->forward_from->username : null;

			$this->forward_from_chat = isset($up->forward_from_chat) ? $up->forward_from_chat : null;
			$this->forward_from_chatId = isset($up->forward_from_chat->id) ? $up->forward_from_chat->id : null;
			$this->forward_from_chatTitle = isset($up->forward_from_chat->title) ? $up->forward_from_chat->title : null;
			$this->forward_from_chatUsername = isset($up->forward_from_chat->username) ? $up->forward_from_chat->username : null;
			$this->forward_from_chatType = isset($up->forward_from_chat->type) ? $up->forward_from_chat->type : null;

			$this->forward_from_message_id = isset($up->forward_from_message_id) ? $up->forward_from_message_id : null;

			$this->forward_date = isset($up->forward_date) ? $up->forward_date : null;

			$this->pinned_message = isset($up->pinned_message) ? $up->pinned_message : null;
			$this->pinned_messageMessage_id = isset($up->pinned_message->message_id) ? $up->pinned_message->message_id : null;
			$this->pinned_messageFrom = isset($up->pinned_message->from) ? $up->pinned_message->from : null;
			$this->pinned_messageFromId = isset($up->pinned_message->from->id) ? $up->pinned_message->from->id : null;
			$this->pinned_messageFromIs_bot = isset($up->pinned_message->from->is_bot) ? $up->pinned_message->from->is_bot : null;
			$this->pinned_messageFromFirst_name = isset($up->pinned_message->from->first_name) ? $up->pinned_message->from->first_name : null;
			$this->pinned_messageFromLast_name = isset($up->pinned_message->from->last_name) ? $up->pinned_message->from->last_name : null;
			$this->pinned_messageFromUsername = isset($up->pinned_message->from->username) ? $up->pinned_message->from->username : null;
			$this->pinned_messageFromLanguage_code = isset($up->pinned_message->from->language_code) ? $up->pinned_message->from->language_code : null;
			$this->pinned_messageChat = isset($up->pinned_message->chat) ? $up->pinned_message->chat : null;
			$this->pinned_messageChatId = isset($up->pinned_message->chat->id) ? $up->pinned_message->chat->id : null;
			$this->pinned_messageChatTitle = isset($up->pinned_message->chat->title) ? $up->pinned_message->chat->title : null;
			$this->pinned_messageChatUsername = isset($up->pinned_message->chat->username) ? $up->pinned_message->chat->username : null;
			$this->pinned_messageChatType = isset($up->pinned_message->chat->type) ? $up->pinned_message->chat->type : null;
			$this->pinned_messageDate = isset($up->pinned_message->date) ? $up->pinned_message->date : null;
			$this->pinned_messageText = isset($up->pinned_message->text) ? $up->pinned_message->text : null;

			$this->text = isset($up->text) ? $up->text : null;

			$this->photo = isset($up->photo) ? $up->photo : null;
			if (isset($up->photo[3])) $arrayPhoto = $up->photo[3];
			elseif (isset($up->photo[2])) $arrayPhoto = $up->photo[2];
			elseif (isset($up->photo[1])) $arrayPhoto = $up->photo[1];
			elseif (isset($up->photo[0])) $arrayPhoto = $up->photo[0];
			$this->photoFile_id = isset($arrayPhoto->file_id) ? $arrayPhoto->file_id : null;
			$this->photoFile_size = isset($arrayPhoto->file_size) ? $arrayPhoto->file_size : null;
			$this->photoWidth = isset($arrayPhoto->width) ? $arrayPhoto->width : null;
			$this->photoHeight = isset($arrayPhoto->height) ? $arrayPhoto->height : null;

			$this->audio = isset($up->audio) ? $up->audio : null;
			$this->audioDuration = isset($up->audio->duration) ? $up->audio->duration : null;
			$this->audioMime_type = isset($up->audio->mime_type) ? $up->audio->mime_type : null;
			$this->audioFile_id = isset($up->audio->file_id) ? $up->audio->file_id : null;
			$this->audioFile_size = isset($up->audio->file_size) ? $up->audio->file_size : null;
			$this->audioTitle = isset($up->audio->title) ? $up->audio->title : null;
			$this->audioPerformer = isset($up->audio->performer) ? $up->audio->performer : null;

			$this->animation = isset($up->animation) ? $up->animation : null;
			$this->animationFile_name = isset($up->animation->file_name) ? $up->animation->file_name : null;
			$this->animationMime_type = isset($up->animation->mime_type) ? $up->animation->mime_type : null;
			$this->animationDuration = isset($up->animation->duration) ? $up->animation->duration : null;
			$this->animationWidth = isset($up->animation->width) ? $up->animation->width : null;
			$this->animationHeight = isset($up->animation->height) ? $up->animation->height : null;
			$this->animationThumbFile_id = isset($up->animation->thumb->file_id) ? $up->animation->thumb->file_id : null;
			$this->animationThumbFile_size = isset($up->animation->thumb->file_size) ? $up->animation->thumb->file_size : null;
			$this->animationThumbWidth = isset($up->animation->thumb->width) ? $up->animation->thumb->width : null;
			$this->animationThumbHeight = isset($up->animation->thumb->height) ? $up->animation->thumb->height : null;
			$this->animationFile_id = isset($up->animation->file_id) ? $up->animation->file_id : null;
			$this->animationFile_size = isset($up->animation->file_size) ? $up->animation->file_size : null;

			$this->document = isset($up->document) ? $up->document : null;
			$this->documentFile_name = isset($up->document->file_name) ? $up->document->file_name : null;
			$this->documentMime_type = isset($up->document->mime_type) ? $up->document->mime_type : null;
			$this->documentThumbFile_id = isset($up->document->thumb->file_id) ? $up->document->thumb->file_id : null;
			$this->documentThumbFile_size = isset($up->document->thumb->file_size) ? $up->document->thumb->file_size : null;
			$this->documentThumbWidth = isset($up->document->thumb->width) ? $up->document->thumb->width : null;
			$this->documentThumbHeight = isset($up->document->thumb->height) ? $up->document->thumb->height : null;
			$this->documentFile_id = isset($up->document->file_id) ? $up->document->file_id : null;
			$this->documentFile_size = isset($up->document->file_size) ? $up->document->file_size : null;

			$this->sticker = isset($up->sticker) ? $up->sticker : null;
			$this->stickerWidth = isset($up->sticker->width) ? $up->sticker->width : null;
			$this->stickerHeight = isset($up->sticker->height) ? $up->sticker->height : null;
			$this->stickerEmoji = isset($up->sticker->emoji) ? $up->sticker->emoji : null;
			$this->stickerThumb = isset($up->sticker->thumb) ? $up->sticker->thumb : null;
			$this->stickerThumbFile_id = isset($up->sticker->thumb->file_id) ? $up->sticker->thumb->file_id : null;
			$this->stickerThumbFile_size = isset($up->sticker->thumb->file_size) ? $up->sticker->thumb->file_size : null;
			$this->stickerThumbWidth = isset($up->sticker->thumb->width) ? $up->sticker->thumb->width : null;
			$this->stickerThumbHeight = isset($up->sticker->thumb->height) ? $up->sticker->thumb->height : null;
			$this->stickerFile_id = isset($up->sticker->file_id) ? $up->sticker->file_id : null;
			$this->stickerFile_size = isset($up->sticker->file_size) ? $up->sticker->file_size : null;

			$this->video = isset($up->video) ? $up->video : null;
			$this->videoDuration = isset($up->video->duration) ? $up->video->duration : null;
			$this->videoWidth = isset($up->video->width) ? $up->video->width : null;
			$this->videoHeight = isset($up->video->height) ? $up->video->height : null;
			$this->videoThumb = isset($up->video->thumb) ? $up->video->thumb : null;
			$this->videoThumbFile_id = isset($up->video->thumb->file_id) ? $up->video->thumb->file_id : null;
			$this->videoThumbFile_size = isset($up->video->thumb->file_size) ? $up->video->thumb->file_size : null;
			$this->videoThumbWidth = isset($up->video->thumb->width) ? $up->video->thumb->width : null;
			$this->videoThumbHeight = isset($up->video->thumb->height) ? $up->video->thumb->height : null;
			$this->videoFile_id = isset($up->video->file_id) ? $up->video->file_id : null;
			$this->videoFile_size = isset($up->video->file_size) ? $up->video->file_size : null;

			$this->voice = isset($up->voice) ? $up->voice : null;
			$this->voiceDuration = isset($up->voice->duration) ? $up->voice->duration : null;
			$this->voiceMime_type = isset($up->voice->mime_type) ? $up->voice->mime_type : null;
			$this->voiceFile_id = isset($up->voice->file_id) ? $up->voice->file_id : null;
			$this->voiceFile_size = isset($up->voice->file_size) ? $up->voice->file_size : null;

			$this->contact = isset($up->contact) ? $up->contact : null;
			$this->contactPhone_number = isset($up->contact->phone_number) ? $up->contact->phone_number : null;
			$this->contactFirst_name = isset($up->contact->first_name) ? $up->contact->first_name : null;
			$this->contactLast_name = isset($up->contact->last_name) ? $up->contact->last_name : null;
			$this->contactUser_id = isset($up->contact->user_id) ? $up->contact->user_id : null;

			$this->location = isset($up->location) ? $up->location : null;
			$this->locationLongitude = isset($up->location->longitude) ? $up->location->longitude : null;
			$this->locationLatitude = isset($up->location->latitude) ? $up->location->latitude : null;

			$this->venue = isset($up->venue) ? $up->venue : null;
			$this->venueLocation = isset($up->venue->location) ? $up->venue->location : null;
			$this->venueTitle = isset($up->venue->title) ? $up->venue->title : null;
			$this->venueAddress = isset($up->venue->address) ? $up->venue->address : null;
			$this->venueFoursquare_id = isset($up->venue->foursquare_id) ? $up->venue->foursquare_id : null;

			$this->caption = isset($up->caption) ? $up->caption : null;
			$this->new_chat_title = isset($up->new_chat_title) ? $up->new_chat_title : null;
			$this->date = isset($up->date) ? $up->date : null;
			$this->media_group_id = isset($up->media_group_id) ? $up->media_group_id : null;
			$this->migrate_from_chat_id = isset($up->migrate_from_chat_id) ? $up->migrate_from_chat_id : null;
			$this->group_chat_created = isset($up->group_chat_created) ? $up->group_chat_created : null;

			$this->reply_to_message = isset($up->reply_to_message) ? $up->reply_to_message : null;
			$this->reply_to_messageMessage_id = isset($up->reply_to_message->message_id) ? $up->reply_to_message->message_id : null;

			$this->reply_to_messageFrom = isset($up->reply_to_message->from) ? $up->reply_to_message->from : null;
			$this->reply_to_messageFromId = isset($up->reply_to_message->from->id) ? $up->reply_to_message->from->id : null;
			$this->reply_to_messageFromIs_bot = isset($up->reply_to_message->from->is_bot) ? $up->reply_to_message->from->is_bot : null;
			$this->reply_to_messageFromFirst_name = isset($up->reply_to_message->from->first_name) ? $up->reply_to_message->from->first_name : null;
			$this->reply_to_messageFromLast_name = isset($up->reply_to_message->from->last_name) ? $up->reply_to_message->from->last_name : null;
			$this->reply_to_messageFromUsername = isset($up->reply_to_message->from->username) ? $up->reply_to_message->from->username : null;
			$this->reply_to_messageFromLanguage_code = isset($up->reply_to_message->from->language_code) ? $up->reply_to_message->from->language_code : null;

			$this->reply_to_messageChat = isset($up->reply_to_message->chat) ? $up->reply_to_message->chat : null;
			$this->reply_to_messageChatId = isset($up->reply_to_message->chat->id) ? $up->reply_to_message->chat->id : null;
			$this->reply_to_messageChatTitle = isset($up->reply_to_message->chat->title) ? $up->reply_to_message->chat->title : null;
			$this->reply_to_messageChatFirst_name = isset($up->reply_to_message->chat->first_name) ? $up->reply_to_message->chat->first_name : null;
			$this->reply_to_messageChatLast_name = isset($up->reply_to_message->chat->last_name) ? $up->reply_to_message->chat->last_name : null;
			$this->reply_to_messageChatUsername = isset($up->reply_to_message->chat->username) ? $up->reply_to_message->chat->username : null;
			$this->reply_to_messageChatType = isset($up->reply_to_message->chat->type) ? $up->reply_to_message->chat->type : null;

			$this->reply_to_messageNew_chat_members = isset($up->reply_to_message->new_chat_members) ? $up->reply_to_message->new_chat_members : null;
			$this->reply_to_messageNew_chat_membersId = isset($up->reply_to_message->new_chat_members[0]->id) ? $up->reply_to_message->new_chat_members[0]->id : null;
			$this->reply_to_messageNew_chat_membersIs_bot = isset($up->reply_to_message->new_chat_members[0]->is_bot) ? $up->reply_to_message->new_chat_members[0]->is_bot : null;
			$this->reply_to_messageNew_chat_membersFirst_name = isset($up->reply_to_message->new_chat_members[0]->first_name) ? $up->reply_to_message->new_chat_members[0]->first_name : null;
			$this->reply_to_messageNew_chat_membersLast_name = isset($up->reply_to_message->new_chat_members[0]->last_name) ? $up->reply_to_message->new_chat_members[0]->last_name : null;
			$this->reply_to_messageNew_chat_membersUsername = isset($up->reply_to_message->new_chat_members[0]->username) ? $up->reply_to_message->new_chat_members[0]->username : null;

			$this->reply_to_messageLeft_chat_member = isset($up->reply_to_message->left_chat_member) ? $up->reply_to_message->left_chat_member : null;
			$this->reply_to_messageLeft_chat_memberId = isset($up->reply_to_message->left_chat_member->id) ? $up->reply_to_message->left_chat_member->id : null;
			$this->reply_to_messageLeft_chat_memberIs_bot = isset($up->reply_to_message->left_chat_member->is_bot) ? $up->reply_to_message->left_chat_member->is_bot : null;
			$this->reply_to_messageLeft_chat_memberFirst_name = isset($up->reply_to_message->left_chat_member->first_name) ? $up->reply_to_message->left_chat_member->first_name : null;
			$this->reply_to_messageLeft_chat_memberLast_name = isset($up->reply_to_message->left_chat_member->last_name) ? $up->reply_to_message->left_chat_member->last_name : null;
			$this->reply_to_messageLeft_chat_memberUsername = isset($up->reply_to_message->left_chat_member->username) ? $up->reply_to_message->left_chat_member->username : null;

			$this->reply_to_messageForward_from = isset($up->reply_to_message->forward_from) ? $up->reply_to_message->forward_from : null;
			$this->reply_to_messageForward_fromId = isset($up->reply_to_message->forward_from->id) ? $up->reply_to_message->forward_from->id : null;
			$this->reply_to_messageForward_fromIs_bot = isset($up->reply_to_message->forward_from->is_bot) ? $up->reply_to_message->forward_from->is_bot : null;
			$this->reply_to_messageForward_fromFirst_name = isset($up->reply_to_message->forward_from->first_name) ? $up->reply_to_message->forward_from->first_name : null;
			$this->reply_to_messageForward_fromLast_name = isset($up->reply_to_message->forward_from->last_name) ? $up->reply_to_message->forward_from->last_name : null;
			$this->reply_to_messageForward_fromUsername = isset($up->reply_to_message->forward_from->username) ? $up->reply_to_message->forward_from->username : null;

			$this->reply_to_messageForward_from_chat = isset($up->reply_to_message->forward_from_chat) ? $up->reply_to_message->forward_from_chat : null;
			$this->reply_to_messageForward_from_chatId = isset($up->reply_to_message->forward_from_chat->id) ? $up->reply_to_message->forward_from_chat->id : null;
			$this->reply_to_messageForward_from_chatTitle = isset($up->reply_to_message->forward_from_chat->title) ? $up->reply_to_message->forward_from_chat->title : null;
			$this->reply_to_messageForward_from_chatUsername = isset($up->reply_to_message->forward_from_chat->username) ? $up->reply_to_message->forward_from_chat->username : null;
			$this->reply_to_messageForward_from_chatType = isset($up->reply_to_message->forward_from_chat->type) ? $up->reply_to_message->forward_from_chat->type : null;

			$this->reply_to_messageForward_from_message_id = isset($up->reply_to_message->forward_from_message_id) ? $up->reply_to_message->forward_from_message_id : null;

			$this->reply_to_messageForward_date = isset($up->reply_to_message->forward_date) ? $up->reply_to_message->forward_date : null;

			$this->reply_to_messagePinned_message = isset($up->reply_to_message->pinned_message) ? $up->reply_to_message->pinned_message : null;
			$this->reply_to_messagePinned_messageMessage_id = isset($up->reply_to_message->pinned_message->message_id) ? $up->reply_to_message->pinned_message->message_id : null;
			$this->reply_to_messagePinned_messageFrom = isset($up->reply_to_message->pinned_message->from) ? $up->reply_to_message->pinned_message->from : null;
			$this->reply_to_messagePinned_messageFromId = isset($up->reply_to_message->pinned_message->from->id) ? $up->reply_to_message->pinned_message->from->id : null;
			$this->reply_to_messagePinned_messageFromIs_bot = isset($up->reply_to_message->pinned_message->from->is_bot) ? $up->reply_to_message->pinned_message->from->is_bot : null;
			$this->reply_to_messagePinned_messageFromFirst_name = isset($up->reply_to_message->pinned_message->from->first_name) ? $up->reply_to_message->pinned_message->from->first_name : null;
			$this->reply_to_messagePinned_messageFromLast_name = isset($up->reply_to_message->pinned_message->from->last_name) ? $up->reply_to_message->pinned_message->from->last_name : null;
			$this->reply_to_messagePinned_messageFromUsername = isset($up->reply_to_message->pinned_message->from->username) ? $up->reply_to_message->pinned_message->from->username : null;
			$this->reply_to_messagePinned_messageFromLanguage_code = isset($up->reply_to_message->pinned_message->from->language_code) ? $up->reply_to_message->pinned_message->from->language_code : null;
			$this->reply_to_messagePinned_messageChat = isset($up->reply_to_message->pinned_message->chat) ? $up->reply_to_message->pinned_message->chat : null;
			$this->reply_to_messagePinned_messageChatId = isset($up->reply_to_message->pinned_message->chat->id) ? $up->reply_to_message->pinned_message->chat->id : null;
			$this->reply_to_messagePinned_messageChatTitle = isset($up->reply_to_message->pinned_message->chat->title) ? $up->reply_to_message->pinned_message->chat->title : null;
			$this->reply_to_messagePinned_messageChatUsername = isset($up->reply_to_message->pinned_message->chat->username) ? $up->reply_to_message->pinned_message->chat->username : null;
			$this->reply_to_messagePinned_messageChatType = isset($up->reply_to_message->pinned_message->chat->type) ? $up->reply_to_message->pinned_message->chat->type : null;
			$this->reply_to_messagePinned_messageDate = isset($up->reply_to_message->pinned_message->date) ? $up->reply_to_message->pinned_message->date : null;
			$this->reply_to_messagePinned_messageText = isset($up->reply_to_message->pinned_message->text) ? $up->reply_to_message->pinned_message->text : null;

			$this->reply_to_messageText = isset($up->reply_to_message->text) ? $up->reply_to_message->text : null;

			$this->reply_to_messagePhoto = isset($up->reply_to_message->photo) ? $up->reply_to_message->photo : null;
			$this->reply_to_messagePhotoFile_id = isset($up->reply_to_message->photo[0]->file_id) ? $up->reply_to_message->photo[0]->file_id : null;
			$this->reply_to_messagePhotoFile_size = isset($up->reply_to_message->photo[0]->file_size) ? $up->reply_to_message->photo[0]->file_size : null;
			$this->reply_to_messagePhotoWidth = isset($update->photo[0]->width) ? $up->reply_to_message->photo[0]->width : null;
			$this->reply_to_messagePhotoHeight = isset($update->photo[0]->height) ? $up->reply_to_message->photo[0]->height : null;

			$this->reply_to_messageAudio = isset($up->reply_to_message->audio) ? $up->reply_to_message->audio : null;
			$this->reply_to_messageAudioDuration = isset($up->reply_to_message->audio->duration) ? $up->reply_to_message->audio->duration : null;
			$this->reply_to_messageAudioMime_type = isset($up->reply_to_message->audio->mime_type) ? $up->reply_to_message->audio->mime_type : null;
			$this->reply_to_messageAudioFile_id = isset($up->reply_to_message->audio->file_id) ? $up->reply_to_message->audio->file_id : null;
			$this->reply_to_messageAudioFile_size = isset($up->reply_to_message->audio->file_size) ? $up->reply_to_message->audio->file_size : null;
			$this->reply_to_messageAudioTitle = isset($up->reply_to_message->audio->title) ? $up->reply_to_message->audio->title : null;
			$this->reply_to_messageAudioPerformer = isset($up->reply_to_message->audio->performer) ? $up->reply_to_message->audio->performer : null;

			$this->reply_to_messageAnimation = isset($up->reply_to_message->animation) ? $up->reply_to_message->animation : null;
			$this->reply_to_messageAnimationFile_name = isset($up->reply_to_message->animation->file_name) ? $up->reply_to_message->animation->file_name : null;
			$this->reply_to_messageAnimationMime_type = isset($up->reply_to_message->animation->mime_type) ? $up->reply_to_message->animation->mime_type : null;
			$this->reply_to_messageAnimationDuration = isset($up->reply_to_message->animation->duration) ? $up->reply_to_message->animation->duration : null;
			$this->reply_to_messageAnimationWidth = isset($up->reply_to_message->animation->width) ? $up->reply_to_message->animation->width : null;
			$this->reply_to_messageAnimationHeight = isset($up->reply_to_message->animation->height) ? $up->reply_to_message->animation->height : null;
			$this->reply_to_messageAnimationThumbFile_id = isset($up->reply_to_message->animation->thumb->file_id) ? $up->reply_to_message->animation->thumb->file_id : null;
			$this->reply_to_messageAnimationThumbFile_size = isset($up->reply_to_message->animation->thumb->file_size) ? $up->reply_to_message->animation->thumb->file_size : null;
			$this->reply_to_messageAnimationThumbWidth = isset($up->reply_to_message->animation->thumb->width) ? $up->reply_to_message->animation->thumb->width : null;
			$this->reply_to_messageAnimationThumbHeight = isset($up->reply_to_message->animation->thumb->height) ? $up->reply_to_message->animation->thumb->height : null;
			$this->reply_to_messageAnimationFile_id = isset($up->reply_to_message->animation->file_id) ? $up->reply_to_message->animation->file_id : null;
			$this->reply_to_messageAnimationFile_size = isset($up->reply_to_message->animation->file_size) ? $up->reply_to_message->animation->file_size : null;

			$this->reply_to_messageDocument = isset($up->reply_to_message->document) ? $up->reply_to_message->document : null;
			$this->reply_to_messageDocumentFile_name = isset($up->reply_to_message->document->file_name) ? $up->reply_to_message->document->file_name : null;
			$this->reply_to_messageDocumentMime_type = isset($up->reply_to_message->document->mime_type) ? $up->reply_to_message->document->mime_type : null;
			$this->reply_to_messageDocumentThumbFile_id = isset($up->reply_to_message->document->thumb->file_id) ? $up->reply_to_message->document->thumb->file_id : null;
			$this->reply_to_messageDocumentThumbFile_size = isset($up->reply_to_message->document->thumb->file_size) ? $up->reply_to_message->document->thumb->file_size : null;
			$this->reply_to_messageDocumentThumbWidth = isset($up->reply_to_message->document->thumb->width) ? $up->reply_to_message->document->thumb->width : null;
			$this->reply_to_messageDocumentThumbHeight = isset($up->reply_to_message->document->thumb->height) ? $up->reply_to_message->document->thumb->height : null;
			$this->reply_to_messageDocumentFile_id = isset($up->reply_to_message->document->file_id) ? $up->reply_to_message->document->file_id : null;
			$this->reply_to_messageDocumentFile_size = isset($up->reply_to_message->document->file_size) ? $up->reply_to_message->document->file_size : null;

			$this->reply_to_messageSticker = isset($up->reply_to_message->sticker) ? $up->reply_to_message->sticker : null;
			$this->reply_to_messageStickerWidth = isset($up->reply_to_message->sticker->width) ? $up->reply_to_message->sticker->width : null;
			$this->reply_to_messageStickerHeight = isset($up->reply_to_message->sticker->height) ? $up->reply_to_message->sticker->height : null;
			$this->reply_to_messageStickerEmoji = isset($up->reply_to_message->sticker->emoji) ? $up->reply_to_message->sticker->emoji : null;
			$this->reply_to_messageStickerThumb = isset($up->reply_to_message->sticker->thumb) ? $up->reply_to_message->sticker->thumb : null;
			$this->reply_to_messageStickerThumbFile_id = isset($up->reply_to_message->sticker->thumb->file_id) ? $up->reply_to_message->sticker->thumb->file_id : null;
			$this->reply_to_messageStickerThumbFile_size = isset($up->reply_to_message->sticker->thumb->file_size) ? $up->reply_to_message->sticker->thumb->file_size : null;
			$this->reply_to_messageStickerThumbWidth = isset($up->reply_to_message->sticker->thumb->width) ? $up->reply_to_message->sticker->thumb->width : null;
			$this->reply_to_messageStickerThumbHeight = isset($up->reply_to_message->sticker->thumb->height) ? $up->reply_to_message->sticker->thumb->height : null;
			$this->reply_to_messageStickerFile_id = isset($up->reply_to_message->sticker->file_id) ? $up->reply_to_message->sticker->file_id : null;
			$this->reply_to_messageStickerFile_size = isset($up->reply_to_message->sticker->file_size) ? $up->reply_to_message->sticker->file_size : null;

			$this->reply_to_messageVideo = isset($up->reply_to_message->video) ? $up->reply_to_message->video : null;
			$this->reply_to_messageVideoDuration = isset($up->reply_to_message->video->duration) ? $up->reply_to_message->video->duration : null;
			$this->reply_to_messageVideoWidth = isset($up->reply_to_message->video->width) ? $up->reply_to_message->video->width : null;
			$this->reply_to_messageVideoHeight = isset($up->reply_to_message->video->height) ? $up->reply_to_message->video->height : null;
			$this->reply_to_messageVideoThumb = isset($up->reply_to_message->video->thumb) ? $up->reply_to_message->video->thumb : null;
			$this->reply_to_messageVideoThumbFile_id = isset($up->reply_to_message->video->thumb->file_id) ? $up->reply_to_message->video->thumb->file_id : null;
			$this->reply_to_messageVideoThumbFile_size = isset($up->reply_to_message->video->thumb->file_size) ? $up->reply_to_message->video->thumb->file_size : null;
			$this->reply_to_messageVideoThumbWidth = isset($up->reply_to_message->video->thumb->width) ? $up->reply_to_message->video->thumb->width : null;
			$this->reply_to_messageVideoThumbHeight = isset($up->reply_to_message->video->thumb->height) ? $up->reply_to_message->video->thumb->height : null;
			$this->reply_to_messageVideoFile_id = isset($up->reply_to_message->video->file_id) ? $up->reply_to_message->video->file_id : null;
			$this->reply_to_messageVideoFile_size = isset($up->reply_to_message->video->file_size) ? $up->reply_to_message->video->file_size : null;

			$this->reply_to_messageVoice = isset($up->reply_to_message->voice) ? $up->reply_to_message->voice : null;
			$this->reply_to_messageVoiceDuration = isset($up->reply_to_message->voice->duration) ? $up->reply_to_message->voice->duration : null;
			$this->reply_to_messageVoiceMime_type = isset($up->reply_to_message->voice->mime_type) ? $up->reply_to_message->voice->mime_type : null;
			$this->reply_to_messageVoiceFile_id = isset($up->reply_to_message->voice->file_id) ? $up->reply_to_message->voice->file_id : null;
			$this->reply_to_messageVoiceFile_size = isset($up->reply_to_message->voice->file_size) ? $up->reply_to_message->voice->file_size : null;

			$this->reply_to_messageContact = isset($up->reply_to_message->contact) ? $up->reply_to_message->contact : null;
			$this->reply_to_messageContactPhone_number = isset($up->reply_to_message->contact->phone_number) ? $up->reply_to_message->contact->phone_number : null;
			$this->reply_to_messageContactFirst_name = isset($up->reply_to_message->contact->first_name) ? $up->reply_to_message->contact->first_name : null;
			$this->reply_to_messageContactLast_name = isset($up->reply_to_message->contact->last_name) ? $up->reply_to_message->contact->last_name : null;
			$this->reply_to_messageContactUser_id = isset($up->reply_to_message->contact->user_id) ? $up->reply_to_message->contact->user_id : null;

			$this->reply_to_messageLocation = isset($up->reply_to_message->location) ? $up->reply_to_message->location : null;
			$this->reply_to_messageLocationLongitude = isset($up->reply_to_message->location->longitude) ? $up->reply_to_message->location->longitude : null;
			$this->reply_to_messageLocationLatitude = isset($up->reply_to_message->location->latitude) ? $up->reply_to_message->location->latitude : null;

			$this->reply_to_messageVenue = isset($up->reply_to_message->venue) ? $up->reply_to_message->venue : null;
			$this->reply_to_messageVenueLocation = isset($up->reply_to_message->venue->location) ? $up->reply_to_message->venue->location : null;
			$this->reply_to_messageVenueTitle = isset($up->reply_to_message->venue->title) ? $up->reply_to_message->venue->title : null;
			$this->reply_to_messageVenueAddress = isset($up->reply_to_message->venue->address) ? $up->reply_to_message->venue->address : null;
			$this->reply_to_messageVenueFoursquare_id = isset($up->reply_to_message->venue->foursquare_id) ? $up->reply_to_message->venue->foursquare_id : null;

			$this->reply_to_messageCaption = isset($up->reply_to_message->caption) ? $up->reply_to_message->caption : null;
			$this->reply_to_messageNew_chat_title = isset($up->reply_to_message->new_chat_title) ? $up->reply_to_message->new_chat_title : null;
			$this->reply_to_messageDate = isset($up->reply_to_message->date) ? $up->reply_to_message->date : null;
			$this->reply_to_messageMigrate_from_chat_id = isset($up->reply_to_message->migrate_from_chat_id) ? $up->reply_to_message->migrate_from_chat_id : null;

			$this->entities = isset($up->entities) ? $up->entities : null;

			$this->via_bot = isset($up->via_bot) ? $up->via_bot : null;
			$this->via_botId = isset($up->via_bot->id) ? $up->via_bot->id : null;
			$this->via_botIs_bot = isset($up->via_bot->is_bot) ? $up->via_bot->is_bot : null;
			$this->via_botFirst_name = isset($up->via_bot->first_name) ? $up->via_bot->first_name : null;
			$this->via_botUsername = isset($up->via_bot->username) ? $up->via_bot->username : null;

			if ($this->type == "callback_query") {
				$this->id = isset($up->id) ? $up->id : null;
				$this->messageMessage_id = isset($up->message->message_id) ? $up->message->message_id : null;
				$this->messageChatId = isset($up->message->chat->id) ? $up->message->chat->id : null;

				$this->chat = isset($up->message->chat) ? $up->message->chat : null;
				$this->chatId = isset($up->message->chat->id) ? $up->message->chat->id : null;
				$this->chatTitle = isset($up->message->chat->title) ? $up->message->chat->title : null;
				$this->chatFirst_name = isset($up->message->chat->first_name) ? $up->message->chat->first_name : null;
				$this->chatLast_name = isset($up->message->chat->last_name) ? $up->message->chat->last_name : null;
				$this->chatUsername = isset($up->message->chat->username) ? $up->message->chat->username : null;
				$this->chatType = isset($up->message->chat->type) ? $up->message->chat->type : null;

				$this->date = isset($up->message->date) ? $up->message->date : null;
				$this->text = isset($up->message->text) ? $up->message->text : null;

				$this->photo = isset($up->message->photo) ? $up->message->photo : null;
				$this->photoFile_id = isset($up->message->photo[0]->file_id) ? $up->message->photo[0]->file_id : null;
				$this->photoFile_size = isset($up->message->photo[0]->file_size) ? $up->message->photo[0]->file_size : null;
				$this->photoWidth = isset($update->photo[0]->width) ? $up->message->photo[0]->width : null;
				$this->photoHeight = isset($update->photo[0]->height) ? $up->message->photo[0]->height : null;

				$this->audio = isset($up->message->audio) ? $up->message->audio : null;
				$this->audioDuration = isset($up->message->audio->duration) ? $up->message->audio->duration : null;
				$this->audioMime_type = isset($up->message->audio->mime_type) ? $up->message->audio->mime_type : null;
				$this->audioFile_id = isset($up->message->audio->file_id) ? $up->message->audio->file_id : null;
				$this->audioFile_size = isset($up->message->audio->file_size) ? $up->message->audio->file_size : null;
				$this->audioTitle = isset($up->message->audio->title) ? $up->message->audio->title : null;
				$this->audioPerformer = isset($up->message->audio->performer) ? $up->message->audio->performer : null;

				$this->animation = isset($up->message->animation) ? $up->message->animation : null;
				$this->animationFile_name = isset($up->message->animation->file_name) ? $up->message->animation->file_name : null;
				$this->animationMime_type = isset($up->message->animation->mime_type) ? $up->message->animation->mime_type : null;
				$this->animationDuration = isset($up->message->animation->duration) ? $up->message->animation->duration : null;
				$this->animationWidth = isset($up->message->animation->width) ? $up->message->animation->width : null;
				$this->animationHeight = isset($up->message->animation->height) ? $up->message->animation->height : null;
				$this->animationThumbFile_id = isset($up->message->animation->thumb->file_id) ? $up->message->animation->thumb->file_id : null;
				$this->animationThumbFile_size = isset($up->message->animation->thumb->file_size) ? $up->message->animation->thumb->file_size : null;
				$this->animationThumbWidth = isset($up->message->animation->thumb->width) ? $up->message->animation->thumb->width : null;
				$this->animationThumbHeight = isset($up->message->animation->thumb->height) ? $up->message->animation->thumb->height : null;
				$this->animationFile_id = isset($up->message->animation->file_id) ? $up->message->animation->file_id : null;
				$this->animationFile_size = isset($up->message->animation->file_size) ? $up->message->animation->file_size : null;

				$this->document = isset($up->message->document) ? $up->message->document : null;
				$this->documentFile_name = isset($up->message->document->file_name) ? $up->message->document->file_name : null;
				$this->documentMime_type = isset($up->message->document->mime_type) ? $up->message->document->mime_type : null;
				$this->documentThumbFile_id = isset($up->message->document->thumb->file_id) ? $up->message->document->thumb->file_id : null;
				$this->documentThumbFile_size = isset($up->message->document->thumb->file_size) ? $up->message->document->thumb->file_size : null;
				$this->documentThumbWidth = isset($up->message->document->thumb->width) ? $up->message->document->thumb->width : null;
				$this->documentThumbHeight = isset($up->message->document->thumb->height) ? $up->message->document->thumb->height : null;
				$this->documentFile_id = isset($up->message->document->file_id) ? $up->message->document->file_id : null;
				$this->documentFile_size = isset($up->message->document->file_size) ? $up->message->document->file_size : null;

				$this->sticker = isset($up->message->sticker) ? $up->message->sticker : null;
				$this->stickerWidth = isset($up->message->sticker->width) ? $up->message->sticker->width : null;
				$this->stickerHeight = isset($up->message->sticker->height) ? $up->message->sticker->height : null;
				$this->stickerEmoji = isset($up->message->sticker->emoji) ? $up->message->sticker->emoji : null;
				$this->stickerThumb = isset($up->message->sticker->thumb) ? $up->message->sticker->thumb : null;
				$this->stickerThumbFile_id = isset($up->message->sticker->thumb->file_id) ? $up->message->sticker->thumb->file_id : null;
				$this->stickerThumbFile_size = isset($up->message->sticker->thumb->file_size) ? $up->message->sticker->thumb->file_size : null;
				$this->stickerThumbWidth = isset($up->message->sticker->thumb->width) ? $up->message->sticker->thumb->width : null;
				$this->stickerThumbHeight = isset($up->message->sticker->thumb->height) ? $up->message->sticker->thumb->height : null;
				$this->stickerFile_id = isset($up->message->sticker->file_id) ? $up->message->sticker->file_id : null;
				$this->stickerFile_size = isset($up->message->sticker->file_size) ? $up->message->sticker->file_size : null;

				$this->video = isset($up->message->video) ? $up->message->video : null;
				$this->videoDuration = isset($up->message->video->duration) ? $up->message->video->duration : null;
				$this->videoWidth = isset($up->message->video->width) ? $up->message->video->width : null;
				$this->videoHeight = isset($up->message->video->height) ? $up->message->video->height : null;
				$this->videoThumb = isset($up->message->video->thumb) ? $up->message->video->thumb : null;
				$this->videoThumbFile_id = isset($up->message->video->thumb->file_id) ? $up->message->video->thumb->file_id : null;
				$this->videoThumbFile_size = isset($up->message->video->thumb->file_size) ? $up->message->video->thumb->file_size : null;
				$this->videoThumbWidth = isset($up->message->video->thumb->width) ? $up->message->video->thumb->width : null;
				$this->videoThumbHeight = isset($up->message->video->thumb->height) ? $up->message->video->thumb->height : null;
				$this->videoFile_id = isset($up->message->video->file_id) ? $up->message->video->file_id : null;
				$this->videoFile_size = isset($up->message->video->file_size) ? $up->message->video->file_size : null;

				$this->voice = isset($up->message->voice) ? $up->message->voice : null;
				$this->voiceDuration = isset($up->message->voice->duration) ? $up->message->voice->duration : null;
				$this->voiceMime_type = isset($up->message->voice->mime_type) ? $up->message->voice->mime_type : null;
				$this->voiceFile_id = isset($up->message->voice->file_id) ? $up->message->voice->file_id : null;
				$this->voiceFile_size = isset($up->message->voice->file_size) ? $up->message->voice->file_size : null;

				$this->contact = isset($up->message->contact) ? $up->message->contact : null;
				$this->contactPhone_number = isset($up->message->contact->phone_number) ? $up->message->contact->phone_number : null;
				$this->contactFirst_name = isset($up->message->contact->first_name) ? $up->message->contact->first_name : null;
				$this->contactLast_name = isset($up->message->contact->last_name) ? $up->message->contact->last_name : null;
				$this->contactUser_id = isset($up->message->contact->user_id) ? $up->message->contact->user_id : null;

				$this->location = isset($up->message->location) ? $up->message->location : null;
				$this->locationLongitude = isset($up->message->location->longitude) ? $up->message->location->longitude : null;
				$this->locationLatitude = isset($up->message->location->latitude) ? $up->message->location->latitude : null;

				$this->venue = isset($up->message->venue) ? $up->message->venue : null;
				$this->venueLocation = isset($up->message->venue->location) ? $up->message->venue->location : null;
				$this->venueTitle = isset($up->message->venue->title) ? $up->message->venue->title : null;
				$this->venueAddress = isset($up->message->venue->address) ? $up->message->venue->address : null;
				$this->venueFoursquare_id = isset($up->message->venue->foursquare_id) ? $up->message->venue->foursquare_id : null;

				$this->caption = isset($up->message->caption) ? $up->message->caption : null;
				$this->caption_entities = isset($up->message->caption_entities) ? $up->message->caption_entities : null;
				$this->entities = isset($up->message->entities) ? $up->message->entities : null;


				$this->inline_message_id = isset($up->inline_message_id) ? $up->inline_message_id : null;
				$this->chat_instance = isset($up->chat_instance) ? $up->chat_instance : null;
				$this->data = isset($up->data) ? $up->data : null;
			}
			elseif ($this->type == "inline_query") {
				$this->id = isset($up->id) ? $up->id : null;

				$this->from = isset($up->from) ? $up->from : null;
				$this->fromId = isset($up->from->id) ? $up->from->id : null;
				$this->fromIs_bot = isset($up->from->is_bot) ? $up->from->is_bot : null;
				$this->fromFirst_name = isset($up->from->first_name) ? $up->from->first_name : null;
				$this->fromLast_name = isset($up->from->last_name) ? $up->from->last_name : null;
				$this->fromUsername = isset($up->from->username) ? $up->from->username : null;
				$this->fromLanguage_code = isset($up->from->language_code) ? $up->from->language_code : null;

				$this->query = isset($up->query) ? $up->query : null;
				$this->offset = isset($up->offset) ? $up->offset : null;
			}
			elseif ($this->type == "my_chat_member") {
				$this->old_chat_member = isset($up->old_chat_member) ? $up->old_chat_member : null;
				$this->old_chat_memberUserId = isset($up->old_chat_member->user->id) ? $up->old_chat_member->user->id : null;
				$this->old_chat_memberUserIs_bot = isset($up->old_chat_member->user->is_bot) ? $up->old_chat_member->user->is_bot : null;
				$this->old_chat_memberUserFirst_name = isset($up->old_chat_member->user->first_name) ? $up->old_chat_member->user->first_name : null;
				$this->old_chat_memberUserLast_name = isset($up->old_chat_member->user->last_name) ? $up->old_chat_member->user->last_name : null;
				$this->old_chat_memberUserUsername = isset($up->old_chat_member->user->username) ? $up->old_chat_member->user->username : null;
				$this->old_chat_memberStatus = isset($up->old_chat_member->status) ? $up->old_chat_member->status : null;
				$this->old_chat_memberCan_be_edited = isset($up->old_chat_member->can_be_edited) ? $up->old_chat_member->can_be_edited : null;
				$this->old_chat_memberCan_manage_chat = isset($up->old_chat_member->can_manage_chat) ? $up->old_chat_member->can_manage_chat : null;
				$this->old_chat_memberCan_change_info = isset($up->old_chat_member->can_change_info) ? $up->old_chat_member->can_change_info : null;
				$this->old_chat_memberCan_post_messages = isset($up->old_chat_member->can_post_messages) ? $up->old_chat_member->can_post_messages : null;
				$this->old_chat_memberCan_edit_messages = isset($up->old_chat_member->can_edit_messages) ? $up->old_chat_member->can_edit_messages : null;
				$this->old_chat_memberCan_delete_messages = isset($up->old_chat_member->can_delete_messages) ? $up->old_chat_member->can_delete_messages : null;
				$this->old_chat_memberCan_invite_users = isset($up->old_chat_member->can_invite_users) ? $up->old_chat_member->can_invite_users : null;
				$this->old_chat_memberCan_restrict_members = isset($up->old_chat_member->can_restrict_members) ? $up->old_chat_member->can_restrict_members : null;
				$this->old_chat_memberCan_pin_messages = isset($up->old_chat_member->can_pin_messages) ? $up->old_chat_member->can_pin_messages : null;
				$this->old_chat_memberCan_promote_members = isset($up->old_chat_member->can_promote_members) ? $up->old_chat_member->can_promote_members : null;
				$this->old_chat_memberCan_manage_voice_chats = isset($up->old_chat_member->can_manage_voice_chats) ? $up->old_chat_member->can_manage_voice_chats : null;
				$this->old_chat_memberCustom_title = isset($up->old_chat_member->custom_title) ? $up->old_chat_member->custom_title : null;
				$this->old_chat_memberIs_anonymous = isset($up->old_chat_member->is_anonymous) ? $up->old_chat_member->is_anonymous : null;

				$this->new_chat_member = isset($up->new_chat_member) ? $up->new_chat_member : null;
				$this->new_chat_memberUserId = isset($up->new_chat_member->user->id) ? $up->new_chat_member->user->id : null;
				$this->new_chat_memberUserIs_bot = isset($up->new_chat_member->user->is_bot) ? $up->new_chat_member->user->is_bot : null;
				$this->new_chat_memberUserFirst_name = isset($up->new_chat_member->user->first_name) ? $up->new_chat_member->user->first_name : null;
				$this->new_chat_memberUserLast_name = isset($up->new_chat_member->user->last_name) ? $up->new_chat_member->user->last_name : null;
				$this->new_chat_memberUserUsername = isset($up->new_chat_member->user->username) ? $up->new_chat_member->user->username : null;
				$this->new_chat_memberStatus = isset($up->new_chat_member->status) ? $up->new_chat_member->status : null;
				$this->new_chat_memberCan_be_edited = isset($up->new_chat_member->can_be_edited) ? $up->new_chat_member->can_be_edited : null;
				$this->new_chat_memberCan_manage_chat = isset($up->new_chat_member->can_manage_chat) ? $up->new_chat_member->can_manage_chat : null;
				$this->new_chat_memberCan_change_info = isset($up->new_chat_member->can_change_info) ? $up->new_chat_member->can_change_info : null;
				$this->new_chat_memberCan_post_messages = isset($up->new_chat_member->can_post_messages) ? $up->new_chat_member->can_post_messages : null;
				$this->new_chat_memberCan_edit_messages = isset($up->new_chat_member->can_edit_messages) ? $up->new_chat_member->can_edit_messages : null;
				$this->new_chat_memberCan_delete_messages = isset($up->new_chat_member->can_delete_messages) ? $up->new_chat_member->can_delete_messages : null;
				$this->new_chat_memberCan_invite_users = isset($up->new_chat_member->can_invite_users) ? $up->new_chat_member->can_invite_users : null;
				$this->new_chat_memberCan_restrict_members = isset($up->new_chat_member->can_restrict_members) ? $up->new_chat_member->can_restrict_members : null;
				$this->new_chat_memberCan_pin_messages = isset($up->new_chat_member->can_pin_messages) ? $up->new_chat_member->can_pin_messages : null;
				$this->new_chat_memberCan_promote_members = isset($up->new_chat_member->can_promote_members) ? $up->new_chat_member->can_promote_members : null;
				$this->new_chat_memberCan_manage_voice_chats = isset($up->new_chat_member->can_manage_voice_chats) ? $up->new_chat_member->can_manage_voice_chats : null;
				$this->new_chat_memberCustom_title = isset($up->new_chat_member->custom_title) ? $up->new_chat_member->custom_title : null;
				$this->new_chat_memberIs_anonymous = isset($up->new_chat_member->is_anonymous) ? $up->new_chat_member->is_anonymous : null;
			}
			elseif ($this->type == "poll_answer") {
				$this->poll_id = isset($up->poll_id) ? $up->poll_id : null;

				$this->from = isset($up->user) ? $up->user : null;
				$this->fromId = isset($up->user->id) ? $up->user->id : null;
				$this->fromIs_bot = isset($up->user->is_bot) ? $up->user->is_bot : null;
				$this->fromFirst_name = isset($up->user->first_name) ? $up->user->first_name : null;
				$this->fromLast_name = isset($up->user->last_name) ? $up->user->last_name : null;
				$this->fromUsername = isset($up->user->username) ? $up->user->username : null;
				$this->fromLanguage_code = isset($up->user->language_code) ? $up->user->language_code : null;

				$this->option_ids = isset($up->option_ids) ? $up->option_ids : null;
			}
		}
	}
}