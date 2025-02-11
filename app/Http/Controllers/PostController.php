<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($slug)
    {
        // Check if the view exists under the blog/blogs folder
        if (view()->exists("blog.blogs.$slug")) {
            return view("blog.blogs.$slug");
        }

        // Show 404 if the view does not exist
        abort(404);
    }
}
