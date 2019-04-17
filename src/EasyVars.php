<?php

namespace TuriBot;

class EasyVars
{
    public $type, $chat_type, $chat_id, $message_id, $from_id, $text, $first_name;

    private $types = [
        "message",
        "edited_message",
        "channel_post",
        "edited_channel_post",
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
            $this->chat_type = $update->{$this->type}->chat->type;
            $this->chat_id = $update->{$this->type}->chat->id;
            $this->message_id = $update->{$this->type}->message_id;

            if (isset($update->{$this->type}->from)) {
                $this->from_id = $update->{$this->type}->from->id;
                $this->first_name = $update->{$this->type}->from->first_name;
            }

            if (isset($update->{$this->type}->text)) {
                $this->text = $update->{$this->type}->text;
            }
        }
    }
}