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

        @if(isset($heros) && $heros->count())
            <ol class="carousel-indicators">
                @foreach($heros as $hero)
                    <li data-target="#heroSlider" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                @endforeach
            </ol>

            <div class="carousel-inner">
                @foreach($heros as $hero)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <div class="image text-center">
                            <img src="{{ asset('storage/'.$hero->gambar) }}" class="img-fluid" alt="{{ $hero->judul }}">
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <ol class="carousel-indicators">
                <li data-target="#heroSlider" data-slide-to="0" class="active"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="image text-center">
                        <img src="{{ asset('user_assets/images/hero-image.png') }}" class="img-fluid" alt="Hero Image 1">
                    </div>
                </div>
            </div>
        @endif

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
                    <img src="{{ asset('user_assets/images/about-2.png') }}" alt="about">
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
                    <div class="section-title text-center">
                        <h6 class="sub-title">Kami dipercayai oleh:</h6>
                    </div>
                    <div class="brand-wrapper pt-70 clearfix">
                        @if(isset($partners) && $partners->count())
                            @foreach($partners as $partner)
                                <div class="single-brand mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <img src="{{ asset($partner->logo ? 'storage/'.$partner->logo : 'user_assets/images/brand-1.png') }}" alt="{{ $partner->nama_perusahaan }}">
                                </div> <!-- single brand -->
                            @endforeach
                        @else
                            <div class="single-brand mt-50 text-md-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                <img src="user_assets/images/brand-1.png" alt="brand">
                            </div> <!-- single brand -->
                            <div class="single-brand mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                <img src="user_assets/images/brand-2.png" alt="brand">
                            </div> <!-- single brand -->
                            <div class="single-brand mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                <img src="user_assets/images/brand-3.png" alt="brand">
                            </div> <!-- single brand -->
                        @endif
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
            @if(isset($teams) && $teams->count())
                @foreach($teams as $team)
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="single-team mt-30 wow fadeInUpBig">
                            <div class="team-image">
                                <img src="{{ asset($team->foto ? 'storage/'.$team->foto : 'user_assets/images/protfolio-2.jpg') }}" alt="{{ $team->nama }}">
                                <a class="plus-link" href="#"><i class="lni-plus"></i></a>
                            </div>

                            <div class="team-content text-center">
                                <h4 class="team-title">{{ $team->nama }}</h4>
                                <span class="sub-title">{{ $team->jabatan }}</span>

                                <p class="text mt-2">
                                    {{ \Illuminate\Support\Str::limit($team->history, 120) }}
                                </p>

                                <ul class="social">
                                    <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-12 text-center">
                    <p class="text-muted">Tim belum tersedia.</p>
                </div>
            @endif
        </div>
    </div>
</section>

<!--====== TEAM PART ENDS ======-->

<section class="testimonial-area pt-70 pb-120" id="testimoni">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center pb-20">
                    <h6 class="sub-title">Berikan Testimoni</h6>
                    <h4 class="title">Beri Penilaian & Tanggapan Anda</h4>
                </div>

                @if(session('success'))
                    <div class="mt-4 p-4 bg-green-100 text-green-800 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="mt-6 bg-white p-5 rounded shadow-sm">
                    <form action="{{ route('testimoni.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Nama</label>
                            <input type="text" name="nama" class="w-full px-3 py-2 border border-gray-300 rounded" value="{{ old('nama') }}" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Jabatan</label>
                            <input type="text" name="jabatan" class="w-full px-3 py-2 border border-gray-300 rounded" value="{{ old('jabatan') }}">
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Pesan</label>
                            <textarea name="pesan" class="w-full px-3 py-2 border border-gray-300 rounded" rows="3" required>{{ old('pesan') }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Rating</label>
                            <select name="rating" class="w-full px-3 py-2 border border-gray-300 rounded" required>
                                @for($i=5; $i>=1; $i--)
                                    <option value="{{ $i }}" {{ old('rating') == $i ? 'selected' : '' }}>{{ $i }} bintang</option>
                                @endfor
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Foto (opsional)</label>
                            <div class="custom-file-upload">
                                <input type="file" name="foto" id="foto" class="file-input" accept="image/*" hidden>
                                <label for="foto" class="file-label">
                                    <i class="lni-upload"></i>
                                    <span class="file-text">Pilih File</span>
                                </label>
                                <span class="file-name" id="file-name"></span>
                            </div>
                        </div>

                        <div class="text-center mt-5">
                            <button type="submit" class="main-btn">Kirim Testimoni</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
