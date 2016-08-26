<?php

namespace App\Repositories;


use Illuminate\Filesystem\FilesystemManager;
use Illuminate\Support\Facades\Config;

class FilesystemRepository
{
    protected $fs;

    public function __construct(FilesystemManager $fs)
    {
        $this->fs = $fs;
    }
}