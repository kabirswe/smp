
@extends('front.layouts.app')

@section('content')
<main class="main-container">

<div class="product-wrapper"> 
    <div class="man_intro_cont">
		<h1>All Stock Private Label Supplements</h1>
		<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">gummyspecialists.com | Your Premier Private Label Supplement Manufacturer</a><i class="ti ti-arrow-right"></i></li>
            <li class="breadcrumb-item"><a href="#">Products</a><i class="ti ti-arrow-right"></i></li>
			<li class="breadcrumb-item active" aria-current="page">All Stock Private Label Supplements</li>
		</ol>
		</nav>
	</div>
    <div class="product-content-section">
        <div class="container">
            <div class="product-content-inner">
                <div class="product-content">
                    <div class="product-content-top">
                        <h2>Gummy Specialists is Proud To Be A Premier Quality Supplier Of Private Label Supplements</h2>
                        <p>At Gummy Specialists we are dedicated to giving you the most competitive stock private label supplements available in terms of quality and price. Our products in-stock are inspired by Amazon’s best-sellers and researched market trends.</p>
                        <p>We ensure all our formulas are better quality than what is “best-selling” in the market today.</p>
                        <p>As your partner in nutraceutical products, it is our job to make it easy for you to create a highly competitive formula quickly and inexpensively.</p>
                        <p>Below you will see a list of all of our available stock private label nutra formula products. We offer samples for all these, so if you are interested and want to try before you invest that is available for you.</p>
                    </div>
                    <div class="shop_info">
                        <div class="result-count">
                            <p>Showing 1–100 of 338 results</p>
                        </div>
                        <form class="woocommerce-ordering" method="#">
                            <select name="orderby" class="orderby">
                                    <option value="menu_order" selected="selected">Default sorting</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by latest</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                            </select>
                            <input type="hidden" name="paged" value="1">
                        </form>
                    </div>
                    <div class="product-card">
                        <div class="single-item">
                            <div class="product-image">
                                <img class="product-img" src="{{ asset('images/front/home/g1.png') }}" alt="product image">
                                <img class="product-img-hover" src="{{ asset('images/front/hover-image.png') }}" alt="product hover image">
                            </div>
                            <div class="product-descriptions">                               
                                <a href="#">
                                    <h2>3 In 1 Gummy – Vitamin C 250mg – Zinc 10mg – Echinacea Purpurea Extract Polyphenols 100mg – Natural Orange Flavor & Color – Non-GMO – Gluten & Gelatin-Free – Vegan</h2>
                                </a>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="product-image">
                                <img class="product-img" src="{{ asset('images/front/home/g2.png') }}" alt="product image">
                                <img class="product-img-hover" src="{{ asset('images/front/hover-image.png') }}" alt="product hover image">
                            </div>
                            <div class="product-descriptions">
                                <a href="#">
                                    <h2>4 In 1 Stress Relief Gummy – L-Theanine – Magnesium Citrate – Chamomile – Lemon Balm – Organic Tapioca Base – Allergen Free – Gluten Free – Non-GMO – Vegan Friendly</h2>
                                </a>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="product-image">
                                <img class="product-img" src="{{ asset('images/front/home/g3.png') }}" alt="product image">
                                <img class="product-img-hover" src="{{ asset('images/front/hover-image.png') }}" alt="product hover image">
                            </div>
                            <div class="product-descriptions">
                                <a href="#">
                                    <h2>5 In 1 Sugar Free Saffron 88.5mg** Gummy W/ D2, GABA, Passion Flower, St, John’s Wort – Natural Mixed Berry Flavor & Color – Non-GMO – Gluten Free – Vegan Friendly(Product Availability May Vary)</h2>
                                </a>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="product-image">
                                <img class="product-img" src="{{ asset('images/front/home/g4.png') }}" alt="product image">
                                <img class="product-img-hover" src="{{ asset('images/front/hover-image.png') }}" alt="product hover image">
                            </div>
                            <div class="product-descriptions">
                                <a href="#">
                                    <h2>6 In 1 Winter Shield Sugar-Free Gummy – Vitamin C + D, Zinc, Elderberry, Echinacea, Propolis – Orange Flavor – Vegetarian Friendly – Non-GMO – Gluten-Free</h2>
                                </a>
                            </div>
                        </div>    
                        <div class="single-item">
                            <div class="product-image">
                                <img class="product-img" src="{{ asset('images/front/home/g1.png') }}" alt="product image">
                                <img class="product-img-hover" src="{{ asset('images/front/hover-image.png') }}" alt="product hover image">
                            </div>
                            <div class="product-descriptions">                               
                                <a href="#">
                                    <h2>3 In 1 Gummy – Vitamin C 250mg – Zinc 10mg – Echinacea Purpurea Extract Polyphenols 100mg – Natural Orange Flavor & Color – Non-GMO – Gluten & Gelatin-Free – Vegan</h2>
                                </a>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="product-image">
                                <img class="product-img" src="{{ asset('images/front/home/g2.png') }}" alt="product image">
                                <img class="product-img-hover" src="{{ asset('images/front/hover-image.png') }}" alt="product hover image">
                            </div>
                            <div class="product-descriptions">
                                <a href="#">
                                    <h2>4 In 1 Stress Relief Gummy – L-Theanine – Magnesium Citrate – Chamomile – Lemon Balm – Organic Tapioca Base – Allergen Free – Gluten Free – Non-GMO – Vegan Friendly</h2>
                                </a>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="product-image">
                                <img class="product-img" src="{{ asset('images/front/home/g3.png') }}" alt="product image">
                                <img class="product-img-hover" src="{{ asset('images/front/hover-image.png') }}" alt="product hover image">
                            </div>
                            <div class="product-descriptions">
                                <a href="#">
                                    <h2>5 In 1 Sugar Free Saffron 88.5mg** Gummy W/ D2, GABA, Passion Flower, St, John’s Wort – Natural Mixed Berry Flavor & Color – Non-GMO – Gluten Free – Vegan Friendly(Product Availability May Vary)</h2>
                                </a>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="product-image">
                                <img class="product-img" src="{{ asset('images/front/home/g4.png') }}" alt="product image">
                                <img class="product-img-hover" src="{{ asset('images/front/hover-image.png') }}" alt="product hover image">
                            </div>
                            <div class="product-descriptions">
                                <a href="#">
                                    <h2>6 In 1 Winter Shield Sugar-Free Gummy – Vitamin C + D, Zinc, Elderberry, Echinacea, Propolis – Orange Flavor – Vegetarian Friendly – Non-GMO – Gluten-Free</h2>
                                </a>
                            </div>
                        </div>    
                        <div class="single-item">
                            <div class="product-image">
                                <img class="product-img" src="{{ asset('images/front/home/g4.png') }}" alt="product image">
                                <img class="product-img-hover" src="{{ asset('images/front/hover-image.png') }}" alt="product hover image">
                            </div>
                            <div class="product-descriptions">
                                <a href="#">
                                    <h2>6 In 1 Winter Shield Sugar-Free Gummy – Vitamin C + D, Zinc, Elderberry, Echinacea, Propolis – Orange Flavor – Vegetarian Friendly – Non-GMO – Gluten-Free</h2>
                                </a>
                            </div>
                        </div>                  
                    </div>
                </div>
                <div class="product-sidebar">
                    <div class="product-sidebar-top">
                        <h3>See Private Label Stock Products</h3>
                        <h3>See Private Label Packaging</h3>
                        <h3>Private Label Products</h3>
                    </div>
                    <div class="product_categories">
                        <div class="block">
                            <div class="item">
                                <a href="">All Stock Private Label Supplements</a>
                                <a href="/beauty">Beauty</a>
                                <a href="/best-sellers">Best Sellers</a>
                                <a href="/bone-broth">Bone</a>
                                <a href="/capsules">Capsules</a>
                                <a href="#">Collagen</a>
                                <a href="#">Elderberry</a>
                                <a href="#">Essential Vitamins</a>
                                <a href="#">Fish Oil</a>
                                <a href="#">Gummy Vitamins</a>
                                <a href="#">Hair Skin & Nails</a>
                                <a href="#">Herbal</a>
                                <a href="#">Joint Health</a>
                                <a href="#">Keto</a>
                                <a href="#">Kids</a>
                                <a href="#">Liquids</a>
                                <a href="#">New Products</a>
                                <a href="#">Non-GMO Verified</a>
                                <a href="#">Pets</a>
                                <a href="#">Powders</a>
                                <a href="#">Sample Ready Products</a>
                                <a href="#">Softgels</a>
                                <a href="#">Sports Nutrition</a>
                                <a href="#">Sugar-Free</a>
                                <a href="#">Weight Management</a>
                                <a href="#">Wellness</a>
                                <a href="#">Packaging</a>
                                <a href="#">Uncategorized</a>
                            </div>
                        </div>
                        <div class="search-products">
                            <label class="screen-reader-text" for="yith-s">Search for:</label>
                            <input type="search" value="" name="s" id="yith-s" class="yith-s" placeholder="Search for products">
                            <a class="btn">Search</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
@endsection
