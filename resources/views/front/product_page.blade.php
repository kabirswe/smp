
@extends('front.layouts.app')

@section('content')
<main class="product-wrapper">
    <div class="man_intro_cont">
        <div class="container">
            <h1>{{ Route::is('product.type') ? $type->name : $category->name }} </h1>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">gummyspecialists.com | Your Premier Private Label Supplement Manufacturer</a><i class="ti ti-arrow-right"></i></li>
                <li class="breadcrumb-item"><a href="#">Products</a><i class="ti ti-arrow-right"></i></li>
                <li class="breadcrumb-item active" aria-current="page">{{ Route::is('product.type') ? $type->name : $category->name }}</li>
            </ol>
            </nav>
        </div>
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
                        <div class="sort-by-product">
                            <form class="woocommerce-ordering" method="get" data-hs-cf-bound="true">
                                <select name="orderby" class="orderby">
                                    <option value="menu_order" selected="selected">Sort by trending</option>
                                    <option value="date">Sort by latest</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="product-card">
                        @foreach($products as $item)
                        <div class="single-item">
                            <div class="product-image">
                            @foreach($item['images'] as $image)
                                @if($image->is_cover_image)
                                <a href="{{ route('product.details', $item->slug) }}">
                                    <img class="product-img" src="{{ asset($image->image_md) }}" alt="product image">
                                </a>
                                @endif
                                @if($loop->index == 1)
                                <a href="{{ route('product.details', $item->slug) }}"><div class="product-images-hover">
                                    <img class="product-img-hover" src="{{ asset($image->image_md) }}" alt="product hover image">
                                </a>
                                @endif
                            @endforeach
                            </div>
                            <div class="product-descriptions">
                                <a href="{{ route('product.details', $item->slug) }}">
                                    <h2>{{ $item->name }}</h2>
                                </a>
                            </div>
                        </div>
                        @endforeach
                        @if (count($products) < 1)
                           <h1>No Product Found!</h1>
                        @endif
                    </div>
                    <div class="man_navigation">
                        @if ($products->previousPageUrl())
                        <a class="prev page-numbers" href="{{ $products->previousPageUrl(); }}"><i class="ti ti-arrow-left"></i>Prev</a>
                        @endif
                        @if ($products->nextPageUrl())
                        <a class="next page-numbers" href="{{ $products->nextPageUrl(); }}">Next<i class="ti ti-arrow-right"></i></a>
                        @endif
                    </div>
                </div>
                <div class="product-sidebar">
                    <div class="product-sidebar-top">
                        <h3>Private Label Products</h3>
                    </div>
                    <div class="product_categories">
                        <div class="block">
                            <div class="item">
                                @foreach(getProductCategories() as $category)
                                <a href="{{ route('product.category', $category->slug) }}">{{ $category->name }}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="search-products">
                            <label>Search for:</label>
                            <input type="search" value=""   class="form-control" placeholder="Search for products">
                            <a class="btn common-btn">Search</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
