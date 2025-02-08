<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstFeedbackController extends Controller
{
    public function index()
    {
        return view('blog.blogs.firstfeedback');
    }
}

