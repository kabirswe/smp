@extends('front.layouts.app')

@push('custom-style')
    <link rel="stylesheet" href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front/supplement-manufacturing.css') }}">
@endpush

@section('content')
<main class="supplement-manufacturing-container">
    <div class="video-container">
        <span class="overlay"></span>
        <!-- <video width="100%" autoplay muted loop id="myVideo">
            <source src="{{ asset('images/front/home/videoplayback.mp4') }}" type="video/mp4">
            Your browser does not support HTML5 video.
        </video> -->
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/FYTzoVkQdyk?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <!-- <img width="100%" src="{{ asset('images/front/home/1.png') }}" alt=""> -->
        <div class="container">
            <div class="video-content">
                <h2>Supplement Manufacturing About Our Services</h2>
            </div>
        </div>
    </div>
    <div class="labels-wrapper">
        <div class="container">
            <div class="labels-block-wrapper">
                <div class="labels-block">
                    <div class="item">                        
                        <h2>Supplement Manufacturer</h2>
                        <!-- <h3>The Manufacturing Facility</h3>
                        <h4>We will manufacture your supplements in a combined total of 277,000 sqft GMP Registered and FDA-registered facility.</h4> -->
                        <p>Our facilities, which use the most up-to-date technologies for nutraceutical manufacture, can handle even the largest orders fast and efficiently. Our premises contain industrial licensing HVAC systems to keep the air purified, clean, and controlled in terms of temperature and moisture. We also have three laboratories dedicated to cGMP-compliant raw material testing, label analysis, and final product quality assurance. Our customer relationships and services are also something that sets us apart. Our long-term success is determined by your long-term success.</p>
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
                <div class="labels-block-images">
                    <div class="block-image-left">                       
                        <div class="block-image-content">
                            <h3>Modern material handling equipment</h3>
                            <h3>Global product warehousing</h3>
                            <h3>Large volume supplement manufacturing capabilities</h3>
                            <h3>Multi-Speed rotary compression machines</h3>
                            <h3>Film and sugar coating equipment</h3>
                        </div>
                    </div>
                    <div class="block-image-right">                        
                        <div class="block-image-content">
                            <h3>High-Speed encapsulation machines</h3>
                            <h3>Finishing label applicator and packaging equipment</h3>
                            <h3>Dust-contained and climate controlled areas</h3>
                            <h3>Large network of raw ingredient supplier relationships</h3>
                            <h3>Team of scientists ensuring quality control</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="key-service-wrapper">
        <div class="container">
            <div class="labels-block-wrapper">
                <div class="key-service-title">
                    <h2>Key Service Benefits</h2>
                    <h3>Working with Gummy Specialists: What to Expect</h3>
                </div>
                <div class="labels-block">
                    <div class="item">
                        <i class="ti ti-layout-media-left-alt"></i>
                        <h2>Manufacturing Minimums</h2>
                        <p>The minimum order quantity (MOQ) for our stock products is 1500-2000 bottles. MOQs range from 2500-5000 bottles for custom manufacture.</p>
                    </div>
                    <div class="item">
                        <i class="ti ti-shopping-cart"></i>
                        <h2>Experience</h2>
                        <p>Our workers have a combined expertise of more than a century in the dietary supplement industry.Softgels and gummies are commonly used types of supplementation. </p>
                    </div>
                    <div class="item">
                        <i class="ti ti-package"></i>
                        <h2>Fully integrated Service </h2>
                        <p>We are unlike most other manufacturers in that we can complete all of the duties required to manufacture your product. Manufacturing, compliance, graphic design, and fulfillment are just a few examples.</p>
                    </div>
                    <div class="item">
                        <i class="ti ti-agenda"></i>
                        <h2>Testing</h2>
                        <p>GMP, gluten-free, identity, potency, microbials, heavy metals, and other allergy testing services are available via third parties.</p>
                    </div>
                </div>               
            </div>
        </div>        
    </div>
    <div class="capabilities-wrapper">
        <div class="container">
            <div class="capabilities">
                <div class="content-block">
                    <h2>Equipment Capabilities</h2>
                    <h4>Our laboratories only use the most up-to-date technology to guarantee that your product is made to the greatest possible standard.</h4>
                    <p>We ensure your supplements are made using the highest-quality equipment currently accessible to supplement manufacturers. The quality of your equipment is only as great as the ingredients you use. That's why we make sure to employ only the best raw ingredients in our modern nutraceutical manufacturing equipment. Our raw material storage has approximately $20 million in diverse big amounts of raw nutraceutical material for use in daily production. Because we already know all of the raw material pricing, we can provide accurate price quotations to clients in 24-48 hours. Our turnaround times are also among the best in the business. Because most products are already stocked and available in our warehouse, we can guarantee a 4-week turnaround depending on your purchase.</p>
                </div>
                <div class="video-block">
                    <div class="video">
                        <div class="iteam">
                            <h4>Tablet Compression</h4>
                            <h1>47Mil>32Mil</h1>
                            <p>million tablets per day</p>
                        </div>
                        <div class="iteam">
                            <h4>Capsules</h4>
                            <h1>32Mil>50Mil</h1>
                            <p>encapsulations per day</p>
                        </div>
                        <div class="iteam">
                            <h4>Powder Blending</h4>
                            <h1>180Mil>150Mil</h1>
                            <p>kilos per day</p>
                        </div>
                        <div class="iteam">
                            <h4>Gummy Vitamins</h4>
                            <h1>12Mil>20Mil</h1>
                            <p>gummies per day</p>
                        </div>
                        <div class="iteam">
                            <h4>Gummy Vitamins</h4>
                            <h1>470Mil>300Mil</h1>
                            <p>gummies per day</p>
                        </div>
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
                    <h2>Operating Capacity – Fast Turnaround Time</h2>
                    <h4>Supplement manufacturing operating methods to maximize efficiency.</h4>
                    <p>Gummy Specialists's major priority is to maximize operating output. Our nutraceutical manufacturing team has been trained to complete product runs as promptly as feasible. This optimized process reduces both raw material waste and employee time spent processing your order. Our lab is set up to ensure that all of the components are safe and compliant. The manufacturing operations department is focused on simplifying all procedures involved in producing a complete nutraceutical product.</p>
                </div>
                <div class="image-block">
                    <div class="images-right">
                        <h3>Modern rotary tablet compression machines</h3>
                        <h3>Modern automatic encapsulation machines</h3>
                        <h3>Modern screening and milling machines</h3>
                        <h3>Modern v-blenders and ribbon blenders</h3>
                        <h3>Modern blister packaging machines</h3>
                        <h3>Automatic bottle & bag packaging lines</h3>
                        <h3>Full size shrink wrap label applicator</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <div class="in-house-wrapper">
        <div class="overlay"></div>
        <div class="container">
            <div class="manufacturing">
                <div class="content-block">
                    <h2>In-House Laboratories</h2>
                    <h4>Nutraceutical manufacturing requires a high level of quality control and assurance.</h4>
                    <p>A laboratory must be in place to undertake in-depth quality control and quality assurance of your product in order to produce it according to FDA laws and Good Manufacturing Practices. Quality control and quality assurance begin with testing to guarantee your raw materials are what they claim to be. With in-house laboratories, we assure that your product is of the utmost quality.</p>
                </div>
                <div class="image-block">
                    <div class="images-right">
                        <h3>ICP-MS</h3>
                        <h3>FTIR</h3>
                        <h3>HPLC, HPTLC</h3>
                        <h3>GMP</h3>
                        <h3>ERP</h3>
                        <h3>Metal Scanning</h3>
                        <h3>Surface Area Micro</h3>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="unrivaled-client-wrapper">
        <div class="overlay"></div>
        <div class="container">
            <div class="manufacturing">
                <div class="content-block">
                    <h2>Unrivaled Client Service</h2>
                    <h4>When it comes to manufacturing your product, you can expect to be treated as a partner in our company.</h4>
                    <p>When you choose to work with Gummy Specialists, you become more than a client; you become a partner in our long-term success. You'll be assigned a success development manager who can assist you in enhancing the value of your brand through the products you create.</p>
                </div>
                <div class="image-block">
                    <div class="images-right">
                        <img src="{{ asset('images/front/girlservice-01.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <div class="clean-label-wrapper">
        <div class="overlay"></div>
        <div class="container">
            <div class="manufacturing">
                <div class="content-block">
                    <h2>Clean Label Manufacturing</h2>
                    <h4>Providing clean label production alternatives that aren't available anywhere else.</h4>
                    <p>We are continually striving to improve and differentiate ourselves from the competitors. Because, in the end, your product's quality will determine your success. And your accomplishment is a winwin situation for both of us. That's why we provide clean label production, which eliminates the need for synthetic excipient ingredients in your formula.</p>
                </div>
                <div class="image-block">
                    <div class="images-right">
                        <h3>Excipient free capsules</h3>
                        <h3>Excipient free tablets</h3>
                        <h3>No magnesium stearate</h3>
                        <h3>No silicon dioxide</h3>
                        <h3>Preservative free liquids</h3>
                        <h3>Metal Scanning</h3>
                        <h3>Brown rice powder replacement</h3>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="request-quote">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-center flex-column w-100">
                    <h2>Request A Price<br/>Quote</h2>
                    <p>Fill out our “request a quote” form so we we can give you a custom price quote to get started with manufacturing your neutraceutical supplements.</p>
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('request_quote') }}" class="btn common-btn">Get a Custom Quote<i class="ti ti-arrow-right"></i></a>
                    </div>
                    <p class="call-us">Or call us at <strong>1-833-MYGUMMY</strong></p>
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
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/_noXRmaHGBw?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <a href="#" class="btn common-btn">Stock Gummy Vitamin Products<i class="ti ti-arrow-right"></i></a>
                    <a href="#" class="btn common-btn">Custom Gummy Vitamin Manufacturing<i class="ti ti-arrow-right"></i></a>
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
                    <p>Softgels are able to have its shape, color, and size customized to however you please. Softgels offer encapsulation of liquids, instead of powder which can lead to increased absorbability.</p>
                    <h3>Fill Material Prep</h3>
                    <h3>Gelatin Filling & Encapsulation</h3>
                    <h3>Tumble Drying</h3>
                    <h3>Drying Tunnel</h3>
                    <h3>Cleaning & Final Inspection</h3>
                </div>
                <div class="video-block">
                    <div class="video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/pkS-QKa1jCY?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <a href="#" class="btn common-btn">Stock Softgel Products<i class="ti ti-arrow-right"></i></a>
                    <a href="#" class="btn common-btn">Custom Softgel Manufacturing<i class="ti ti-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>    
    <div class="stock-wrapper">
        <div class="container">
            <div class="stock-now">
                <div class="stock-left">
                    <h3>See Our Incredible Private Label Supplements In-Stock Now!</h3>
                </div>
                <div class="stock-right">
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn common-btn">See Current Stock Products<i class="ti ti-arrow-right"></i></a>
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
                        <a href="#" class="btn common-btn">See Our Private Label Stock Supplements<i class="ti ti-arrow-right"></i></a>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="network-wrapper">
        <div class="container">
            <div class="network">
                <h2>Nutraceutical Industry Knowledge</h2>
                <p>Stay up to date with the newest and most relevant information for supplement brands.</p>
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