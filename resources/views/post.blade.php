@extends('layout')

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
