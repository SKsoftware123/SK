<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\MenuController;
use App\Http\Controllers\frontend\HomeController;

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
Route::get('/',[HomeController::class,'display']);

//backend

Route::get('login',[AdminController::class,'Login'])->name('login');

Route::get('admin/logout',[AdminController::class,'Logout'])->name('admin.logout');
// .................Menu......................
// Route::middleware(['auth:sanctum', 'verified'])->get('menu',[MenuController::class,'menuCreate'])->name('menu.create');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('admin.index');
// })->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->group(function(){
Route::get('dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
// ..........................Menu.....................................   
Route::get('menu/view',[MenuController::class,'menuIndex'])->name('menu.view');  
Route::get('menu',[MenuController::class,'menuCreate'])->name('menu.create');
Route::post('menu/store',[MenuController::class,'menuStore'])->name('menu.store');
Route::get('menu/delete/{id}',[MenuController::class,'menuDel'])->name('menu.del');
Route::get('menu/edit/{id}',[MenuController::class,'editMenu'])->name('menu.edit');
Route::post('menu/store/{id}',[MenuController::class,'menuUpdate'])->name('menu.update');
});