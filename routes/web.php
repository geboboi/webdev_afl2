<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\ShopController as AdminShopController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
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


Route::get('/cart', [CartController::class, 'index'])->name('cart.index')->middleware("auth:sanctum");
Route::get('/cart/add/{id}', [CartController::class, 'store'])->name('cart.store')->middleware("auth:sanctum");
Route::get('/cart/down/{id}', [CartController::class, 'decrease'])->name('cart.decrease')->middleware("auth:sanctum");
Route::get('/cart/delete/{id}', [CartController::class, 'destroyItem'])->name('cart.delete')->middleware("auth:sanctum");
Route::get('/cart/clear', [CartController::class, 'clearItem'])->name('cart.clear')->middleware("auth:sanctum");

Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index')->middleware("auth:sanctum");
Route::get('/wishlist/add/{id}', [WishlistController::class, 'addToWishlist'])->name('wishlist.store')->middleware("auth:sanctum");
Route::get('/wishlist/delete/{id}', [WishlistController::class, 'deleteWishlist'])->name('wishlist.delete')->middleware("auth:sanctum");
Route::get('/wishlist/clear', [WishlistController::class, 'clearItem'])->name('wishlist.clear')->middleware("auth:sanctum");


Route::get('/about', function () {
    return view('about', [
        'title' => 'About Us'
    ]);
})->middleware("auth:sanctum");


Route::get('/contact_us', [ShopController::class, 'index'])->middleware("auth:sanctum");

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login-action', [AuthController::class, 'loginAction'])->name('login.action');
Route::post('/register-action', [AuthController::class, 'registerAction'])->name('register.action');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(["auth:sanctum", "admin"])->as("admin.")->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('product', AdminProductController::class);
    Route::resource('event', AdminEventController::class);
    Route::resource('shop', AdminShopController::class);
});

