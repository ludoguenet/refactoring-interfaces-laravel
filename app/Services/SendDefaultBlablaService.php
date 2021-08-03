<?php

namespace App\Services;

use App\Contracts\BlablaServiceInterface;

class SendDefaultBlablaService implements BlablaServiceInterface
{
    public function send($words)
    {
        dd($words . ' avec default');
    }
}
