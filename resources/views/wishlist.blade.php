@extends('layouts.template')
@section('main_content')
    <div class="container my-4">
        <div class="row">
            <div class="col">

                            <!-- wishlist-title end -->
                            <!-- wishlist-product start -->
                            @if ($wishlist->isEmpty())
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
                                                                    <a href="{{route('product')}}">here.</a>
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
                            <div class="wishlist-page">
                                <div class="wishlist-grid is_visible">
                                    <div class="wish-wrap">
                                        <!-- wishlist-title start -->
                                        <div class="wishlist-title">
                                            <h6>My wishlist:</h6>
                                            <span class="wish-count">
                                                <span class="wishlist-counter">5</span>
                                                <span class="wish-item-title">Item</span>
                                            </span>
                                        </div>
                                @foreach ($wishlist as $wishlists)
                                    <ul class="wishlist-tile-container">
                                        <li class="wishlist-info">
                                            <div class="item-img">
                                                <a href="product-template2.html">
                                                    <img src="img/product-list/p-1.jpg" class="img-fluid" alt="p-1">
                                                </a>
                                            </div>
                                            <div class="item-title">
                                                <a href="product-template2.html">Candy nut chocolate</a>
                                            </div>
                                        </li>
                                        <li class="item-add-remove">
                                            <div class="item-add">
                                                <a href="javascript:void(0)" class="add-to-cart">
                                                    <span>
                                                        <span class="cart-title">Add to cart</span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="item-buy">
                                                <a href="checkout-style1.html">
                                                    <span>Buy now</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="item-price">
                                            <div class="price-box">
                                                <span class="new-price">€11,00</span>
                                                <span class="old-price">€19,00</span>
                                            </div>
                                            <span class="item-remove">
                                                <a href="javascript:void(0)"
                                                    class="action-wishlist wishlist-btn text-danger is-active">
                                                    <span class="remove-wishlist"><i class="fa fa-heart"></i></span>
                                                </a>
                                            </span>
                                        </li>
                                    </ul>
                                @endforeach
                                <div class="wishlist-buttons">
                                    <a href="{{route('product')}}" class="btn-style2">Continue shopping</a>
                                    <a href="wishlist-empty.html" class="btn-style2">Clear wishlist</a>
                                </div>
                            @endif
                            <!-- wishlist-product end -->
                            <!-- wishlist-buttons start -->

                            <!-- wishlist-buttons end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
