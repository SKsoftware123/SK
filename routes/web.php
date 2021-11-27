<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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
//Forntend
Route::get('/',[HomeController::class,'display'])->name('front.display');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/menu',[MenuController::class,'displayMenu'])->name('menu');

Route::get('admin/logout',[AdminController::class,'Logout'])->name('admin.logout');

