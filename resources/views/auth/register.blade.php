@extends('layouts.template')

@section('main_content')
<section class="breadcrumb-area">
    <div class="container">
        <div class="col">
            <div class="row">
                <div class="breadcrumb-index">
                    <!-- breadcrumb main-title start-->
                    <div class="breadcrumb-title">
                        <h2>Create account</h2>
                    </div>
                    <!-- breadcrumb main-title end-->
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item-link">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item-link">
                            <span>Create account</span>
                        </li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->
<section class="customer-page section-ptb">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="acc-form">
                    <div class="log-acc-page" id="CustomerLoginForm">
                        <!-- account title start -->
                        <div class="content-main-title">
                            <div class="section-cont-title">
                                <h2><span>Create account</span></h2>
                                <p>Please register account detail</p>
                            </div>
                        </div>
                        <!-- account title end -->
                        <!-- account login start -->
                        <div class="acc-page">
                            <div class="registers">
                                <form method="post">
                                    <div class="login-form-container">
                                        <ul class="fill-form">
                                            <li class="fname">
                                                <label>Name</label>
                                                <input type="email" name="name" class="input-full" placeholder="First name" autocomplete="off">
                                            </li>
                                            <li class="log-email">
                                                <label>Email address</label>
                                                <input type="email" name="email" class="input-full" placeholder="Email address">
                                            </li>
                                            <li class="log-pwd">
                                                <label>Password</label>
                                                <input type="password" name="password" class="input-full" placeholder="Password">
                                            </li>
                                        </ul>
                                        <div class="form-action-button">
                                            <div class="read-agree">
                                                <label>
                                                    <span class="agree-text">
                                                        I have read and agree with the
                                                        <a href="terms-condition.html">terms & condition.</a>
                                                    </span>
                                                    <input type="checkbox" name="q" class="cust-checkbox create-checkbox">
                                                    <span class="cust-check"></span>
                                                </label>
                                                <button type="submit" class="btn btn-style2 create disabled">Create</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="acc-wrapper">
                                <h6>Already have account?</h6>
                                <div class="account-optional-action">
                                    <a href="{{route('login')}}">Log in</a>
                                </div>
                            </div>
                        </div>
                        <!-- account login end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
