@extends('layouts.template')
@section('main_content')
    <section class="form-contact-3">
        <div class="about-content">
            <div class="section-capture">
                <div class="section-title">
                    <span class="sub-title">Hear from you</span>
                    <h2><span>Get in touch</span></h2>
                </div>
            </div>
        </div>
        @foreach ($shops as $shop)
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="get-info contact-detail">
                            <ul class="contact-info-list">
                                <li class="ftcon-li">
                                    <span class="con-icon"><i class="bi bi-geo"></i></span>
                                    <span class="con-add contact-block">
                                        <span>{{ $shop->address }},</span>
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
                                    <a href="https://instagram.com/michs_kitchenn"> <span class="con-icon"><i
                                                class="bi bi-instagram"></i></span></a>

                                    <div class="contact-block">
                                        <a href="" class="con-add">michs_kitchenn</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <section class="google-map">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="contact-map">
                                <div class="google-map-area">
                                    <div class="map" id="map">
                                        <iframe src="{{ $shop->map }}" width="600" height="450" style="border:0;"
                                            allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
    </section>
@endsection
