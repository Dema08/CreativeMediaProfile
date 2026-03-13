@extends('users.layout.main')

@section('content')

    <!--====== PROJECT GALLERY PART START ======-->

    <section class="project-masonry-area pt-115 pb-120">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-4">
                    <div class="section-title pb-20  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <h6 class="sub-title">Karya Siswa</h6>
                        <h4 class="title">Karya <span>Gallery.</span></h4>
                    </div> <!-- section title -->
                </div>
                <div class="col-lg-8">
                    <div class="project-menu text-center text-sm-left text-lg-right pb-20  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <ul>
                            <li class="{{ empty($selectedCategory) ? 'active' : '' }}" data-filter="*">
                                <a href="{{ route('karyasiswa.index') }}">Semua</a>
                            </li>
                            @foreach($categories as $category)
                                @php
                                    $categoryClass = \Illuminate\Support\Str::slug($category);
                                @endphp
                                <li class="{{ $selectedCategory === $category ? 'active' : '' }}" data-filter=".{{ $categoryClass }}">
                                    <a href="{{ route('karyasiswa.index', ['kategori' => $category]) }}">{{ $category }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div> <!-- project menu -->
                </div>
            </div> <!-- row -->
            <div class="row grid">
                @forelse($karyas as $karya)
                    @php
                        $categoryClass = $karya->kategori ? Str::slug($karya->kategori) : 'uncategorized';
                    @endphp
                    <div class="col-lg-4 col-sm-6 grid-item {{ $categoryClass }}">
                        <div class="single-gallery gallery-masonry mt-30  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="gallery-image">
                                <img src="{{ $karya->image ? asset('storage/'.$karya->image) : asset('user_assets/images/protfolio-1.jpg') }}" alt="{{ $karya->nama }}">
                            </div>
                            <div class="gallery-icon">
                                <a class="image-popup" href="{{ route('karyasiswa.show', $karya->slug) }}">
                                    <span></span>
                                </a>
                            </div>
                            <div class="portfolio-content">
                                <h4 class="title"><a href="{{ route('karyasiswa.show', $karya->slug) }}">{{ $karya->nama }}</a></h4>
                                <p class="text">{{ \Illuminate\Support\Str::limit($karya->deskripsi, 100) }}</p>
                                <a class="main-btn" href="{{ route('karyasiswa.show', $karya->slug) }}">Lihat Detail</a>
                            </div>
                        </div> <!-- single gallery -->
                    </div>
                @empty
                    <div class="col-12">
                        <p class="text-center">Belum ada karya siswa yang ditambahkan.</p>
                    </div>
                @endforelse
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PROJECT GALLERY PART ENDS ======-->

@endsection
