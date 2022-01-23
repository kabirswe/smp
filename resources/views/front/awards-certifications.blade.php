@extends('front.layouts.app')

@section('content')
    <main class="main-container">
        <div class="awards-certifications-section">
            <div class="section-heading">
                <h1>
                    Awards & Certifications </h1>
                <div class="breadcrumbs">
                    <span>
                        <a property="item" typeof="WebPage"
                            title="Go to gummyspecialists.com | Your Premier Private Label Supplement Manufacturer."
                            href="{{ route('home') }}" class="home"><span property="name">gummyspecialists.com | Your
                                Premier Private Label Supplement Manufacturer</span></a>
                    </span>
                    <span>
                        <i class=" ti-arrow-right "></i>
                    </span>
                    <span property="name" class="post post-page current-item">Meet The Team</span>

                </div>

            </div>
            <div class="approval-wrapper">
                <div class="approvals">
                    <div class="heading">
                        <h1>

                            We Are The Supplement Experts

                        </h1>
                        <h3>
						Gummy Specialists stands for Quality, Service, and Innovation.
                        </h3>
                        <p>
                            Our loyalty is always to our customers and our community. The awards and certifications our
                            company
                            and staff have accrued are a testament to our dedication to our clients. Being recognized by
                            them
                            for our commitment to excellence, assurance, and quality is the greatest honor we can receive.
                        </p>

                    </div>
                    <div class="approved-by">
                        <img src="{{ asset('wp-content/uploads/2021/04/fda-removebg-preview-150x150.png') }}"
                            alt="fda">
                        <img src="{{ asset('wp-content/uploads/2021/04/CCMLogo_Draft2020-removebg-preview-150x150.png') }}"
                            alt="ribus">
                        <img src="{{ asset('wp-content/uploads/2021/04/CCMLogo_Draft2020-removebg-preview-150x150.png') }}"
                            alt="#">

                        <img src="{{ asset('wp-content/uploads/2021/04/fda-removebg-preview-150x150.png') }}"
                            alt="fda">
                        <img src="{{ asset('wp-content/uploads/2021/04/CCMLogo_Draft2020-removebg-preview-150x150.png') }}"
                            alt="ribus">
                        <img src="{{ asset('wp-content/uploads/2021/04/CCMLogo_Draft2020-removebg-preview-150x150.png') }}"
                            alt="#">
                        <img src="{{ asset('wp-content/uploads/2021/04/CCMLogo_Draft2020-removebg-preview-150x150.png') }}"
                            alt="ribus">
                        <img src="{{ asset('wp-content/uploads/2021/04/CCMLogo_Draft2020-removebg-preview-150x150.png') }}"
                            alt="#">
                    </div>
                </div>
            </div>
            <div class="panel-section-wrapper">
                <div class="panel-section">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">Awards</button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                aria-selected="false">Certifications</button>

                        </div>
                    </nav>
                    <div class="tab-content custom-class" id="nav-tabContent">
                        <div class="tab-pane fade show active customize" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="company-of-year-wrapper">
                                <div class="company-of-year">
                                    <div class="cy-left">
                                        <img src="{{ asset('wp-content/uploads/elementor/thumbs/gold-winner-p8ribh7e3k6bk8psrv7u70xxeluqq9otrlzeboz5cg.png') }}"
                                            alt="">

                                        <h1>
                                            2021 Manufacturing Company Of The Year
                                        </h1>

                                        <p>
										Gummy Specialists proudly accepted the Gold Stevie Award for the best manufacturing company of
                                            the year! This award is a testament to the hard work and dedication that every
                                            team member at Gummy Specialists puts in to deliver an experience no other manufacturer can.
                                        </p>

                                        <a href="#" class="btn">View Stevie
                                            Award
                                            Gallery
                                            <i class="ti ti-arrow-right"></i>
                                        </a>
                                    </div>
                                    <div class="cy-right">
                                        <img src="{{ asset('wp-content/uploads/2020/12/IMG_0023-1024x740.jpg') }}"
                                            alt="award">
                                    </div>
                                </div>

                            </div>
                            <div class="product-of-year-wrapper">
                                <div class="product-of-year">
                                    <div class="py-left">
                                        <img src="{{ asset('wp-content/uploads/2021/10/JZ3A4421.jpg') }}" alt="award">
                                    </div>
                                    <div class="py-right">
                                        <img src="{{ asset('wp-content/uploads/2021/10/Globee-logo.png') }}" alt="">

                                        <h1>
                                            2021 Manufacturing Company Of The Year
                                        </h1>

                                        <p>
										Gummy Specialists proudly accepted the Gold Stevie Award for the best manufacturing company of
                                            the year! This award is a testament to the hard work and dedication that every
                                            team member at Gummy Specialists puts in to deliver an experience no other manufacturer can.
                                        </p>

                                        <a href="#" class="btn">View Stevie
                                            Award
                                            Gallery
                                            <i class="ti ti-arrow-right"></i>
                                        </a>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade customize" id="nav-profile" role="tabpanel"
                            aria-labelledby="nav-profile-tab">
                            <div class="company-of-year-wrapper">
                                <div class="company-of-year">
                                    <div class="cy-left">
                                        <img src="{{ asset('wp-content/uploads/elementor/thumbs/gold-winner-p8ribh7e3k6bk8psrv7u70xxeluqq9otrlzeboz5cg.png') }}"
                                            alt="">

                                        <h1>
                                            2021 Manufacturing Company Of The Year
                                        </h1>

                                        <p>
										Gummy Specialists proudly accepted the Gold Stevie Award for the best manufacturing company of
                                            the year! This award is a testament to the hard work and dedication that every
                                            team member at Gummy Specialists puts in to deliver an experience no other manufacturer can.
                                        </p>

                                        <a href="#" class="btn">View Stevie
                                            Award
                                            Gallery
                                            <i class="ti ti-arrow-right"></i>
                                        </a>
                                    </div>
                                    <div class="cy-right">
                                        <img src="https://smpnutra.com/wp-content/uploads/2020/12/IMG_0023-1024x740.jpg"
                                            alt="award">
                                    </div>
                                </div>

                            </div>
                        </div>
                     </div>
                  </div>
                  <!--<div class="elementor-element elementor-element-30b8f22 elementor-widget elementor-widget-sm-default-button" data-id="30b8f22" data-element_type="widget" data-widget_type="sm-default-button.default">
                     <div class="elementor-widget-container"><a class="btn " href="#">View Stevie Award Gallery<i class="ti ti-arrow-right"></i></a></div>
                  </div>-->
               </div>
            </div>
         </div>
      </div>
   </div>
</section></div>
									<div class="elementor-tab-title elementor-tab-mobile-title" aria-selected="false" data-tab="2" role="tab" tabindex="-1" aria-controls="elementor-tab-content-5832" aria-expanded="false">Certifications</div>
					<div id="elementor-tab-content-5832" class="elementor-tab-content elementor-clearfix" data-tab="2" role="tabpanel" aria-labelledby="elementor-tab-title-5832" tabindex="0" hidden="hidden"><section class="elementor-section elementor-top-section elementor-element elementor-element-10b3474 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="10b3474" data-element_type="section" data-settings="{"><div class="elementor-container elementor-column-gap-default"><div class="elementor-row"><div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7e53fad" data-id="7e53fad" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div class="elementor-element elementor-element-8be0373 elementor-widget elementor-widget-image" data-id="8be0373" data-element_type="widget" data-widget_type="image.default"><div class="elementor-widget-container"><div class="elementor-image"><noscript><img  title="FDA" alt="FDA" data-src="https://smpnutra.com/wp-content/uploads/elementor/thumbs/FDA-p5btzqizlht38hdzn6yx0b0mdaxwpc5tknp2i1czg8.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  title="FDA" alt="FDA" data-src="https://smpnutra.com/wp-content/uploads/elementor/thumbs/FDA-p5btzqizlht38hdzn6yx0b0mdaxwpc5tknp2i1czg8.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="wp-content/uploads/elementor/thumbs/FDA-p5btzqizlht38hdzn6yx0b0mdaxwpc5tknp2i1czg8.png" title="FDA" alt="FDA"></noscript></noscript></noscript><br><img class=" ls-is-cached lazyloaded" title="FDA" src="wp-content/uploads/elementor/thumbs/FDA-p5btzqizlht38hdzn6yx0b0mdaxwpc5tknp2i1czg8.png" alt="FDA" data-src="https://smpnutra.com/wp-content/uploads/elementor/thumbs/FDA-p5btzqizlht38hdzn6yx0b0mdaxwpc5tknp2i1czg8.png"></div></div></div><div class="elementor-element elementor-element-33d116d elementor-widget elementor-widget-text-editor" data-id="33d116d" data-element_type="widget" data-widget_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix"><h2>FDA U.S. Food &amp; Drug Administration</h2><p><strong>FDA</strong> stands for the <strong>Food and Drug Administration</strong>, a government agency responsible for the safety of food, dietary supplements, human drugs, vaccines, blood products and other biologicals, medical devices, radiation-emitting electronics, cosmetics, veterinarian products and tobacco products being sold or manufactured in the United States. The FDA also inspects and enforces regulations related to these industries.</p><p>Organizations that manufacture, re-pack or re-label products in the aforementioned industries must register with the FDA, with the exception of cosmetics, where registration is voluntary.</p></div></div></div><div class="elementor-element elementor-element-15c1a80 elementor-widget elementor-widget-sm-default-button" data-id="15c1a80" data-element_type="widget" data-widget_type="sm-default-button.default"><div class="elementor-widget-container"><a class="btn " href="wp-content/uploads/2021/04/SMP-Nutra-FDA-Registration.png">View Registration<i class="ti ti-arrow-right"></i></a></div></div></div></div></div><div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-05af5a4" data-id="05af5a4" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div class="elementor-element elementor-element-243cb9f elementor-widget elementor-widget-image" data-id="243cb9f" data-element_type="widget" data-widget_type="image.default"><div class="elementor-widget-container"><div class="elementor-image"><noscript><img width="781" height="1024"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-781x1024.png 781w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-229x300.png 229w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-768x1007.png 768w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-1171x1536.png 1171w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-285x374.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-503x660.png 503w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-114x150.png 114w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration.png 1275w"  data-src="https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-781x1024.png" data-sizes="(max-width: 781px) 100vw, 781px" class="attachment-large size-large lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="781" height="1024"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-781x1024.png 781w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-229x300.png 229w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-768x1007.png 768w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-1171x1536.png 1171w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-285x374.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-503x660.png 503w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-114x150.png 114w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration.png 1275w"  data-src="https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-781x1024.png" data-sizes="(max-width: 781px) 100vw, 781px" class="attachment-large size-large lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="781" height="1024" src="wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-781x1024.png" class="attachment-large size-large" alt srcset="https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-781x1024.png 781w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-229x300.png 229w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-768x1007.png 768w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-1171x1536.png 1171w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-285x374.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-503x660.png 503w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-114x150.png 114w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration.png 1275w" sizes="(max-width: 781px) 100vw, 781px"></noscript></noscript></noscript><br><img class="attachment-large size-large ls-is-cached lazyloaded" src="wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-781x1024.png" sizes="(max-width: 781px) 100vw, 781px" srcset="https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-781x1024.png 781w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-229x300.png 229w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-768x1007.png 768w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-1171x1536.png 1171w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-285x374.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-503x660.png 503w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-114x150.png 114w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration.png 1275w" alt width="781" height="1024" data-srcset="https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-781x1024.png 781w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-229x300.png 229w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-768x1007.png 768w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-1171x1536.png 1171w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-285x374.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-503x660.png 503w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-114x150.png 114w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration.png 1275w" data-src="https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-781x1024.png"></div></div></div></div></div></div></div></div></section><section class="elementor-section elementor-top-section elementor-element elementor-element-2018ff0 elementor-section-content-middle elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2018ff0" data-element_type="section"><div class="elementor-container elementor-column-gap-default"><div class="elementor-row"><div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-97eae1e" data-id="97eae1e" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div class="elementor-element elementor-element-0e9e8cc elementor-widget elementor-widget-image" data-id="0e9e8cc" data-element_type="widget" data-widget_type="image.default"><div class="elementor-widget-container"><div class="elementor-image"><noscript><img width="768" height="576"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-768x576.png 768w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-300x225.png 300w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-1024x768.png 1024w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-1536x1152.png 1536w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-285x214.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-1600x1200.png 1600w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-660x495.png 660w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-150x113.png 150w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021.png 2000w"  data-src="https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-768x576.png" data-sizes="(max-width: 768px) 100vw, 768px" class="attachment-medium_large size-medium_large lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="768" height="576"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-768x576.png 768w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-300x225.png 300w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-1024x768.png 1024w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-1536x1152.png 1536w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-285x214.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-1600x1200.png 1600w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-660x495.png 660w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-150x113.png 150w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021.png 2000w"  data-src="https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-768x576.png" data-sizes="(max-width: 768px) 100vw, 768px" class="attachment-medium_large size-medium_large lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="768" height="576" src="wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-768x576.png" class="attachment-medium_large size-medium_large" alt srcset="https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-768x576.png 768w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-300x225.png 300w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-1024x768.png 1024w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-1536x1152.png 1536w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-285x214.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-1600x1200.png 1600w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-660x495.png 660w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-150x113.png 150w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021.png 2000w" sizes="(max-width: 768px) 100vw, 768px"></noscript></noscript></noscript><br><img class="attachment-medium_large size-medium_large ls-is-cached lazyloaded" src="wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-768x576.png" sizes="(max-width: 768px) 100vw, 768px" srcset="https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-768x576.png 768w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-300x225.png 300w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-1024x768.png 1024w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-1536x1152.png 1536w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-285x214.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-1600x1200.png 1600w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-660x495.png 660w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-150x113.png 150w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021.png 2000w" alt width="768" height="576" data-srcset="https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-768x576.png 768w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-300x225.png 300w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-1024x768.png 1024w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-1536x1152.png 1536w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-285x214.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-1600x1200.png 1600w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-660x495.png 660w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-150x113.png 150w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021.png 2000w" data-src="https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-768x576.png"></div></div></div></div></div></div><div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2e94056" data-id="2e94056" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div class="elementor-element elementor-element-6152ec8 elementor-widget elementor-widget-text-editor" data-id="6152ec8" data-element_type="widget" data-widget_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix"><h2>Certified Contract Manufacturer</h2><p>The RIBUS Certified Contract Manufacturer Program (CCM) is designed to recognize and support contract manufacturers that have demonstrated the ability to produce tablets and capsules using products from the RIBUS portfolio (Nu-FLOW, Nu-RICE, Nu-MAG or Nu-BIND) that are functional, rice-derived alternatives to ingredients like Silicon Dioxide and Mg Stearate.</p></div></div></div><div class="elementor-element elementor-element-a810c7c elementor-widget elementor-widget-sm-default-button" data-id="a810c7c" data-element_type="widget" data-widget_type="sm-default-button.default"><div class="elementor-widget-container"><a class="btn " href="wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021.png">View Certification<i class="ti ti-arrow-right"></i></a></div></div></div></div></div></div></div></section><section class="elementor-section elementor-top-section elementor-element elementor-element-c4fc471 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c4fc471" data-element_type="section" data-settings="{"><div class="elementor-container elementor-column-gap-default"><div class="elementor-row"><div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6382930" data-id="6382930" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div class="elementor-element elementor-element-caaaf80 elementor-widget elementor-widget-text-editor" data-id="caaaf80" data-element_type="widget" data-widget_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix"><h2 style="text-align: left;">Thomas Verified Supplier</h2><p style="text-align: left;">The Thomas Verified Supplier badge indicates that Thomas has confirmed the company operates in North America, provides accurate business information on the Thomasnet.com supplier discovery platform, has undergone a complete review and validation of all products and services currently offered, and are open to quoting new opportunities. The supplier can be contacted directly on Thomasnet.com using the “Contact Supplier” or “Request Quote” buttons.</p></div></div></div><div class="elementor-element elementor-element-e7ec2c9 elementor-widget elementor-widget-sm-default-button" data-id="e7ec2c9" data-element_type="widget" data-widget_type="sm-default-button.default"><div class="elementor-widget-container"><a class="btn " href="https://www.thomasnet.com/profile/30858854/supplement-manufacturing-partner-inc.html">View TomasNet profile<i class="ti ti-arrow-right"></i></a></div></div></div></div></div><div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4d5e093" data-id="4d5e093" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div class="elementor-element elementor-element-95dd615 elementor-widget elementor-widget-image" data-id="95dd615" data-element_type="widget" data-widget_type="image.default"><div class="elementor-widget-container"><div class="elementor-image"><noscript><img width="413" height="399"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/04/thomas.png 413w, https://smpnutra.com/wp-content/uploads/2021/04/thomas-300x290.png 300w, https://smpnutra.com/wp-content/uploads/2021/04/thomas-285x275.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/thomas-150x145.png 150w"  data-src="https://smpnutra.com/wp-content/uploads/2021/04/thomas.png" data-sizes="(max-width: 413px) 100vw, 413px" class="attachment-large size-large lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="413" height="399"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/04/thomas.png 413w, https://smpnutra.com/wp-content/uploads/2021/04/thomas-300x290.png 300w, https://smpnutra.com/wp-content/uploads/2021/04/thomas-285x275.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/thomas-150x145.png 150w"  data-src="https://smpnutra.com/wp-content/uploads/2021/04/thomas.png" data-sizes="(max-width: 413px) 100vw, 413px" class="attachment-large size-large lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="413" height="399" src="wp-content/uploads/2021/04/thomas.png" class="attachment-large size-large" alt srcset="https://smpnutra.com/wp-content/uploads/2021/04/thomas.png 413w, https://smpnutra.com/wp-content/uploads/2021/04/thomas-300x290.png 300w, https://smpnutra.com/wp-content/uploads/2021/04/thomas-285x275.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/thomas-150x145.png 150w" sizes="(max-width: 413px) 100vw, 413px"></noscript></noscript></noscript><br><img class="attachment-large size-large ls-is-cached lazyloaded" src="wp-content/uploads/2021/04/thomas.png" sizes="(max-width: 413px) 100vw, 413px" srcset="https://smpnutra.com/wp-content/uploads/2021/04/thomas.png 413w, https://smpnutra.com/wp-content/uploads/2021/04/thomas-300x290.png 300w, https://smpnutra.com/wp-content/uploads/2021/04/thomas-285x275.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/thomas-150x145.png 150w" alt width="413" height="399" data-srcset="https://smpnutra.com/wp-content/uploads/2021/04/thomas.png 413w, https://smpnutra.com/wp-content/uploads/2021/04/thomas-300x290.png 300w, https://smpnutra.com/wp-content/uploads/2021/04/thomas-285x275.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/thomas-150x145.png 150w" data-src="wp-content/uploads/2021/04/thomas.png"></div></div></div></div></div></div></div></div></section><section class="elementor-section elementor-top-section elementor-element elementor-element-315fd03 elementor-section-content-middle elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="315fd03" data-element_type="section"><div class="elementor-container elementor-column-gap-default"><div class="elementor-row"><div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c7cfac9" data-id="c7cfac9" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div class="elementor-element elementor-element-1804c5d elementor-widget elementor-widget-image" data-id="1804c5d" data-element_type="widget" data-widget_type="image.default"><div class="elementor-widget-container"><div class="elementor-image"><noscript><img width="300" height="200"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview.png 300w, https://smpnutra.com/wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview-285x190.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview-150x100.png 150w"  data-src="https://smpnutra.com/wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview.png" data-sizes="(max-width: 300px) 100vw, 300px" class="attachment-large size-large lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="300" height="200"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview.png 300w, https://smpnutra.com/wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview-285x190.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview-150x100.png 150w"  data-src="https://smpnutra.com/wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview.png" data-sizes="(max-width: 300px) 100vw, 300px" class="attachment-large size-large lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="300" height="200" src="wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview.png" class="attachment-large size-large" alt srcset="https://smpnutra.com/wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview.png 300w, https://smpnutra.com/wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview-285x190.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview-150x100.png 150w" sizes="(max-width: 300px) 100vw, 300px"></noscript></noscript></noscript><br><img class="attachment-large size-large ls-is-cached lazyloaded" src="wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview.png" sizes="(max-width: 300px) 100vw, 300px" srcset="https://smpnutra.com/wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview.png 300w, https://smpnutra.com/wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview-285x190.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview-150x100.png 150w" alt width="300" height="200" data-srcset="https://smpnutra.com/wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview.png 300w, https://smpnutra.com/wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview-285x190.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview-150x100.png 150w" data-src="wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview.png"></div></div></div><div class="elementor-element elementor-element-1faf218 elementor-widget elementor-widget-text-editor" data-id="1faf218" data-element_type="widget" data-widget_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix"><h2>Natural Products Association</h2><p>The&nbsp;<b>Natural Products Association</b>&nbsp;or&nbsp;<b>NPA</b>&nbsp;is the largest and oldest nonprofit organization representing the interests of manufacturers and retailers of the natural products industry, which includes&nbsp;organic&nbsp;and health foods,&nbsp;dietary supplements, natural ingredient&nbsp;cosmetics, and other similar products.</p></div></div></div><div class="elementor-element elementor-element-b145856 elementor-widget elementor-widget-sm-default-button" data-id="b145856" data-element_type="widget" data-widget_type="sm-default-button.default"><div class="elementor-widget-container"><a class="btn " href="wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner.png">View Certification<i class="ti ti-arrow-right"></i></a></div></div></div></div></div><div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4184abd" data-id="4184abd" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div class="elementor-element elementor-element-11ec89c elementor-widget elementor-widget-image" data-id="11ec89c" data-element_type="widget" data-widget_type="image.default"><div class="elementor-widget-container"><div class="elementor-image"><noscript><img width="791" height="1024"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-791x1024.png 791w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-232x300.png 232w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-768x994.png 768w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-1187x1536.png 1187w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-285x369.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-510x660.png 510w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-116x150.png 116w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner.png 1275w"  data-src="https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-791x1024.png" data-sizes="(max-width: 791px) 100vw, 791px" class="attachment-large size-large lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="791" height="1024"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-791x1024.png 791w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-232x300.png 232w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-768x994.png 768w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-1187x1536.png 1187w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-285x369.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-510x660.png 510w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-116x150.png 116w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner.png 1275w"  data-src="https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-791x1024.png" data-sizes="(max-width: 791px) 100vw, 791px" class="attachment-large size-large lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="791" height="1024" src="wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-791x1024.png" class="attachment-large size-large" alt srcset="https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-791x1024.png 791w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-232x300.png 232w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-768x994.png 768w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-1187x1536.png 1187w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-285x369.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-510x660.png 510w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-116x150.png 116w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner.png 1275w" sizes="(max-width: 791px) 100vw, 791px"></noscript></noscript></noscript><br><img class="attachment-large size-large ls-is-cached lazyloaded" src="wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-791x1024.png" sizes="(max-width: 791px) 100vw, 791px" srcset="https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-791x1024.png 791w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-232x300.png 232w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-768x994.png 768w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-1187x1536.png 1187w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-285x369.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-510x660.png 510w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-116x150.png 116w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner.png 1275w" alt width="791" height="1024" data-srcset="https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-791x1024.png 791w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-232x300.png 232w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-768x994.png 768w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-1187x1536.png 1187w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-285x369.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-510x660.png 510w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-116x150.png 116w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner.png 1275w" data-src="wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-791x1024.png"></div></div></div></div></div></div></div></div></section><section class="elementor-section elementor-top-section elementor-element elementor-element-ed2757c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ed2757c" data-element_type="section" data-settings="{"><div class="elementor-container elementor-column-gap-default"><div class="elementor-row"><div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b5743bc" data-id="b5743bc" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div class="elementor-element elementor-element-345ae8d elementor-widget elementor-widget-image" data-id="345ae8d" data-element_type="widget" data-widget_type="image.default"><div class="elementor-widget-container"><div class="elementor-image"><noscript><img width="300" height="300"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/04/shutterstock_1325809535-removebg-preview-1-300x300.png 300w, https://smpnutra.com/wp-content/uploads/2021/04/shutterstock_1325809535-removebg-preview-1-150x150.png 150w, https://smpnutra.com/wp-content/uploads/2021/04/shutterstock_1325809535-removebg-preview-1-285x285.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/shutterstock_1325809535-removebg-preview-1.png 500w"  data-src="https://smpnutra.com/wp-content/uploads/2021/04/shutterstock_1325809535-removebg-preview-1-300x300.png" data-sizes="(max-width: 300px) 100vw, 300px" class="attachment-medium size-medium lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="300" height="300"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/04/shutterstock_1325809535-removebg-preview-1-300x300.png 300w, https://smpnutra.com/wp-content/uploads/2021/04/shutterstock_1325809535-removebg-preview-1-150x150.png 150w, https://smpnutra.com/wp-content/uploads/2021/04/shutterstock_1325809535-removebg-preview-1-285x285.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/shutterstock_1325809535-removebg-preview-1.png 500w"  data-src="https://smpnutra.com/wp-content/uploads/2021/04/shutterstock_1325809535-removebg-preview-1-300x300.png" data-sizes="(max-width: 300px) 100vw, 300px" class="attachment-medium size-medium lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="300" height="300" src="wp-content/uploads/2021/04/shutterstock_1325809535-removebg-preview-1-300x300.png" class="attachment-medium size-medium" alt srcset="https://smpnutra.com/wp-content/uploads/2021/04/shutterstock_1325809535-removebg-preview-1-300x300.png 300w, https://smpnutra.com/wp-content/uploads/2021/04/shutterstock_1325809535-removebg-preview-1-150x150.png 150w, https://smpnutra.com/wp-content/uploads/2021/04/shutterstock_1325809535-removebg-preview-1-285x285.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/shutterstock_1325809535-removebg-preview-1.png 500w" sizes="(max-width: 300px) 100vw, 300px"></noscript></noscript></noscript><br><noscript><img   alt width="300" height="300" data-srcset="https://smpnutra.com/wp-content/uploads/2021/08/GMPBadge-300x300.png 300w, https://smpnutra.com/wp-content/uploads/2021/08/GMPBadge-150x150.png 150w, https://smpnutra.com/wp-content/uploads/2021/08/GMPBadge-768x768.png 768w, https://smpnutra.com/wp-content/uploads/2021/08/GMPBadge-285x285.png 285w, https://smpnutra.com/wp-content/uploads/2021/08/GMPBadge-660x660.png 660w, https://smpnutra.com/wp-content/uploads/2021/08/GMPBadge.png 992w"  data-src="https://smpnutra.com/wp-content/uploads/2021/08/GMPBadge-300x300.png" data-sizes="(max-width: 300px) 100vw, 300px" class="alignnone size-medium wp-image-816476 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img class="alignnone size-medium wp-image-816476" src="wp-content/uploads/2021/08/GMPBadge-300x300.png" alt width="300" height="300" srcset="https://smpnutra.com/wp-content/uploads/2021/08/GMPBadge-300x300.png 300w, https://smpnutra.com/wp-content/uploads/2021/08/GMPBadge-150x150.png 150w, https://smpnutra.com/wp-content/uploads/2021/08/GMPBadge-768x768.png 768w, https://smpnutra.com/wp-content/uploads/2021/08/GMPBadge-285x285.png 285w, https://smpnutra.com/wp-content/uploads/2021/08/GMPBadge-660x660.png 660w, https://smpnutra.com/wp-content/uploads/2021/08/GMPBadge.png 992w" sizes="(max-width: 300px) 100vw, 300px"></noscript></noscript><img class="alignnone size-medium wp-image-816476 lazyload" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20300%20300%22%3E%3C%2Fsvg%3E" alt width="300" height="300" data-src="wp-content/uploads/2021/08/GMPBadge-300x300.png"></div></div></div></div></div></div><div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5dff31b" data-id="5dff31b" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div class="elementor-element elementor-element-54a2e87 elementor-widget elementor-widget-text-editor" data-id="54a2e87" data-element_type="widget" data-widget_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix"><h2 style="text-align: left;">Good Manufacturing Practices</h2><p style="text-align: left;">A&nbsp;<b>Good Manufacturing Practices</b> or <b>GMP</b> <strong>certification&nbsp;</strong>scheme provides independent verification and&nbsp;certification&nbsp;that the basic manufacturing practices and prerequisites necessary for the implementation of an effective Hazard Analysis Critical Control Point (HACCP) food safety program are being followed.</p></div></div></div><div class="elementor-element elementor-element-c9deb98 elementor-widget elementor-widget-sm-default-button" data-id="c9deb98" data-element_type="widget" data-widget_type="sm-default-button.default"><div class="elementor-widget-container"><a class="btn " href="wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-GMP-Statement1.png">View Registration<i class="ti ti-arrow-right"></i></a></div></div></div></div></div></div></div></section><section class="elementor-section elementor-top-section elementor-element elementor-element-5fc3708 elementor-section-content-middle elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5fc3708" data-element_type="section"><div class="elementor-container elementor-column-gap-default"><div class="elementor-row"><div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a8042b9" data-id="a8042b9" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div class="elementor-element elementor-element-405f316 elementor-widget elementor-widget-image" data-id="405f316" data-element_type="widget" data-widget_type="image.default"><div class="elementor-widget-container"><div class="elementor-image"><noscript><img width="251" height="184"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/05/title.png 251w, https://smpnutra.com/wp-content/uploads/2021/05/title-150x110.png 150w"  data-src="https://smpnutra.com/wp-content/uploads/2021/05/title.png" data-sizes="(max-width: 251px) 100vw, 251px" class="attachment-medium size-medium lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="251" height="184"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/05/title.png 251w, https://smpnutra.com/wp-content/uploads/2021/05/title-150x110.png 150w"  data-src="https://smpnutra.com/wp-content/uploads/2021/05/title.png" data-sizes="(max-width: 251px) 100vw, 251px" class="attachment-medium size-medium lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="251" height="184"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/05/title.png 251w, https://smpnutra.com/wp-content/uploads/2021/05/title-150x110.png 150w"  data-src="https://smpnutra.com/wp-content/uploads/2021/05/title.png" data-sizes="(max-width: 251px) 100vw, 251px" class="attachment-medium size-medium lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="251" height="184" src="wp-content/uploads/2021/05/title.png" class="attachment-medium size-medium" alt srcset="https://smpnutra.com/wp-content/uploads/2021/05/title.png 251w, https://smpnutra.com/wp-content/uploads/2021/05/title-150x110.png 150w" sizes="(max-width: 251px) 100vw, 251px"></noscript></noscript></noscript></noscript><br><img class="attachment-medium size-medium ls-is-cached lazyloaded" src="wp-content/uploads/2021/05/title.png" sizes="(max-width: 251px) 100vw, 251px" srcset="https://smpnutra.com/wp-content/uploads/2021/05/title.png 251w, https://smpnutra.com/wp-content/uploads/2021/05/title-150x110.png 150w" alt width="251" height="184" data-srcset="https://smpnutra.com/wp-content/uploads/2021/05/title.png 251w, https://smpnutra.com/wp-content/uploads/2021/05/title-150x110.png 150w" data-src="wp-content/uploads/2021/05/title.png"></div></div></div><div class="elementor-element elementor-element-cf95f84 elementor-widget elementor-widget-text-editor" data-id="cf95f84" data-element_type="widget" data-widget_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix"><h2>Eurofins VIP Certified</h2><p><strong>Eurofins</strong> provides programs tailored for food, feed, and supplement manufacturers and procurement teams, as well as provides guidance to their contracted production plants manufacturing ‘Non-GMO’ products. Eurofins GeneScan offers ready-made solutions including 3<sup>rd</sup>&nbsp;party Verification of In-House Program (Eurofins VIP).</p></div></div></div><div class="elementor-element elementor-element-2c2d0b4 elementor-widget elementor-widget-sm-default-button" data-id="2c2d0b4" data-element_type="widget" data-widget_type="sm-default-button.default"><div class="elementor-widget-container"><a class="btn " href="wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022.png">View Certification<i class="ti ti-arrow-right"></i></a></div></div></div></div></div><div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4751c74" data-id="4751c74" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div class="elementor-element elementor-element-ea1a290 elementor-widget elementor-widget-image" data-id="ea1a290" data-element_type="widget" data-widget_type="image.default"><div class="elementor-widget-container"><div class="elementor-image"><noscript><img width="792" height="1024"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-792x1024.png 792w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-232x300.png 232w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-768x994.png 768w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-1187x1536.png 1187w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-285x369.png 285w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-510x660.png 510w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-116x150.png 116w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022.png 1369w"  data-src="https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-792x1024.png" data-sizes="(max-width: 792px) 100vw, 792px" class="attachment-large size-large lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="792" height="1024"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-792x1024.png 792w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-232x300.png 232w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-768x994.png 768w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-1187x1536.png 1187w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-285x369.png 285w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-510x660.png 510w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-116x150.png 116w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022.png 1369w"  data-src="https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-792x1024.png" data-sizes="(max-width: 792px) 100vw, 792px" class="attachment-large size-large lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="792" height="1024" src="wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-792x1024.png" class="attachment-large size-large" alt srcset="https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-792x1024.png 792w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-232x300.png 232w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-768x994.png 768w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-1187x1536.png 1187w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-285x369.png 285w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-510x660.png 510w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-116x150.png 116w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022.png 1369w" sizes="(max-width: 792px) 100vw, 792px"></noscript></noscript></noscript><br><img class="attachment-large size-large ls-is-cached lazyloaded" src="wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-792x1024.png" sizes="(max-width: 792px) 100vw, 792px" srcset="https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-792x1024.png 792w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-232x300.png 232w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-768x994.png 768w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-1187x1536.png 1187w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-285x369.png 285w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-510x660.png 510w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-116x150.png 116w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022.png 1369w" alt width="792" height="1024" data-srcset="https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-792x1024.png 792w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-232x300.png 232w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-768x994.png 768w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-1187x1536.png 1187w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-285x369.png 285w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-510x660.png 510w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-116x150.png 116w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022.png 1369w" data-src="wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-792x1024.png"></div></div></div></div></div></div></div></div></section><section class="elementor-section elementor-top-section elementor-element elementor-element-2f52464 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2f52464" data-element_type="section" data-settings="{"><div class="elementor-container elementor-column-gap-default"><div class="elementor-row"><div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-d93abec" data-id="d93abec" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div class="elementor-element elementor-element-f988961 elementor-widget elementor-widget-image" data-id="f988961" data-element_type="widget" data-widget_type="image.default"><div class="elementor-widget-container"><div class="elementor-image"><noscript><img width="257" height="263"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/05/Non-GMO-Logo_72dpi_forweb.png 257w, https://smpnutra.com/wp-content/uploads/2021/05/Non-GMO-Logo_72dpi_forweb-147x150.png 147w"  data-src="https://smpnutra.com/wp-content/uploads/2021/05/Non-GMO-Logo_72dpi_forweb.png" data-sizes="(max-width: 257px) 100vw, 257px" class="attachment-medium size-medium lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="257" height="263"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/05/Non-GMO-Logo_72dpi_forweb.png 257w, https://smpnutra.com/wp-content/uploads/2021/05/Non-GMO-Logo_72dpi_forweb-147x150.png 147w"  data-src="https://smpnutra.com/wp-content/uploads/2021/05/Non-GMO-Logo_72dpi_forweb.png" data-sizes="(max-width: 257px) 100vw, 257px" class="attachment-medium size-medium lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="257" height="263" src="wp-content/uploads/2021/05/Non-GMO-Logo_72dpi_forweb.png" class="attachment-medium size-medium" alt srcset="https://smpnutra.com/wp-content/uploads/2021/05/Non-GMO-Logo_72dpi_forweb.png 257w, https://smpnutra.com/wp-content/uploads/2021/05/Non-GMO-Logo_72dpi_forweb-147x150.png 147w" sizes="(max-width: 257px) 100vw, 257px"></noscript></noscript></noscript><br><img class="attachment-medium size-medium ls-is-cached lazyloaded" src="wp-content/uploads/2021/05/Non-GMO-Logo_72dpi_forweb.png" sizes="(max-width: 257px) 100vw, 257px" srcset="https://smpnutra.com/wp-content/uploads/2021/05/Non-GMO-Logo_72dpi_forweb.png 257w, https://smpnutra.com/wp-content/uploads/2021/05/Non-GMO-Logo_72dpi_forweb-147x150.png 147w" alt width="257" height="263" data-srcset="https://smpnutra.com/wp-content/uploads/2021/05/Non-GMO-Logo_72dpi_forweb.png 257w, https://smpnutra.com/wp-content/uploads/2021/05/Non-GMO-Logo_72dpi_forweb-147x150.png 147w" data-src="wp-content/uploads/2021/05/Non-GMO-Logo_72dpi_forweb.png"></div></div></div></div></div></div><div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b42e4d2" data-id="b42e4d2" data-element_type="column"><div class="elementor-column-wrap elementor-element-populated"><div class="elementor-widget-wrap"><div class="elementor-element elementor-element-6cb8a64 elementor-widget elementor-widget-text-editor" data-id="6cb8a64" data-element_type="widget" data-widget_type="text-editor.default"><div class="elementor-widget-container"><div class="elementor-text-editor elementor-clearfix"><h2 style="text-align: left;">Eurofins Non-GMO Verified Products</h2><p style="text-align: left;">Eurofins Scientific offers <strong>numerous forms of testing and verifications</strong> through one of their state-of-the-art labs around the world. To enable and promote transparency and trust with customers, this certification is verifying exactly that.</p></div></div></div><div class="elementor-element elementor-element-4327733 elementor-widget elementor-widget-sm-default-button" data-id="4327733" data-element_type="widget" data-widget_type="sm-default-button.default"><div class="elementor-widget-container"><a class="btn " href="eurofins-non-gmo-verification.html">Learn More<i class="ti ti-arrow-right"></i></a></div></div></div></div></div></div></div></section></div>
							</div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-e8967a9 elementor-widget elementor-widget-text-editor" data-id="e8967a9" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
										</div>
						</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-10b3474 fst-sec elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="10b3474" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7e53fad" data-id="7e53fad" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-8be0373 elementor-widget elementor-widget-image" data-id="8be0373" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<noscript><img  title="FDA" alt="FDA" data-src="https://smpnutra.com/wp-content/uploads/elementor/thumbs/FDA-p5btzqizlht38hdzn6yx0b0mdaxwpc5tknp2i1czg8.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  title="FDA" alt="FDA" data-src="https://smpnutra.com/wp-content/uploads/elementor/thumbs/FDA-p5btzqizlht38hdzn6yx0b0mdaxwpc5tknp2i1czg8.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="wp-content/uploads/elementor/thumbs/FDA-p5btzqizlht38hdzn6yx0b0mdaxwpc5tknp2i1czg8.png" title="FDA" alt="FDA"></noscript></noscript></noscript><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" title="FDA" alt="FDA" data-src="https://smpnutra.com/wp-content/uploads/elementor/thumbs/FDA-p5btzqizlht38hdzn6yx0b0mdaxwpc5tknp2i1czg8.png" class=" lazyload">														</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-33d116d elementor-widget elementor-widget-text-editor" data-id="33d116d" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
					<h2>FDA U.S. Food &amp; Drug Administration</h2><p><strong>FDA</strong> stands for the <strong>Food and Drug Administration</strong>, a government agency responsible for the safety of food, dietary supplements, human drugs, vaccines, blood products and other biologicals, medical devices, radiation-emitting electronics, cosmetics, veterinarian products and tobacco products being sold or manufactured in the United States. The FDA also inspects and enforces regulations related to these industries.<br><br>Organizations that manufacture, re-pack or re-label products in the aforementioned industries must register with the FDA, with the exception of cosmetics, where registration is voluntary.</p>					</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-15c1a80 elementor-widget elementor-widget-sm-default-button" data-id="15c1a80" data-element_type="widget" data-widget_type="sm-default-button.default">
				<div class="elementor-widget-container">

				<a href="wp-content/uploads/2021/04/SMP-Nutra-FDA-Registration.png" class="btn  ">View Registration<i class="ti ti-arrow-right"></i></a>

			</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-05af5a4" data-id="05af5a4" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-243cb9f elementor-widget elementor-widget-image" data-id="243cb9f" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<noscript><img width="781" height="1024"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-781x1024.png 781w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-229x300.png 229w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-768x1007.png 768w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-1171x1536.png 1171w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-285x374.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-503x660.png 503w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-114x150.png 114w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration.png 1275w"  data-src="https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-781x1024.png" data-sizes="(max-width: 781px) 100vw, 781px" class="attachment-large size-large lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="781" height="1024"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-781x1024.png 781w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-229x300.png 229w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-768x1007.png 768w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-1171x1536.png 1171w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-285x374.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-503x660.png 503w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-114x150.png 114w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration.png 1275w"  data-src="https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-781x1024.png" data-sizes="(max-width: 781px) 100vw, 781px" class="attachment-large size-large lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="781" height="1024" src="wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-781x1024.png" class="attachment-large size-large" alt srcset="https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-781x1024.png 781w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-229x300.png 229w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-768x1007.png 768w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-1171x1536.png 1171w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-285x374.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-503x660.png 503w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-114x150.png 114w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration.png 1275w" sizes="(max-width: 781px) 100vw, 781px"></noscript></noscript></noscript><img width="781" height="1024" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20781%201024%22%3E%3C%2Fsvg%3E" class="attachment-large size-large lazyload" alt srcset="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20781%201024%22%3E%3C%2Fsvg%3E 781w" sizes="(max-width: 781px) 100vw, 781px" data-srcset="https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-781x1024.png 781w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-229x300.png 229w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-768x1007.png 768w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-1171x1536.png 1171w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-285x374.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-503x660.png 503w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-114x150.png 114w, https://smpnutra.com/wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration.png 1275w" data-src="wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-FDA-Certificate-of-Registration-781x1024.png">														</div>
						</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-2018ff0 elementor-section-content-middle elementor-reverse-mobile sec-sec elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2018ff0" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-97eae1e" data-id="97eae1e" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-0e9e8cc elementor-widget elementor-widget-image" data-id="0e9e8cc" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<noscript><img width="768" height="576"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-768x576.png 768w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-300x225.png 300w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-1024x768.png 1024w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-1536x1152.png 1536w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-285x214.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-1600x1200.png 1600w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-660x495.png 660w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-150x113.png 150w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021.png 2000w"  data-src="https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-768x576.png" data-sizes="(max-width: 768px) 100vw, 768px" class="attachment-medium_large size-medium_large lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="768" height="576"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-768x576.png 768w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-300x225.png 300w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-1024x768.png 1024w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-1536x1152.png 1536w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-285x214.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-1600x1200.png 1600w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-660x495.png 660w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-150x113.png 150w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021.png 2000w"  data-src="https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-768x576.png" data-sizes="(max-width: 768px) 100vw, 768px" class="attachment-medium_large size-medium_large lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="768" height="576" src="wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-768x576.png" class="attachment-medium_large size-medium_large" alt srcset="https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-768x576.png 768w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-300x225.png 300w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-1024x768.png 1024w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-1536x1152.png 1536w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-285x214.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-1600x1200.png 1600w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-660x495.png 660w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-150x113.png 150w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021.png 2000w" sizes="(max-width: 768px) 100vw, 768px"></noscript></noscript></noscript><img width="768" height="576" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20768%20576%22%3E%3C%2Fsvg%3E" class="attachment-medium_large size-medium_large lazyload" alt srcset="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20768%20576%22%3E%3C%2Fsvg%3E 768w" sizes="(max-width: 768px) 100vw, 768px" data-srcset="https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-768x576.png 768w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-300x225.png 300w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-1024x768.png 1024w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-1536x1152.png 1536w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-285x214.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-1600x1200.png 1600w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-660x495.png 660w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-150x113.png 150w, https://smpnutra.com/wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021.png 2000w" data-src="wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021-768x576.png">														</div>
						</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2e94056" data-id="2e94056" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-6152ec8 elementor-widget elementor-widget-text-editor" data-id="6152ec8" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
					<h2>Certified Contract Manufacturer</h2><p>The RIBUS Certified Contract Manufacturer Program (CCM) is designed to recognize and support contract manufacturers that have demonstrated the ability to produce tablets and capsules using products from the RIBUS portfolio (Nu-FLOW, Nu-RICE, Nu-MAG or Nu-BIND) that are functional, rice-derived alternatives to ingredients like Silicon Dioxide and Mg Stearate.</p>					</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-a810c7c elementor-widget elementor-widget-sm-default-button" data-id="a810c7c" data-element_type="widget" data-widget_type="sm-default-button.default">
				<div class="elementor-widget-container">

				<a href="wp-content/uploads/2021/04/RIBUS_CCM_Cert_SupplementManufacturingPartner_Feb2021.png" class="btn  ">View Certification<i class="ti ti-arrow-right"></i></a>

			</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-c4fc471 thrd-sec elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c4fc471" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6382930" data-id="6382930" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-caaaf80 elementor-widget elementor-widget-text-editor" data-id="caaaf80" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
					<h2 style="text-align: left;">Thomas Verified Supplier</h2><p style="text-align: left;">The Thomas Verified Supplier badge indicates that Thomas has confirmed the company operates in North America, provides accurate business information on the Thomasnet.com supplier discovery platform, has undergone a complete review and validation of all products and services currently offered, and are open to quoting new opportunities. The supplier can be contacted directly on Thomasnet.com using the &#8220;Contact Supplier&#8221; or &#8220;Request Quote&#8221; buttons.</p>					</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-e7ec2c9 elementor-widget elementor-widget-sm-default-button" data-id="e7ec2c9" data-element_type="widget" data-widget_type="sm-default-button.default">
				<div class="elementor-widget-container">

				<a href="https://www.thomasnet.com/profile/30858854/supplement-manufacturing-partner-inc.html" class="btn  ">View TomasNet profile<i class="ti ti-arrow-right"></i></a>

			</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4d5e093" data-id="4d5e093" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-95dd615 elementor-widget elementor-widget-image" data-id="95dd615" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<noscript><img width="413" height="399"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/04/thomas.png 413w, https://smpnutra.com/wp-content/uploads/2021/04/thomas-300x290.png 300w, https://smpnutra.com/wp-content/uploads/2021/04/thomas-285x275.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/thomas-150x145.png 150w"  data-src="https://smpnutra.com/wp-content/uploads/2021/04/thomas.png" data-sizes="(max-width: 413px) 100vw, 413px" class="attachment-large size-large lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="413" height="399"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/04/thomas.png 413w, https://smpnutra.com/wp-content/uploads/2021/04/thomas-300x290.png 300w, https://smpnutra.com/wp-content/uploads/2021/04/thomas-285x275.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/thomas-150x145.png 150w"  data-src="https://smpnutra.com/wp-content/uploads/2021/04/thomas.png" data-sizes="(max-width: 413px) 100vw, 413px" class="attachment-large size-large lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="413" height="399" src="wp-content/uploads/2021/04/thomas.png" class="attachment-large size-large" alt srcset="https://smpnutra.com/wp-content/uploads/2021/04/thomas.png 413w, https://smpnutra.com/wp-content/uploads/2021/04/thomas-300x290.png 300w, https://smpnutra.com/wp-content/uploads/2021/04/thomas-285x275.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/thomas-150x145.png 150w" sizes="(max-width: 413px) 100vw, 413px"></noscript></noscript></noscript><img width="413" height="399" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20413%20399%22%3E%3C%2Fsvg%3E" class="attachment-large size-large lazyload" alt srcset="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20413%20399%22%3E%3C%2Fsvg%3E 413w" sizes="(max-width: 413px) 100vw, 413px" data-srcset="https://smpnutra.com/wp-content/uploads/2021/04/thomas.png 413w, https://smpnutra.com/wp-content/uploads/2021/04/thomas-300x290.png 300w, https://smpnutra.com/wp-content/uploads/2021/04/thomas-285x275.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/thomas-150x145.png 150w" data-src="wp-content/uploads/2021/04/thomas.png">														</div>
						</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-315fd03 elementor-section-content-middle elementor-reverse-mobile frth-sec elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="315fd03" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c7cfac9" data-id="c7cfac9" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-1804c5d elementor-widget elementor-widget-image" data-id="1804c5d" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<noscript><img width="300" height="200"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview.png 300w, https://smpnutra.com/wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview-285x190.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview-150x100.png 150w"  data-src="https://smpnutra.com/wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview.png" data-sizes="(max-width: 300px) 100vw, 300px" class="attachment-large size-large lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="300" height="200"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview.png 300w, https://smpnutra.com/wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview-285x190.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview-150x100.png 150w"  data-src="https://smpnutra.com/wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview.png" data-sizes="(max-width: 300px) 100vw, 300px" class="attachment-large size-large lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="300" height="200" src="wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview.png" class="attachment-large size-large" alt srcset="https://smpnutra.com/wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview.png 300w, https://smpnutra.com/wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview-285x190.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview-150x100.png 150w" sizes="(max-width: 300px) 100vw, 300px"></noscript></noscript></noscript><img width="300" height="200" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20300%20200%22%3E%3C%2Fsvg%3E" class="attachment-large size-large lazyload" alt srcset="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20300%20200%22%3E%3C%2Fsvg%3E 300w" sizes="(max-width: 300px) 100vw, 300px" data-srcset="https://smpnutra.com/wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview.png 300w, https://smpnutra.com/wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview-285x190.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview-150x100.png 150w" data-src="wp-content/uploads/2021/04/2021_NPA_member_logo_for_web-removebg-preview.png">														</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-1faf218 elementor-widget elementor-widget-text-editor" data-id="1faf218" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
					<h2>Natural Products Association</h2><p>The&nbsp;<b>Natural Products Association</b>&nbsp;or&nbsp;<b>NPA</b>&nbsp;is the largest and oldest nonprofit organization representing the interests of manufacturers and retailers of the natural products industry, which includes&nbsp;organic&nbsp;and health foods,&nbsp;dietary supplements, natural ingredient&nbsp;cosmetics, and other similar products.</p>					</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-b145856 elementor-widget elementor-widget-sm-default-button" data-id="b145856" data-element_type="widget" data-widget_type="sm-default-button.default">
				<div class="elementor-widget-container">

				<a href="wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner.png" class="btn  ">View Certification<i class="ti ti-arrow-right"></i></a>

			</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4184abd" data-id="4184abd" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-11ec89c elementor-widget elementor-widget-image" data-id="11ec89c" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<noscript><img width="791" height="1024"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-791x1024.png 791w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-232x300.png 232w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-768x994.png 768w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-1187x1536.png 1187w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-285x369.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-510x660.png 510w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-116x150.png 116w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner.png 1275w"  data-src="https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-791x1024.png" data-sizes="(max-width: 791px) 100vw, 791px" class="attachment-large size-large lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="791" height="1024"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-791x1024.png 791w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-232x300.png 232w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-768x994.png 768w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-1187x1536.png 1187w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-285x369.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-510x660.png 510w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-116x150.png 116w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner.png 1275w"  data-src="https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-791x1024.png" data-sizes="(max-width: 791px) 100vw, 791px" class="attachment-large size-large lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="791" height="1024" src="wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-791x1024.png" class="attachment-large size-large" alt srcset="https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-791x1024.png 791w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-232x300.png 232w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-768x994.png 768w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-1187x1536.png 1187w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-285x369.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-510x660.png 510w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-116x150.png 116w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner.png 1275w" sizes="(max-width: 791px) 100vw, 791px"></noscript></noscript></noscript><img width="791" height="1024" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20791%201024%22%3E%3C%2Fsvg%3E" class="attachment-large size-large lazyload" alt srcset="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20791%201024%22%3E%3C%2Fsvg%3E 791w" sizes="(max-width: 791px) 100vw, 791px" data-srcset="https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-791x1024.png 791w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-232x300.png 232w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-768x994.png 768w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-1187x1536.png 1187w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-285x369.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-510x660.png 510w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-116x150.png 116w, https://smpnutra.com/wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner.png 1275w" data-src="wp-content/uploads/2021/04/NPA-Member-in-Good-Standing-for-Supplement-Manufacturing-Partner-791x1024.png">														</div>
						</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-ed2757c fifth-sec elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ed2757c" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b5743bc" data-id="b5743bc" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-345ae8d elementor-widget elementor-widget-image" data-id="345ae8d" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<noscript><img width="300" height="300"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/04/shutterstock_1325809535-removebg-preview-1-300x300.png 300w, https://smpnutra.com/wp-content/uploads/2021/04/shutterstock_1325809535-removebg-preview-1-150x150.png 150w, https://smpnutra.com/wp-content/uploads/2021/04/shutterstock_1325809535-removebg-preview-1-285x285.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/shutterstock_1325809535-removebg-preview-1.png 500w"  data-src="https://smpnutra.com/wp-content/uploads/2021/04/shutterstock_1325809535-removebg-preview-1-300x300.png" data-sizes="(max-width: 300px) 100vw, 300px" class="attachment-medium size-medium lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="300" height="300"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/04/shutterstock_1325809535-removebg-preview-1-300x300.png 300w, https://smpnutra.com/wp-content/uploads/2021/04/shutterstock_1325809535-removebg-preview-1-150x150.png 150w, https://smpnutra.com/wp-content/uploads/2021/04/shutterstock_1325809535-removebg-preview-1-285x285.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/shutterstock_1325809535-removebg-preview-1.png 500w"  data-src="https://smpnutra.com/wp-content/uploads/2021/04/shutterstock_1325809535-removebg-preview-1-300x300.png" data-sizes="(max-width: 300px) 100vw, 300px" class="attachment-medium size-medium lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="300" height="300" src="wp-content/uploads/2021/04/shutterstock_1325809535-removebg-preview-1-300x300.png" class="attachment-medium size-medium" alt srcset="https://smpnutra.com/wp-content/uploads/2021/04/shutterstock_1325809535-removebg-preview-1-300x300.png 300w, https://smpnutra.com/wp-content/uploads/2021/04/shutterstock_1325809535-removebg-preview-1-150x150.png 150w, https://smpnutra.com/wp-content/uploads/2021/04/shutterstock_1325809535-removebg-preview-1-285x285.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/shutterstock_1325809535-removebg-preview-1.png 500w" sizes="(max-width: 300px) 100vw, 300px"></noscript></noscript></noscript><img width="300" height="300" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20300%20300%22%3E%3C%2Fsvg%3E" class="attachment-medium size-medium lazyload" alt srcset="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20300%20300%22%3E%3C%2Fsvg%3E 300w" sizes="(max-width: 300px) 100vw, 300px" data-srcset="https://smpnutra.com/wp-content/uploads/2021/04/shutterstock_1325809535-removebg-preview-1-300x300.png 300w, https://smpnutra.com/wp-content/uploads/2021/04/shutterstock_1325809535-removebg-preview-1-150x150.png 150w, https://smpnutra.com/wp-content/uploads/2021/04/shutterstock_1325809535-removebg-preview-1-285x285.png 285w, https://smpnutra.com/wp-content/uploads/2021/04/shutterstock_1325809535-removebg-preview-1.png 500w" data-src="wp-content/uploads/2021/04/shutterstock_1325809535-removebg-preview-1-300x300.png">														</div>
						</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5dff31b" data-id="5dff31b" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-54a2e87 elementor-widget elementor-widget-text-editor" data-id="54a2e87" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
					<h2 style="text-align: left;">Good Manufacturing Practices</h2><p style="text-align: left;">A&nbsp;<b>Good Manufacturing Practices</b> or <b>GMP</b> <strong>certification&nbsp;</strong>scheme provides independent verification and&nbsp;certification&nbsp;that the basic manufacturing practices and prerequisites necessary for the implementation of an effective Hazard Analysis Critical Control Point (HACCP) food safety program are being followed.</p>					</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-c9deb98 elementor-widget elementor-widget-sm-default-button" data-id="c9deb98" data-element_type="widget" data-widget_type="sm-default-button.default">
				<div class="elementor-widget-container">

				<a href="wp-content/uploads/2021/04/Supplement-Manufacturing-Partner-Inc.-GMP-Statement1.png" class="btn  ">View Registration<i class="ti ti-arrow-right"></i></a>

			</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-5fc3708 elementor-section-content-middle elementor-reverse-mobile sixth-sec elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5fc3708" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a8042b9" data-id="a8042b9" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-405f316 elementor-widget elementor-widget-image" data-id="405f316" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<noscript><img width="251" height="184"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/05/title.png 251w, https://smpnutra.com/wp-content/uploads/2021/05/title-150x110.png 150w"  data-src="https://smpnutra.com/wp-content/uploads/2021/05/title.png" data-sizes="(max-width: 251px) 100vw, 251px" class="attachment-medium size-medium lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="251" height="184"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/05/title.png 251w, https://smpnutra.com/wp-content/uploads/2021/05/title-150x110.png 150w"  data-src="https://smpnutra.com/wp-content/uploads/2021/05/title.png" data-sizes="(max-width: 251px) 100vw, 251px" class="attachment-medium size-medium lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="251" height="184"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/05/title.png 251w, https://smpnutra.com/wp-content/uploads/2021/05/title-150x110.png 150w"  data-src="https://smpnutra.com/wp-content/uploads/2021/05/title.png" data-sizes="(max-width: 251px) 100vw, 251px" class="attachment-medium size-medium lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="251" height="184" src="wp-content/uploads/2021/05/title.png" class="attachment-medium size-medium" alt srcset="https://smpnutra.com/wp-content/uploads/2021/05/title.png 251w, https://smpnutra.com/wp-content/uploads/2021/05/title-150x110.png 150w" sizes="(max-width: 251px) 100vw, 251px"></noscript></noscript></noscript></noscript><img width="251" height="184" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20251%20184%22%3E%3C%2Fsvg%3E" class="attachment-medium size-medium lazyload" alt srcset="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20251%20184%22%3E%3C%2Fsvg%3E 251w" sizes="(max-width: 251px) 100vw, 251px" data-srcset="https://smpnutra.com/wp-content/uploads/2021/05/title.png 251w, https://smpnutra.com/wp-content/uploads/2021/05/title-150x110.png 150w" data-src="wp-content/uploads/2021/05/title.png">														</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-cf95f84 elementor-widget elementor-widget-text-editor" data-id="cf95f84" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
					<h2>Eurofins VIP Certified</h2><p><strong>Eurofins</strong> provides programs tailored for food, feed, and supplement manufacturers and procurement teams, as well as provides guidance to their contracted production plants manufacturing ‘Non-GMO’ products. Eurofins GeneScan offers ready-made solutions including 3<sup>rd</sup>&nbsp;party Verification of In-House Program (Eurofins VIP).</p>					</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-2c2d0b4 elementor-widget elementor-widget-sm-default-button" data-id="2c2d0b4" data-element_type="widget" data-widget_type="sm-default-button.default">
				<div class="elementor-widget-container">

				<a href="wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022.png" class="btn  ">View Certification<i class="ti ti-arrow-right"></i></a>

			</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4751c74" data-id="4751c74" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-ea1a290 elementor-widget elementor-widget-image" data-id="ea1a290" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<noscript><img width="792" height="1024"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-792x1024.png 792w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-232x300.png 232w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-768x994.png 768w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-1187x1536.png 1187w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-285x369.png 285w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-510x660.png 510w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-116x150.png 116w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022.png 1369w"  data-src="https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-792x1024.png" data-sizes="(max-width: 792px) 100vw, 792px" class="attachment-large size-large lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="792" height="1024"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-792x1024.png 792w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-232x300.png 232w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-768x994.png 768w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-1187x1536.png 1187w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-285x369.png 285w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-510x660.png 510w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-116x150.png 116w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022.png 1369w"  data-src="https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-792x1024.png" data-sizes="(max-width: 792px) 100vw, 792px" class="attachment-large size-large lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="792" height="1024" src="wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-792x1024.png" class="attachment-large size-large" alt srcset="https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-792x1024.png 792w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-232x300.png 232w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-768x994.png 768w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-1187x1536.png 1187w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-285x369.png 285w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-510x660.png 510w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-116x150.png 116w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022.png 1369w" sizes="(max-width: 792px) 100vw, 792px"></noscript></noscript></noscript><img width="792" height="1024" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20792%201024%22%3E%3C%2Fsvg%3E" class="attachment-large size-large lazyload" alt srcset="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20792%201024%22%3E%3C%2Fsvg%3E 792w" sizes="(max-width: 792px) 100vw, 792px" data-srcset="https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-792x1024.png 792w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-232x300.png 232w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-768x994.png 768w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-1187x1536.png 1187w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-285x369.png 285w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-510x660.png 510w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-116x150.png 116w, https://smpnutra.com/wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022.png 1369w" data-src="wp-content/uploads/2021/05/VIP-Letter-Of-Verification-exp-May-2022-792x1024.png">														</div>
						</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-2f52464 sev-sec elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2f52464" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-d93abec" data-id="d93abec" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-f988961 elementor-widget elementor-widget-image" data-id="f988961" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<noscript><img width="257" height="263"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/05/Non-GMO-Logo_72dpi_forweb.png 257w, https://smpnutra.com/wp-content/uploads/2021/05/Non-GMO-Logo_72dpi_forweb-147x150.png 147w"  data-src="https://smpnutra.com/wp-content/uploads/2021/05/Non-GMO-Logo_72dpi_forweb.png" data-sizes="(max-width: 257px) 100vw, 257px" class="attachment-medium size-medium lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="257" height="263"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2021/05/Non-GMO-Logo_72dpi_forweb.png 257w, https://smpnutra.com/wp-content/uploads/2021/05/Non-GMO-Logo_72dpi_forweb-147x150.png 147w"  data-src="https://smpnutra.com/wp-content/uploads/2021/05/Non-GMO-Logo_72dpi_forweb.png" data-sizes="(max-width: 257px) 100vw, 257px" class="attachment-medium size-medium lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="257" height="263" src="wp-content/uploads/2021/05/Non-GMO-Logo_72dpi_forweb.png" class="attachment-medium size-medium" alt srcset="https://smpnutra.com/wp-content/uploads/2021/05/Non-GMO-Logo_72dpi_forweb.png 257w, https://smpnutra.com/wp-content/uploads/2021/05/Non-GMO-Logo_72dpi_forweb-147x150.png 147w" sizes="(max-width: 257px) 100vw, 257px"></noscript></noscript></noscript><img width="257" height="263" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20257%20263%22%3E%3C%2Fsvg%3E" class="attachment-medium size-medium lazyload" alt srcset="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20257%20263%22%3E%3C%2Fsvg%3E 257w" sizes="(max-width: 257px) 100vw, 257px" data-srcset="https://smpnutra.com/wp-content/uploads/2021/05/Non-GMO-Logo_72dpi_forweb.png 257w, https://smpnutra.com/wp-content/uploads/2021/05/Non-GMO-Logo_72dpi_forweb-147x150.png 147w" data-src="wp-content/uploads/2021/05/Non-GMO-Logo_72dpi_forweb.png">														</div>
						</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b42e4d2" data-id="b42e4d2" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-6cb8a64 elementor-widget elementor-widget-text-editor" data-id="6cb8a64" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
					<h2 style="text-align: left;">Eurofins Non-GMO Verified Products</h2><p style="text-align: left;">Eurofins Scientific offers <strong>numerous forms of testing and verifications</strong> through one of their state-of-the-art labs around the world. To enable and promote transparency and trust with customers, this certification is verifying exactly that.</p>					</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-4327733 elementor-widget elementor-widget-sm-default-button" data-id="4327733" data-element_type="widget" data-widget_type="sm-default-button.default">
				<div class="elementor-widget-container">

				<a href="eurofins-non-gmo-verification.html" class="btn  ">Learn More<i class="ti ti-arrow-right"></i></a>

			</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-bdb1a61 elementor-section-content-middle elementor-reverse-mobile eight-sec elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="bdb1a61" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4c6e765" data-id="4c6e765" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-7830431 elementor-widget elementor-widget-image" data-id="7830431" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<noscript><img  title="gold winner" alt="gold winner" data-src="https://smpnutra.com/wp-content/uploads/elementor/thumbs/gold-winner-p8ribh7e3k6bk8psrv7u70xxeluqq9otrlzeboz5cg.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  title="gold winner" alt="gold winner" data-src="https://smpnutra.com/wp-content/uploads/elementor/thumbs/gold-winner-p8ribh7e3k6bk8psrv7u70xxeluqq9otrlzeboz5cg.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="wp-content/uploads/elementor/thumbs/gold-winner-p8ribh7e3k6bk8psrv7u70xxeluqq9otrlzeboz5cg.png" title="gold winner" alt="gold winner"></noscript></noscript></noscript><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" title="gold winner" alt="gold winner" data-src="https://smpnutra.com/wp-content/uploads/elementor/thumbs/gold-winner-p8ribh7e3k6bk8psrv7u70xxeluqq9otrlzeboz5cg.png" class=" lazyload">														</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-5aa206d elementor-widget elementor-widget-text-editor" data-id="5aa206d" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
					<h2>2021 Manufacturing Company Of The Year</h2>
					Gummy Specialists proudly accepted the <strong>Gold Stevie Award for the best manufacturing company of the year</strong>! This award is a testament to the hard work and dedication that every team member at Gummy Specialists puts in to deliver an experience no other manufacturer can.					</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-30b8f22 elementor-widget elementor-widget-sm-default-button" data-id="30b8f22" data-element_type="widget" data-widget_type="sm-default-button.default">
				<div class="elementor-widget-container">

				<a href="stevie-award-2021.html" class="btn  ">View Stevie Award Gallery<i class="ti ti-arrow-right"></i></a>

			</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-247cae9" data-id="247cae9" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-098bfe3 elementor-widget elementor-widget-image" data-id="098bfe3" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<noscript><img width="940" height="679"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2020/12/IMG_0023-1024x740.jpg 1024w, https://smpnutra.com/wp-content/uploads/2020/12/IMG_0023-300x217.jpg 300w, https://smpnutra.com/wp-content/uploads/2020/12/IMG_0023-768x555.jpg 768w, https://smpnutra.com/wp-content/uploads/2020/12/IMG_0023-285x206.jpg 285w, https://smpnutra.com/wp-content/uploads/2020/12/IMG_0023-660x477.jpg 660w, https://smpnutra.com/wp-content/uploads/2020/12/IMG_0023-150x108.jpg 150w, https://smpnutra.com/wp-content/uploads/2020/12/IMG_0023.jpg 1250w"  data-src="https://smpnutra.com/wp-content/uploads/2020/12/IMG_0023-1024x740.jpg" data-sizes="(max-width: 940px) 100vw, 940px" class="attachment-large size-large lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="940" height="679"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2020/12/IMG_0023-1024x740.jpg 1024w, https://smpnutra.com/wp-content/uploads/2020/12/IMG_0023-300x217.jpg 300w, https://smpnutra.com/wp-content/uploads/2020/12/IMG_0023-768x555.jpg 768w, https://smpnutra.com/wp-content/uploads/2020/12/IMG_0023-285x206.jpg 285w, https://smpnutra.com/wp-content/uploads/2020/12/IMG_0023-660x477.jpg 660w, https://smpnutra.com/wp-content/uploads/2020/12/IMG_0023-150x108.jpg 150w, https://smpnutra.com/wp-content/uploads/2020/12/IMG_0023.jpg 1250w"  data-src="https://smpnutra.com/wp-content/uploads/2020/12/IMG_0023-1024x740.jpg" data-sizes="(max-width: 940px) 100vw, 940px" class="attachment-large size-large lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="940" height="679" src="wp-content/uploads/2020/12/IMG_0023-1024x740.jpg" class="attachment-large size-large" alt srcset="https://smpnutra.com/wp-content/uploads/2020/12/IMG_0023-1024x740.jpg 1024w, https://smpnutra.com/wp-content/uploads/2020/12/IMG_0023-300x217.jpg 300w, https://smpnutra.com/wp-content/uploads/2020/12/IMG_0023-768x555.jpg 768w, https://smpnutra.com/wp-content/uploads/2020/12/IMG_0023-285x206.jpg 285w, https://smpnutra.com/wp-content/uploads/2020/12/IMG_0023-660x477.jpg 660w, https://smpnutra.com/wp-content/uploads/2020/12/IMG_0023-150x108.jpg 150w, https://smpnutra.com/wp-content/uploads/2020/12/IMG_0023.jpg 1250w" sizes="(max-width: 940px) 100vw, 940px"></noscript></noscript></noscript><img width="940" height="679" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20940%20679%22%3E%3C%2Fsvg%3E" class="attachment-large size-large lazyload" alt srcset="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20940%20679%22%3E%3C%2Fsvg%3E 940w" sizes="(max-width: 940px) 100vw, 940px" data-srcset="https://smpnutra.com/wp-content/uploads/2020/12/IMG_0023-1024x740.jpg 1024w, https://smpnutra.com/wp-content/uploads/2020/12/IMG_0023-300x217.jpg 300w, https://smpnutra.com/wp-content/uploads/2020/12/IMG_0023-768x555.jpg 768w, https://smpnutra.com/wp-content/uploads/2020/12/IMG_0023-285x206.jpg 285w, https://smpnutra.com/wp-content/uploads/2020/12/IMG_0023-660x477.jpg 660w, https://smpnutra.com/wp-content/uploads/2020/12/IMG_0023-150x108.jpg 150w, https://smpnutra.com/wp-content/uploads/2020/12/IMG_0023.jpg 1250w" data-src="wp-content/uploads/2020/12/IMG_0023-1024x740.jpg">														</div>
						</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-a196222 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a196222" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
									</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-52017ef elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="52017ef" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a028370 elementor-invisible" data-id="a028370" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:200}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-e66a500 elementor-widget elementor-widget-image" data-id="e66a500" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
													<a href="product-category/stock-private-label-supplements.html">
							<noscript><img width="768" height="370"   alt data-srcset="https://smpnutra.com/wp-content/uploads/2020/12/Orange-Black-Advertising-and-Marketing-Business-Website-768x370.png 768w, https://smpnutra.com/wp-content/uploads/2020/12/Orange-Black-Advertising-and-Marketing-Business-Website-300x144.png 300w, https://smpnutra.com/wp-content/uploads/2020/12/Orange-Black-Advertising-and-Marketing-Business-Website-1024x493.png 1024w, https://smpnutra.com/wp-content/uploads/2020/12/Orange-Black-Advertising-and-Marketing-Business-Website-285x137.png 285w, https://smpnutra.com/wp-content/uploads/2020/12/Orange-Black-Advertising-and-Marketing-Business-Website-660x318.png 660w, https://smpnutra.com/wp-content/uploads/2020/12/Orange-Black-Advertising-and-Marketing-Business-Website-150x72.png 150w, https://smpnutra.com/wp-content/uploads/2020/12/Orange-Black-Advertising-and-Marketing-Business-Website.png 1350w"  data-src="https://smpnutra.com/wp-content/uploads/2020/12/Orange-Black-Advertising-and-Marketing-Business-Website-768x370.png" data-sizes="(max-width: 768px) 100vw, 768px" class="attachment-medium_large size-medium_large lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img width="768" height="370" src="wp-content/uploads/2020/12/Orange-Black-Advertising-and-Marketing-Business-Website-768x370.png" class="attachment-medium_large size-medium_large" alt srcset="https://smpnutra.com/wp-content/uploads/2020/12/Orange-Black-Advertising-and-Marketing-Business-Website-768x370.png 768w, https://smpnutra.com/wp-content/uploads/2020/12/Orange-Black-Advertising-and-Marketing-Business-Website-300x144.png 300w, https://smpnutra.com/wp-content/uploads/2020/12/Orange-Black-Advertising-and-Marketing-Business-Website-1024x493.png 1024w, https://smpnutra.com/wp-content/uploads/2020/12/Orange-Black-Advertising-and-Marketing-Business-Website-285x137.png 285w, https://smpnutra.com/wp-content/uploads/2020/12/Orange-Black-Advertising-and-Marketing-Business-Website-660x318.png 660w, https://smpnutra.com/wp-content/uploads/2020/12/Orange-Black-Advertising-and-Marketing-Business-Website-150x72.png 150w, https://smpnutra.com/wp-content/uploads/2020/12/Orange-Black-Advertising-and-Marketing-Business-Website.png 1350w" sizes="(max-width: 768px) 100vw, 768px"></noscript></noscript><img width="768" height="370" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20768%20370%22%3E%3C%2Fsvg%3E" class="attachment-medium_large size-medium_large lazyload" alt srcset="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20768%20370%22%3E%3C%2Fsvg%3E 768w" sizes="(max-width: 768px) 100vw, 768px" data-srcset="https://smpnutra.com/wp-content/uploads/2020/12/Orange-Black-Advertising-and-Marketing-Business-Website-768x370.png 768w, https://smpnutra.com/wp-content/uploads/2020/12/Orange-Black-Advertising-and-Marketing-Business-Website-300x144.png 300w, https://smpnutra.com/wp-content/uploads/2020/12/Orange-Black-Advertising-and-Marketing-Business-Website-1024x493.png 1024w, https://smpnutra.com/wp-content/uploads/2020/12/Orange-Black-Advertising-and-Marketing-Business-Website-285x137.png 285w, https://smpnutra.com/wp-content/uploads/2020/12/Orange-Black-Advertising-and-Marketing-Business-Website-660x318.png 660w, https://smpnutra.com/wp-content/uploads/2020/12/Orange-Black-Advertising-and-Marketing-Business-Website-150x72.png 150w, https://smpnutra.com/wp-content/uploads/2020/12/Orange-Black-Advertising-and-Marketing-Business-Website.png 1350w" data-src="wp-content/uploads/2020/12/Orange-Black-Advertising-and-Marketing-Business-Website-768x370.png">								</a>
														</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-6e0e589 elementor-widget elementor-widget-text-editor" data-id="6e0e589" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
					<p>Bring your supplements to the market with the industry leaders at Gummy Specialists where we simplify manufacturing with stellar communication and transparency. Check out our <a href="product-category/stock-private-label-supplements.html" target="_blank" rel="noopener">250+ stock supplement formulas</a> that you can bring to your brand today!</p>					</div>
						</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-3fedbb2 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3fedbb2" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
									</div>
					</div>
		</section>
						</div>
						</div>
					</div>

	</div><!-- #content -->


			<footer itemtype="https://schema.org/WPFooter" itemscope="itemscope" id="colophon" role="contentinfo">
			<div class='footer-width-fixer'>		<div data-elementor-type="wp-post" data-elementor-id="103" class="elementor elementor-103" data-elementor-settings="[]">
						<div class="elementor-inner">
							<div class="elementor-section-wrap">
							<section class="man_gradient_animation elementor-section elementor-top-section elementor-element elementor-element-81f46f2 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="81f46f2" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9d1079d" data-id="9d1079d" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-66ae6eb elementor-widget elementor-widget-heading" data-id="66ae6eb" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default elementor-heading-title elementor-size-default elementor-align-after-center">Request  A Manufacturing Price Quote</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-2ff7c4f elementor-widget elementor-widget-text-editor" data-id="2ff7c4f" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
					<p style="text-align: center;"><span style="color: #ffffff;">Fill out our &#8220;request a quote&#8221; form so we we can give you a custom price quote to get started with manufacturing your nutraceutical supplements.</span></p>					</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-81cf5e5 elementor-widget__width-auto elementor-widget-mobile__width-auto elementor-widget elementor-widget-sm-default-button" data-id="81cf5e5" data-element_type="widget" data-widget_type="sm-default-button.default">
				<div class="elementor-widget-container">

				<a href="https://info.smpnutra.com/quote" class="btn  ">Get a Custom Quote<i class="ti ti-arrow-right"></i></a>

			</div>
				</div>
				<div class="elementor-element elementor-element-4bdb460 elementor-widget elementor-widget-text-editor" data-id="4bdb460" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
					<p style="text-align: center;"><span style="color: #ffffff;">Or call us at <strong>(833) 810-9896</strong></span></p>					</div>
						</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-f021239 elementor-hidden-desktop elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f021239" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-78f58ef" data-id="78f58ef" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-bff5bc6 elementor-widget elementor-widget-text-editor" data-id="bff5bc6" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
					<h3><span style="color: #ffffff;">Stock Private Label Formulas</span></h3><p>We have a large variety of in-stock private label formulas, ready for your brands label to be slapped on and sold!</p>					</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-e2b72ca elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="e2b72ca" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a href="product-category/stock-private-label-supplements.html" class="elementor-button-link elementor-button elementor-size-sm" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Stock Products</span>
		</span>
					</a>
		</div>
				</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-b8535ef elementor-hidden-desktop elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b8535ef" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-38245b2" data-id="38245b2" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-b46118f elementor-widget elementor-widget-text-editor" data-id="b46118f" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
					<h3><span style="color: #ffffff;">Amazing Packaging Options</span></h3><p>We offer a large variety of premium packaging options to set your product apart from the pack.</p>					</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-46bdcd5 elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="46bdcd5" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a href="product-category/packaging.html" class="elementor-button-link elementor-button elementor-size-sm" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Packaging Options</span>
		</span>
					</a>
		</div>
				</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-01298a1 elementor-hidden-desktop elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="01298a1" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c423404" data-id="c423404" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-4bd4591 elementor-widget elementor-widget-text-editor" data-id="4bd4591" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
					<h3><span style="color: #ffffff;">Storage &amp; Fulfillment</span></h3><p>We offer our manufacturing clients exclusive deals on warehouse storage &amp; order fulfillment services.</p>					</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-9d8942f elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="9d8942f" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a href="fulfillment.html" class="elementor-button-link elementor-button elementor-size-sm" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Fulfillment</span>
		</span>
					</a>
		</div>
				</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-1655dbd elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1655dbd" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4c5c2fd" data-id="4c5c2fd" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-a8e49a5 elementor-widget__width-auto elementor-widget-mobile__width-auto elementor-widget elementor-widget-sm-logo" data-id="a8e49a5" data-element_type="widget" data-widget_type="sm-logo.default">
				<div class="elementor-widget-container">

						<a class="man_logo" href="index.html">
								<div class="man_logo_img"><img  alt="" data-src="{{ asset('images/front/Gummy-Specialists-Logo.png') }}" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="{{ asset('images/front/Gummy-Specialists-Logo.png') }}" alt=""></noscript></div>
								</a>

			</div>
				</div>
				<div class="elementor-element elementor-element-1b43fd4 elementor-widget__width-auto elementor-widget-mobile__width-auto elementor-widget elementor-widget-sm-default-button" data-id="1b43fd4" data-element_type="widget" data-widget_type="sm-default-button.default">
				<div class="elementor-widget-container">

				<a href="tel:833-810-9896" class="btn  ">Call Us: 833-810-9896<i class="ti ti-arrow-right"></i></a>
				<a href="https://info.smpnutra.com/contact" class="btn  ">Contact Us<i class="ti ti-arrow-right"></i></a>
				<a href="https://info.smpnutra.com/quote" class="btn  ">Get a Quote<i class="ti ti-arrow-right"></i></a>

			</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-689ddb8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="689ddb8" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-5090f76" data-id="5090f76" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-dea9413 elementor-widget elementor-widget-heading" data-id="dea9413" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h5 class="elementor-heading-title elementor-size-default elementor-heading-title elementor-size-default">Company</h5>		</div>
				</div>
				<div class="elementor-element elementor-element-6ccb152 elementor-widget elementor-widget-sm-menu-links" data-id="6ccb152" data-element_type="widget" data-widget_type="sm-menu-links.default">
				<div class="elementor-widget-container">

		<ul class="man_menu_links menu">
					<li>
				<a href="index.html">Home</a>
			</li>
					<li>
				<a href="supplement-manufacturing.html">About Us</a>
			</li>
					<li>
				<a href="blog.html">Blog</a>
			</li>
					<li>
				<a href="smp-nutra-terms-and-conditions.html">Terms &amp; Conditions</a>
			</li>
					<li>
				<a href="awards-certifications.html">Awards &amp; Certifications</a>
			</li>
					<li>
				<a href="../smpnutra.comhttps_/smpnutra.com/wp-content/uploads/2020/12/SMP-Nutra-Workflow.png">SMP Workflow</a>
			</li>
					<li>
				<a href="careers.html">Careers</a>
			</li>
				</ul>

			</div>
				</div>
				<div class="elementor-element elementor-element-bfa6a28 elementor-widget elementor-widget-heading" data-id="bfa6a28" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h5 class="elementor-heading-title elementor-size-default elementor-heading-title elementor-size-default">Contact Us</h5>		</div>
				</div>
				<div class="elementor-element elementor-element-3eab75c elementor-widget elementor-widget-sm-menu-links" data-id="3eab75c" data-element_type="widget" data-widget_type="sm-menu-links.default">
				<div class="elementor-widget-container">

		<ul class="man_menu_links menu">
					<li>
				<a href="frequently-asked-questions.html">Frequently Asked Questions</a>
			</li>
					<li>
				<a href="https://info.smpnutra.com/contact">Contact Us</a>
			</li>
					<li>
				<a href="who-to-contact.html">Order Process &amp; Who To Contact</a>
			</li>
					<li>
				<a href="https://info.smpnutra.com/quote">Request A Quote</a>
			</li>
					<li>
				<a href="https://info.smpnutra.com/inquiry">Supplier/Vendor Inquiry</a>
			</li>
				</ul>

			</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-9f31ac0" data-id="9f31ac0" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-94d1a55 elementor-widget elementor-widget-heading" data-id="94d1a55" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h5 class="elementor-heading-title elementor-size-default elementor-heading-title elementor-size-default">Custom Manufacturing</h5>		</div>
				</div>
				<div class="elementor-element elementor-element-1bfe312 elementor-widget elementor-widget-sm-menu-links" data-id="1bfe312" data-element_type="widget" data-widget_type="sm-menu-links.default">
				<div class="elementor-widget-container">

		<ul class="man_menu_links menu">
					<li>
				<a href="capsule-manufacturing.html">Capsules</a>
			</li>
					<li>
				<a href="custom-tablet-manufacturing.html">Tablets</a>
			</li>
					<li>
				<a href="custom-powder-manufacturing.html">Powder</a>
			</li>
					<li>
				<a href="softgel-manufacturing.html">Softgels</a>
			</li>
					<li>
				<a href="gummy-vitamin-manufacturing.html">Gummy Vitamins</a>
			</li>
					<li>
				<a href="liquid-capsule.html">Liquid Capsules</a>
			</li>
					<li>
				<a href="liquid-manufacturing.html">Liquids</a>
			</li>
				</ul>

			</div>
				</div>
				<div class="elementor-element elementor-element-8f12213 elementor-widget elementor-widget-heading" data-id="8f12213" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h5 class="elementor-heading-title elementor-size-default elementor-heading-title elementor-size-default">Additional Services</h5>		</div>
				</div>
				<div class="elementor-element elementor-element-54387c4 elementor-widget elementor-widget-sm-menu-links" data-id="54387c4" data-element_type="widget" data-widget_type="sm-menu-links.default">
				<div class="elementor-widget-container">

		<ul class="man_menu_links menu">
					<li>
				<a href="fulfillment.html">Storage &amp; Order Fulfillment</a>
			</li>
					<li>
				<a href="https://smsnutra.com/graphic-media-production/">Label &amp; Media Design</a>
			</li>
				</ul>

			</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-b46e593" data-id="b46e593" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-74e65bb elementor-widget elementor-widget-heading" data-id="74e65bb" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h5 class="elementor-heading-title elementor-size-default elementor-heading-title elementor-size-default">Specialty Manufacturing</h5>		</div>
				</div>
				<div class="elementor-element elementor-element-fd6ffc5 elementor-widget elementor-widget-sm-menu-links" data-id="fd6ffc5" data-element_type="widget" data-widget_type="sm-menu-links.default">
				<div class="elementor-widget-container">

		<ul class="man_menu_links menu">
					<li>
				<a href="collagen-manufacturing.html">Collagen</a>
			</li>
					<li>
				<a href="protein-powder-manufacturer.html">Protein</a>
			</li>
					<li>
				<a href="vitamin-manufacturing.html">Vitamins</a>
			</li>
					<li>
				<a href="herbal-manufacturing.html">Herbals</a>
			</li>
					<li>
				<a href="probiotic-manufacturing.html">Probiotics</a>
			</li>
					<li>
				<a href="bone-broth-manufacturing.html">Bone Broth</a>
			</li>
					<li>
				<a href="pet-supplement-manufacturing.html">Pet Supplements</a>
			</li>
					<li>
				<a href="custom-flavoring.html">Flavoring</a>
			</li>
					<li>
				<a href="fish-oil-manufacturing.html">Fish Oil</a>
			</li>
					<li>
				<a href="elderberry-manufacturing.html">Elderberry</a>
			</li>
					<li>
				<a href="skincare-manufacturing.html">Skincare</a>
			</li>
					<li>
				<a href="biotin-manufacturing.html">Biotin</a>
			</li>
					<li>
				<a href="ashwagandha-manufacturing.html">Ashwagandha</a>
			</li>
					<li>
				<a href="bcaa-manufacturing.html">BCAA</a>
			</li>
					<li>
				<a href="amino-acid-supplement-manufacturing.html">Amino Acid Supplements</a>
			</li>
					<li>
				<a href="keto-supplement-manufacturing.html">Keto Supplements</a>
			</li>
					<li>
				<a href="vegan-manufacturing.html">Vegan Supplements</a>
			</li>
				</ul>

			</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-f5838e3" data-id="f5838e3" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-fd59203 elementor-widget elementor-widget-heading" data-id="fd59203" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h5 class="elementor-heading-title elementor-size-default elementor-heading-title elementor-size-default">Specialty Manufacturing</h5>		</div>
				</div>
				<div class="elementor-element elementor-element-f15753d elementor-widget elementor-widget-sm-menu-links" data-id="f15753d" data-element_type="widget" data-widget_type="sm-menu-links.default">
				<div class="elementor-widget-container">

		<ul class="man_menu_links menu">
					<li>
				<a href="product-category/stock-private-label-supplements.html">Private Labeling</a>
			</li>
					<li>
				<a href="prenatal-vitamin-manufacturing.html">Prenatal</a>
			</li>
					<li>
				<a href="coq10-manufacturing.html">CoQ10</a>
			</li>
					<li>
				<a href="apple-cider-vinegar-manufacturing.html">Apple Cider Vinegar</a>
			</li>
					<li>
				<a href="fitness-supplement-manufacturing.html">Fitness/Sports</a>
			</li>
					<li>
				<a href="turmeric-manufacturing.html">Turmeric</a>
			</li>
					<li>
				<a href="creatine-manufacturing.html">Creatine</a>
			</li>
					<li>
				<a href="5-htp-manufacturing.html">5-HTP</a>
			</li>
					<li>
				<a href="glucosamine-manufacturing.html">Glucosamine</a>
			</li>
					<li>
				<a href="weight-loss-supplement-manufacturing.html">Weight Loss Supplements</a>
			</li>
					<li>
				<a href="liposomal-manufacturing.html">Liposomal Supplements</a>
			</li>
					<li>
				<a href="post-workout-supplement-manufacturing.html">Post Workout Supplements</a>
			</li>
				</ul>

			</div>
				</div>
				<div class="elementor-element elementor-element-0004bf7 elementor-widget elementor-widget-heading" data-id="0004bf7" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h5 class="elementor-heading-title elementor-size-default elementor-heading-title elementor-size-default">In-Stock Inventory</h5>		</div>
				</div>
				<div class="elementor-element elementor-element-03989b4 elementor-widget elementor-widget-sm-menu-links" data-id="03989b4" data-element_type="widget" data-widget_type="sm-menu-links.default">
				<div class="elementor-widget-container">

		<ul class="man_menu_links menu">
					<li>
				<a href="product-category/stock-private-label-supplements.html">Stock Products</a>
			</li>
					<li>
				<a href="product-category/packaging.html">Packaging</a>
			</li>
				</ul>

			</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-7421442 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7421442" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9e2b562" data-id="9e2b562" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-7a43394 elementor-widget__width-auto elementor-widget elementor-widget-text-editor" data-id="7a43394" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
					<p>© 2020 SMPNutra.com</p>					</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-4c80324 elementor-widget__width-auto elementor-widget elementor-widget-text-editor" data-id="4c80324" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
					<p style="text-align: center;"><strong><span style="color: #ffffff;"><a style="color: #ffffff;" href="https://info.smpnutra.com/quote">Request A Quote</a></span></strong></p><p style="text-align: center;"><span style="color: #ffffff;"><strong>833-810-9896</strong></span></p>					</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-48ec5c5 elementor-icon-list--layout-inline elementor-align-right elementor-mobile-align-center elementor-tablet-align-center elementor-widget__width-auto elementor-widget-mobile__width-inherit elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="48ec5c5" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items elementor-inline-items">
							<li class="elementor-icon-list-item elementor-inline-item">
					<a href="https://www.facebook.com/Supplement-Manufacturing-Partners-Most-Responsive-Manufacturer-107193077299442">						<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fab fa-facebook-f"></i>						</span>
										<span class="elementor-icon-list-text"></span>
											</a>
									</li>
								<li class="elementor-icon-list-item elementor-inline-item">
					<a href="https://www.linkedin.com/company/20112857/">						<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fab fa-linkedin"></i>						</span>
										<span class="elementor-icon-list-text"></span>
											</a>
									</li>
								<li class="elementor-icon-list-item elementor-inline-item">
					<a href="https://www.youtube.com/channel/UCuwAuIHqvSBLVdS9MkiHX1w?view_as=subscriber">						<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fab fa-youtube"></i>						</span>
										<span class="elementor-icon-list-text"></span>
											</a>
									</li>
								<li class="elementor-icon-list-item elementor-inline-item">
					<a href="https://www.instagram.com/smpnutra/">						<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fab fa-instagram"></i>						</span>
										<span class="elementor-icon-list-text"></span>
											</a>
									</li>
						</ul>
				</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-66d8bae elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="66d8bae" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cf1678e" data-id="cf1678e" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-18a8136 elementor-widget__width-auto elementor-widget elementor-widget-text-editor" data-id="18a8136" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
					<p><em>*Price quotes are typically returned within 48 hours of receiving them fully completed.<br></em></p>
<p><em>**None of the information presented on our website or blog is intended to service as legal or regulatory counsel. Users are encouraged to seek professional assistance and counsel if they are concerned about a specific legal or regulatory issue.</em></p><em>
</em><p><em>***These statements have not been evaluated by the Food and Drug Administration. These products are not intended to diagnose, treat, cure, or prevent any disease.</em></p>					</div>
						</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
						</div>
						</div>
					</div>
		</div>		</footer>


</div><!-- #page -->


			<script type="text/javascript">
				var _paq = _paq || [];
								_paq.push(['trackPageView']);
								(function () {
					var u = "https://stats1.wpmudev.com/";
					_paq.push(['setTrackerUrl', u + 'track/']);
					_paq.push(['setSiteId', '15687']);
					var d   = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
					g.type  = 'text/javascript';
					g.async = true;
					g.defer = true;
					g.src   = '../stats.wpmucdn.com/analytics.js';
					s.parentNode.insertBefore(g, s);
				})();
			</script>

<div class="xoo-wsc-modal">

                    </div>
                </div>


            </div>
        </div>
    </main>
@endsection
