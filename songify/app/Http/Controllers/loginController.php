<?php

namespace App\Http\Controllers;

use App\Models\usersData;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index()
    {
        return view('Client Side.login');
    }

    public function auth(Request $r)
    {
        $data = usersData::where([
            "email" => $r->email,
            "password" => $r->password,
        ])->first();

        if ($data) {
            $r->session()->put('userid', $data->userid);
            $r->session()->put('fullname', $data->fullname);
            $r->session()->put('email', $data->email);
            $r->session()->put('photo', $data->photo);
            // $r->session()->put('usertype', $data->usertype);
            return redirect('/');
        } else
            return back();
    }

    public function logout()
    {
        session()->forget('userid');
        session()->forget('email');
        session()->forget('fullname');
        session()->forget('photo');

        return redirect('/loginPage');
    }
}