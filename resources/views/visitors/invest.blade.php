@extends("layouts.spacedcustomlayout")

@section("body")

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
                        <h1 class="text-white mb-0">Investment Plans</h1>
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
<section class="pricing-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Investment Plans</h2>
                        <p class="lead">We understand the needs of our customers very much that our investment plans covers the widest range of benefits.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                
                                
                <div class="col-lg-4 col-md mb-4">
                    <div class="card text-center single-pricing-pack">
                        <div class="pt-4"><h5>{{$plan? $plan->name: 'Coming soon'}}</h5><span class="badge badge-success">Investment</span></div>
                        <div class="card-header py-4 border-0 pricing-header">
                            <div class="h1 text-center mb-0">
                                <p class="pricing-rate">{{$plan? $plan->percentage: 'Coming soon'}} <sup>%</sup><span>AFTER 7 Day(s)</span></p>
                                
                            </div>
                        </div>
                        <div class="card-body bg-transparent affix text-white">
                            <ul class="list-unstyled text-left text-sm mb-4 pricing-feature-list">
                                <li><span class="ti-check-box mr-2 color-secondary"></span><span>Min</span><b class="float-right">{{$plan? $plan->minimum: 'Coming soon'}}</b></li>
                                <li><span class="ti-check-box mr-2 color-secondary"></span><span>Max</span><b class="float-right">{{$plan? $plan->maximum: 'Coming soon'}}</b></li>
                                <li><span class="ti-check-box mr-2 color-secondary"></span><span>Profit Daily</span><b class="float-right">2.0 %</b></li>
                                <li><span class="ti-check-box mr-2 color-secondary"></span><span>Profit Withdrawal</span><b class="float-right">AFTER 7 Day(s)</b></li>
                                <li><span class="ti-check-box mr-2 color-secondary"></span><span>Capital Withdrawal</span><b class="float-right">AFTER 14 Day(s)</b></li>
                                <li><span class="ti-check-box mr-2 color-secondary"></span><span>Referral Bonus</span><b class="float-right">{{$plan? $plan->refpercent: 'Coming soon'}} %</b></li>
                                <li><span class="ti-check-box mr-2 color-secondary"></span><span>Duration</span><b class="float-right">{{$plan? $plan->duration: 'Coming soon'}} Day(s)</b></li>
                            </ul>
                            <a href="{{route('login')}}" class="btn outline-white-btn p-2">Get Started Now</a>
                        </div>
                    </div>
                </div>
                
                                
                <div class="col-lg-4 col-md mb-4">
                    <div class="card text-center single-pricing-pack">
                        <div class="pt-4"><h5>{{$plan? $plan->name: 'Coming soon'}}</h5><span class="badge badge-success">Investment</span></div>
                        <div class="card-header py-4 border-0 pricing-header">
                            <div class="h1 text-center mb-0">
                                <p class="pricing-rate">{{$plan? $plan->percentage: 'Coming soon'}} <sup>%</sup><span>AFTER 7 Day(s)</span></p>
                                
                            </div>
                        </div>
                        <div class="card-body bg-transparent affix text-white">
                            <ul class="list-unstyled text-left text-sm mb-4 pricing-feature-list">
                                <li><span class="ti-check-box mr-2 color-secondary"></span><span>Min</span><b class="float-right">{{$plan? $plan->minimum: 'Coming soon'}}</b></li>
                                <li><span class="ti-check-box mr-2 color-secondary"></span><span>Max</span><b class="float-right">{{$plan? $plan->maximum: 'Coming soon'}}</b></li>
                                <li><span class="ti-check-box mr-2 color-secondary"></span><span>Profit Daily</span><b class="float-right">2.5 %</b></li>
                                <li><span class="ti-check-box mr-2 color-secondary"></span><span>Profit Withdrawal</span><b class="float-right">AFTER 7 Day(s)</b></li>
                                <li><span class="ti-check-box mr-2 color-secondary"></span><span>Capital Withdrawal</span><b class="float-right">AFTER 14 Day(s)</b></li>
                                <li><span class="ti-check-box mr-2 color-secondary"></span><span>Referral Bonus</span><b class="float-right">{{$plan? $plan->refpercent: 'Coming soon'}} %</b></li>
                                <li><span class="ti-check-box mr-2 color-secondary"></span><span>Duration</span><b class="float-right">{{$plan? $plan->duration: 'Coming soon'}} Day(s)</b></li>
                            </ul>
                            <a href="{{route('login')}}" class="btn outline-white-btn p-2">Get Started Now</a>
                        </div>
                    </div>
                </div>
                
                                
                <div class="col-lg-4 col-md mb-4">
                    <div class="card text-center single-pricing-pack">
                        <div class="pt-4"><h5>{{$plan? $plan->name: 'Coming soon'}}</h5><span class="badge badge-success">Investment</span></div>
                        <div class="card-header py-4 border-0 pricing-header">
                            <div class="h1 text-center mb-0">
                                <p class="pricing-rate">{{$plan? $plan->percentage: 'Coming soon'}} <sup>%</sup><span>AFTER 7 Day(s)</span></p>
                                
                            </div>
                        </div>
                        <div class="card-body bg-transparent affix text-white">
                            <ul class="list-unstyled text-left text-sm mb-4 pricing-feature-list">
                                <li><span class="ti-check-box mr-2 color-secondary"></span><span>Min</span><b class="float-right">{{$plan? $plan->minimum: 'Coming soon'}}</b></li>
                                <li><span class="ti-check-box mr-2 color-secondary"></span><span>Max</span><b class="float-right">{{$plan? $plan->maximum: 'Coming soon'}}</b></li>
                                <li><span class="ti-check-box mr-2 color-secondary"></span><span>Profit Daily</span><b class="float-right">3.5 %</b></li>
                                <li><span class="ti-check-box mr-2 color-secondary"></span><span>Profit Withdrawal</span><b class="float-right">AFTER 7 Day(s)</b></li>
                                <li><span class="ti-check-box mr-2 color-secondary"></span><span>Capital Withdrawal</span><b class="float-right">AFTER 14 Day(s)</b></li>
                                <li><span class="ti-check-box mr-2 color-secondary"></span><span>Referral Bonus</span><b class="float-right">{{$plan? $plan->refpercent: 'Coming soon'}} %</b></li>
                                <li><span class="ti-check-box mr-2 color-secondary"></span><span>Duration</span><b class="float-right">{{$plan? $plan->duration: 'Coming soon'}} Day(s)</b></li>
                            </ul>
                            <a href="{{route('login')}}" class="btn outline-white-btn p-2">Get Started Now</a>
                        </div>
                    </div>
                </div>
                
                                
                <div class="col-lg-4 col-md mb-4">
                    <div class="card text-center single-pricing-pack">
                        <div class="pt-4"><h5>{{$plan? $plan->name: 'Coming soon'}}</h5><span class="badge badge-success">Investment</span></div>
                        <div class="card-header py-4 border-0 pricing-header">
                            <div class="h1 text-center mb-0">
                                <p class="pricing-rate">{{$plan? $plan->percentage: 'Coming soon'}} <sup>%</sup><span>AFTER 7 Day(s)</span></p>
                                
                            </div>
                        </div>
                        <div class="card-body bg-transparent affix text-white">
                            <ul class="list-unstyled text-left text-sm mb-4 pricing-feature-list">
                                <li><span class="ti-check-box mr-2 color-secondary"></span><span>Min</span><b class="float-right">{{$plan? $plan->minimum: 'Coming soon'}}</b></li>
                                <li><span class="ti-check-box mr-2 color-secondary"></span><span>Max</span><b class="float-right">{{$plan? $plan->maximum: 'Coming soon'}}</b></li>
                                <li><span class="ti-check-box mr-2 color-secondary"></span><span>Profit Daily</span><b class="float-right">5.0 %</b></li>
                                <li><span class="ti-check-box mr-2 color-secondary"></span><span>Profit Withdrawal</span><b class="float-right">AFTER 7 Day(s)</b></li>
                                <li><span class="ti-check-box mr-2 color-secondary"></span><span>Capital Withdrawal</span><b class="float-right">AFTER 14 Day(s)</b></li>
                                <li><span class="ti-check-box mr-2 color-secondary"></span><span>Referral Bonus</span><b class="float-right">{{$plan? $plan->refpercent: 'Coming soon'}} %</b></li>
                                <li><span class="ti-check-box mr-2 color-secondary"></span><span>Duration</span><b class="float-right">{{$plan? $plan->duration: 'Coming soon'}} Day(s)</b></li>
                            </ul>
                            <a href="{{route('login')}}" class="btn outline-white-btn p-2">Get Started Now</a>
                        </div>
                    </div>
                </div>
                
                                
                
            </div>
            
            <div class="row justify-content-center">
                
                                
                
            </div>
                        
        </div>
    </section>

<section class="team-two-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Meet our lovely team</h2>
                        <p class="lead">Distinctively grow go forward manufactured products and optimal networks. Globally administrate 24/7 interfaces and end-to-end platforms.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="staff-member">
                        <div class="card gray-light-bg text-center border-0">
                            <img src="{{asset("img/team-1.jpg")}}" alt="team image" class="card-img-top">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Charles Duncan</h5>
                                <span>Broker</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="staff-member">
                        <div class="card gray-light-bg text-center border-0">
                            <img src="{{asset("img/team-3.jpg")}}" alt="team image" class="card-img-top">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Debbie F. Rencher</h5>
                                <span>Broker</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="staff-member">
                        <div class="card gray-light-bg text-center border-0">
                            <img src="{{asset("img/team-6.jpg")}}" alt="team image" class="img-fluid">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Spencer Dennis</h5>
                                <span>Founder & CEO</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- END SECTION TEAM --> 
<section class="promo-section ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-9">
                    <div class="section-heading mb-5">
                        <h2>Frequently Asked Questions</h2>
                        <p class="lead">
                            Have Any Question?
                        </p>
                    </div>
                </div>
            </div>
            <!--pricing faq start-->
            <div class="row">
                
                                
                <div class="col-lg-6">
                    
                                        <div id="accordion-1" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-1" data-toggle="collapse" role="button"
                                 data-target="#collapse-1-1" aria-expanded="false" aria-controls="collapse-1-1">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> What is {{$compd? $compd->companyname: 'Coming soon'}}?</h6>
                            </div>
                            <div id="collapse-1-1" class="collapse" aria-labelledby="heading-1-1"
                                 data-parent="#accordion-1">
                                <div class="card-body">
                                    <p>{{$compd? $compd->companyname: 'Coming soon'}} our company provides a full investment service focused on the bitcoin and cryptocurrency market We are among the best platforms to invest and grow your bitcoin and other cryptocurrency</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->
                        
                    </div>
                    
                                        <div id="accordion-1" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-2" data-toggle="collapse" role="button"
                                 data-target="#collapse-1-2" aria-expanded="false" aria-controls="collapse-1-2">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> How do I create my account?</h6>
                            </div>
                            <div id="collapse-1-2" class="collapse" aria-labelledby="heading-1-2"
                                 data-parent="#accordion-1">
                                <div class="card-body">
                                    <p>Registration process is very easy and will take a few moments to complete Simply click CREATE ACCOUNT button  and fill in all the required fields</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->
                        
                    </div>
                    
                                        <div id="accordion-1" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-3" data-toggle="collapse" role="button"
                                 data-target="#collapse-1-3" aria-expanded="false" aria-controls="collapse-1-3">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> How do I make a deposit?</h6>
                            </div>
                            <div id="collapse-1-3" class="collapse" aria-labelledby="heading-1-3"
                                 data-parent="#accordion-1">
                                <div class="card-body">
                                    <p>To deposit funds in your trading account is quick and simple For your convenience you may choose one of the several available deposit methods To make a successful deposit please follow the steps below Login to your account Click on the DEPOSITS button in the DASHBOARD section Choose the deposit option And follow the steps to complete your transaction</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->
                        
                    </div>
                    
                                        <div id="accordion-1" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-4" data-toggle="collapse" role="button"
                                 data-target="#collapse-1-4" aria-expanded="false" aria-controls="collapse-1-4">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> How long does my deposit take before it can reflect on my {{$compd? $compd->companyname: 'Coming soon'}} account dashboard?</h6>
                            </div>
                            <div id="collapse-1-4" class="collapse" aria-labelledby="heading-1-4"
                                 data-parent="#accordion-1">
                                <div class="card-body">
                                    <p>Your deposit will be reflected immediately once it is confirmed on the blockchain network</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->
                        
                    </div>
                    
                    			</div>
                                    
                <div class="col-lg-6">
                    
                                        <div id="accordion-2" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-5" data-toggle="collapse" role="button"
                                 data-target="#collapse-2-5" aria-expanded="false" aria-controls="collapse-2-5">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> How do I make a withdrawal?</h6>
                            </div>
                            <div id="collapse-2-5" class="collapse" aria-labelledby="heading-2-5"
                                 data-parent="#accordion-2">
                                <div class="card-body">
                                    <p>To make a withdrawal request click the WITHDRAW button at the top center of your {{$compd? $compd->companyname: 'Coming soon'}} account dashboard and input the required details to withdraw</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->
                        
                    </div>
                    
                                        <div id="accordion-2" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-6" data-toggle="collapse" role="button"
                                 data-target="#collapse-2-6" aria-expanded="false" aria-controls="collapse-2-6">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> How long does it take to process my withdrawal?</h6>
                            </div>
                            <div id="collapse-2-6" class="collapse" aria-labelledby="heading-2-6"
                                 data-parent="#accordion-2">
                                <div class="card-body">
                                    <p>Once we receive your withdrawal request we process immediately and send to your bitcoin wallet</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->
                        
                    </div>
                    
                                        <div id="accordion-2" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-7" data-toggle="collapse" role="button"
                                 data-target="#collapse-2-7" aria-expanded="false" aria-controls="collapse-2-7">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> Can I have more than one account?</h6>
                            </div>
                            <div id="collapse-2-7" class="collapse" aria-labelledby="heading-2-7"
                                 data-parent="#accordion-2">
                                <div class="card-body">
                                    <p>No you cannot have more than one account only investors on the vip plan are allowed to do so</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->
                        
                    </div>
                    
                                        <div id="accordion-2" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-8" data-toggle="collapse" role="button"
                                 data-target="#collapse-2-8" aria-expanded="false" aria-controls="collapse-2-8">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> Is this company properly registered?</h6>
                            </div>
                            <div id="collapse-2-8" class="collapse" aria-labelledby="heading-2-8"
                                 data-parent="#accordion-2">
                                <div class="card-body">
                                    <p>Yes we are officially and properly registered with the united kingdom company house our company registration number is 138898   and registered with the name {{$compd? $compd->companyname: 'Coming soon'}} LTD</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->
                        
                    </div>
                    
                                        <div id="accordion-2" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-9" data-toggle="collapse" role="button"
                                 data-target="#collapse-2-9" aria-expanded="false" aria-controls="collapse-2-9">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> Can I have more than two accounts?</h6>
                            </div>
                            <div id="collapse-2-9" class="collapse" aria-labelledby="heading-2-9"
                                 data-parent="#accordion-2">
                                <div class="card-body">
                                    <p>We do not allow multiple accounts except only for our investors on the VIP plan</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->
                        
                    </div>
                    
                                        <div id="accordion-2" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-10" data-toggle="collapse" role="button"
                                 data-target="#collapse-2-10" aria-expanded="false" aria-controls="collapse-2-10">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> how many times can i make a deposit?</h6>
                            </div>
                            <div id="collapse-2-10" class="collapse" aria-labelledby="heading-2-10"
                                 data-parent="#accordion-2">
                                <div class="card-body">
                                    <p>Yes you can make as many deposit as you want on any of our investment plans except the starter plan where you can only invest 3 times after which you make a choice to continue investing with us or not</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->
                        
                    </div>
                    
                    			</div>
                                    
            </div>
            <!--pricing faq end-->
        </div>
    </section>




@endsection()
