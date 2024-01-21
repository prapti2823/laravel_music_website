<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class a_indexController extends Controller
{
    public function index()
    {
        return view('Admin Side.index');
    }
}
