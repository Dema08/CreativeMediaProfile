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

                                <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                                    <a href="{{ url('/') }}">Beranda</a>
                                </li>

                                @php
                                    $bidangStudis = \App\Models\BidangStudi::all();
                                    $layananJasas = \App\Models\LayananJasa::all();
                                @endphp

                                <li class="nav-item {{ request()->routeIs('bidangstudi.*') ? 'active' : '' }}">
                                    <a href="{{ route('bidangstudi.index') }}">Bidang Studi</a>

                                    <ul class="sub-menu">
                                        @forelse($bidangStudis as $item)
                                            <li>
                                                <a href="{{ route('bidangstudi.show', $item->slug) }}">
                                                    {{ $item->nama }}
                                                </a>
                                            </li>
                                        @empty
                                            <li>
                                                <span class="text-gray-500">Tidak ada bidang studi</span>
                                            </li>
                                        @endforelse
                                    </ul>
                                </li>

                                <li class="nav-item {{ request()->routeIs('layanan.*') ? 'active' : '' }}">
                                    <a href="{{ route('layanan.index') }}">Layanan Jasa</a>

                                    <ul class="sub-menu">
                                        @forelse($layananJasas as $item)
                                            <li>
                                                <a href="{{ route('layanan.show', $item->slug) }}">
                                                    {{ $item->nama }}
                                                </a>
                                            </li>
                                        @empty
                                            <li>
                                                <span class="text-gray-500">Tidak ada layanan</span>
                                            </li>
                                        @endforelse
                                    </ul>
                                </li>


                                <li class="nav-item">
                                    <a href="{{ url('/karya-siswa') }}">Karya Siswa</a>
                                </li>

                                <li class="nav-item {{ request()->routeIs('testimoni.*') ? 'active' : '' }}">
                                    <a href="{{ route('testimoni.index') }}">Testimoni</a>
                                </li>

                                <li class="nav-item {{ request()->routeIs('artikel.*') ? 'active' : '' }}">
                                    <a href="{{ route('artikel.index') }}">Artikel</a>
                                </li>

                                <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                                    <a href="{{ route('contact') }}">Hubungi Kami</a>
                                </li>

                            </ul>
                        </div>

                        <!-- BUTTON -->
                       <div class="navbar-btn d-none d-lg-inline-block">
                            @if(auth('admin')->check())
                                <a class="main-btn" href="{{ route('admin.dashboard') }}">Dashboard</a>
                            @else
                                <a class="main-btn" href="{{ url('/admin/login') }}">Login</a>
                            @endif
                        </div>

                    </nav>
                </div>
            </div>
        </div>
    </div>

</header>

<!--====== HEADER PART ENDS ======-->
