
@extends('front.layouts.app')
@push('custom-style')
    <link rel="stylesheet" href="{{ asset('css/front/blog.css') }}">
@endpush
@section('content')
<main class="main-container">
    <div class="blog-wrapper">
        <div class="man_intro_cont">
            <h1>Gummy Specialists Your Premier Private Label Supplement Manufacturer</h1>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">gummyspecialists.com | Your Premier Private Label Supplement Manufacturer</a><i class="ti ti-arrow-right"></i></li>
                <li class="breadcrumb-item active" aria-current="page">News & Research For Nutra-Brand Owners</li>
            </ol>
            </nav>
        </div>
        <div class="mail-blog">
            <div class="container">
                <div class="blog-content-area">
                    <div class="blog-content">
                            @foreach($posts as $post)
                                <div class="blog-item">
                                <div class="blog-image">
                                    <a href="{{route('blog.details', $post->slug) }}">
                                    <img src="{{ asset($post->cover_image_md) }}" alt="">
                                    </a>
                                </div>
                                <div class="blog-text">
                                    <a href="{{route('blog.details', $post->slug) }}"><h2>{{ $post->title }}</h2></a>
                                    <p>{{ $post->description }}</p>
                                    <div class="news_item_date">
                                        <span class="read-more"><a href="{{route('blog.details', $post->slug) }}"><i class="ti ti-arrow-circle-right"></i>Read More</a></span>
                                        <span class="posted-on"><i class="ti ti-time"></i><time class="entry-date published" datetime="2020-10-09T17:20:24+00:00">{{ $post->created_at }}</time></span><br>
                                        <span class="comments-link"><a href="#"><i class="ti ti-comment-alt"></i>Leave a Comment</a></span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @if (count($posts) < 1)
                                <h3>No Post Found!</h3>
                            @endif
                        <div class="man_navigation">
                            @if ($posts->previousPageUrl())
                            <a class="prev page-numbers" href="{{ $posts->previousPageUrl(); }}"><i class="ti ti-arrow-left"></i>Prev</a>
                            @endif
                            @if ($posts->nextPageUrl())
                            <a class="next page-numbers" href="{{ $posts->nextPageUrl(); }}">Next<i class="ti ti-arrow-right"></i></a>
                            @endif
                        </div>
                    </div>

                    <div class="blog-sidebar">
                        <div class="sidebar-top">
                            <img src="{{ asset('images/front/1581626444.png') }}" alt="">
                            <h5>Learn How To Generate The Best Source Of Customers For Supplement Brands!</h5>
                            <p>We put together case studies of very successful supplement brands in relation to organic search traffic. We also included a step-by-step guide so you can start building this incredible source of web traffic today!</p>
                            <a class="btn common-btn">Download Slideshow</a>
                        </div>
                        <!-- <div class="about-author">
                            <h3>ABOUT AUTHOR</h3>
                            <div class="author-box">
                                <img src="{{ asset('images/front/authr-image.png') }}" alt="">
                                <h3>Will Cartwright</h3>
                            </div>
                            <p>Will is a Co-Founder of Gummy Specialists, founder of GetKnownPros, and owns a handful of supplement brands. Will has extensive knowledge of trends in the nutraceutical industry after contract-manufacturing for hundreds of brands. Will has spent the last decade learning the best online marketing & brand-building techniques for supplement & vitamin brands and enjoys sharing this unique knowledge with his nutra-entrepreneur community.</p>
                            <div class="comment-link">
                                <a href="#">Learn More About Will Here</a>
                                <a href="#">Connect With Me On LinkedIn</a>
                                <a href="#">Work Together With Me On Your Nutra Marketing</a>
                                <a href="#">View app posts</a>
                            </div>
                        </div> -->
                        <div class="product_categories">
                            <h3>categories</h3>
                            <div class="block">
                                <div class="item">
                                    @foreach(getPostCategories() as $category)
                                        <a href="{{ route('blog') }}?category={{ $category->id }}">{{ $category->name }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="recent-posts">
                            <h3>recent posts</h3>
                            <div class="block">
                                <div class="item">
                                @foreach($latest_posts as $item)
                                    <a href="{{ route('blog.details', $item->slug) }}">{{ $item->title }}</a>
                                @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="archives">
                            <h3>archives</h3>
                            <div class="block">
                                <div class="item">
                                    <a href="{{ route('blog') }}?month={{ date('m', strtotime('-1 month')) }}">{{ date('F Y', strtotime("-1 month")) }}</a>
                                    <a href="{{ route('blog') }}?month={{ date('m', strtotime('-2 month')) }}">{{ date('F Y', strtotime("-2 month")) }}</a>
                                    <a href="{{ route('blog') }}?month={{ date('m', strtotime('-3 month')) }}">{{ date('F Y', strtotime("-3 month")) }}</a>
                                    <a href="{{ route('blog') }}?month={{ date('m', strtotime('-4 month')) }}">{{ date('F Y', strtotime("-4 month")) }}</a>
                                    <a href="{{ route('blog') }}?month={{ date('m', strtotime('-5 month')) }}">{{ date('F Y', strtotime("-5 month")) }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
