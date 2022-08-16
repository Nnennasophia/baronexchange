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
                          <h1 class="text-white mb-0">Get Support</h1>
                          <div class="custom-breadcrumb">
                              <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                  <li class="list-inline-item breadcrumb-item active">Send Us A Message</li>
                              </ol>
                          </div>
                      </div>
                  </div>
              </div>
              
          </div>
      </section><section class="contact-us-section py-5">
          <div class="container contact">
              <div class="col-12 pb-3 message-box d-none">
                  <div class="alert alert-danger"></div>
              </div>
              <div class="row justify-content-around">
                  <div class="col-md-6">
                      <div class="contact-us-form gray-light-bg rounded p-5">
                          <h4>Ready to get started?</h4>
                          <form method="post" action="{{route('postcontact')}}" class="contact-us-form">
                            @csrf
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
                      </div>
                  </div>
                  <div class="col-md-5">
                      <div class="contact-us-content">
                          <h2>Looking for a Profitable Investment Plan?</h2>
                          <p class="lead">Search no! Click on the button below to get started.</p>
  
                          <a href="{{route('register')}}" class="btn outline-btn align-items-center" style="background:orange">Get Your Solution <span class="ti-arrow-right pl-2"></span></a>
  
                          <hr class="my-5">
  
                          <h5>Our Headquarters</h5>
                          <address>
                            {{$compd? $compd->companylocation: 'Coming soon'}}                        </address>
                          <br>
                          <span>Phone: {{$compd? $compd->companyphone: 'Coming soon'}}</span> <br>
                          <span>Email: <a href="mailto:{{$compd? $compd->companyemail: 'Coming soon'}}" class="link-color">{{$compd? $compd->companyemail: 'Coming soon'}}</a></span>
  
                      </div>
                  </div>
              </div>
          </div>
      </section>
  
  <section class="contact-us-promo py-5">
          <div class="container">
              <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                          <div class="card-body py-5">
                              <div class="pb-2">
                                  <span class="ti-mobile icon-sm color-secondary"></span>
                              </div>
                              <div><h5 class="mb-0">Call Us</h5>
                                  <p class="text-muted mb-0">{{$compd? $compd->companyphone: 'Coming soon'}}</p>
                              </div>
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                          <div class="card-body py-5">
                              <div class="pb-2">
                                  <span class="ti-location-pin icon-sm color-secondary"></span>
                              </div>
                              <div><h5 class="mb-0">Visit Us</h5>
                                  <p class="text-muted mb-0">{{$compd? $compd->companylocation: 'Coming soon'}}</p></div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                          <div class="card-body py-5">
                              <div class="pb-2">
                                  <span class="ti-email icon-sm color-secondary"></span>
                              </div>
                              <div><h5 class="mb-0">Mail Us</h5>
                                  <p class="text-muted mb-0">{{$compd? $compd->companyemail: 'Coming soon'}}</p></div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                          <div class="card-body py-5">
                              <div class="pb-2">
                                  <span class="ti-headphone-alt icon-sm color-secondary"></span>
                              </div>
                              <div><h5 class="mb-0">Live Chat</h5>
                                  <p class="text-muted mb-0">Chat with Us 24/7</p></div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                          <div class="card-body py-5">
                              <div class="pb-2">
                                  <a href="{{$compd? $compd->companyphone: 'Coming soon'}}"><img style="width: 30px; height: 30px" src="{{asset("img/whatsapp.png")}}" alt=""></a>
                              </div>
                              <div><h5 class="mb-0">WhatsApp</h5>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                          <div class="card-body py-5">
                              <div class="pb-2">
                                 <a href="#"><img style="width: 30px; height: 30px" src="{{asset("img/telegram.png")}}" alt=""><a>
                              </div>
                              <div><a href="#"><h5 class="mb-0">Telegram</h5><a>
                                  <p class="text-muted mb-0">Join Our Telegram Group</p></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
          
  
  </div>


@endsection()
