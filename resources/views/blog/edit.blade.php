@extends('layout.main')

@section('content')
    <div class="container">
        <h1 align="center"><span id="bigsign">Edit Blog Post</span></h1>

        <form action="{{ route('blog.update', $blog->slug) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title" id="blog-actions">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $blog->title }}" required>
            </div>

            <div class="form-group">
                <label for="slug" id="blog-actions">Slug</label>
                <input type="text" class="form-control" name="slug" id="slug" value="{{ $blog->slug }}" required>
            </div>

            <div class="form-group">
                <label for="content" id="blog-actions">Content</label>
                <textarea class="form-control" name="content" id="content" rows="5" required>{{ $blog->content }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary" id="blog-actions">Update Post</button>
        </form>
    </div>
@endsection
