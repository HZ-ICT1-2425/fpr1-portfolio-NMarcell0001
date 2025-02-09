<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PCO Portfolio</title>

    {{-- Compiled assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<!-- Navigation bar -->
<nav class="top-right-nav">
    <h1 align="right"><a href="/" title="Home Page" id="dashboard">Home Page</a></h1>
    <h1 align="right"><a href="profile" title="My profile" id="dashboard">Profile</a></h1>
    <h1 align="right"><a href="dashboard" title="Dashboard" id="dashboard">Dashboard</a></h1>
    <h1 align="right"><a href="faq" title="FAQ" id="dashboard">FAQ</a></h1>
    <h1 align="right"><a href="blog" title="Blog" id="dashboard">Blog</a></h1>
</nav>

<!-- Main Content -->
<div class="container">
    @yield('content') <!-- This is where the page content will be injected -->
</div>

{{-- Footer --}}
<footer class="footer">
    <div class="container">
        <div class="content is-small has-text-centered">
            <footer align="center" id="ftr">
                Website made by Marcell Nemes | Theme built by <a href="https://www.csrhymes.com">C.S. Rhymes</a> |
                adapted by <a href="https://github.com/dwaard">BugSlayer</a>
                <a href="https://opensource.org/licenses/MIT" class="link">
                    <i class="fa fa-balance-scale" aria-hidden="true"></i> License: MIT
                </a>
            </footer>
        </div>
    </div>
</footer>
</body>
</html>
