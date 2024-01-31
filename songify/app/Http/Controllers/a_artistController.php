<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\artist;


class a_artistController extends Controller
{
    public function index()
    {
        $artist=artist::all();
        $data=compact('artist');
        return view('Admin Side.Artist.view')->with($data);
    }
    public function store(Request $r)
    {
        $artist = new artist;

        $file = $r->file('photo');
        $filename = $file->getClientOriginalName();
        $path = "uploads";
        $file->move($path, $filename);

        $artist->artistname = $r->artistname;
        $artist->photo = $filename;
        $artist->songname = $r->songname;
        //saving

        $artist->save();

        return redirect('/admin/artist');
    }

    public function delete($artistid)
    {
        artist::where('artistid',$artistid)->delete();

        return back();
    }

    public function edit($artistid)
    {
        $artist = artist::where('artistid',$artistid)->first();
        $data = compact('artist');
        return view('Admin Side.Artist.edit')->with($data);
    }

    public function update(Request $r)
    {
        
        $file = $r->file('photo');
        if($file)
        {
            $filename = $file->getClientOriginalName();
            $path = "uploads";
            $file->move($path,$filename);    
        }
        else
            $filename=$r->currentphoto;
        
        artist::where('artistid',$r->artistid)->update([
            "artistname" => $r->artistname,
            "photo"=>$r->photo,
            "songname" => $r->songname
            
        ]);

        return redirect('/admin/artist');
    }
}

