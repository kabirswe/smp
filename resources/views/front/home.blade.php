@extends('front.layouts.app')

@push('custom-style')
    <link rel="stylesheet" href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}">
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
                <a href="https://info.smpnutra.com/quote" class="btn common-btn">About Our Facilities<i class="ti ti-arrow-right"></i></a>
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
    <div class="capabilities-wrapper">
        <div class="container">
            <div class="capabilities">
                <div class="content-block">
                    <p>About Us</p>
                    <h2>Our Capabilities</h2>
                    <p>SMP stands for “Supplement Manufacturing Partner”. This is important to us because we look at every single business we manufacture for as Partners. This means we are dedicated towards your long-term success from the very beginning. We ensure your product formula will be market-competitive, packaging stands out from the pack and your product is safely stored & orders shipped out quickly. We only profit from returning customers who are successfully selling. It’s our job to do everything possible to help you achieve that.</p>
                    <a href="https://info.smpnutra.com/quote" class="btn common-btn">Learn More About Our Facilities<i class="ti ti-arrow-right"></i></a>
                </div>
                <div class="slider">
                    <!-- Swiper -->
                    <div class="swiper capabilitiesSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                            </div>
                            <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                            </div>
                            <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                            </div>
                            <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="network-wrapper">
        <div class="container">
            <div class="network">
                <h2>We Can Be Found On The Largest Networks</h2>
                <p>Through our hard work and determination, SMP Nutra has been covered by some of the largest networks. SMP Nutra is dedicated to bringing the most information and quality supplements to our clients. We are thankful to have been recognized for our efforts! Some of the networks that have covered SMP Nutra: </p>
                <div class="image-block">
                    <img src="https://smpnutra.com/wp-content/uploads/2021/01/Fox-news-logo-150x150.png" alt="">
                    <img src="https://smpnutra.com/wp-content/uploads/2021/01/imageedit_71_9654148642.png" alt="">
                    <img src="https://smpnutra.com/wp-content/uploads/2021/01/imageedit_55_6295447750.png" alt="">
                    <img src="https://smpnutra.com/wp-content/uploads/2021/01/CBS-Logo-1536x744.png" alt="">
                </div>
                <h2>Our Clients Can Be Found In The Biggest Retailers & On The Largest Networks</h2>
                <p>SMP Nutra proudly works with numerous amazing brands that are on some of the best marketplaces around, including Walmart, Target, The Vitamin Shoppe, GNC, and more!
                Build your brand and bring your supplements to these large retailers with SMP as your partner!</p>
                <div class="image-block second">
                    <img src="https://smpnutra.com/wp-content/uploads/2021/01/Fox-news-logo-150x150.png" alt="">
                    <img src="https://smpnutra.com/wp-content/uploads/2021/01/imageedit_71_9654148642.png" alt="">
                    <img src="https://smpnutra.com/wp-content/uploads/2021/01/imageedit_55_6295447750.png" alt="">
                    <img src="https://smpnutra.com/wp-content/uploads/2021/01/CBS-Logo-1536x744.png" alt="">
                    <img src="https://smpnutra.com/wp-content/uploads/2021/01/Fox-news-logo-150x150.png" alt="">
                    <img src="https://smpnutra.com/wp-content/uploads/2021/01/imageedit_71_9654148642.png" alt="">
                    <img src="https://smpnutra.com/wp-content/uploads/2021/01/imageedit_55_6295447750.png" alt="">
                    <img src="https://smpnutra.com/wp-content/uploads/2021/01/CBS-Logo-1536x744.png" alt="">
                    <img src="https://smpnutra.com/wp-content/uploads/2021/01/Fox-news-logo-150x150.png" alt="">
                    <img src="https://smpnutra.com/wp-content/uploads/2021/01/imageedit_71_9654148642.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="request-quote">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-center flex-column w-100">
                    <h2>Request A Price Quote</h2>
                    <p>Fill out our “request a quote” form so we we can give you a custom price quote to get started with manufacturing your neutraceutical supplements.</p>
                    <div class="d-flex justify-content-center">
                        <a href="https://info.smpnutra.com/quote" class="btn">Get a Custom Quote<i class="ti ti-arrow-right"></i></a>
                    </div>
                    <p class="call-us">Or call us at <strong>(833) 810-9896</strong></p>
                </div>
            </div>
        </div>
    </div>
    <div class="manufacturing-wrapper">
        <div class="overlay"></div>
        <div class="container">
            <div class="manufacturing">
                <div class="content-block">
                    <h2>Capsule Manufacturing</h2>
                    <p>Capsules are a great encapsulation form to hold powder or pellet blends. The shell can be made to specific design such as being made out of gelatin or a more vegetarian-friendly formulation. Your powder ingredient formula is encapsulated inside each capsule to create your complete capsule product.</p>
                    <h3>Capsules Made With Natural Excipients</h3>
                    <h3>Wet Granulation Process</h3>
                    <h3>Dry Granulation Process</h3>
                    <h3>Vegetarian Capsule Options</h3>
                    <h3>Capsule Filling</h3>
                </div>
                <div class="video-block">
                    <div class="video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/G1nZNpPBz1o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <a href="https://info.smpnutra.com/quote" class="btn common-btn">Stock Capsule Products<i class="ti ti-arrow-right"></i></a>
                    <a href="https://info.smpnutra.com/quote" class="btn common-btn">Custom Capsule Manufacturing<i class="ti ti-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="pre-manufactured-wrapper">
        <div class="overlay"></div>
        <div class="container">
            <div class="pre-manufactured">
                <div class="top-block">
                    <div class="content-block">
                        <h2>Pre-Manufactured In-Stock Private Label Formulas Available</h2>
                        <p>We have many in-stock already manufactured supplement products in our warehouse, ready for you label to be put on. We have real-time catalog on our website updated everyday! Check to see our inventory of private label supplements. We also offer samples of every stock supplement for you to try before investing the product into your brand.</p>
                    </div>
                    <div class="slider-block">
                        <div class="slider">
                            <!-- Swiper -->
                            <div class="swiper preManufacturedSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="https://smpnutra.com/wp-content/uploads/2022/01/Kids-4-in-1-Quercetin-Gummies-1-300x300.png" alt=""></div>
                                <div class="swiper-slide"><img src="https://smpnutra.com/wp-content/uploads/2021/12/Multicollagen-Turmeric-Capsules-100948-1-300x300.png" alt=""></div>
                                <div class="swiper-slide"><img src="https://smpnutra.com/wp-content/uploads/2022/01/Kids-4-in-1-Quercetin-Gummies-1-300x300.png" alt=""></div>
                                <div class="swiper-slide"><img src="https://smpnutra.com/wp-content/uploads/2021/12/Multicollagen-Turmeric-Capsules-100948-1-300x300.png" alt=""></div>
                                <div class="swiper-slide"><img src="https://smpnutra.com/wp-content/uploads/2022/01/Kids-4-in-1-Quercetin-Gummies-1-300x300.png" alt=""></div>
                                <div class="swiper-slide"><img src="https://smpnutra.com/wp-content/uploads/2021/12/Multicollagen-Turmeric-Capsules-100948-1-300x300.png" alt=""></div>
                                <div class="swiper-slide"><img src="https://smpnutra.com/wp-content/uploads/2022/01/Kids-4-in-1-Quercetin-Gummies-1-300x300.png" alt=""></div>
                                <div class="swiper-slide"><img src="https://smpnutra.com/wp-content/uploads/2021/12/Multicollagen-Turmeric-Capsules-100948-1-300x300.png" alt=""></div>
                                <div class="swiper-slide"><img src="https://smpnutra.com/wp-content/uploads/2022/01/Kids-4-in-1-Quercetin-Gummies-1-300x300.png" alt=""></div>
                                <div class="swiper-slide"><img src="https://smpnutra.com/wp-content/uploads/2021/12/Multicollagen-Turmeric-Capsules-100948-1-300x300.png" alt=""></div>
                                <div class="swiper-slide"><img src="https://smpnutra.com/wp-content/uploads/2022/01/Kids-4-in-1-Quercetin-Gummies-1-300x300.png" alt=""></div>
                                <div class="swiper-slide"><img src="https://smpnutra.com/wp-content/uploads/2021/12/Multicollagen-Turmeric-Capsules-100948-1-300x300.png" alt=""></div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <a href="https://info.smpnutra.com/quote" class="btn common-btn">See Our Private Label Stock Supplements<i class="ti ti-arrow-right"></i></a>
                    </div>
                </div>
                <div class="product-block">
                    <h2>Our New Private Label Stock Products</h2>
                    <p>We are always formulating new products, stay up to date with our latest products to get them before anyone else! </p>
                    <div class="product-wrapper">
                        <div class="item"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@push('custom-scripts')
    <!-- Scripts -->
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <!-- <script src="{{ asset('js/admin/main.js') }}"></script> -->
    <script>
      new Swiper(".capabilitiesSwiper", {
        effect: "fade",
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
      });
      new Swiper(".preManufacturedSwiper", {
        slidesPerView: 6,
        spaceBetween: 10,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
@endpush
