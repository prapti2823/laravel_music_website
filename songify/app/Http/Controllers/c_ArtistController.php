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
    public function view(Request $r)
    {
        $search = $r->input('artistsearch','');
        if($search)
                $artist = artist::where('artistname','LIKE',"%$search%")->paginate(8);     
        else
                $artist= artist::paginate(8);
        
        return view('Client Side.artist', compact('artist','search'));     
    
    }
}