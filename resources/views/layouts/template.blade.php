<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description"
        content="A best stylish, creative, modern responsive template for different eCommerce business or industries." />
    <meta name="keywords"
        content="food template, bakery products, html, eCommerce html template, responsive, pizza, burger, furniture, mobile, watches, electronics, computers accessories, toys, jewellery, restaurant accessories" />
    <meta name="author" content="spacingtech_webify">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
    <!-- title -->
    <title>{{ $title }}</title>
    <title>{{ $title }}</title>
    @livewireStyles

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo/favicon.ico') }}">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- magnific-popup css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.min.css') }}">
    <!-- bootstrap icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-icons.css') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/all.min.css') }}">
    <!--fether css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/feather.css') }}">
    <!-- owl css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <!-- swiper-bundle css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <!-- slick slider css -->
    <link rel="stylesheet" type of="text/css" href="{{ asset('assets/css/slick.css') }}">
    <!-- style css -->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/collection-page.css') }}">
    <!-- other-page css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/other-page.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/product-page.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/account.css') }}">

    @livewireStyles()
</head>

<body>

    @include('layouts.header')
    @yield('main_content')
    @include('layouts.footer')
    <!-- screen-bg start -->
    <div class="screen-bg"></div>
    <!-- screen-bg end -->
    <!-- preloader start -->
    <div class="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader end -->
    <!-- back-to-top start -->
    <a href="javascript:void(0)" id="top" class="scroll">
        <span><i class="feather-arrow-up"></i></span>
    </a>
  {{-- @livewireScripts --}}

    <!-- back-to-top end -->
    <!-- jquery -->
    <script src="{{ asset('assets/js/jquery-3.6.3.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!-- magnific-popup js -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- owl js -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- swiper-bundle js -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <!-- slick js -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- waypoints js -->
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <!-- counter js -->
    <script src="{{ asset('assets/js/counter.js') }}"></script>
    <script src="{{ asset('assets/js/range-slider.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('assets/js/main4.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    @livewireScripts()
    <script>
        Livewire.onPageExpired((response, message) => {})
    </script>
</body>

</html>
