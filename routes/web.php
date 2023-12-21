<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [ProductController::class, 'index'])->name('landing');

Route::get('/product', [ProductController::class, 'list'])->name('product');

Route::get('/product/{showproduct}', [ProductController::class, 'show'])->name('product.show')->middleware("auth:sanctum");

Route::get('/promo', [EventController::class, 'index']);

Route::get('/promo/{promo}', [EventController::class, 'show'])->name('promo.detail')->middleware("auth:sanctum");

Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist')->middleware("auth:sanctum");

Route::get('/about', function () {
    return view('about', [
        'title' => 'About Us'
    ]);
})->middleware("auth:sanctum");


Route::get('/contact_us', function () {
    return view('contact_us', [
        'title' => 'Contact Us'
    ]);
})->middleware("auth:sanctum");

// Route::get('/admin', function () {
//     return view('admin.dashboard');
// })->middleware('admin');

// Route::group([
//     'middleware' => 'admin',
//     'prefix' => 'admin',
//     'as' => 'admin.'
// ], function () {
//     Route::get('/', function () {
//         return view('admin.dashboard');
//     })->name('dashboard');
// });


// Auth::routes();
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login-action', [AuthController::class, 'loginAction'])->name('login.action');
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(["auth:sanctum", "admin"])->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});
