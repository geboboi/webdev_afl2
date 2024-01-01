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
                    @foreach ($events as $event)
                    <div class="item">
                        <a href="javascript:void(0)" class="banner-hover">
                            <img src="{{ asset($event->banner) }}" class="img-fluid" alt="event-banner">
                        </a>
                    </div>
                @endforeach
                </div>
        </div>
    </div>
</section>
@endsection
