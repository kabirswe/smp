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
			<li class="breadcrumb-item"><a href="#">gummyspecialists.com | Your Premier Private Label Supplement Manufacturer</a><i class="ti ti-arrow-right"></i></li>
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
                    <a href="https://info.smpnutra.com/quote" class="btn common-btn">Get A Softgel Manufacturing Quote<i class="ti ti-arrow-right"></i></a>
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
                    <h2>Manufacturing Process of Softgels </h2>
                    <p>Softgel encapsulation is a common practice, as it is very versatile. The process of producing a softgel capsule is comprised of four main stages:</p>  
                    <ol>
                        <li>Preparing gelatin</li>
                        <li>Dry Granulation Process&nbsp;</li>
                    </ol>                 
                </div>
                <div class="image-block">
                    <div class="images-right">
                        <img src="{{ asset('images/front/PowderBlender2-01.png') }}" alt="">
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
                    <h2>Wet Granulation Blend Capsule Manufacturing</h2>
                    <h4>During the wet granulation process, you begin with the blend for the supplement ready and mixed. Then the mixed blend will then have water added to it.</h4>
                    <p>The water will wet the powder and add an immobile layer of water between particles. With more and more water being added to the powder, it will continually grow the layer of water gets wider and will ultimately pass through the pores of the particles.</p>                                     
                </div>
                <div class="image-block">
                    <div class="images-right">
                        <p>To then get the water out of the blend, it will be evaporated and will result in a very strong level of adhesion for the particles, which will result in the particles grouping in and becoming larger. The size of particles will be affected by many factors such as blend, density, and the type and amount of binders added are a few of those. </p>
                        <p>The final step will be drying. For small batches, a tray drying oven is used, but for more automation and larger batches, fluid bed dryers are used. These driers utilize a stream of warm and dehumidified air running through the base of the drying chamber. To keep the powder from being pushed out of the chamber, a fine mesh is in place to keep all powder where it needs to be.</p>
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
                    <h2>Dry Granulation Blend Capsule Manufacturing </h2>
                    <h4>The process of dry granulation is commonly used when the blend being used does correctly work or operate as intended when met with moisture and heat.</h4>
                    <p>The main difference in this process is the fact that liquids are never introduced to the blend. With the prepared blend of ingredients, the powder will be fed into a machine that will apply immense pressure and force to make the powder more compact and increase the bulk density. The amount of force needed varies depending on the blend, its ingredients, and the desired density.</p>                                     
                </div>
                <div class="image-block">
                    <div class="images-right">
                        <img src="{{ asset('images/front/dry.jpg') }}" alt="">
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
                    <h2>Encapsulation Process</h2>
                    <h4>Manufacturing a nutraceutical capsule is a process that takes many steps to make perfect.</h4>
                    <p>When producing these capsules, the materials must be gathered. Once all materials are prepared, they are joined with hot demineralized water and mixed via vacuum, in a machine. Over time, the blend will have more hot water added, dyes and opacifants if needed. When ready, the mixture will be molded around steel pins into the correct size and shape of the capsule. Both ends of the capsule are then dried together. The level of the temperature and humidity are monitored to correctly allow for optimal drying of the capsules. </p> 
                    <p>After the process of preparing and drying the capsule, the cap and body will be trimmed to a .15 mm tolerance. The capsules are put together and are ready to be filled and sent out.</p>                                    
                </div>
                <div class="image-block">
                    <div class="images-right">
                        <img src="{{ asset('images/front/dry.jpg') }}" alt="">
                    </div>                 
                </div>
            </div>
        </div>
    </div>
    <div class="capsule-shell">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-center flex-column w-100">
                    <h2>Capsule Shell Choices</h2>
                    <p>Capsule shells are distinguished between two categories:</p>                    
                    <h4>Gelatin capsule</h4>
                    <h4>Vegetarian capsule</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="gelatin-capsules">
        <div class="overlay"></div>
        <div class="container">
            <div class="manufacturing">
                <div class="content-block">
                    <h2>Gelatin Capsules</h2>
                    <h4>Gelatin is made from animal by-products derived from beef only such as bovine or cows.</h4>
                    <p>The part in which it comes from is called the collagen, which is the soft protein that connects the skin, bones, muscles, and tendons of the animal. A slew of potential health benefits come with the gelatin shell since it contains protein and two amino acids; Glycine and Proline.</p>                                   
                </div>
                <div class="image-block">
                    <div class="images-right">
                        <img src="{{ asset('images/front/gelatin.jpg') }}" alt="">
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
                    <h2>Vegetarian Capsules</h2>
                    <h4>When dealing with vegetarian capsule shells, there are two main variations:</h4>
                    <ol>
                        <li><h4>Hypromellose</h4></li>
                        <li><h4>Pullulan</h4></li>
                    </ol>                                 
                </div>
                <div class="image-block">
                    <div class="images-right">
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
                        <h2>Check Out Our Private Label Capsule Products</h2>
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
