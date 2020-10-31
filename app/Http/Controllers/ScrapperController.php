<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ScrapperController extends Controller
{
    //

    public function test()
    {
        $res = Http::get();
    }
}
