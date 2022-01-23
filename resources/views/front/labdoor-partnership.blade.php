
@extends('front.layouts.app')
@push('custom-style')
    <link rel="stylesheet" href="{{ asset('css/front/labdoor-partnership.css') }}">
@endpush
@section('content')
<main class="main-container">
    <div class="labdoor-partnership">
		<div class="man_intro_cont">
            <h1>Labdoor Partnership</h1>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">gummyspecialists.com | Your Premier Private Label Supplement Manufacturer</a><i class="ti ti-arrow-right"></i></li>
                <li class="breadcrumb-item active" aria-current="page">Labdoor Partnership</li>
            </ol>
            </nav>
        </div>
		<div class="labdoor-main">
			<div class="container">
				<div class="labdoor">
					<div class=".labdoor-img">
						<img src="https://via.placeholder.com/512x279.png?text=Gummy+image+512x279" alt="">					
					</div>
					<div class="labdoor-title">
						<h2>Test Your Products With Labdoor, Gummy Specialists Official Testing Partner</h2>
					</div>
					<p>Gummy Specialists has recently partnered with the team at Labdoor to deliver world-class testing services for your formulas.</p>
					<p>Labdoor is a leading testing facility for nutraceuticals. They evaluate any type of nutraceutical formula and put it through careful inspection <br>at their FDA-registered lab. They give each product they test a score and have a leaderboard to show which products scored the best.</p>
					<p>Gummy Specialists is proud to announce this new partnership and will be able to offer special pricing for any brand looking to get its product tested.</p>
				</div>
			</div>
		</div>
		<!-- <div class="labdoor-service">
			<div class="container">
				<div class="labdoor-content">
					<div class="labdoor-content-left">
						<h2>Labdoor’s Services Include:</h2>
						<div class="d-flex justify-content-center">
							<a href="https://info.smpnutra.com/quote" class="btn">Get Started Today!<i class="ti ti-arrow-right"></i></a>
						</div>
					</div>
					<div class="labdoor-content-right">
							<div class="accordion" id="accordionExample">
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingOne">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										For Our Frequently Asked Questions
									</button>
									</h2>
								<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										Visit out Frequently Asked Questions page <a href="#">here</a>.
									</div>
								</div>
								</div>
								<div class="accordion-item">
								<h2 class="accordion-header" id="headingTwo">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										For Your Product Spec Sheet
									</button>
								</h2>
								<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										Please contact your sales representative or sales administrator.
									</div>
								</div>
								</div>
								<div class="accordion-item">
								<h2 class="accordion-header" id="headingThree">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										For International Sales Information
									</button>
								</h2>
								<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										Please contact John Riccobono<br>
										<a href="#">john@smpnutra.com</a>
									</div>
								</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingFour">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
										For Product Samples
									</button>
									</h2>
									<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										Please fill out this <a href="#">form</a> or you can purchase your samples <a href="#">here.</a>
									</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingFive">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
										For Shipping and Logistics
									</button>
									</h2>
									<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										Please contact Esmerelda Rodriguez<br>
										<a href="#">operations@smpnutra.com</a>
									</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<div class="labdoor-test">
			<div class="container">
				<div class="labdoor">
					<div class=".labdoor-img">
						<img src="{{ asset('images/front/lab-test.png') }}" alt="">
					</div>
					<div class="labdoor-title">
						<h2>Why You Should Test Your Products</h2>
					</div>
					<p>Making use of this unique partnership Gummy Specialists has formed with Labdoor allows you to have the best pricing available when testing your product. </p>
					<p>The space for supplements is getting more competitive by the year, finding ways to stand out from the crowd is becoming more crucial to success than in previous years. Take the leap and get your products analyzed by a state-of-the-art facility for your customers to be reassured today!</p>
				</div>
			</div>
		</div>
		<div class="labdoor-test-contact">
			<div class="container">
				<div class="labdoor-test-inner ">
					<div class="labdoor-test-content">
						<div class="labdoor-test-content-left">
							<h2>How to Get Gummy Specialists Special Pricing:</h2>
						</div>
						<div class="labdoor-test-content-right">
							<p>To get these special prices, please contact your sales rep and ask them for more information about Labdoor.</p>
							<p>If you currently do not have a sales rep, please fill out this form so one of our team members can get in touch with you.</p>
						</div>
					</div>
					<div class="d-flex justify-content-center btn">
						<a href="#" class="btn">Get Started Today!<i class="ti ti-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
@endsection
