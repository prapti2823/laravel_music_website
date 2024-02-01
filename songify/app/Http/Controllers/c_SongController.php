<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\songs;

class c_SongController extends Controller
{
    public function index()
    {
        $songs = songs::all();
        return view('Client Side.song', ['songs' => $songs]);
    }
}
