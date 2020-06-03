@extends('layouts.frontend')
@section('front')
    <section class="pt-3 pb-3 page-info section-padding border-bottom bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="#"><strong><span class="mdi mdi-home"></span> Home</strong></a> <span class="mdi mdi-chevron-right"></span> <a href="#">Shop</a>
                </div>
            </div>
        </div>
    </section>
    <section class="shop-list section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="shop-filters">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Category <span class="mdi mdi-chevron-down float-right"></span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body card-shop-filters" style="height: 333px;overflow: scroll">
                                        @foreach($categories as $cats)
                                            <?php
                                            $count_pro = \App\product::where('top_cat_id',$cats->id)->count();
                                            ?>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input common_selector category" id="cb8{{$cats->id}}" value="{{$cats->id}}" >
                                                <label class="custom-control-label" for="cb8{{$cats->id}}">Fresh & Herbs <span class="badge badge-primary">({{$count_pro}} items)</span></label>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Brand <span class="mdi mdi-chevron-down float-right"></span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body card-shop-filters" style="height: 333px;overflow: scroll">
                                        @foreach($brands as $brand)
                                            <?php
                                            $count_pro_br = \App\product::where('brand_id',$brand->id)->count();
                                            ?>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input common_selector brand" id="b1{{$brand->id}}" value="{{$brand->id}}" {{$id == $brand->id ? 'checked' : ''}}>
                                                <label class="custom-control-label" for="b1{{$brand->id}}">Imported Fruits <span class="badge badge-warning">({{$count_pro_br}} items)</span></label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="left-ad mt-4">
                        <img class="img-fluid" src="http://via.placeholder.com/254x557" alt="">
                    </div>
                </div>
                <div class="col-md-9">

                    <div class="shop-head">
                        <a href="#"><span class="mdi mdi-home"></span> Home</a> <span class="mdi mdi-chevron-right"></span> <a class="total_product"></a>
                    </div>
                    <div class="row products">
                        {{--                        @include('frontend.include.allproduct')--}}

                    </div>
                    <div class="text-center loading">
                        <img src="{{asset('assets/frontend/image/loading.gif')}}" >
                    </div>


                </div>
            </div>
        </div>
    </section>
    <section class="product-items-slider section-padding bg-white border-top">
        <div class="container">
            <div class="section-header">
                <h5 class="heading-design-h5">Best Offers View <span class="badge badge-primary">20% OFF</span>
                    <a class="float-right text-secondary" href="shop.html">View All</a>
                </h5>
            </div>
            <div class="owl-carousel owl-carousel-featured">
                <div class="item">
                    <div class="product">
                        <a href="single.html">
                            <div class="product-header">
                                <span class="badge badge-success">50% OFF</span>
                                <img class="img-fluid" src="img/item/7.jpg" alt="">
                                <span class="veg text-success mdi mdi-circle"></span>
                            </div>
                            <div class="product-body">
                                <h5>Product Title Here</h5>
                                <h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - 500 gm</h6>
                            </div>
                            <div class="product-footer">
                                <p class="offer-price mb-0">$450.99 <i class="mdi mdi-tag-outline"></i> <span class="regular-price">$800.99</span></p><button type="button" class="btn btn-secondary btn-sm"><i class="mdi mdi-cart-outline"></i> Add To Cart</button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
@section('js')
    <script>
        $('.products').hide();
        $('.loading').show();
        setTimeout(function(){
            $('.loading').hide();
            $('.products').show();
        }, 2000);


        $(window).on('hashchange', function() {
            if (window.location.hash) {
                var page = window.location.hash.replace('#', '');
                if (page == Number.NaN || page <= 0) {
                    return false;
                }else{
                    getData(page);
                }
            }
        });


        $('.common_selector').click(function () {
            $("html, body").animate({ scrollTop: 200 }, "slow");
        })



        $(document).ready(function () {

            $(document).on('click', '.pagination a',function(event)
            {
                event.preventDefault();

                $("html, body").animate({ scrollTop: 200 }, "slow");

                $('li').removeClass('active');
                $(this).parent('li').addClass('active');

                var myurl = $(this).attr('href');
                // console.log(myurl);
                var newurl = myurl.substr(0,myurl.length-1);

                var page=$(this).attr('href').split('page=')[1];
                var newurldata = (newurl+page);
                // console.log(newurldata);
                getData(myurl);
            });





            filter_data();

            function filter_data() {
                var catagory = get_filter('category');
                var brand = get_filter('brand');

                $.ajax({
                    type : "POST",
                    url: "{{route('get.all.product.by.filter')}}",
                    data : {
                        '_token' : "{{csrf_token()}}",
                        'catagory' : catagory,
                        'brand' : brand,
                    },
                    success:function(data){
                        $('.products').hide();
                        $('.loading').show();
                        var totalPro = data.notices.total;

                        var a = `${totalPro} product found`;
                        $('.total_product').empty().append(a)
                        if(totalPro > 0){
                            setTimeout(function(){
                                $('.loading').hide();
                                $('.products').show();
                                $('.products').empty().append(data.view)
                            }, 2000);
                        }else {
                            setTimeout(function(){
                                var err_not = `<h3 class="text-center text-danger">Sorry! No Product Available</h3>`;
                                $('.loading').hide();
                                $('.products').show();
                                $('.products').empty().append(err_not)
                            }, 2000);
                        }

                    }
                });
            }



            function get_filter(class_name)
            {
                var filter = [];
                $('.'+class_name+':checked').each(function(){
                    filter.push($(this).val());
                });
                return filter;
            }

            function get_filter_two(class_name)
            {
                var data = $('.'+class_name).val();
                return data;
            }


            $('.common_selector').click(function(){
                filter_data();
            });

            $('.searchpro').keyup(function () {
                // var search = $(this).val();
                filter_data();
                // console.log(search)
            });



        });



        function getData(myurl){
            function get_filter_data(class_name)
            {
                var filter = [];
                $('.'+class_name+':checked').each(function(){
                    filter.push($(this).val());
                });
                return filter;
            }

            function get_filter_two(class_name)
            {
                var data = $('.'+class_name).val();
                return data;
            }


            var catagory = get_filter_data('category');
            var brand = get_filter_data('brand');
            $.ajax(
                {
                    url: myurl,
                    type: "get",
                    data : {
                        '_token' : "{{csrf_token()}}",
                        'catagory' : catagory,
                        'brand' : brand,
                    },
                    datatype: "html"
                }).done(function(data){

                $('.products').hide();
                $('.loading').show();
                setTimeout(function(){
                    $('.loading').hide();
                    $('.products').show();
                    $('.products').empty().append(data.view)
                }, 2000);

                // $('.products').empty().append(data.view)

                // location.hash = myurl;

            }).fail(function(jqXHR, ajaxOptions, thrownError){
                alert('No response from server');
            });
        }





    </script>
@stop
