@extends('layout.main')

@section('content')
    <div class="container">
        <h1>Edit FAQ</h1>

        <form action="{{ route('faq.update', $faq->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="question" id ='basestyle'><b>Question:</b></label>
                <input type="text" id="question" name="question" class="form-control" value="{{ old('question', $faq->question) }}" required>
            </div>

            <div class="form-group">
                <label for="answer" id = 'basestyle'><b>Answer:</b></label>
                <textarea id="answer" name="answer" class="form-control" rows="5" required>{{ old('answer', $faq->answer) }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary" id = 'faq-actions'>Update FAQ</button>
        </form>
    </div>
@endsection
