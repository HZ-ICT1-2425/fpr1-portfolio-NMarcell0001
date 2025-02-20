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
                    <td>Course project</td>
                    <td>Course timing</td>
                    <td>Course status</td>
                    <td>Course grade received</td>
                    <td>Overall EC</td>
                </tr>

                @foreach ($courses as $course)
                    <tr class="{{
    $course->status == 'Completed' ? 'completeddashentries' :
    ($course->status == 'Underway' ? 'underwaydashentries' : 'dashentries')
}}">
                        <td>{{ $course->designation }}</td>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->ec_amount }} EC</td>
                        <td>{{ $course->project }}</td>
                        <td>{{ $course->timing }}</td>
                        <td>{{ $course->status }}</td>
                        <td>{{ $course->grade_received ?? '--' }}</td>
                        <td>{{ $course->overall_ec ?? '-/-' }}</td>
                    </tr>
                @endforeach
            </table>
        @endif
    </div>
@endsection
