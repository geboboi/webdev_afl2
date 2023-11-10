<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PromoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ProductController::class, 'index']);

Route::get('/product', [ProductController::class, 'list']);

Route::get('/product/{showproduct}', [ProductController::class, 'show']);

Route::get('/promo', [PromoController::class, 'index']);

Route::get('/about', function(){
    return view('about', [
        'title' => 'About Us'
    ]);
});

Route::get('/contact_us', function(){
    return view('contact_us', [
        'title' => 'Contact Us'
    ]);
});
