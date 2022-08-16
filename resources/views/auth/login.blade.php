@extends("layouts.customlayout")

@section('body')


<div class="main">
    
  <section class="hero-section ptb-100 full-screen">
      <div class="container">
          <div class="row align-items-center justify-content-between pt-3 pt-sm-3 pt-md-3 pt-lg-3">
              
              <div class="col-md-6 offset-md-3">
                  <div class="card login-signup-card shadow-lg mb-0">
                      <div class="card-body px-md-5 py-5">
                          <div class="mb-5">
                              <h5 class="h3">Login</h5>
                              <p class="text-muted mb-0">Sign in to your account to continue.</p>
                          </div>

                          <!--login form-->
                          <form class="login-signup-form" method="post" action="{{route('login')}}">
                            @csrf
                                                              <div class="form-group">
                                  <label class="pb-1">Email Address*</label>
                                  <div class="input-group input-group-merge">
                                      <div class="input-icon">
                                          <span class="ti-email color-primary"></span>
                                      </div>
                                      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                                      placeholder="Enter your email address" id="email"
                                      value="{{ old('email') }}" required autocomplete="email" autofocus>
                                      @error('email')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                  </div>
                              </div>
                              <!-- Password -->
                              <div class="form-group">
                                  <div class="row">
                                      <div class="col">
                                          <label class="pb-1">Password*</label>
                                      </div>
                                  </div>
                                  <div class="input-group input-group-merge">
                                      <div class="input-icon">
                                          <span class="ti-lock color-primary"></span>
                                      </div>
                                      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" 
                                      placeholder="Enter your password" id="password" required autocomplete="current-password">

                                      @error('password')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                  </div>
                              </div>

                              <!-- Submit -->
                              <button type="submit" name="login"  class="btn btn-block secondary-solid-btn border-radius mt-4 mb-3">
                                  Sign in
                              </button>

                          </form>
                      </div>
                      <div class="card-footer bg-transparent border-top px-md-5"><small>Not registered?</small>
                          <a href="{{route('register')}}" class="small"> Create account</a></div>
                  </div>
              </div>
          </div>
      </div>
  </section>
</div>
  
@endsection
