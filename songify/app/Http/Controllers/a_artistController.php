<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class a_artistController extends Controller
{
    public function index()
    {
        return view('Admin Side.Artist.view');
    }
}
