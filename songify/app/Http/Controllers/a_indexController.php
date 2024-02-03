<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usersData;
use App\Models\songs;
use App\Models\artist;
use App\Models\feedback;


class a_indexController extends Controller
{
    public function index()
    {
        return view('Admin Side.index');
    }

    public function dashboard()
    {
        $userCount = usersData::count();
        $songCount = songs::count();
        $artistCount = artist::count();
        $feedbackCount = feedback::count();

        return view('Admin Side.index', compact('userCount', 'songCount', 'artistCount', 'feedbackCount'));
    }
}
