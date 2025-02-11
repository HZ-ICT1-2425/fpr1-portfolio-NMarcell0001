@extends('layout.main')
@section('content')
    <div class="container">
        <h1 align="center"><span id="bigsign">
        N. Marcell's Dashboard!</span></h1>
        <br><br><br><br><br>
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
            <tr class="completeddashentries">
                <td>CU75001</td>
                <td>Program- & Career Orientation</td>
                <td>2.5 EC</td>
                <td>Portfolio website (Presentation)</td>
                <td>Block 1</td>
                <td>Completed</td>
                <td>9.3</td> <!-- PCO GRADE-->
                <td>2.5</td> <!-- OVERALL EC-->
            </tr>
            <tr class="completeddashentries">
                <td>CU75002</td>
                <td>Computer Science Basics</td>
                <td>5 EC</td>
                <td>Written knowledge test</td>
                <td>Block 1</td>
                <td>Completed</td>
                <td>9.1</td> <!-- COMPSCI GRADE-->
                <td>7.5</td> <!-- OVERALL EC-->
            </tr>
            <tr class="completeddashentries">
                <td>CU75003</td>
                <td>Programming Basics</td>
                <td>5 EC</td>
                <td>Written knowledge test</td>
                <td>Block 1</td>
                <td>Completed</td>
                <td>6.5</td> <!-- PROGRAMMING BASICS GRADE-->
                <td>12.5</td> <!-- OVERALL EC-->
            </tr>
            <tr class="underwaydashentries">
                <td>CU75068</td>
                <td>Personal Professional Development: Exploration</td>
                <td>12.5 EC</td>
                <td>Criterion- referenced assessment</td>
                <td>Block 1-4</td>
                <td>Underway</td>
                <td>--</td> <!-- PPDE GRADE-->
                <td>-/-</td> <!-- OVERALL EC-->
            </tr>
            <tr class="underwaydashentries">
                <td>-----</td>
                <td>IT Personality</td>
                <td>2.5 EC</td>
                <td>Portfolio</td>
                <td>Block 2-4</td>
                <td>Underway</td>
                <td>1/2 PASS</td> <!-- IT PERSONALITY GRADE-->
                <td>13.75 EC</td> <!-- OVERALL EC-->
            </tr>
            <tr class="completeddashentries">
                <td rowspan="2">CU75004</td>
                <td rowspan="2">Object Oriented Programming</td>
                <td>5 EC</td>
                <td>Presentation</td>
                <td>Block 2</td>
                <td>Completed</td>
                <td>8.8</td> <!-- OOP PRESENTATION PROG GRADE-->
                <td rowspan="2">23.75 EC</td> <!-- OVERALL EC-->
            </tr>
            <tr class="completeddashentries">
                <td>5 EC</td>
                <td>Written knowledge test</td>
                <td>Block 2</td>
                <td>Completed</td>
                <td>8.6</td> <!-- OOP WRITTEN TEST GRADE-->
            </tr>
            <tr class="underwaydashentries">
                <td>CU75081</td>
                <td>Business IT Consultancy Basics</td>
                <td>2.5 EC</td>
                <td>Assignment</td>
                <td>Block 3-4</td>
                <td>Underway</td>
                <td>--</td> <!-- BUSINESS IT GRADE-->
                <td>-/-</td> <!-- OVERALL EC-->
            </tr>
            <tr class="underwaydashentries">
                <td rowspan="4">CU75080</td>
                <td rowspan="4">Framework Project 1</td>
                <td>5 EC</td>
                <td>Written knowledge test</td>
                <td>Block 3</td>
                <td>Underway</td>
                <td>--</td> <!-- FP1 GRADE-->
                <td rowspan="4">-/-</td> <!-- OVERALL EC-->
            </tr>
            <tr class="dashentries">
                <td>1.25 EC</td>
                <td>Database exam</td>
                <td>Block 3</td>
                <td>Not started</td>
                <td>--</td>
            </tr>
            <tr class="dashentries">
                <td>2.5 EC</td>
                <td>Group presentation</td>
                <td>Block 3</td>
                <td>Not started</td>
                <td>--</td>
            </tr>
            <tr class="dashentries">
                <td>1.25 EC</td>
                <td>Individual requirements</td>
                <td>Block 3</td>
                <td>Not started</td>
                <td>--</td>
            </tr>
            <tr class="dashentries">
                <td rowspan="3">CU75011</td>
                <td rowspan="3">Framework Project 2</td>
                <td>2.5 EC</td>
                <td>Delivery</td>
                <td>Block 4</td>
                <td>Not started</td>
                <td>--</td> <!--FP2 GRADE-->
                <td rowspan="3">-/-</td> <!-- OVERALL EC-->
            </tr>
            <tr class="dashentries">
                <td>2.5 EC</td>
                <td>Report of assessment</td>
                <td>Block 4</td>
                <td>Not started</td>
                <td>--</td>
            </tr>
            <tr class="dashentries">
                <td>5 EC</td>
                <td>IT Devt portfolio</td>
                <td>Block 4</td>
                <td>Not started</td>
                <td>--</td>
            </tr>
            <tr class="credits">
                <td>-----</td>
                <td>Current EC amount:</td>
                <td>23.75 EC</td>
                <td>-----</td>
                <td>----</td>
                <td>Overall result:</td>
                <td>EC/Grade:</td>
                <td>-/-</td> <!-- FINAL EC / GRADE-->
            </tr>
            <tr class="credits">
                <td>-----</td>
                <td>Maximum obtainable credit amount:</td>
                <td>60 EC</td>
                <td>----</td>
                <td>----</td>
                <td>Minimum EC amount required</td>
                <td> to pass the NBSA:</td>
                <td>45 EC</td>
            </tr>
        </table>
    </div>
@endsection
