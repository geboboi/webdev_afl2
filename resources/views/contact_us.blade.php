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
                                <a href="https://www.google.com/maps/place/Jl.+Penjaringan+Asri+X+No.30,+Penjaringan+Sari,+Kec.+Rungkut,+Surabaya,+Jawa+Timur+60297/@-7.324074,112.786919,16z/data=!4m5!3m4!1s0x2dd7fa955574ee7f:0xf1737a0d2d8d8cb0!8m2!3d-7.324074!4d112.7869189?hl=en&entry=ttu">
                                    <span class="con-icon"><i class="bi bi-geo"></i></span>
                                </a>
                                <span class="con-add contact-block">
                                    <span>Jl. Penjaringan Asri X no. 30,</span>
                                    <span>Rungkut, Surabaya</span>
                                </span>
                            </li>
                            <li class="ftcon-li">
                                <span class="con-icon"><i class="bi bi-telephone"></i></span>
                                <div class="contact-block">
                                    <a href="#" class="con-add">(+62) 87798165115</a>
                                </div>
                            </li>
                            <li class="ftcon-li">
                                <a href="https://instagram.com/michs_kitchenn"> <span class="con-icon"><i class="bi bi-instagram"></i></span></a>

                                <div class="contact-block">
                                    <a href="" class="con-add">michs_kitchenn</a>
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
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.2653052175897!2d112.78434397554183!3d-7.324068672026631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa955574ee7f%3A0xf1737a0d2d8d8cb0!2sJl.%20Penjaringan%20Asri%20X%20No.30%2C%20Penjaringan%20Sari%2C%20Kec.%20Rungkut%2C%20Surabaya%2C%20Jawa%20Timur%2060297!5e0!3m2!1sen!2sid!4v1699518160849!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
