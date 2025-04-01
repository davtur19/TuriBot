<?php

namespace TuriBot;

class EasyVars
{
    public $chat_id = 0, $from_id = 0, $message_id = 0, $message_thread_id = 0;

    public $update_type = '', $text = '', $first_name = '', $chat_type = '';

    private array $update_types = [
        "message",
        "edited_message",
        "channel_post",
        "edited_channel_post",
        "callback_query",
        "inline_query",
        "pre_checkout_query",
        "my_chat_member",
    ];

    public function __construct($update)
    {
        foreach ($this->update_types as $update_type) {
            if (isset($update->{$update_type})) {
                $this->update_type = $update_type;
                break;
            }
        }

        if (isset($this->update_type)) {
            $this->chat_id = $update->{$this->update_type}->chat->id ?? 0;
            $this->from_id = $update->{$this->update_type}->from->id ?? 0;
            $this->message_id = $update->{$this->update_type}->message_id ?? 0;
            $this->text = $update->{$this->update_type}->text ?? '';
            $this->first_name = $update->{$this->update_type}->from->first_name ?? '';
            $this->chat_type = $update->{$this->update_type}->chat->type ?? '';
        }
    }
}