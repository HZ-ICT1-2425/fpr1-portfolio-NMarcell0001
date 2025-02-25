@extends('layout.main')
@section('content')
    <div class="container">
        <h1 align="center"><span id="bigsign">
            N. Marcell's Blog Page!</span></h1>
        <br><br><br><br><br>
        <a href="{{ route('blog.create') }}" class="btn btn-primary mb-3" id='blog-actions'><b>Create New Blog</b></a>

        @foreach($blogs as $blog)
            <table>
                <tr>
                    <th id="blogpage">
                        {{ $blog->title }}
                        <p id="smoltext" align="left">
                            {{ Str::limit($blog->content, 50)}}
                            <a href="{{ route('blog.show', $blog->slug) }}" id="readmore">Read more</a>
                        </p>
                    </th>
                    <th id="blogpage">
                        <a href="{{ route('blog.edit', $blog->slug) }}" class="btn btn-warning btn-sm"
                           id="blog-actions">Edit</a>

                        <form action="{{ route('blog.destroy', $blog->slug) }}" method="POST"
                              style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" id="blog-actions">Delete</button>
                        </form>
                    </th>
                </tr>
            </table>
        @endforeach
    </div>
@endsection
