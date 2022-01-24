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
                <form>
                    <h1>Form Title</h1>
                    <h4>Your Contact Information</h4>
                    <div class="row">           
                        <div class="form-group col-md-6">
                            <label for="fname">First name*</label>
                            <input type="text" class="form-control" id="fname">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lname">Last name*</label>
                            <input type="text" class="form-control" id="lname">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="number">Phone number*</label>
                            <input type="text" class="form-control" id="number">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="number2">Mobile phone number*</label>
                            <input type="text" class="form-control" id="number2">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="company">Company name*</label>
                            <input type="text" class="form-control" id="company">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="companyein">Company EIN</label>
                            <input type="number" class="form-control" id="companyein">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="web">Website URL</label>
                            <input type="url" class="form-control" id="web">
                        </div>
                        <div class="form-group col-md-12">
                             <label class="label-margin">Custom or Stock Ingredient Formula Manufacturing*</label><br>
                             <input type="radio" id="cformula" name="formula" value="cformula">
                             <label for="cformula">Custom Formula</label><br>
                             <input type="radio" id="sformula" name="formula" value="sformula">
                             <label for="sformula">Stock Formula</label>                        
                        </div>
                        <div class="form-group col-md-12">
                            <label class="label-margin" for="nmd">Nutraceutical Manufacturing Details</label><br>
                            <label class="label-margin" for="pformat">Product Format*</label><br>
                            <input type="checkbox" id="softgel" name="softgel" value="softgel">
                            <label for="softgel"> Softgel</label><br>                 
                            <input type="checkbox" id="gummy" name="gummy" value="gummy">
                            <label for="gummy"> Gummy</label>                 
                        </div>
                        <div class="form-group col-md-6">
                            <label for="qnt">Desired Finished Product Quantity*</label>
                            <select id="qnt" class="form-control">
                                <option selected>Choose...</option>
                                <option>100-500</option>
                                <option>600-1000</option>
                                <option>2000-1500</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="spc">Serving Per Container</label>
                            <input type="number" class="form-control" id="spc">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="bm">Budget for Manufacturing*</label>
                            <select id="bm" class="form-control">
                                <option selected>Please Select</option>
                                <option>100-500</option>
                                <option>600-1000</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tframe">Time Frame to Start Manufacturing*</label>
                            <select id="tframe" class="form-control">
                                <option selected>Please Select</option>
                                <option>Immediately</option>
                                <option>Very Soon (2-3 weeks)</option>
                                <option>Near Future (3-6 weeks)</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                             <label class="label-margin" >Is This Product Currently In Production*</label><br>
                             <input type="radio" id="yescp" name="pcp" value="yescp">
                             <label for="yescp">Yes</label><br>
                             <input type="radio" id="nocp" name="pcp" value="nocp">
                             <label for="nocp">No</label>                        
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fpw">For Packaging I Want</label>
                            <select id="fpw" class="form-control">
                                <option selected>Please Select</option>
                                <option>Something Standard</option>
                                <option>Something Unique</option>
                                <option>Something Custom</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="label-margin">Desired Label Claims</label><br>
                            <input type="checkbox" id="organic" name="desired" value="organic">
                            <label for="organic"> Organic</label><br>                 
                            <input type="checkbox" id="non-gmo" name="non-gmo" value="non-gmo">
                            <label for="non-gmo"> Non-GMO</label><br>           
                            <input type="checkbox" id="vegan" name="vegan" value="vegan">
                            <label for="vegan"> Vegan</label><br>                 
                            <input type="checkbox" id="vegetarian" name="vegetarian" value="vegetarian">
                            <label for="vegetarian">Vegetarian</label><br>  
                            <input type="checkbox" id="kosher" name="kosher" value="kosher">
                            <label for="kosher">Kosher</label><br>
                            <input type="checkbox" id="not-impor" name="not-impor" value="not-impor">
                            <label for="not-impor"> Not Important</label><br>             
                            <input type="checkbox" id="undecided" name="undecided" value="undecided">
                            <label for="undecided">Undecided</label>               
                        </div>
                        <div class="form-group col-md-12">
                             <label class="label-margin">Does this product need to be exported outside the United States?</label><br>
                             <input type="radio" id="yes2" name="yesno" value="yes2">
                             <label for="yes2">Yes</label><br>
                             <input type="radio" id="yes3" name="yesno" value="yes3">
                             <label for="yes3">No</label>                        
                        </div>
                        <div class="form-group col-md-12">
                             <label class="label-margin">Storage/Fulfillment gummy Specialists has FDA registered, climate control warehouses specifically made for vitamins & supplements. We have capabilities to store your bulk product safely.  We also offer product fulfillment to take care of shipping out orders from your customers every day, as they come into your e-commerce shopping cart, Amazon FBM, etc.</label><br>
                             <input type="radio" id="ps" name="product" value="ps">
                             <label for="ps">Product Storage</label><br>
                             <input type="radio" id="pof" name="product" value="pof">
                             <label for="pof">Product Storage + Product Order Fulfillment</label><br>                      
                             <input type="radio" id="not-int" name="product" value="not-int">
                             <label for="not-int">Not Interested</label>                        
                        </div>
                        <div class="form-group">
                            <label for="notes">Other Notes</label>
                            <textarea class="form-control" id="notes" rows="8"></textarea>
                        </div>
                        <button type="button" class="btn btn-secondary btn-lg btn-block">Submit</button>
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