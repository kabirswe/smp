<div class="main-navbar">
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-between w-100">
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('images/front/Gummy-Specialists-Logo.png') }}" alt=""></a>
                </div>
                <div class="navbar-block">
                    <div class="nav-mobile">
                        <i class="ti ti-menu"></i>
                    </div>
                    <div class="nav-desktop">
                        <div class="nav-mobile-close">
                            <i class="ti ti-close"></i>
                        </div>
                        <a href="{{ route('home') }}">Home</a>
                        <a href="{{ route('supplement_manufacturing') }}">About Us</a>
                        <!-- <div class="nav-dropdown">
                            <button class="dropbtn">About Us
                            <i class="ti ti-angle-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <a href="{{ route('supplement_manufacturing') }}">About Us</a>
                                <a href="{{ route('meet_the_team') }}">Meet The Team</a>
                                <a href="{{ route('awards_certifications') }}">Certifications</a>
                                <a href="{{ route('labdoor_partnership') }}">Labdoor Partnership</a>
                            </div>
                        </div> -->
                        <a href="{{ route('blog') }}">Blog</a>
                        <div class="nav-dropdown">
                            <button class="dropbtn">Custom
                            <i class="ti ti-angle-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <!-- <a href="{{ route('capsule_manufacturing') }}">Capsule Manufacturing</a>
                                <a href="{{ route('tablet_manufacturing') }}">Tablet Manufacturing</a>
                                <a href="{{ route('powder_manufacturing') }}">Powder Manufacturing</a> -->
                                <a href="{{ route('gummy_vitamin_manufacturing') }}">Gummy Vitamin Manufacturing</a>
                                <a href="{{ route('softgel_manufacturing') }}">Softgel Manufacturing</a>
                                <!-- <a href="{{ route('liquid_capsule') }}">Liquid Capsule Manufacturing</a> -->
                            </div>
                        </div>
                        <div class="nav-dropdown">
                            <button class="dropbtn">Stock Products
                            <i class="ti ti-angle-down"></i>
                            </button>
                            <div class="dropdown-content">
                                @foreach(getProductTypes() as $type)
                                <a href="{{ route('product.type', $type->slug) }}">{{ $type->name }}</a>
                                @endforeach
                            </div>
                        </div>
                        <a class="nav-link" href="{{ route('design') }}">Design</a>
                        <a class="nav-link" href="{{ route('fulfillment') }} ">Fulfillment</a>
                        <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
                        <!-- <div class="nav-dropdown">
                            <button class="dropbtn">FAQ
                            <i class="ti ti-angle-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <a href="{{ route('faq') }}">2022 Nutraceutical Manufacturing Brochure</a>
                            </div>
                        </div> -->
                        <div class="nav-dropdown">
                            <button class="dropbtn">Contact Us
                            <i class="ti ti-angle-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <a href="{{ route('who_to_contact') }}">Who To Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="call-us">
                    <p>Call Us 24/7: 1-833-MYGUMMY</p>
                    <div class="search-block">
                        <div class="search">
                            <input id="search" type="text" onkeyup="search('id_navbar')" placeholder="search" />
                            <i class="ti ti-search"></i>
                            <div class="result-block d-none" id="id_navbar"></div>
                        </div>
                        <a href="{{ route('request_quote') }}" class="btn">Get a Quote<i class="ti ti-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('custom-scripts')
<script>
    $('.nav-mobile').click(function(){
        $('.nav-desktop').css('left', 0);
    });
    $('.nav-mobile-close').click(function(){
        $('.nav-desktop').css('left', '100%');
    });
</script>
@endpush
