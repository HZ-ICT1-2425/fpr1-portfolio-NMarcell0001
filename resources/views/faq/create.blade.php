@extends('layout.main')

@section('content')
    <div class="container">
        <h1 align="center"><span id="bigsign">
        Create a new FAQ</span></h1>

        <form action="{{ route('faq.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="question" id ='basestyle'><b>Question:</b></label>
                <input type="text" id="question" name="question" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="answer" id = 'basestyle'><b>Answer:</b></label>
                <textarea id="answer" name="answer" class="form-control" rows="10" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary" id = 'basestyle'><b>Save FAQ</b></button>
        </form>
    </div>
@endsection
