@extends('layouts.frontend')
@section('front')
    <section class="section-padding bg-dark inner-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="mt-0 mb-3 text-white">Register</h1>
                    <div class="breadcrumbs">
                        <p class="mb-0 text-white"><a class="text-white" href="#">Home</a>  /  <span class="text-white">Login</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Inner Header -->

    <!-- Contact Me -->
    <section class="section-padding text-center  bg-white">
        <div class="container text-center" style="margin: 0 auto">
            <div class="row text-left">
                <form action="{{route('register')}}" method="post" class="col-lg-12 col-md-12" name="sentMessage" id="contactForm" novalidate>
                    @csrf
                    <div class="row">
                        <div class="control-group form-group col-md-6">
                            <label>First Name <span class="text-danger">*</span></label>
                            <div class="controls">
                                <input type="text" name="first_name" placeholder="First Name" class="form-control @error('first_name') is-invalid @enderror" id="phone" required data-validation-required-message="Please enter your phone number.">
                                @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="control-group form-group col-md-6">
                            <label>Last Name <span class="text-danger">*</span></label>
                            <div class="controls">
                                <input type="text" name="last_name" placeholder="Last Name" class="form-control @error('last_name') is-invalid @enderror" id="phone" required data-validation-required-message="Please enter your phone number.">
                                @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="control-group form-group col-md-6">
                            <label>Email <span class="text-danger">*</span></label>
                            <div class="controls">
                                <input type="email" name="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" id="phone" required data-validation-required-message="Please enter your phone number.">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="control-group form-group col-md-6">
                            <label>Phone <span class="text-danger">*</span></label>
                            <div class="controls">
                                <input type="text" name="phone" placeholder="Phone" class="form-control @error('phone') is-invalid @enderror" id="phone" required data-validation-required-message="Please enter your phone number.">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="control-group form-group col-md-6">
                            <div class="controls">
                                <label>Password<span class="text-danger">*</span></label>
                                <input type="password" name="password" placeholder="Password"  class="form-control @error('password') is-invalid @enderror" id="email" required data-validation-required-message="Please enter your email address.">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="control-group form-group col-md-6">
                            <div class="controls">
                                <label>Confirm Password<span class="text-danger">*</span></label>
                                <input type="password" name="password_confirmation" placeholder="Confirm Password"  class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                            </div>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-success">Register</button>
                    <br>
                    <br>

                    <h5>Already have an account ?<a href="{{route('login')}}">Login Here</a></h5>
                    <a href="{{ url('/auth/redirect/facebook')}}">
                        <button type="button" class="btn btn-success"><i class="mdi mdi-facebook"></i> Login With Facebook</button>
                    </a>
                    <a href="{{ url('/auth/redirect/google') }}">
                        <button type="button" class="btn btn-success"><i class="mdi mdi-google"></i> Login With Google</button>
                    </a>
                </form>
            </div>
        </div>
    </section>

@stop
