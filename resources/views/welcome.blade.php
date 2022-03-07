@extends('layout')
@section('content')
    <div id="home" class="section">
        <div class="addo-hero js-fullheight">
            <!-- Slider -->
            <div class="flexslider js-fullheight">
                <ul class="slides">
                    <li style="background-image: url(./images/background.jpeg)">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 js-fullheight slider-text">
                                    <div class="slider-text-inner">
                                        <div class="desc">
                                            <div class="image_wrap">
                                                <img src="./images/hesham.jpeg" alt="" />
                                            </div>
                                            <h1>HESHAM JABR</h1>
                                            <h2 class="cd-headline clip">
                                                <span>I'm</span>
                                                <span class="cd-words-wrapper">
                                 <b class="is-visible"
                                 >&nbsp;student at HZ University</b
                                 >
                                 </span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
