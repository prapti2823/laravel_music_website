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

    public function auth(Request $r)
    {
        $data = admin::where([
            "email" => $r->email,
            "password" => $r->password,
        ])->first();

        if ($data) {
        //     $r->session()->put('userid', $data->userid);
        //     $r->session()->put('fullname', $data->fullname);
        //     $r->session()->put('email', $data->email);
        //     $r->session()->put('photo', $data->photo);
        //     // $r->session()->put('usertype', $data->usertype);
            return redirect('/adminPage');
        } else
            return redirect('/');
    }
}
