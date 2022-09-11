<?php

namespace TuriBot;

class EasyVars
{
    public string $update_type, $chat_type, $text, $first_name;

    public int $chat_id, $message_id, $from_id;

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
            $this->chat_type = $update->{$this->update_type}->chat->type;
            $this->chat_id = $update->{$this->update_type}->chat->id;
            $this->message_id = $update->{$this->update_type}->message_id;

            if (isset($update->{$this->update_type}->from)) {
                $this->from_id = $update->{$this->update_type}->from->id;
                $this->first_name = $update->{$this->update_type}->from->first_name;
            }

            if (isset($update->{$this->update_type}->text)) {
                $this->text = $update->{$this->update_type}->text;
            }
        }
    }
}