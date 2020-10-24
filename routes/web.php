<?php

use App\Http\Controllers\CategoryController;
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
    return view('welcome');
});

Auth::routes();

// Route::get('/category/create',[CategoryController::class,'create']);
Route::resource('category',CategoryController::class);
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('product', ProductController::class);
// Route::get('product/create', [App\Http\Controllers\ProductController::class, 'Create'])->name('');
 //Route::Post('product/store', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');

