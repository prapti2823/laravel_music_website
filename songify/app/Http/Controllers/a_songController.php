<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class a_songController extends Controller
{
    public function index()
    {
        return view('Admin Side.Song.view');
    }
}
