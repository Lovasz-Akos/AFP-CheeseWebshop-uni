<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\UserController;
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

Route::get('/', [StaticController::class, 'welcome'])->name('welcome');
Route::get('/home', [StaticController::class, 'home'])->name('home');

Route::group(['middleware' => 'auth'], function ($router){
    Route::resource('category', CategoryController::class)->only(['create', 'edit']);
    Route::resource('product', ProductController::class)->only(['create', 'edit']);
    Route::resource('order', OrderController::class);
    Route::resource('user', UserController::class)->except('create', 'store');
    Route::get('profile', [UserController::class, 'profile'])->name('profile');
    Route::patch('/user/{user}/admin', [UserController::class, 'setAdmin'])->name('user.setAdmin');
});

Route::resource('category', CategoryController::class)->except(['create', 'edit']);
Route::resource('product', ProductController::class)->except(['create', 'edit']);
