<?php

namespace App\Http\Controllers;

use App\Models\feedback;
use Illuminate\Http\Request;

class c_feedbackController extends Controller
{
    public function index()
    {
        return view('Client Side.contact');
    }

    public function store(Request $r)
    {
        $feedback = new feedback;

        $feedback->username = $r['username'];
        $feedback->email = $r['email'];
        $feedback->feedback = $r['feedback'];
        $feedback->save();

        return redirect('/feedback');
    }

    public function feedbackdata()
    {
        $feedback = feedback::all();
        $data = compact('feedback');
        return view('Admin Side.Feedback.view')->with($data);
    }
}
