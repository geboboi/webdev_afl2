<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Helper;


class RemoveWishlist extends Component
{

    public $wishlist;
    public $wishlistData;


    // public function mount(){
    //     $this->wishlistData = Helper::getAllProductFromWishlist();
    // }

    public function deleteWishlist($wishlistId)
    {
        $wishlist = Wishlist::findOrFail($wishlistId);
        $wishlist->delete();
        session()->flash('success', 'Cart has been deleted successfully!');

    }

    public function render()
    {
        return view('livewire.remove-wishlist');
    }

}

// class Cart extends Component
// {
//     public function render()
//     {
//         return view('livewire.user.cart');
//     }

//     public function removeCart($cart_id)
//     {
//         $cart = \App\Models\Cart::findOrFail($cart_id);
//         $cart->delete();
//         session()->flash('success', 'Cart has been deleted successfully!');
//     }

//     public function decrement($cart_id)
//     {
//         $cart = \App\Models\Cart::findOrFail($cart_id);
//         if ($cart->quantity > 1) {
//             $cart->decrement('quantity');
//             $cart->amount = $cart->quantity * $cart->price;
//             $cart->save();
//         } else {
//             session()->flash('error', 'Minimum quantity is 1!');
//         }
//     }

//     public function increment($cart_id)
//     {
//         $cart = \App\Models\Cart::findOrFail($cart_id);
//         if ($cart->product->stock > $cart->quantity) {
//             $cart->increment('quantity');
//             $cart->amount = $cart->quantity * $cart->price;
//             $cart->save();
//         } else {
//             //session()->flash('error', 'Stock limit over!');
//         }
//     }
// }
