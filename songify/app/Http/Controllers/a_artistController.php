<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\artist;


class a_artistController extends Controller
{
    public function index()
    {
        $artists = artist::all();
        $data = compact('artists');
        return view('Admin Side.Artist.view')->with($data);
    }
    public function store(Request $r)
    {
        $artists = new artist;

        $file = $r->file('photo');
        $filename = $file->getClientOriginalName();
        $path = "uploads";
        $file->move($path, $filename);

        $artists->artistname = $r->artistname;
        $artists->photo = $filename;
        $artists->songname = $r->songname;
        //saving

        $artists->save();

        return redirect('/artist');
    }

    public function delete($artistid)
    {
        artist::where('artistid',$artistid)->delete();

        return back();
    }

    public function edit($artistid)
    {
        $artists = artist::where('artistid', $artistid)->first();
        $data = compact('artists');
        return view('Admin Side.Artist.edit')->with($data);
    }

    public function update(Request $r)
    {

        $file = $r->file('photo');
        if ($file) {
            $filename = $file->getClientOriginalName();
            $path = "uploads";
            $file->move($path, $filename);
        } else
            $filename = $r->currentphoto;

        artist::where('artistid', $r->artistid)->update([
            "artistname" => $r->artistname,
            "photo" => $r->photo,
            "songname" => $r->songname

        ]);

        return redirect('/artist');
    }
}

