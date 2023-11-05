@extends('layouts.template')
@section('title', $title)
@section('main_content')
    <section class="slider-content">
        <div class="home-slider owl-carousel owl-theme" id="home-slider">
            <div class="item active">
                <div class="slide-image">
                    <img src="{{ asset('assets/img/slider/cake-slider-06.jpg') }}" class="img-fluid desk-img"
                        alt="cake-slider-06">
                    <img src="{{ asset('assets/img/slider/mobile-slider-07.jpg') }}" class="img-fluid mobile-img"
                        alt="mobile-slider-07">
                    <div class="container slider-info-content">
                        <div class="row">
                            <div class="col">
                                <div class="slider-text-info slider-content-center slider-text-center">
                                    <h2 class="e1"><span>Chocolate Cup Cake</span></h2>
                                    <p class="e1">Chocolate cup cake with dried fruit</p>
                                    <a href="collection.html" class="btn btn-style e1">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="special-category collection-category-template section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="collection-category">
                        <div class="section-capture">
                            <div class="section-title">
                                <h2><Span>Our products</Span></h2>
                                <span class="sub-title">Best collection</span>
                            </div>
                        </div>
                    </div>
                    <div class="special-category-wrap">
                        <div class="special-category-slider swiper" id="special-category">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!-- product start -->
                                    <div class="single-product-wrap">
                                        <!-- product-img start -->
                                        <div class="product-image">
                                            <a href="product-template.html" class="pro-img">
                                                <img src="{{ asset('assets/img/product/p-73.jpg') }}" class="img-fluid img1"
                                                    alt="p-73">
                                                <img src="{{ asset('assets/img/product/p-74.jpg') }}" class="img-fluid img2"
                                                    alt="p-74">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <!-- product-title start -->
                                            <h6><a href="product-template.html">Donuts yeast donut strawberry</a></h6>
                                            <!-- product-title end -->
                                            <!-- product-price start -->
                                            <div class="price-box">
                                                <span class="new-price">$12.00</span>
                                                <span class="old-price">$18.00</span>
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
