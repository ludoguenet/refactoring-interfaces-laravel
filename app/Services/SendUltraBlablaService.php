<?php

namespace App\Services;

use App\Contracts\BlablaServiceInterface;

class SendUltraBlablaService implements BlablaServiceInterface
{
    public function send($words)
    {
        dd($words . ' avec ultra');
    }
}
