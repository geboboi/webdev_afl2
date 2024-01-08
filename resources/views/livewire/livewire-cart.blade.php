<?php use Carbon\Carbon; ?>

@if (count(Helper::getAllProductFromCart()) > 0)
    <section class="cart-page section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    @if (session('failed'))
                        <div class="alert alert-danger">
                            {{ session('failed') }}
                        </div>
                    @elseif (session('success'))
                        <div class="alert alert-success ">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="cart-page-wrap">

                        <div class="cart-wrap-info">
                            <div class="cart-item-wrap">
                                <div class="cart-title">
                                    <h6>My Cart:</h6>
                                    <span class="cart-count">
                                        <span class="cart-counter">{{ Helper::getCartCount() }}</span>
                                        <span>-</span>
                                        <span class="cart-item-title">Items</span>
                                    </span>
                                </div>
                                @php
                                    $sumsum = 0;
                                @endphp
                                @foreach (Helper::getAllProductFromCart() as $items)
                                    <div wire:key='{{ $items->id }}' class="item-wrap">
                                        <ul class="cart-wrap">
                                            <!-- cart-info start -->
                                            <li class="item-info">
                                                <!-- cart-img start -->
                                                @php
                                                    $product = App\Models\Product::find($items->product_id);
                                                @endphp
                                                <div class="item-img">
                                                    <a href="{{ route('product.show', $product->id) }}">
                                                        <img src="{{ asset('storage/' . $product->product_image) }}"
                                                            class="img-fluid" alt="p-1">
                                                    </a>
                                                </div>
                                                <!-- cart-img end -->
                                                <!-- cart-title start -->
                                                <div class="item-title">
                                                    <a
                                                        href="{{ route('product.show', $product->id) }}">{{ $product->name }}</a>
                                                    <span class="item-option">
                                                        <span
                                                            class="item-price">{{ 'Rp ' . number_format($product->price, 0, ',', '.') }}</span>
                                                    </span>
                                                </div>
                                                <!-- cart-title send -->
                                            </li>
                                            <!-- cart-info end -->
                                            <!-- cart-qty start -->
                                            <li class="item-qty">
                                                {{-- @livewire('livewire-cart') --}}
                                                <div>
                                                    <div class="product-quantity-action">
                                                        <div class="product-quantity">
                                                            <div class="cart-plus-minus">
                                                                <a href="#">
                                                                    <button class="dec qtybutton minus"
                                                                        wire:click='decrease({{ $items->id }})'><i
                                                                            class="feather-minus"></i></button>
                                                                </a>
                                                                <input type="text" name="quantity"
                                                                    value="{{ $items->quantity }}">
                                                                <input type="hidden" name="qty_id[]"
                                                                    value="{{ $items->id }}" disabled>
                                                                <a href="#">
                                                                    <button class="inc qtybutton plus"
                                                                        wire:click='increase({{ $items->id }})'><i
                                                                            class="feather-plus"></i></button></a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-remove">
                                                    <span class="remove-wrap">
                                                        <a wire:click="deleteCart({{ $items->id }})"
                                                            wire:model="cartId"
                                                            href="#"class="text-danger">Remove</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <!-- cart-qty end -->
                                            <!-- cart-price start -->
                                            <li class="item-price">

                                                    <span class="new-price">
                                                        {{ 'Rp ' . number_format($items->amount, 0, ',', '.') }}</span>
                                                    @php
                                                        $sumsum += $items->amount;
                                                    @endphp

                                            </li>
                                            <!-- cart-price end -->
                                        </ul>

                                    </div>
                                @endforeach
                                <div class="cart-buttons">
                                    <a href="{{ route('product') }}" class="btn-style2">Continue shopping</a>
                                    <a href="{{ route('cart.clear') }}" onclick="clearCart()" class="btn-style2">Clear
                                        cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="cart-info-wrap">
                            <div class="cart-total-wrap cart-info">
                                <div class="cart-total">
                                    <div class="total-amount">
                                        <h6 class="total-title">Total</h6>
                                        <span
                                            class="amount total-price">{{ 'Rp ' . number_format($sumsum, 0, ',', '.') }}</span>
                                    </div>
                                    <div class="proceed-to-discount">
                                        <input type="text" name="discount" placeholder="Discount code">
                                    </div>
                                    <div class="proceed-to-checkout">
                                        <a href="checkout-style1.html">Checkout</a>
                                    </div>
                                    <div class="cart-payment-icon">
                                        <a href="javascript:void(0)" class="payment-icon">
                                            <img src="img/payment/visa.svg" class="img-fluid" alt="visa">
                                            <img src="img/payment/master.svg" class="img-fluid" alt="master">
                                            <img src="img/payment/express.svg" class="img-fluid" alt="express">
                                            <img src="img/payment/paypal.svg" class="img-fluid" alt="paypal">
                                            <img src="img/payment/diners.svg" class="img-fluid" alt="diners">
                                            <img src="img/payment/discover.svg" class="img-fluid" alt="discover">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
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
                                        <span>Cart</span>
                                        <span>is empty</span>
                                    </h2>
                                    <p>Sorry your Cart currently no products,
                                        click
                                        on 'here' given below for continue browsing.</p>
                                    <p>Continue browsing
                                        <a href="{{ route('product') }}">here</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

@endif
