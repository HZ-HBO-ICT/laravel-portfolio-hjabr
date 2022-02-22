<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Hesham Jabr - Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <link rel="stylesheet" href="./css/animate.css" />
    <link rel="stylesheet" href="./css/et-lineicons.css" />
    <link rel="stylesheet" href="./css/themify-icons.css" />
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <link rel="stylesheet" href="./css/flexslider.css" />
    <link rel="stylesheet" href="./css/style.css" />
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
    <div id="addo-main">
        <!-- Home Section -->

        <div id="news" class="section">
            <div class="addo-blog">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12"> <span class="heading-meta">Read</span>
                            <h2 class="addo-heading">Blog</h2> </div>
                    </div>
                    <div class="row">

                        @foreach($posts as $post)

                            <div class="col-md-6 col-sm-6">
                                <div class="blog-entry animate-box" data-animate-effect="fadeInUp">
                                    <a href="{{ route('page.blog.post', $post->id) }}" class="blog-img"><img src="{{ $post->image }}" class="img-fluid" alt=""></a>
                                    <div class="desc">
                                        <h3><a href="{{ route('page.blog.post', $post->id) }}">{{ $post->title }}</a></h3>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>




    </div>
</div>
<!-- Js -->
<script src="./js/jquery.min.js"></script>
<script src="./js/modernizr-2.6.2.min.js"></script>
<script src="./js/jquery.easing.1.3.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/jquery.waypoints.min.js"></script>
<script src="./js/jquery.flexslider-min.js"></script>
<script src="./js/animated.headline.js"></script>
<script src="./js/sticky-kit.min.js"></script>
<script src="./js/main.js"></script>
</body>
</html>
