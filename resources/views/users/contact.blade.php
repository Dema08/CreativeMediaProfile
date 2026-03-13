@extends('users.layout.main')

@section('content')
<!--====== PAGE BANNER START ======-->

<div class="page-banner bg-cover" style="background-image: url({{ asset('user_assets/images/page-banner-1.jpg') }})">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="page-banner-content wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                    <h3 class="page-title"><b>Creative</b> Media <span>Contact Us.</span></h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== PAGE BANNER END ======-->

<!--====== CONTACT PART START ======-->

<section class="contact-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-map wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.3s">
                    <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Surabaya,+Indonesia&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
            </div>
        </div>
        <div class="contact-info pt-30">
            <div class="row">
                @foreach($contactInfos as $contactInfo)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-1 mt-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="contact-info-header flex items-center mb-3">
                                <div class="contact-info-icon mr-3">
                                    <i class="lni-map-marker text-orange-500"></i>
                                </div>
                                <div>
                                    <h6 class="text font-semibold">{{ $contactInfo->name }} {{ $contactInfo->is_main_office ? '(Kantor Pusat)' : '' }}</h6>
                                </div>
                            </div>
                            <div class="contact-info-content">
                                <p class="text text-sm mb-3">{{ $contactInfo->address }}</p>
                                <div class="contact-map-preview mb-3">
                                    <div class="w-full h-40 bg-gray-200 rounded-lg overflow-hidden">
                                        {!! $contactInfo->google_map_embed !!}
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <a href="https://wa.me/{{ str_replace(' ', '', $contactInfo->whatsapp_number) }}?text=Halo%20Creative%20Media,%20saya%20ingin%20bertanya%20tentang%20layanan%20anda"
                                       target="_blank"
                                       class="btn-admin-secondary btn-sm flex items-center gap-2">
                                        <i class="fab fa-whatsapp text-green-500 text-lg"></i>
                                        <span>Chat via WhatsApp</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="contact-info pt-30">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-info contact-color-2 mt-30 d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="contact-info-icon">
                            <i class="lni-envelope"></i>
                        </div>
                        <div class="contact-info-content media-body">
                            <p class="text">info@creativemedia.com</p>
                            <p class="text">support@creativemedia.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-info contact-color-3 mt-30 d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
                        <div class="contact-info-icon">
                            <i class="lni-phone"></i>
                        </div>
                        <div class="contact-info-content media-body">
                            <p class="text">+62 31 1234 5678</p>
                            <p class="text">+62 812 3456 7890</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-wrapper-form pt-115 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h4 class="contact-title pb-10"><i class="lni-envelope"></i> Leave <span>A Message.</span></h4>

                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-form mt-45">
                                    <label>Full Name</label>
                                    <input type="text" name="name" placeholder="Full Name :" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-form mt-45">
                                    <label>Email</label>
                                    <input type="email" name="email" placeholder="Email :" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="contact-form mt-45">
                                    <label>Message</label>
                                    <textarea name="message" placeholder="Enter your message..." required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="contact-form mt-45">
                                    <button type="submit" class="main-btn">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== CONTACT PART ENDS ======-->

<!--====== NEWSLETTER PART START ======-->

<section class="newsletter-area bg_cover pt-115 pb-120" style="background-image: url({{ asset('user_assets/images/newsletter-bg.jpg') }})">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="newsletter-wrapper">
                    <div class="section-title text-center wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h6 class="sub-title">NEWSLETTER</h6>
                        <h4 class="title">Get only new and unique <span>update from this newsletter.</span></h4>
                    </div>
                    <div class="newsletter-form wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <form action="#">
                            <input type="text" placeholder="Enter your Email .......">
                            <button class="main-btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== NEWSLETTER PART ENDS ======-->
@endsection
