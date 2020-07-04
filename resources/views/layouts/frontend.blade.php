<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Askbootstrap">
    <meta name="author" content="Askbootstrap">
    <title>{{$gn->site_name}}</title>
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="{{asset($gn->icon)}}">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/frontend/')}}/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Icons -->

    <link href="{{asset('assets/frontend/')}}/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
    <!-- Select2 CSS -->
    <link href="{{asset('assets/frontend/')}}/css/select2-bootstrap.css" />
    <link href="{{asset('assets/frontend/')}}/css/select2.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{asset('assets/frontend/')}}/css/osahan.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/owl.theme.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ce870e4a39.js" crossorigin="anonymous"></script>
    @yield('css')
</head>
<body>
<div class="modal fade login-modal-main" id="bd-example-modal">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="login-modal">
                    <div class="row">
                        <div class="col-lg-6 pad-right-0">
                            <div class="login-modal-left">
                            </div>
                        </div>
                        <div class="col-lg-6 pad-left-0">
                            <button type="button" class="close close-top-right" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i class="mdi mdi-close"></i></span>
                                <span class="sr-only">Close</span>
                            </button>
                            <form>
                                <div class="login-modal-right">
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="login" role="tabpanel">
                                            <h5 class="heading-design-h5">Login to your account</h5>
                                            <fieldset class="form-group">
                                                <label>Enter Email/Mobile number</label>
                                                <input type="text" class="form-control" placeholder="+91 123 456 7890">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label>Enter Password</label>
                                                <input type="password" class="form-control" placeholder="********">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <button type="submit" class="btn btn-lg btn-secondary btn-block">Enter to your account</button>
                                            </fieldset>
                                            <div class="login-with-sites text-center">
                                                <p>or Login with your social profile:</p>
                                                <button class="btn-facebook login-icons btn-lg"><i class="mdi mdi-facebook"></i> Facebook</button>
                                                <button class="btn-google login-icons btn-lg"><i class="mdi mdi-google"></i> Google</button>
                                                <button class="btn-twitter login-icons btn-lg"><i class="mdi mdi-twitter"></i> Twitter</button>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="register" role="tabpanel">
                                            <h5 class="heading-design-h5">Register Now!</h5>
                                            <fieldset class="form-group">
                                                <label>Enter Email/Mobile number</label>
                                                <input type="text" class="form-control" placeholder="+91 123 456 7890">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label>Enter Password</label>
                                                <input type="password" class="form-control" placeholder="********">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label>Enter Confirm Password </label>
                                                <input type="password" class="form-control" placeholder="********">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <button type="submit" class="btn btn-lg btn-secondary btn-block">Create Your Account</button>
                                            </fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2">I Agree with <a href="#">Term and Conditions</a></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="text-center login-footer-tab">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" ><i class="mdi mdi-login"></i> LOGIN</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" ><i class="mdi mdi-pencil"></i> REGISTER</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="navbar-top pt-2 pb-2">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="mb-0 text-white">
                    20% cashback for all users | Code: <strong><span class="text-light">OGOFERS13 <span class="mdi mdi-tag-faces"></span></span> </strong>                   </a>
            </div>
            <div class="col-md-6 text-right">
                <a href="{{route('login')}}" class="text-white ml-3 mr-3"><i class="mdi mdi-login"></i> Sign In</a>
                <a href="{{route('register')}}"  class="text-white"><i class="mdi mdi-account-circle"></i> Sign Up</a>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-light navbar-expand-lg bg-dark bg-faded osahan-menu">
    <div class="container">
        <a class="navbar-brand" href="{{route('front')}}"> <img src="{{asset($gn->logo)}}" style="height: 42px;width: 166px;" alt="logo"> </a>

        <button class="navbar-toggler navbar-toggler-white" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse" id="navbarNavDropdown ">
            <div class="navbar-nav mr-auto mt-5 mt-lg-2 margin-auto top-categories-search-main">
                <div class="top-categories-search">
                    <div class="input-group">
                        <span class="input-group-btn categories-dropdown">
                            <?php
                                $cats_data = \App\top_category::all();
                            ?>
                           <select class="form-control-select">
                              <option selected="selected">select any</option>
                               @foreach($cats_data as $catd)
                              <option value="{{$catd->id}}">{{$catd->top_cat_name}}</option>
                               @endforeach
                           </select>
                        </span>
                        <input class="form-control" placeholder="Search products in Your City" aria-label="Search products in Your City" type="text">
                        <span class="input-group-btn">
                        <button class="btn btn-secondary" type="button"><i class="mdi mdi-file-find"></i> Search</button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="my-2 my-lg-0">
                <ul class="list-inline main-nav-right">
                    <li class="list-inline-item cart-btn">
                        <?php
                        $counts = \Gloudemans\Shoppingcart\Facades\Cart::content()->count();
                        ?>
                        <a href="#" data-toggle="offcanvas" class="btn btn-link border-none">
                            <i class="mdi mdi-cart"></i> My Cart <small class="cart-value">{{$counts}}</small></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light osahan-menu-2 pad-none-mobile">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 margin-auto">
                <li class="nav-item">
                    <a class="nav-link shop" href="{{route('front')}}"><span class="mdi mdi-store"></span> {{$gn->site_name}}</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('front')}}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('aboutus')}}" class="nav-link">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('shop')}}" class="nav-link">Shop</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    <div class="dropdown-menu">
                        <?php
                        $cats_data1 = \App\top_category::inRandomOrder()->limit(10)->get();
                        ?>
                        @foreach($cats_data1 as $catd2)
                        <a class="dropdown-item" href="{{route('category.product',['id'=>$catd2->id,'name'=>$catd2->top_cat_name])}}"><i class="mdi mdi-chevron-right" aria-hidden="true"></i> {{$catd2->top_cat_name}}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Brand
                    </a>
                    <div class="dropdown-menu">
                        <?php
                        $brand_data1 = \App\brand::inRandomOrder()->limit(10)->get();
                        ?>
                            @foreach($brand_data1 as $brnd1)
                                <a class="dropdown-item" href="{{route('brand.product',['id'=>$brnd1->id,'name'=>$brnd1->brand_name])}}"><i class="mdi mdi-chevron-right" aria-hidden="true"></i> {{$brnd1->brand_name}}</a>
                            @endforeach </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact.us')}}">Contact</a>
                </li>
                @guest
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            My Account
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('login')}}"><i class="mdi mdi-chevron-right" aria-hidden="true"></i> Login</a>
                            <a class="dropdown-item" href="{{route('register')}}"><i class="mdi mdi-chevron-right" aria-hidden="true"></i>  Register</a>
                            </div>
                    </li>
                @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Hello ! {{Auth::user()->first_name}} {{Auth::user()->last_name}}
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route('home')}}"><i class="mdi mdi-chevron-right" aria-hidden="true"></i>  My Profile</a>
                        <a class="dropdown-item" href="{{route('user.order.history')}}"><i class="mdi mdi-chevron-right" aria-hidden="true"></i> Order List</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="mdi mdi-chevron-right" aria-hidden="true"></i>
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest

            </ul>
        </div>
    </div>
</nav>

@yield('front')

<!-- Footer -->
<section class="section-padding footer bg-white border-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <h4 class="mb-5 mt-0"><a class="logo" href="index.html"><img src="{{asset($gn->logo)}}" alt="Groci"></a></h4>
                <p class="mb-0"><a class="text-dark" href="#"><i class="mdi mdi-phone"></i> +{{$gn->site_phone}}</a></p>
                <p class="mb-0"><a class="text-success" href="#"><i class="mdi mdi-email"></i> {{$gn->site_email}}</a></p>
                <p class="mb-0"><a class="text-primary" href="#"><i class="mdi mdi-web"></i> https://grocery.srtusher.com/</a></p>
            </div>
            <div class="col-lg-2 col-md-2">
                <h6 class="mb-4">CATEGORIES </h6>
                <?php
                    $cats_fot = \App\top_category::inRandomOrder()->limit(5)->get();
                ?>
                <ul>
                    @foreach($cats_fot as $catft)
                    <li><a href="{{route('category.product',['id'=>$catft->id,'name'=>$catft->top_cat_name])}}">{{$catft->top_cat_name}}</a></li>
                    @endforeach
                    <ul>
            </div>
            <div class="col-lg-2 col-md-2">
                <h6 class="mb-4">BRAND</h6>
                <?php
                $brads_fot = \App\brand::inRandomOrder()->limit(5)->get();
                ?>
                <ul>
                    @foreach($brads_fot as $brntft)
                        <li><a href="{{route('brand.product',['id'=>$brntft->id,'name'=>$brntft->brand_name])}}">{{$brntft->brand_name}}</a></li>
                    @endforeach
                    <ul>
            </div>
            <div class="col-lg-2 col-md-2">
                <h6 class="mb-4">USEFULL LINKS</h6>
                <ul>
                    <li><a href="{{route('front')}}">Home</a></li>
                    <li><a href="{{route('aboutus')}}">About Us</a></li>
                    <li><a href="{{route('pricacy.policy')}}">Privacy & Policy</a></li>
                    <li><a href="{{route('trems')}}">Terms & Conditions</a></li>
                    <li><a href="{{route('support.policy')}}">Support Policy</a></li>
                    <ul>
            </div>
            <div class="col-lg-3 col-md-3">
                <h6 class="mb-4">Download App</h6>
                <div class="app">
                    <a href="#"><img src="data:image/png;base64,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" alt=""></a>
                    <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Download_on_iTunes.svg/440px-Download_on_iTunes.svg.png" alt=""></a>
                </div>
                <h6 class="mb-3 mt-4">GET IN TOUCH</h6>
                <div class="footer-social">
                    <a class="btn-facebook" href="#"><i class="mdi mdi-facebook"></i></a>
                    <a class="btn-twitter" href="#"><i class="mdi mdi-twitter"></i></a>
                    <a class="btn-instagram" href="#"><i class="mdi mdi-instagram"></i></a>
                    <a class="btn-whatsapp" href="#"><i class="mdi mdi-whatsapp"></i></a>
                    <a class="btn-messenger" href="#"><i class="mdi mdi-facebook-messenger"></i></a>
                    <a class="btn-google" href="#"><i class="mdi mdi-google"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Footer -->
<!-- Copyright -->
<section class="pt-4 pb-4 footer-bottom">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-6 col-sm-6">
                <?php
                    $date = \Carbon\Carbon::now()->format('Y');
                ?>
                <p class="mt-1 mb-0">&copy; Copyright {{$date}} . All Rights Reserved<br>
                    <small class="mt-0 mb-0">Developed By <i class="mdi mdi-heart text-danger"></i> by <a href="http://srtusher.com/" target="_blank" class="text-primary">SR TUSHER</a>
                    </small>
                </p>
            </div>
            <div class="col-lg-6 col-sm-6 text-right">
                <img alt="osahan logo" src="https://i.ytimg.com/vi/i09C02151PI/maxresdefault.jpg" style="height: 41px;width: 100px;">
            </div>
        </div>
    </div>
</section>
<!-- End Copyright -->
<div class="cart-sidebar">
    <div class="cart-sidebar-header">
        <h5>
            My Cart <span class="text-success">({{$counts}} item)</span> <a data-toggle="offcanvas" class="float-right" href="#"><i class="mdi mdi-close"></i>
            </a>
        </h5>
    </div>
    <?php
    $carts = \Gloudemans\Shoppingcart\Facades\Cart::content();
    ?>
    <div class="cart-sidebar-body">
        @if (count($carts) > 0)
            @foreach($carts as $crt)
                <div class="cart-list-product">
                    <a class="float-right remove-cart" href="#"><i class="mdi mdi-close"></i></a>
                    <img class="img-fluid" src="{{$crt->options->image}}" alt="">
                    <h5><a href="#">{{$crt->name}}</a></h5>
                    <h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - 500 gm</h6>
                    <p class="offer-price mb-0">${{$crt->price}} <i class="mdi mdi-tag-outline"></i></p>
                </div>
            @endforeach
        @else
            <p>No Cart Product Available</p>
        @endif

    </div>
    <div class="cart-sidebar-footer">
        <div class="cart-store-details">
            <?php
            $sub = \Gloudemans\Shoppingcart\Facades\Cart::content()->sum('price');
            ?>
            <p>Sub Total <strong class="float-right">{{$sub}}</strong></p>
{{--            <p>Delivery Charges <strong class="float-right text-danger">+ $29.69</strong></p>--}}
            <h6>Your total <strong class="float-right text-danger">${{$sub}}</strong></h6>
        </div>
        @if (count($carts) > 0)

            <a href="{{route('user.checkout')}}"><button class="btn btn-secondary btn-lg btn-block text-left" type="button"><span class="float-left"><i class="mdi mdi-cart-outline"></i> Proceed to Checkout </span><span class="float-right"><strong>${{$sub}}</strong> <span class="mdi mdi-chevron-right"></span></span></button></a>
        @else
            <a><button class="btn btn-secondary btn-lg btn-block text-left" type="button"><span class="float-left"><i class="mdi mdi-cart-outline"></i> Proceed to Checkout </span><span class="float-right"><strong>${{$sub}}</strong> <span class="mdi mdi-chevron-right"></span></span></button></a>
        @endif
    </div>
</div>
<!-- Bootstrap core JavaScript -->
<script src="{{asset('assets/frontend/')}}/js/jquery.min.js"></script>
<script src="{{asset('assets/frontend/')}}/js/bootstrap.bundle.min.js"></script>
<!-- select2 Js -->
<script src="{{asset('assets/frontend/')}}/js/select2.min.js"></script>
<!-- Owl Carousel -->
<script src="{{asset('assets/frontend/')}}/js/owl.carousel.js"></script>
<!-- Custom -->
<script src="{{asset('assets/frontend/')}}/js/custom.js"></script>
@yield('js')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@include('layouts.message')
</body>
</html>

