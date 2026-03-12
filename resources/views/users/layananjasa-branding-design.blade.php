@extends('users.layout.main')

@section('content')
<section class="portfolio-details-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <!-- Gambar -->
                <div class="portfolio-details-image wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="tab-content" id="myTabContent">

                        <div class="tab-pane fade show active" id="home">
                            <img src="{{ asset('user_assets/images/portfolio-details-1.jpg') }}" alt="Branding & Design">
                        </div>

                        <div class="tab-pane fade" id="profile">
                            <img src="{{ asset('user_assets/images/portfolio-details-2.jpg') }}" alt="Branding & Design">
                        </div>

                        <div class="tab-pane fade" id="contact">
                            <img src="{{ asset('user_assets/images/portfolio-details-3.jpg') }}" alt="Branding & Design">
                        </div>

                    </div>

                    <ul class="nav" id="myTab">
                        <li class="nav-item">
                            <a class="active" data-toggle="tab" href="#home">
                                <img src="{{ asset('user_assets/images/portfolio-details-1.jpg') }}">
                            </a>
                        </li>

                        <li class="nav-item">
                            <a data-toggle="tab" href="#profile">
                                <img src="{{ asset('user_assets/images/portfolio-details-2.jpg') }}">
                            </a>
                        </li>

                        <li class="nav-item">
                            <a data-toggle="tab" href="#contact">
                                <img src="{{ asset('user_assets/images/portfolio-details-3.jpg') }}">
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Konten -->
                <div class="portfolio-details-content wow fadeInUpBig">

                    <h6 class="portfolio-sub-title">Layanan Jasa</h6>

                    <h4 class="portfolio-title">
                        Branding & Design
                    </h4>

                    <p class="text">
                        CREATIVE MEDIA adalah Digital Agency & IT Consultant di Surabaya yang
                        menyediakan layanan desain grafis dan branding dengan harga hemat
                        dan kualitas tinggi. Desain profesional membantu meningkatkan branding
                        perusahaan sebagai media komunikasi pemasaran yang efektif.
                    </p>

                    <p class="text">
                        Layanan kami mencakup desain logo, corporate identity, company profile,
                        brosur, website, flyer, banner, t-shirt, dan berbagai materi promosi lainnya.
                        Kami juga menyediakan kursus desain grafis dari tingkat basic hingga advanced
                        untuk pemula maupun profesional yang ingin menguasai desain grafis.
                    </p>

                    <p class="text">
                        Pendekatan kami menggabungkan estetika visual, tipografi, filosofi, layouting,
                        dan coloring sehingga pesan perusahaan tersampaikan dengan jelas dan efektif.
                    </p>

                    <!-- Materi / Layanan -->
                    <div class="portfolio-cdws">
                        <div class="row">

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-cdws mt-30 d-flex">
                                    <div class="cdws-icon">
                                        <i class="lni-pencil-alt"></i>
                                    </div>
                                    <div class="cdws-content">
                                        <h5 class="cdws-title">Logo Design</h5>
                                        <p class="text">Desain logo profesional</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-cdws mt-30 d-flex">
                                    <div class="cdws-icon">
                                        <i class="lni-id-card"></i>
                                    </div>
                                    <div class="cdws-content">
                                        <h5 class="cdws-title">Corporate Identity</h5>
                                        <p class="text">Business card, letterhead, envelope</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-cdws mt-30 d-flex">
                                    <div class="cdws-icon">
                                        <i class="lni-laptop"></i>
                                    </div>
                                    <div class="cdws-content">
                                        <h5 class="cdws-title">Website Design</h5>
                                        <p class="text">Website & landing page perusahaan</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-cdws mt-30 d-flex">
                                    <div class="cdws-icon">
                                        <i class="lni-brush"></i>
                                    </div>
                                    <div class="cdws-content">
                                        <h5 class="cdws-title">Marketing & Promo</h5>
                                        <p class="text">Flyer, banner, brochure, & media promosi</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div style="margin-top:40px">
                        <a href="tel:0317328540" class="main-btn">
                            Konsultasikan Sekarang
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
