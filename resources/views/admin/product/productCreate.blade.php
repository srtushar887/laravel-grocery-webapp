@extends('layouts.admin')
@section('admin')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Create Product</h4>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-lg-12">

            <div class="card-box">

                <form class="parsley-examples" action="{{route('admin.save.product')}}" method="post" enctype="multipart/form-data" novalidate="">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="userName">Product Name<span class="text-danger">*</span></label>
                            <input type="text" name="product_name" parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="userName">Category<span class="text-danger">*</span></label>
                            <select class="form-control" name="top_cat_id">
                                <option value="0">select any</option>
                                @foreach($top_cats as $tcat)
                                    <option value="{{$tcat->id}}">{{$tcat->top_cat_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="userName">Brand (if have)<span class="text-danger"></span></label>
                            <select class="form-control"  name="brand_id">
                                <option value="0">select any</option>
                                @foreach($brands as $brand)
                                    <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="userName">Old Price (if have)<span class="text-danger"></span></label>
                            <input type="text" name="old_price" parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="userName">Current price<span class="text-danger">*</span></label>
                            <input type="text" name="new_price" parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="userName">Product Main Image<span class="text-danger">*</span></label>
                            <input type="file" name="main_image" parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="userName">Product Image 1<span class="text-danger">*</span></label>
                            <input type="file" name="image_one" parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="userName">Product Image 2<span class="text-danger">*</span></label>
                            <input type="file" name="image_two" parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="userName">Product Image 3<span class="text-danger">*</span></label>
                            <input type="file" name="image_three" parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="userName">Product Image 4<span class="text-danger">*</span></label>
                            <input type="file" name="image_four" parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="userName">Product Image 5<span class="text-danger">*</span></label>
                            <input type="file" name="image_five" parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="userName">Product Description<span class="text-danger">*</span></label>
                            <textarea type="text" name="description" parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName"></textarea>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="userName">Product Status<span class="text-danger">*</span></label>
                            <select class="form-control" name="status">
                                <option value="0">select any</option>
                                <option value="1">Publish</option>
                                <option value="2">Un-Publish</option>
                            </select>
                        </div>


                    </div>

                    <div class="form-group text-left mb-0">
                        <button class="btn btn-gradient waves-effect waves-light" type="submit">
                            Save product
                        </button>
                    </div>

                </form>
            </div> <!-- end card-box -->
        </div>
        <!-- end col -->

    </div>

@stop
