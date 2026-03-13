@extends('users.layout.main')

@section('content')
<!--====== PAGE BANNER START ======-->

<div class="page-banner bg-cover" style="background-image: url({{ asset('user_assets/images/page-banner-1.jpg') }})">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-content wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                    <h3 class="page-title"><b>Detail</b> <span>Artikel</span></h3>
                    <p class=text-dark mt-3">Baca artikel terbaru dari Creative Media.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== PAGE BANNER END ======-->

<!--====== BLOG DETAILS PART START ======-->

<section class="blog-details-area pt-70 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details-content mt-50">
                    <div class="details-image">
                        <img src="{{ $artikel->image ? asset('storage/' . $artikel->image) : asset('user_assets/images/blog-placeholder.jpg') }}" alt="{{ $artikel->title }}">
                    </div>
                    <h3 class="details-title">{{ $artikel->title }}</h3>
                    <p class="text">{!! nl2br(e($artikel->content)) !!}</p>

                    <blockquote class="blockquote">
                        <img class="quote" src="{{ asset('user_assets/images/quote.png') }}" alt="quote">
                        <p class="text"> <i class="fa fa-quote-left"></i> {{ $artikel->excerpt }} <i class="fa fa-quote-right"></i></p>
                    </blockquote>

                    <div class="blog-share d-flex">
                        <span>Share :</span>
                        <ul class="social">
                            <li><a class="color-1" href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="color-2" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="color-3" href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a class="color-4" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div> <!-- blog details content -->

                <div class="blog-details-comment pt-115">
                    <h4 class="comment-title">Komentar ({{ $artikel->komentars->count() }})</h4>
                    <ul class="comment-list pt-10">
                        @forelse($artikel->komentars as $komentar)
                            <li>
                                <div class="single-comment-items d-sm-flex align-items-end">
                                    <div class="comment-author">
                                        <img src="{{ asset('user_assets/images/author-1.jpg') }}" alt="author">
                                    </div>
                                    <div class="comment-content media-body">
                                        <h5 class="comment-name">{{ $komentar->name }}</h5>
                                        <p class="text">{{ $komentar->message }}</p>
                                        <a href="#"><i class="fa fa-clock-o"></i>{{ $komentar->created_at->diffForHumans() }}</a>
                                    </div>
                                </div> <!-- single-comment-items -->
                            </li>
                        @empty
                            <li>
                                <div class="text-center py-5">
                                    <h6>Belum ada komentar</h6>
                                    <p class="text-muted">Jadilah yang pertama memberikan komentar!</p>
                                </div>
                            </li>
                        @endforelse
                    </ul> <!-- comment list -->
                </div> <!-- blog details comment -->

                <div class="blog-details-comment-form pt-115">
                    <h4 class="comment-form-title pb-10"><i class="lni-envelope"></i> Tinggalkan <span>Komentar.</span></h4>

                    @if(session('success'))
                        <div class="alert alert-success mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('artikel.comment.store', $artikel) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="comment-form mt-45">
                                    <label>Full Name</label>
                                    <input type="text" name="name" placeholder="Full Name :" required>
                                </div> <!-- comment-form -->
                            </div>
                            <div class="col-md-6">
                                <div class="comment-form mt-45">
                                    <label>Email</label>
                                    <input type="email" name="email" placeholder="Email :" required>
                                </div> <!-- comment-form -->
                            </div>
                            <div class="col-md-12">
                                <div class="comment-form mt-45">
                                    <label>Pesan</label>
                                    <textarea name="message" placeholder="Enter your message..." required></textarea>
                                </div> <!-- comment-form -->
                            </div>
                            <div class="col-md-12">
                                <div class="comment-form mt-45">
                                    <button type="submit" class="main-btn">Kirim Komentar</button>
                                </div> <!-- comment-form -->
                            </div>
                        </div> <!-- row -->
                    </form>
                </div> <!-- blog details comment form -->
            </div>
            <div class="col-lg-4">
                <div class="blog-sidebar mt-50">
                    <div class="blog-category">
                        <div class="category-title">
                            <h4 class="title"><i class="lni-list"></i> Artikel Lainnya</h4>
                        </div>
                        <div class="category-list">
                            <ul>
                                @foreach($relatedArticles as $related)
                                    <li><a href="{{ route('artikel.show', $related) }}">{{ $related->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div> <!-- blog category -->
                    <div class="blog-sidebar-wrapper mt-60">
                        <div class="blog-tag">
                            <div class="sidebar-title text-center">
                                <h4 class="title">Kategori</h4>
                            </div>
                            <div class="tag-list">
                                <a href="{{ route('artikel.index') }}">Semua Artikel</a>
                                <a href="#">Berita</a>
                                <a href="#">Kegiatan</a>
                                <a href="#">Pelatihan</a>
                            </div>
                        </div> <!-- blog tag -->

                        <div class="blog-project">
                            <div class="sidebar-title text-center">
                                <h4 class="title">Penulis</h4>
                            </div>
                            <div class="project-list">
                                <ul>
                                    <li><a href="#">Creative Media <span>{{ $artikel->author }}</span></a></li>
                                </ul>
                            </div>
                        </div> <!-- blog project -->
                    </div> <!-- blog sidebar wrapper -->
                </div> <!-- blog sidebar -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== BLOG DETAILS PART ENDS ======-->
@endsection
