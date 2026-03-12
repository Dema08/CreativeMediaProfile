<!--====== HEADER PART START ======-->

<header class="header-area">
    <div class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">

                        <!-- LOGO -->
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{ asset('user_assets/images/logo.png') }}" alt="Logo">
                        </a>

                        <!-- TOGGLE MOBILE -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <!-- MENU -->
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">

                                <li class="nav-item active">
                                    <a href="{{ url('/') }}">Beranda</a>
                                </li>

                                <li class="nav-item">
                                    <a href="">Bidang Studi</a>

                                    <ul class="sub-menu">
                                        <li>
                                            <a href="{{ url('/bidang-studi/administrasi-perkantoran') }}">
                                                Administrasi Perkantoran
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ url('/bidang-studi/komputer-akuntansi') }}">
                                                Komputer Akuntansi
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ url('/bidang-studi/digital-marketing') }}">
                                                Digital Marketing
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="">Layanan Jasa</a>

                                    <ul class="sub-menu">
                                        <li>
                                            <a href="{{ url('/layanan-jasa/branding-design') }}">
                                                Branding & Design
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ url('/layanan-jasa/web-development') }}">
                                                Web Development
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ url('/layanan-jasa/mobile-app-development') }}">
                                                Mobile App Development
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#karya">Karya Siswa</a>
                                </li>

                                <li class="nav-item">
                                    <a href="#testimoni">Testimoni</a>
                                </li>

                                <li class="nav-item">
                                    <a href="#artikel">Artikel</a>
                                </li>

                                <li class="nav-item">
                                    <a href="#kontak">Hubungi Kami</a>
                                </li>

                            </ul>
                        </div>

                        <!-- BUTTON -->
                       <div class="navbar-btn d-none d-lg-inline-block">
                            <a class="main-btn" href="{{ url('/admin/login') }}">Login</a>
                        </div>

                    </nav>
                </div>
            </div>
        </div>
    </div>

</header>

<!--====== HEADER PART ENDS ======-->
