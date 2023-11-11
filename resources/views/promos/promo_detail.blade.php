<?php use Carbon\Carbon; ?>
@extends('layouts.template')
@section('main_content')
    <section class="deal-section section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="deal-category">
                        <div class="section-capture">
                            <div class="section-title">
                                <div class="section-cont-title">
                                    <h2>Deal of the day</h2>
                                    <span class="sub-title">Best offer</span>
                                </div>
                            </div>
                        </div>
                        <div class="deal-wrap">
                            <div class="deal-slider swiper" id="deal-slider-template">
                                <div class="swiper-wrapper">
                                    @foreach ($products as $product)
                                        <div class="swiper-slide">

                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="product-template.html" class="pro-img">
                                                        <img src="{{ asset($product->image) }}" class="img-fluid"
                                                            alt="deal-01">
                                                    </a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="save-text">
                                                        <span>You save</span>
                                                        <span class="percent-count"> {{ $product->percentage }}%</span>
                                                    </div>
                                                    <h6>
                                                        <a href="#">{{$product->name}} </a>
                                                    </h6>
                                                    <div class="price-box">
                                                        @php
                                                            $dueDate = Carbon::parse($product->end_date);
                                                            $date = $dueDate->diffForHumans();
                                                            $newprice = $product->price - ($product->price * $product->percentage / 100);
                                                        @endphp

                                                        <span class="new-price">{{ 'Rp ' . number_format($newprice, 0, ',', '.') }}</span>

                                                        <span class="old-price">{{ 'Rp ' . number_format($product->price, 0, ',', '.') }}</span>
                                                    </div>                                                    
                                                    <div class="product-timer">
                                                        <ul class="timer-section">
                                                            <li class="timer-count">
                                                                <span class="timer-text">{{$date}}</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
