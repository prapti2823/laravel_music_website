<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\songs;

class a_songController extends Controller
{
    public function index()
    {
        $songs=songs::all();
        $data=compact('songs');
        return view('Admin Side.Song.view')->with($data);;
    }
    public function store(Request $r)
    {
        $songs = new songs;
    
        $file = $r->file('songimage');
        $filename = $file->getClientOriginalName();
        $path = "uploads";
        $file->move($path, $filename);
    
        // Handle songpath file
        $songPathFile = $r->file('songpath');
        $extension = $songPathFile->getClientOriginalExtension();
        $songPathFileName = "songfile_" . time() . "." . $extension;
        $songPathFile->move($path, $songPathFileName);
    
        // Mapping
        $songs->songimage = $filename;
        $songs->songname = $r->songname;
        $songs->songpath = $path . '/' . $songPathFileName; // Save the full path
        $songs->duration = $r->duration;
        $songs->releasedate = $r->releasedate;
    
        // Saving
        $songs->save();
    
        return redirect('/adminSong');
    }
    
    public function delete($songid)
    {
        songs::where('songid',$songid)->delete();

        return back();
    }

    
    
    public function edit($songid)
    {
        $songs = songs::where('songid',$songid)->first();
        $data = compact('songs');
        return view('Admin Side.Song.edit')->with($data);
    }
    public function update(Request $r)
{
    $file = $r->file('songimage');
    if ($file) {
        $filename = $file->getClientOriginalName();
        $path = "uploads";
        $file->move($path, $filename);
    } else {
        $filename = $r->currentphoto;
    }

    // Handle songpath file
    $songPathFile = $r->file('songpath');
    $extension = $songPathFile->getClientOriginalExtension();
    $songPathFileName = "songfile_" . time() . "." . $extension;
    $songPathFile->move($path, $songPathFileName);

    songs::where('songid', $r->songid)->update([
        "songimage" => $filename,
        "songname" => $r->songname,
        "songpath" => $path . '/' . $songPathFileName, // Save the full path
        "duration" => $r->duration,
        "releasedate" => $r->releasedate
    ]);

    return redirect('/adminSong');
}

}
