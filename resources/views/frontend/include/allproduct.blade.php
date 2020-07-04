@foreach($products as $pro)
<div class="col-md-4 pmb-3">
    <div class="product">
        <a href="{{route('product.view',$pro->id)}}">
            <div class="product-header">
                @if (!empty($pro->main_image))

                    <img class="img-fluid" src="{{asset($pro->main_image)}}" alt="">
                @else
                    <img class="img-fluid" src="https://www.chanchao.com.tw/images/default.jpg" alt="">
                @endif
            </div>
            <div class="product-body">
                <h5>{{$pro->product_name}}</h5>
                <h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - 500 gm</h6>
            </div>
            <div class="product-footer">
                <p class="offer-price mb-0">$450.99 <i class="mdi mdi-tag-outline"></i> <span class="regular-price">$800.99</span></p>
                <a href="{{route('add.to.cart.single',$pro->id)}}">

                    <button type="button" class="btn btn-secondary btn-sm"><i class="mdi mdi-cart-outline"></i> Add To Cart</button>
                </a>            </div>
        </a>
    </div>
</div>
@endforeach

<div class="col-md-12" >
    {{$products->links()}}
</div>
