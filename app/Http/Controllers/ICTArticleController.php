<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ICTArticleController extends Controller
{
    public function index()
    {
        return view('blog.blogs.ictarticle');
    }
}

