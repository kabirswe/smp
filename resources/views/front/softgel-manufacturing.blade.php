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
                        <h2>Preparation of Fill Materials</h2>
                        <p>Preparing the oil and ingredients to go into the softgel. This involves the use of processing tanks, sieves and mills, and vacuum homogenizers, among other things.</p>
                    </div>
                    <div class="item">
                        <i class="ti ti-shopping-cart"></i>
                        <h2>Encapsulation</h2>
                        <p>To make a softgel, place the ingredients and oil in a thin layer of gelatin and wrap the fill material over it.</p>
                    </div>
                    <div class="item">
                        <i class="ti ti-package"></i>
                        <h2>Drying</h2>
                        <p>Releasing extra moisture from the shell and letting it shrink, resulting in a firmer and more lasting softgel.</p>
                    </div>
                    <div class="item">
                        <i class="ti ti-agenda"></i>
                        <h2>Cleaning, Examining, and Sorting</h2>
                        <p>By rigorously evaluating the final product, we verify that all softgels are clear of moisture issues and errors.</p>
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
                    <!-- <p>Our Capabilities</p> -->
                    <h2>Softgel Manufacturing</h2>
                    <p>We are capable of producing any nutraceutical softgel formula. We handle everything from collecting each ingredient in your formula through post-filling inspection at the most competitive costs and with the shortest turnaround times. We have the skills to assist you in developing a new product for your customer base or discussing how to grow your manufacturing effectively. It is our responsibility as your partner to ensure long-term gummy vitamin manufacturing success.</p>
                    <a href="{{ route('request_quote') }}" class="btn common-btn">Get A Softgel Manufacturing Quote<i class="ti ti-arrow-right"></i></a>
                </div>
                <div class="video-block">
                    <div class="video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/pkS-QKa1jCY?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="network-wrapper">
        <div class="container">
            <div class="network">
                <h2>Custom Softgel Manufacturing</h2>
                <p>Softgels containing nutritional formulas are our specialty. Softgels are one of the most common type of vitamin and supplement formulations.</p>
            </div>
        </div>
    </div>
    <div class="manufacturing-wrapper">
        <div class="overlay"></div>
        <div class="container">
            <div class="manufacturing">
                <div class="content-block">
                    <h2>Softgels Manufacturing Process</h2>
                    <p>Because of its flexibility, softgel encapsulation is a frequently used method. There are four key steps in the production of a softgel capsule:</p>
                    <ol>
                        <li>Getting gelatin ready</li>
                        <li>Getting the fill ready</li>
                        <li>Start encapsulating the filling.</li>
                        <li>Putting the finishing touches on the filled softgels</li>
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
                    <h2>Getting Gelatin Ready</h2>
                    <h4>The first stage in the process is to prepare the gelatin capsule. It's important to remember that this procedure isn't the same as manufacturing vegan softgels. However, before you can make gelatin softgels, you must first gather the necessary ingredients. The following are the four major components:</h4>
                    <ol>
                        <li>Gelatin</li>
                        <li>Plasticizer</li>
                        <li>Water</li>
                        <li>Additives for various traits</li>
                    </ol>
                </div>
                <div class="image-block">
                    <div class="images-right">
                       <p>Firstly, a machine will melt a huge amount of gelatin with the other three ingredients in a machine. It will not only melt all of the ingredients, but it will also ensure that all of the components are well blended. The four ingredients are combined until they form a softgel shell that is both durable and appropriate for the specific use. Every mix will be unique due to the use of coloring agents and other chemicals for generating the right softgel shell. After all of the components have been well blended, the mixture must be kept heated to retain its liquid consistency.</p>
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
                    <h2>Using Softgels to Encapsulate Your Formula</h2>
                    <h4>In the case of softgels, the process of encapsulating the formula occurs simultaneously with the addition of the shell to a machine alongside the mix. This entire procedure is conducted in a temperaturecontrolled chamber with a humidity level of roughly 20%. It is critical to have appropriate softgel production conditions in order to produce a high-quality end product.</h4>                                                      
                </div>
                <div class="image-block">
                    <div class="images-right">
                        <p>The method of making a complete softgel begins with a gelatin blend that has been produced beforehand. The gelatin mixture will be placed into two extremely cold drums. The gelatin mixture dries and rolls off as a solid sheet as the drums continue to roll, however it will be divided in two. Now that both sides are finished, they will go through a procedure that will cut them to the proper size and form. Your customized mix will be put into a heated wedge before the two parts are joined together. Both parts of the softgel will encase this hot wedge. The wedge will inject the unique formula into the softgel once it is in position as well as the softgel is nearly closed. The wedge is removed at this point in the process, and the softgel is immediately sealed or coated as specified before being placed away to cool and set.</p>
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
                    <h2>Process of Drying and Finishing</h2>
                    <h4>The softgels will be placed in a refrigerated drum that rotates quickly in order to assist the gelatin solidify.The resulting softgel will be dried out further, which is a two-step process:</h4>
                    <ol>
                        <li>Tumble drying</li>
                        <li> Drying tunnel</li>
                    </ol>
                </div>
                <div class="image-block">
                    <div class="images-right">
                       <p>A tumble dryer is an equipment that takes no longer than 45 minutes to dry the softgels. The extraction of almost 25% of the water within the softgel capsules will be the result of this stage.</p>
                       <p>The softgels are brought to the drying tunnel after being tumbled in the tumbler machine. This is a system in which softgels are put out on racks and subjected to a continuous flow of air for up to 48 hours. This is the softgel capsules' final drying stage before inspection.</p>
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
                    <h2>Gummy Specialists Wants to be Your Go-To Softgel Manufacturer</h2>
                    <a href="{{ route('request_quote') }}" class="btn common-btn">Get A Softgel Manufacturing Quote<i class="ti ti-arrow-right"></i></a>
                </div>
                <div class="image-block">
                    <div class="images-right">
                        <h4>If you have a unique formula that you'd want to encapsulate in a softgel, get in touch with us and we'll have your softgels manufactured.</h4>
                       <p>We collaborate with some of the leading softgel capsule contract manufacturers. We simplify the procedure for you here, and we'll manage all of the correspondence so you can obtain your softgel capsules for your formula. Softgels are often used to provide fish oil, but they can also include a variety of additional supplements.</p>
                       <p>The softgel production process might be complicated, but it can be made simple with the correct tools. We are confident in our ability to meet all of your softgel production requirements, and we believe we would be the greatest partner for you and your formulas. Furthermore, because we are based in the United States, when you deal with us, your bottles will have a superb marketing point.</p>
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
                        <h2>Take a Look at Our Private Label Softgel Products in Stock</h2>
                        <p>Have a look at our private label softgels in stock. There, you'll find what we consider are some of the greatest formulas, each on its own level. These formulas include a wide range of vitamins and elements that are useful. Here you'll find other stock items that are just as important as our collagen supplements.</p>
                        <a href="{{ route('product.type', 'softgel') }}" class="btn common-btn">See Our Private Label Softgel Products Here<i class="ti ti-arrow-right"></i></a>
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
