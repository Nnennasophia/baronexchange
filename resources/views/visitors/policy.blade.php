@extends("layouts.spacedcustomlayout")

@section("body")


<div class="main">
        
	<!-- START SECTION BANNER -->
	<section class="hero-section ptb-100 gradient-overlay"
				 style="background: url('img/header-bg-5.jpg')no-repeat center center / cover">
			<div class="container">
				<div class='row'>
					
					<div class="col-md-12 text-center">
						<div id="google_translate_element"></div>
	<script type="text/javascript">
	function googleTranslateElementInit() {
	  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
	}
	</script>
	<script type="text/javascript" src="../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"></script>
					</div>
				</div>
				
				<div class="row justify-content-center">
					<div class="col-md-8 col-lg-7">
						<div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
							<h1 class="text-white mb-0">Privacy Policy</h1>
							<div class="custom-breadcrumb">
								<ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
									<li class="list-inline-item breadcrumb-item active">{{$compd? $compd->companyname: 'Coming soon'}}</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</section>
	<section class="service-details-section ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8">
						<div class="service-details-wrap">
							<div class="services-detail-content mt-4">
								<h4>Our Policy</h4>
								<p>Our company understands the importance of personal information of every participant. Cooperating with our company, 
									you can be sure in privacy of your personal information and in its protection by our employees. 
									Our employees protect the collected by them information from unauthorized access. 
									We use a variety of technologies to reduce the risk of theft of accounts and receiving personal information of 
									our investors.</p>
	
								<p>"Personal information" includes such items as:</p>
								<ul class="list-unstyled tech-feature-list mb-3">
									<li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span>Name and Last Name of the investor
									</li>
									<li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span>Email of investor
									</li>
									<li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span>Contact address of investor</li>
								</ul>
	
								<p>Our company collects your personal information only with your consent and confidence in the security of your personal information on our project. Users should note, that the collection of personal information is only from adult. The rules of our company explain, how your information is collected and used. These rules apply only in our website. Information which is collected when you visit this site. This types of information are also the part of the personal information. Customer information, whether public or private, will not be sold, exchanged, transferred, or given to any other company for any reason whatsoever, without the consent of the customer, other than for the express purpose of delivering the purchased product or service requested by the customer.
	For your safety and protection, your credit card information is not stored on our servers. Our payment gateway provider, (insert providers name/s here), keeps this information encrypted and secure on your behalf.
	The email address you provide for order processing, may be used to send you information and updates pertaining to your account, in addition to periodic company news, updates, and/or related product or service information, etc. If you decide to opt-in to our mailing list, you will receive emails that may include company news, updates, related product or service information, promotions, etc. However, you may opt-out at any time by (please enter the opt-out or unsubscribe process here. This may be something like clicking the unsubscribe button at the bottom of your emails.</p>
								<h5>Information Storage</h5>
								<p>Saving of information is only in our company or its equipment. Personal information is stored in accordance with the rules of storage and disposal, which are set for archive of our company. To receive your personal information, contact direct with our employees.</p>
								<h5>Contact Information</h5>
								<p>{{$compd? $compd->companyname: 'Coming soon'}} is glad to receive your comments concerning this "Privacy Policy". In case you think that {{$compd? $compd->companyname: 'Coming soon'}} does not follow the rules and violate this Statement, contact us at <a href="mailto:{{$compd? $compd->companyemail: 'Coming soon'}}">{{$compd? $compd->companyemail: 'Coming soon'}}</a> We guarantee that we will take commercially reasonable efforts to discover and solve the problem.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="sidebar-right pl-4">
							<!--need help-->
							<aside class="widget widget-categories">
								<div class="widget-title">
									<h5>Need Help?</h5>
								</div>
								<p>We are available in 24/7 hours for dedicated support</p>
								<ul class="primary-list mt-25">
									<li><span class="ti-location-pin mr-2 color-primary"></span> {{$compd? $compd->companylocation: 'Coming soon'}}                                </li>
									<li><span class="ti-mobile mr-2 color-primary"></span> {{$compd? $compd->companyphone: 'Coming soon'}}</li>
									<li><span class="ti-email mr-2 color-primary"></span> {{$compd? $compd->companyemail: 'Coming soon'}}</li>
								</ul>
							</aside>
	
							<!-- Subscribe widget-->
							<aside class="widget widget-categories">
								<div class="widget-title">
									<h5>Send a message</h5>
								</div>
								<form method="post" action="{{$compd? $compd->companyemail: 'Coming soon'}}" class="contact-us-form">
															<div class="form-row">
									<div class="col-12">
										<div class="form-group">
											<input type="text" required="required" placeholder="Enter Name *" class="form-control" name="name">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<input type="email" required="required" placeholder="Enter Email *" class="form-control" name="email">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<input type="text" required="required" placeholder="Enter Subject" class="form-control" name="subject">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<textarea required="required" placeholder="Message *" class="form-control" name="msg" rows="5"></textarea>
										</div>
									</div>
									<div class="col-sm-12 mt-3">
										<button type="submit" title="Submit Your Message!" name="send" class="btn secondary-solid-btn">
											Send Message
										</button>
									</div>
								</div>
							</form>
							</aside>
	
						</div>
					</div>
				</div>
			</div>
		</section>
	
	</div>

@endsection
