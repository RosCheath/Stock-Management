<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard',[App\Http\Controllers\DashboardController::class,'board'])->name('dashboard');

Route::get('/profile',[App\Http\Controllers\DashboardController::class,'profile'])->name('profile');
Route::get('/all/product',[App\Http\Controllers\DashboardController::class,'allproduct'])->name('allproduct');
Route::get('/create/new/product',[App\Http\Controllers\DashboardController::class,'newproduct'])->name('newproduct');

Route::get('/all/category',[App\Http\Controllers\DashboardController::class,'allcategory'])->name('allcategory');
Route::get('/create/new/category',[App\Http\Controllers\DashboardController::class,'newcategory'])->name('newcategory');
Route::get('/all/employee',[App\Http\Controllers\DashboardController::class,'allemployee'])->name('allemployee');
Route::get('/create/new/employee',[App\Http\Controllers\DashboardController::class,'newemployee'])->name('newemployee');