@extends('front.layouts.app')

@push('custom-style')
    <link rel="stylesheet" href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front/softgel-manufacturing.css') }}">
@endpush

@section('content')
<main class="softgel-manufacturing-container">
    <div class="man_intro_cont">
		<h1>Softgel Manufacturing</h1>
		<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{ route('home') }}">gummyspecialists.com | Your Premier Private Label Supplement Manufacturer</a><i class="ti ti-arrow-right"></i></li>
			<li class="breadcrumb-item active" aria-current="page">Softgel Manufacturing</li>
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
                <h2>Your Custom<br /> Nutraceutical Softgel<br /> Manufacturer</h2>
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
                        <h2>Fill Material Prep</h2>
                        <p>Preparing the oil & ingredients that will be filled inside the softgel. This requires equipment such as processing tanks, sieves & mills, vacuum homogenizers</p>
                    </div>
                    <div class="item">
                        <i class="ti ti-shopping-cart"></i>
                        <h2>Encapsulation</h2>
                        <p>The process of putting the ingredients and oil into a thin layer of gelatin and wrapping the fill material to create a softgel.</p>
                    </div>
                    <div class="item">
                        <i class="ti ti-package"></i>
                        <h2>Drying</h2>
                        <p>Removing excess moisture from the shell, allowing it to shrink, making the softgel more firm and durable.</p>
                    </div>
                    <div class="item">
                        <i class="ti ti-agenda"></i>
                        <h2>Cleaning, Inspection & Sorting</h2>
                        <p>We ensure all softgels are free of moisture issues & defects by inspecting the final product thoroughly</p>
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
                    <h2>Softgel Manufacturing</h2>
                    <p>We have capabilities to manufacture any nutraceutical softgel formula. From sourcing each ingredient in your formula, to post filling inspection; we do it all at the best prices and the fastest lead times. We have the experience to help you formulate a new product for your target audience, or discuss with you how to properly scale your manufacturing. As your partner, it is our job for long-term softgel manufacturing success.</p>
                    <a href="#" class="btn common-btn">Get A Softgel Manufacturing Quote<i class="ti ti-arrow-right"></i></a>
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
                <h2>Custom Softgel Manufacturing</h2>
                <p>We specialize in manufacturing nutraceutical formula softgels. Softgels are some of the most popular forms of delivery method for vitamins & supplements.</p>
            </div>
        </div>
    </div>
    <div class="manufacturing-wrapper">
        <div class="overlay"></div>
        <div class="container">
            <div class="manufacturing">
                <div class="content-block">
                    <h2>Manufacturing Process of Softgels</h2>
                    <p>Softgel encapsulation is a common practice, as it is very versatile. The process of producing a softgel capsule is comprised of four main stages:</p>
                    <ol>
                        <li>Preparing gelatin</li>
                        <li>Preparing the fill</li>
                        <li>Begin encapsulating the fill</li>
                        <li>Finishing touches on filled softgels</li>
                    </ol>
                </div>
                <div class="image-block">
                    <div class="images-right">
                        <h3>Preparing gelatin</h3>
                        <h3>Preparing fill</h3>
                        <h3>Encapsulating the fill</h3>
                        <h3>Drying & polishing softgels</h3>
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
                    <h2>Preparing the Gelatin</h2>
                    <h4>Preparing the gelatin capsule is the very first step in the process. To note, this process is not identical to the process of making veggie softgels. But to begin with gelatin softgels, you must get the ingredients for it together. The four main components are:</h4>
                    <ol>
                        <li>Gelatin</li>
                        <li>Plasticizer</li>
                        <li>Water</li>
                        <li>Additives for various traits</li>
                    </ol>
                </div>
                <div class="image-block">
                    <div class="images-right">
                       <p>To begin, a machine will melt a large quantity of gelatin with the other three components. Not only will it melt all the ingredients, but it will allow for the appropriate mixing of all components. The four components are mixed until the blend is going to make a softgel shell that is durable and effective for the intended use. The addition of coloring agents and other additives will make every blend unique for creating the perfect softgel shell. Following the completed mixture of all ingredients, the mixture needs to stay warm, so it maintains the consistency of a liquid. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wet-granulation-wrapper">
        <div class="overlay"></div>
        <div class="container">
            <div class="manufacturing">
                <div class="content-block">
                    <h2>Encapsulating Your Formula Inside A Softgel</h2>
                    <h4>Specifically, with softgels, the process of encapsulating the formula happens simultaneously as the shell is added to a machine along with the blend. This process all takes place in a room that is temperature-controlled and with a humidity of around 20%. Having optimal conditions for softgel manufacturing is key to producing a high-quality end product.</h4>                                                      
                </div>
                <div class="image-block">
                    <div class="images-right">
                        <p>The process of creating a finished softgel starts with the blend of gelatin, which is prepared previously. The gelatin blend will be poured onto two drums, which are extremely cold. The drums roll continually, causing the gelatin blend to both solidify and roll off as a solid sheet, but it will be split in half. With both halves now ready, they will be put through a process that will cut each half to the appropriate size and shape. The two matching halves will be met together, but first, your custom blend will be inserted into a heated wedge. This heated wedge will be encased by both halves of the softgel. Once the wedge is in place, and the softgel is nearly closed, the wedge will inject the custom formula into the softgel. This being the final step of the process, the wedge is removed, and the softgel is quickly sealed or coated as directed and will be set aside to cool and settle. </p>
                    </div>                 
                </div>
            </div>
        </div>
    </div> 
    <div class="dry-granulation-wrapper">
        <div class="overlay"></div>
        <div class="container">
            <div class="manufacturing">
                <div class="content-block">
                    <h2>Drying & Finishing Process</h2>
                    <h4>The softgels will  be put into a cool drum, which will rotate fast to help the gelatin congeal. The finished softgel will undergo further drying, which is a process that is comprised of a couple of steps:</h4>
                    <ol>
                        <li>Tumble drying</li>
                        <li> Drying tunnel</li>
                    </ol>
                </div>
                <div class="image-block">
                    <div class="images-right">
                       <p>A tumble dryer is a machine that will dry the softgels for no more than 45 minutes. The outcome from this step is going to be the removal of nearly 25% of water within the softgel capsules.</p>
                       <p>After being in the tumbler machine, the softgels are introduced to the drying tunnel. This is an environment where the softgels are laid on racks, and subject to swift flow of air continually flows for up to 48 hours. This is the final drying step for the softgel capsules before inspection. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <div class="vegetarian-capsules">
        <div class="overlay"></div>
        <div class="container">
            <div class="manufacturing">
                <div class="content-block">
                    <h2>Gummy Specialists Wants To Be Your Softgel Manufacturer</h2>
                    <a href="#" class="btn common-btn">Get A Softgel Manufacturing Quote<i class="ti ti-arrow-right"></i></a>
                </div>
                <div class="image-block">
                    <div class="images-right">
                        <h4>If you have a great formula that you want encapsulated within a softgel, work with us and we can get your softgels.</h4>
                       <p>Hypromellose, officially known as Hydroxypropyl Methylcellulose (HPMC), only contains HPMC and purified water. This option includes no preservatives, animal by-products and is GMO-free, gelatin-free, gluten-free, starch-free and BSE free.</p>
                       <p>The other veggie capsule shell option is Pullulan. Pullulan is a water-soluble polysaccharide produced by the fermentation of starch/sugar by the fungus Aerobasidum pullulans. It is 100% natural, starch-free, gluten-free, preservative-free, and GMO-free. Unlike HPMC, Pullulan is 100% natural because it is not produced by any chemical modification</p>
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
                        <h2>Check Out Our Stock Private Label Softgel Products</h2>
                        <p>Make sure to check out our stock private label softgel products. There, you can see what we believe is some of the best formulas that are on a level of their own. They possibly offer a wide variety of vitamins and nutrients that may be very beneficial. We also offer other stock products and they are just as important as our collagen products, they can be viewed here.</p>
                        <a href="#" class="btn common-btn">See Our Private Label Softgel Products Here<i class="ti ti-arrow-right"></i></a>
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
