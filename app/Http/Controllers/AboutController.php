<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('pages.about');
    }
}
