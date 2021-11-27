<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function Login()
    {
        return view('auth.login');
    }
    public function Logout()
    {
        Session::flush();  
        Auth::logout();
        return redirect('login');
    }
}
