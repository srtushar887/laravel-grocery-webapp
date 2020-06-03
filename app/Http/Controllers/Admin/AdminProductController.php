<?php

namespace App\Http\Controllers\Admin;

use App\brand;
use App\Http\Controllers\Controller;
use App\product;
use App\top_category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class AdminProductController extends Controller
{
    public function product()
    {
        $products = product::orderBy('id','desc')->get();
        return view('admin.product.productList',compact('products'));
    }

    public function product_create()
    {
        $top_cats = top_category::all();
        $brands = brand::all();
        return view('admin.product.productCreate',compact('top_cats','brands'));
    }

    public function product_save(Request $request)
    {

        $new_product = new product();
        if($request->hasFile('main_image')){
            $image = $request->file('main_image');
            $imageName = Str::random(5).uniqid().time().'.'.$image->getClientOriginalName('main_image');
            $directory = 'assets/admin/images/product/';
            $imgUrl  = $directory.$imageName;
            Image::make($image)->resize(550, 550)->save($imgUrl);
            $new_product->main_image = $imgUrl;
        }

        if($request->hasFile('image_one')){
            $image = $request->file('image_one');
            $imageName = Str::random(5).uniqid().time().'.'.$image->getClientOriginalName('image_one');
            $directory = 'assets/admin/images/product/';
            $imgUrl  = $directory.$imageName;
            Image::make($image)->resize(550, 550)->save($imgUrl);
            $new_product->image_one = $imgUrl;
        }

        if($request->hasFile('image_two')){
            $image = $request->file('image_two');
            $imageName = Str::random(5).uniqid().time().'.'.$image->getClientOriginalName('image_two');
            $directory = 'assets/admin/images/product/';
            $imgUrl  = $directory.$imageName;
            Image::make($image)->resize(550, 550)->save($imgUrl);
            $new_product->image_two = $imgUrl;
        }

        if($request->hasFile('image_three')){
            $image = $request->file('main_image');
            $imageName = Str::random(5).uniqid().time().'.'.$image->getClientOriginalName('image_three');
            $directory = 'assets/admin/images/product/';
            $imgUrl  = $directory.$imageName;
            Image::make($image)->resize(550, 550)->save($imgUrl);
            $new_product->image_three = $imgUrl;
        }

        if($request->hasFile('image_four')){
            $image = $request->file('image_four');
            $imageName = Str::random(5).uniqid().time().'.'.$image->getClientOriginalName('image_four');
            $directory = 'assets/admin/images/product/';
            $imgUrl  = $directory.$imageName;
            Image::make($image)->resize(550, 550)->save($imgUrl);
            $new_product->image_four = $imgUrl;
        }

        if($request->hasFile('image_five')){
            $image = $request->file('image_five');
            $imageName = Str::random(5).uniqid().time().'.'.$image->getClientOriginalName('image_five');
            $directory = 'assets/admin/images/product/';
            $imgUrl  = $directory.$imageName;
            Image::make($image)->resize(550, 550)->save($imgUrl);
            $new_product->image_five = $imgUrl;
        }


        $new_product->product_name = $request->product_name;
        $new_product->top_cat_id = $request->top_cat_id;
        $new_product->brand_id = $request->brand_id;
        $new_product->old_price = $request->old_price;
        $new_product->new_price = $request->new_price;
        $new_product->description = $request->description;
        $new_product->status = $request->status;
        $new_product->save();
        return back()->with('success','Product Successfully Created');


    }

    public function product_view($id)
    {
        $top_cats = top_category::all();
        $product = product::where('id',$id)->first();
        $brands = brand::all();

        return view('admin.product.productView',compact('top_cats','product','brands'));
    }

    public function product_update_save(Request $request)
    {
        $update_product = product::where('id',$request->product_edit_id)->first();

        if($request->hasFile('main_image')){
            @unlink($update_product->main_image);
            $image = $request->file('main_image');
            $imageName = Str::random(5).uniqid().time().'.'.$image->getClientOriginalName('main_image');
            $directory = 'assets/admin/images/product/';
            $imgUrl  = $directory.$imageName;
            Image::make($image)->resize(550, 550)->save($imgUrl);
            $update_product->main_image = $imgUrl;
        }

        if($request->hasFile('image_one')){
            @unlink($update_product->image_one);
            $image = $request->file('image_one');
            $imageName = Str::random(5).uniqid().time().'.'.$image->getClientOriginalName('image_one');
            $directory = 'assets/admin/images/product/';
            $imgUrl1  = $directory.$imageName;
            Image::make($image)->resize(550, 550)->save($imgUrl1);
            $update_product->image_one = $imgUrl1;
        }

        if($request->hasFile('image_two')){
            @unlink($update_product->image_two);
            $image = $request->file('image_two');
            $imageName = Str::random(5).uniqid().time().'.'.$image->getClientOriginalName('image_two');
            $directory = 'assets/admin/images/product/';
            $imgUrl2  = $directory.$imageName;
            Image::make($image)->resize(550, 550)->save($imgUrl2);
            $update_product->image_two = $imgUrl2;
        }

        if($request->hasFile('image_three')){
            @unlink($update_product->image_three);
            $image = $request->file('image_three');
            $imageName = Str::random(5).uniqid().time().'.'.$image->getClientOriginalName('image_three');
            $directory = 'assets/admin/images/product/';
            $imgUrl3  = $directory.$imageName;
            Image::make($image)->resize(550, 550)->save($imgUrl3);
            $update_product->image_three = $imgUrl3;
        }

        if($request->hasFile('image_four')){
            @unlink($update_product->image_four);
            $image = $request->file('image_four');
            $imageName = Str::random(5).uniqid().time().'.'.$image->getClientOriginalName('image_four');
            $directory = 'assets/admin/images/product/';
            $imgUrl4  = $directory.$imageName;
            Image::make($image)->resize(550, 550)->save($imgUrl4);
            $update_product->image_four = $imgUrl4;
        }

        if($request->hasFile('image_five')){
            @unlink($update_product->image_five);
            $image = $request->file('image_five');
            $imageName = Str::random(5).uniqid().time().'.'.$image->getClientOriginalName('image_five');
            $directory = 'assets/admin/images/product/';
            $imgUrl5  = $directory.$imageName;
            Image::make($image)->resize(550, 550)->save($imgUrl5);
            $update_product->image_five = $imgUrl5;
        }


        $update_product->product_name = $request->product_name;
        $update_product->top_cat_id = $request->top_cat_id;
        $update_product->brand_id = $request->brand_id;
        $update_product->old_price = $request->old_price;
        $update_product->new_price = $request->new_price;
        $update_product->description = $request->description;
        $update_product->status = $request->status;
        $update_product->save();
        return back()->with('success','Product Successfully Updated');
    }

    public function product_delete(Request $request)
    {
        $delete_product = product::where('id',$request->product_delete_id)->first();
        @unlink($delete_product->main_image);
        @unlink($delete_product->image_one);
        @unlink($delete_product->image_two);
        @unlink($delete_product->image_three);
        @unlink($delete_product->image_four);
        @unlink($delete_product->image_five);

        $delete_product->delete();

        return back()->with('success','Product Successfully Deleted');
    }
}
