<?php

namespace App\Services;

use App\Contracts\BlablaServiceInterface;

class SendSuperBlablaService implements BlablaServiceInterface
{
    public function send($words)
    {
        dd($words . ' avec super');
    }
}
