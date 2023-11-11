<?php use Carbon\Carbon; ?>
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
                @php $sekarang = Carbon::now(); @endphp
                <div class="insta-slider owl-carousel owl-theme" id="insta-slider">
                    @foreach ($events as $event)
                    @if ($sekarang > $event->start_date && $sekarang < $event->end_date )
                    <div class="item">
                        <a href="{{route('promo.detail', $event->id)}}" class="banner-hover">
                            <img src="{{ asset($event->banner) }}" class="img-fluid" alt="event-banner">
                        </a>
                    </div>
                        
                    @endif
                    
                @endforeach
                </div>
        </div>
    </div>
</section>
@endsection
