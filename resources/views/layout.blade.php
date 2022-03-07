<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Hesham Jabr</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="/images/favicon.png" />
    <link rel="stylesheet" href="/css/animate.css" />
    <link rel="stylesheet" href="/css/et-lineicons.css" />
    <link rel="stylesheet" href="/css/themify-icons.css" />
    <link rel="stylesheet" href="/css/bootstrap.css" />
    <link rel="stylesheet" href="/css/flexslider.css" />
    <link rel="stylesheet" href="/css/style.css" />
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<div id="addo-page">
    <a href="#" class="js-addo-nav-toggle addo-nav-toggle"><i></i></a>
    <!-- Sidebar Section -->
    <aside id="addo-aside">
        <!-- Logo -->
        <div id="addo-logo">
            <a href="{{ route('page.home') }}">HESHAM JABR</a>
        </div>
        <!-- Menu -->
        <nav id="addo-main-menu">
            <ul>
                <li ><a class="{{ (request()->is('/')) ? 'menu-active' : '' }}" href="{{ route('page.home') }}">Home</a></li>
                <li><a class="{{ (request()->is('why')) ? 'menu-active' : '' }}" href="{{ route('page.why') }}">Why ICT</a></li>
                <li><a class="{{ (request()->is('profile')) ? 'menu-active' : '' }}" href="{{ route('page.profile') }}">Profile</a></li>
                <li><a class="{{ (request()->is('dashboard')) ? 'menu-active' : '' }}" href="{{ route('page.dashboard') }}">Dashboard</a></li>
                <li><a class="{{ (request()->is('blog')) ? 'menu-active' : '' }}" href="{{ route('page.blog') }}">Blog</a></li>
                <li><a class="{{ (request()->is('faq')) ? 'menu-active' : '' }}" href="{{ route('page.faq') }}">FAQ</a></li>
            </ul>
        </nav>
    </aside>
    <!-- Main Section -->
    <div id="addo-main">
        <!-- Home Section -->
        @yield('content')
    </div>
</div>
<!-- Js -->
<script src="/js/jquery.min.js"></script>
<script src="/js/modernizr-2.6.2.min.js"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.waypoints.min.js"></script>
<script src="/js/jquery.flexslider-min.js"></script>
<script src="/js/animated.headline.js"></script>
<script src="/js/sticky-kit.min.js"></script>
<script src="/js/main.js"></script>
</body>
</html>
