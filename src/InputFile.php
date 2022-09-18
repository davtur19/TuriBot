<?php

namespace TuriBot;

use Amp\Http\Client\Body\FileBody;

class InputFile
{
    private string $path;
    private string $filename;

    public function __construct(string $path)
    {
        $this->path = $path;
        $this->filename = basename($path);
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getFileName(): string
    {
        return $this->filename;
    }
}