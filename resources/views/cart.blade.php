@extends('layouts.template')

@section('main_content')
    <section class="breadcrumb-area">
        <div class="container">
            <div class="col">
                <div class="row">
                    <div class="breadcrumb-index">
                        <!-- breadcrumb main-title start-->
                        <div class="breadcrumb-title">
                            <h2>Your Shopping Cart</h2>
                        </div>
                        <!-- breadcrumb main-title end-->
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item-link">
                                <a href="{{ route('landing') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item-link">
                                <span>Your Shopping Cart</span>
                            </li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    @if ($cart->isEmpty())
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
    @else
        <section class="cart-page section-ptb">
            <form method="post">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="cart-page-wrap">
                                <div class="cart-wrap-info">
                                    <div class="cart-item-wrap">
                                        <div class="cart-title">
                                            <h6>My cart:</h6>
                                            <span class="cart-count">
                                                <span class="cart-counter">3</span>
                                                <span class="cart-item-title">Item</span>
                                            </span>
                                        </div>
                                        <div class="item-wrap">
                                            <ul class="cart-wrap">
                                                <!-- cart-info start -->
                                                <li class="item-info">
                                                    <!-- cart-img start -->
                                                    <div class="item-img">
                                                        <a href="product-template.html">
                                                            <img src="img/product-list/p-1.jpg" class="img-fluid"
                                                                alt="p-1">
                                                        </a>
                                                    </div>
                                                    <!-- cart-img end -->
                                                    <!-- cart-title start -->
                                                    <div class="item-title">
                                                        <a href="product-template.html">Candy nut chocolate</a>
                                                        <span class="item-option">
                                                            <span class="pro-variant-title">Flavor:</span>
                                                            <span class="pro-variant-type">Sponge</span>
                                                        </span>
                                                        <span class="item-option">
                                                            <span class="item-price">€11,00</span>
                                                        </span>
                                                    </div>
                                                    <!-- cart-title send -->
                                                </li>
                                                <!-- cart-info end -->
                                                <!-- cart-qty start -->
                                                <li class="item-qty">
                                                    <div class="product-quantity-action">
                                                        <div class="product-quantity">
                                                            <div class="cart-plus-minus">
                                                                <button class="dec qtybutton minus"><i
                                                                        class="feather-minus"></i></button>
                                                                <input type="text" name="quantity" value="1">
                                                                <button class="inc qtybutton plus"><i
                                                                        class="feather-plus"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-remove">
                                                        <span class="remove-wrap">
                                                            <a href="javascript:void(0)" class="text-danger">Remove</a>
                                                        </span>
                                                    </div>
                                                </li>
                                                <!-- cart-qty end -->
                                                <!-- cart-price start -->
                                                <li class="item-price">
                                                    <span class="amount full-price">€11,00</span>
                                                </li>
                                                <!-- cart-price end -->
                                            </ul>

                                        </div>
                                        <div class="cart-buttons">
                                            <a href="collection.html" class="btn-style2">Continue shopping</a>
                                            <a href="cart-empty.html" class="btn-style2">Clear cart</a>
                                        </div>
                                    </div>
                                    <div class="special-notes">
                                        <label>Special instructions for seller</label>
                                        <textarea rows="10" name="note"></textarea>
                                    </div>
                                </div>
                                <div class="cart-info-wrap">
                                    <div class="cart-calculator cart-info">
                                        <h6>Shipping info</h6>
                                        <div class="culculate-shipping" id="shipping-calculator">
                                            <ul>
                                                <li class="field">
                                                    <label>Country</label>
                                                    <select>
                                                        <option>India</option>
                                                        <option>Afghanistan</option>
                                                        <option>Austria </option>
                                                        <option>Belgium</option>
                                                        <option>Bhutan</option>
                                                        <option>Canada</option>
                                                        <option>France</option>
                                                        <option>Germany</option>
                                                        <option>Maldives</option>
                                                        <option>Nepal</option>
                                                    </select>
                                                </li>
                                                <li class="field">
                                                    <label>State</label>
                                                    <select>
                                                        <option>Gujarat</option>
                                                        <option>Andaman and Nicobar Islands</option>
                                                        <option>Andhra Pradesh</option>
                                                        <option>Bihar</option>
                                                        <option>Chandigarh</option>
                                                        <option>Delhi</option>
                                                        <option>Haryana</option>
                                                        <option>Jammu and Kashmir</option>
                                                        <option>Karnataka</option>
                                                        <option>Ladakh</option>
                                                    </select>
                                                </li>
                                                <li class="field cpn-code">
                                                    <label>Postal/Zip Codes</label>
                                                    <input type="text" name="q" placeholder="Zip/Postal Code">
                                                </li>
                                            </ul>
                                            <div class="shipping-info">
                                                <a href="javascript:void(0)" class="get-rates">Calculate</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-total-wrap cart-info">
                                        <div class="cart-total">
                                            <div class="total-amount">
                                                <h6 class="total-title">Total</h6>
                                                <span class="amount total-price">€56.00</span>
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
                </div>
            </form>
        </section>
    @endif
@endsection
