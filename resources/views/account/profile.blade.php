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
                            <h2>Profile</h2>
                        </div>
                        <!-- breadcrumb main-title end-->
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item-link">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item-link">
                                <span>Profile</span>
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
                                    <h4>{{$user->name}}</h4>
                                    <span>Joined {{ $user->created_at->format('F d, Y') }}</span>
                                </div>
                            </div>
                            <div class="order-his-page">
                                <ul class="profile-ul">
                                    <li class="profile-li">
                                        <a href="{{route('profile.orders')}}">
                                            <span>Orders</span>
                                        </a>
                                    </li>
                                    <li class="profile-li">
                                        <a href="{{route('profile')}}" class="active">Profile</a>
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
                        <!-- profile-form start -->
                        <div class="profile-form">
                            <div class="pro-add-title">
                                <h4>Profile</h4>
                            </div>
                            <form>
                                <ul class="pro-input-label">
                                    <li>
                                        <label>Name</label>
                                        <input type="text" name="name" placeholder="Name">
                                    </li>
                                    <li>
                                        <label>Email address</label>
                                        <input type="text" name="name" placeholder="Email address" required>
                                    </li>
                                </ul>
                                <ul class="pro-input-label">
                                    <li>
                                        <label>New password</label>
                                        <input type="text" name="name" placeholder="New password">
                                    </li>
                                    <li>
                                        <label>Confirm password</label>
                                        <input type="text" name="name" placeholder="Confirm password">
                                    </li>
                                </ul>
                                <ul class="pro-submit">
                                    <li>
                                        <a href="profile.html" class="btn btn-style2 checkout">Update profile</a>
                                    </li>
                                </ul>
                            </form>
                        </div>
                        <!-- profile-form end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- order history end -->
</main>
@endsection
