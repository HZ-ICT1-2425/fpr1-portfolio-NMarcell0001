@extends('layout.main')

@section('content')

    <div class="container">
        <h1 align="center"><span id="bigsign">N. Marcell's FAQ Page!</span></h1>
    </div>


    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('faq.create') }}" class="btn btn-primary mb-3" id='faq-actions'>Create New FAQ</a>

    @foreach ($faqs as $faq)
        <div>
            <h2 class='faq-question'>{{ $faq->question }}</h2>
            <br>
            <p class='faq-answer'>{{ $faq->answer }}</p>
            <br>

            <a href="{{ route('faq.edit', $faq->id) }}" class="btn btn-warning btn-sm"
               id='faq-actions'>Edit</a>

            <form action="{{ route('faq.destroy', $faq->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" id='faq-actions'>Delete</button>
            </form>
        </div>
    @endforeach
@endsection
