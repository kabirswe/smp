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
                <p>GS stands for Gummy Specialists. Our team is dedicated to be your partner in most efficiently manufacturing your growing vitamin business to scale.</p>
                <a href="#" class="btn common-btn">About Our Facilities<i class="ti ti-arrow-right"></i></a>
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
                    <p>GS stands for “Gummy Specialists”. This is important to us because we look at every single business we manufacture for as Partners. This means we are dedicated towards your long-term success from the very beginning. We ensure your product formula will be market-competitive, packaging stands out from the pack and your product is safely stored & orders shipped out quickly. We only profit from returning customers who are successfully selling. It’s our job to do everything possible to help you achieve that.</p>
                    <a href="#" class="btn common-btn">Learn More About Our Facilities<i class="ti ti-arrow-right"></i></a>
                </div>
                <div class="slider">
                    <!-- Swiper -->
                    <div class="swiper capabilitiesSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                            <img src="{{ asset('wp-content/uploads/2019/07/laboratory1.jpg') }}" />
                            </div>
                            <div class="swiper-slide">
                            <img src="{{ asset('wp-content/uploads/2020/03/shutterstock_1049657894.jpg') }}" />
                            </div>
                            <div class="swiper-slide">
                            <img src="{{ asset('wp-content/uploads/2020/03/shutterstock_250505101.jpg') }}" />
                            </div>
                            <div class="swiper-slide">
                            <img src="{{ asset('wp-content/uploads/2019/07/laboratory2.jpg') }}" />
                            </div>
                            <div class="swiper-slide">
                            <img src="{{ asset('wp-content/uploads/2020/03/shutterstock_416042059.jpg') }}" />
                            </div>
                            <div class="swiper-slide">
                            <img src="{{ asset('wp-content/uploads/2020/03/shutterstock_412795528.jpg') }}" />
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
                <p>Through our hard work and determination, Gummy Specialists Nutra has been covered by some of the largest networks. Gummy Specialists Nutra is dedicated to bringing the most information and quality supplements to our clients. We are thankful to have been recognized for our efforts! Some of the networks that have covered Gummy Specialists</p>
                <div class="image-block second">
                    <img src="{{ asset('images/front/fe12.png') }}" alt="">
                    <img src="{{ asset('images/front/fe13.png') }}" alt="">
                    <img src="{{ asset('images/front/fe14.png') }}" alt="">
                    <img src="{{ asset('images/front/fe15.png') }}" alt="">
                </div>
                <h2>Our Clients Can Be Found In The Biggest Retailers & On The Largest Networks</h2>
                <p>Gummy Specialists Nutra proudly works with numerous amazing brands that are on some of the best marketplaces around, including Walmart, Target, The Vitamin Shoppe, GNC, and more!
                Build your brand and bring your supplements to these large retailers with Gummy Specialists as your partner!</p>
                <div class="image-block second">
                    <img src="{{ asset('images/front/fe16.png') }}" alt="">
                    <img src="{{ asset('images/front/fe17.png') }}" alt="">
                    <img src="{{ asset('images/front/fe18.png') }}" alt="">
                    <img src="{{ asset('images/front/fe19.png') }}" alt="">
                    <img src="{{ asset('images/front/fe20.png') }}" alt="">
                    <img src="{{ asset('images/front/fe21.png') }}" alt="">
                    <img src="{{ asset('images/front/fe22.png') }}" alt="">
                    <img src="{{ asset('images/front/fe23.png') }}" alt="">
                    <img src="{{ asset('images/front/fe24.png') }}" alt="">
                    <img src="{{ asset('images/front/fe25.png') }}" alt="">
                    <img src="{{ asset('images/front/fe26.png') }}" alt="">
                    <img src="{{ asset('images/front/fe27.png') }}" alt="">
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
                        <a href="#" class="btn">Get a Custom Quote<i class="ti ti-arrow-right"></i></a>
                    </div>
                    <p class="call-us">Or call us at <strong>1-833-MYGUMMY</strong></p>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="manufacturing-wrapper">
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
                    <a href="#" class="btn common-btn">Stock Capsule Products<i class="ti ti-arrow-right"></i></a>
                    <a href="#" class="btn common-btn">Custom Capsule Manufacturing<i class="ti ti-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="tablet-manufacturing-wrapper">
        <div class="overlay"></div>
        <div class="container">
            <div class="manufacturing">
                <div class="content-block">
                    <h2>Tablet Manufacturing</h2>
                    <p>Tablets are a powder ingredient formula compressed into a pill form to create a nutraceutical tablet. Tablets are capable of being compressed into your desired shape and size. One advantage of a tablet is you can fit more powder into a smaller sized pill compared to a capsule.</p>
                    <h3>Direct Compression</h3>
                    <h3>Wet Granulation Process</h3>
                    <h3>Dry Granulation Process</h3>
                    <h3>Multiple Tablet Type Options</h3>
                    <h3>Tablet Coating</h3>
                </div>
                <div class="video-block">
                    <div class="video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/G2pHsRMGrBk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <a href="#" class="btn common-btn">Stock Tablet Products<i class="ti ti-arrow-right"></i></a>
                    <a href="#" class="btn common-btn">Custom Tablet Manufacturing<i class="ti ti-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div> -->
    <div class="softgel-manufacturing-wrapper">
        <div class="overlay"></div>
        <div class="container">
            <div class="manufacturing">
                <div class="content-block">
                    <h2>Softgel Manufacturing</h2>
                    <p>Softgels are able to have its shape, color, and size customized to however you please. Softgels offer encapsulation of liquids, instead of powder which can lead to increased absorbability.</p>
                    <h3>Fill Material Prep</h3>
                    <h3>Gelatin Filling & Encapsulation</h3>
                    <h3>Tumble Drying</h3>
                    <h3>Drying Tunnel</h3>
                    <h3>Cleaning & Final Inspection</h3>
                </div>
                <div class="video-block">
                    <div class="video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/G1nZNpPBz1o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <a href="#" class="btn common-btn">Stock Softgel Products<i class="ti ti-arrow-right"></i></a>
                    <a href="#" class="btn common-btn">Custom Softgel Manufacturing<i class="ti ti-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="gummy-manufacturing-wrapper">
        <div class="overlay"></div>
        <div class="container">
            <div class="manufacturing">
                <div class="content-block">
                    <h2>Gummy Vitamin Manufacturing</h2>
                    <p>We are able to help you get your gummy vitamins manufactured the fastest, and with no stress. Gummy vitamins are able to have its shape, color, and size customized to however you please. Gummies are loved by children, and adults alike. It is truly great as it is typically very tasty.</h3>
                    <h3>Ingredient Blending</h3>
                    <h3>Mixing & Cooling</h3>
                    <h3>Molding</h3>
                    <h3>Cooling & Unmolding</h3>
                    <h3>Bottle/Bag Filling</h3>
                </div>
                <div class="video-block">
                    <div class="video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/G1nZNpPBz1o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <a href="#" class="btn common-btn">Stock Gummy Vitamin Products<i class="ti ti-arrow-right"></i></a>
                    <a href="#" class="btn common-btn">Custom Gummy Vitamin Manufacturing<i class="ti ti-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="powder-manufacturing-wrapper">
        <div class="overlay"></div>
        <div class="container">
            <div class="manufacturing">
                <div class="content-block">
                    <h2>Powder Manufacturing</h2>
                    <p>Powders are a very popular form of supplement. For example products such as collagen, greens powders and whey protein are very popular powder supplements. People like the ability to mix it with whatever you like.</h3>
                    <h3>Ingredient Blending</h3>
                    <h3>Free Flow Mixtures</h3>
                    <h3>Cohesive Mixtures</h3>
                    <h3>Bottle/Bag Filling</h3>
                    <h3>Container Polishing & Inspection</h3>
                </div>
                <div class="video-block">
                    <div class="video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/pzBWZNoAFMg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <a href="#" class="btn common-btn">Stock Powder Products<i class="ti ti-arrow-right"></i></a>
                    <a href="#" class="btn common-btn">Custom Powder Manufacturing<i class="ti ti-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div> -->
    <div class="stock-wrapper">
        <div class="container">
            <div class="stock-now">
                <div class="stock-left">
                    <h3>See Our Incredible Private Label Supplements In-Stock Now!</h3>
                </div>
                <div class="stock-right">
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn">See All Current Stock Products<i class="ti ti-arrow-right"></i></a>
                    </div>
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
                                @foreach($pre_manufactured_swiper as $item)
                                @foreach($item['images'] as $image)
                                @if($image->is_cover_image)
                                <div class="swiper-slide"><img src="{{ asset($image->image_sm) }}" alt="{{ $item->name }}"></div>
                                @endif
                                @endforeach
                                @endforeach
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <a href="#" class="btn common-btn">See Our Private Label Stock Supplements<i class="ti ti-arrow-right"></i></a>
                    </div>
                </div>
                <div class="product-block">
                    <h2>Our New Private Label Stock Products</h2>
                    <p>We are always formulating new products, stay up to date with our latest products to get them before anyone else! </p>
                    <div class="product-wrapper">
                        @foreach($pre_manufactured_swiper as $item)
                        <div class="item">
                          @foreach($item['images'] as $image)
                          @if($image->is_cover_image)
                          <div class="products-thumbnail">
                              <img src="{{ asset($image->image_md) }}" alt="{{ $item->name }}">
                          </div>
                          @endif
                          @endforeach
                            <div class="products-description">
                                <a href="#">
                                    <p>{{ $item->name }}</p>
                                </a>
                            </div>
                        </div>
                        @endforeach
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
