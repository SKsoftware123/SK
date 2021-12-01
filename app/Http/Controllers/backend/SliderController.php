<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    public function sliderIndex()
    {
        return view('admin.sliders.slider_view');
    }
    public function sliderCreate()
    {
        return view('admin.sliders.slider_create');
    }
    public function sliderStore(Request $req)
    {
        // $req->validate([
        //     'image'=>'mimes:png,jpeg,gif,jpg'
        // ]);
        $brand_image=$req->file('image');
        print_r($brand_image);die;

        // $data=new Slider;
        // $data->title=$req->title;
        // $data->subtitle=$req->subtitle;
       
        // $data->save();
        $notification=array(
            'message'=>'Updated Sucessfully',
            'alert-type'=>'success'
        );
        return redirect()->route('slider.create')->with($notification);

    }
}
