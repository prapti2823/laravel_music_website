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
        // Your validation logic goes here

        // Check if the email already exists
        $existingUser = usersData::where('email', $r['email'])->first();
        if ($existingUser) {
            // User already exists, redirect back with a message
            return redirect('/loginPage')->with('error', 'User with this email already exists. If you have an account, please log in.');
        }

        $file = $r->file('photo');
        $filename = $file->getClientOriginalName();
        $path = "uploads";
        $file->move($path, $filename);

        $register = new usersData;

        $register->fullname = $r['fullname'];
        $register->email = $r['email'];
        $register->password = $r['password'];
        $register->photo = $filename;

        $register->save();

        // Store user information in session upon successful registration
        if (!$existingUser) {
            $r->session()->put('userid', $register->id);
            $r->session()->put('fullname', $register->fullname);
            $r->session()->put('email', $register->email);
            $r->session()->put('photo', $register->photo);
        }

        return redirect('/');
    }
}

// public function store(Request $r)
// {
//     // $r->validate([
//     //     "fullName"=>"required",
//     //     "email"=>"required",
//     //     "password"=>"required",
//     //     "confirmPassword"=>"required"
//     // ]);

//     $file = $r->file('photo');
//     $filename = $file->getClientOriginalName();
//     $path = "uploads";
//     $file->move($path, $filename);

//     $register = new usersData;

//     $register->fullname = $r['fullname'];
//     $register->email = $r['email'];
//     $register->password = $r['password'];
//     $register->photo = $filename;
//     // $register->usertype = $r['usertype'];

//     $register->save();

//  return redirect('/');
// }
