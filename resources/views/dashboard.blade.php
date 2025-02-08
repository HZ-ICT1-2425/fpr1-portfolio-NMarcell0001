<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Marcell N.">
    <meta name="description" content="PCO Website project for 2.5 ECs">
    <title>Dashboard</title>

    {{-- Compiled assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
<h1 align="center"><span id="bigsign">
        N. Marcell's Dashboard!</span></h1>
<nav class="top-right-nav">
    <h1 align="right"><a href="/" title="Home Page" id="dashboard">Home Page</a></h1>
    <h1 align="right"><a href="profile" title="My profile" id="dashboard">Profile</a></h1>
    <h1 align="right"><a href="faq" title="FAQ" id="dashboard">FAQ</a></h1>
    <h1 align="right"><a href="blog" title="Blog" id="dashboard">Blog</a></h1>
</nav>
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
        <td>Overall EC / Grade</td>
    </tr>
    <tr class="underwaydashentries">
        <td>CU75001</td>
        <td>Program- & Career Orientation</td>
        <td>2.5 EC</td>
        <td>Portfolio website (Presentation)</td>
        <td>Block 1</td>
        <td>Underway</td>
        <td>--</td> <!-- PCO GRADE-->
        <td>-/-</td> <!-- OVERALL EC / GRADE-->
    </tr>
    <tr class="underwaydashentries">
        <td>CU75002</td>
        <td>Computer Science Basics</td>
        <td>5 EC</td>
        <td>Written knowledge test</td>
        <td>Block 1</td>
        <td>Underway</td>
        <td>--</td> <!-- COMPSCI GRADE-->
        <td>-/-</td> <!-- OVERALL EC / GRADE-->
    </tr>
    <tr class="underwaydashentries">
        <td>CU75003</td>
        <td>Programming Basics</td>
        <td>5 EC</td>
        <td>Written knowledge test</td>
        <td>Block 1</td>
        <td>Underway</td>
        <td>--</td> <!-- PROGRAMMING BASICS GRADE-->
        <td>-/-</td> <!-- OVERALL EC / GRADE-->
    </tr>
    <tr class="underwaydashentries">
        <td>CU75068</td>
        <td>Personal Professional Development: Exploration</td>
        <td>12.5 EC</td>
        <td>Criterion- referenced assessment</td>
        <td>Block 1-4</td>
        <td>Underway</td>
        <td>--</td> <!-- PPDE GRADE-->
        <td>-/-</td> <!-- OVERALL EC / GRADE-->
    </tr>
    <tr class="dashentries">
        <td>-----</td>
        <td>IT Personality</td>
        <td>2.5 EC</td>
        <td>Portfolio</td>
        <td>Block 2-4</td>
        <td>Not started</td>
        <td>--</td> <!-- IT PERSONALITY GRADE-->
        <td>-/-</td> <!-- OVERALL EC / GRADE-->
    </tr>
    <tr class="dashentries">
        <td rowspan="2">CU75004</td>
        <td rowspan="2">Object Oriented Programming</td>
        <td>5 EC</td>
        <td>Presentation</td>
        <td>Block 2</td>
        <td>Not started</td>
        <td>--</td> <!-- OOP PRESENTATION PROG GRADE-->
        <td rowspan="2">-/-</td> <!-- OVERALL EC / GRADE-->
    </tr>
    <tr class="dashentries">
        <td>5 EC</td>
        <td>Written knowledge test</td>
        <td>Block 2</td>
        <td>Not started</td>
        <td>--</td> <!-- OOP WRITTEN TEST GRADE-->
    </tr>
    <tr class="dashentries">
        <td>CU75081</td>
        <td>Business IT Consultancy Basics</td>
        <td>2.5 EC</td>
        <td>Assignment</td>
        <td>Block 3-4</td>
        <td>Not started</td>
        <td>--</td> <!-- BUSINESS IT GRADE-->
        <td>-/-</td> <!-- OVERALL EC / GRADE-->
    </tr>
    <tr class="dashentries">
        <td rowspan="4">CU75080</td>
        <td rowspan="4">Framework Project 1</td>
        <td>5 EC</td>
        <td>Written knowledge test</td>
        <td>Block 3</td>
        <td>Not started</td>
        <td>--</td> <!-- FP1 GRADE-->
        <td rowspan="4">-/-</td> <!-- OVERALL EC / GRADE-->
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
        <td rowspan="3">-/-</td> <!-- OVERALL EC / GRADE-->
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
        <td>0 EC</td>
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
<footer align="center" id="ftr">Website made by Marcell Nemes</footer>
</body>

</html>
