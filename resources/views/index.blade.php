@extends('layouts.template')
@include('layouts.notifbar')

@section('main_content')
    <main>
        <section class="slider-content">
            <div class="home-slider owl-carousel owl-theme" id="home-slider">
                <div class="item active">
                    <div class="slide-image">
                        <img src="{{ asset('assets/img/index-banner/pasteltuts.jpg') }}" class="img-fluid desk-img"
                            alt="cake-slider-06">
                        <img src="{{ asset('assets/img/index-banner/pasteltuts.jpg') }}" class="img-fluid mobile-img"
                            alt="mobile-slider-07">
                        <div class="container slider-info-content">
                            <div class="row">
                                <div class="col">
                                    <div class="slider-text-info slider-content-center slider-text-center">
                                        <h2 class="e1"><span>Mich's Kitchen</span></h2>
                                        <p class="e1">Pastry Professionalist</p>
                                        <a href="/product" class="btn btn-style e1">Buy now</a>
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
                <div class="col">
                    <div class="collection-category">
                        <div class="section-capture">
                            <div class="section-title">
                                <h2><Span>Our products</Span></h2>
                                <span class="sub-title">Newest Products</span>
                            </div>
                        </div>
                    </div>
                    <div class="special-category-wrap">
                        <div class="special-category-slider swiper" id="special-category">
                            <div class="swiper-wrapper">
                                @foreach ($products_home as $product_home)
                                    <div class="swiper-slide">
                                        <!-- product start -->
                                        <div class="single-product-wrap">
                                            <!-- product-img start -->
                                            <div class="product-image">
                                                <a href="product/{{ $product_home['id']}}" class="pro-img">
                                                    <img src="{{ asset('storage/'. $product_home->product_image) }}" class="img-fluid img1"
                                                        alt="p-73">
                                                    <img src="{{ asset('storage/'. $product_home->product_image) }}" class="img-fluid img2"
                                                        alt="p-74">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <!-- product-title start -->
                                                <h6><a href="product/{{ $product_home['id']}}">{{ $product_home->name }}</a></h6>
                                                <!-- product-title end -->
                                                <!-- product-price start -->
                                                <div class="price-box">
                                                    <span class="new-price">{{ 'Rp ' . number_format($product_home->price, 0, ',', '.') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                @foreach ($products_home as $product_home)
                                    <div class="swiper-slide">
                                        <!-- product start -->
                                        <div class="single-product-wrap">
                                            <!-- product-img start -->
                                            <div class="product-image">
                                                <a href="product/{{ $product_home['id']}}" class="pro-img">
                                                    <img src="{{ asset('storage/'. $product_home->product_image) }}" class="img-fluid img1"
                                                        alt="p-73">
                                                    <img src="{{ asset('storage/'. $product_home->product_image) }}" class="img-fluid img2"
                                                        alt="p-74">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <!-- product-title start -->
                                                <h6><a href="product/{{ $product_home['id']}}">{{ $product_home->name }}</a></h6>
                                                <!-- product-title end -->
                                                <!-- product-price start -->
                                                <div class="price-box">
                                                    <span class="new-price">{{ 'Rp ' . number_format($product_home->price, 0, ',', '.') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
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
                                        <img src="{{ asset('assets/img/index-banner/1.svg') }}" class="img-fluid"
                                            alt="banner-03">
                                    </a>
                                </div>
                                <div class="abt-banner-desc">
                                    <h2>Pastel Tutup</h2>
                                    <p class="sub-title">Pastel panggang adalah hidangan yang umumnya terdiri dari kulit yang tipis dan renyah yang membalut berbagai macam isian. Proses panggang memberikan pastel ini tekstur luar yang garing sementara memastikan bahwa isian di dalamnya matang.</p>
                                </div>
                            </div>
                            <div class="banner-grid">
                                <div class="single-banner banner-hover">
                                    <a href="javascript:void(0)" class="banner-img">
                                        <img src="{{ asset('assets/img/index-banner/2.svg') }}" class="img-fluid"
                                            alt="banner-04">
                                    </a>
                                </div>
                                <div class="abt-banner-desc">
                                    <h2>Kroket Ragout</h2>
                                    <p class="sub-title">Kroket Ragout adalah hidangan yang terdiri dari kroket yang diisi dengan isian berupa ragout. Ini adalah makanan yang umumnya dianggap sebagai camilan atau hidangan pembuka, terutama di beberapa negara Eropa. Kroket adalah bola atau tabung berbentuk silinder yang terbuat dari campuran kentang yang dihaluskan atau puree, terkadang dicampur dengan mentega, susu, dan bumbu-bumbu lainnya. Ragout adalah hidangan krim atau saus yang biasanya terbuat dari daging cincang, sayuran, dan bumbu.</p>
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
                                        <h6>Shipping</h6>
                                        <p>Pengiriman kami yang efisien menjamin bahwa camilan lezat akan sampai di depan pintu Anda dengan cepat dan penuh perhatian, menjaga kesegaran mereka agar Anda dapat menikmatinya sepenuhnya.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="service-content">
                                <div class="ser-block">
                                    <a href="javascript:void(0)"><i class="feather-shield"></i></a>
                                    <div class="service-text">
                                        <h6>Safe payment</h6>
                                        <p>Bayar dengan metode pembayaran paling populer dan aman di dunia.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="service-content">
                                <div class="ser-block">
                                    <a href="javascript:void(0)"><i class="feather-shopping-cart"></i></a>
                                    <div class="service-text">
                                        <h6>Shop with confidence</h6>
                                        <p>Perlindungan pembeli kami mencakup pembelian Anda mulai dari klik hingga pengiriman.
                                        </p>
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
