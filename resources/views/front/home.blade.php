@extends('front.layouts.app')

@push('custom-style')
    <link rel="stylesheet" href="{{ asset('css/front/home.css') }}">
@endpush

@section('content')
<main class="home-container">
    <div class="video-container">
        <span class="overlay"></span>
        <video width="100%" autoplay muted loop id="myVideo">
            <source src="{{ asset('images/front/home/videoplayback.mp4') }}" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        <!-- <img width="100%" src="{{ asset('images/front/home/1.png') }}" alt=""> -->
        <div class="container">
                <div class="video-content">
                <h2>Your Partner In<br /> Manufacturing Amazing<br /> Nutraceuticals</h2>
                <p>SMP stands for Supplement Manufacturing Partners. Our team is dedicated to be your partner in most efficiently manufacturing your growing vitamin business to scale.</p>
                <a href="https://info.smpnutra.com/quote" class="btn">About Our Facilities<i class="ti ti-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="labels-wrapper">
        <div class="container">
            <div class="labels-block">
                <div class="item">
                    <i class="ti ti-layout-media-left-alt"></i>
                    <h2>Custom Manufacturing</h2>
                    <p>Manufacturing custom vitamins can be a work-intense job. From formulation to sourcing to encapsulation; we can take care of everything for you at the highest quality achievable.</p>
                </div>
                <div class="item">
                    <i class="ti ti-shopping-cart"></i>
                    <h2>Stock Private Label</h2>
                    <p>Manufacturing custom vitamins can be a work-intense job. From formulation to sourcing to encapsulation; we can take care of everything for you at the highest quality achievable.</p>
                </div>
                <div class="item">
                    <i class="ti ti-package"></i>
                    <h2>Impressive Packaging</h2>
                    <p>Manufacturing custom vitamins can be a work-intense job. From formulation to sourcing to encapsulation; we can take care of everything for you at the highest quality achievable.</p>
                </div>
                <div class="item">
                    <i class="ti ti-agenda"></i>
                    <h2>Fulfillment & Customer Service</h2>
                    <p>Manufacturing custom vitamins can be a work-intense job. From formulation to sourcing to encapsulation; we can take care of everything for you at the highest quality achievable.</p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@push('custom-scripts')
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/admin/main.js') }}"></script> -->
@endpush
