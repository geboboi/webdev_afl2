@extends('layouts.template')

@section('main_content')
    <section class="breadcrumb-area">
        <div class="container">
            <div class="col">
                <div class="row">
                    <div class="breadcrumb-index">
                        <!-- breadcrumb main-title start-->
                        <div class="breadcrumb-title">
                            <h2>Your Shopping Cart</h2>
                        </div>
                        <!-- breadcrumb main-title end-->
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item-link">
                                <a href="{{ route('landing') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item-link">
                                <span>Your Shopping Cart</span>
                            </li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    @livewire('livewire-cart', ['carts' => $carts])
    <!-- breadcrumb end -->

@endsection
