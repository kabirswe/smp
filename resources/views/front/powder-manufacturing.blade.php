@extends('front.layouts.app')

@push('custom-style')
    <link rel="stylesheet" href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front/powder-manufacturing.css') }}">
@endpush

@section('content')
<main class="powder-manufacturing-container">
    <div class="man_intro_cont">
		<h1>Custom Powder Manufacturing</h1>
		<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{ route('home') }}">gummyspecialists.com | Your Premier Private Label Supplement Manufacturer</a><i class="ti ti-arrow-right"></i></li>
			<li class="breadcrumb-item active" aria-current="page">Custom Powder Manufacturing</li>
		</ol>
		</nav>
	</div>
    <div class="video-container">
        <span class="overlay"></span>
        <video width="100%" autoplay muted loop id="myVideo">
            <source src="{{ asset('images/front/home/videoplayback.mp4') }}" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        <!-- <img width="100%" src="{{ asset('images/front/home/1.png') }}" alt=""> -->
        <div class="container">
            <div class="video-content">
                <h2>Your Custom<br /> Nutraceutical Powder<br /> Manufacturer</h2>
                <p>GS stands for Gummy Specialists. Our team is dedicated to be your partner in most efficiently manufacturing your growing vitamin business to scale.</p>
            </div>
        </div>
    </div>
    <div class="labels-wrapper">
        <div class="container">
            <div class="labels-block-wrapper">
                <div class="labels-block">
                    <div class="item">
                        <i class="ti ti-layout-media-left-alt"></i>
                        <h2>Blending</h2>
                        <p>Before encapsulation, your formula must be blended to ensure even distribution of ingredients in each capsule.</p>
                    </div>
                    <div class="item">
                        <i class="ti ti-shopping-cart"></i>
                        <h2>Bottle/Bag Filling</h2>
                        <p>Once all ingredients in your formula are blended, they are filled in your bottle or bag of choice. We offer amazing packaging options to fill your powder with.</p>
                    </div>
                    <div class="item">
                        <i class="ti ti-package"></i>
                        <h2>Polishing & Inspection</h2>
                        <p>Each capsule is polished of any excess powder for a clean finished look and triple inspected for any defects.</p>
                    </div>
                    <div class="item">
                        <i class="ti ti-agenda"></i>
                        <h2>Testing</h2>
                        <p>After capsules are manufactured, post-inspection, we run identity, potency, micro, and heavy metal tests to ensure pharmaceutical grade quality.</p>
                    </div>
                </div>
                <div class="labels-block-image">
                    <div class="block-image-left">
                        <img src="{{ asset('images/front/FDA-Registered-01.png') }}" alt="">
                        <div class="block-image-content">
                            <p>
                                <a>See Our FDA Registration Here</a>
                            </p>
                            <p>
                                <a>See Our FDA Regsistration Verification Here</a>
                            </p>
                        </div>
                    </div>
                    <div class="block-image-right">
                        <img src="{{ asset('images/front/good-manu.jpg') }}" alt="">
                        <div class="block-image-content">
                            <p>
                                <a>See Our FDA Registration Here</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="capabilities-wrapper">
        <div class="container">
            <div class="capabilities">
                <div class="content-block">
                    <p>Our Capabilities</p>
                    <h2>Custom Nutraceutical Powder Manufacturing</h2>
                    <p>We have capabilities to manufacture any nutraceutical powder formula. From sourcing each ingredient in your formula, to post filling inspection; we do it all at the best prices and the fastest lead times. We have the experience to help you formulate a new product for your target audience, or discuss with you how to properly scale your manufacturing. As your partner, it is our job for long-term powder manufacturing success.</p>
                    <a href="#" class="btn common-btn">Get A Custom Powder Quote<i class="ti ti-arrow-right"></i></a>
                </div>
                <div class="video-block">
                    <div class="video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/G1nZNpPBz1o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="network-wrapper">
        <div class="container">
            <div class="network">
                <h2>Custom Powder Manufacturing</h2>
                <p>We can help you get any kind of powder formula made. Getting the right team to do this is vital to success and we are more then qualified to help you efficiently and quickly for the best overall product. As your powder manufacturer, you will be more than pleased with the results.</p>
            </div>
        </div>
    </div>
    <div class="manufacturing-wrapper">
        <div class="overlay"></div>
        <div class="container">
            <div class="manufacturing">
                <div class="content-block">
                    <h2>Powder Manufacturing Process Variations</h2>
                    <p>Powder supplements are continually being optimized to support more facets of health and different activities. While there are numerous ways to blend a powder formula, you may find one that is the perfect match for your product. The process generally starts the same for all types of powders, with a measured level of ingredients and correct proportions made. The steps following this can vary. Some of the types of powder manufacturing include:</p>
                </div>
                <div class="image-block">
                    <div class="images-right">
                        <h3>Free Flowing Mixtures</h3>
                        <h3>Cohesive Mixtures</h3>
                        <h3>Ordered Mixtures</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-block">
        <div class="container">
            <div class="product-wrapper">
                <div class="item">
                    <img src="{{ asset('images/front/flowing.jpg') }}" alt="">
                    <h3>Compressed Tablets</h3>
                    <p>Compressed tablets are perhaps the most commonly seen in the nutritional supplement market. These refer to the solid, oval-sized, or round tablet that you see in many everyday vitamins. These tablets are meant to be swallowed whole without breaking down or chewing.</p>
                </div>
                <div class="item">
                    <img src="{{ asset('images/front/cohesive.jpg') }}" alt="">
                    <h3>Chewable Tablets</h3>
                    <p>Chewable nutritional supplement tablets are very popular, especially in children’s and adult vitamins. These nutritional supplements come in a chewy, gummy tablet that is chewed and broken up completely before they reach the stomach.</p>
                </div>
                <div class="item">
                    <img src="{{ asset('images/front/cohesive.jpg') }}" alt="">
                    <h3>Fast Melt Tablets</h3>
                    <p>Fast melt tablets, also known as sublingual tablets, are a little less conventional than some other types, as they involve the placement of the tablet in a specific area of the mouth (either under the tongue or against the cheek) and waiting for it to dissolve. A sublingual tablet manufacturer has to follow a different process to make their tablets specific for each blend.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="capsule-shell">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-center flex-column w-100 capsule-shell-content">
                    <h2>Manufacturing Your Powder</h2>
                    <p>his is where the primary powder particles in the powder are encouraged to attach to each other to form a larger entity known as a granule. The granulation process is done prior to compression, but it is a very vital step.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="dry-granulation-wrapper">
        <div class="overlay"></div>
        <div class="container">
            <div class="manufacturing">
                <div class="content-block">
                    <h2>Options For Everyone</h2>
                    <h4>Powder supplements can be made to the specific needs of many people. Powder supplements can be made to be:</h4>
                    <ol>
                        <li>Vegan-friendly</li>
                        <li>Soy-based</li>
                        <li>Whey-based</li>
                        <li>Pea-based</li>
                        <li>Etc.</li>
                    </ol>
                </div>
                <div class="image-block">
                    <div class="images-right">
                        <p>When specifically talking about protein powder, plant-based protein powder is typically a long-acting source of energy. What this means is for people who are dieting, they will get more energy from less food, therefore, allowing you to consume fewer calories without running out of energy. In terms of manufacturing your own plant-based protein powders, you can go with a single type of plant protein, or you can mix them.</p>
                        <p>The options are dependent on the kind of powder supplement you are formulating. This wide arrangement of options is what makes powder supplements so good and a mainstay in the industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="encapsulation-process-wrapper">
        <div class="overlay"></div>
        <div class="container">
            <div class="manufacturing">
                <div class="content-block">
                    <h2>Popular Powder: MCT Oil Powder</h2>
                    <p>MCT is short for medium-chain triglycerides. The way MCT oil powder is manufactured starts by extracting and isolating the MCT fatty acids from palm kernel oil. Followed by that, the oil that was extracted will then be sprayed with tapioca maltodextrin to form the oil into a powder. When looking for a manufacturer for your MCT oil powder, look no further as we here at Gummy Nutra can be your supplement powder manufacturer. We can manufacture any formula, and we will be the most responsive manufacturer.</p>
                </div>
                <div class="image-block">
                    <div class="images-right">
                        <img src="{{ asset('images/front/MCT-Oil-Powder.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gelatin-capsules">
        <div class="overlay"></div>
        <div class="container">
            <div class="manufacturing">
                <div class="content-block">
                    <h2>Package and Label Design Options For Powder Manufacturing</h2>
                    <h4>Your powder can be bottled in a large selection of package options.
                        <br> <br>You can view all package options here</h4>
                    <p>Our team of nutraceutical specialized graphic designers are ready to make your label look incredible and comply with all required FDA label regulations. <br> <br>Our team of nutraceutical specialized graphic designers are ready to make your label look incredible and comply with all required FDA label regulations.</p>
                </div>
                <div class="image-block">
                    <div class="images-right">
                        <img src="{{ asset('images/front/Time-Release-WheyProteinBlend.png') }}" alt="">
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
                        <h2>Check Out Our Private Label Powder Products</h2>
                        <p>Make sure to check out our stock private label powder products. There, you can see what we believe is some of the best formulas that are on a level of their own. They possibly offer a wide variety of vitamins and nutrients that may be very beneficial. We also offer other stock products and they are just as important as our collagen products, they can be viewed here.</p>
                        <a href="#" class="btn common-btn">See Our Private Label Powder Products Here<i class="ti ti-arrow-right"></i></a>
                    </div>
                    <div class="slider-block">
                        <div class="slider">
                            <!-- Swiper -->
                            <div class="swiper preManufacturedSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="{{ asset('wp-content/uploads/2022/01/Kids-4-in-1-Quercetin-Gummies-1-300x300.png') }}" alt=""></div>
                                <div class="swiper-slide"><img src="{{ asset('wp-content/uploads/2021/12/Multicollagen-Turmeric-Capsules-100948-1-300x300.png') }}" alt=""></div>
                                <div class="swiper-slide"><img src="{{ asset('wp-content/uploads/2022/01/Kids-4-in-1-Quercetin-Gummies-1-300x300.png') }}" alt=""></div>
                                <div class="swiper-slide"><img src="{{ asset('wp-content/uploads/2021/12/Multicollagen-Turmeric-Capsules-100948-1-300x300.png') }}" alt=""></div>
                                <div class="swiper-slide"><img src="{{ asset('wp-content/uploads/2022/01/Kids-4-in-1-Quercetin-Gummies-1-300x300.png') }}" alt=""></div>
                                <div class="swiper-slide"><img src="{{ asset('wp-content/uploads/2021/12/Multicollagen-Turmeric-Capsules-100948-1-300x300.png') }}" alt=""></div>
                                <div class="swiper-slide"><img src="{{ asset('wp-content/uploads/2022/01/Kids-4-in-1-Quercetin-Gummies-1-300x300.png') }}" alt=""></div>
                                <div class="swiper-slide"><img src="{{ asset('wp-content/uploads/2021/12/Multicollagen-Turmeric-Capsules-100948-1-300x300.png') }}" alt=""></div>
                                <div class="swiper-slide"><img src="{{ asset('wp-content/uploads/2022/01/Kids-4-in-1-Quercetin-Gummies-1-300x300.png') }}" alt=""></div>
                                <div class="swiper-slide"><img src="{{ asset('wp-content/uploads/2021/12/Multicollagen-Turmeric-Capsules-100948-1-300x300.png') }}" alt=""></div>
                                <div class="swiper-slide"><img src="{{ asset('wp-content/uploads/2022/01/Kids-4-in-1-Quercetin-Gummies-1-300x300.png') }}" alt=""></div>
                                <div class="swiper-slide"><img src="{{ asset('wp-content/uploads/2021/12/Multicollagen-Turmeric-Capsules-100948-1-300x300.png') }}" alt=""></div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                            </div>
                        </div>
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
