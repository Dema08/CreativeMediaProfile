
@extends('users.layout.main')

@section('content')
<!--====== PAGE BANNER START ======-->

<div class="page-banner bg-cover" style="background-image: url({{ asset('user_assets/images/page-banner-1.jpg') }})">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-content wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                    <h3 class="page-title"><b>Artikel</b> & <br> Kegiatan <span>Creative Media</span></h3>
                    <p class="text-dark mt-3"> Disini Anda mendapatkan informasi & kegiatan terbaru dari Creative Media.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== PAGE BANNER END ======-->

<!--====== BLOG PART START ======-->

<section class="blog-area pt-115 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="section-title text-center pb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <h6 class="sub-title">Artikel</h6>
                    <h4 class="title">Informasi & <span>Kegiatan Terbaru</span></h4>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @forelse($artikels as $artikel)
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-blog mt-30 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="blog-image">
                            <a href="{{ route('artikel.show', $artikel) }}">
                                <img src="{{ $artikel->image ? asset('storage/' . $artikel->image) : asset('user_assets/images/blog-placeholder.jpg') }}" alt="{{ $artikel->title }}">
                            </a>
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title">
                                <a href="{{ route('artikel.show', $artikel) }}">{{ $artikel->title }}</a>
                            </h4>
                            <div class="blog-author d-flex align-items-center">
                                <div class="author-content media-body">
                                    <h6 class="sub-title">Posted by</h6>
                                    <p class="text">{{ $artikel->author }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="text-center py-5">
                        <h4>Belum ada artikel tersedia</h4>
                        <p class="text-muted">Silakan kembali lagi nanti untuk melihat artikel terbaru.</p>
                    </div>
                </div>
            @endforelse
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-pagination mt-60 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    {{ $artikels->links() }}
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== BLOG PART END ======-->
@endsection
