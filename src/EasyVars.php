<?php

namespace TuriBot;

class EasyVars
{
    public $type, $chat_type, $chat_id, $message_id, $from_id, $text, $first_name, $message_thread_id;

    private array $types = [
        "message",
        "edited_message",
        "channel_post",
        "edited_channel_post",
        "inline_query",
    ];

    public function __construct($update)
    {

        foreach ($this->types as $type) {
            if (isset($update->{$type})) {
                $this->type = $type;
                break;
            }
        }

        if (isset($this->type)) {
            $this->chat_type = $update->{$this->type}->chat->type ?? null;
            $this->chat_id = $update->{$this->type}->chat->id ?? null;
            $this->message_id = $update->{$this->type}->message_id ?? null;

            if (isset($update->{$this->type}->from)) {
                $this->from_id = $update->{$this->type}->from->id ?? null;
                $this->first_name = $update->{$this->type}->from->first_name ?? null;
            }

            if (isset($update->{$this->type}->text)) {
                $this->text = $update->{$this->type}->text ?? null;
            }
        }
    }
}
