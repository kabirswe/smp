@extends('front.layouts.app')

@push('custom-style')
    <link rel="stylesheet" href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front/contact.css') }}">
@endpush

@section('content')
<main class="contact-container">
    <div class="request-quote">
        <div class="container">
            <div class="quote-title">
                <h3>Contact Us</h3>
                <p>Fill in your information below to contact us <br>Email: sales@gummyspecialists.com<br>Phone: 1-833-MYGUMMY<br>1-833-694-8669</p>
            </div>
            <div class="request-quote-form">
                <form action="{{ route('store.contact') }}" method="POST" >
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
                        <div class="form-group col-md-12">
                            <label for="email">Email*</label>
                            <input type="email" name="email" required class="form-control" id="email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="number">Phone number*</label>
                            <input type="text" name="phone_number" required class="form-control" id="number">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="number2">Mobile phone number*</label>
                            <input type="text" name="mobile_number" required class="form-control" id="number2">
                        </div>
                        <div class="form-group col-md-12">
                             <label class="label-margin">Custom or Stock Ingredient Formula Manufacturing*</label><br>
                             <input type="radio" required id="cformula" name="radio_box" value="Custom Formula">
                             <label for="cformula">Custom Formula</label><br>
                             <input type="radio" required id="sformula" name="radio_box" value="Stock Formula">
                             <label for="sformula">Stock Formula</label>
                        </div>
                        <div class="form-group">
                            <label for="notes">Message*</label>
                            <textarea class="form-control" name="text_box" required id="notes" rows="8"></textarea>
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
