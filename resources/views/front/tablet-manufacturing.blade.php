@extends('front.layouts.app')

@push('custom-style')
    <link rel="stylesheet" href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front/tablet-manufacturing.css') }}">
@endpush

@section('content')
<main class="tablet-manufacturing-container">
    <div class="man_intro_cont">
		<h1>Custom Tablet Manufacturing</h1>
		<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">gummyspecialists.com | Your Premier Private Label Supplement Manufacturer</a><i class="ti ti-arrow-right"></i></li>
			<li class="breadcrumb-item active" aria-current="page">Custom Tablet Manufacturing</li>
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
                <h2>Your Custom<br /> Nutraceutical Tablet<br /> Manufacturer</h2>
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
                        <p>Before tablet pressing, your formula must be blended to ensure even distribution of ingredients in each tablet.</p>
                    </div>
                    <div class="item">
                        <i class="ti ti-shopping-cart"></i>
                        <h2>Tablet Pressing</h2>
                        <p>Once all ingredients in your formula are blended, they are compressed into tablets. Tablets can have unique shapes and colors of your choice.</p>
                    </div>
                    <div class="item">
                        <i class="ti ti-package"></i>
                        <h2>Polishing & Inspection</h2>
                        <p>Each tablet is polished of any excess powder for a clean finished look and triple inspected for any defects.</p>
                    </div>
                    <div class="item">
                        <i class="ti ti-agenda"></i>
                        <h2>Testing</h2>
                        <p>After tablets are manufactured, post-inspection, we run identity, potency, micro, and heavy metal tests to ensure pharmaceutical grade quality.</p>
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
                    <h2>Custom Nutraceutical Tablet Manufacturing</h2>
                    <p>We have capabilities to manufacture any nutraceutical capsule formula. From sourcing each ingredient in your formula, to post encapsulation inspection; we do it all at the best prices and the fastest lead times. We have the experience to help you formulate a new product for your target audience, or discuss with you how to properly scale your manufacturing. As your partner, it is our job for long-term capsule manufacturing success.</p>
                    <a href="#" class="btn common-btn">Get A Custom Tablet Quote<i class="ti ti-arrow-right"></i></a>
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
                <h2>Custom Tablet  Manufacturing:</h2>
                <p>Tablets are one of the most commonly used forms of encapsulation. They offer more customization and more possibilities for your formula and blend. Being one of the best vitamin tablet manufacturers, we are confident we can produce your private label tablet supplement at the highest quality.</p>
            </div>
        </div>
    </div>
    <div class="manufacturing-wrapper">
        <div class="overlay"></div>
        <div class="container">
            <div class="manufacturing">
                <div class="content-block">
                    <h2>Tablet Manufacturing Process</h2>
                    <p>Manufacturing the perfect tablet means it should contain the correct mix of ingredients, be made to a specific hardness so it can maintain its size and shape through strenuous bottling and shipping, and so it can have a long shelf life without worrying about any form of deterioration. The tablets can be produced in several ways: </p>
                    <ol>
                        <li>Wet Granulation</li>
                        <li>Dry Granulation</li>
                        <li>Direct Compression&nbsp;</li>
                    </ol>
                </div>
                <div class="image-block">
                    <div class="images-right">
                        <p>While both wet and granulation have been covered before, they are less commonly used in the process of producing tablets. Direct compression is said to be the most common process for tablet production. Direct compression is one of the more straightforward methods, as it has the least amount of steps. First, the ingredients are put through a grinder to produce a powder that correctly sizes all parts of the formula. Following that, the powder will now be put through a blender and have any extra additives added at this stage. With the blend now mixed and ready to be made into the tablet itself, the next and final stop is a machine that will compress the tablets into the correct size and shape. The process is shorter and more direct as it involves only the powder and the additives then direct compression, thus how it got its name. While this process is more simple, it has been a steady and reliable way to produce high-quality tablets.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tablet-punching-wrapper">
        <div class="overlay"></div>
        <div class="container">
            <div class="manufacturing">
                <div class="content-block">
                    <h2>Tablet Punching Machine Process </h2>
                    <h4>A manufacturer must have a form of tablet pressing, and some machines are more efficient than others.</h4>
                    <p>That is why it is also important to buy from the right tablet punching manufacturer. To start, the two main types of tablet punching machines are the single punching press and the multi-station rotary press.</p>
                </div>
                <div class="image-block">
                    <div class="images-right">
                        <img src="{{ asset('images/front/dry.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="commonly-parts-wrapper">
        <div class="overlay"></div>
        <div class="container">
            <div class="manufacturing">
                <div class="content-block">
                    <h3>Commonly, in a tablet punching machine, it is compromised of a few parts:</h3>
                    <ol>
                        <li>Hopper – This is what holds the powder blend that is ready to be compressed.</li>
                        <li>Dies – This part is what determines the size and shape of the tablet.</li>
                        <li>Upper and lower turrets – These are parts of the machine that holds the upper and lower punches.</li>
                        <li>Upper and lower punches – The actual action of pressing down on a tablet is done with the puncher. Both the upper and lower meet at the die to compress the tablet into that form.</li>
                        <li>Cam tracks – Guiding the puncher is necessary to get the desired results; the cam track is what guides the puncher.</li>
                        <li>Capacity regulator – Depending on the blend, the tablet may require more or less powder based on size and shape. This part of the machine regulates that amount of powder.</li>
                        <li> Ejection regulator – This enables the upper and lower punches to be adjusted.</li>
                        <li>Driving wheel – To manually set the movement of the upper and lower punches, an employee can operate the driving wheel to set that movement.&nbsp;</li>
                    </ol>
                </div>
                <div class="image-block">
                    <div class="images-right">
                        <p>For more specialized tablets such as effervescent tablets, the process is slightly different. The ingredients will be compressed with sodium bicarbonate and organic acids to create the desired effect the effervescent tablet formulation is intended to deliver.</p>
                        <p>For more specialized tablets such as effervescent tablets, the process is slightly different. The ingredients will be compressed with sodium bicarbonate and organic acids to create the desired effect the effervescent tablet formulation is intended to deliver.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="commonly-parts-wrapper">
        <div class="overlay"></div>
        <div class="container">
            <div class="manufacturing">
                <div class="content-block">
                    <h2>Tablet Punching Machine Process </h2>
                    <h4>A manufacturer must have a form of tablet pressing, and some machines are more efficient than others.</h4>
                    <ul>
                        <li>Compressed tablet</li>
                        <li>Effervescent tablet</li>
                        <li>Chewable tablet</li>
                        <li>Fast melt tablet&nbsp;</li>
                    </ul>
                </div>
                <div class="image-block">
                    <div class="images-right">
                        <img src="{{ asset('images/front/Different.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-block">
        <div class="container">
            <div class="product-wrapper">
                <div class="item">
                    <img src="{{ asset('images/front/tablet.jpg') }}" alt="">
                    <h3>Compressed Tablets</h3>
                    <p>Compressed tablets are perhaps the most commonly seen in the nutritional supplement market. These refer to the solid, oval-sized, or round tablet that you see in many everyday vitamins. These tablets are meant to be swallowed whole without breaking down or chewing.</p>
                </div>
                <div class="item">
                    <h3>Effervescent Tablets</h3>
                    <p>An effervescent tablet is characterized by its ability to be dropped into a cup of water and dissolve within a matter of minutes. From there, the carbonated water can be consumed easily, and the contents of the tablet can be absorbed by the body.</p>
                </div>
                <div class="item">
                    <img src="{{ asset('images/front/tablet.jpg') }}" alt="">
                    <h3>Chewable Tablets</h3>
                    <p>Chewable nutritional supplement tablets are very popular, especially in children’s and adult vitamins. These nutritional supplements come in a chewy, gummy tablet that is chewed and broken up completely before they reach the stomach.</p>
                </div>
                <div class="item">
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
                    <h3>While all tablets are different and can have different effects, the granulation process in tablet manufacturing typically stays the same.</h3>
                    <p>his is where the primary powder particles in the powder are encouraged to attach to each other to form a larger entity known as a granule. The granulation process is done prior to compression, but it is a very vital step.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="gelatin-capsules">
        <div class="overlay"></div>
        <div class="container">
            <div class="manufacturing">
                <div class="content-block">
                    <h2>We Are Your Tablet Manufacturer</h2>
                    <p>Choosing a tablet manufacturer can be a stressful process. When you choose us, the process will be taken care of completely. We are based in the USA but have contacts and connections with some of the top tablet manufacturers out there. Being located in the USA allows for a strong advertisement point that you can print onto your label.</p>
                    <a href="#" class="btn common-btn">Get A Custom Tablet Quote<i class="ti ti-arrow-right"></i></a>
                </div>
                <div class="image-block">
                    <div class="images-right">
                        <img src="{{ asset('images/front/gelatin.jpg') }}" alt="">
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
                        <h2>Check Out Our Private Label Tablet Products</h2>
                        <p>Make sure to check out our stock private label tablet products. There, you can see what we believe is some of the best formulas that are on a level of their own. They possibly offer a wide variety of vitamins and nutrients that may be very beneficial.</p>
                        <a href="#" class="btn common-btn">See Our Private Label Tablet Products Here<i class="ti ti-arrow-right"></i></a>
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
