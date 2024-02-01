<?php

namespace App\Http\Controllers;

use App\Models\usersData;
use Illuminate\Http\Request;

class a_userController extends Controller
{
    public function index()
    {
        $users = usersData::all();
        $data = compact('users');
        return view('Admin Side.User.view')->with($data);
    }

    public function delete($userid)
    {
        usersData::where('userid', '=', $userid)->delete();

        return back();
    }
}