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
                                <h2>Order history</h2>
                            </div>
                            <!-- breadcrumb main-title end-->
                            <!-- breadcrumb-list start -->
                            <ul class="breadcrumb-list">
                                <li class="breadcrumb-item-link">
                                    <a href="/">Home</a>
                                </li>
                                <li class="breadcrumb-item-link">
                                    <span>Order history</span>
                                </li>
                            </ul>
                            <!-- breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb end -->
        <!-- order history start -->
        <section class="order-histry-area section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="order-history">
                            <!-- order profile start -->
                            <div class="profile">
                                <div class="order-pro">
                                    <div class="order-name">
                                        <h4>{{ $user->name }}</h4>
                                        <span>Joined {{ $user->created_at->format('F d, Y') }}
                                        </span>
                                    </div>
                                </div>
                                <div class="order-his-page">
                                    <ul class="profile-ul">
                                        <li class="profile-li">
                                            <a href="{{route('profile.orders')}}" class="active">
                                                <span>Orders</span>
                                                <span class="pro-count">{{$orderCount}}</span>
                                            </a>
                                        </li>
                                        <li class="profile-li">
                                            <a href="{{route('profile')}}">Profile</a>
                                        </li>
                                        <li class="profile-li">
                                            <a href="{{route('logout')}}">
                                                <span>Sign out</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- order profile start -->
                            <!-- order info start -->
                            <div class="order-info">
                                <div class="pro-add-title">
                                    <h4>Order</h4>
                                </div>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Order #</th>
                                            <th>Date purchased</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($order as $ord )
                                        <tr>
                                            <td><a href="{{route('success', $ord->order_id)}}">{{$ord->order_id}}</a></td>
                                            <td>{{$ord->updated_at->format('F d, Y')}}</td>
                                            @if ($ord->status == 'Cancelled')
                                            <td class="canceled">{{$ord->status}}</td>
                                            @elseif ($ord->status == 'Processing')
                                            <td class="process">{{$ord->status}}</td>
                                            @elseif ($ord->status == 'New')
                                            <td class="delayed">Unpaid</td>
                                            @elseif ($ord->status == 'On Delivery')
                                            <td class="process">{{$ord->status}}</td>
                                            @elseif ($ord->status == 'Delivered')
                                            <td class="delivered">{{$ord->status}}</td>
                                            @endif
                                            <td>{{ 'Rp ' . number_format($ord->total_amount, 0, ',', '.') }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- order info end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- order history end -->
    </main>
@endsection
