@extends('front.layouts.app')

@push('custom-style')
    <link rel="stylesheet" href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front/supplement-manufacturing.css') }}">
@endpush

@section('content')
<main class="supplement-manufacturing-container">
    <div class="video-container">
        <span class="overlay"></span>
        <video width="100%" autoplay muted loop id="myVideo">
            <source src="{{ asset('images/front/home/videoplayback.mp4') }}" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
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
                        <h3>The Manufacturing Facility</h3>
                        <h4>We will manufacture your supplements in a combined total of 277,000 sqft GMP Registered and FDA-registered facility.</h4>
                        <p>Using the most modern machinery for nutraceutical manufacturing our facilities can produce even the largest orders quickly and efficiently. Our facilities feature state of the art industrial HVAC systems keeping air filtered, clean, humidity and temperature controlled. We also operate three laboratories whose sole job is for cGMP-mandated raw material testing, label analysis and final product quality assurance. What makes us really different is also our client relationship & services. When working with SMP expect to be treated as a partner. Your long term success is our long term success.</p>
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
                    <h3>What you can expect when working with Gummy Specialists</h3>
                </div>
                <div class="labels-block">
                    <div class="item">
                        <i class="ti ti-layout-media-left-alt"></i>
                        <h2>Manufacturing Minimums</h2>
                        <p>Our stock products have a minimum of only 1,000 bottles. For custom manufacturing MOQs are between 1,500 and 2,000 bottles.</p>
                    </div>
                    <div class="item">
                        <i class="ti ti-shopping-cart"></i>
                        <h2>Experience</h2>
                        <p>Our employees have a combined total of over 100 years experience manufacturing dietary supplements. All in popular forms such as capsules, tablets, softgels, powders and gummies.</p>
                    </div>
                    <div class="item">
                        <i class="ti ti-package"></i>
                        <h2>Turnkey Service</h2>
                        <p>We are unique to many other manufacturers because we have the ability to perform all tasks needed to product your product. Such as manufacturing, compliance, graphic design & fulfillment</p>
                    </div>
                    <div class="item">
                        <i class="ti ti-agenda"></i>
                        <h2>Testing</h2>
                        <p>Third party testing for GMP, gluten free, identity, potency, microbials, heavy metals and other allergen testing services available.</p>
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
                    <h4>Our labs only use the most modern equipment to ensure your product is manufactured at the highest quality possible.</h4>
                    <p>We ensure your supplements are produced with the highest quality equipment available to supplement manufacturers at this time. Good equipment only runs as good as the ingredients you put in. That is why we ensure to use only the highest quality raw materials to run in our modern nutraceutical manufacturing equipment. Our raw material warehouse stores over $20,000,000 of various large quantities of raw nutraceutical material for use in everyday manufacturing. Accurate price quotes can be given to clients in 24-48 hours because we already know all the raw material prices. Our turnaround times are also industry best. Depending on your order we can guarantee 4-week turnaround because most ingredients are already stored and ready in our warehouse. </p>
                </div>
                <div class="video-block">
                    <div class="video">
                        <div class="iteam">
                            <h4>Tablet Compression</h4>
                            <h1>47mil</h1>
                            <p>million tablets per day</p>
                        </div>
                        <div class="iteam">
                            <h4>Capsules</h4>
                            <h1>32mil</h1>
                            <p>encapsulations per day</p>
                        </div>
                        <div class="iteam">
                            <h4>Powder Blending</h4>
                            <h1>180k</h1>
                            <p>kilos per day</p>
                        </div>
                        <div class="iteam">
                            <h4>Gummy Vitamins</h4>
                            <h1>12mil</h1>
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
                    <p>Maximizing operation output is a top priority for SMP Nutra. Our nutraceutical manufacturing team is trained to get product runs done as efficiently and quickly as possible. This streamlined process minimizes wastage of both raw materials and employee time completing your order. Our laboratory is set up to to make sure all components are safe and compliant. The production operation department is dedicated to streamlining all steps to creating a finished nutraceutical product.</p>
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
                    <h4>Nutraceutical manufacturing requires extensive quality control and quality assurance.</h4>
                    <p>In order to manufacture your product up to FDA regulations and Good Manufacturing Practices, there must be a laboratory in place to conduct in-depth quality control and quality assurance of your product. Testing to ensure your raw materials are what they claim to be is just the beginning of quality control and quality assurance. We ensure your product is made of the highest quality with in-house laboratories.</p>
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
                    <h4>Expect to be treated like a partner in our company when it comes to manufacturing your product.</h4>
                    <p>Choosing to work with SMP Nutra you become more than just a client, we consider you a partner in long term success. You will be connected with a success development manager who can help guide you to add value to your brand through the products you make. </p>
                </div>
                <div class="image-block">
                    <div class="images-right">
                        <img src="{{ asset('images/front/girlservice-01.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="raw-materials-wrapper">
        <div class="overlay"></div>
        <div class="container">
            <div class="manufacturing">
                <div class="content-block">
                    <h2>Raw Materials – Best Prices</h2>
                    <h4>Supplement Manufacturing Partners offers over 8,000 raw material choices.</h4>
                    <p>At SMP Nutra we search the entire nutraceutical industry finding the best quality raw materials around the world. We attend the biggest international supplier expos and have a large network of incredible raw material suppliers.</p>
                    <h4>Are you a raw material supplier? Inquire about being a raw material supplier for SMP nutra using the form below:</h4>
                    <a href="#" class="btn common-btn">Vendor/Supplier Inquiry<i class="ti ti-arrow-right"></i></a>  
                </div>
                <div class="image-block">
                    <div class="images-right">
                        <h3>Vitamins</h3>
                        <h3>Minerals</h3>
                        <h3>Herbs</h3>
                        <h3>Antioxidants</h3>
                        <h3>Fibers</h3>
                        <h3>Extracts</h3>
                        <h3>Amino Acids</h3>
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
                    <h4>Offering unique clean label manufacturing options</h4>
                    <p>We are constantly pushing to be better and more unique to the competition. Because in the end the quality of your product will effect your success. And your success is our success. That is why we offer clean label manufacturing to avoid using synthetic excipient ingredients in your formula that must be used in manufacturing.</p>
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
                        <a href="#" class="btn">Get a Custom Quote<i class="ti ti-arrow-right"></i></a>
                    </div>
                    <p class="call-us">Or call us at <strong>1-833-MYGUMMY</strong></p>
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
    <div class="stock-wrapper">
        <div class="container">
            <div class="stock-now">
                <div class="stock-left">
                    <h3>See Our Incredible Private Label Supplements In-Stock Now!</h3>
                </div>
                <div class="stock-right">
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn">See Current Stock Products<i class="ti ti-arrow-right"></i></a>
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