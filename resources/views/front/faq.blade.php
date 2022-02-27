
@extends('front.layouts.app')
@section('content')
<main class="faq">
<div class="man_intro_cont">
	<h1>Frequently Asked Questions</h1>
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="{{ route('home') }}">gummyspecialists.com | Your Premier Private Label Supplement Manufacturer</a><i class="ti ti-arrow-right"></i></li>
	    <li class="breadcrumb-item active" aria-current="page">Frequently Asked Questions</li>
	  </ol>
	</nav>
</div>
<div class="faq-section">
	<div class="container">		
		<div class="faq-content">
			<div class="content-area">
				<div class="accordion" id="accordionExample">
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingOne">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Gummy Specialist’s gummy don’t contain any artificial colors or flavors. What ingredients are used?
							</button>
						</h2>
						<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Our gummies are 100% natural. The colorings and flavors we use to make the gummies are drawn from natural sources.
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingTwo">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								What is your minimum order quantity?
							</button>
						</h2>
						<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								To know the MOQ, you can contact with your queries to our customer service. We will get back to you shortly.
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingThree">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							What does it cost to launch a product?
							</button>
						</h2>
						<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
							<div class="accordion-body">
							There are many variables that influence the cost of launching a product. When it comes to launching a custom product, it would be dependent on the cost of ingredients, you can contact with your queries to our customer service.						
							</div>
						</div>
					</div>				
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingFour">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							Can you assist with Marketing?
							</button>
						</h2>
						<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
							<div class="accordion-body">
							Yes. We can fulfill all your marketing needs.
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingFive">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
								Can you send me samples?
							</button>
						</h2>
						<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
							<div class="accordion-body">
							We're constantly searching for new ways to improve your experience with us. Please contact us at  sales@gummyspecialists.com if you're interested in receiving samples.							
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingSix">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
							Gummy contains gelatin, how can Gummy Specialists gummies be vegan?
							</button>
						</h2>
						<div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
							<div class="accordion-body">
							The gummies of Gummy Specialists can be enjoyed by everyone and so we developed a gummy with pectin rather than gelatin. Gelatin & pectin usually provides the same structure and binding of gummies. Pectin is extracted from the peels of fruit, and so it’s a great vegan alternative to animal-based gelatin.			
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingSeven">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
							Can I consume more than the recommended dosage?
							</button>
						</h2>
						<div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
							<div class="accordion-body">
							We don’t recommend consuming more than the recommended dosage. Keeping the vitamin reserves well below harmful levels that are how we recommend 							
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingEight">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
							How should I store my gummies?
							</button>
						</h2>
						<div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
							<div class="accordion-body">
							Store your gummies in the closed bottle in a cool and dry place at room temperature. There’s no need to store your gummies in the refrigerator, and this may even affect the structure of the gummies.	
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingNine">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
							How can I get in touch with customer service?
							</button>
						</h2>
						<div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
							<div class="accordion-body">
							We always love hearing from you, whether you have a query or it’s just to say hi. You can visit us on Facebook or Instagram and send us a message or comment in our post. You can also send an email to sales@gummyspecialists.com or call us at 1-833-MYGUMMY. We will get back to you shortly.					
							</div>
						</div>
					</div>											  
				</div>
			</div>
			<div class="capabilities-wrapper">
				<div class="container">
					<div class="capabilities">
						<div class="content-block">
							<!-- <p>Our Capabilities</p> -->
							<h2>Custom Gummy Vitamin Manufacturing</h2>
							<p>We are capable of producing any gummy vitamin formula. We handle everything from collecting each ingredient in your formula through post-filling inspection at the most competitive costs and with the shortest turnaround times. We have the skills to assist you in developing a new product for your customer base or discussing how to grow your manufacturing effectively. It is our responsibility as your partner to ensure long-term gummy vitamin manufacturing success.</p>
							<a href="{{ route('request_quote') }}" class="btn common-btn">Get A Custom Gummy Vitamin Quote<i class="ti ti-arrow-right"></i></a>
						</div>
						<div class="video-block">
							<div class="video">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/PNZ9HYwQC4M?controls=0&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</main>
@endsection
