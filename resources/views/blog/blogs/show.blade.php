@extends('layout.main')

@section('content')
    <div class="container">
        <h1 align="center"><span id="bigsign">{{ $blog->title }}</span></h1>
        <a href="{{ route('blog.index') }}" class="btn btn-primary" id = 'blog-actions'>Back to the Blog Page</a>
        <h2 id="blogtext" align="center">
            {!! nl2br(e(wordwrap($blog->content, 100, "\n", true))) !!}
        </h2>
    </div>
@endsection
