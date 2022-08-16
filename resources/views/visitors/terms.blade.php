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
                            <h1 class="text-white mb-0">Terms of Use</h1>
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
                                <h4>Terms of Use</h4>
                                <p>These rules are official and the public offer of {{$compd? $compd->companyname: 'Coming soon'}}, acting in accordance with the Company, on the one hand,
                                    and the individual investor. This is equivalent to the conclusion of the Agreement in accordance with international
                                    law. These rules shall enter into force on the date of registration of the Investor on the website of the program
                                    {{$compd? $compd->companyname: 'Coming soon'}} and his acceptance of the terms and conditions. If you disagree with these terms and conditions or any 
                                    part of these terms and conditions, you must not use this website. Any individual or company from any country may 
                                    open an account on the website. You must be at least 18 years of age to use this website. You agree that all 
                                    information, communications, materials coming from {{$compd? $compd->companyname: 'Coming soon'}} are unsolicited and must be kept private, 
                                    confidential and protected from any disclosure. Moreover, the information, communications and materials 
                                    contained herein are not to be regarded as an offer, nor a solicitation for investments in any jurisdiction which 
                                    deems non-public offers or solicitations unlawful, nor to any person to whom it will be unlawful to make such offer 
                                    or solicitation. You agree that all information, interactions, materials coming from {{$compd? $compd->companyname: 'Coming soon'}} are unsolicited and
                                    must be kept private, confidential and protected from any disclosure. Besides, the information, interactions and 
                                    materials present herein are not to be regarded as an offer, nor a solicitation for investments in any jurisdiction 
                                    which deems non-public offers or solicitations unlawful, nor to any person to whom it will be unlawful to make such 
                                    offer or solicitation. You must register as a Member to access certain functions of the Website. You are obliged to 
                                    provide only complete and accurate information about yourself when registering as a Member or updating your 
                                    Registration Data. You agree to maintain and keep your Registration Data current and to update the Registration 
                                    Data as soon as it changes. You are responsible for maintaining the security of your password. Our Company and its 
                                    service providers are not liable for any loss that you may suffer through the use of your password by others. 
                                    Each Investor can register only one personal account, re-registration is not allowed. In case of multiple 
                                    registrations, the Company reserves the right to disable all accounts to ascertain the circumstances. Each 
                                    deposit is considered to be a private transaction between {{$compd? $compd->companyname: 'Coming soon'}} and its Member. Members perform all 
                                    financial transactions solely at their own discretion and their own risk. The Investor personally decides 
                                    whether or not to invest and how much to invest. All accruals in the Personal Account are made according to 
                                    the chosen investment package. The Investor has the right to freely dispose of the funds that are on his personal 
                                    account. The Investor can make a deposit with only help of electronic payment systems used by the Company. 
                                    The interest rate depends on the selected investment package while each investment package allows for investing 
                                    different amounts. You may choose any of the following e-currencies to make deposit: Bitcoin, Ethereum, Bitcoin 
                                    Cash, Dash, Payeer, Perfect Money, Ripple and Litecoin. A deposit may only be made in US dollars. All accruals 
                                    of profit are done automatically and in accordance with chosen investment plan. Depending on the amount of your
                                    deposit and the term of chosen investment period, you will receive guaranteed income after a certain period of 
                                    time. Your earnings is depending from your investment plan and can be in Daily basis or at the end of investment 
                                    term. If you choose Daily plans you will get your initial capital back at the end of investment term. 
                                    The withdrawal time can take up to 48 hours. You may use, reproduce and share any links to any page of this 
                                    Website. You should use Your individual referral link to take part in the affiliate program. The affiliate 
                                    program is a way to get extra earnings for referring other people to the products and services offered through 
                                    this Website. You do not have to make a deposit or have an active investment to get affiliate bonuses. Clients 
                                    are not allowed to send SPAM or any kind of unsolicited commercial e-mail to promote the Company, its products 
                                    and services. Our affiliate rewards program offers earning at four levels and pays 10% of the deposits made by
                                    your first-line referrals, 3% of the deposits made by you second-line referrals (the people invited by your 
                                    first-line referrals), 2% of the deposits of your third-line referrals (the people invited by your second-line 
                                    referrals) and 1% of the deposits of your fourth-line referrals (the people invited by your third-line referrals)
                                    If you do not agree with the above disclaimer, please do not go any further.</p>
    
                                
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
                                    <li><span class="ti-email mr-2 color-primary"></span> {{$compd? $compd->companyname: 'Coming soon'}}</li>
                                </ul>
                            </aside>
    
                            <!-- Subscribe widget-->
                            <aside class="widget widget-categories">
                                <div class="widget-title">
                                    <h5>Send a message</h5>
                                </div>
                                <form method="post" action="https://{{$compd? $compd->companyname: 'Coming soon'}}.ltd/contact.php" class="contact-us-form">
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

@endsection()
