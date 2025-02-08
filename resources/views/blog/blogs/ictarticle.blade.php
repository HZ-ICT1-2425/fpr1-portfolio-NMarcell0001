@extends('layout.main')
@section('content')
    <div class="container">
        <h1 align="center"><span id="bigsign">
        My opinion on AI<span style="width: 10px;"></span></span></h1>
        <h1 align="right"><a href="{{ route('blog') }}" title="Blog" id="dashboard">Go back to the Blog page</a></h1>
        <br>
        <h2 id="blogtext" align="center">Artifical intelligence, while percieved by the Media as something extremely
            revolutionary, is actually
            a bunch of algorithms that don't really do much other then run if-else loops for eternity. The media
            overhypes
            it because they gain a lot of views by portraying
            a two letter phrase that the audience can interpret in many ways, especially after all the "movies" about
            how
            robots will take over the world and such.
            In short, it's fear-mongering and intimidation of a technology that is still in it's baby steps. (Besides,
            <a
                href="https://www.npr.org/sections/planet-money/2024/08/06/g-s1-15245/10-reasons-why-ai-may-be-overrated-artificial-intelligence"
                target="_blank">it's
                not actually intelligent.</a>)
        </h2>
    </div>
@endsection
