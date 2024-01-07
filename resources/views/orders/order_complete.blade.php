@extends('layouts.template');

@section('main_content')
<main>
    <!-- breadcrumb start -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="col">
                <div class="row">
                    <div class="breadcrumb-index">
                        <!-- breadcrumb main-title start-->
                        <div class="breadcrumb-title">
                            <h2>Order complete</h2>
                        </div>
                        <!-- breadcrumb main-title end-->
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item-link">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item-link">
                                <span>{{$title}}</span>
                            </li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- order-complete start -->
    <section class="section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="order-area">
                        <!-- order-price start -->
                        <div class="order-price">
                            <ul class="total-order">
                                <li>
                                    <span class="order-no">Order no. {{$order->order_id}}</span>
                                    <span class="order-date"><span class="order-date">{{$order->updated_at->format('j M Y H:i')}}</span></span>
                                </li>
                                <li>
                                    <span class="total-price">Order total</span>
                                    <span class="amount">{{ 'Rp ' . number_format($order->total_amount, 0, ',', '.') }}</span>
                                </li>
                            </ul>
                        </div>
                        <!-- order-price end -->
                        <!-- order-details start -->
                        @if ($success == 1)
                        <div class="order-details">
                            <span class="text-success order-i"><i class="fa fa-check-circle"></i></span>
                            <h4>Thank you for order</h4>
                            <span class="order-s">Your order will ship within few hours.</span>
                            <a href="{{route('track', $order->order_id)}}" class="tracking-link btn btn-style">Tracking details</a>
                        </div>
                        @elseif ($success == 2)
                        <div class="order-details">
                            <span class="text-danger order-i"><i class="fa fa-xmark-circle"></i></span>
                            <h4>Order Cancelled!</h4>
                            <span class="order-s">Your order has been cancelled.</span>
                            <a href="{{route('landing')}}" class="tracking-link btn btn-style">Back to shop</a>
                        </div>
                        @else
                        <div class="order-details">
                            <span class="text-warning order-i"><i class="fa fa-exclamation-circle"></i></span>
                            <h4>Waiting for payment</h4>
                            <span class="order-s">Make sure to complete your payment.</span>
                            <a href="{{route('payment', $order->order_id)}}" class="tracking-link btn btn-style">Go to payment</a>
                        </div>
                        @endif
                        <!-- order-details start -->
                        <!-- order-delivery start -->
                        @if ($success != 2)
                        <div class="order-delivery">
                            <ul class="delivery-payment">
                                <li class="delivery">
                                    <h5>Delivery address</h5>
                                    <br>
                                    <p>{{ $order->first_name . " " . $order->last_name}}</p>
                                    <span class="order-span">{{$order->address}}</span>
                                    <span class="order-span">{{$order->post_code}}</span>
                                    <span class="order-span">Indonesia</span>
                                    <span class="order-span">Mobile No : {{$order->phone}}</span>
                                </li>
                                <li class="pay">
                                    <h5>Payment summary</h5>
                                    <p class="transition">Order No : {{$order->order_id}}</p>
                                    <span class="order-span p-label">
                                        <span class="n-price">Price</span>
                                        <span class="o-price">{{ 'Rp ' . number_format($order->total_amount, 0, ',', '.') }}</span>
                                    </span>
                                    <span class="order-span p-label">
                                        <span class="n-price">Shipping charge</span>
                                        <span class="o-price">Free</span>
                                    </span>
                                    <span class="order-span p-label">
                                        <span class="n-price">Order Total</span>
                                        <span class="o-price">{{ 'Rp ' . number_format($order->total_amount, 0, ',', '.') }}</span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        @endif
                        <!-- order-delivery start -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- order-complete end -->
</main>
@endsection
