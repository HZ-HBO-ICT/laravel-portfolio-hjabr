@extends('layout')
<div id="addo-main">
    <div id="news" class="section">
        <div class="addo-blog">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <span class="heading-meta">Read</span>
                        <h2 class="addo-heading">Blog</h2>
                    </div>
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
