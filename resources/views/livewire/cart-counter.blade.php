<div class="shopping-cart">
    <a href="{{route('cart.index')}}" class="cart-count">
        <span class="cart-icon"><i class="feather-shopping-bag"
                style="color: hsl(334, 63%, 33%);"></i></span>
        <span class="cart-bigcounter" wire:poll.500ms="updateCartCounter">
            {{Helper::getCartCount()}}
        </span>
    </a>
</div>
