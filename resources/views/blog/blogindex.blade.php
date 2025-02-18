@extends('layout.main')
@section('content')
    <div class="container">
        <h1 align="center"><span id="bigsign">
            N. Marcell's Blog Page!</span></h1>
        <br><br><br><br><br>
        <a href="{{ route('blog.create') }}" class="btn btn-primary mb-3" id='blog-actions'><b>Create New Blog</b></a>

        <table>
            <tr>
                <th id="blogpage">
                    Study choice blog: <p id="smoltext" align="left"> First of all, I would definitely like to complete
                        a
                        masters program which probably would either be an MBA or something that is related to IT.
                        Second, I
                        would most likely...
                        <a href="{{ route('blog.show', 'studychoice') }}" id="readmore">Read more</a>
                    </p>
                </th>
                <th id="blogpage">SWOT Analysis blog:<p id="smoltext" align="left">I am rather precise, I could also say
                        I
                        am responsible, I am always on time, also I am a very...
                        <a href="{{ route('blog.show', 'swot') }}" id="readmore">Read more</a>
                    </p>
                </th>
            </tr>
            <tr>
                <th id="blogpage">Programming Experience blog <p id="smoltext" align="left">A very basic level of
                        python, as
                        the high school leaving exam requires it, plus, in the recent weeks/months...
                        <a href="{{ route('blog.show', 'progexp') }}" id="readmore">Read more</a>

                    </p>
                </th>
                <th id="blogpage">First Feedback blog<p id="smoltext" align="left">Reading your motivation, nice to see
                        that
                        you are interested in ...
                        <a href="{{ route('blog.show', 'firstfeedback') }}" id="readmore">Read more</a>
                    </p>
                </th>
            </tr>
            <tr>
                <th id="blogpage">My opinion on AI <p id="smoltext" align="left">Artifical intelligence, while percieved
                        by
                        the Media as something extremely revolutionary, is actually...
                        <a href="{{ route('blog.show', 'ictarticle') }}" id="readmore">Read more</a>
                    </p>
                </th>
            </tr>
        </table>
        <!-- Displaying Blog Posts -->
        @foreach($blogs as $blog)
            <table>
                <tr>
                    <th id="blogpage">
                        {{ $blog->title }}:
                        <p id="smoltext" align="left">
                            {{ Str::limit($blog->content, 100) }}
                            <a href="{{ route('post.show', $blog->slug) }}" id="readmore">Read more</a>
                        </p>
                    </th>
                    <th id="blogpage">
                        <!-- Edit Button -->
                        <a href="{{ route('blog.edit', $blog->slug) }}" class="btn btn-warning btn-sm"
                           id="blog-actions">Edit</a>

                        <!-- Delete Button -->
                        <form action="{{ route('blog.destroy', $blog->slug) }}" method="POST"
                              style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" id="blog-actions">Delete</button>
                        </form>
                    </th>
                </tr>
            </table>
        @endforeach
    </div>
@endsection
