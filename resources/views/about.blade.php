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
                                    <img src="{{asset('assets/img/about-us/our-company.svg')}}" class="img-fluid" alt="our-company" width="500px">
                                </li>
                                <!-- about img end -->
                                <!-- about desc start -->
                                <li class="abt-desc">
                                    <h6>Our company</h6>
                                    <p>Mich's Kitchen adalah toko pastry yang berdiri sejak Juli 2022. Kami adalah sebuah usaha keluarga yang telah melayani pelanggan setia selama bertahun-tahun dengan berbagai macam pastry berkualitas tinggi. Sebagai penerus keluarga, kami berkomitmen untuk menjaga tradisi dan kualitas yang telah diwariskan dari generasi ke generasi.<br><br>

                                        Kami memahami bahwa makanan adalah cara untuk merayakan momen-momen istimewa dalam hidup Anda. Itulah mengapa kami selalu berusaha keras untuk menyajikan pastry yang segar dan lezat, sesuai dengan cita rasa dan standar kualitas tertinggi.
                                        
                                        Kami percaya bahwa setiap hidangan yang kami buat adalah karya seni yang memadukan rasa, tekstur, dan cinta dalam setiap gigitan. Kami bangga bisa berbagi kelezatan pastry kami dengan Anda.</p>
                                </li>
                                <!-- about desc end -->
                            </ul>
                        </div>
                        <div class="about-banner-area">
                            <ul>
                                <!-- about img start -->
                                <li class="about-company">
                                    <img src="{{asset('assets/img/about-us/teamwork.svg')}}" class="img-fluid" alt="Team-work" width="550px">
                                </li>
                                <!-- about img end -->
                                <!-- about desc start -->
                                <li class="abt-desc">
                                    <h6>Team work</h6>
                                    <p>Kami adalah tim yang terdiri dari para ahli pastry yang bersemangat dan berdedikasi. Setiap anggota tim kami berbagi cinta yang sama terhadap seni kuliner dan berusaha untuk memberikan yang terbaik kepada Anda, pelanggan kami. Kami selalu senang bisa mendengarkan feedback Anda dan terus memperbaiki produk kami.<br><br>
                                        Terima kasih atas dukungan Anda selama ini, dan kami berharap dapat melayani Anda dengan pastry lezat kami di Mich's Kitchen. Jika Anda memiliki pertanyaan atau saran, jangan ragu untuk menghubungi kami. Kami selalu siap untuk melayani Anda. <br><br>
                                        Terima kasih dan selamat menikmati pengalaman berkuliner di <strong>Mich's Kitchen!</strong>
                                        </p>
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
                                <img src="{{asset('assets/img/about-us/mission.svg')}}" class="img-fluid" alt="Our-mission" width="200px">
                                <h6>Our mission</h6>
                                <p>Memberikan pengalaman kuliner yang tak terlupakan kepada pelanggan kami dengan pastry berkualitas tinggi.</p>
                            </div>
                        </li>
                        <li>
                            <div class="abt-vision-content">
                                <img src="{{asset('assets/img/about-us/vision.svg')}}" class="img-fluid" alt="Our-vision" width="200px">
                                <h6>Our vision</h6>
                                <p>Menjadi destinasi utama bagi semua pecinta pastry, di mana mereka dapat menemukan berbagai pilihan pastry lezat yang disajikan dengan penuh cinta dan keramahan.</p>
                            </div>
                        </li>
                        <li>
                            <div class="abt-vision-content">
                                <img src="{{asset('assets/img/about-us/idea.svg')}}" class="img-fluid" alt="Our-idea" width="150px">
                                <h6>Our idea</h6>
                                <p>Kami memanfaatkan bahan-bahan berkualitas tinggi dan resep warisan keluarga yang telah teruji waktu.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
