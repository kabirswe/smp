
@extends('front.layouts.app')
@push('custom-style')
    <link rel="stylesheet" href="{{ asset('css/front/blog-details.css') }}">
@endpush
@section('content')
<main class="blog-details-container">
        <div class="man_intro_cont">
            <h1>{{ $post->title }}</h1>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">gummyspecialists.com | Your Premier Private Label Supplement Manufacturer</a><i class="ti ti-arrow-right"></i></li>
                <li class="breadcrumb-item active" aria-current="page">Donates 1,000 Vitamin D3 Bottles for COVID Relief!</li>
            </ol>
            </nav>
        </div>
    <div class="mail-blog">
        <div class="container">
            <div class="blog-content-area">
                <div class="blog-content">                
                    <div class="blog-item">
                        <img src="{{ asset($post->cover_image_md) }}" alt="">                      
                        <p>{{ $post->description }}</p>
                    </div>
                    <!-- <div class="about-author">
                        <div class="author-box">
                            <div class="author-img">
                                <img src="{{ asset('images/front/authr-image.png') }}" alt="">
                            </div>
                            <div class="description">
                                <h3>Will Cartwright</h3>
                                <p>Will is a Co-Founder of Gummy Specialists, founder of GetKnownPros, and owns a handful of supplement brands. Will has extensive knowledge of trends in the nutraceutical industry after contract-manufacturing for hundreds of brands. Will has spent the last decade learning the best online marketing & brand-building techniques for supplement & vitamin brands and enjoys sharing this unique knowledge with his nutra-entrepreneur community.</p>
                                <div class="comment-link">
                                    <a href="#">Learn More About Will Here</a><br>
                                    <a href="#">Connect With Me On LinkedIn</a><br>
                                    <a href="#">Work Together With Me On Your Nutra Marketing</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="comments-block">
                        @foreach($comments as $comment)
                        <h3>{{$comment->name}}</h3>
                        <span>{{$comment->created_at}}</span>
                        <p>{{$comment->comment}}</p>
                        @endforeach                        
                    </div>
                    <div class="reply-form">
                        <div class="comment-reply">
                            <h3>Leave a Reply</h3>
                            <p>Your email address will not be published. Required fields are marked *</p>
                        </div>
                        <form action="{{ route('post_comment.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <textarea class="form-control textarea-height" name="comment" placeholder="Comment" required></textarea>
                            <div class="custom-form">
                                <div class="input-name">
                                    <input type="text" name="name" class="form-control" placeholder="Name*" required></input>
                                </div>
                                <div class="input-email">
                                    <input type="email" name="email" class="form-control" placeholder="Email*" required></input>
                                </div>
                                <div class="input-web">
                                    <input type="text" name="website"   class="form-control" placeholder="Website" required></input>
                                </div>
                            </div>
                            <div class="custom-checkbox">
                                <input type="checkbox" name="radio_two" value="Save" class="custom-control-input" id="checkout-create-ac"></input>
                                <label for="checkout-create-ac">Save my name, email, and website in this browser for the next time I comment.</label>
                            </div>
                            <div class="product-gallery-btn">
                                <!-- <a href="#" type="submit" class="btn">Post Comment</a> -->
                                <button type="submit" class="btn common-btn btn-lg btn-block">Post Comment</button>
                            </div>
                        </form>
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
                                <a href="#">All Stock Private Label Supplements</a>
                                <a href="#">Beauty</a>
                                <a href="#">Best Sellers</a>
                                <a href="#">Bone</a>
                                <a href="#">Capsules</a>
                                <a href="#">Collagen</a>
                                <a href="#">Elderberry</a>
                                <a href="#">Essential Vitamins</a>
                                <a href="#">Fish Oil</a>
                                <a href="#">Gummy Vitamins</a>
                                <a href="#">Hair Skin & Nails</a>
                                <a href="#">Herbal</a>
                                <a href="#">Joint Health</a>
                                <a href="#">Keto</a>
                                <a href="#">Kids</a>
                                <a href="#">Liquids</a>
                                <a href="#">New Products</a>
                                <a href="#">Non-GMO Verified</a>
                                <a href="#">Powders</a>
                                <a href="#">Sample Ready Products</a>
                                <a href="#">Softgels</a>
                                <a href="#">Sports Nutrition</a>
                                <a href="#">Sugar-Free</a>
                                <a href="#">Weight Management</a>
                                <a href="#">Wellness</a>
                                <a href="#">Packaging</a>
                                <a href="#">Uncategorized</a>
                            </div>
                        </div>
                    </div>
                    <div class="recent-posts">
                        <h3>recent posts</h3>
                        <div class="block">
                            <div class="item">
                                <a href="#">Gummy Specialists Donates 1,000 Vitamin D3 Bottles for COVID Relief!</a>
                                <a href="#">New Nutrition Labels Best Practices & Rules in 2020</a>
                                <a href="#">Gummy Specialists Donates 1,000 Vitamin D3 Bottles for COVID Relief!</a>
                                <a href="#">New Nutrition Labels Best Practices & Rules in 2020</a>
                                <a href="#">Capsules</a>
                            </div>
                        </div>
                    </div>
                    <div class="archives">
                        <h3>archives</h3>
                        <div class="block">
                            <div class="item">
                                <a href="#">October 2020</a>
                                <a href="#">September 2020</a>
                                <a href="#">August 2020</a>
                                <a href="#">August 2020</a>
                                <a href="#">August 2020</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="container-fluid">

        </div>           -->
        <div class="nearby_posts">
            <div class="nav_previous">
                <img src="{{ asset('images/front/previous-img.jpg') }}" alt="">
                <div class="man_nav_over"></div>
                <div class="man_nav_txt">
                    <span><i class="ti ti-arrow-left"></i>Previous</span>
                    <h3>How To Be A Supplement Rep For The Best Brands?</h3>
                </div>
            </div>
            <div class="nav_next">
                <div class="man_nav_over"></div>
                <div class="man_nav_txt">
                    <h3>Gummy Specialists Donates 1,000 Vitamin D3 Bottles for COVID Relief!</h3>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
