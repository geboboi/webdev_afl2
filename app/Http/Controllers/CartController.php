<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CartController extends Controller
{
    /**
     * Display a listing of the resource to cart view.
     */
    public function index(Product $showproduct)
    {

        $carts = Cart::where('user_id', Auth::id())->get();
        return view('cart', [
            'title' => "Cart",
            'carts' => $carts,
        ]);
    }

    // public function list()
    // {
    //     $miniCartItems = Cart::instance('cart')->content();
    //     return view('layouts/header', [
    //         'title' => "Cart",
    //         'miniCartItems' => $miniCartItems
    //     ]);
    // }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($productId)

    {
        $items = DB::table('products')
            ->leftJoin('promos', 'products.promo_id', '=', 'promos.id')
            ->leftJoin('events', 'promos.event_id', '=', 'events.id')
            ->select('promos.*', 'events.*', 'products.*') // Add columns from the 'cart' table
            ->where('products.id', $productId)
            ->first();

        $sekarang = Carbon::now();
        if ($sekarang > $items->start_date && $sekarang < $items->end_date) {
            $newprice = $items->price - ($items->price * $items->percentage) / 100;

            if (Auth::check()) {
                $cartId = Cart::where('user_id', Auth::id())->where('product_id', $productId)->first();
                $product = Product::find($productId);
                if ($cartId) {
                    $plus = $cartId->quantity;
                    $cartId->update([
                        'quantity' => $plus + 1
                    ]);
                    $cartId->save();
                    return redirect()->route('cart.index')->with('success', 'Product already Exist, added new product');
                } else {
                    Cart::create([
                        'user_id' => Auth::id(),
                        'product_id' => $productId,
                        'price' => $newprice,
                        'quantity' => 1,
                        'amount' => $newprice
                    ]);
                    return redirect()->route('cart.index')->with('success', 'Product Successfully Added in Cart');
                }
            }
        } else {
            if (Auth::check()) {
                $cartId = Cart::where('user_id', Auth::id())->where('product_id', $productId)->first();
                $product = Product::find($productId);
                if ($cartId) {
                    $plus = $cartId->quantity;
                    $cartId->update([
                        'quantity' => $plus + 1
                    ]);
                    $cartId->save();
                    return redirect()->route('cart.index')->with('success', 'Product already Exist, added new product');
                } else {
                    Cart::create([
                        'user_id' => Auth::id(),
                        'product_id' => $productId,
                        'price' => $product->price,
                        'quantity' => 1,
                        'amount' => $product->price
                    ]);
                    return redirect()->route('cart.index')->with('success', 'Product Successfully Added in Cart');
                }
            }
        }
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroyItem($cartId)
    {
        Cart::where('user_id', Auth::id())->where('id', $cartId)->delete();
        return redirect()->route('cart.index')->with('success', 'Product Successfully deleted in Cart');
    }

    public function clearItem(Cart $cart)
    {
        Cart::where('user_id', Auth::id())->delete();
        return redirect()->route('cart.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }
}
