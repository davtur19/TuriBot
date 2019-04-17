<?php

namespace TuriBot;

interface ApiStruct
{
    function Request(string $method, array $data);
}