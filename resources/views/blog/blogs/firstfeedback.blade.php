<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Marcell N.">
    <meta name="description" content="PCO Website project for 2.5 ECs">
    <title>First feedback</title>

    {{-- Compiled assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
<h1 align="center"><span id="bigsign">
        Feedback to the Who am I questionnaire<span style="width: 10px;"></span></span></h1>
<h1 align="right"><a href="{{ route('blog') }}" title="Blog" id="dashboard">Go back to the Blog page</a></h1>

<br>
<h1 id="blogtext" align="center"><b>Teacher's feedback:</b></h1>
<h2 id="blogtext" align="center"><i>Reading your motivation, nice to see that you are interested in a master
        program
        or MBA to get a deeper grasp of ICT. Do you already have any experience on this subject? It is
        also good
        that you are open to different tracks of our program. During the second year you will get better
        acquainted
        with BIC and DS and will have the chance to make better a choice. </i></h2>
<h2 id="blogtext" align="center"><i>Interesting that you are already thinking about a management position.
        Besides
        programming, our program also focusses on personal development including four general
        competences every ICT
        person needs to master, namely 'Interact purposefully', 'Research-oriented problem-solving',
        'Future-oriented organizing' and 'Personal leadership'.</i></h2>
<h2 id="blogtext" align="center"><i>You asked about Maths. Our program for the first year focuses mostly on
        programming (HTML, JavaScript, TypeScript, Laravel Framework). It is also very hands-on: A class
        or workshop
        in the morning, followed by small assignment (individual or in group) and coming back for
        checkpoint at the
        afternoon to discuss the findings. Besides, you will get more complex assignments on a weekly
        basis. There
        are also team projects during the second, third and fourth quartiles where, next to development,
        you will
        also apply a professional way of work (with Agile Scrum methodology).</i> </h2>
<h2 id="blogtext" align="center"><i>About bikes, I know the APV living quarters have a large parking area for
        the
        bikes inside the building. Cycling is a way of life in the Netherlands with lots of bike lanes
        to crisscross
        the country: more than 35,000km. Besides it is safe to bike on the roads in the cities too: even
        in most
        one-way traffic, bikes are exempted. We may not have mountains, but we do have lots of trails,
        specially in
        the natural parks on the costal dunes. </i> </h2>
<h2 id="blogtext" align="center"><i>And you were right about question 22. Some people need special access card
        to
        use the lift, or get more time to complete an exam. If that would be necessary, I would put the
        student in
        contact with the dean to make the arrangements as soon as possible.</i> </h2>
<h2 id="blogtext" align="center"><i>From your SWOT analysis: good that you already have the ability to plan your
        time and not let things for the last minute. And as I mentioned before, the research-oriented
        problem-solving may help you to dig deeper into a subject. Not based on a single opinion, but in
        (other
        people) relevant studies. </i></h2>
<h1 id="blogtext" align="center">Feedback to the teacher's feedback:</h1>
<h2 id="blogtext" align="center"><i>Regarding the future MSc studies (Possible MBA or in IT) my only
        "background" is
        my parents working in finance or around that area, plus I've spoken to some professionals in the
        IT field as
        well and the general response was when I asked them if I should get a masters degree, a
        definitive yes.
        Plus, I've also experienced some form of leadership while being in online communities / groups
        which in some
        cases enhanced my skills in that field and which also contributed to my plans on going higher in
        terms of
        roles in a company. (Though again, these are just plans smile)</i> </h2>
<h2 id="blogtext" align="center"><i>About any relevant "IT" experience; I'd say I'm rather good at win10
        troubleshooting as my laptop sometimes decides to get BSODs every now and then, along with lots
        and lots of
        errors. Often I just say that whatever I get my hands on will randomly output an error.</i></h2>
<h2 id="blogtext" align="center"><i>On the biking; I did actually see the 5 day trip they put out somewhere on
        HZ's
        website so I guess my interests in this area are covered pleasantly, activity wise.</i></h2>
<br>
<footer align="center" id="ftr">Website made by Marcell Nemes</footer>
</body>

</html>
