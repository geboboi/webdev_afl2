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
                                @if (Auth::check() && Auth::user()->isAdmin())
                                    <li class="menu-link">
                                        <a href="/admin" class="link-title">
                                            <span class="sp-link-title">Admin Panel</span>
                                        </a>
                                        <a href="/admin" data-bs-toggle="collapse" class="link-title link-title-lg">
                                            <span class="sp-link-title">Admin Panel</span>
                                        </a>
                                    </li>
                                @endif
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
                            <!-- search-modal end -->
                            <!-- login-account start -->
                            <li class="side-wrap user-wrap">
                                <div class="acc-desk-header">
                                    <div class="acc-title">
                                        <ul class="navbar-nav ms-auto">

                                            @guest
                                                <a href="{{ route('login') }}">
                                                    <span class="user-icon"><i class="feather-user" style="color: hsl(334, 63%, 33%);"></i></span>
                                                </a>
                                            @else
                                                <li class="nav-item dropdown">
                                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                                        role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" style="color: hsl(334, 63%, 33%);" v-pre>
                                                        {{ Auth::user()->name }}
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="navbarDropdown">
                                                        <a class="dropdown-item" href="{{route('profile.orders')}}">
                                                            Profile
                                                        </a>
                                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                            Logout
                                                        </a>
                                                        <form id="logout-form" action="{{ route('logout') }}"
                                                            method="get" class="d-none">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </li>
                                            @endguest
                                    </div>
                                    <!-- No need for the acc-title-lg div when the user is logged in -->
                                    @guest
                                        <div class="acc-title-lg">
                                            <a href="{{ route('login') }}"><i class="feather-user"></i></a>
                                        </div>
                                    @endguest
                                </div>
                            </li>


                            <!-- login-account end -->
                            <!-- wishlist start -->
                            <li class="side-wrap wishlist-wrap">
                                <a href="{{ route('wishlist') }}" class="header-wishlist-btn">
                                    <span class="wishlist-icon"><i class="feather-heart"
                                            style="color: hsl(334, 63%, 33%);"></i></span>
                                    {{-- <span class="wishlist-counter">5</span> --}}
                                </a>
                            </li>
                            <!-- wishlist end -->
                            <!-- cart start -->
                            <li class="side-wrap cart-wrap">
                                <div class="shopping-widget">
                                    <div class="shopping-cart">
                                        <a href="javascript:void(0)" class="cart-count">
                                            <span class="cart-icon"><i class="feather-shopping-bag"
                                                    style="color: hsl(334, 63%, 33%);"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <!-- cart end -->
                        </ul>
                    </div>
                    <!-- mini-cart start -->
                    <div class="mini-cart">
                        <div class="cart-text">
                            <!-- minicart-empty start -->
                            <p class="d-none">No products in the cart.</p>
                            <!-- minicart-empty end -->
                            <!-- minicart-fill start -->
                            <p>
                                <span class="cart-count-desc">There are</span>
                                <span class="cart-count">8</span>
                                <span class="cart-count-desc">products</span>
                            </p>
                            <!-- minicart-fill end -->
                            <!-- minicart-close start -->
                            <button class="cart-close"><i class="feather-x"></i></button>
                            <!-- minicart-close end -->
                        </div>
                        <!-- minicart empty-content start -->
                        <div class="empty-cart d-none">
                            <span class="cart-icon"><i class="bi bi-bag-dash"></i></span>
                            <a href="collection.html" class="btn btn-style">Continue shopping</a>
                        </div>
                        <!-- minicart empty-content end -->
                        <ul class="cart-item">
                            <li class="cart-product">
                                <div class="cart-img">
                                    <!-- minicart-img start -->
                                    <a href="product-template1.html" class="img-area">
                                        <img src="img/product-list/p-17.jpg" class="img-fluid" alt="p-17">
                                    </a>
                                    <!-- minicart-img end -->
                                </div>
                                <div class="cart-content">
                                    <!-- minicart-title start -->
                                    <h6><a href="product-template2.html">Donuts yeast donut strawberry</a></h6>
                                    <!-- minicart-title end -->
                                    <div class="product-info">
                                        <!-- minicart-price start -->
                                        <div class="info-item">
                                            <span class="product-qty">1</span>
                                            <span>×</span>
                                            <span class="product-price">$12.00</span>
                                        </div>
                                        <!-- minicart-price end -->
                                    </div>
                                    <div class="product-quantity-action">
                                        <div class="product-quantity">
                                            <div class="cart-plus-minus">
                                                <button class="dec qtybutton minus"><i
                                                        class="feather-minus"></i></button>
                                                <input type="text" name="quantity" value="1">
                                                <button class="inc qtybutton plus"><i
                                                        class="feather-plus"></i></button>
                                            </div>
                                        </div>
                                        <!-- minicart delete-icon start -->
                                        <div class="delete-cart">
                                            <a href="javascript:void(0)" class="delete-icon"><i
                                                    class="feather-trash-2"></i></a>
                                        </div>
                                        <!-- minicart delete-icon end -->
                                    </div>
                                </div>
                            </li>

                        </ul>
                        <!-- minicart-total start -->
                        <ul class="subtotal-area">
                            <li class="subtotal-info">
                                <div class="subtotal-titles">
                                    <!-- minicart total-title start -->
                                    <h6 class="cart-total">Subtotal:</h6>
                                    <!-- minicart total-title end -->
                                    <!-- minicart total-price start -->
                                    <span class="subtotal-price">€369,00</span>
                                    <!-- minicart total-price end -->
                                </div>
                            </li>
                            <li class="mini-info">
                                <!-- minicart agree-text start -->
                                <label class="box-area">
                                    <span class="agree-text">I have read and agree with the <a
                                            href="terms-condition.html">terms & condition.</a></span>
                                    <input type="checkbox" class="cust-checkbox">
                                    <span class="cust-check"></span>
                                </label>
                                <!-- minicart agree-text end -->
                                <!-- minicart button start -->
                                <div class="cart-btn">
                                    <a href="{{route('cart')}}" class="btn btn-style2">View cart</a>
                                    <a href="checkout-style1.html"
                                        class="btn btn-style2 checkout disabled">Checkout</a>
                                </div>
                                <!-- minicart button end -->
                            </li>
                        </ul>
                        <!-- minicart-total end -->
                    </div>
                    <!-- minicart end -->
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
