@extends('layouts.template')
@section('main_content')
<section class="instagram-warp bt section-ptb">
    <div class="container-fluid">
        <div class="row">
            <div lang="col">
                <div class="section-capture">
                    <div class="section-title">
                        <span class="sub-title">Our Promos</span>
                        <h2>Hot Promos</h2>
                    </div>
                </div>
                <div class="insta-slider owl-carousel owl-theme" id="insta-slider">
                    <div class="item">
                        <a href="javascript:void(0)" class="banner-hover">
                            <img src="{{asset('assets/img/insta/backery-instagram-01.jpg')}}" class="img-fluid" alt="backery-instagram-01">
                        </a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0)" class="banner-hover">
                            <img src="{{asset('assets/img/insta/backery-instagram-02.jpg')}}" class="img-fluid" alt="backery-instagram-02">
                        </a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0)" class="banner-hover">
                            <img src="{{asset('assets/img/insta/backery-instagram-03.jpg')}}" class="img-fluid" alt="backery-instagram-03">
                        </a>
                    </div>
                </div>
        </div>
    </div>
</section>
@endsection