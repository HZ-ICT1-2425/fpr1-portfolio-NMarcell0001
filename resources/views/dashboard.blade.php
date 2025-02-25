@extends('layout.main')
@section('content')
    <div class="container">
        <h1 align="center"><span id="bigsign">N. Marcell's Dashboard!</span></h1>
        <br><br><br><br><br>

        @if ($courses->isEmpty())
            <p>No course and test data available.</p>
        @else
            <table>
                <tr class="tdborder">
                    <td>Course designation</td>
                    <td>Course name</td>
                    <td>Course EC amount</td>
                    <td>Course passed at</td>
                    <td>Course timing</td>
                    <td>Course status</td>
                    <td>Exam's name</td>
                    <td>Received grade (best)</td>
                </tr>

                @foreach ($courses as $course)
                    <tr class="{{
    !empty($course->passed_at) ? 'completeddashentries' :
    ($course->passed_at == '' ? 'dashentries' : 'dashentries')
}}">
                        <td>{{ $course->cu_code }}</td>
                        <td>{{ $course->course_name }}</td>
                        <td>{{ $course->credits }} EC</td>
                        <td>{{ $course->passed_at }}</td>
                        <td>{{ $course->created_at }}</td>
                        <td>{{ $course->updated_at }}</td>
                        <td>{{ $course->exam_name}}</td>
                        <td>{{ $course->best_grade}}</td>
                    </tr>
                @endforeach
            </table>
        @endif
    </div>
@endsection
