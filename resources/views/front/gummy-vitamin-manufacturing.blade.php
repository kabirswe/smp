@extends('front.layouts.app')

@push('custom-style')
    <link rel="stylesheet" href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front/gummy-vitamin-manufacturing.css') }}">
@endpush

@section('content')
<main class="gummy-vitamin-manufacturing-container">
    <div class="man_intro_cont">
		<h1>Gummy Vitamin Manufacturing</h1>
		<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">gummyspecialists.com | Your Premier Private Label Supplement Manufacturer</a><i class="ti ti-arrow-right"></i></li>
			<li class="breadcrumb-item active" aria-current="page">Gummy Vitamin Manufacturing</li>
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
                <h2>Your Custom<br /> Nutraceutical Gummy<br />Vitamin Manufacturer</h2>
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
                        <h2>Mixing & Cooking</h2>
                        <p>Ingredients are sourced and mixed to create a blend. Once ingredients are blended, the resulting liquid is cooked until it thickens into a “slurry.”</p>
                    </div>
                    <div class="item">
                        <i class="ti ti-shopping-cart"></i>
                        <h2>Molding</h2>
                        <p>Before the slurry is poured, the molds are prepared to be resistant to sticking. The slurry is poured into the mold created a shape of your choice</p>
                    </div>
                    <div class="item">
                        <i class="ti ti-package"></i>
                        <h2>Cooling & Unmolding</h2>
                        <p>After gummy vitamins are poured into the mold, it’s cooled to 65 degrees and set aside to sit for 26 hours to form and cool. After the gummies are removed and placed in a large drum tumbler to dry.</p>
                    </div>
                    <div class="item">
                        <i class="ti ti-agenda"></i>
                        <h2>Bottle/Bag Filling</h2>
                        <p>Once all your vitamin gummies are produced, they are filled in your bottle or bag of choice. We offer amazing packaging options to put your gummy vitamins in.</p>
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
                    <h2>Custom Gummy Vitamin Manufacturing</h2>
                    <p>We have capabilities to manufacture any gummy vitamin formula. From sourcing each ingredient in your formula, to post filling inspection; we do it all at the best prices and the fastest lead times. We have the experience to help you formulate a new product for your target audience, or discuss with you how to properly scale your manufacturing. As your partner, it is our job for long-term gummy vitamin manufacturing success.</p>
                    <a href="#" class="btn common-btn">Get A Custom Gummy Vitamin Quote<i class="ti ti-arrow-right"></i></a>
                </div>
                <div class="video-block">
                    <div class="video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/G1nZNpPBz1o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <div class="manufacturing-wrapper">
        <div class="overlay"></div>
        <div class="container">
            <div class="manufacturing">
                <div class="content-block">
                    <h2>Gummy Vitamin Manufacturing Process</h2>
                    <h4>When producing gummy vitamins, it is obvious how much more arduous the process can be as opposed to other traditional vitamin manufacturing.</h4>
                    <p>As capsules are produced, plenty of work behind the scenes must be done before the capsule is ready to be bottled. The powder within capsules can be prepared in two ways: </p>                  
                </div>
                <div class="image-block">
                    <div class="images-right">
                        <img src="{{ asset('images/front/shutterstock_715849465.jpg') }}" alt="">
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
                    <h2>Blending Your Gummy Formula</h2>
                    <h4>The process for manufacturing a gummy vitamin will start with the blending and mixing of all ingredients.</h4>
                    <p>Not only the ingredients with the nutritional power they may have, but also with additives such as coloring and flavoring agents. This blend will be mixed thoroughly, followed by the process of being cooked. The blend will be cooked until it is thick enough, creating what is known as a “slurry.” </p>
                </div>
                <div class="image-block">
                    <div class="images-right">
                        <img src="{{ asset('images/front/Screen-Shot-2020-01-23-at-2.40.18-PM-1024x695.png') }}" alt="">
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
                    <h2>Pouring Slurry Into Mold & Cooling</h2>
                    <h4>The slurry will then be poured into a mold. The mold can be of any shape, but most commonly is a bear.</h4>
                    <p>Corn starch is applied to the molds prior to pouring the slurry to prevent the slurry from sticking. Now with the slurry in the mold, the molds are brought to a temperature of 65 degrees and sitting for roughly 24 hours. </p>
                </div>
                <div class="image-block">
                    <div class="images-right">
                        <img src="{{ asset('images/front/gummymfg2.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mix-tumbler-wrapper">
        <div class="overlay"></div>
        <div class="container">
            <div class="manufacturing">
                <div class="content-block">
                    <h2>Mix In Tumbler With Wax Or Oil</h2>
                    <h4>At this point, the slurry has formed into a solid. The gummies are removed from the molds and placed into a drum tumbler.</h4>
                    <p>Also added to the tumbler is a food-grade oil or wax that will help the gummies stay soft and fresh. The gummies are now ready to be packaged and shipped. While the process of manufacturing a gummy vitamin is different, it does not make it any easier. With us as your partner, we are qualified to help you manufacture your gummy vitamins as a high-quality product.</p>
                </div>
                <div class="image-block">
                    <div class="images-right">
                        <img src="{{ asset('images/front/gummymfg4.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottling-labeling-wrapper">
        <div class="overlay"></div>
        <div class="container">
            <div class="manufacturing">
                <div class="content-block">
                    <h2>Bottling & Labeling Gummy Vitamins</h2>
                    <h4>Once the gummy vitamins are in their final form, we distribute them inside their packaging accordingly.</h4>
                    <p>Depending on your product you will have a unique number of gummies inside each bottle / bag. We finish the gummy vitamin manufacturing process by distributing the gummies inside the packing, applying label, and final sealing.</p>
                </div>
                <div class="image-block">
                    <div class="images-right">
                        <img src="{{ asset('images/front/Screen-Shot-2020-01-23-at-3.29.28-PM.png') }}" alt="">
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
                    <h2>Healthy Gummy Vitamin Options</h2>
                    <p>Gummy vitamins can also be made to be halal, kosher, vegan or vegetarian friendly along with sugar and allergen free. It is dependent on what kind of gelatin the gummy is made with.</p>
                    <p>A common way the vegan gelatin is made is with pectin. Pectin has a plant-based origin and is often used in jellies and jams. Even with the pectin, the gummy vitamins will come out colorful and tasty like the rest.</p>
                </div>
                <div class="image-block">
                    <div class="images-right">
                        <h3>Halal Certified</h3>
                        <h3>Kosher Certified</h3>
                        <h3>Vegan</h3>
                        <h3>Vegetarian</h3>
                        <h3>Sugar Free</h3>
                        <h3>Allergen Free</h3>
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
                    <h2>Gummy Specialists Wants To Be Your Gummy Vitamin Manufacturer</h2>                   
                    <p>When choosing the best gummy vitamin manufacturer, it can be tough to get a hold of them then keep healthy communication.  Being one of the gummy manufacturers in the USA, we pose as a marketing tool if you work with us. You can boast the fact that it is made in the USA as a solid marketing point on your label. Not only that, but we can supply bulk gummy vitamins and consistently do this. While we work as a contract manufacturer, we can make the process of producing your private label gummy vitamin as streamlined as possible with the most communication and quality results. </p>
                    <a href="#" class="btn common-btn">Get A Custom Gummy Vitamin Quote<i class="ti ti-arrow-right"></i></a>
                </div>
                <div class="image-block">
                    <div class="images-right">
                        <img src="{{ asset('images/front/shutterstock_706795120.jpg') }}" alt="">
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
                        <img src="{{ asset('images/front/Gummy-Vitamin-Search-Trend.jpg') }}" alt="">                        
                        <h3>Gummy Vitamins Ever-growing Popularity</h3>
                        <p>With every year, it has become a trend to see that gummy vitamins are continually searched for more and more. This continual growth really helps show how much people are now looking for gummy vitamins compared to the other forms of encapsulation.</p>
                        <p>The growth in searches can be for multiple reasons such as more kids taking supplements, more adults wanting something enjoyable, or a new desire for taste. Gummy Specialists has become risen to the top of the supplement manufacturing industry and has solidified it’s position there by having the highest quality gummies on the market.</p>
                    </div>
                </div>
                <div class="product-block">
                    <h2>Our New Private Label Stock Products</h2>
                    <p>We are always formulating new products, stay up to date with our latest products to get them before anyone else! </p>
                    <div class="product-wrapper">
                        <div class="item">
                            <div class="products-thumbnail">
                                <img src="{{ asset('images/front/home/g1.png') }}" alt="">
                            </div>
                            <div class="products-description">
                                <a href="#">
                                    <h2>3 In 1 Gummy – Vitamin C 250mg – Zinc 10mg – Echinacea Purpurea Extract Polyphenols 100mg – Natural Orange Flavor & Color – Non-GMO – Gluten & Gelatin-Free – Vegan</h2>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="products-thumbnail">
                                <img src="{{ asset('images/front/home/g2.png') }}" alt="">
                            </div>
                            <div class="products-description">
                                <a href="#">
                                    <h2>4 In 1 Stress Relief Gummy – L-Theanine – Magnesium Citrate – Chamomile – Lemon Balm – Organic Tapioca Base – Allergen Free – Gluten Free – Non-GMO – Vegan Friendly</h2>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="products-thumbnail">
                                <img src="{{ asset('images/front/home/g3.png') }}" alt="">
                            </div>
                            <div class="products-description">
                                <a href="#">
                                    <h2>5 In 1 Sugar Free Saffron 88.5mg** Gummy W/ D2, GABA, Passion Flower, St, John’s Wort – Natural Mixed Berry Flavor & Color – Non-GMO – Gluten Free – Vegan Friendly(Product Availability May Vary)</h2>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="products-thumbnail">
                                <img src="{{ asset('images/front/home/g4.png') }}" alt="">
                            </div>
                            <div class="products-description">
                                <a href="#">
                                    <h2>6 In 1 Winter Shield Sugar-Free Gummy – Vitamin C + D, Zinc, Elderberry, Echinacea, Propolis – Orange Flavor – Vegetarian Friendly – Non-GMO – Gluten-Free</h2>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="products-thumbnail">
                                <img src="{{ asset('images/front/home/g1.png') }}" alt="">
                            </div>
                            <div class="products-description">
                                <a href="#">
                                    <h2>3 In 1 Gummy – Vitamin C 250mg – Zinc 10mg – Echinacea Purpurea Extract Polyphenols 100mg – Natural Orange Flavor & Color – Non-GMO – Gluten & Gelatin-Free – Vegan</h2>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="products-thumbnail">
                                <img src="{{ asset('images/front/home/g2.png') }}" alt="">
                            </div>
                            <div class="products-description">
                                <a href="#">
                                    <h2>4 In 1 Stress Relief Gummy – L-Theanine – Magnesium Citrate – Chamomile – Lemon Balm – Organic Tapioca Base – Allergen Free – Gluten Free – Non-GMO – Vegan Friendly</h2>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="products-thumbnail">
                                <img src="{{ asset('images/front/home/g3.png') }}" alt="">
                            </div>
                            <div class="products-description">
                                <a href="#">
                                    <h2>5 In 1 Sugar Free Saffron 88.5mg** Gummy W/ D2, GABA, Passion Flower, St, John’s Wort – Natural Mixed Berry Flavor & Color – Non-GMO – Gluten Free – Vegan Friendly(Product Availability May Vary)</h2>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="products-thumbnail">
                                <img src="{{ asset('images/front/home/g4.png') }}" alt="">
                            </div>
                            <div class="products-description">
                                <a href="#">
                                    <h2>6 In 1 Winter Shield Sugar-Free Gummy – Vitamin C + D, Zinc, Elderberry, Echinacea, Propolis – Orange Flavor – Vegetarian Friendly – Non-GMO – Gluten-Free</h2>
                                </a>
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
