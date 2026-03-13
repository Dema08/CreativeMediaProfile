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
                                $bidangstudi->image_1,
                                $bidangstudi->image_2,
                                $bidangstudi->image_3,
                                $bidangstudi->image_4,
                            ])->filter();
                        @endphp

                        @foreach($images as $index => $image)
                            <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="slide{{ $index }}">
                                <img src="{{ asset('storage/'.$image) }}" alt="{{ $bidangstudi->nama }}">
                            </div>
                        @endforeach

                        @if($images->isEmpty())
                            <div class="tab-pane fade show active" id="slide0">
                                <img src="{{ asset('user_assets/images/portfolio-details-1.jpg') }}" alt="{{ $bidangstudi->nama }}">
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

                    <h6 class="portfolio-sub-title">Bidang Studi</h6>

                    <h4 class="portfolio-title">
                        {{ $bidangstudi->nama }}
                    </h4>

                    <p class="text">
                        {!! nl2br(e($bidangstudi->deskripsi)) !!}
                    </p>

                    <div style="margin-top:40px">
                        <a href="#" class="main-btn">
                            Daftar Kursus Sekarang
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection
