<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Hesham Jabr - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="./images/favicon.png" />
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
        <div id="home" class="section">
            <!-- About Section -->
            <div id="about" class="section">
                <div class="addo-about">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <span class="heading-meta">Information</span>
                                <h2
                                    class="addo-heading animate-box"
                                    data-animate-effect="fadeInLeft"
                                >
                                    Dashboard
                                </h2>
                            </div>
                        </div>
                        <div class="row">
                            <div
                                class="col-md-12 animate-box"
                                data-animate-effect="fadeInLeft"
                            >
                                <table width="100%">
                                    <tr>
                                        <th>Quartile</th>
                                        <th>Course</th>
                                        <th>EC</th>
                                        <th>Exam</th>
                                        <th>Grade</th>
                                        <th>EC got (NBSA boundary= 45EC )</th>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">1</td>
                                        <td>Programme and Career Orientation</td>
                                        <td>2,5 EC</td>
                                        <td>assesment</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>computer Science Basics</td>
                                        <td>5 EC</td>
                                        <td>Writing exam</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>programming Basics</td>
                                        <td>5EC</td>

                                        <td>Case study exam</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">2</td>
                                        <td rowspan="2">Object Oriented programming</td>
                                        <td rowspan="2">10 EC</td>
                                        <td>case Study</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>project</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="4">3</td>
                                        <td>Framework development</td>
                                        <td>5EC</td>
                                        <td>Case Study</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">Framework Project 1</td>
                                        <td rowspan="3">7,5EC</td>
                                        <td>project</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>assesment</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Report</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">4</td>
                                        <td rowspan="2">framework Project 2</td>
                                        <td rowspan="2">10 EC</td>
                                        <td>project</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>assesment</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">The entire year</td>
                                        <td>portflio</td>
                                        <td>12,5 EC</td>
                                        <td>portfolio</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>personality 2</td>
                                        <td>2,5 EC</td>
                                        <td>attend</td>
                                        <td></td>

                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>personality 1</td>
                                        <td>2,5 EC</td>
                                        <td>attend</td>
                                        <td></td>

                                        <td rowspan="2"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
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
