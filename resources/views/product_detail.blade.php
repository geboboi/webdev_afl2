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
                                    <span>{{$product->name}}</span>
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
                                                <a href="{{asset($product->image)}}" class="product-single">
                                                    <figure class="zoom" onmousemove="zoom(event)"
                                                        style="background-image: url('{{asset($product->image)}}');">
                                                        <img src="{{asset($product->image)}}" class="img-fluid"
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
                                                    <img src="{{asset($product->image)}}" class="img-fluid"
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
                                                <h2>{{$product->name}}</h2>
                                            </div>
                                            <!-- product-title end -->
                                        </div>
                                        <div class="product-info">
                                            <div class="pro-prlb pro-sale">
                                                <div class="price-box">
                                                    <span class="new-price">
                                                        {{ 'Rp ' . number_format($product->price, 0, ',', '.') }}
                                                        </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-inventory">
                                                <div class="stock-inventory stock-more">
                                                    <p>{{$product->description}}
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
                                                    <a href="cart-empty.html" class="btn btn-cart btn_theme">
                                                        <span>Buy now</span>
                                                    </a>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="product-info">
                                            <div class="form-group">
                                                <a href="#deliver-modal" data-bs-toggle="modal">Delivery</a>
                                                <a href="#que-modal" data-bs-toggle="modal">Ask a question</a>
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
                                                                <p>All orders shipped with UPS Express.</p>
                                                                <p>Always free shipping for orders over US $250.</p>
                                                                <p>All orders are shipped with a UPS tracking number.</p>
                                                            </div>
                                                            <div class="space-block">
                                                                <h4>Help</h4>
                                                                <p>Give us a shout if you have any other questions and/or
                                                                    concerns.</p>
                                                                <p>Phone:<a href="tel:+1(23)456789">+1 (23) 456 789</a></p>
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
                                                        <a href="https://www.instagram.com/michs_kitchenn" class="instagram"><i class="fa-brands fa-instagram" style="color: #e515c2;"></i></a>
                                                    </li>
                                                    <li class="whatsapp">
                                                        <a href="https://in.pinterest.com/" class="whatsapp"><i class="fa-brands fa-whatsapp" style="color: #369900;"></i></a>
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
