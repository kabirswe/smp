
@extends('front.layouts.app')

@section('content')
<main class="product-wrapper">
    <div class="man_intro_cont">
        <div class="container">
            <h1>{{ Route::is('product.type') ? $type->name : ((Route::is('product.category') ? $category->name : 'All Stock Private Label Supplements')) }} </h1>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">gummyspecialists.com | Your Premier Private Label Supplement Manufacturer</a><i class="ti ti-arrow-right"></i></li>
                <li class="breadcrumb-item"><a href="#">Products</a><i class="ti ti-arrow-right"></i></li>
                <li class="breadcrumb-item active" aria-current="page">{{ Route::is('product.type') ? $type->name : ((Route::is('product.category') ? $category->name : 'All Stock Private Label Supplements')) }}</li>
            </ol>
            </nav>
        </div>
    </div>
    <div class="product-content-section">
        <div class="container">
            <div class="product-content-inner">
                <div class="product-content">
                    <div class="product-content-top">
                        <h2>Gummy Specialists is Proud to be a Top-tier Private Label Supplement Supplier.</h2>
                        <p>Gummy Specialists is committed to providing you with the most cost-effective and high-quality stock private label supplements available.</p>
                        <p>Our in-stock products are influenced by Amazon's best-sellers and market research.</p>
                        <p>We make certain that all of our formulas are of higher quality than what is currently "bestselling" on the market.</p>
                        <p>It is our responsibility as your nutraceutical product partner to make it simple for you to build a super competitive formula promptly and affordably.</p>
                        <p>A list of all of our available stock private label Nutra formula items can be seen below. We have samples for all of them, so if you're eager and want to give them a try before purchasing, you can surely do it.</p>
                    </div>
                    <div class="shop_info">
                        <div class="result-count">
                            <p>Showing {{ $products->firstItem() }}–{{ $products->lastItem() }} of {{ $products->total() }} results</p>
                        </div>
                        <div class="sort-by-product">
                            <form class="woocommerce-ordering" method="get" data-hs-cf-bound="true">
                                <select id="product_filter" class="form-select" aria-label="Default select example" onchange="filterFunction();">
                                    <option selected>Select filter</option>
                                    <option value="trending">Sort by trending</option>
                                    <option value="latest">Sort by latest</option>
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
                                    <img class="product-img" src="{{ asset($image->image_sm) }}" alt="product image">
                                </a>
                                @endif
                                @if($loop->index == 1)
                                <a href="{{ route('product.details', $item->slug) }}">
                                    <div class="overlay-image"></div>
                                    <img class="product-images-hover" src="{{ asset($image->image_sm) }}" alt="product hover image">
                                </a>
                                @endif
                                @endforeach
                            </div>
                            <div class="product-descriptions">
                                <a href="{{ route('product.details', $item->slug) }}">
                                    <p>{{ $item->name }}</p>
                                </a>
                                <div class="order-btn">
                                    <a href="{{ route('product.details', $item->slug) }}?order=true" class="btn common-btn">Order</a>
                                </div>
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
                        <div class="search-block">
                            <div class="search">
                                <input id="search" type="text" onkeyup="search('id_product_list')" placeholder="search" />
                                <i class="ti ti-search"></i>
                                <div class="result-block d-none" id="id_product_list"></div>
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
    <script type="text/javascript">

    function filterFunction() {
        var selectBox = document.getElementById("product_filter");
        var selectedValue = selectBox.options[selectBox.selectedIndex].value;
        window.location.replace(SITEURL + "/product-list?filter=" + selectedValue);
    }

    </script>
@endpush
