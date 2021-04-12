<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

Route::view('home', 'home')->middleware('auth');

Route::group(['middleware' => 'auth'], function ($router){
    Route::resource('category', CategoryController::class)->only(['create', 'edit']);
    Route::resource('product', ProductController::class)->only(['create', 'edit']);
});

Route::resource('category', CategoryController::class)->except(['create', 'edit']);
Route::resource('product', ProductController::class)->except(['create', 'edit']);
