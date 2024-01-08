@extends('layouts.template')
@section('main_content')
    <div class="container my-4">
        <div class="row">
            <div class="col">

                <!-- wishlist-title end -->
                <!-- wishlist-product start -->


                @livewire('remove-wishlist', ['wishlist' => $wishlist])
                <!-- wishlist-product end -->
                <!-- wishlist-buttons start -->

                <!-- wishlist-buttons end -->
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
