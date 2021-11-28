<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\MenuController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\backend\FrontSettingController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', function () {
//     return view('welcome');
// });

//frontend

Route::get('/',[HomeController::class,'display'])->name('home');
Route::get('about-us', function () {
    return view('frontend.about-us');
})->name('about-us');
Route::get('contact-us', function () {
    return view('frontend.contact-us');
})->name('contact-us');
Route::get('service', function () {
    return view('frontend.service');
})->name('service');
Route::get('gallery', function () {
    return view('frontend.gallery');
})->name('gallery');

//backend

Route::get('login',[AdminController::class,'Login'])->name('login');

Route::get('admin/logout',[AdminController::class,'Logout'])->name('admin.logout');

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
Route::get('dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

//..........................Front Setting............................

Route::get('setting/view',[FrontSettingController::class,'settingIndex'])->name('setting.view');  
Route::get('setting',[FrontSettingController::class,'settingCreate'])->name('setting.create');
Route::post('setting/store',[FrontSettingController::class,'settingStore'])->name('setting.store');
Route::get('setting/edit/{id}',[FrontSettingController::class,'settingEdit'])->name('setting.edit');
Route::post('setting/update/{id}',[FrontSettingController::class,'settingUpdate'])->name('setting.update');

//..........................Menu.....................................   
Route::get('menu/view',[MenuController::class,'menuIndex'])->name('menu.view');  
Route::get('menu',[MenuController::class,'menuCreate'])->name('menu.create');
Route::post('menu/store',[MenuController::class,'menuStore'])->name('menu.store');
Route::get('menu/delete/{id}',[MenuController::class,'menuDel'])->name('menu.del');
Route::get('menu/edit/{id}',[MenuController::class,'editMenu'])->name('menu.edit');
Route::post('menu/store/{id}',[MenuController::class,'menuUpdate'])->name('menu.update');
});