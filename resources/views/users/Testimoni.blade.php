@extends('users.layout.main')

@section('content')

<!--====== TESTIMONIAL PART START ======-->

<section class="testimonial-area pt-80 pb-120">
    <div class="container">
        <div class="row justify-content-between align-items-start">

            <!-- LEFT CONTENT -->
            <div class="col-xl-5 col-lg-6">
                <div class="testimonial-left-content mt-45 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">

                    <div class="section-title mb-4">
                        <h6 class="sub-title">Testimoni</h6>
                        <h4 class="title">Creative Media – Digital Agency & IT Consultant</h4>
                    </div>

                    <ul class="testimonial-line mb-4">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>

                    <p class="text mb-4">
                        <strong>Creative Media</strong> merupakan perusahaan <strong>Digital Agency & IT Consultant di Surabaya</strong>
                        yang berfokus pada pengembangan keterampilan teknologi dan solusi digital untuk individu maupun perusahaan.
                        Kami menyediakan berbagai program <strong>Computer Course & Training, Branding & Design, Web Development,
                        serta Mobile Apps Development</strong>.
                    </p>

                    <p class="text mb-4">
                        Creative Media memiliki <strong>15 bidang studi unggulan</strong> yang dirancang untuk menjawab kebutuhan dunia
                        digital saat ini, di antaranya: Komputer Umum & Internet, Desain Grafis, Animasi, Digital Marketing,
                        Desain Interior, Desain Arsitektur, Administrasi Perkantoran, Komputer Akuntansi, Editing Video Multimedia,
                        Website Design CMS, Web Designer, Programming Web, Programming Java Android, serta Photography.
                    </p>

                    <p class="text mb-4">
                        Selain kursus dan pelatihan IT Multimedia, Creative Media juga memiliki
                        <strong>Divisi Development</strong> yang berfokus pada pengembangan teknologi seperti
                        <strong>Website Development, Sistem Aplikasi Perusahaan, serta Aplikasi Android & iOS</strong>.
                        Kami siap membantu perusahaan yang ingin melakukan digitalisasi sistem dan pengembangan solusi IT yang
                        inovatif serta efisien.
                    </p>

                    <p class="text mb-4">
                        Jika Anda membutuhkan konsultasi terkait kebutuhan IT, pengembangan aplikasi, maupun digitalisasi sistem
                        perusahaan, <strong>Tim Creative Media</strong> siap membantu Anda menemukan solusi terbaik.
                    </p>

                    @if(session('success'))
                    <div class="mb-4 p-3 bg-success text-white rounded">
                        {{ session('success') }}
                    </div>
                    @endif

                    <!-- FORM TESTIMONI -->
                    <div class="bg-white p-4 rounded shadow-sm mt-4">

                        <h6 class="sub-title mb-3">Kirim Testimoni</h6>

                        <form action="{{ route('testimoni.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group mb-3">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control"
                                    value="{{ old('nama') }}" required>
                            </div>

                            <div class="form-group mb-3">
                                <label>Jabatan</label>
                                <input type="text" name="jabatan" class="form-control"
                                    value="{{ old('jabatan') }}">
                            </div>

                            <div class="form-group mb-3">
                                <label>Pesan</label>
                                <textarea name="pesan" class="form-control" rows="3" required>{{ old('pesan') }}</textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label>Rating</label>
                                <select name="rating" class="form-control" required>
                                    @for($i=5; $i>=1; $i--)
                                        <option value="{{ $i }}" {{ old('rating') == $i ? 'selected' : '' }}>
                                            {{ $i }} Bintang
                                        </option>
                                    @endfor
                                </select>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="main-btn">
                                    Kirim Testimoni
                                </button>
                            </div>

                        </form>

                    </div>

                </div>
            </div>


            <!-- RIGHT CONTENT -->
            <div class="col-lg-6">
                <div class="testimonial-right-content mt-50 wow fadeIn"
                    data-wow-duration="1s" data-wow-delay="0.8s">

                    <div class="quota">
                        <i class="lni-quotation"></i>
                    </div>

                    <div class="testimonial-content-wrapper testimonial-active">

                        @forelse($testimonials as $testimonial)

                        <div class="single-testimonial">

                            <div class="testimonial-text">
                                <p class="text">“{{ $testimonial->pesan }}”</p>
                            </div>

                            <div class="testimonial-author d-sm-flex justify-content-between">

                                <div class="author-info d-flex align-items-center">

                                    <div class="author-image">
                                        <img src="{{ $testimonial->foto ? asset('storage/'.$testimonial->foto) : asset('user_assets/images/author-1.jpg') }}">
                                    </div>

                                    <div class="author-name media-body ml-3">
                                        <h5 class="name">{{ $testimonial->nama }}</h5>
                                        <span class="sub-title">{{ $testimonial->jabatan }}</span>
                                    </div>

                                </div>

                                <div class="author-review">

                                    <ul class="star">

                                        @for($i=1;$i<=5;$i++)
                                            <li>
                                                <i class="lni-star {{ $i <= $testimonial->rating ? '' : 'text-muted' }}"></i>
                                            </li>
                                        @endfor

                                    </ul>

                                </div>

                            </div>

                        </div>

                        @empty

                        <div class="single-testimonial">
                            <p class="text">Belum ada testimoni.</p>
                        </div>

                        @endforelse

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!--====== TESTIMONIAL PART END ======-->



<!--====== VIDEO TESTIMONI START ======-->

<section class="pt-80 pb-120 bg-light">
    <div class="container">

        <div class="section-title text-center mb-5">
            <h6 class="sub-title">Testimoni Alumni</h6>
            <h4 class="title">
                Pengalaman mereka setelah menyelesaikan Kursus & Pelatihan di Creative Media
            </h4>
        </div>

        <div class="row">

            @foreach($videos as $video)

                @php
                    preg_match('/(?:youtube\.com\/(?:watch\?v=|embed\/)|youtu\.be\/)([^\&\?\/]+)/', $video->youtube_url, $matches);
                    $youtubeId = $matches[1] ?? null;
                @endphp

                @if($youtubeId)

                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="video-box">

                        <div class="ratio ratio-16x9">

                            <iframe
                                src="https://www.youtube.com/embed/{{ $youtubeId }}"
                                title="Video Testimoni"
                                frameborder="0"
                                allowfullscreen>
                            </iframe>

                        </div>

                    </div>

                </div>

                @endif

            @endforeach

        </div>

    </div>
</section>

<!--====== VIDEO TESTIMONI END ======-->

@endsection
