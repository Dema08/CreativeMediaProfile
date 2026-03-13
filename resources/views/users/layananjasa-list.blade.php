@extends('users.layout.main')

@section('content')
<section class="portfolio-details-area pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center mb-60">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h6 class="sub-title">Layanan Jasa</h6>
                    <h4 class="title">Pilih layanan yang sesuai dengan kebutuhan bisnis Anda</h4>
                </div>
            </div>
        </div>

        <div class="row">
            @forelse($layanans as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="portfolio-image">
                            <img src="{{ asset($item->image_1 ? 'storage/'.$item->image_1 : 'user_assets/images/portfolio-details-1.jpg') }}" alt="{{ $item->nama }}">
                        </div>
                        <div class="portfolio-content">
                            <h4 class="title"><a href="{{ route('layanan.show', $item->slug) }}">{{ $item->nama }}</a></h4>
                            <p class="text">{{ \Illuminate\Support\Str::limit($item->deskripsi, 120) }}</p>
                            <a class="main-btn" href="{{ route('layanan.show', $item->slug) }}">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-center">Belum ada layanan yang ditambahkan.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
@endsection
