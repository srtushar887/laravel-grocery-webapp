<?php

namespace App\Http\Controllers\Admin;

use App\contact_us;
use App\home_slider;
use App\Http\Controllers\Controller;
use App\static_data;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AdminFrontendController extends Controller
{
    public function home_slider()
    {
        $sliders = home_slider::all();
        return view('admin.frontend.slider',compact('sliders'));
    }

    public function home_slider_save(Request $request)
    {
        $slider = new home_slider();
        if($request->hasFile('slider_image')){
            $image = $request->file('slider_image');
            $imageName = uniqid().time().'.'.$image->getClientOriginalName('slider_image');
            $directory = 'assets/admin/images/slider/';
            $imgUrl  = $directory.$imageName;
            Image::make($image)->resize(1279,300)->save($imgUrl);
            $slider->slider_image = $imgUrl;
        }
        $slider->save();

        return back()->with('success','Slider Created');

    }


    public function home_slider_update(Request $request)
    {
        $slider_update = home_slider::where('id',$request->slider_edit_id)->first();
        if($request->hasFile('slider_image')){
            @unlink($slider_update->slider_image);
            $image = $request->file('slider_image');
            $imageName = uniqid().time().'.'.$image->getClientOriginalName('slider_image');
            $directory = 'assets/admin/images/slider/';
            $imgUrl  = $directory.$imageName;
            Image::make($image)->resize(1279,300)->save($imgUrl);
            $slider_update->slider_image = $imgUrl;
        }

        $slider_update->save();

        return back()->with('success','Slider Updated');

    }

    public function home_slider_delete(Request $request)
    {
        $slider_delete = home_slider::where('id',$request->slider_delete_id)->first();
        @unlink($slider_delete->slider_image);
        $slider_delete->delete();
        return back()->with('success','Slider Deleted');
    }

    public function static_data()
    {
        $static_data = static_data::first();
        return view('admin.frontend.staticData',compact('static_data'));
    }

    public function static_data_update(Request $request)
    {
        $static = static_data::first();
        $static->about_us = $request->about_us;
        $static->support = $request->support;
        $static->privacy = $request->privacy;
        $static->team = $request->team;
        $static->home_footer = $request->home_footer;
        $static->save();

        return back()->with('success','Static Data Updated');

    }

    public function contact_us_messages()
    {
        $contacts = contact_us::all();
        return view('admin.frontend.contactUsMessage',compact('contacts'));
    }




}
