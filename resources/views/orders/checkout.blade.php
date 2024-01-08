@extends('layouts.template')
@section('main_content')
    <!-- header end -->
    <!-- main section start-->
    <main>
        <!-- breadcrumb start -->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="col">
                    <div class="row">
                        <div class="breadcrumb-index">
                            <!-- breadcrumb main-title start-->
                            <div class="breadcrumb-title">
                                <h2>Checkout</h2>
                            </div>
                            <!-- breadcrumb main-title end-->
                            <!-- breadcrumb-list start -->
                            <ul class="breadcrumb-list">
                                <li class="breadcrumb-item-link">
                                    <a href="/">Home</a>
                                </li>
                                <li class="breadcrumb-item-link">
                                    <span>Checkout</span>
                                </li>
                            </ul>
                            <!-- breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb end -->
        <section class="section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="checkout-area">
                            <div class="billing-area">
                                <form action="{{ route('checkout.add') }}" method="POST">
                                    @csrf
                                                            <h2>Billing details</h2>
                                    <div class="billing-form">
                                        <ul class="billing-ul input-2">
                                            <li class="billing-li input">
                                                <label>First name</label>
                                                <input type="text" name="fname" placeholder="First name" required>
                                            </li>
                                            <li class="billing-li">
                                                <label>Last name</label>
                                                <input type="text" name="lname" placeholder="Last name" required>
                                            </li>
                                        </ul>

                                        <livewire:villager-component />

                                        <ul class="billing-ul">
                                            <li class="billing-li">
                                                <label>Street address</label>
                                                <input type="text" name="address1" placeholder="Street address" required>
                                            </li>
                                        </ul>
                                        <ul class="billing-ul">
                                            <li class="billing-li">
                                                <label>Apartment, suite, unit, etc. (Optional)</label>
                                                <input type="text" name="address2">
                                            </li>
                                        </ul>

                                        <ul class="billing-ul">
                                            <li class="billing-li">
                                                <label>Postcode / Zip</label>
                                                <input type="text" name="postcode" required>
                                            </li>
                                        </ul>
                                        <ul class="billing-ul input-2">
                                            <li class="billing-li">
                                                <label>Email address</label>
                                                <input type="text" name="email" placeholder="Email address" required>
                                            </li>
                                            <li class="billing-li">
                                                <label>Phone number</label>
                                                (ex: 081234567890)<input type="number" name="phone" placeholder="Phone number" required>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="billing-details">
                                        <h2>Shipping details</h2>
                                        <ul class="shipping-form pro-submit">
                                            <li class="comment-area">
                                                <label>Order notes for seller (Optional)</label>
                                                <textarea name="details" rows="5" cols="80"></textarea>
                                            </li>
                                        </ul>
                            </div>
                        </div>
                        <div class="order-area">
                            <div class="check-pro">
                                <h2>In your cart (2)</h2>
                                <ul class="check-ul">
                                    @foreach ($carts as $cart)
                                    @php
                                               $product = App\Models\Product::find($cart->product_id);
                                            @endphp
                                    <li>
                                        <div class="check-pro-img">
                                            <a href="product-template.html">
                                                <img src="{{ asset('storage/'. $product->product_image) }}" class="img-fluid" alt="p-1">
                                            </a>
                                        </div>
                                        <div class="check-content">

                                            <a href="">{{$product->name}}</a>
                                            <span class="check-code-blod">
                                            </span>
                                            <span class="check-qty">{{$cart->quantity}} X</span>
                                            <span class="check-price">{{ 'Rp ' . number_format($cart->price, 0, ',', '.') }}</span>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <h2>Your order</h2>
                            <ul class="order-history">
                                <li class="order-details">
                                    <span>Product:</span>
                                    <span>Total</span>
                                </li>
                                @php
                                    $sum = 0;
                                @endphp
                                @foreach ($carts as $cart)
                                    @php
                                               $product = App\Models\Product::find($cart->product_id);

                                            @endphp
                                <li class="order-details">
                                    <span>{{$product->name}}</span>
                                    <span>{{ 'Rp ' . number_format($cart->amount, 0, ',', '.') }}</span>
                                </li>
                                @php
                                    $sum += $cart->amount;
                                @endphp
                                @endforeach
                                <li class="order-details">
                                    <span>Subtotal</span>
                                    <span>{{ 'Rp ' . number_format($sum, 0, ',', '.') }}</span>
                                </li>
                                <li class="order-details">
                                    <span>Shipping Charge</span>
                                    <span>Free shipping</span>
                                </li>
                                <li class="order-details">
                                    <span>Total</span>
                                    <span>{{ 'Rp ' . number_format($sum, 0, ',', '.') }}</span>
                                    <input type="hidden" name="total" value="{{$sum}}">
                                </li>
                            </ul>
                            {{-- <form>
                                <ul class="order-form pro-submit">
                                    <li class="label-info">
                                        <label class="box-area">
                                            <span class="text">Direct bank transfer</span>
                                            <input type="checkbox" class="cust-checkbox">
                                            <span class="cust-check"></span>
                                        </label>
                                    </li>
                                    <li class="label-info">
                                        <label class="box-area">
                                            <span class="text">Cash on hand</span>
                                            <input type="checkbox" class="cust-checkbox">
                                            <span class="cust-check"></span>
                                        </label>
                                    </li>
                                    <li class="pay-icon">
                                        <a href="javascript:void(0)"><i class="fa-solid fa-credit-card"></i></a>
                                        <a href="javascript:void(0)"><i class="fa-brands fa-cc-visa"></i></a>
                                        <a href="javascript:void(0)"><i class="fa-brands fa-cc-paypal"></i></a>
                                        <a href="javascript:void(0)"><i class="fa-brands fa-cc-mastercard"></i></a>
                                    </li>
                                </ul>
                            </form> --}}
                            <div class="checkout-btn">

                                <button type="submit" class="btn-style checkout disabled">Place order
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </section>
    </main>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const placeOrderBtn = document.querySelector('.checkout-btn .btn-style.checkout');
            const requiredInputs = document.querySelectorAll(
                '.billing-form input[required], .shipping-form textarea[required]');

            function checkFormInputs() {
                let isFormFilled = true;
                requiredInputs.forEach(input => {
                    if (input.value.trim() === '') {
                        isFormFilled = false;
                    }
                });

                if (isFormFilled) {
                    placeOrderBtn.classList.remove('disabled');
                } else {
                    placeOrderBtn.classList.add('disabled');
                }
            }

            requiredInputs.forEach(input => {
                input.addEventListener('input', checkFormInputs);
            });
        });
    </script>
@endsection
