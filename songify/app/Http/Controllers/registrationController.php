<?php

namespace App\Http\Controllers;

use App\Models\usersData;
use Illuminate\Http\Request;

class registrationController extends Controller
{
    public function index()
    {
        return view('Client Side.registration');
    }

    public function store(Request $r)
    {
        // $r->validate([
        //     "fullName"=>"required",
        //     "email"=>"required",
        //     "password"=>"required",
        //     "confirmPassword"=>"required"
        // ]);

        $file = $r->file('photo');
        $filename = $file->getClientOriginalName();
        $path = "uploads";
        $file->move($path, $filename);

        $register = new usersData;

        $register->fullname = $r['fullname'];
        $register->email = $r['email'];
        $register->password = $r['password'];
        $register->photo = $filename;
        // $register->usertype = $r['usertype'];

        $register->save();

        return redirect('/');
    }
}