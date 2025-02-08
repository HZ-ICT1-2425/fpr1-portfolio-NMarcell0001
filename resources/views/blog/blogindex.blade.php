<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Marcell N.">
    <meta name="description" content="PCO Website project for 2.5 ECs">
    <title>Blog</title>

    {{-- Compiled assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body bgcolor="#C9C0BD">
<h1 align="center"><span id="bigsign">
            N. Marcell's Blog Page!</span></h1>
<nav class="top-right-nav">
    <h1 align="right"><a href="../" title="Home Page" id="dashboard">Home Page</a></h1>
    <h1 align="right"><a href="../profile" title="My profile" id="dashboard">Profile</a></h1>
    <h1 align="right"><a href="../faq" title="FAQ" id="dashboard">FAQ</a></h1>
    <h1 align="right"><a href="../dashboard" title="Dashboard" id="dashboard">Dashboard</a></h1>
</nav>
<br><br><br><br><br>
<table>
    <tr>
        <th id="blogpage">
            Study choice blog: <p id="smoltext" align="left"> First of all, I would definitely like to complete a
                masters program which probably would either be an MBA or something that is related to IT. Second, I
                would most likely...
                <a href="blogs/studychoice.html" id="readmore">Read more</a>
            </p>
        </th>
        <th id="blogpage">SWOT Analysis blog:<p id="smoltext" align="left">I am rather precise, I could also say I
                am responsible, I am always on time, also I am a very...
                <a href="blogs/swot.html" id="readmore">Read more</a>
            </p>
        </th>
    </tr>
    <tr>
        <th id="blogpage">Programming Experience blog <p id="smoltext" align="left">A very basic level of python, as
                the high school leaving exam requires it, plus, in the recent weeks/months...
                <a href="blogs/progexp.html" id="readmore">Read more</a>
            </p>
        </th>
        <th id="blogpage">First Feedback blog<p id="smoltext" align="left">Reading your motivation, nice to see that
                you are interested in ...
                <a href="blogs/firstfeedback" id="readmore">Read more</a>
            </p>
        </th>
    </tr>
    <tr>
        <th id="blogpage">My opinion on AI <p id="smoltext" align="left">Artifical intelligence, while percieved by
                the Media as something extremely revolutionary, is actually...
                <a href="blogs/ictarticle.html" id="readmore">Read more</a>
            </p>
        </th>
    </tr>
</table>
<footer align="center" id="ftr">Website made by Marcell Nemes</footer>
</body>

</html>
