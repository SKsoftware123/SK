<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\FrontSetting;
use Illuminate\Http\Request;

class FrontSettingController extends Controller
{
     public function settingIndex()
    {   
        $data=FrontSetting::all();
        return view('admin.front_setting.setting_view',compact('data'));
    }
    public function settingCreate()
    {  
        return view('admin.front_setting.setting_create');
    }
     public function settingStore(Request $req)
    {
        $data=new FrontSetting;
        $data->address=$req->address;
        $data->phone=$req->phone;
        $data->email=$req->email;
        $data->facebook=$req->facebook;
        $data->instagram=$req->instagram;
        $data->gmail=$req->gmail;
        $data->save();
        $notification=array(
            'message'=>'Submitted Sucessfully',
            'alert-type'=>'success'
        );
        return redirect()->route('setting.view')->with($notification);
    }
    public function settingEdit($id)
    {
        $data=FrontSetting::find($id);
        return view('admin.front_setting.setting_edit',compact('data'));
    }
     public function settingUpdate(Request $req,$id)
    {
        $data=FrontSetting::find($id);
        $data->address=$req->address;
        $data->phone=$req->phone;
        $data->email=$req->email;
        $data->facebook=$req->facebook;
        $data->instagram=$req->instagram;
        $data->gmail=$req->gmail;
        $data->save();
        $notification=array(
            'message'=>'Updated Sucessfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
}
