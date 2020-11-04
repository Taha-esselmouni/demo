<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('home');
});

Auth::routes(['register'=>true]);


Route::resource('category',CategoryController::class)->middleware('auth');


Route::resource('product', ProductController::class)->middleware('auth');
// Route::resource('home',HomeController::class);
  Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
  Route::get('product/{product}', 'ProductsController@show')->name('produit');


