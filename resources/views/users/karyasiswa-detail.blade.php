@extends('users.layout.main')

@section('content')
<section class="portfolio-details-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <!-- Gambar -->
                <div class="portfolio-details-image wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
                    <img src="{{ $karya->image ? asset('storage/'.$karya->image) : asset('user_assets/images/portfolio-details-1.jpg') }}" alt="{{ $karya->nama }}">
                </div>

                <!-- Konten -->
                <div class="portfolio-details-content wow fadeInUpBig">

                    <h6 class="portfolio-sub-title">Karya Siswa</h6>

                    <h4 class="portfolio-title">
                        {{ $karya->nama }}
                    </h4>

                    @if($karya->kategori)
                        <p class="text"><strong>Kategori:</strong> {{ $karya->kategori }}</p>
                    @endif

                    <p class="text">
                        {!! nl2br(e($karya->deskripsi)) !!}
                    </p>

                    <div style="margin-top:40px">
                        <a href="{{ route('karyasiswa.index') }}" class="main-btn">
                            Kembali ke Galeri
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
