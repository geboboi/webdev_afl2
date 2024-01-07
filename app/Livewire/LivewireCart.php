<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Helper;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LivewireCart extends Component
{
    public $cartId;
    public $products;

    public function deleteCart($cart_id)
    {
        $cart = Cart::findOrFail($cart_id);
        $cart->delete();
        session()->flash('success', 'Cart has been deleted successfully!');

    }

    public function decrease($cart_id)
    {

        $items = DB::table('products')
        ->leftJoin('promos', 'products.promo_id', '=', 'promos.id')
        ->leftJoin('events', 'promos.event_id', '=', 'events.id')
        ->leftJoin('carts', 'carts.product_id', '=', 'products.id')
        ->select('promos.*', 'events.*', 'products.*') // Add columns from the 'cart' table
        ->where('carts.id', $cart_id)
        ->where('user_id', Auth::id())
        ->first();

        $sekarang = Carbon::now();
        if ($sekarang > $items->start_date && $sekarang < $items->end_date){
            $newprice = $items->price - ($items->price * $items->percentage) / 100;
            $cart = Cart::findOrFail($cart_id);
            if ($cart->quantity > 1) {
                $cart->decrement('quantity');
                $cart->amount = $cart->quantity * $newprice;
                $cart->save();
            } else {
                session()->flash('failed', 'Minimum quantity is 1!');
            }
        } else {
            $cart = Cart::findOrFail($cart_id);
            if ($cart->quantity > 1) {
                $cart->decrement('quantity');
                $cart->amount = $cart->quantity * $cart->price;
                $cart->save();
            } else {
                session()->flash('failed', 'Minimum quantity is 1!');
            }
        }


    }

    public function increase($cart_id)
    {
        $items = DB::table('products')
        ->leftJoin('promos', 'products.promo_id', '=', 'promos.id')
        ->leftJoin('events', 'promos.event_id', '=', 'events.id')
        ->leftJoin('carts', 'carts.product_id', '=', 'products.id')
        ->select('promos.*', 'events.*', 'products.*') // Add columns from the 'cart' table
        ->where('carts.id', $cart_id)
        ->where('user_id', Auth::id())
        ->first();

        $sekarang = Carbon::now();
        if ($sekarang > $items->start_date && $sekarang < $items->end_date){
            $newprice = $items->price - ($items->price * $items->percentage) / 100;
            $cart = Cart::findOrFail($cart_id);
            $cart->increment('quantity');
            $cart->amount = $cart->quantity * $newprice;
            $cart->save();
        } else {
            $cart = Cart::findOrFail($cart_id);
            $cart->increment('quantity');
            $cart->amount = $cart->quantity * $cart->price;
            $cart->save();

        }
    }

    // public function mount(){
    //     $this->products =  DB::table('products')
    //     ->leftJoin('promos', 'products.promo_id', '=', 'promos.id')
    //     ->leftJoin('events', 'promos.event_id', '=', 'events.id')
    //     ->leftJoin('carts', 'cart.product_id', '=', 'products.id')
    //     ->select('promos.*', 'events.*', 'products.*', 'cart.*') // Add columns from the 'cart' table
    //     ->where('products.id', '=', $cart_id)
    //     ->first();

    // }

    public function render()
    {
        return view('livewire.livewire-cart');
    }


}
