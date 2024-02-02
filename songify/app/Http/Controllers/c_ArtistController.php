<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\artist;

class c_ArtistController extends Controller
{
    public function index()
    {
        $artist= artist::all();
        return view('Client Side.artist',['artist' => $artist]);
    }
}