@extends('users.layout.main')

@section('content')

{{-- PRELOADER --}}
<div class="preloader">
    <div class="loader">
        <div class="ytp-spinner">
            <div class="ytp-spinner-container">
                <div class="ytp-spinner-rotator">
                    <div class="ytp-spinner-left">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                    <div class="ytp-spinner-right">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- HERO --}}
<!-- HERO SECTION -->
    <div class="header-hero bg_cover d-lg-flex align-items-center"
        style="background-image: url({{ asset('user_assets/images/header-hero.jpg') }})">

        <div class="container">
            <div class="row">
                <div class="col-lg-7">

                    <div class="header-hero-content">

                        <h1 class="hero-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                            <b>Creative Media</b>
                            <span>Digital Agency</span>
                            & IT Training
                        </h1>

                        <p class="text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            Kursus IT & Multimedia serta layanan Digital Agency untuk membantu
                            pengembangan skill dan digitalisasi bisnis Anda.
                        </p>

                        <div class="header-singup wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">
                            <input type="text" placeholder="Masukkan Email Anda">
                            <button class="main-btn">Daftar</button>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="header-hero-image d-flex align-items-center wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="1.1s">
    <div id="heroSlider" class="carousel slide w-100" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#heroSlider" data-slide-to="0" class="active"></li>
            <li data-target="#heroSlider" data-slide-to="1"></li>
            <li data-target="#heroSlider" data-slide-to="2"></li>
            <li data-target="#heroSlider" data-slide-to="3"></li>
            <li data-target="#heroSlider" data-slide-to="4"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="image text-center">
                    <img src="{{ asset('user_assets/images/hero-image.png') }}" class="img-fluid" alt="Hero Image 1">
                </div>
            </div>

            <div class="carousel-item">
                <div class="image text-center">
                    <img src="{{ asset('user_assets/images/hero-image.png') }}" class="img-fluid" alt="Hero Image 2">
                </div>
            </div>

            <div class="carousel-item">
                <div class="image text-center">
                    <img src="{{ asset('user_assets/images/hero-image.png') }}" class="img-fluid" alt="Hero Image 3">
                </div>
            </div>

            <div class="carousel-item">
                <div class="image text-center">
                    <img src="{{ asset('user_assets/images/hero-image.png') }}" class="img-fluid" alt="Hero Image 3">
                </div>
            </div>

            <div class="carousel-item">
                <div class="image text-center">
                    <img src="{{ asset('user_assets/images/hero-image.png') }}" class="img-fluid" alt="Hero Image 3">
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#heroSlider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroSlider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

    </div>


{{-- OUR SERVICES --}}
<section class="services-area-2 pt-115">
    <div class="container">
        <div class="row justify-content-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-9">
                <div class="section-title text-center pb-15">
                    <h6 class="sub-title">Our Services</h6>
                    <h4 class="title">IT & Multimedia Training, Branding, <span>Web and Mobile Development</span></h4>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Course & Training -->
            <div class="col-lg-4 col-md-6">
                <div class="single-service-2 d-flex mt-30 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.4s">
                    <div class="service-icon">
                        <i class="lni-graduation"></i>
                    </div>
                    <div class="service-content media-body">
                        <h4 class="title"><a href="#">Course & Trainings</a></h4>
                        <p class="text">
                            Kursus dan pelatihan IT & Multimedia dengan biaya terjangkau meliputi Digital Marketing,
                            Animasi, Photography, Graphic Design, Interior & Arsitektur Design, Web Design,
                            Programming Web, Akuntansi, Video Editing, dan lainnya.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Branding & Design -->
            <div class="col-lg-4 col-md-6">
                <div class="single-service-2 d-flex mt-30 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.6s">
                    <div class="service-icon">
                        <i class="lni-brush"></i>
                    </div>
                    <div class="service-content media-body">
                        <h4 class="title"><a href="#">Branding & Design</a></h4>
                        <p class="text">
                            Tingkatkan branding perusahaan Anda dengan layanan desain profesional.
                            Kami menyediakan jasa branding dan desain berkualitas untuk meningkatkan
                            komunikasi dan promosi bisnis Anda.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Web Development -->
            <div class="col-lg-4 col-md-6">
                <div class="single-service-2 d-flex mt-30 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.8s">
                    <div class="service-icon">
                        <i class="lni-code"></i>
                    </div>
                    <div class="service-content media-body">
                        <h4 class="title"><a href="#">Web Development</a></h4>
                        <p class="text">
                            Jasa pembuatan website menarik dan powerful seperti Company Profile,
                            E-Commerce, Website Sekolah, Instansi Pemerintah, Forum, dan Komunitas
                            dengan fitur SEO agar website mudah ditemukan di Google.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Mobile Apps Development -->
            <div class="col-lg-4 col-md-6">
                <div class="single-service-2 d-flex mt-30 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="1s">
                    <div class="service-icon">
                        <i class="lni-mobile"></i>
                    </div>
                    <div class="service-content media-body">
                        <h4 class="title"><a href="#">Mobile Apps Development</a></h4>
                        <p class="text">
                            Pengembangan aplikasi mobile berbasis Android dan iOS untuk membantu
                            bisnis Anda menjangkau pelanggan lebih luas dengan akses informasi
                            yang mudah kapan saja dan dimana saja.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!--====== ABOUT PART START ======-->

<section class="about-area-2 pt-70 pb-100">
    <div class="container">
        <div class="row">

            <!-- IMAGE -->
            <div class="col-lg-6">
                <div class="about-image-2 text-center mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                    <img src="{{ asset('user_assets/images/about-2.jpg') }}" alt="about">
                </div>
            </div>

            <!-- CONTENT -->
            <div class="col-lg-6">
                <div class="about-content-2 mt-45 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">

                    <div class="section-title">
                        <h6 class="sub-title">About Us</h6>
                        <h4 class="title">
                            Creative Media <br>
                            Digital Agency & <span>IT Consultant <br> in Surabaya</span>
                        </h4>
                    </div>

                    <ul class="about-line">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>

                    <p class="text">
                        <strong>Creative Media</strong> merupakan Digital Agency & IT Consultant yang
                        berlokasi di Surabaya dan berfokus pada layanan
                        <b>Computer Course & Training, Branding & Design, Web Development,
                        serta Mobile Apps Development.</b>
                        <br><br>

                        Kami menyediakan berbagai program pelatihan IT & Multimedia dengan
                        <b>15 bidang studi unggulan</b> seperti Desain Grafis, Animasi,
                        Digital Marketing, Desain Interior, Desain Arsitektur,
                        Administrasi Perkantoran, Komputer Akuntansi,
                        Editing Video Multimedia, Web Design CMS, Programming Web,
                        Android Development, Photography, dan lainnya.

                        <br><br>

                        Selain pelatihan, kami juga memiliki divisi
                        <b>Development</b> yang berfokus pada pengembangan Website,
                        Sistem Aplikasi Perusahaan, serta Aplikasi Mobile
                        Android dan iOS untuk mendukung digitalisasi bisnis Anda.
                        <br><br>

                        Kami juga <b>BERANI memberikan GARANSI 100% sampai bisa</b>
                        bagi peserta pelatihan agar benar-benar menguasai
                        materi yang dipelajari.
                    </p>

                    <!-- COUNTER -->
                    <div class="about-counter pt-60">
                        <div class="row">

                            <div class="col-sm-6">
                                <div class="single-counter counter-color-4 mt-30 d-flex">
                                    <div class="counter-shape">
                                        <span class="shape-1"></span>
                                        <span class="shape-2"></span>
                                    </div>
                                    <div class="counter-content media-body">
                                        <span class="counter-count">
                                            <span class="counter">98</span>%
                                        </span>
                                        <p class="text">IT & Multimedia Training</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="single-counter counter-color-5 mt-30 d-flex">
                                    <div class="counter-shape">
                                        <span class="shape-1"></span>
                                        <span class="shape-2"></span>
                                    </div>
                                    <div class="counter-content media-body">
                                        <span class="counter-count">
                                            <span class="counter">90</span>%
                                        </span>
                                        <p class="text">Branding & Design Projects</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="single-counter counter-color-4 mt-30 d-flex">
                                    <div class="counter-shape">
                                        <span class="shape-1"></span>
                                        <span class="shape-2"></span>
                                    </div>
                                    <div class="counter-content media-body">
                                        <span class="counter-count">
                                            <span class="counter">96</span>%
                                        </span>
                                        <p class="text">Web Development</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="single-counter counter-color-5 mt-30 d-flex">
                                    <div class="counter-shape">
                                        <span class="shape-1"></span>
                                        <span class="shape-2"></span>
                                    </div>
                                    <div class="counter-content media-body">
                                        <span class="counter-count">
                                            <span class="counter">94</span>%
                                        </span>
                                        <p class="text">Mobile Apps Development</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!--====== ABOUT PART ENDS ======-->

    <!--====== BRAND PART START ======-->

    <div class="brand-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-wrapper pt-70 clearfix">
                        <div class="single-brand mt-50 text-md-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <img src="user_assets/images/brand-1.png" alt="brand">
                        </div> <!-- single brand -->
                        <div class="single-brand mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                            <img src="user_assets/images/brand-2.png" alt="brand">
                        </div> <!-- single brand -->
                        <div class="single-brand mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                            <img src="user_assets/images/brand-3.png" alt="brand">
                        </div> <!-- single brand -->
                        <div class="single-brand mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="user_assets/images/brand-4.png" alt="brand">
                        </div> <!-- single brand -->
                        <div class="single-brand mt-50 text-md-right wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                            <img src="user_assets/images/brand-5.png" alt="brand">
                        </div> <!-- single brand -->
                        <div class="single-brand mt-50 text-md-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                            <img src="user_assets/images/brand-5.png" alt="brand">
                        </div> <!-- single brand -->
                        <div class="single-brand mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                            <img src="user_assets/images/brand-4.png" alt="brand">
                        </div> <!-- single brand -->
                        <div class="single-brand mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                            <img src="user_assets/images/brand-3.png" alt="brand">
                        </div> <!-- single brand -->
                        <div class="single-brand mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                            <img src="user_assets/images/brand-2.png" alt="brand">
                        </div> <!-- single brand -->
                        <div class="single-brand mt-50 text-md-right wow fadeIn" data-wow-duration="1s" data-wow-delay="1.1s">
                            <img src="user_assets/images/brand-1.png" alt="brand">
                        </div> <!-- single brand -->
                    </div> <!-- brand wrapper -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>

    <!--====== BRAND PART ENDS ======-->
    <!--====== TEAM PART START ======-->

<section class="team-area pt-115">
    <div class="container">

        <!-- TITLE -->
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-9">
                <div class="section-title text-center pb-20 wow fadeInUpBig">
                    <h6 class="sub-title">Our Teams</h6>
                    <h4 class="title">
                        Tim kami dari kalangan <span>Praktisi, Dosen dan Akademisi Profesional</span>
                    </h4>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">

            <!-- TEAM MEMBER -->
            <div class="col-lg-4 col-md-6 col-sm-9">
                <div class="single-team mt-30 wow fadeInUpBig">
                    <div class="team-image">
                        <img src="{{ asset('user_assets/images/protfolio-2.jpg') }}" alt="Team">
                        <a class="plus-link" href="#"><i class="lni-plus"></i></a>
                    </div>

                    <div class="team-content text-center">
                        <h4 class="team-title">Ayu Sarwinasih</h4>
                        <span class="sub-title">Customer Service Officer</span>

                        <p class="text mt-2">
                            Berpengalaman dalam pelayanan customer dan
                            menguasai Microsoft Office serta komunikasi pelanggan.
                        </p>

                        <ul class="social">
                            <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- TEAM MEMBER -->
            <div class="col-lg-4 col-md-6 col-sm-9">
                <div class="single-team mt-30 wow fadeInUpBig">
                    <div class="team-image">
                        <img src="{{ asset('user_assets/images/protfolio-2.jpg') }}" alt="Team">
                        <a class="plus-link" href="#"><i class="lni-plus"></i></a>
                    </div>

                    <div class="team-content text-center">
                        <h4 class="team-title">Dhea Choirunissa S. A.</h4>
                        <span class="sub-title">Customer Service Officer</span>

                        <p class="text mt-2">
                            Berpengalaman di front desk service dan pelayanan
                            profesional kepada calon customer.
                        </p>

                        <ul class="social">
                            <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- TEAM MEMBER -->
            <div class="col-lg-4 col-md-6 col-sm-9">
                <div class="single-team mt-30 wow fadeInUpBig">
                    <div class="team-image">
                        <img src="{{ asset('user_assets/images/protfolio-2.jpg') }}" alt="Team">
                        <a class="plus-link" href="#"><i class="lni-plus"></i></a>
                    </div>

                    <div class="team-content text-center">
                        <h4 class="team-title">Tsatyana Ulfah</h4>
                        <span class="sub-title">Manager HR & GA</span>

                        <p class="text mt-2">
                            Berpengalaman sebagai manager perusahaan
                            dan memiliki background pendidikan serta HR management.
                        </p>

                        <ul class="social">
                            <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- TEAM MEMBER -->
            <div class="col-lg-4 col-md-6 col-sm-9">
                <div class="single-team mt-30 wow fadeInUpBig">
                    <div class="team-image">
                        <img src="{{ asset('user_assets/images/protfolio-2.jpg') }}" alt="Team">
                        <a class="plus-link" href="#"><i class="lni-plus"></i></a>
                    </div>

                    <div class="team-content text-center">
                        <h4 class="team-title">Rida Annisa Ramadhani</h4>
                        <span class="sub-title">Admin & Finance</span>

                        <p class="text mt-2">
                            Berpengalaman dalam bidang finance,
                            perpajakan dan administrasi perusahaan.
                        </p>

                        <ul class="social">
                            <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- TEAM MEMBER -->
            <div class="col-lg-4 col-md-6 col-sm-9">
                <div class="single-team mt-30 wow fadeInUpBig">
                    <div class="team-image">
                        <img src="{{ asset('user_assets/images/protfolio-2.jpg') }}" alt="Team">
                        <a class="plus-link" href="#"><i class="lni-plus"></i></a>
                    </div>

                    <div class="team-content text-center">
                        <h4 class="team-title">Safira Salsabila</h4>
                        <span class="sub-title">Trainer IT & Multimedia</span>

                        <p class="text mt-2">
                            Menguasai software desain grafis dan interior
                            seperti Photoshop, Illustrator, AutoCAD, SketchUp.
                        </p>

                        <ul class="social">
                            <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- TEAM MEMBER -->
            <div class="col-lg-4 col-md-6 col-sm-9">
                <div class="single-team mt-30 wow fadeInUpBig">
                    <div class="team-image">
                        <img src="{{ asset('user_assets/images/protfolio-2.jpg') }}" alt="Team">
                        <a class="plus-link" href="#"><i class="lni-plus"></i></a>
                    </div>

                    <div class="team-content text-center">
                        <h4 class="team-title">M Nailul Abrori</h4>
                        <span class="sub-title">Web & Android Programming</span>

                        <p class="text mt-2">
                            Berpengalaman sebagai programmer sejak 2015
                            dalam pengembangan website dan aplikasi Android.
                        </p>

                        <ul class="social">
                            <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!--====== TEAM PART ENDS ======-->
@endsection
