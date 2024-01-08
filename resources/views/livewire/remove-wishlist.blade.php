<!-- wishlist-title start -->
<?php use Carbon\Carbon; ?>
@if (count(Helper::getAllProductFromWishlist()) > 0)
    <div class="wishlist-page">
        <div class="wishlist-grid is_visible">
            <div class="wish-wrap">
                @if (session('failed'))
                    <div class="alert alert-danger">
                        {{ session('failed') }}
                    </div>
                @elseif (session('success'))
                    <div class="alert alert-success ">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="wishlist-title">
                    <h6>My wishlist:</h6>
                    <span class="wish-count">
                        <span
                            class="wishlist-counter">{{ App\Models\Wishlist::where('user_id', Auth::id())->count() }}</span>
                        <span class="wish-item-title">Items</span>
                    </span>
                </div>
                @foreach (Helper::getAllProductFromWishlist() as $wishlists)
                    <ul wire:key='{{ $wishlists->id }}' class="wishlist-tile-container">
                        <li class="wishlist-info">
                            <div class="item-img">
                                <a href="product-template2.html">
                                    @php
                                        $product = App\Models\Product::find($wishlists->product_id);
                                    @endphp
                                    <img src="{{ asset('storage/' . $product->product_image) }}" class="img-fluid"
                                        alt="p-1">
                                </a>
                            </div>
                            <div class="item-title">
                                <a href="{{ route('product.show', $wishlists->product_id) }}">{{ $product->name }}</a>
                            </div>
                        </li>
                        <li class="item-add-remove">
                            <div class="item-add">
                                <a href="{{ route('cart.store', $wishlists->product_id) }}" class="add-to-cart">
                                    <span>
                                        <span class="cart-title">Add to cart</span>
                                    </span>
                                </a>
                            </div>

                            <div class="item-buy">
                                <a wire:click="deleteWishlist({{ $wishlists->id }})" wire:model="wishlistId"
                                    href="#">
                                    <span>Remove Item</span>
                                </a>
                            </div>
                            {{-- <div class="item-buy">
                            <a href="{{ route('wishlist.delete', $wishlists->id) }}">
                                <span>Remove Item</span>
                            </a>
                        </div> --}}
                        </li>
                        <li class="item-price">
                            @php $sekarang = Carbon::now(); @endphp
                            @if ($sekarang > $wishlists->start_date && $sekarang < $wishlists->end_date)
                                @php
                                    $newprice = $wishlists->price - ($product->price * $wishlists->percentage) / 100;
                                @endphp
                                <div class="price-box">
                                    <span class="new-price">
                                        {{ 'Rp ' . number_format($newprice, 0, ',', '.') }}</span>
                                    <span
                                        class="old-price">{{ 'Rp ' . number_format($wishlists->price, 0, ',', '.') }}</span>
                                </div>
                            @else
                                <div class="price-box">
                                    <span class="new-price">
                                        {{ 'Rp ' . number_format($wishlists->price, 0, ',', '.') }}</span>
                                </div>
                            @endif
                        </li>
                    </ul>
                @endforeach
                <div class="wishlist-buttons">
                    <a href="{{ route('product') }}" class="btn-style2">Continue shopping</a>
                    <a href="{{ route('wishlist.clear') }}" class="btn-style2">Clear wishlist</a>
                </div>
            @else
                <section class="customer-page section-ptb">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="wishlist-page">
                                    <div class="wishlist-grid-empty-list is_visible">
                                        <div class="empty-list-info">
                                            <div class="section-title">
                                                <h2>
                                                    <span>Wishlist</span>
                                                    <span>empty</span>
                                                </h2>
                                                <p>Sorry your wishlist has currently no more products,
                                                    click
                                                    on 'here' given below for continue browsing.</p>
                                                <p>Continue browsing
                                                    <a href="{{ route('product') }}">here.</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
@endif
