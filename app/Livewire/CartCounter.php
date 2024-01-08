<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Helper;

class CartCounter extends Component
{
    public $cart_counter;

    public function updateCartCounter()
    {
        // This method is triggered by the wire:poll directive
        // Update the wishlist counter value here
        $this->cart_counter = Helper::getCartCount();
    }

    public function mount(){
        $this->cart_counter = Cart::where('user_id', Auth::id())->count();
    }
    public function render()
    {

        return view('livewire.cart-counter');
    }
}
