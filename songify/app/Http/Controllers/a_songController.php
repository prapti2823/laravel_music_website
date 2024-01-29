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

        $file = $r->file('songpath');
        $filename = $file->getClientOriginalName();
        $path = "uploads";
        $file->move($path,$filename);

        //mapping


        $songs->songname = $r->songname;
        $songs->songpath = $r->songpath;
        $songs->duration= $r->duration;
        $songs->releasedate = $r->releasedate;
        //saving

        $songs->save();

        return redirect('/song');
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
        
        $file = $r->file('songpath');
        if($file)
        {
            $filename = $file->getClientOriginalName();
            $path = "uploads";
            $file->move($path,$filename);    
        }
        else
            $filename=$r->currentphoto;
        
        songs::where('songid',$r->songid)->update([

            "songname" => $r->songname,
            "songpath" => $r->songpath,
            "duration" => $r->duration,
            "releasedate" => $r->releasedate
        ]);

        return redirect('/song');
    }
}
