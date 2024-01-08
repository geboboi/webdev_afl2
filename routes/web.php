<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\PromoController as AdminPromoController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\ShopController as AdminShopController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\ShopController;

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

Route::get('/product/{showproduct}', [ProductController::class, 'show'])->name('product.show');

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

Route::get('/account/orders', [UserController::class, 'order'])->name('profile.orders')->middleware("auth:sanctum");
Route::get('/account/profile', [UserController::class, 'profile'])->name('profile')->middleware("auth:sanctum");

Route::get('/about', function () {
    return view('about', [
        'title' => 'About Us'
    ]);
});



Route::get('/contact_us', [ShopController::class, 'index']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login-action', [AuthController::class, 'loginAction'])->name('login.action');
Route::post('/register-action', [AuthController::class, 'registerAction'])->name('register.action');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/checkout', [CheckoutController::class, 'getDistrict'])->name('checkout.district')->middleware("auth:sanctum");
Route::post('/checkout/add', [CheckoutController::class, 'create'])->name('checkout.add')->middleware("auth:sanctum");

Route::prefix('admin')->middleware(["auth:sanctum", "admin"])->as("admin.")->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('product', AdminProductController::class);
    Route::resource('event', AdminEventController::class);
    Route::resource('promo', AdminPromoController::class);
    Route::resource('shop', AdminShopController::class);
});

Route::get('/payment/{order_id}', [OrderController::class, 'checkout'] )->name('payment')->middleware("auth:sanctum");
Route::get('/status/{order_id}', [OrderController::class, 'success'] )->name('success')->middleware("auth:sanctum");
Route::get('/tracking/{order_id}', [OrderController::class, 'track'] )->name('track')->middleware("auth:sanctum");
