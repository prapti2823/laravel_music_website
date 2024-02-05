<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

class a_adminLogin extends Controller
{
    //

    public function index()
    {
        return view('Admin Side.login');
    }

    // public function auth(Request $r)
    // {
    //     $data = admin::where([
    //         "email" => $r->email,
    //         "password" => $r->password,
    //     ])->first();

    //     if ($data) {
    //     //     $r->session()->put('userid', $data->userid);
    //     //     $r->session()->put('fullname', $data->fullname);
    //     //     $r->session()->put('email', $data->email);
    //     //     $r->session()->put('photo', $data->photo);
    //     //     // $r->session()->put('usertype', $data->usertype);
    //         return redirect('/adminPage');
    //     } else
    //         return back()->with('error', 'Admin does not exist');;
    // }

    public function auth(Request $r)
    {
        $data = admin::where("email", $r->email)->first();

        if ($data) {
            // If email exists
            if ($data->password == $r->password) {
                // If password is correct
                // Uncomment the lines below if you want to store data in session
                $r->session()->put('id', $data->id);
                $r->session()->put('name', $data->name);
                $r->session()->put('email', $data->email);
                // $r->session()->put('photo', $data->photo);
                // $r->session()->put('usertype', $data->usertype);

                return redirect('/adminPage');
            } else {
                // If password is incorrect
                return back()->with('error', 'Incorrect password');
            }
        } else {
            // If email doesn't exist
            return back()->with('error', 'Admin does not exist');
        }
    }

    public function logout()
    {
        session()->forget('userid');
        session()->forget('email');
        session()->forget('fullname');
        session()->forget('photo');

        return redirect('/adminlogin');
    }

}
