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
                        <i class="fad fa-flask"></i>
                        <h2>Mixing & Cooking</h2>
                        <p>To make a mixture, ingredients are collected and blended together. After mixing the ingredients, the liquid is heated until it thickens into a "slurry."</p>
                    </div>
                    <div class="item">
                        <i class="fal fa-hand-holding-magic"></i>
                        <h2>Molding</h2>
                        <p>The molds are prepped to be non-sticky before the liquid is poured. The liquid is poured into the mold to form the desired shape.</p>
                    </div>
                    <div class="item">
                        <i class="far fa-temperature-low"></i>
                        <h2>Cooling & Unmolding</h2>
                        <p>After pouring the gummy vitamins into the mold, chill it to 65 degrees and leave it to form and cool for 26 hours. After that, the gummies are removed and dried in a huge drum tumbler.</p>
                    </div>
                    <div class="item">
                        <i class="fad fa-luggage-cart"></i>
                        <h2>Filling Bottles/Bags</h2>
                        <p>Once we've made all of your vitamin gummies, we place them in the bottle or bag of your preference. We provide a variety of packaging options for your gummy vitamins.</p>
                    </div>
                </div>
                <div class="labels-block-image">
                    <div class="block-image-left">
                        <img src="{{ asset('images/front/home/FDA-Registered-01.png') }}" alt="">
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
                    <h2>Custom Gummy Vitamin Manufacturing</h2>
                    <p>We are capable of producing any gummy vitamin formula. We handle everything from collecting each ingredient in your formula through post-filling inspection at the most competitive costs and with the shortest turnaround times. We have the skills to assist you in developing a new product for your customer base or discussing how to grow your manufacturing effectively. It is our responsibility as your partner to ensure long-term gummy vitamin manufacturing success.</p>
                    <a href="{{ route('request_quote') }}" class="btn common-btn">Get A Custom Gummy Vitamin Quote<i class="ti ti-arrow-right"></i></a>
                </div>
                <div class="video-block">
                    <div class="video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/_noXRmaHGBw?controls=0&rel=0&amp;start=4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                    <h2>The Production of Gummy Vitamins</h2>
                    <h4>When it comes to making gummy vitamins, it's clear to see how much more complicated the procedure may be compared to other types of vitamin production.</h4>
                    <p>Gummy vitamins should be chewy, pleasant, and yet contain all of the necessary nutrients. These components can be difficult to regulate, but once the process is finished, the result can be replicated over and over again.</p>           
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
                    <h2>Putting Your Gummy Formula Together</h2>
                    <h4>The first step in making a gummy vitamin is to blend and mix all of the components together.</h4>
                    <p>Not just with the nutritional value of the ingredients, but also with additions like coloring and flavoring agents. This mixture will be carefully blended before going through the cooking procedure. The mixture will be heated until it reaches the desired thickness, forming a "slurry."</p>
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
                    <h4>After that, the slurry will be put into a mold. The mold can be of any shape, although bears are the most frequent.</h4>
                    <p>To prevent the slurry from adhering to the molds, corn starch is used before pouring the slurry. Now that the slurry is in the molds, they are cooled to 65 degrees and left to set for around 24 hours.</p>
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
                    <h4>The slurry has hardened to a solid state at this time. The gummies are taken out of the molds and placed in a drum tumbler to cool.</h4>
                    <p>A food-grade oil or wax is also used to keep the gummies soft and fresh in the tumbler. The gummies are now packed and ready to ship. While the process of making a gummy vitamin is special, it does not make it any less difficult. We are competent to assist you in producing a high-quality gummy vitamin product when you choose us as your partner.</p>
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
                    <h4>We distribute the gummy vitamins into their container once they've reached their final state.</h4>
                    <p>Each bottle / bag will have a different quantity of gummies, depending on your product. We complete the gummy vitamin production process by placing the gummies inside the packaging, putting the label, and sealing the package.</p>
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
                    <h2>Vitamins In The Form Of Gummies</h2>
                    <p>Gummy vitamins can also be made halal, kosher, vegan, or vegetarian, as well as sugar- and allergen-free. It depends on the type of gelatin used to make the gummy.</p>
                    <p>Pectin is a frequent ingredient in vegan gelatin. Pectin comes from plants and is commonly used in jellies and jams. Even with the pectin, the gummy vitamins will turn out colorful and delicious.</p>
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
                    <h2>Gummy Specialists Wants To Be Your Go-To Gummy Vitamin Manufacturer</h2>                   
                    <p>It might be difficult to get in touch with the top gummy vitamin manufacturer and maintain healthy communication. If you cooperate with us, we can function as a marketing tool because we are one of the leading gummy makers in the United States. The fact that it is created in the United States might be used as a powerful marketing factor on your label. Not only that, but we can constantly provide bulk gummy vitamins. We can make the process of making your private label gummy vitamin as efficient as possible with the greatest communication and excellent outcomes since we work as a contract manufacturer.</p>
                    <a href="{{ route('request_quote') }}" class="btn common-btn">Get A Custom Gummy Vitamin Quote<i class="ti ti-arrow-right"></i></a>
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
                        <h3>Gummy Vitamins' Rising Popularity</h3>
                        <p>It has become a trend to see gummy vitamins being searched for more and more with each passing year.This steady increase indicates how popular gummy vitamins have become in comparison to other kinds of encapsulation.</p>
                        <p>The increase in searches might be due to a variety of factors, including more children using supplements, more people looking for something delightful, or a new taste preference. Gummy Specialists has climbed to the top of the supplement manufacturing sector, establishing its place by producing the highest-quality gummies available.</p>
                    </div>
                </div>
                <div class="product-block">
                    <h2>Gummy Vitamin Stock Formulas with Our Own Label</h2>
                    <p>Taste, color, shape, and size are all features of a superb gummy vitamin supplement. We thoroughly considered these criteria and have developed a set of some of the greatest formulas we have to offer you today:</p>
                    <div class="product-wrapper">
                        @foreach($pre_manufactured_swiper as $item)
                        <div class="item">
                          @foreach($item['images'] as $image)
                          @if($image->is_cover_image)
                          <div class="products-thumbnail">
                              <a href="{{ route('product.details', $item->slug) }}">
                              <img src="{{ asset($image->image_md) }}" alt="{{ $item->name }}">
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
