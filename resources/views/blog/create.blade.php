@extends('layout.main')

@section('content')
    <div class="container">
        <h1 align="center"><span id="bigsign">Create new Blog post</span></h1>

        <form action="{{ route('blog.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title" id="blog-actions">Title</label>
                <input type="text" class="form-control" name="title" id="title" required>
            </div>

            <div class="form-group">
                <label for="slug" id="blog-actions">Slug</label>
                <input type="text" class="form-control" name="slug" id="slug">
            </div>

            <div class="form-group">
                <label for="content" id="blog-actions">Content</label>
                <textarea class="form-control" name="content" id="content" rows="5" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary" id="blog-actions">Create Post</button>
        </form>
    </div>
@endsection
