@extends("layouts.spacedcustomlayout")

@section('body')
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
                          <h1 class="text-white mb-0">FAQs</h1>
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
  <!-- END SECTION TEAM --> 
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
      </section><!-- END SECTION FAQ -->
  <!--section id="Blog" class="news">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="title title-center">
            <span>News</span>
            <h2>Latest News About Us</h2>
          </div>
        </div>
        <div class="col-xl-6 offset-xl-3 col-md-8 offset-md-2">
          <span class="description-content">Onward and upward, productize the deliverables and focus on the bottom line drop-dead date translating our vision of having a market leading platfrom drop-dead date.</span>
        </div>
        <div class="col-xl-12 col-md-12">
          <article class="blog-card wow fadeInUp" data-wow-delay="0.2s">
            <a href="single-post.html" class="image"><img src="img/blog/article-1.jpg" alt="" /></a>
            <div class="article-content">
              <a href="#" class="category"><i class="far fa-folder"></i> Finance</a>
              <a href="#" class="date"><i class="far fa-clock"></i> 25.09.2018</a>
              <a href="#" class="title"><h3>Lower supply is generating high price growth</h3></a>
            </div>
          </article>
          <article class="blog-card wow fadeInUp" data-wow-delay="0.4s">
            <a href="single-post.html" class="image"><img src="img/blog/article-2.jpg" alt="" /></a>
            <div class="article-content">
              <a href="#" class="category"><i class="far fa-folder"></i> Events</a>
              <a href="#" class="date"><i class="far fa-clock"></i> 22.09.2018</a>
              <a href="#" class="title"><h3>Introduction cryptocurrency bills to Congress</h3></a>
            </div>
          </article>
          <article class="blog-card wow fadeInUp" data-wow-delay="0.6s">
            <a href="single-post.html" class="image"><img src="img/blog/article-3.jpg" alt="" /></a>
            <div class="article-content">
              <a href="#" class="category"><i class="far fa-folder"></i> Markets</a>
              <a href="#" class="date"><i class="far fa-clock"></i> 28.08.2018</a>
              <a href="#" class="title"><h3>Is relative value investing time finally here?</h3></a>
            </div>
          </article>
        </div>
        <div class="col-xl-12">
          <a href="blog.html" class="btn mt-3 mt-md-4 light_button">More News</a>
        </div>
      </div>
    </div>
  </section--></div>
@endsection()
