@extends('layouts.template')

@section('main_content')
<section class="breadcrumb-area">
    <div class="container">
        <div class="col">
            <div class="row">
                <div class="breadcrumb-index">
                    <!-- breadcrumb main-title start-->
                    <div class="breadcrumb-title">
                        <h2>Account</h2>
                    </div>
                    <!-- breadcrumb main-title end-->
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item-list">
                            <a href={{route('landing')}}>Home</a>
                        </li>
                        <li class="breadcrumb-item-list">
                            <span>Account</span>
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
                                <h2><span>Login account</span></h2>
                                <p>Please login account detail</p>
                            </div>
                        </div>
                        <!-- account title end -->
                        <!-- account login start -->
                        <div class="acc-page">
                            <div class="login">
                                @if (Session::has('error'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('error') }}
                                    </div>
                                @endif
                                <form method="POST" action="{{ route('login.action') }}">
                                    @csrf
                                    <div class="login-form-container">
                                        <ul class="fill-form">
                                            <li class="log-email">
                                                <label>Email address</label>
                                                <input type="email" name="email" class="input-full" placeholder="Email address" autocomplete="off" value="{{ old('email') }}">
                                                @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </li>
                                            <li class="log-pwd">
                                                <label>Password</label>
                                                <input type="password" name="password" class="input-full" placeholder="Password">
                                            </li>
                                        </ul>
                                        <div class="form-action-button">
                                            <button type="submit" class="btn btn-style2">Sign In</button>
                                            <a href="javascript:void(0)" onclick="myFunction()">Forgot your password?</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="acc-wrapper">
                                <h6>Don't have account?</h6>
                                <div class="account-optional-action">
                                    <a href="{{route('register')}}">Create account</a>
                                </div>
                            </div>
                        </div>
                        <!-- account login end -->
                    </div>
                    <div class="log-acc-page" id="RecoverPasswordForm" style="display: none;">
                        <!-- account title start -->
                        <div class="content-main-title">
                            <div class="section-cont-title">
                                <h2>
                                <span class="title-main">Reset your password</span>
                                </h2>
                                <p>We will send you an email to reset your password.</p>
                            </div>
                        </div>
                        <!-- account title end -->
                        <!-- account login start -->
                        <div class="acc-page">
                            <div class="login">
                                <form method="post">
                                    <div class="login-form-container">
                                        <ul class="fill-form">
                                            <li class="log-email">
                                                <label>Email address</label>
                                                <input type="email" name="q" class="input-full" placeholder="Email address" autocomplete="off">
                                            </li>
                                            <li class="form-toggle-btn">
                                                <div class="form-action-button">
                                                    <button type="submit" class="btn btn-style2">Submit</button>
                                                    <a onclick="myFunction()" href="javascript:void(0)">Cancel</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- account login end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    function myFunction() {
    var x = document.getElementById("RecoverPasswordForm");
    var y= document.getElementById("CustomerLoginForm");
    if (x.style.display === "none") {
    x.style.display = "block";
    }
    else {
    x.style.display = "none";
    }
    if (y.style.display === "none") {
    y.style.display = "block";
    }
    else {
    y.style.display = "none";
    }
    }
    </script>
</section>
@endsection
