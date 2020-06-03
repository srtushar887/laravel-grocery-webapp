@extends('layouts.frontend')
@section('front')
    <section class="account-page section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <div class="row no-gutters">
                        @include('user.include.menu')
                        <div class="col-md-8">
                            <div class="card card-body account-right">
                                <div class="widget">
                                    <div class="section-header">
                                        <h5 class="heading-design-h5">
                                            Change Password
                                        </h5>
                                    </div>
                                    <form action="{{route('user.password.update')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">New Password <span class="required">*</span></label>
                                                    <input class="form-control border-form-control" name="npass" type="password">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">Confirm Password <span class="required">*</span></label>
                                                    <input class="form-control border-form-control" name="cpass"   type="password">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12 text-right">
                                                <button type="submit" class="btn btn-success btn-lg"> Save </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding bg-white border-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="feature-box">
                        <i class="mdi mdi-truck-fast"></i>
                        <h6>Free & Next Day Delivery</h6>
                        <p>Lorem ipsum dolor sit amet, cons...</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="feature-box">
                        <i class="mdi mdi-basket"></i>
                        <h6>100% Satisfaction Guarantee</h6>
                        <p>Rorem Ipsum Dolor sit amet, cons...</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="feature-box">
                        <i class="mdi mdi-tag-heart"></i>
                        <h6>Great Daily Deals Discount</h6>
                        <p>Sorem Ipsum Dolor sit amet, Cons...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
