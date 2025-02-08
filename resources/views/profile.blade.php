<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Marcell N.">
    <meta name="description" content="PCO Website project for 2.5 ECs">
    <title>My Profile</title>

    {{-- Compiled assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<h1 align="center"><span id="bigsign">N. Marcell's Profile Page!</span></h1>
<nav class="top-right-nav">
    <h1 align="right"><a href="/" title="Home Page" id="dashboard">Home Page</a></h1>
    <h1 align="right"><a href="dashboard" title="Dashboard" id="dashboard">Dashboard</a></h1>
    <h1 align="right"><a href="faq" title="FAQ" id="dashboard">FAQ</a></h1>
    <h1 align="right"><a href="blog" title="Blog" id="dashboard">Blog</a></h1>
</nav>
<h1 align="left" id=basestyle><b>Name:</b>
</h1>
<h2 id="longfont"> <u>Marcell Nemes</u></h2>

<div></div><br>

<h1 align="left" id="basestyle"><b>Age:</b></h1>
<h2 id="longfont"> <u>19</u></h2>

<div></div><br>

<h1 align="left" id="basestyle"><b>Previous place of residency:</b></h1>
<h2 id="longfont"> <u> <a href="https://www.youtube.com/watch?v=B_Hfmp-z7AE" target="_blank">Budapest,
            Hungary</a></u>
    <img src="pictures/bpphoto.jpg" style="width:50%; float:right; margin-right: 10%" alt="">
</h2>
<div></div><br>

<h1 align="left" id="basestyle"><b>Previous living situation:</b></h1>
<h2 id="longfont"> <u>With parents</u></h2>

<div></div><br>

<h1 align="left" id="basestyle"><b>Prior education level:</b></h1>
<h2 id="longfont"> <u>VWO-equivalent </u></h2>

<div></div><br>

<h1 align="left" id="basestyle"><b>Extracurricular activities:</b></h1>
<h2 id="longfont"> <u>Gaming, cycling</u></h2>

<div></div><br>

<h1 align="left" id="basestyle"><b>At least 2 paragraphs:</b></h1>
<h2 id="longfont">
    <p><i>I like helping people. (This is one paragraph)</i></p>
    <p><i>I dislike repeating my own words over and over and over and over again. (This is another paragraph)</i>
    </p>
    <p><i>This is the third paragraph about something, I have no clue.</i></p>
</h2>

<h1 align="left" id="basestyle"><b>My personality:</b></h1>
<h2 id="longfont"> <img src="pictures/gtav.jpeg" style="width:20%; float:right; margin-right: 10%" alt="">
    <ul>
        <li id="tablepadding">I still like helping people.</li>
        <li id="tablepadding">I like memes.</li>
        <li id="tablepadding">I like gaming.</li>
        <li id="tablepadding">Sometimes when I'm tired my English is not englishing so I just repeat the same
            phrases (See above and below)</li>
        <li id="tablepadding">Very attentive to details</li>
        <li id="tablepadding">I like to keep my environment clean</li>
        <li id="tablepadding">I like studying and being in extremely quiet places</li>
    </ul>
</h2>

<h1 align="left" id="basestyle"><b>Social media:</b></h1>
<h2 id="longfont"> <img src="pictures/stellaris.jpeg" style="width:25%; float:right; margin-right: 10%" alt="">
    <table>
        <ul>
            <li>
                <img src="pictures/png-transparent-discord-hd-logo.png" width="70px" ; height="50px" ;><a
                    href="https://discord.com" title="Discord's website" target="_blank" ;>special_hun</a>
            </li>
            <li>
                <img src="pictures/github-invertocat-logo.png" width="50px" ; height="50px" ;> <a
                    href="https://github.com/NMarcell0001" title="Github profile" target="_blank">NMarcell0001</a>
            </li>
        </ul>
    </table>
</h2>
<footer align="center" id="ftr">Website made by Marcell Nemes</footer>
</body>

</html>
