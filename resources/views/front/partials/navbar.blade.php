<div class="main-navbar">
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-between w-100">
                <div class="logo">
                    <img src="{{ asset('images/front/Gummy-Specialists-Logo.png') }}" alt="">
                </div>
                <div class="navbar-block">
                    <a href="{{ route('home') }}">Home</a>
                    <div class="nav-dropdown">
                        <button class="dropbtn">About Us
                        <i class="ti ti-angle-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="{{ route('supplement_manufacturing') }}">About Us</a>
                            <a href="{{ route('meet_the_team') }}">Meet The Team</a>
                            <a href="{{ route('awards_certifications') }}">Certifications</a>
                            <a href="{{ route('labdoor_partnership') }}">Labdoor Partnership</a>
                        </div>
                    </div>
                    <a href="{{ route('who_to_contact') }}">Blog</a>
                    <div class="nav-dropdown">
                        <button class="dropbtn">Custom
                        <i class="ti ti-angle-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="{{ route('capsule_manufacturing') }}">Capsule Manufacturing</a>
                            <a href="{{ route('tablet_manufacturing') }}">Tablet Manufacturing</a>
                            <a href="{{ route('powder_manufacturing') }}">Powder Manufacturing</a>
                            <a href="{{ route('softgel_manufacturing') }}">Softgel Manufacturing</a>
                            <a href="{{ route('gummy_vitamin_manufacturing') }}">Gummy Vitamin Manufacturing</a>
                            <a href="{{ route('liquid_capsule') }}">Liquid Capsule Manufacturing</a>
                        </div>
                    </div>
                    <div class="nav-dropdown">
                        <button class="dropbtn">Stock Products
                        <i class="ti ti-angle-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="{{ route('product_page') }}">Gummy</a>
                            <a href="#">Softgel</a>
                        </div>
                    </div>
                    <a href="{{ route('home') }}">Design</a>
                    <a href="{{ route('fulfillment') }}">Fulfillment</a>
                    <div class="nav-dropdown">
                        <button class="dropbtn">FAQ
                        <i class="ti ti-angle-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="{{ route('faq') }}">2022 Nutraceutical Manufacturing Brochure</a>
                        </div>
                    </div>
                    <div class="nav-dropdown">
                        <button class="dropbtn">Contact Us
                        <i class="ti ti-angle-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="{{ route('who_to_contact') }}">Who To Contact</a>
                        </div>
                    </div>
                </div>
                <div class="call-us">
                    <p>Call Us 24/7: (000) 000-0000</p>
                    <div class="search-block">
                        <div class="search">
                            <input type="text" placeholder="search" />
                            <i class="ti ti-search"></i>
                        </div>
                        <a href="#" class="btn">Get a Quote<i class="ti ti-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
