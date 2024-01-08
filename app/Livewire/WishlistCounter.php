<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Helper;
class WishlistCounter extends Component
{

    public $wishlist_counter;

    public function updateWishlistCounter()
    {
        // This method is triggered by the wire:poll directive
        // Update the wishlist counter value here
        $this->wishlist_counter = Helper::getWishlistCount();
    }

    public function mount(){
        $this->wishlist_counter = Wishlist::where('user_id', Auth::id())->count();
    }

    public function render()
    {
        return view('livewire.wishlist-counter');
    }
}
