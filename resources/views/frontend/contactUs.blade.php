@extends('layouts.frontend')
@section('front')
    <section class="section-padding bg-dark inner-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="mt-0 mb-3 text-white">Contact Us</h1>
                    <div class="breadcrumbs">
                        <p class="mb-0 text-white"><a class="text-white" href="#">Home</a>  /  <span class="text-white">Contact Us</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Inner Header -->
    <!-- Contact Us -->
    <!-- End Contact Us -->
    <!-- Contact Me -->
    <section class="section-padding  bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 section-title text-left mb-4">
                    <h2>Send Us Message for any query.</h2>
                </div>
                <div class="col-md-12">
                    @include('layouts.error')
                </div>
                <form action="{{route('contact.message.send')}}" method="post" class="col-lg-12 col-md-12" name="sentMessage" id="contactForm" novalidate>
                    @csrf
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" placeholder="Full Name" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="control-group form-group col-md-6">
                            <label>Phone Number <span class="text-danger">*</span></label>
                            <div class="controls">
                                <input type="tel" name="phone" placeholder="Phone Number" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                            </div>
                        </div>
                        <div class="control-group form-group col-md-6">
                            <div class="controls">
                                <label>Email Address <span class="text-danger">*</span></label>
                                <input type="email" name="email" placeholder="Email Address"  class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                            </div>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message <span class="text-danger">*</span></label>
                            <textarea rows="4" name="message" cols="100" placeholder="Message"  class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-success">Send Message</button>
                </form>
            </div>
        </div>
    </section>
@stop
