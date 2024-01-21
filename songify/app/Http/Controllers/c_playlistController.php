<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class c_playlistController extends Controller
{
    public function index()
    {
        return view('Client Side.playlist');
    }
}