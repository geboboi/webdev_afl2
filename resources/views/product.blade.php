@extends('layouts.template')

@section('main_content')
<section class="main-content-wrap shop-page section-ptb">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="pro-grli-wrap product-grid">
                    <div class="collection-img-wrap">
                        <h6 class="st-title">Collection (23)</h6>
                        <!-- collection info start -->
                        <div class="collection-info">
                            <div class="collection-image">
                                <img src="{{asset('assets/img/collection/collection-banner-01.jpg')}}" class="img-fluid" alt="collection-banner-01">
                            </div>
                        </div>
                        <!-- collection info end -->
                    </div>
                    <div class="shop-top-bar">
                        <div class="product-view-mode">
                            <a href="javascript:void(0)" class="list-change-view grid-three active" data-grid-view="3"><i class="feather-grid"></i>
                            </a>
                            <a href="javascript:void(0)" data-grid-view="1" class="list-change-view list-one"><i class="feather-list"></i></a>
                        </div>
                    </div>
                    <div class="get-data-products">
                        <div class="shop-grid">
                            <div id="ProductGridContainer">
                                <div class="product-grid-view">
                                    <div class="shop-product-wrap collection grid-3">
                                        <div class="row">
                                            <div class="col">
                                                <ul class="product-view" id="product-grid">
                                                    <li class="st-col-item st-col">
                                                        <div class="single-product-wrap">
                                                            <!-- product-img start -->
                                                            <div class="product-image">
                                                                <a href="product-template2.html" class="pro-img">
                                                                    <img src="{{asset('assets/img/product/1.png')}}" class="img-fluid img1" alt="p-1">
                                                                    <img src="{{asset('assets/img/product/1.png')}}" class="img-fluid img2" alt="p-2">
                                                                </a>
                                                                <!-- product-label start -->
                                                                <!-- <div class="product-label">
                                                                    <span class="new-sale-title">New</span>
                                                                </div> -->
                                                                <!-- product-label end -->
                                                                <div class="product-action">
                                                                    <a href="wishlist-product.html" class="wishlist-product">
                                                                        <span class="tooltip-text">Wishlist</span>
                                                                        <span class="wishlist-icon"><i class="feather-heart"></i></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!-- product-img end -->
                                                            <!-- product-content start -->
                                                            <div class="product-content">
                                                                <!-- product-title start -->
                                                                <h6><a href="product-template2.html">Candy nut chocolate</a></h6>
                                                                <!-- product-title end -->
                                                                <!-- product-price start -->
                                                                <div class="price-box">
                                                                    <span class="new-price">€11,00</span>
                                                                    <span class="old-price">€19,00</span>
                                                                </div>
                                                                <!-- product-price end -->
                                                                <!-- product-description start -->
                                                                <p class="product-description">The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler...</p>
                                                                <!-- product-description end -->
                                                                <!-- product-action start -->
                                                                <div class="product-action">
                                                                    <a href="wishlist-product.html" class="wishlist-product">
                                                                        <span class="tooltip-text">Wishlist</span>
                                                                        <span class="wishlist-icon"><i class="feather-heart"></i></span>
                                                                    </a>
                                                                </div>
                                                                <!-- product-action end -->
                                                            </div>
                                                            <!-- product-content end -->
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pro-grli-wrap product-sidebar">
                    <div id="main-collection-filters">
                        <div class="shop-sidebar-inner collection">
                            <div class="shop-sidebar-wrap filter-sidebar">
                                <!-- button start -->
                                <button class="close-filter-sidebar" type="button"><i class="feather-x"></i></button>
                                <!-- button end -->
                                <!-- filter-form start -->
                                <facet-filters-form class="facets">
                                <form class="facets__form" id="FacetFiltersForm">
                                    <div id="FacetsWrapperDesktop" class="facets__wrapper">
                                        <!-- Product-Categories start -->
                                        <div class="shop-sidebar sidebar-wedget size">
                                            <h6 class="title">Categories</h6>
                                            <a href="#collapse-5" data-bs-toggle="collapse" class="title">Categories</a>
                                            <div class="collapse filter-element" id="collapse-5">
                                                <ul class="multiple-filters scrollbar">
                                                    <li class="size">
                                                        <label class="cust-checkbox-label size 16gb">
                                                            <input type="checkbox" value="16gb" class="cust-checkbox">
                                                            <span class="filter-name">Biscuits</span>
                                                            <span class="count-check">(12)</span>
                                                            <span class="cust-check"></span>
                                                        </label>
                                                    </li>
                                                    <li class="size">
                                                        <label class="cust-checkbox-label size 32gb">
                                                            <input type="checkbox" value="32gb" class="cust-checkbox">
                                                            <span class="filter-name">Black cream cakes</span>
                                                            <span class="count-check">(12)</span>
                                                            <span class="cust-check"></span>
                                                        </label>
                                                    </li>
                                                    <li class="size">
                                                        <label class="cust-checkbox-label size 64gb">
                                                            <input type="checkbox" value="64gb" class="cust-checkbox">
                                                            <span class="filter-name">Bread</span>
                                                            <span class="count-check">(12)</span>
                                                            <span class="cust-check"></span>
                                                        </label>
                                                    </li>
                                                    <li class="size">
                                                        <label class="cust-checkbox-label size 500gb">
                                                            <input type="checkbox" value="500gb" class="cust-checkbox">
                                                            <span class="filter-name">Collection</span>
                                                            <span class="count-check">(12)</span>
                                                            <span class="cust-check"></span>
                                                        </label>
                                                    </li>
                                                    <li class="size">
                                                        <label class="cust-checkbox-label size 1tb">
                                                            <input type="checkbox" value="1tb" class="cust-checkbox">
                                                            <span class="filter-name">Collection left</span>
                                                            <span class="count-check">(12)</span>
                                                            <span class="cust-check"></span>
                                                        </label>
                                                    </li>
                                                    <li class="size">
                                                        <label class="cust-checkbox-label size 2tb">
                                                            <input type="checkbox" value="2tb" class="cust-checkbox">
                                                            <span class="filter-name">Collection list</span>
                                                            <span class="count-check">(12)</span>
                                                            <span class="cust-check"></span>
                                                        </label>
                                                    </li>
                                                    <li class="size">
                                                        <label class="cust-checkbox-label size 3tb">
                                                            <input type="checkbox" value="3tb" class="cust-checkbox">
                                                            <span class="filter-name">Collection list left</span>
                                                            <span class="count-check">(12)</span>
                                                            <span class="cust-check"></span>
                                                        </label>
                                                    </li>
                                                    <li class="size">
                                                        <label class="cust-checkbox-label size 3tb">
                                                            <input type="checkbox" value="3tb" class="cust-checkbox">
                                                            <span class="filter-name">Collection right</span>
                                                            <span class="count-check">(12)</span>
                                                            <span class="cust-check"></span>
                                                        </label>
                                                    </li>
                                                    <li class="size">
                                                        <label class="cust-checkbox-label size 3tb">
                                                            <input type="checkbox" value="3tb" class="cust-checkbox">
                                                            <span class="filter-name">Cookies</span>
                                                            <span class="count-check">(12)</span>
                                                            <span class="cust-check"></span>
                                                        </label>
                                                    </li>
                                                    <li class="size">
                                                        <label class="cust-checkbox-label size 3tb">
                                                            <input type="checkbox" value="3tb" class="cust-checkbox">
                                                            <span class="filter-name">Cream bun</span>
                                                            <span class="count-check">(12)</span>
                                                            <span class="cust-check"></span>
                                                        </label>
                                                    </li>
                                                    <li class="size">
                                                        <label class="cust-checkbox-label size 3tb">
                                                            <input type="checkbox" value="3tb" class="cust-checkbox">
                                                            <span class="filter-name">Mango pastry</span>
                                                            <span class="count-check">(12)</span>
                                                            <span class="cust-check"></span>
                                                        </label>
                                                    </li>
                                                    <li class="size">
                                                        <label class="cust-checkbox-label size 3tb">
                                                            <input type="checkbox" value="3tb" class="cust-checkbox">
                                                            <span class="filter-name">Softly bread</span>
                                                            <span class="count-check">(12)</span>
                                                            <span class="cust-check"></span>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Product-Categories end -->
                                        <div class="shop-sidebar sidebar-filter">
                                            <h6 class="title">Filter</h6>
                                            <div class="facets-header">
                                                <span class="product-count-text">23 products</span>
                                                <span class="loading-spinner"><svg aria-hidden="true" focusable="false" role="presentation" class="spinner" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg"><circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle></svg></span>
                                            </div>
                                            <div class="active-filter active-facets-desktop">
                                                <ul>
                                                    <li>
                                                        <facet-remove>
                                                        <a href="javascript:void(0)" class="clear-all">Clear all</a>
                                                        </facet-remove>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="shop-sidebar sidebar-wedget">
                                            <h6 class="title">Price</h6>
                                            <a href="#collapse-3" data-bs-toggle="collapse" class="title">Price</a>
                                            <div class="facets-header">
                                                <span class="facets__selected">The highest price is $89.00</span>
                                                <facet-remove><a href="collection.html" class="facets__reset">Reset</a></facet-remove>
                                            </div>
                                            <!-- Product-price start -->
                                            <div class="collapse filter-element" id="collapse-3">
                                                <price-range class="price-range">
                                                    <div class="price-range-group group-range">
                                                        <input type="range" class="range" min="0" max="89" value="0" id="range1">
                                                        <input type="range" class="range" min="0" max="89" value="89" id="range2">
                                                    </div>
                                                    <div class="price-input-group group-input">
                                                        <div class="price-range-input input-prefix">
                                                            <label class="input-prefix-label">From</label>
                                                            <span class="input-prefix-value">$</span>
                                                            <span id="demo1" class="input-prefix-field">0</span>
                                                        </div>
                                                        <span class="price-range-delimeter">-</span>
                                                        <div class="price-range-input input-prefix">
                                                            <label class="input-prefix-label">To</label>
                                                            <span class="input-prefix-value">$</span>
                                                            <span id="demo2" class="input-prefix-field">89</span>
                                                        </div>
                                                    </div>
                                                </price-range>
                                            </div>
                                            <!-- Product-price end -->
                                            <!-- product-type start -->
                                            <div class="shop-sidebar sidebar-wedget type">
                                                <h6 class="title">Flavor</h6>
                                                <a href="#collapse-6" data-bs-toggle="collapse" class="title">Flavor</a>
                                                <div class="facets-header">
                                                    <span class="facets__selected">0 selected</span>
                                                    <facet-remove>
                                                    <a href="collection-list-right.html" class="facets__reset">Reset</a>
                                                    </facet-remove>
                                                </div>
                                                <div class="collapse filter-element" id="collapse-6">
                                                    <ul class="multiple-filters scrollbar">
                                                        <li class="product type">
                                                            <label class="cust-checkbox-label product type air-fryer">
                                                                <input type="checkbox" value="Air Fryer" class="cust-checkbox">
                                                                <span class="filter-name">Biscuit</span>
                                                                <span class="count-check">(3)</span>
                                                                <span class="cust-check"></span>
                                                            </label>
                                                        </li>
                                                        <li class="product type">
                                                            <label class="cust-checkbox-label product type car-charger">
                                                                <input type="checkbox" value="Car charger" class="cust-checkbox">
                                                                <span class="filter-name">Cheesecake</span>
                                                                <span class="count-check">(2)</span>
                                                                <span class="cust-check"></span>
                                                            </label>
                                                        </li>
                                                        <li class="product type">
                                                            <label class="cust-checkbox-label product type dslr-camera">
                                                                <input type="checkbox" value="Air Fryer" class="cust-checkbox">
                                                                <span class="filter-name">Decadent</span>
                                                                <span class="count-check">(3)</span>
                                                                <span class="cust-check"></span>
                                                            </label>
                                                        </li>
                                                        <li class="product type">
                                                            <label class="cust-checkbox-label product type earbuds">
                                                                <input type="checkbox" value="Earbuds" class="cust-checkbox">
                                                                <span class="filter-name">Funfetti</span>
                                                                <span class="count-check">(3)</span>
                                                                <span class="cust-check"></span>
                                                            </label>
                                                        </li>
                                                        <li class="product type">
                                                            <label class="cust-checkbox-label product type game">
                                                                <input type="checkbox" value="Game" class="cust-checkbox">
                                                                <span class="filter-name">Genoise</span>
                                                                <span class="count-check">(2)</span>
                                                                <span class="cust-check"></span>
                                                            </label>
                                                        </li>
                                                        <li class="product type">
                                                            <label class="cust-checkbox-label product type game-controller">
                                                                <input type="checkbox" value="Air Fryer" class="cust-checkbox">
                                                                <span class="filter-name">Pink Velvet</span>
                                                                <span class="count-check">(2)</span>
                                                                <span class="cust-check"></span>
                                                            </label>
                                                        </li>
                                                        <li class="product type">
                                                            <label class="cust-checkbox-label product type gimbal">
                                                                <input type="checkbox" value="Gimbal" class="cust-checkbox">
                                                                <span class="filter-name">Pound</span>
                                                                <span class="count-check">(2)</span>
                                                                <span class="cust-check"></span>
                                                            </label>
                                                        </li>
                                                        <li class="product type">
                                                            <label class="cust-checkbox-label product type hand-mixer">
                                                                <input type="checkbox" value="Hand mixer" class="cust-checkbox">
                                                                <span class="filter-name">Pumpkin</span>
                                                                <span class="count-check">(4)</span>
                                                                <span class="cust-check"></span>
                                                            </label>
                                                        </li>
                                                        <li class="product type">
                                                            <label class="cust-checkbox-label product type hard-drive">
                                                                <input type="checkbox" value="Hard drive" class="cust-checkbox">
                                                                <span class="filter-name">Red Velvet</span>
                                                                <span class="count-check">(4)</span>
                                                                <span class="cust-check"></span>
                                                            </label>
                                                        </li>
                                                        <li class="product type">
                                                            <label class="cust-checkbox-label product type headphone">
                                                                <input type="checkbox" value="Headphone" class="cust-checkbox">
                                                                <span class="filter-name">Sponge</span>
                                                                <span class="count-check">(4)</span>
                                                                <span class="cust-check"></span>
                                                            </label>
                                                        </li>
                                                        <li class="product type">
                                                            <label class="cust-checkbox-label product type juicer">
                                                                <input type="checkbox" value="Juicer" class="cust-checkbox">
                                                                <span class="filter-name">Tiramisu</span>
                                                                <span class="count-check">(1)</span>
                                                                <span class="cust-check"></span>
                                                            </label>
                                                        </li>
                                                        <li class="product type">
                                                            <label class="cust-checkbox-label product type keyboard">
                                                                <input type="checkbox" value="Keyboard" class="cust-checkbox">
                                                                <span class="filter-name">Vanilla</span>
                                                                <span class="count-check">(2)</span>
                                                                <span class="cust-check"></span>
                                                            </label>
                                                        </li>
                                                        <li class="product type">
                                                            <label class="cust-checkbox-label product type large-tablet">
                                                                <input type="checkbox" value="Large tablet" class="cust-checkbox">
                                                                <span class="filter-name">Velvet</span>
                                                                <span class="count-check">(2)</span>
                                                                <span class="cust-check"></span>
                                                            </label>
                                                        </li>
                                                        <li class="product type">
                                                            <label class="cust-checkbox-label product type mixer-grinder">
                                                                <input type="checkbox" value="Mixer grinder" class="cust-checkbox">
                                                                <span class="filter-name">White Velvet</span>
                                                                <span class="count-check">(2)</span>
                                                                <span class="cust-check"></span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- product-type end -->
                                        </div>
                                        <div class="shop-sidebar sidebar-wedget">
                                            <h6 class="title">Product type</h6>
                                            <a href="#collapse-2" data-bs-toggle="collapse" class="title"></a>
                                            <div class="facets-header">
                                                <span class="facets__selected no-js-hidden">0 selected</span>
                                                <facet-remove>
                                                <a href="collection.html" class="facets__reset">Reset</a>
                                                </facet-remove>
                                            </div>
                                            <div class="collapse filter-element" id="collapse-2">
                                                <ul class="multiple-filters scrollbar">
                                                    <li class="brand">
                                                        <label class="cust-checkbox-label">
                                                            <input type="checkbox" name="cust-checkbox" class="cust-checkbox">
                                                            <span class="filter-name">Bakery</span>
                                                            <span class="count-check">(23)</span>
                                                            <span class="cust-check"></span>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="shop-sidebar sidebar-wedget">
                                            <h6 class="title">Availability</h6>
                                            <a href="#collapse-1" class="title" data-bs-toggle="collapse">Availability</a>
                                            <div class="facets-header">
                                                <span class="facets__selected no-js-hidden">0 selected</span>
                                                <facet-remove>
                                                <a href="collection.html" class="facets__reset">Reset</a>
                                                </facet-remove>
                                            </div>
                                            <div class="collapse filter-element" id="collapse-1">
                                                <ul class="multiple-filters scrollbar">
                                                    <li class="availability">
                                                        <label class="cust-checkbox-label availability in-stock">
                                                            <input type="checkbox" name="filter.v.availability" value="1" class="cust-checkbox">
                                                            <span class="filter-name">In stock</span>
                                                            <span class="count-check">(23)</span>
                                                            <span class="cust-check"></span>
                                                        </label>
                                                    </li>
                                                    <li class="availability">
                                                        <label class="cust-checkbox-label availability in-stock">
                                                            <input type="checkbox" name="filter.v.availability" value="1" class="cust-checkbox">
                                                            <span class="filter-name">Out of stock</span>
                                                            <span class="count-check">(1)</span>
                                                            <span class="cust-check"></span>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="shop-sidebar sidebar-wedget">
                                            <h6 class="title">Brand</h6>
                                            <a href="#collapse-2" data-bs-toggle="collapse" class="title"></a>
                                            <div class="facets-header">
                                                <span class="facets__selected no-js-hidden">0 selected</span>
                                                <facet-remove>
                                                <a href="collection.html" class="facets__reset">Reset</a>
                                                </facet-remove>
                                            </div>
                                            <div class="collapse filter-element" id="collapse-2">
                                                <ul class="multiple-filters scrollbar">
                                                    <li class="brand">
                                                        <label class="cust-checkbox-label">
                                                            <input type="checkbox" name="cust-checkbox" class="cust-checkbox">
                                                            <span class="filter-name">Banno</span>
                                                            <span class="count-check">(23)</span>
                                                            <span class="cust-check"></span>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                </facet-filters-form>
                                <!-- filter-form end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
