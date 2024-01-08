<?php use Carbon\Carbon; ?>

@extends('layouts.template')

@section('main_content')

    <section class="main-content-wrap shop-page section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="pro-grli-wrap product-grid">
                        <div class="collection-img-wrap">
                            <h6 class="st-title">Products (5)</h6>
                            <!-- collection info start -->
                            <div class="collection-info">
                                <div class="collection-image">
                                    <img src="{{ asset('assets/img/product/christmas.svg') }}" class="img-fluid"
                                        alt="banner christmas" width="100%">


                                </div>
                            </div>
                            <!-- collection info end -->
                        </div>
                        <div class="shop-top-bar">
                            <div class="product-view-mode">
                                <a href="javascript:void(0)" class="list-change-view grid-three active"
                                    data-grid-view="3"><i class="feather-grid"></i>
                                </a>
                                <a href="javascript:void(0)" data-grid-view="1" class="list-change-view list-one"><i
                                        class="feather-list"></i></a>
                            </div>
                        </div>
                        <div class="get-data-products">
                            <div class="shop-grid">
                                <div id="ProductGridContainer">
                                    <div class="product-grid-view">
                                        <div class="shop-product-wrap collection grid-3">
                                            <div class="row">
                                                <div class="col">
                                                    <ul class="product-view" id="product-grid">
                                                        @foreach ($products as $product)
                                                            <li class="st-col-item st-col">
                                                                <div class="single-product-wrap">
                                                                    <!-- product-img start -->
                                                                    <div class="product-image">
                                                                        <a href="product/{{ $product->id }}"
                                                                            class="pro-img">
                                                                            <img src="{{ asset('storage/'. $product->product_image) }}"
                                                                                class="img-fluid img1" alt="p-1">
                                                                            <img src="{{ asset('storage/'. $product->product_image) }}"
                                                                                class="img-fluid img2" alt="p-2">
                                                                        </a>
                                                                        <div class="product-action">
                                                                            <a href="{{ route('cart.store', $product->id) }}" class="add-to-cart">
                                                                                <span class="tooltip-text">Add to cart</span>
                                                                                <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                            </a>
                                                                            <a href="{{route('wishlist.store', $product->id )}}"  class="wishlist-product">
                                                                                <span class="tooltip-text">Wishlist</span>
                                                                                <span class="wishlist-icon"><i class="feather-heart"></i></span>
                                                                            </a>
                                                                        </div>
                                                                        <!-- product-label start -->
                                                                        <!-- <div class="product-label">
                                                                                <span class="new-sale-title">New</span>
                                                                            </div> -->
                                                                        <!-- product-label end -->

                                                                    </div>
                                                                    <!-- product-img end -->
                                                                    <!-- product-content start -->
                                                                    <div class="product-content">
                                                                        <!-- product-title start -->
                                                                        <h6><a
                                                                                href="{{ route('product.show', $product->id) }}">{{ $product->name }}</a>
                                                                        </h6>
                                                                        <!-- product-title end -->
                                                                        <!-- product-price start -->
                                                                        @php $sekarang = Carbon::now(); @endphp
                                                                        @if ($sekarang > $product->start_date && $sekarang < $product->end_date)
                                                                            @php
                                                                                $newprice = $product->price - ($product->price * $product->percentage) / 100;
                                                                            @endphp
                                                                            <div class="price-box">
                                                                                <span class="new-price">
                                                                                    {{ 'Rp ' . number_format($newprice, 0, ',', '.') }}</span>
                                                                                <span
                                                                                    class="old-price">{{ 'Rp ' . number_format($product->price, 0, ',', '.') }}</span>

                                                                            </div>
                                                                        @else
                                                                            <div class="price-box">
                                                                                <span class="new-price">
                                                                                    {{ 'Rp ' . number_format($product->price, 0, ',', '.') }}</span>
                                                                            </div>
                                                                        @endif
                                                                        <!-- product-price end -->
                                                                        <!-- product-description start -->
                                                                        <p class="product-description">
                                                                            {{ $product->description }}</p>
                                                                        <!-- product-description end -->
                                                                        <!-- product-action start -->
                                                                        <div class="product-action">
                                                                            <a href="{{ route('wishlist.store', $product->id) }}"
                                                                                class="wishlist-product">
                                                                                <span class="tooltip-text">Wishlist</span>
                                                                                <span class="wishlist-icon"><i
                                                                                        class="feather-heart"></i></span>
                                                                            </a>
                                                                        </div>
                                                                        <!-- product-action end -->
                                                                    </div>
                                                                    <!-- product-content end -->

                                                                </div>

                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
{{-- @push('scripts')
    <script>
        function addProductToWishlist(id,name,quantity,price){
            $.ajax({
                type:'POST',
                url: "{{route('wishlist.store')}}",
                data:{
                    "_token":"{{ csrf_token() }}",
                    id:id,
                    name:name,
                    quantity:quantity,
                    price:price
                },
                success:function(data){
                    if (data.status == 200) {
                        $.notify({
                            icon:"fa fa-check",
                            title:"Success!",
                            message:"Item successfully added to your wishlist"
                        });
                    }
                }
            });
        }
    </script>
@endpush --}}
