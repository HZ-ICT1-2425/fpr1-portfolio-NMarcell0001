<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Marcell N.">
    <meta name="description" content="PCO Website project for 2.5 ECs">
    <title>Home Page</title>

    {{-- Compiled assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<section class="section">
    <div class="container">
        <nav class="top-right-nav">
            <aside>
                <h1 align="right"><a href="dashboard" title="Dashboard" id="dashboard">Dashboard</a></h1>
                <h1 align="right"><a href="profile" title="My profile" id="dashboard">Profile</a></h1>
                <h1 align="right"><a href="faq" title="FAQ" id="dashboard">FAQ</a></h1>
                <h1 align="right"><a href="blog" title="Blog" id="dashboard">Blog</a></h1>
            </aside>
        </nav>
        <nav class="top-left-nav">
            <h1 align="left"><a href="https://github.com/HZ-HBO-ICT" title="ICT Github for HZ" id="leftmenu"
                                target="_blank">ICT Github page for HZ</a></h1>
            <h1 align="left"><a
                    href="https://fs.myhz.nl/adfs/oauth2/authorize/?resource=urn%3AWebservice-hz_portal&state=6f967f3720afbdd9805cbd634675aaa8&scope=openid&response_type=code&approval_prompt=auto&redirect_uri=https%3A%2F%2Fportal.hz.nl%2Fauth%2Fadfs%2Fcallback&client_id=b25d3143-ffab-46db-96bd-fff258b69da3&client-request-id=45af508e-8c57-41a6-7300-00800100003a&pullStatus=0"
                    title="Login website for HZ's portal" id="leftmenu" target="_blank"><img src="pictures/hz-logo.png" width="20px" height="25px" align="center"> Portal
                    Login</a></h1>
            <h1 align="left"><a
                    href="https://glaze-donut-5a5.notion.site/PCO1en-Your-Showcase-Website-7bc8c340f66047d0b49b83e8dc44ba23"
                    title="PCO Prep Assignment" id="leftmenu" target="_blank">Prep Assignment link</a></h1>
            <h1 align="left"><a
                    href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2023-2024/Juli/CER-HZ-Bachelor-full-time-2023-2024-DEF-version-20240412.pdf?_gl=1*1us1txq*_up*MQ..&gclid=Cj0KCQjwiuC2BhDSARIsALOVfBKurbY7bDLmshx8x2BGn1gRz97T8jy3Tz_x_yvpk8ipMFH4tgeMWnEaAt2hEALw_wcB"
                    title="ICT Github for HZ" id="leftmenu" target="_blank">HZ Course and exam regulations</a></h1>
        </nav>
        <h1 align="center"><span id="bigsign">
            N. Marcell's Home Page!</span></h1>
        <h1 align="left" id="basestyle"><b>Why I think this program suits me: </b></h1>

        <h2 id="longfont">
            <ul>
                <li>
                    <p><u class="underline-small">I enjoy problem solving, especially in python which I learnt for about 3-4 years in high school (Thoroughly enjoyed it)</u></p>
                </li>
                <li>
                    <p><u class="underline-small">I like working with
                            <a href="https://en.wikipedia.org/wiki/Data" target="_blank">data</a>, for example in HS we basically made automated programs that extracted data from
                            <a href="https://en.wikipedia.org/wiki/Text_file" target="_blank">txt files</a> and did stuff with them</u></p>
                </li>
                <li>
                    <p><u class="underline-small">
                            I have always completed my assignments and 'homework' on time and with quality while also helping friends/classmates that struggled
                        </u></p>
                </li>
            </ul>
        </h2>
        <p id="mediumtext"> - I have the motivation to learn new stuff
            <br> - I will be glad of feedback and implement (most) in my code
        </p>
        <h1 align="left"><span id="basestyle"><b>Some snippets of the aforementioned codes:</b></span></h1>
        <h2 id="longfont">
            <p><u class="underline-small" style="line-height: 1.45">Another reason is that when I have an idea I try and code it which also involves a lot of learning because of new concepts. A great example is a small program I made this summer that calculates the time it will take you to go from point A to point B on a hypothetical rail line, plus, it also informs you how many stops you will make along the way. Point A and Point B are given by you and the program is pretty flexible since only the distances between each station are given. (AKA there isn't a huge list that contains every possible distance from all the stations) (Yes, I am a train nerd as well) The key takeaway from this program I made which took about 5-6 workhours is that I was introduced to a new library and had to solve multiple problems that required solutions I did not have the knowledge of. Overall it was an awesome experience as the program functions as intended and it doesn't have any bugs. (A huge motivation was the topic of the program which made it rather interesting to me)
                </u></p>
            <img src="pictures/screenshot-2.png" width="45%" alt="Screenshot of my program output">
            <img src="pictures/screenshot-3.png" style="width:30%;" alt="Another screenshot of the program">
        </h2>
    </div>
</section>

{{-- Footer --}}
<footer class="footer">
    <div class="container">
        <div class="content is-small has-text-centered">
            <footer align="center" id="ftr">Website made by Marcell Nemes |
                Theme built by <a href="https://www.csrhymes.com">C.S. Rhymes</a> | adapted by <a
                    href="https://github.com/dwaard">BugSlayer</a>
                <a href="https://opensource.org/licenses/MIT" class="link">
                    <i class="fa fa-balance-scale" aria-hidden="true"></i> License: MIT
                </a>
            </footer>
        </div>
    </div>
</footer>

</body>
</html>
