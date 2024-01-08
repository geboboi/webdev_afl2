<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Wishlist;
use App\Http\Requests\StoreWishlistRequest;
use App\Http\Requests\UpdateWishlistRequest;
use Cart;
use Illuminate\Http\Request;
use App\Models\Product;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wishlist = Wishlist::where('user_id', Auth::id())->get();
        return view('wishlist', [
            'title' => "Wishlist",
            'wishlist' => $wishlist
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addToWishlist($productId)
    {
        if(Auth::check()){
            if(Wishlist::where('user_id', Auth::id())->where('product_id', $productId)->exists()){
                return redirect()->route('wishlist.index')->with('failed', 'Product already in Wishlist');
            }else{
                $product = Product::find($productId);
                Wishlist::create([
                    'user_id' => Auth::id(),
                    'product_id' => $productId,
                    'price' => $product->price,

                ]);
                return redirect()->route('wishlist.index')->with('success', 'Product Successfully Added in Wishlist');
            }
         }
    }

    // public function deleteWishlist($wishlistId)
    // {
    //     Wishlist::where('user_id', Auth::id())->where('id', $wishlistId)->delete();

    //     return redirect()->route('wishlist.index')->with('success', 'Product Successfully deleted in Wishlist');

    // }

    public function clearItem()
    {
        Wishlist::where('user_id', Auth::id())->delete();
        return redirect()->route('wishlist.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Wishlist $wishlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wishlist $wishlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWishlistRequest $request, Wishlist $wishlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wishlist $wishlist)
    {
        //
    }
}
