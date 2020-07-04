@extends('layouts.frontend')
@section('front')

    <section class="carousel-slider-main text-center border-top border-bottom bg-white">
        <div class="owl-carousel owl-carousel-slider">
            @foreach($sliders as $slid)
            <div class="item">
                <a href="{{route('front')}}"><img class="img-fluid" src="{{asset($slid->slider_image)}}" alt="First slide"></a>
            </div>
            @endforeach
        </div>
    </section>
    <section class="top-category section-padding">
        <div class="container">
            <div class="owl-carousel owl-carousel-category">
                @foreach($categroies as $cat)
                <div class="item">
                    <div class="category-item">
                        <a href="{{route('category.product',['id'=>$cat->id,'name'=>$cat->top_cat_name])}}">
                            @if (!empty($cat->top_cat_image))

                                <img class="img-fluid" src="{{asset($cat->top_cat_image)}}" alt="">
                            @else
                                <img class="img-fluid" src="https://www.chanchao.com.tw/images/default.jpg" alt="">
                            @endif
                            <h6>{{$cat->top_cat_name}}</h6>
                                <?php
                                    $count_pro = \App\product::where('top_cat_id',$cat->id)->count();
                                ?>
                            <p>{{$count_pro}} Items</p>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="product-items-slider section-padding">
        <div class="container">
            <div class="section-header">
                <h5 class="heading-design-h5">Top Savers Today <span class="badge badge-success">20% OFF</span>
                    <a class="float-right text-secondary" href="{{route('shop')}}">View All</a>
                </h5>
            </div>
            <div class="owl-carousel owl-carousel-featured">
                @foreach($rand_products as $producs)
                <div class="item">
                    <div class="product">
                        <a href="{{route('product.view',$producs->id)}}">
                            <div class="product-header">
                                <span class="badge badge-success">50% OFF</span>
                                @if (!empty($producs->main_image))

                                    <img class="img-fluid" src="{{asset($producs->main_image)}}" alt="">
                                @else
                                    <img class="img-fluid" src="https://www.chanchao.com.tw/images/default.jpg" alt="">
                                @endif
                            </div>
                            <div class="product-body">
                                <h5>{{$producs->product_name}}</h5>
                                <h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - 500 gm</h6>
                            </div>
                            <div class="product-footer">
                                <p class="offer-price mb-0">${{$producs->new_price}} <i class="mdi mdi-tag-outline"></i> <span class="regular-price">${{$producs->new_price}}</span></p>
                                <a href="{{route('add.to.cart.single',$producs->id)}}">

                                    <button type="button" class="btn btn-secondary btn-sm"><i class="mdi mdi-cart-outline"></i> Add To Cart</button>
                                </a>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="offer-product">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <a href="#"><img class="img-fluid" src="img/ad/1.jpg" alt=""></a>
                </div>
                <div class="col-md-6">
                    <a href="#"><img class="img-fluid" src="img/ad/2.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <section class="product-items-slider section-padding">
        <div class="container">
            <div class="section-header">
                <h5 class="heading-design-h5">Best Offers View <span class="badge badge-info">20% OFF</span>
                    <a class="float-right text-secondary" href="{{route('shop')}}">View All</a>
                </h5>
            </div>
            <div class="owl-carousel owl-carousel-featured">
                @foreach($best_offer_products as $best_offer)
                    <div class="item">
                        <div class="product">
                            <a href="{{route('product.view',$best_offer->id)}}">
                                <div class="product-header">
                                    <span class="badge badge-success">50% OFF</span>
                                    @if (!empty($producs->main_image))

                                        <img class="img-fluid" src="{{asset($producs->main_image)}}" alt="">
                                    @else
                                        <img class="img-fluid" src="https://www.chanchao.com.tw/images/default.jpg" alt="">
                                    @endif
                                </div>
                                <div class="product-body">
                                    <h5>{{$producs->product_name}}</h5>
                                    <h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - 500 gm</h6>
                                </div>
                                <div class="product-footer">
                                    <p class="offer-price mb-0">${{$producs->new_price}} <i class="mdi mdi-tag-outline"></i> <span class="regular-price">${{$producs->new_price}}</span></p>
                                    <a href="{{route('add.to.cart.single',$producs->id)}}">

                                        <button type="button" class="btn btn-secondary btn-sm"><i class="mdi mdi-cart-outline"></i> Add To Cart</button>
                                    </a>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
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
