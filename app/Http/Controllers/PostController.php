<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($slug)
    {
        if (view()->exists("blog.blogs.$slug")) {
            return view("blog.blogs.$slug");
        }

        abort(404);
    }
}
