@extends('layout')
<div id="addo-main">
    <!-- Home Section -->
    <div id="home" class="section">
        <!-- News Section -->
        <div id="news" class="section">
            <div class="addo-blog">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <span class="heading-meta">FAQs</span>
                            <h2
                                class="addo-heading animate-box"
                                data-animate-effect="fadeInLeft"
                            >
                                Frequently Asked Questions
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($faq as $faq)
                            <div class="col-md-6 col-sm-6">
                                <div
                                    class="blog-entry animate-box"
                                    data-animate-effect="fadeInLeft"
                                >
                                    <div class="desc">
                                        <h3>
                                            {{ $faq->question }}
                                        </h3>
                                        <p>
                                            {{ $faq->answer }}
                                        </p>
                                        <p>
                                            @if ($faq->link)
                                                <a href="{{ $faq->link }}" target="_blank">Read more ..</a>
                                            @endif
                                        </p>
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
