<?php

namespace App\Http\Controllers;

use App\Contracts\BlablaServiceInterface;
use App\Services\SendBlablaService;
use Illuminate\Http\Request;

class BlablaController extends Controller
{
    public function blabla(Request $request, BlablaServiceInterface $blablaService)
    {
        $words = $request->words;
        $blablaService->send($words);
    }
}
