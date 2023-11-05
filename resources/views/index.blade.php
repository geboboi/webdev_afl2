@extends('layouts.template')
@section('title', $title)
@section('main_content')
<main>
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

     <!-- banner start -->
     <section class="banner-area section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="banner-content">
                        <div class="banner-grid">
                            <div class="single-banner banner-hover">
                                <a href="javascript:void(0)" class="banner-img">
                                    <img src="{{asset('assets/img/banner/banner-03.jpg')}}" class="img-fluid" alt="banner-03">
                                </a>
                            </div>
                            <div class="abt-banner-desc">
                                <h2>Bread & Buttermilk</h2>
                                <p class="sub-title">The perfect combination of bread and milk creates a nutritious breakfast. Include milk and starches with essential nutrients for a day's work. The cakes are made during the day to ensure the freshness of each cake. We always work hard to create the best cakes with every meal.</p>
                                <a href="collection.html" class="btn btn-style">Shop now</a>
                            </div>
                        </div>
                        <div class="banner-grid">
                            <div class="single-banner banner-hover">
                                <a href="javascript:void(0)" class="banner-img">
                                    <img src="{{asset('assets/img/banner/banner-04.jpg')}}" class="img-fluid" alt="banner-04">
                                </a>
                            </div>
                            <div class="abt-banner-desc">
                                <h2>The maker of the bread</h2>
                                <p class="sub-title">Banno breads are always made from skillful hands and from bakers who put their heart into each cake. Banno always makes cakes by hand and guarantees quality on every product. Creating the perfect meal for our customers is a fun every day at banno.</p>
                                <a href="collection.html" class="btn btn-style">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->
    <!-- service area start -->
    <section class="our-service-area section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="single-service">
                        <li class="service-content">
                            <div class="ser-block">
                                <a href="javascript:void(0)"><i class="feather-truck"></i></a>
                                <div class="service-text">
                                    <h6>Shipping & return</h6>
                                    <p>If your glasses aren't perfect, return them within 30 days for a full refund.</p>
                                </div>
                            </div>
                        </li>
                        <li class="service-content">
                            <div class="ser-block">
                                <a href="javascript:void(0)"><i class="feather-shield"></i></a>
                                <div class="service-text">
                                    <h6>Safe payment</h6>
                                    <p>Pay with the world's most popular and secure payment methods</p>
                                </div>
                            </div>
                        </li>
                        <li class="service-content">
                            <div class="ser-block">
                                <a href="javascript:void(0)"><i class="feather-shopping-cart"></i></a>
                                <div class="service-text">
                                    <h6>Shop with confidence</h6>
                                    <p>Our buyer protection covers your purchase from click to delivery.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
