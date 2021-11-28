<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use APp\Models\FrontSetting;

class HomeController extends Controller
{
    public function display()
    {
        return view('frontend.index');
    }
}
