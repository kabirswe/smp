
@extends('front.layouts.app')
@section('content')
<main class="main-container">
<div class="fulfillment">
    <div class="man_intro_cont">
		<h1>Fulfillment</h1>
		<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">gummyspecialists.com | Your Premier Private Label Supplement Manufacturer</a><i class="ti ti-arrow-right"></i></li>
			<li class="breadcrumb-item active" aria-current="page">Fulfillment</li>
		</ol>
		</nav>
	</div>
    <div class="fulfillment-main">
        <div class="container">
            <div class="fulfillment-media-content">
                <div class="fulfillment-media">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/OoWSad7tU_E?controls=0&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="fulfillment-text">
                    <h1>All of Your Products Can Be Stored and Shipped Through Us.</h1>
                    <p>We can handle any size order and might be the ideal place for your vitamin order fulfillment. We've known that for years and have all the resources to fulfill and store your private label supplements, according to our experience working with clients that purchase in bulk. Please contact us if you have any queries regarding our fulfillment services.</p>
                </div>
            </div>
            <div class="fulfillment-media-content">
                <div class="fulfillment-media">
                    <img src="{{ asset('images/front/home/IMG_20220224_140623.jpg') }}" alt="">
                </div>
                <div class="fulfillment-text">
                    <h1>VITAMINS DISTRIBUTION</h1>
                    <p>We're your one-stop solution for all your vitamin needs. We are experts in the production and distribution of vitamins and supplements. We have all of the essential tools and equipment to safely handle any quantity order, maintain any supplements, and store any supplement, among other things. We'd like to be your manufacturer and assist you in making profitable vitamins and supplements.</p>
                </div>
            </div>
            <div class="fulfillment-content">
                <div class="single-item">
                    <h1>WAREHOUSE CAPABILITIES</h1>
                    <p>We'll stock your products in our warehouse and send them out when they sell. All purchases will be packed and shipped out within one business day after confirmation. We can provide a company-branded packaging slip including all product orders upon request.</p>
                </div>
                <div class="single-item">
                    <h1>TOTAL TRANSPARENCY</h1>
                    <p>We will provide you with any documentation you need for logistics and freight especially if you are shipping your products internationally. We work closely with our local Chamber of Commerce and can provide any international shipping documents as well as any quality assurance and quality control documents.</p>
                </div>
                <div class="single-item">
                    <h1>TEMPERATURE CONTROLLED ENVIRONMENT</h1>
                    <p>We can safely store any sort of private label supplement in our temperature-controlled warehouse, assuring the best possible care for your supplements. It is not only temperature controlled, but it is also hygienic and meets or surpasses all laws, making it an ideal facility for vitamin and supplement fulfillment.</p>
                </div>
            </div>
            <div class="shipping-carriers">
                <h1>SHIPPING CARRIERS & METHODS</h1>
                <div class="shipping-details">
                    <div class="shipping-item">
                        <li>UPS Ground</li>
                        <li>UPS 3 Day Select</li>
                        <li>UPS 2nd Day</li>
                        <li>UPS Overnight</li>
                    </div>
                    <div class="shipping-item">
                        <li>FedEx Smart Post</li>
                        <li>FedEx Home Delivery</li>
                        <li>FedEx Express</li>
                        <li>FedEx International Mail</li>
                    </div>
                    <div class="shipping-item">
                        <li>USPS Letter Post Airmail</li>
                        <li>USPS Priority Mail</li>
                        <li>USPS Priority Mail Express</li>
                        <li>USPS First Class Mail</li>
                        <li>USPS First Class International</li>
                    </div>
                    <div class="shipping-item">
                        <li>Parcel Direct</li>
                        <li>Parcel Direct Standard A</li>
                        <li>DHL Express</li>
                        <li>Standard Freight Services for Palette/Skid Shipping</li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
