@extends('front.layouts.app')

@push('custom-style')
    <link rel="stylesheet" href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front/home.css') }}">
@endpush

@section('content')
<main class="home-container">
    <div class="video-container">
        <span class="overlay"></span>
        <video width="100%" autoplay muted="false" loop id="myVideo">
            <source src="{{ asset('images/front/home/videoplayback.mp4') }}" type="video/mp4">
                Your browser does not support HTML5 video.
        </video>
        <!-- <img width="100%" src="{{ asset('images/front/home/1.png') }}" alt=""> -->
        <div class="container">
                <div class="video-content">
                <h2>Your Partner In<br /> Manufacturing Amazing<br /> Nutraceuticals</h2>
                <p>GS stands for Gummy Specialists. Our team is committed to assisting you in scaling up your vitamin manufacturing business in the most efficient way possible.</p>
                <a href="{{ route('supplement_manufacturing') }}" class="btn common-btn">About Our Facilities<i class="ti ti-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="labels-wrapper">
        <div class="container">
            <div class="labels-block">
                <div class="item">
                    <i class="fas fa-industry-alt"></i>
                    <h2>Custom Manufacturing</h2>
                    <p>Looking for a manufacturer because custom manufacturing is intense for you? Well, we are here to take care of everything for you from formulation to encapsulation. Our team of experienced professionals work around the clock to make sure the highest quality is achieved.</p>
                </div>
                <div class="item">
                    <i class="far fa-cart-plus"></i>
                    <h2>Private Label Products</h2>
                    <p>Manufacturing custom vitamins can be a work-intense job. From formulation to sourcing to encapsulation; we can take care of everything for you at the highest quality achievable.</p>
                </div>
                <div class="item">
                    <i class="far fa-box-full"></i>
                    <h2>Stunning Packaging</h2>
                    <p>Packaging plays an important role in the entire supply chain – from the product to the consumer.At Gummy Specialist, we are well known for our premium-quality packaging. Our product packaging whether it be bottles, labels, lids, boxes, etc. are also designed with the customer in mind, using unique designs to give the customer that little extra to draw them into purchasing a Gummy Specialists product.</p>
                </div>
                <div class="item">
                    <i class="far fa-calendar-check"></i>
                    <h2>Order Fulfillment & Customer Service</h2>
                    <p>Our team of experienced professionals ensures a smooth operation for your product so you can have time to grow your business. The Gummy Specialist team is always available to provide the best in customer support. We strive to fulfill the needs of every customer. Please email us directly.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="capabilities-wrapper">
        <div class="container">
            <div class="capabilities">
                <div class="content-block">
                    <h2>Our Capabilities</h2>
                    <p>We're the gummy specialists!</p>
                    <p>Gummy Specialist is an industry leader in providing innovative and high-quality private label gummies. We have never compromised with quality since the day we opened our doors for business. We have been able to create innovative and high-quality gummies for our customers, which has given us the opportunity to grow into one of the most successful companies in this industry.</p>
                    <p>We have a team of certified R&D professionals, who are committed to coming up with new recipes and flavors for you to enjoy!</p>
                    <a href="{{ route('supplement_manufacturing') }}" class="btn common-btn">Learn More About Our Facilities<i class="ti ti-arrow-right"></i></a>
                </div>
                <div class="slider">
                    <!-- Swiper -->
                    <div class="swiper capabilitiesSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                            <img src="{{ asset('images/front/home/Our capabilities 1000 667-01.jpg') }}" />
                            </div>
                            <div class="swiper-slide">
                            <img src="{{ asset('images/front/home/Our capabilities 1000 667-02.jpg') }}" />
                            </div>
                            <div class="swiper-slide">
                            <img src="{{ asset('images/front/home/Our capabilities 1000 667-03.jpg') }}" />
                            </div>
                            <div class="swiper-slide">
                            <img src="{{ asset('images/front/home/Our capabilities 1000 667-04.jpg') }}" />
                            </div>
                            <div class="swiper-slide">
                            <img src="{{ asset('images/front/home/Our capabilities 1000 667-05.jpg') }}" />
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
                <h2>Our Manufacturer’s Products Can Be Found On The Largest Networks</h2>
                <p>Gummy Specialists has been covered by some of the top networks as a result of our hard work and commitment. Gummy Specialists is committed to providing our clients with the most up-to-date information and high-quality supplements. We are grateful for the acknowledgement of our work!</p>
                <p>Gummy Specialists has been featured on the following networks:</p>
                <div class="image-block second">
                    <img src="{{ asset('images/front/home/01.png') }}" alt="">
                    <img src="{{ asset('images/front/home/02.png') }}" alt="">
                    <img src="{{ asset('images/front/home/03.png') }}" alt="">
                    <img src="{{ asset('images/front/home/05.png') }}" alt="">
                </div>
                <h2>Gummy Specialists Products Can Be Found In The Biggest Retailers & On The Largest Networks</h2>
                <p>Gummy Specialists is delighted to partner with a variety of excellent brands that are available on some of the best marketplaces in the world, including Walmart, Target, The Vitamin Shoppe, GNC, and others!</p>
                <p>With Gummy Specialists as your partner, you can build your brand and offer your supplements to these huge merchants!</p>
                <div class="image-block second">
                    <img src="{{ asset('images/front/home/0-01.png') }}" alt="">
                    <img src="{{ asset('images/front/home/0-03.png') }}" alt="">
                    <img src="{{ asset('images/front/home/0-06.png') }}" alt="">
                    <img src="{{ asset('images/front/home/0-07.png') }}" alt="">
                    <img src="{{ asset('images/front/home/0-09.png') }}" alt="">
                    <img src="{{ asset('images/front/home/0-10.png') }}" alt="">
                    <img src="{{ asset('images/front/home/0-11.png') }}" alt="">
                    <img src="{{ asset('images/front/home/0-12.png') }}" alt="">
                    <img src="{{ asset('images/front/home/0-14.png') }}" alt="">
                    <img src="{{ asset('images/front/home/0-15.png') }}" alt="">
                    <img src="{{ asset('images/front/home/a-01.png') }}" alt="">
                    <img src="{{ asset('images/front/home/a-02.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="request-quote">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-center flex-column w-100">
                    <h2>Request A Custom Quote</h2>
                    <p>Fill out our "get a custom quote" form and we'll send you a custom price quote so you can start making your nutraceutical supplements.</p>
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('request_quote') }}" class="btn common-btn">Get a Custom Quote<i class="ti ti-arrow-right"></i></a>
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
    <div class="gummy-manufacturing-wrapper">
        <div class="overlay"></div>
        <div class="container">
            <div class="manufacturing">
                <div class="content-block">
                    <h2>Gummy Vitamin Manufacturing</h2>
                    <p>Stick to gummy vitamins which are created with natural sweeteners. You can choose the size and can even get them personalized based on your target audience when you purchase gummy vitamins from us. It is incredibly simple, and our experienced staffs are here to help you. With the gummies we offer, you can get the right kind for your preferences and also at the best price and the fastest lead time. As your partner, we are always ready to deliver the products to you as soon as possible.</p>
                    <h3>Ingredient Blending</h3>
                    <h3>Mixing & Cooling</h3>
                    <h3>Molding</h3>
                    <h3>Cooling & Unmolding</h3>
                    <h3>Bottle/Bag Filling</h3>
                </div>
                <div class="video-block">
                    <div class="video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/_noXRmaHGBw?controls=0&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <a href="{{ route('product.type', 'gummy') }}" class="btn common-btn">Stock Gummy Vitamin Products<i class="ti ti-arrow-right"></i></a>
                    <a href="{{ route('gummy_vitamin_manufacturing') }}" class="btn common-btn">Custom Gummy Vitamin Manufacturing<i class="ti ti-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="softgel-manufacturing-wrapper">
        <div class="overlay"></div>
        <div class="container">
            <div class="manufacturing">
                <div class="content-block">
                    <h2>Softgel Manufacturing</h2>
                    <p>Nutraceutical Softgels are our specialty. We use industry-leading technologies to formulate softgels for your target audience. Our premium quality softgels have many desirable properties and several advantages. Our experienced staffs are here to provide you with the most elegant, effective & efficient way to achieve your branding goals. Our softgels are available in a range of delicious flavors, textures, and sizes, making them an attractive, convenient way to deliver your supplement to your target audience. We strive to be the best as your partner.</p>
                    <h3>Fill Material Prep</h3>
                    <h3>Gelatin Filling & Encapsulation</h3>
                    <h3>Tumble Drying</h3>
                    <h3>Drying Tunnel</h3>
                    <h3>Cleaning & Final Inspection</h3>
                </div>
                <div class="video-block">
                    <div class="video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/pkS-QKa1jCY?controls=0&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <a href="{{ route('product.type', 'softgel') }}" class="btn common-btn">Stock Softgel Products<i class="ti ti-arrow-right"></i></a>
                    <a href="{{ route('softgel_manufacturing') }}" class="btn common-btn">Custom Softgel Manufacturing<i class="ti ti-arrow-right"></i></a>
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
                    <h3>Check out our amazing Private Label Supplements that are currently in stock!</h3>
                </div>
                <div class="stock-right">
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('product.list') }}" class="btn common-btn">See All Current Stock Products<i class="ti ti-arrow-right"></i></a>
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
                        <p>We have a large number of already manufactured supplement products in stock in our warehouse, ready for you to label. On our website, we have a genuine catalog that is updated nearly every day! Check out our private label supplement range. We also provide free samples of each stock supplement so you can check it out before investing in it for your business.</p>
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
                            </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                                </div>
                            <a href="{{ route('product.list') }}" class="btn common-btn">See Our Private Label Stock Supplements<i class="ti ti-arrow-right"></i></a>
                        </div>
                    </div>
                <div class="product-block">
                    <h2>Our New Private Label Stock Products</h2>
                    <p>We're constantly adding new products, so stay up to speed on our most recent releases to obtain them before the others!</p>
                    <div class="product-wrapper">
                        @foreach($pre_manufactured_swiper as $item)
                        <div class="item">
                          @foreach($item['images'] as $image)
                          @if($image->is_cover_image)
                          <div class="products-thumbnail">
                              <a href="{{ route('product.details', $item->slug) }}">
                              <img src="{{ asset($image->image_sm) }}" alt="{{ $item->name }}">
                              </a>
                          </div>
                          @endif
                          @endforeach
                            <div class="products-description">
                                <a href="{{ route('product.details', $item->slug) }}">
                                    <p>{{ $item->name }}</p>
                                </a>
                                <div class="order-btn">
                                    <a href="{{ route('product.details', $item->slug) }}?order=true" class="btn common-btn">Order</a>
                                </div>
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
