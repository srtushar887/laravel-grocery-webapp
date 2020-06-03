<?php

namespace App\Http\Controllers\Admin;

use App\brand;
use App\Http\Controllers\Controller;
use App\top_category;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AdminCategoryController extends Controller
{
    public function top_category()
    {
        $top_cats = top_category::orderBy('id','desc')->get();
        return view('admin.category.topCategory',compact('top_cats'));
    }

    public function top_category_save(Request $request)
    {
        $new_top_cat = new top_category();
        if($request->hasFile('top_cat_image')){
            $image = $request->file('top_cat_image');
            $imageName = uniqid().time().'.'.$image->getClientOriginalName('top_cat_image');
            $directory = 'assets/admin/images/category/';
            $imgUrl  = $directory.$imageName;
            Image::make($image)->resize(120,120)->save($imgUrl);
            $new_top_cat->top_cat_image = $imgUrl;
        }

        $new_top_cat->top_cat_name = $request->top_cat_name;
        $new_top_cat->save();

        return back()->with('success','Top Category Created Succssfully');

    }

    public function top_category_update(Request $request)
    {
        $update_top_cat = top_category::where('id',$request->top_cat_edit_id)->first();
        if($request->hasFile('top_cat_image')){
            @unlink($update_top_cat->top_cat_image);
            $image = $request->file('top_cat_image');
            $imageName = uniqid().time().'.'.$image->getClientOriginalName('top_cat_image');
            $directory = 'assets/admin/images/category/';
            $imgUrl  = $directory.$imageName;
            Image::make($image)->resize(120,120)->save($imgUrl);
            $update_top_cat->top_cat_image = $imgUrl;
        }

        $update_top_cat->top_cat_name = $request->top_cat_name;
        $update_top_cat->save();

        return back()->with('success','Top Category Updated Succssfully');
    }

    public function top_category_delete(Request $request)
    {
        $delete_top_cat = top_category::where('id',$request->top_cat_delete_id)->first();
        @unlink($delete_top_cat->top_cat_image);
        $delete_top_cat->delete();
        return back()->with('success','Top Category Deleted Succssfully');
    }




    public function product_brand()
    {
        $brands = brand::all();
        return view('admin.category.brand',compact('brands'));
    }

    public function product_brand_save(Request $request)
    {
        $new_brand = new brand();
        $new_brand->brand_name = $request->brand_name;
        $new_brand->save();
        return back()->with('success','Product Brand Successfully Created');
    }

    public function product_brand_update(Request $request)
    {
        $brand_update = brand::where('id',$request->brand_edit_id)->first();
        $brand_update->brand_name = $request->brand_name;
        $brand_update->save();
        return back()->with('success','Product Brand Successfully Updated');
    }

    public function product_brand_delete(Request $request)
    {
        $delete_brand = brand::where('id',$request->brand_delete_id)->first();
        $delete_brand->delete();
        return back()->with('success','Product Brand Successfully Deleted');
    }
}
