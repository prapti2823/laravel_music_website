<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\songs;

class c_SongController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $songs = songs::all();
        return view('Client Side.song', ['songs' => $songs]);
=======
        return view('Client Side.song');
>>>>>>> 92400b0f8ebfda68f94b825cc564f7c1004af75f
    }
}
