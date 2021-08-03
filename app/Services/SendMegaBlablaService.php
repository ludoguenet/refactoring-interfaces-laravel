<?php

namespace App\Services;

use App\Contracts\BlablaServiceInterface;

class SendMegaBlablaService implements BlablaServiceInterface
{
    public function send($words)
    {
        dd($words . ' avec mega');
    }
}
