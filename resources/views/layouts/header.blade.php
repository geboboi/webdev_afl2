<header class="header-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="header-main">
                    <!-- header logo start -->
                    <div class="header-element logo">
                        <a href="/" class="theme-header-logo">
                            <img src="{{ asset('assets/img/logo.svg') }}" class="img-fluid" alt="logo" width="100%">
                        </a>
                    </div>
                    <div class="header-element megamenu-content">
                        <a href="#main-collapse" class="browse-cat" data-bs-toggle="collapse" aria-expanded="true">
                            <span class="menu-icon"><i class="feather-menu"></i></span>
                            <span class="menu-title">Menu</span>
                            <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                        </a>
                        <div class="mainwrap collapse show" id="main-collapse">
                            <ul class="main-menu">
                                <li class="menu-link">
                                    <a href="/" class="link-title">
                                        <span class="sp-link-title">Home</span>
                                    </a>
                                    <a href="/" data-bs-toggle="collapse" class="link-title link-title-lg">
                                        <span class="sp-link-title">Home</span>
                                    </a>
                                </li>
                                <li class="menu-link">
                                    <a href="/product" class="link-title">
                                        <span class="sp-link-title">Product
                                            {{-- <span class="label">sale</span> --}}
                                        </span>
                                    </a>
                                    <a href="/product" data-bs-toggle="collapse" class="link-title link-title-lg">
                                        <span class="sp-link-title">Product</span>
                                    </a>
                                </li>
                                <li class="menu-link">
                                    <a href="/promo" class="link-title">
                                        <span class="sp-link-title">Promo</span>
                                    </a>
                                    <a href="/promo" data-bs-toggle="collapse" class="link-title link-title-lg">
                                        <span class="sp-link-title">Promo</span>
                                    </a>
                                </li>
                                <li class="menu-link">
                                    <a href="/about" class="link-title">
                                        <span class="sp-link-title">About</span>
                                    </a>
                                    <a href="/about" data-bs-toggle="collapse" class="link-title link-title-lg">
                                        <span class="sp-link-title">About</span>
                                    </a>
                                </li>
                                <li class="menu-link">
                                    <a href="/contact_us" class="link-title">
                                        <span class="sp-link-title">Contact Us</span>
                                    </a>
                                    <a href="/contact_us" data-bs-toggle="collapse" class="link-title link-title-lg">
                                        <span class="sp-link-title">Contact Us</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="header-element right-block-box">
                        <ul class="shop-element">
                            <!-- button toggler start -->
                            <li class="side-wrap toggle-wrap">
                                <button class="toggler-button"><span class="line"></span></button>
                            </li>
                            <!-- button toggler end -->
                            <!-- search-modal start -->
                            <li class="side-wrap search-wrap">
                                <a href="#seachmodal" class="search-popup" data-bs-toggle="modal">
                                    <i class="feather-search"></i>
                                </a>
                                <a href="#seachmodal" class="search-popup search-popup-lg" data-bs-toggle="modal"><i class="feather-search"></i></a>
                            </li>
                            <!-- search-modal end -->
                            <!-- login-account start -->
                            <li class="side-wrap user-wrap">
                                <div class="acc-desk-header">
                                    <div class="acc-title">
                                        <a href="{{route('login')}}">
                                            <span class="user-icon"><i class="feather-user"></i></span>
                                        </a>
                                    </div>
                                    <div class="acc-title-lg">
                                        <a href="login-account.html"><i class="feather-user"></i></a>
                                    </div>
                                </div>
                            </li>
                            <!-- login-account end -->
                            <!-- wishlist start -->
                            <li class="side-wrap wishlist-wrap">
                                <a href="{{route('wishlist')}}" class="header-wishlist-btn">
                                    <span class="wishlist-icon"><i class="feather-heart"></i></span>
                                    <span class="wishlist-counter">5</span>
                                </a>
                            </li>
                            <!-- wishlist end -->
                            <!-- cart start -->
                            <li class="side-wrap cart-wrap">
                                <div class="shopping-widget">
                                    <div class="shopping-cart">
                                        <a href="javascript:void(0)" class="cart-count">
                                            <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                            <span class="cart-bigcounter">8</span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <!-- cart end -->
                        </ul>
                    </div>
                    {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm mx-4">
                    <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                    </div>
                    </nav> --}}
                </div>
            </div>
        </div>
    </div>
    </div>
</header>
