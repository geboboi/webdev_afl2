@extends('layouts.template')
@section('main_content')
<section class="about-area">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="about-content">
                    <!-- about title start -->
                    <div class="section-capture">
                        <div class="section-title">
                            <span class="sub-title">Amazing things</span>
                            <h2><span>About us</span></h2>
                        </div>
                    </div>
                    <!-- about title end -->
                    <!-- about banner start -->
                    <div class="about-banner">
                        <div class="about-banner-area">
                            <ul>
                                <!-- about img start -->
                                <li class="about-company">
                                    <img src="{{asset('assets/img/about-us/our-company.png')}}" class="img-fluid" alt="our-company">
                                </li>
                                <!-- about img end -->
                                <!-- about desc start -->
                                <li class="abt-desc">
                                    <h6>Our company</h6>
                                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet conse ctetur adipisicing elit.</p>
                                </li>
                                <!-- about desc end -->
                            </ul>
                        </div>
                        <div class="about-banner-area">
                            <ul>
                                <!-- about img start -->
                                <li class="about-company">
                                    <img src="{{asset('assets/img/about-us/Team-work.png')}}" class="img-fluid" alt="Team-work">
                                </li>
                                <!-- about img end -->
                                <!-- about desc start -->
                                <li class="abt-desc">
                                    <h6>Team work</h6>
                                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet conse ctetur adipisicing elit.</p>
                                </li>
                                <!-- about desc end -->
                            </ul>
                        </div>
                    </div>
                    <!-- about banner end -->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-vision">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="abt-vision">
                    <ul>
                        <li>
                            <div class="abt-vision-content">
                                <img src="{{asset('assets/img/about-us/Our-mission.png')}}" class="img-fluid" alt="Our-mission">
                                <h6>Our mission</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry's standard dummy text ever since the 1500s</p>
                            </div>
                        </li>
                        <li>
                            <div class="abt-vision-content">
                                <img src="{{asset('assets/img/about-us/Our-vision.png')}}" class="img-fluid" alt="Our-vision">
                                <h6>Our vision</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry's standard dummy text ever since the 1500s</p>
                            </div>
                        </li>
                        <li>
                            <div class="abt-vision-content">
                                <img src="{{asset('assets/img/about-us/Our-idea.png')}}" class="img-fluid" alt="Our-idea">
                                <h6>Our idea</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry's standard dummy text ever since the 1500s</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
