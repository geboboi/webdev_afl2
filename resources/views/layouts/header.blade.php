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
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</header>
