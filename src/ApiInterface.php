<?php

namespace TuriBot;

interface ApiInterface
{
    function Request(string $method, array $data);
}