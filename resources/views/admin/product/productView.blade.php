@extends('layouts.admin')
@section('admin')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Product Update</h4>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-lg-12">

            <div class="card-box">

                <form class="parsley-examples" action="{{route('admin.update.product')}}" method="post" enctype="multipart/form-data" novalidate="">
                    @csrf
                    <div class="row">

                        <div class="form-group col-md-12">
                            <label for="userName">Product Name<span class="text-danger">*</span></label>
                            <input type="text" name="product_name" value="{{$product->product_name}}" parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName">
                            <input type="hidden" name="product_edit_id" value="{{$product->id}}" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="userName">Category<span class="text-danger">*</span></label>
                            <select class="form-control" name="top_cat_id">
                                <option value="0">select any</option>
                                @foreach($top_cats as $tcat)
                                    <option value="{{$tcat->id}}" {{$product->top_cat_id == $tcat->id ? 'selected' : ''}}>{{$tcat->top_cat_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="userName">Brand (if have)<span class="text-danger"></span></label>
                            <select class="form-control"  name="brand_id">
                                <option value="0">select any</option>
                                @foreach($brands as $brand)
                                    <option value="{{$brand->id}}" {{$product->brand_id == $brand->id ? 'selected' : ''}}>{{$brand->brand_name}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group col-md-6">
                            <label for="userName">Old Price (if have)<span class="text-danger"></span></label>
                            <input type="text" name="old_price" value="{{$product->old_price}}" parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="userName">Current price<span class="text-danger">*</span></label>
                            <input type="text" name="new_price" value="{{$product->new_price}}" parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="userName">Product Main Image<span class="text-danger">*</span></label>
                            <br>
                            @if (!empty($product->main_image))
                                <img src="{{asset($product->main_image)}}" style="height: 100px;width: 100px;">
                            @else
                                <img src="https://www.chanchao.com.tw/images/default.jpg" style="height: 100px;width: 100px;">
                            @endif
                            <input type="file" name="main_image" parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="userName">Product Image 1<span class="text-danger">*</span></label>
                            <br>
                            @if (!empty($product->image_one))
                                <img src="{{asset($product->image_one)}}" style="height: 100px;width: 100px;">
                            @else
                                <img src="https://www.chanchao.com.tw/images/default.jpg" style="height: 100px;width: 100px;">
                            @endif
                            <input type="file" name="image_one" parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="userName">Product Image 2<span class="text-danger">*</span></label>
                            <br>
                            @if (!empty($product->image_two))
                                <img src="{{asset($product->image_two)}}" style="height: 100px;width: 100px;">
                            @else
                                <img src="https://www.chanchao.com.tw/images/default.jpg" style="height: 100px;width: 100px;">
                            @endif
                            <input type="file" name="image_two" parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="userName">Product Image 3<span class="text-danger">*</span></label>
                            <br>
                            @if (!empty($product->image_three))
                                <img src="{{asset($product->image_three)}}" style="height: 100px;width: 100px;">
                            @else
                                <img src="https://www.chanchao.com.tw/images/default.jpg" style="height: 100px;width: 100px;">
                            @endif
                            <input type="file" name="image_three" parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="userName">Product Image 4<span class="text-danger">*</span></label>
                            <br>
                            @if (!empty($product->image_four))
                                <img src="{{asset($product->image_four)}}" style="height: 100px;width: 100px;">
                            @else
                                <img src="https://www.chanchao.com.tw/images/default.jpg" style="height: 100px;width: 100px;">
                            @endif
                            <input type="file" name="image_four" parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="userName">Product Image 5<span class="text-danger">*</span></label>
                            <br>
                            @if (!empty($product->image_five))
                                <img src="{{asset($product->image_five)}}" style="height: 100px;width: 100px;">
                            @else
                                <img src="https://www.chanchao.com.tw/images/default.jpg" style="height: 100px;width: 100px;">
                            @endif
                            <input type="file" name="image_five" parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="userName">Product Description<span class="text-danger">*</span></label>
                            <textarea type="text" name="description" parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName">{!! $product->description !!}</textarea>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="userName">Product Status<span class="text-danger">*</span></label>
                            <select class="form-control" name="status">
                                <option value="0">select any</option>
                                <option value="1" {{$product->status == 1 ? 'selected' : ''}}>Publish</option>
                                <option value="2" {{$product->status == 2 ? 'selected' : ''}}>Un-Publish</option>
                            </select>
                        </div>





                    </div>

                    <div class="form-group text-left mb-0">
                        <button class="btn btn-gradient waves-effect waves-light" type="submit">
                            Update product
                        </button>
                    </div>

                </form>
            </div> <!-- end card-box -->
        </div>
        <!-- end col -->

    </div>

@stop
@section('js')

@stop
