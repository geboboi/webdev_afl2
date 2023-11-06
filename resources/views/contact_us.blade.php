@extends('layouts.template')
@section("main_content")

<section class="form-contact-3">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="about-content">
                    <!-- about title start -->
                    <div class="section-capture">
                        <div class="section-title">
                            <span class="sub-title">Hear from you</span>
                            <h2><span>Get in touch</span></h2>
                        </div>
                    </div>
                    <!-- about title end -->
                    <!-- contact-detail start -->
                    <div class="get-info contact-detail">
                        <ul class="contact-info-list">
                            <li class="ftcon-li">
                                <span class="con-icon"><i class="bi bi-geo"></i></span>
                                <span class="con-add contact-block">
                                    <span>7882, Reliance GIDC</span>
                                    <span>Chowk bazzar, New York</span>
                                </span>
                            </li>
                            <li class="ftcon-li">
                                <span class="con-icon"><i class="bi bi-telephone"></i></span>
                                <div class="contact-block">
                                    <a href="tel:(+91)123456789" class="con-add">(+00) 1 23 45 67 89</a>
                                    <a href="tel:(+91)123456789" class="con-add">(+1) 1 23 45 67 89</a>
                                </div>
                            </li>
                            <li class="ftcon-li">
                                <span class="con-icon"><i class="bi bi-envelope"></i></span>
                                <div class="contact-block">
                                    <a href="mailto:demo@support.com" class="con-add">demo@support.com</a>
                                    <a href="mailto:support@spacingtech.com" class="con-add">support@spacingtech.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- contact-detail end -->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="google-map">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="contact-map">
                    <div class="google-map-area">
                        <div class="map" id="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2353.2247386521262!2d112.62811824626638!3d-7.2821356375917645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fdff5340a0a5%3A0x357c05bea2fb03a!2sKos%20Ibu%20Ika!5e0!3m2!1sen!2sid!4v1699269655906!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
