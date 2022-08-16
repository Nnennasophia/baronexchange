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
							<h1 class="text-white mb-0">Where to Buy Bitcoin</h1>
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
				<div class="row text-center">
					<div class="col-md-3">
						<a href="https://paxful.com/roots/buy-bitcoin" target="_blank"><img src="{{asset("images/exchenger-1.png")}}"/></a>
					</div>
					<div class="col-md-3">
						<a href="https://www.coinmama.com/" target="_blank"><img src="{{asset("images/exchenger-2.png")}}"/></a>
					</div>
					<div class="col-md-3">
						<a href="https://digatrade.com/" target="_blank"><img src="{{asset("images/exchenger-3.png")}}"/></a>
					</div>
					<div class="col-md-3">
						<a href="https://24xbtc.com/" target="_blank"><img src="{{asset("images/exchenger-4.png")}}"/></a>
					</div>
					<div class="col-md-3">
						<a href="https://hitbtc.com/" target="_blank"><img src="{{asset("images/exchenger-5.png")}}"/></a>
					</div>
					<div class="col-md-3">
						<a href="https://bit2me.com/en/index.php" target="_blank"><img src="{{asset("images/exchenger-6.png")}}"/></a>
					</div>
					<div class="col-md-3">
						<a href="https://coinmate.io/home" target="_blank"><img src="{{asset("images/exchenger-7.png")}}"/></a>
					</div>
					<div class="col-md-3">
						<a href="https://www.bitcoin.de/en" target="_blank"><img src="{{asset("images/exchenger-8.png")}}"/></a>
					</div>
					<div class="col-md-3">
						<a href="https://cex.io/" target="_blank"><img src="{{asset("images/exchenger-9.png")}}"/></a>
					</div>
					<div class="col-md-3">
						<a href="https://cubits.com/" target="_blank"><img src="{{asset("images/exchenger-10.png")}}"/></a>
					</div>
					<div class="col-md-3">
						<a href="https://wemovecoins.com/" target="_blank"><img src="{{asset("images/exchenger-11.png")}}"/></a>
					</div>
					<div class="col-md-3">
						<a href="https://www.quoine.com/" target="_blank"><img src="{{asset("images/exchenger-12.png")}}"/></a>
					</div>
					<div class="col-md-3">
						<a href="https://coinfloor.co/" target="_blank"><img src="{{asset("images/exchenger-13.png")}}"/></a>
					</div>
					<div class="col-md-3">
						<a href="https://www.bitfinex.com/" target="_blank"><img src="{{asset("images/exchenger-15.png")}}"/></a>
					</div>
					<div class="col-md-3">
						<a href="https://www.bitnovo.com/comprar-bitcoins" target="_blank"><img src="{{asset("images/exchenger-16.png")}}"/></a>
					</div>
					<div class="col-md-3">
						<a href="https://www.lakebtc.com/" target="_blank"><img src="{{asset("images/exchenger-17.png")}}"/></a>
					</div>
					
					
					
				</div>
			</div>
		</section>
	
	</div>
@endsection
