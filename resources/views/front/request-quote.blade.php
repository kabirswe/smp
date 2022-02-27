@extends('front.layouts.app')

@push('custom-style')
    <link rel="stylesheet" href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front/request-quote.css') }}">
@endpush

@section('content')
<main class="request-quote-container">
    <div class="request-quote">
        <div class="container">
            <div class="quote-title">
                <h3>Request A Quote</h3>
                <p>Fill in your information below to start the process of manufacturing your nutraceutical product</p>
            </div>
            <div class="request-quote-form">
                <form action="{{ route('store.request_quote') }}" method="POST">
                    @csrf
                    <h1>Form Title</h1>
                    <h4>Your Contact Information</h4>
                    <div class="row">           
                        <div class="form-group col-md-6">
                            <label for="fname">First name*</label>
                            <input type="text" name="first_name" required class="form-control" id="fname">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lname">Last name*</label>
                            <input type="text" name="last_name" required class="form-control" id="lname">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="email">Email*</label>
                            <input type="email" name="email" required class="form-control" id="email">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="number">Phone number*</label>
                            <input type="text" name="phone_number" required class="form-control" id="number">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="number2">Mobile phone number*</label>
                            <input type="text" name="mobile_number" class="form-control" id="number2">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="company">Company name*</label>
                            <input type="text" name="company_name" required class="form-control" id="company">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="companyein">Company EIN</label>
                            <input type="number" name="company_ein" class="form-control" id="companyein">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="web">Website URL</label>
                            <input type="url" name="website" class="form-control" id="web">
                        </div>
                        <div class="form-group col-md-12">
                             <label class="label-margin">Custom or Stock Ingredient Formula Manufacturing*</label><br>
                             <input type="radio" required id="cformula" name="radio_one" value="Custom Formula">
                             <label for="cformula">Custom Formula</label><br>
                             <input type="radio"  id="sformula" name="radio_one" required value="Stock Formula">
                             <label for="sformula">Stock Formula</label>                        
                        </div>
                        <div class="form-group col-md-12">
                            <label class="label-margin" for="nmd">Nutraceutical Manufacturing Details</label><br>
                            <label class="label-margin" for="pformat">Product Format*</label><br>
                            <input type="checkbox" name="radio_two" id="gummy" value="Gummy">
                            <label for="gummy">Gummy</label> <br> 
                            <input type="checkbox" name="radio_two" id="softgel" value="Softgel">
                            <label for="softgel">Softgel</label>                
                                            
                        </div>
                        <div class="form-group col-md-6">
                            <label for="qnt">Desired Finished Product Quantity*</label>
                            <select id="qnt" name="product_quantity" required class="form-control">
                                <option selected>Choose...</option>
                                <option>100-500</option>
                                <option>600-1000</option>
                                <option>2000-1500</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="spc">Serving Per Container</label>
                            <input type="number" name="serving" class="form-control" id="spc">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="bm">Budget for Manufacturing*</label>
                            <select id="bm" name="budget" required class="form-control">
                                <option selected>Please Select</option>
                                <option>100-500</option>
                                <option>600-1000</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tframe">Time Frame to Start Manufacturing*</label>
                            <select id="tframe" name="delivery_period" required class="form-control">
                                <option selected>Please Select</option>
                                <option>Immediately</option>
                                <option>Very Soon (2-3 weeks)</option>
                                <option>Near Future (3-6 weeks)</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                             <label class="label-margin" >Is This Product Currently In Production*</label><br>
                             <input type="radio" id="yescp" name="radio_three" required value="Yes">
                             <label for="yescp">Yes</label><br>
                             <input type="radio" id="nocp" name="radio_three" required value="No">
                             <label for="nocp">No</label>                        
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fpw">For Packaging I Want</label>
                            <select id="fpw" name="packaging" class="form-control">
                                <option selected>Please Select</option>
                                <option>Something Standard</option>
                                <option>Something Unique</option>
                                <option>Something Custom</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="label-margin">Desired Label Claims</label><br>
                            <input type="checkbox" id="organic" name="desired_label" value="Organic">
                            <label for="organic">Organic</label><br>                 
                            <input type="checkbox" id="non-gmo" name="desired_label" value="Non-GMO">
                            <label for="non-gmo">Non-GMO</label><br>           
                            <input type="checkbox" id="vegan" name="desired_label" value="Vegan">
                            <label for="vegan">Vegan</label><br>                 
                            <input type="checkbox" id="vegetarian" name="desired_label" value="Vegetarian">
                            <label for="vegetarian">Vegetarian</label><br>  
                            <input type="checkbox" id="kosher" name="desired_label" value="Kosher">
                            <label for="kosher">Kosher</label><br>
                            <input type="checkbox" id="not-impor" name="desired_label" value="Not Important">
                            <label for="not-impor">Not Important</label><br>             
                            <input type="checkbox" id="undecided" name="desired_label" value="Undecided">
                            <label for="undecided">Undecided</label>               
                        </div>
                        <div class="form-group col-md-12">
                             <label class="label-margin">Does this product need to be exported outside the United States?</label><br>
                             <input type="radio" id="yes2" name="radio_four" value="Yes">
                             <label for="yes2">Yes</label><br>
                             <input type="radio" id="yes3" name="radio_four" value="No">
                             <label for="yes3">No</label>                        
                        </div>
                        <div class="form-group col-md-12">
                             <label class="label-margin">Storage/Fulfillment <br>Gummy Specialists has FDA registered, climate control warehouses specifically made for vitamins & supplements. We have capabilities to store your bulk product safely.  We also offer product fulfillment to take care of shipping out orders from your customers every day, as they come into your e-commerce shopping cart, Amazon FBM, etc.</label><br>
                             <input type="radio" id="ps" name="storage_fulfillment" value="Product Storage">
                             <label for="ps">Product Storage</label><br>
                             <input type="radio" id="pof" name="storage_fulfillment" value="Product Storage + Product Order Fulfillment">
                             <label for="pof">Product Storage + Product Order Fulfillment</label><br>                      
                             <input type="radio" id="not-int" name="storage_fulfillment" value="Not Interested">
                             <label for="not-int">Not Interested</label>                        
                        </div>
                        <div class="form-group">
                            <label for="notes">Other Notes</label>
                            <textarea class="form-control" name="text_box" value="Other Notes" id="notes" rows="8"></textarea>
                        </div>
                        <button type="submit" class="btn common-btn btn-lg btn-block">Submit</button>
                    </div>
                </form>
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