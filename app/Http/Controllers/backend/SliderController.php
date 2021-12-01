<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Exception;

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
        
        $req->validate([
            'image'=>'max:500|mimes:png,jpeg,gif,jpg'
        ]);
        
       try{
        $brand_image=$req->file('image');
        $last_img="";
        if($brand_image !='')
        {
        $name_gen=hexdec(uniqid());
        $img_ext=strtolower($brand_image->getClientOriginalExtension());
        $img_name=$name_gen.'.'.$img_ext;
        $location='image/slider/';
        $last_img=$location.$img_name;
        $brand_image->move($location,$img_name);
        }

        $data=new Slider;
        $data->title=$req->title;
        $data->subtitle=$req->subtitle;
        $data->image=$last_img;
        $data->save();
       }
       catch(Exception $e){
           $e->getMessage();
       }
       
        // $data->save();
        $notification=array(
            'message'=>'Updated Sucessfully',
            'alert-type'=>'success'
        );
        return redirect()->route('slider.create')->with($notification);

    }
}
