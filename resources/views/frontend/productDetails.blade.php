@extends('layouts.frontend')
@section('front')
    <section class="pt-3 pb-3 page-info section-padding border-bottom bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="#"><strong><span class="mdi mdi-home"></span> Home</strong></a> <span class="mdi mdi-chevron-right"></span> <a href="#">Fruits & Vegetables</a> <span class="mdi mdi-chevron-right"></span> <a href="#">Fruits</a>
                </div>
            </div>
        </div>
    </section>
    <section class="shop-single section-padding pt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="shop-detail-left">
                        <div class="shop-detail-slider">

                            <div id="sync1" class="owl-carousel">
                                @if (!empty($product->main_image))
                                    <div class="item"><img alt="" src="{{asset($product->main_image)}}" class="img-fluid img-center"></div>
                                @else
                                    <div class="item"><img alt="" src="https://www.chanchao.com.tw/images/default.jpg" class="img-fluid img-center"></div>
                                @endif
                                    @if (!empty($product->image_one))
                                        <div class="item"><img alt="" src="{{asset($product->image_one)}}" class="img-fluid img-center"></div>
                                    @else
                                        <div class="item"><img alt="" src="https://www.chanchao.com.tw/images/default.jpg" class="img-fluid img-center"></div>
                                    @endif
                                    @if (!empty($product->image_two))
                                        <div class="item"><img alt="" src="{{asset($product->image_two)}}" class="img-fluid img-center"></div>
                                    @else
                                        <div class="item"><img alt="" src="https://www.chanchao.com.tw/images/default.jpg" class="img-fluid img-center"></div>
                                    @endif
                                    @if (!empty($product->image_three))
                                        <div class="item"><img alt="" src="{{asset($product->image_three)}}" class="img-fluid img-center"></div>
                                    @else
                                        <div class="item"><img alt="" src="https://www.chanchao.com.tw/images/default.jpg" class="img-fluid img-center"></div>
                                    @endif
                                    @if (!empty($product->image_four))
                                        <div class="item"><img alt="" src="{{asset($product->image_four)}}" class="img-fluid img-center"></div>
                                    @else
                                        <div class="item"><img alt="" src="https://www.chanchao.com.tw/images/default.jpg" class="img-fluid img-center"></div>
                                    @endif
                                    @if (!empty($product->image_five))
                                        <div class="item"><img alt="" src="{{asset($product->image_five)}}" class="img-fluid img-center"></div>
                                    @else
                                        <div class="item"><img alt="" src="https://www.chanchao.com.tw/images/default.jpg" class="img-fluid img-center"></div>
                                    @endif
                            </div>
                            <div id="sync2" class="owl-carousel">
                                @if (!empty($product->main_image))
                                    <div class="item"><img alt="" src="{{asset($product->main_image)}}" class="img-fluid img-center"></div>
                                @else
                                    <div class="item"><img alt="" src="https://www.chanchao.com.tw/images/default.jpg" class="img-fluid img-center"></div>
                                @endif
                                @if (!empty($product->image_one))
                                    <div class="item"><img alt="" src="{{asset($product->image_one)}}" class="img-fluid img-center"></div>
                                @else
                                    <div class="item"><img alt="" src="https://www.chanchao.com.tw/images/default.jpg" class="img-fluid img-center"></div>
                                @endif
                                @if (!empty($product->image_two))
                                    <div class="item"><img alt="" src="{{asset($product->image_two)}}" class="img-fluid img-center"></div>
                                @else
                                    <div class="item"><img alt="" src="https://www.chanchao.com.tw/images/default.jpg" class="img-fluid img-center"></div>
                                @endif
                                @if (!empty($product->image_three))
                                    <div class="item"><img alt="" src="{{asset($product->image_three)}}" class="img-fluid img-center"></div>
                                @else
                                    <div class="item"><img alt="" src="https://www.chanchao.com.tw/images/default.jpg" class="img-fluid img-center"></div>
                                @endif
                                @if (!empty($product->image_four))
                                    <div class="item"><img alt="" src="{{asset($product->image_four)}}" class="img-fluid img-center"></div>
                                @else
                                    <div class="item"><img alt="" src="https://www.chanchao.com.tw/images/default.jpg" class="img-fluid img-center"></div>
                                @endif
                                @if (!empty($product->image_five))
                                    <div class="item"><img alt="" src="{{asset($product->image_five)}}" class="img-fluid img-center"></div>
                                @else
                                    <div class="item"><img alt="" src="https://www.chanchao.com.tw/images/default.jpg" class="img-fluid img-center"></div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="shop-detail-right">
                        <h2>{{$product->product_name}}</h2>
                        <h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - 500 gm</h6>
                        <p class="regular-price"><i class="mdi mdi-tag-outline"></i> MRP : ${{$product->old_price}}</p>
                        <p class="offer-price mb-0">Current price : <span class="text-success">${{$product->new_price}}</span></p>
                        <a href="checkout.html"><button type="button" class="btn btn-secondary btn-lg"><i class="mdi mdi-cart-outline"></i> Add To Cart</button> </a>
                        <div class="short-description">
                            <h5>
                                Quick Overview
                                <p class="float-right">Availability: <span class="badge badge-success">In Stock</span></p>
                            </h5>
                            <p>{!! $product->description !!}</p>
                        </div>
                        <h6 class="mb-3 mt-4">Why shop from Groci?</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <i class="mdi mdi-truck-fast"></i>
                                    <h6 class="text-info">Free Delivery</h6>
                                    <p>Lorem ipsum dolor...</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <i class="mdi mdi-basket"></i>
                                    <h6 class="text-info">100% Guarantee</h6>
                                    <p>Rorem Ipsum Dolor sit...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="product-items-slider section-padding bg-white border-top">
        <div class="container">
            <div class="section-header">
                <h5 class="heading-design-h5">Similar Product
                    <a class="float-right text-secondary" href="{{route('shop')}}">View All</a>
                </h5>
            </div>
            <div class="owl-carousel owl-carousel-featured">
                @foreach($smilar_product as $simpro)
                <div class="item">
                    <div class="product">
                        <a href="{{route('product.view',$simpro->id)}}">
                            <div class="product-header">

                                @if (!empty($simpro->main_image))

                                    <img class="img-fluid" src="{{asset($simpro->main_image)}}" alt="">
                                @else
                                    <img class="img-fluid" src="https://www.chanchao.com.tw/images/default.jpg" alt="">
                                @endif
                            </div>
                            <div class="product-body">
                                <h5>{{$simpro->product_name}}</h5>
                                <h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - 500 gm</h6>
                            </div>
                            <div class="product-footer">
                                <p class="offer-price mb-0">${{$simpro->new_price}} <i class="mdi mdi-tag-outline"></i> <span class="regular-price">${{$simpro->old_price}}</span></p><button type="button" class="btn btn-secondary btn-sm"><i class="mdi mdi-cart-outline"></i> Add To Cart</button>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

@stop
