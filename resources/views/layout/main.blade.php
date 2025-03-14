<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PCO Portfolio</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<nav class="top-right-nav">
    <h1 align="right">
        <a href="{{ route('home') }}" class="active" title="Home Page" id="dashboard">Home Page</a>
    </h1>
    <h1 align="right">
        <a href="{{ route('profile') }}" title="My profile" id="dashboard" class="{{ Request::is('profile') ? 'active' : '' }}">Profile</a>
    </h1>
    <h1 align="right">
        <a href="{{ route('dashboard') }}" title="Dashboard" id="dashboard" class="{{ Request::is('dashboard') ? 'active' : '' }}">Dashboard</a>
    </h1>
    <h1 align="right">
        <a href="{{ route('faq.index') }}" title="FAQ" id="dashboard" class="{{ Request::is('faq') ? 'active' : '' }}">FAQ</a>
    </h1>
    <h1 align="right">
        <a href="{{ route('blog.index') }}" title="Blog" id="dashboard" class="{{ Request::routeIs('blog.index') ? 'active' : '' }}">Blog</a>
    </h1>
</nav>



<div class="container">
    @yield('content')
</div>

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
