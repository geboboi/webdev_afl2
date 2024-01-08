<?php

namespace App\Livewire;

use Livewire\Component;
use Cart;

class ProductsTable extends Component
{
    public function render()
    {
        $cartItems = Cart::instance('cart')->content();

        return view('livewire.products-table', compact('cartItems'));
    }
}
