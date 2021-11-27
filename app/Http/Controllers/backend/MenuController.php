<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    
    public function menuIndex()
    {
        $data=Menu::all();
        return view('admin.menus.menu_view',compact('data'));
    }
    public function menuCreate()
    {
        return view('admin.menus.menu_create');
    }
    public function menuStore(Request $req)
    {
        $req->validate([
            'link' => 'required|unique:menus',
            'name' => 'required'
        ]);
        $data=new Menu;
        $data->name=$req->name;
        $data->status=$req->status;
        $data->link=$req->link;
        $data->save();
        $notification=array(
            'message'=>'Submitted Sucessfully',
            'alert-type'=>'success'
        );
        return redirect()->route('menu.view')->with($notification);
    }
    public function editMenu($id)
    {
        $data=Menu::find($id);
        return view('admin.menus.menu_edit',compact('data'));
    }
    public function menuDel($id)
    {
        $data=Menu::find($id)->delete();
        return redirect()->route('menu.view');
    }
     public function menuUpdate($id,Request $req)
    {
        $data=Menu::find($id);
        $data->name=$req->name;
        $data->status=$req->status;
        $data->link=$req->link;
        $data->save();
        $notification=array(
            'message'=>'Updated Sucessfully',
            'alert-type'=>'success'
        );
        return redirect()->route('menu.view')->with($notification);
    }    

}
