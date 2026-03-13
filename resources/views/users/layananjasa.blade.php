@extends('users.layout.main')

@section('content')
<section class="portfolio-details-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <!-- Gambar -->
                <div class="portfolio-details-image wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="tab-content" id="myTabContent">
                        @php
                            $images = collect([
                                $layananjasa->image_1,
                                $layananjasa->image_2,
                                $layananjasa->image_3,
                                $layananjasa->image_4,
                            ])->filter();
                        @endphp

                        @foreach($images as $index => $image)
                            <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="slide{{ $index }}">
                                <img src="{{ asset('storage/'.$image) }}" alt="{{ $layananjasa->nama }}">
                            </div>
                        @endforeach

                        @if($images->isEmpty())
                            <div class="tab-pane fade show active" id="slide0">
                                <img src="{{ asset('user_assets/images/portfolio-details-1.jpg') }}" alt="{{ $layananjasa->nama }}">
                            </div>
                        @endif
                    </div>

                    <ul class="nav" id="myTab">
                        @if($images->isNotEmpty())
                            @foreach($images as $index => $image)
                                <li class="nav-item">
                                    <a class="{{ $loop->first ? 'active' : '' }}" data-toggle="tab" href="#slide{{ $index }}">
                                        <img src="{{ asset('storage/'.$image) }}">
                                    </a>
                                </li>
                            @endforeach
                        @else
                            <li class="nav-item">
                                <a class="active" data-toggle="tab" href="#slide0">
                                    <img src="{{ asset('user_assets/images/portfolio-details-1.jpg') }}">
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>

                <!-- Konten -->
                <div class="portfolio-details-content wow fadeInUpBig">

                    <h6 class="portfolio-sub-title">Layanan Jasa</h6>

                    <h4 class="portfolio-title">
                        {{ $layananjasa->nama }}
                    </h4>

                    <p class="text">
                        {!! nl2br(e($layananjasa->deskripsi)) !!}
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
                                        <h5 class="cdws-title">Detail Layanan</h5>
                                        <p class="text">Informasi lengkap layanan.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-cdws mt-30 d-flex">
                                    <div class="cdws-icon">
                                        <i class="lni-bulb"></i>
                                    </div>
                                    <div class="cdws-content">
                                        <h5 class="cdws-title">Konsultasi</h5>
                                        <p class="text">Kami siap membantu kebutuhan bisnis Anda.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-cdws mt-30 d-flex">
                                    <div class="cdws-icon">
                                        <i class="lni-certificate"></i>
                                    </div>
                                    <div class="cdws-content">
                                        <h5 class="cdws-title">Spotlight</h5>
                                        <p class="text">Portofolio dan hasil pekerjaan.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-cdws mt-30 d-flex">
                                    <div class="cdws-icon">
                                        <i class="lni-checkmark-circle"></i>
                                    </div>
                                    <div class="cdws-content">
                                        <h5 class="cdws-title">Jaminan</h5>
                                        <p class="text">Kualitas dan hasil optimal.</p>
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
