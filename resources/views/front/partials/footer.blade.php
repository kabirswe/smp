<footer>
    <div class="request-quote">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-center flex-column w-100">
                    <h2>Request A Manufacturing Price<br/>Quote</h2>
                    <p>Fill out our "get a custom quote" form and we'll send you a custom price quote so you can start making your nutraceutical supplements.</p>
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('request_quote') }}" class="btn common-btn">Get a Custom Quote<i class="ti ti-arrow-right"></i></a>
                    </div>
                    <p class="call-us">Or call us at <strong>1-833-MYGUMMY</strong></p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-between align-items-center w-100 footer-block">
                    <a href="{{ route('home') }}"><img src="{{ asset('images/front/Gummy-Specialists-Logo.png') }}" alt=""></a>
                    <div class="d-flex justify-content-end align-items-center footer-item">
                        <a href="tel:1-833-MYGUMMY" class="btn common-btn">Call Us: 1-833-MYGUMMY<i class="ti ti-arrow-right"></i></a>
                        <a href="{{ route('contact') }}" class="btn common-btn">Contact Us<i class="ti ti-arrow-right"></i></a>
                        <a href="{{ route('request_quote') }}" class="btn common-btn">Get a Quote<i class="ti ti-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-between w-100 block-item">
                    <div class="block">
                        <div class="item">
                            <h3>Company</h3>
                            <a href="{{ route('home') }}">Home</a>
                            <a href="{{ route('supplement_manufacturing') }}">About Us</a>
                            <a href="{{ route('blog') }}">Blog</a>
                            <a href="#">Terms &amp; Conditions</a>
                            <a class="disabled">Gummy Specialists Workflow</a>
                            <a class="disabled">Careers</a>
                        </div>
                        <div class="item">
                            <h3>Contact Us</h3>
                            <a href="{{ route('contact') }}">Contact Us</a>
                            <a href="{{ route('faq') }}">FAQ</a>
                            <a href="{{ route('request_quote') }}">Request A Quote</a>
                        </div>
                    </div>
                    <div class="block">
                        <div class="item">
                            <h3>Custom Manufacturing</h3>
                            <a href="{{ route('gummy_vitamin_manufacturing') }}">Gummy Vitamins</a>
                            <a href="{{ route('softgel_manufacturing') }}">Softgels</a>
                         
                        </div>
                        <div class="item">
                            <h3>Additional Services</h3>
                            <a href="{{ route('fulfillment') }}">Fulfillment</a>
                            <a href="{{ route('design') }}">Design</a>
                        </div>
                    </div>
                    <div class="block">
                        <div class="item">
                            <h3>Specialty Manufacturing</h3>
                            @if(getProductCategories())
                                @foreach(getProductCategories() as $key=>$category)
                                    @if($key < 16 )
                                        <a href="{{ route('product.category', $category->slug) }}">{{ $category->name }}</a>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="block">
                        <div class="item">
                            <h3>Specialty Manufacturing</h3>
                            @if(getProductCategories())
                                @foreach(getProductCategories() as $key=>$category)
                                    @if($key >= 16 )
                                        <a href="{{ route('product.category', $category->slug) }}">{{ $category->name }}</a>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-between flex-column align-items-center w-100 footer-bottom-content">
                    <div class="top-block">
                        <p>© 2022 gummyspecialists.com</p>
                        <div class="request">
                            <a style="color: #ffffff;" href="#">Request A Quote</a>
                            <p><strong>1-833-MYGUMMY</strong></p>
                        </div>
                        <ul>
							<li>
					            <a href="https://www.facebook.com/gummyspecialists">
							        <i class="ti ti-facebook"></i>
								</a>
							</li><li>
					            <a href="https://twitter.com/GummySpecs">
							        <i class="ti ti-twitter-alt"></i>
								</a>
							</li>
                            <li>
					            <a href="https://www.linkedin.com/company/gummyspecs">
							        <i class="ti ti-linkedin"></i>
								</a>
							</li>
                            <li>
					            <a href="https://www.youtube.com/channel/UCR9Lt2f62pphUvC155XSRZg">
							        <i class="ti ti-youtube"></i>
								</a>
							</li>
                            <li>
					            <a href="https://www.instagram.com/gummyspecialists/">
							        <i class="ti ti-instagram"></i>
								</a>
							</li>
						</ul>
                    </div>
                    <div class="bottom-block">
                        <p><em>*Before using any product, always check the product label or packaging All the information provided on this website does not, and in no way is intended to serve as legal or regulatory counsel. You are encouraged to seek legal advice or other professional advice if you are concerned about a specific legal or regulatory issue. Any statements or claims about the possible health benefits have not been evaluated by the Food and Drug Administration(FDA). These products are not intended to diagnose, treat, cure, or prevent any disease.<br></em></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
