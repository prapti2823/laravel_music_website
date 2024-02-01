<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class c_SongController extends Controller
{
    public function index()
    {
        return view('Client Side.song');
    }
}
