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
							<h1 class="text-white mb-0">Legal Information</h1>
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
								<h4>Legal Information</h4>
								<p>{{$compd? $compd->companyname: 'Coming soon'}} is one of the most reliable diversified financial investment service 
									provider in the world. Our fundamental mission is to help customers and clients achieve 
									their financial objectives. With offices locate in the United States, Australia,Canada and 
									headquartered in Uk, {{$compd? $compd->companyname: 'Coming soon'}} have staffs with over 30 years’ experience in 
									combining financial development and trades. We are committed to pushing the boundaries of 
									what constitutes the highest standards in trades and asset management.
	</p>
	<p>With over $5.3 Trillion traded daily in the market, we are dedicated to giving our clients their own share of the 
		profit daily. As a leading global market maker, {{$compd? $compd->companyname: 'Coming soon'}} has one of the World’s Largest Independent 
		traders and fund managers with clients from different parts of the World. Today, as a 
		successful trade investment and asset management company, we are trusted by thousands of clients. 
		Our sterling reputation, dedication to meeting our clients’ needs and innovative approach to business 
		development are some driving forces behind our success.
	</p>
	<ul class="list-unstyled tech-feature-list mb-3">
		<li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><b>Renewed on:</b> 23rd June 2017
									</li>
									<li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><b>Registrar:</b> Company House
									</li>
									<li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><b>Registration Number:</b> R05132966</li>
								</ul>
	
	
								
								
	
								
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<h5>Legal Certificate</h5>
						<div class="about-img-wrap">
							<img src="{{asset("img/cert.jpg")}}" alt="certificate" class="img-fluid rounded shadow-sm">
							
						</div>
						<div class='text-center my-4'>
							<a href="{{asset("img/cert.jpg")}}" class='btn btn-primary btn-block'>View Certificate</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	
	</div>


@endsection
