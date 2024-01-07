<?php use Carbon\Carbon; ?>

@extends('layouts.template')

@section('main_content')
    <main>
        <!-- breadcrumb start-->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="col">
                    <div class="row">
                        <div class="breadcrumb-index">
                            <!-- breadcrumb-list start -->
                            <ul class="breadcrumb-list">
                                <li class="breadcrumb-item-link">
                                    <a href="/">Home</a>
                                </li>
                                <li class="breadcrumb-item-link">
                                    <span>{{ $product->name }}</span>
                                </li>
                            </ul>
                            <!-- breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-details-page pro-style7">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="pro_details_pos pro_details_right_pos">
                            <!-- Product slider start -->
                            <div class="product_detail_slider product_details_tb product_details product_details_sticky">
                                <!-- Product slider start -->
                                <div class="product_detail_img product_detail_img_bottom">
                                    <div class="product_img_top">
                                        <button class="full-view"><i class="bi bi-arrows-fullscreen"></i></button>
                                        <!-- blog slick slider start -->
                                        <div class="slider-big-7 slick-slider">
                                            <div class="slick-slide ">
                                                <a href="{{ asset('storage/'. $product->product_image) }}" class="product-single">
                                                    <figure class="zoom" onmousemove="zoom(event)"
                                                        style="background-image: url('{{ asset('storage/'. $product->product_image) }}');">
                                                        <img src="{{ asset('storage/'. $product->product_image) }}" class="img-fluid"
                                                            alt="p-1">
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- blog slick slider end -->
                                    <!-- small slick-slider start -->
                                    <div class="pro-slider">
                                        <div class="slider-small-7 pro-detail-slider small_slider">
                                            <div class="slick-slide ">
                                                <a href="javascript:void(0)" class="product-single__thumbnail">
                                                    <img src="{{ asset('storage/'. $product->product_image) }}" class="img-fluid"
                                                        alt="p-1">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- small slick-slider end -->
                                </div>
                                <!-- Product slider end -->
                            </div>
                            <!-- peoduct detail start -->
                            <div class="product_details_wrap product_details_tb product_details">
                                <div class="product_details_info">
                                    <div class="pro-nprist">
                                        <div class="product-info">
                                            <!-- product-title start -->
                                            <div class="product-title">
                                                <h2>{{ $product->name }}</h2>
                                            </div>
                                            <!-- product-title end -->
                                        </div>

                                        <div class="product-info">
                                            <div class="pro-prlb pro-sale">
                                                <div class="price-box">
                                                    @php $sekarang = Carbon::now(); @endphp
                                                    @if ($sekarang > $product->start_date && $sekarang < $product->end_date )
                                                        @php
                                                            $newprice = $product->price - ($product->price * $product->percentage) / 100;
                                                        @endphp
                                                        <div class="price-box">
                                                            <span class="new-price">
                                                                {{ 'Rp ' . number_format($newprice, 0, ',', '.') }}</span>
                                                            <span
                                                                class="old-price">{{ 'Rp ' . number_format($product->price, 0, ',', '.') }}</span>
                                                            <span class="percent-count">{{ $product->percentage }}</span>
                                                        </div>
                                                    @else
                                                        <div class="price-box">
                                                            <span class="new-price">
                                                                {{ 'Rp ' . number_format($product->price, 0, ',', '.') }}</span>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-inventory">
                                                <div class="stock-inventory stock-more">
                                                    <p>{{ $product->description }}
                                                    </p>
                                                </div>
                                                <div class="product-variant">
                                                    <h6>Availability:</h6>
                                                    <span class="stock-qty in-stock text-success">
                                                        <span>In stock<i class="bi bi-check2"></i></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <form method="post" class="cart">
                                                <div class="pro-detail-button">
                                                    <a href="https://wa.me/6287798165115?text=Halo%20kak,%20aku%20mau%20order%20dongg~%20%0ANama%20produk%20:%20{{$product->name}}%20%0AJumlah%20:%20" class="btn btn-cart btn_theme">
                                                        <span>Buy now</span>
                                                    </a>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="product-info">
                                            <div class="form-group">
                                                <a href="#deliver-modal" data-bs-toggle="modal">Delivery</a>
                                            </div>
                                        </div>
                                        <div class="modal fade deliver-modal" id="deliver-modal" tabindex="-1"
                                            style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <button type="button" class="pop-close" data-bs-dismiss="modal"
                                                            aria-label="Close"><i class="feather-x"></i></button>
                                                        <div class="delivery-block">
                                                            <div class="space-block">
                                                                <h4>Delivery</h4>
                                                                <p>Semua pesanan dikirim dengan kurir internal dan external (Grab, Gojek, dll).</p>
                                                                <p>Pengiriman gratis untuk Rungkut dan sekitarnya.</p>
                                                            </div>
                                                            <div class="space-block">
                                                                <h4>Help</h4>
                                                                <p>Beri tahu kami jika Anda memiliki pertanyaan atau kekhawatiran lainnya.</p>
                                                                <p>Phone: +62 87798165115</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="share-icons">
                                                <h6>Contact us:</h6>
                                                <ul class="pro_social_link">
                                                    <li class="instagram">
                                                        <a href="https://www.instagram.com/michs_kitchenn"
                                                            class="instagram"><i class="fa-brands fa-instagram"
                                                                style="color: #e515c2;"></i></a>
                                                    </li>
                                                    <li class="whatsapp">
                                                        <a href="https://wa.me/6287798165115/" class="whatsapp"><i
                                                                class="fa-brands fa-whatsapp"
                                                                style="color: #369900;"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- peoduct detail end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    {{--
<div class="mt-4 p-5 bg-primary text-white rounded">
    <h2>{{$product['name']}}</h2>
    <p>description: {{$product['description']}}</p>
</div> --}}
@endsection
