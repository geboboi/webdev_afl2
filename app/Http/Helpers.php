<?php

use App\Models\Wishlist;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

Class Helper
{
    public static function getAllProductFromWishlist($user_id = '')
    {
        if (Auth::check()) {
            if ($user_id == "") $user_id = auth()->user()->id;
            return DB::table('products')
            ->leftJoin('promos', 'products.promo_id', '=', 'promos.id')
            ->leftJoin('events', 'promos.event_id', '=', 'events.id')
            ->leftJoin('wishlists', 'wishlists.product_id', '=', 'products.id')
            ->select('promos.*', 'events.*', 'products.*', 'wishlists.*')
            ->where('user_id', $user_id)
            ->get();
        } else {
            return false;
        }
    }

    public static function getWishlistCount($user_id = ''){
        if (Auth::check()) {
            if ($user_id == "") $user_id = auth()->user()->id;
            return Wishlist::where('user_id', Auth::id())->count();
        } else {
            return false;
        }
    }

    public static function getAllProductFromCart($user_id = '')
    {
        if (Auth::check()) {
            if ($user_id == "") $user_id = auth()->user()->id;
            return DB::table('products')
            ->leftJoin('promos', 'products.promo_id', '=', 'promos.id')
            ->leftJoin('events', 'promos.event_id', '=', 'events.id')
            ->leftJoin('carts', 'carts.product_id', '=', 'products.id')
            ->select('promos.*', 'events.*', 'products.*', 'carts.*') // Add columns from the 'cart' table
            ->where('user_id', $user_id)
            ->get();
        } else {
            return false;
        }
    }

    public static function getCartCount($user_id = ''){
        if (Auth::check()) {
            if ($user_id == "") $user_id = auth()->user()->id;
            return Cart::where('user_id', $user_id)->sum('quantity');
        } else {
            return false;
        }
    }

    // public static function cartCount($user_id = '')
    // {

    //     if (Auth::check()) {
    //         if ($user_id == "") $user_id = auth()->user()->id;
    //         return Cart::where('user_id', $user_id)->sum('quantity');
    //     } else {
    //         return 0;
    //     }

}
