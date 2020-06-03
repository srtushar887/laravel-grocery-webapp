@extends('layouts.frontend')
@section('front')
    <section class="section-padding bg-dark inner-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="mt-0 mb-3 text-white">Support Policy</h1>
                    <div class="breadcrumbs">
                        <p class="mb-0 text-white"><a class="text-white" href="{{route('front')}}">Home</a>  /  <span class="text-white">Support Policy</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Inner Header -->
    <!-- About -->
    <section class="section-padding bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 pl-5 pr-5">
                    <p>{!! $about->support !!}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End About -->

@stop
