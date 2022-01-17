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
Route::group(['web'],function()
{
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/home/dashboard', [App\Http\Controllers\HomeController::class, 'home_dashboard'])->name('home_dashboard');
    Route::get('/calender', [App\Http\Controllers\DashboardController::class, 'calender'])->name('calender');

    Route::resource('products', App\Http\Controllers\ProductController::class);
    Route::resource('category', App\Http\Controllers\CategoryController::class);
    Route::resource('history', App\Http\Controllers\HistoryController::class);
    Route::resource('stock', App\Http\Controllers\StockController::class);

});

