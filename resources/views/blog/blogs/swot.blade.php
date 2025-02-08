@extends('layout.main')
@section('content')
    <div class="container">
        <h1 align="center"><span id="bigsign">
        SWOT Analysis blog<span style="width: 10px;"></span></h1>
        <h1 align="right"><a href="{{ route('blog') }}" title="Blog" id="dashboard">Go back to the Blog page</a></h1>
        <br>
        <h2 id="blogtext" align="center">Strengths: I am rather precise, I could also say I am responsible, I am always
            on
            time, also I am a very approachable person, so if anyone has a question they can just straight up ask me
            about
            it and I'll answer to my best knowledge, I would also say that I'm willing to learn, especially if I can
            achieve
            something with that given knowledge. I also try to do as much as soon as possible to avoid leaving stuff
            until
            the last minute to be done, hence why I would say I'm rather organized. I am also very curious, so accepting
            new
            things is rather comfortable for me, and we could also say I'm creative, as I tend to have a lot of my own
            ideas.</h2>
        <h2 id="blogtext" align="center">Weaknesses: Sometimes I'm a bit lazy, and so the ICT programme will definitely
            provide a possible solution to that, and also (rarely) I do tend to defend an opinion or a statement I do
            not
            have 100% research on (As it could very well be false), which changes from time to time but encourages
            deeper
            learning curves in the given subjects or topics.</h2>
        <h2 id="blogtext" align="center">Opportunities: Having the environment and community to give some sort of a
            movation
            to learn even more and to enhance my skills in the given subject.
            I also would imagine having the opportunity to explore places in and around the Netherlands, which could
            mean
            new connections (Both at the university and outside it) and so on.</h2>
        <h2 id="blogtext" align="center">Threats: In todays age, having a lot of experience is often required for IT
            jobs,
            which is of course a challenge for someone who just graduated from university, however this threat could be
            overcome during the internship / minor part and the 4th year of the programme where it is much more
            practical.
        </h2>
    </div>
@endsection
