<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Hesham Jabr - Research shows Windows updates can take six hours to complete</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="./../images/favicon.png" />
    <link rel="stylesheet" href="./../css/animate.css" />
    <link rel="stylesheet" href="./../css/et-lineicons.css" />
    <link rel="stylesheet" href="./../css/themify-icons.css" />
    <link rel="stylesheet" href="./../css/bootstrap.css" />
    <link rel="stylesheet" href="./../css/flexslider.css" />
    <link rel="stylesheet" href="./../css/style.css" />
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
                <li><a href="{{ route('page.home') }}">Home</a></li>
                <li><a href="{{ route('page.why') }}">Why ICT</a></li>
                <li><a href="{{ route('page.profile') }}">Profile</a></li>
                <li><a href="{{ route('page.dashboard') }}">Dashboard</a></li>
                <li><a href="{{ route('page.blog') }}">Blog</a></li>
                <li><a href="{{ route('page.faq') }}">FAQ</a></li>
            </ul>
        </nav>
    </aside>
    <!-- Main Section -->
    <!-- Main Section -->
    <div id="addo-main">
        <div class="addo-projects">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12"> <span class="heading-meta">Blog</span>
                        <h2 class="addo-post-heading">{{ $post->title }}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 image-content animate-box" data-animate-effect="fadeInUp">
                        <img src="{{ $post->image }}" class="img-fluid mb-30" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                        {!! nl2br($post->body) !!}
                    </div>
                </div>


            </div>
        </div>
</div>
<!-- Js -->
<script src="./../js/jquery.min.js"></script>
<script src="./../js/modernizr-2.6.2.min.js"></script>
<script src="./../js/jquery.easing.1.3.js"></script>
<script src="./../js/bootstrap.min.js"></script>
<script src="./../js/jquery.waypoints.min.js"></script>
<script src="./../js/jquery.flexslider-min.js"></script>
<script src="./../js/animated.headline.js"></script>
<script src="./../js/sticky-kit.min.js"></script>
<script src="./../js/main.js"></script>
</body>
</html>
