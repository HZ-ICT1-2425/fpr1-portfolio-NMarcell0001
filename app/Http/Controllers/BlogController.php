<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blog.blogindex', compact('blogs'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'slug' => 'nullable|string|unique:blogs,slug|max:255',
        ]);

        $slug = $request->slug ? $request->slug : Str::slug($request->title);
        $slug = Blog::where('slug', $slug)->exists() ? $slug . '-' . Str::random(5) : $slug;

        Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'slug' => $slug,
        ]);

        return redirect()->route('blog.index')->with('success', 'Blog created successfully!');
    }

    public function show($slug)
    {
        $viewPath = "blog.blogs.$slug";

        if (view()->exists($viewPath)) {
            return view($viewPath);
        }

        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('blog.blogs.show', compact('blog'));
    }


    public function edit($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('blog.edit', compact('blog'));
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $blog = Blog::where('slug', $slug)->firstOrFail();

        $blog->update([
            'title' => $request->get("title"),
            'content' => $request->get("content"),
        ]);

        return redirect()->route('blog.index')->with('success', 'Blog updated successfully!');
    }

    public function destroy($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $blog->delete();

        return redirect()->route('blog.index')->with('success', 'Blog deleted successfully!');
    }
}
