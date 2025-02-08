<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Marcell N.">
    <meta name="description" content="PCO Website project for 2.5 ECs">
    <title>Programming Experience</title>

    {{-- Compiled assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
<h1 align="center"><span id="bigsign">
        Programming Experience blog<span style="width: 10px;"></span></span></h1>
<h1 align="right"><a href="{{ route('blog') }}" title="Blog" id="dashboard">Go back to the Blog page</a></h1>
<br>
<h2 id="blogtext" align="center">A very basic level of python, as the high school leaving exam requires it, plus, in
    the recent weeks/months I actually got interested in it on a "higher" level, but that's it, nothing major
    really. I know how to write in a txt file, how to read from one, I can use for , while loops and essentially the
    very basic stuff in python. I could also send examples if that helps</h2>
<footer align="center" id="ftr">Website made by Marcell Nemes</footer>
</body>

</html>
