
@extends('front.layouts.app')
@push('custom-style')
    <link rel="stylesheet" href="{{ asset('css/front/product-details.css') }}">
@endpush
@section('content')
<main class="main-container">
    <div class="product-details-wrapper">
        <div class="man_intro_cont">
            <h1>{{ $product['type']->name }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">gummyspecialists.com | Your Premier Private Label Supplement Manufacturer</a><i class="ti ti-arrow-right"></i></li>
                    <li class="breadcrumb-item"><a href="#">Products</a><i class="ti ti-arrow-right"></i></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                </ol>
            </nav>
        </div>
        <div class="product-details-main">
            <div class="container">
                <div class="product-details">
                    <div class="product-details-content">
                        <div class="product-details-inner">
                            <div class="product-gallery">
                                <div class="image-gallery-block">
                                    <div class="image-gallery-left">
                                    @foreach($product['images'] as $image)
                                    @if(!$image->is_cover_image)
                                        <div class="image-block">
                                            <img src="{{ asset($image->image_sm) }}" alt="">
                                        </div>
                                    @endif
                                    @endforeach  
                                        
                                    </div>
                                    <div class="image-gallery-right">
                                    @foreach($product['images'] as $image)
                                    @if($image->is_cover_image)
                                        <img src="{{ asset($image->image_md) }}" alt="">
                                    @endif
                                    @endforeach
                                    </div>
                                </div>
                                <div class="product-gallery-btn">
                                    <!-- <a href="#" class="btn">Order<i class="ti ti-arrow-right"></i></a> -->
                                    
                                   
                                    <button type="button" class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">Order</button>                              
                                </div>
                            </div>
                            <div class="product-text">
                                <div class="product-title">
                                    <h2>3 In 1 Gummy – Vitamin C 250mg – Zinc 10mg – Echinacea Purpurea Extract Polyphenols 100mg – Natural Orange Flavor & Color – Non-GMO – Gluten & Gelatin-Free – Vegan</h2>
                                    <p class="availability">(Product Availability May Vary)</p>
                                </div>
                                <table width="189">
                                    <tbody>
                                        <tr>
                                            <td width="125"><strong>Gummy Specialists’s SKU:</strong></td>
                                            <td width="64">100597</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="product_meta">
                                    <span class="posted_in">
                                    <b>Categories: </b>
                                    @foreach($product['product_product_categories'] as $item)
                                    <a href="{{ route('product.category', $item['category']->slug) }}" rel="tag">{{ $item['category']->name }}</a>@if (!$loop->last), @endif
                                    @endforeach                                    
                                </div>
                            </div>
                        </div>
                        <div class="product-tab">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Related Products</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Reviews (0)</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="product-card">
                                        <div class="single-item">
                                            <div class="product-image">
                                                <img class="product-img" src="{{ asset('images/front/fe63.png') }}" alt="product image">
                                                <img class="product-img-hover" src="{{ asset('images/front/hover-image.png') }}" alt="product hover image">
                                            </div>
                                            <div class="product-descriptions">
                                                <p>Kids 4 In 1 Immune Quercetin Gummy + Vitamin C, D, & Zinc – Natural Raspberry Flavor – Gluten Free – Non-GMO – Vegetarian Friendly</p>
                                            </div>
                                        </div>
                                        <div class="single-item">
                                            <div class="product-image">
                                                <img class="product-img" src="{{ asset('images/front/fe64.png') }}" alt="product image">
                                                <img class="product-img-hover" src="{{ asset('images/front/hover-image.png') }}" alt="product hover image">
                                            </div>
                                            <div class="product-descriptions">
                                                <p>Kids 4 In 1 Immune Quercetin Gummy + Vitamin C, D, & Zinc – Natural Raspberry Flavor – Gluten Free – Non-GMO – Vegetarian Friendly</p>
                                            </div>
                                        </div>
                                        <div class="single-item">
                                            <div class="product-image">
                                                <img class="product-img" src="{{ asset('images/front/fe65.png') }}" alt="product image">
                                                <img class="product-img-hover" src="{{ asset('images/front/hover-image.png') }}" alt="product hover image">
                                            </div>
                                            <div class="product-descriptions">
                                                <p>Kids 4 In 1 Immune Quercetin Gummy + Vitamin C, D, & Zinc – Natural Raspberry Flavor – Gluten Free – Non-GMO – Vegetarian Friendly</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <div class="reply">
                                        <div class="rating-block">
                                            @foreach($product_ratings as $product_rating)
                                                <h3>{{$product_rating->name}}</h3>
                                                <p>{{$product_rating->text_box}}</p>
                                            @endforeach
                                        </div>
                                        <form action="{{ route('rating.store') }}" method="POST">
                                            @csrf
                                            <input type="hidden" class="form-control" value="{{$product->id}}" name="product_id" id="product_id"> 
                                            <!-- <div class="noreviews">
                                                <p>There are no reviews yet.</p>
                                            </div> -->
                                            <div class="reply-title-wrapper">
                                                <h3>{{ $product->name }}</h3>
                                                <h2>Add a review</h2>
                                                <p>Your email address will not be published. Required fields are marked *</p>
                                            </div>
                                            <div class="rating-form">
                                                <label for="rating" class="text-dark">Your rating * </label>
                                                <div class="ratings">
                                                    <div class="d-flex justify-content-cernte">
                                                        <a href="#"><i class="ti ti-star"></i></a>
                                                        <a href="#"><i class="ti ti-star"></i></a>
                                                        <a href="#"><i class="ti ti-star"></i></a>
                                                        <a href="#"><i class="ti ti-star"></i></a>
                                                        <a href="#"><i class="ti ti-star"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="reply-form">
                                                <label for="text_box" class="text-dark">Your review * </label>
                                                <textarea class="form-control textarea-height" name="text_box" id="text_box"></textarea>
                                                <div class="custom-form">
                                                    <div class="input-left">
                                                        <label for="name" class="text-dark">Name * </label>
                                                        <input type="text"  class="form-control" name="name" id="name" required></input>
                                                    </div>
                                                    <div class="input-right">
                                                        <label for="email" class="text-dark">Email * </label>
                                                        <input type="email"  class="form-control" name="email" id="email" required></input>
                                                    </div>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="checkbox_box" id="checkout-create-ac"></input>
                                                    <label for="checkout-create-ac">Save my name, email, and website in this browser for the next time I comment.</label>
                                                </div>
                                                <div class="product-gallery-btn">
                                                    <!-- <a href="#" class="btn">Submit</a> -->
                                                    <button type="submit" class="btn btn-success btn-lg btn-block">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
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
                                <a class="btn">Search</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Order Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('order.store') }}" method="POST">
                @csrf
                    <div class="row">  
                        <input type="hidden" class="form-control" value="{{$product->id}}" name="product_id" id="product_id"> 
                        <div class="mb-3 col-md-9">
                            <label for="product-name" class="col-form-label">Product Name</label>
                            <input type="text" class="form-control" value="{{$product->name}}" name="product_name" id="product-name">
                        </div>                    
                        <div class=" mb-3 col-md-3">
                            <label for="quantity" class="col-form-label">Quantity</label>
                            <input type="text" class="form-control" placeholder="quantity" name="quantity" id="quantity">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" placeholder="name" name="name" id="name">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="email" class="col-form-label">Email</label>
                            <input type="email" class="form-control" placeholder="email" name="email" id="email">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="phone" class="col-form-label">Phone</label>
                            <input type="text" class="form-control" placeholder="phone" name="phone" id="phone">
                        </div>
                        <div class="mb-3">
                            <label for="comment" class="col-form-label">Comment:</label>
                            <textarea class="form-control" placeholder="comment" name="comment" id="Comment"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-lg" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success btn-lg">Order Confirm</button>
                    </div>
                </form>
            </div>            
        </div>
    </div>
</div>
@endsection

@push('custom-scripts')
<script>

</script>

@endpush
