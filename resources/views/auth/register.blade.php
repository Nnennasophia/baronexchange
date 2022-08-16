@extends("layouts.customlayout")

@section('body')


<div class="main">
    <section class="hero-section ptb-100 full-screen">
        <div class="container">
            <div class="row align-items-center justify-content-between pt-3 pt-sm-3 pt-md-3 pt-lg-3">
                
                <div class="col-md-6 offset-md-3 ">
                    <div class="card login-signup-card shadow-lg mb-0">
                        <div class="card-body px-md-5 py-5">
                            <div class="mb-5">
                                
                                <h6 class="h3">Create account</h6>
                                <p class="text-muted mb-0">Get a new account in few steps.</p>
                            </div>
                            <form class="login-signup-form" action="{{route('register')}}" method="post">
                                @csrf
                                                                <div class="form-group">
                                    <!-- Label -->
                                    <label class="pb-1">
                                        Name *
                                    </label>
                                    <!-- Input group -->
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-user color-primary"></span>
                                        </div>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                         placeholder="Enter your name" name="name" id="name"
                                         value="{{ old('name') }}" required autocomplete="name" autofocus>
                                         
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!-- Label -->
                                    <label class="pb-1">
                                        Email Address *
                                    </label>
                                    <!-- Input group -->
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-email color-primary"></span>
                                        </div>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                         placeholder="Enter your email address" name="email" id="email" 
                                         value="{{ old('email') }}" required autocomplete="email">

                                         @error('email')
                                         <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="form-group">
                                    <!-- Label -->
                                    <label class="pb-1">
                                        Password *
                                    </label>
                                    <!-- Input group -->
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-lock color-primary"></span>
                                        </div>
                                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                                        placeholder="Enter your password" id="password" required autocomplete="new-password">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <!-- Label -->
                                    <label class="pb-1">
                                        Retype Password *
                                    </label>
                                    <!-- Input group -->
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-lock color-primary"></span>
                                        </div>
                                        <input type="password" name="password_confirmation" class="form-control"
                                        placeholder="Retype your password" id="confirmPassword" required autocomplete="new-password">
                                    </div>
                                </div>
                                
                                 <div class="form-group">
                                   
                                    <label class="pb-1">
                                        Phone Number
                                    </label>
                                   
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-user color-primary"></span>
                                        </div>
                                        <input type="phone" class="form-control" required autocomplete="phone"
                                        placeholder="Enter phone number" name="phone" id="phone">
                                    </div>
                                </div> 

                                <div class="my-4">
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" checked="" disabled="" id="check-terms">
                                        <label class="custom-control-label" for="check-terms">I agree to the <a href="{{route('terms')}}">terms and conditions</a></label>
                                    </div>
                                </div>

                                <!-- Submit -->
                                <button type="submit" class="btn btn-block secondary-solid-btn border-radius mt-4 mb-3">
                                    Sign up
                                </button>
                            </form>

                        </div>
                        <div class="card-footer px-md-5 bg-transparent border-top"><small>Already have an acocunt?</small>
                            <a href="{{route('login')}}" class="small">Sign in</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
    
    
    
@endsection
