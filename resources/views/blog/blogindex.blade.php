@extends('layout.main')
@section('content')
    <div class="container">
        <h1 align="center"><span id="bigsign">
            N. Marcell's Blog Page!</span></h1>
        <br><br><br><br><br>
        <table>
            <tr>
                <th id="blogpage">
                    Study choice blog: <p id="smoltext" align="left"> First of all, I would definitely like to complete
                        a
                        masters program which probably would either be an MBA or something that is related to IT.
                        Second, I
                        would most likely...
                        <a href="{{ route('post.show', 'studychoice') }}" id="readmore">Read more</a>
                    </p>
                </th>
                <th id="blogpage">SWOT Analysis blog:<p id="smoltext" align="left">I am rather precise, I could also say
                        I
                        am responsible, I am always on time, also I am a very...
                        <a href="{{ route('post.show', 'swot') }}" id="readmore">Read more</a>
                    </p>
                </th>
            </tr>
            <tr>
                <th id="blogpage">Programming Experience blog <p id="smoltext" align="left">A very basic level of
                        python, as
                        the high school leaving exam requires it, plus, in the recent weeks/months...
                        <a href="{{ route('post.show', 'progexp') }}" id="readmore">Read more</a>

                    </p>
                </th>
                <th id="blogpage">First Feedback blog<p id="smoltext" align="left">Reading your motivation, nice to see
                        that
                        you are interested in ...
                        <a href="{{ route('post.show', 'firstfeedback') }}" id="readmore">Read more</a>
                    </p>
                </th>
            </tr>
            <tr>
                <th id="blogpage">My opinion on AI <p id="smoltext" align="left">Artifical intelligence, while percieved
                        by
                        the Media as something extremely revolutionary, is actually...
                        <a href="{{ route('post.show', 'ictarticle') }}" id="readmore">Read more</a>
                    </p>
                </th>
            </tr>
        </table>
    </div>
@endsection
