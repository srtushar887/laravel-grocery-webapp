@extends('layouts.frontend')
@section('front')
    <section class="section-padding bg-dark inner-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="mt-0 mb-3 text-white">Login</h1>
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
                <form class="col-lg-12 col-md-12" action="{{route('login')}}" method="post" name="sentMessage" id="contactForm" novalidate>
                    @csrf
                    <div class="row">
                        <div class="control-group form-group col-md-6">
                            <label>Email <span class="text-danger">*</span></label>
                            <div class="controls">
                                <input type="tel" name="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="phone" required data-validation-required-message="Please enter your phone number.">
                                @error('email')
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
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-success">Login</button>
                    <br>
                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <h5>Need an account ?<a href="{{route('register')}}">Register Here</a></h5>
                        </div>
                        <div class="col-md-6">
                            <h5>Lost your password ?<a href="{{route('forgot.password')}}">Forgot Password</a></h5>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ url('/auth/redirect/facebook')}}">

                                <button type="button" class="btn btn-success"><i class="mdi mdi-facebook"></i> Login With Facebook</button>
                            </a>
                            <a href="{{ url('/auth/redirect/google') }}">
                                <button type="button" class="btn btn-success"><i class="mdi mdi-google"></i> Login With Google</button>
                            </a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>

@stop
