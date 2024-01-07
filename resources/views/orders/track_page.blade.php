@extends('layouts.template');
@section('main_content')
    <main>
        <!-- breadcrumb start -->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="col">
                    <div class="row">
                        <div class="breadcrumb-index">
                            <!-- breadcrumb main-title start-->
                            <div class="breadcrumb-title">
                                <h2>Traking</h2>
                            </div>
                            <!-- breadcrumb main-title end-->
                            <!-- breadcrumb-list start -->
                            <ul class="breadcrumb-list">
                                <li class="breadcrumb-item-link">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item-link">
                                    <span>Traking</span>
                                </li>
                            </ul>
                            <!-- breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb end -->
        <!-- tracking start -->
        <section class="section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="track-area">
                            <div class="track-price">
                                <ul class="track-order">
                                    <li>
                                        <h4>Your order id is: {{ $order->order_id }}</h4>
                                    </li>
                                    <li>
                                        <span class="track-status">Status:</span>
                                        {{ $order->status }}
                                    </li>
                                </ul>
                            </div>
                            <div class="track-main">
                                <div class="track">
                                    @if ($status == 1)
                                    <div class="step active">
                                        <span class="icon"><i class="fa fa-check" style="margin-top:12px;"></i></span>
                                        <span class="text">Order confirmed</span>
                                    </div>
                                    <div class="step ">
                                        <span class="icon"><i class="fa fa-user" style="margin-top:12px;"></i></span>
                                        <span class="text">Picked by courier</span>
                                    </div>
                                    <div class="step">
                                        <span class="icon"><i class="fa fa-truck" style="margin-top:12px;"></i></span>
                                        <span class="text"> On the way </span>
                                    </div>
                                    <div class="step">
                                        <span class="icon"><i class="fa fa-archive" style="margin-top:12px;"></i></span>
                                        <span class="text">Ready for pickup</span>
                                    </div>
                                    @elseif ($status == 2)
                                    <div class="step active">
                                        <span class="icon"><i class="fa fa-check" style="margin-top:12px;"></i></span>
                                        <span class="text">Order confirmed</span>
                                    </div>
                                    <div class="step active">
                                        <span class="icon"><i class="fa fa-user" style="margin-top:12px;"></i></span>
                                        <span class="text">Picked by courier</span>
                                    </div>
                                    <div class="step">
                                        <span class="icon"><i class="fa fa-truck" style="margin-top:12px;"></i></span>
                                        <span class="text"> On the way </span>
                                    </div>
                                    <div class="step">
                                        <span class="icon"><i class="fa fa-archive" style="margin-top:12px;"></i></span>
                                        <span class="text">Ready for pickup</span>
                                    </div>
                                    @elseif ($status == 3)
                                    <div class="step active">
                                        <span class="icon"><i class="fa fa-check" style="margin-top:12px;"></i></span>
                                        <span class="text">Order confirmed</span>
                                    </div>
                                    <div class="step active">
                                        <span class="icon"><i class="fa fa-user" style="margin-top:12px;"></i></span>
                                        <span class="text">Picked by courier</span>
                                    </div>
                                    <div class="step active">
                                        <span class="icon"><i class="fa fa-truck" style="margin-top:12px;"></i></span>
                                        <span class="text"> On the way </span>
                                    </div>
                                    <div class="step">
                                        <span class="icon"><i class="fa fa-archive" style="margin-top:12px;"></i></span>
                                        <span class="text">Ready for pickup</span>
                                    </div>
                                    @elseif ($status == 4)
                                    <div class="step active">
                                        <span class="icon"><i class="fa fa-check" style="margin-top:12px;"></i></span>
                                        <span class="text">Order confirmed</span>
                                    </div>
                                    <div class="step active">
                                        <span class="icon"><i class="fa fa-user" style="margin-top:12px;"></i></span>
                                        <span class="text">Picked by courier</span>
                                    </div>
                                    <div class="step active">
                                        <span class="icon"><i class="fa fa-truck" style="margin-top:12px;"></i></span>
                                        <span class="text"> On the way </span>
                                    </div>
                                    <div class="step active">
                                        <span class="icon"><i class="fa fa-archive" style="margin-top:12px;"></i></span>
                                        <span class="text">Ready for pickup</span>
                                    </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- tracking end -->
    </main>
@endsection
