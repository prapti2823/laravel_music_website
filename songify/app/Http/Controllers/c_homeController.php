<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class c_homeController extends Controller
{
    public function index()
    {
        return view('Client Side.index');
    }
}
