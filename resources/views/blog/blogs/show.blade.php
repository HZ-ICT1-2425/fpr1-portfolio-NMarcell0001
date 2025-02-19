@extends('layout.main')

@section('content')
    <div class="container">
        <h1 align="center"><span id="bigsign">{{ $blog->title }}</h1>
        <h2 id="blogtext" align="center">{!! nl2br(e(wordwrap($blog->content, 100, "\n", true))) !!} <!--Every 100 characters, a new line is created for readability -->
        </h2>
        <a href="{{ route('blog.index') }}" class="btn btn-primary" id = 'blog-actions'>Back to the Blog Page</a>
    </div>
@endsection
