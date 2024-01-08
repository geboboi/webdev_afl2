<div>
    <a href="{{ route('wishlist.index') }}" class="header-wishlist-btn">
        <span class="wishlist-icon"><i class="feather-heart" style="color: hsl(334, 63%, 33%);"></i></span>
        <span class="wishlist-counter" wire:poll.500ms="updateWishlistCounter">{{$wishlist_counter}}</span>
    </a>
</div>
