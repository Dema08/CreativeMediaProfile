@extends('users.layout.main')

@section('content')
<section class="portfolio-details-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <!-- Gambar -->
                <div class="portfolio-details-image wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="tab-content" id="myTabContent">

                        <div class="tab-pane fade show active" id="home">
                            <img src="{{ asset('user_assets/images/portfolio-details-1.jpg') }}" alt="Administrasi Perkantoran">
                        </div>

                        <div class="tab-pane fade" id="profile">
                            <img src="{{ asset('user_assets/images/portfolio-details-2.jpg') }}" alt="Administrasi Perkantoran">
                        </div>

                        <div class="tab-pane fade" id="contact">
                            <img src="{{ asset('user_assets/images/portfolio-details-3.jpg') }}" alt="Administrasi Perkantoran">
                        </div>

                    </div>

                    <ul class="nav" id="myTab">
                        <li class="nav-item">
                            <a class="active" data-toggle="tab" href="#home">
                                <img src="{{ asset('user_assets/images/portfolio-details-1.jpg') }}">
                            </a>
                        </li>

                        <li class="nav-item">
                            <a data-toggle="tab" href="#profile">
                                <img src="{{ asset('user_assets/images/portfolio-details-2.jpg') }}">
                            </a>
                        </li>

                        <li class="nav-item">
                            <a data-toggle="tab" href="#contact">
                                <img src="{{ asset('user_assets/images/portfolio-details-3.jpg') }}">
                            </a>
                        </li>
                    </ul>
                </div>


                <!-- Konten -->
                <div class="portfolio-details-content wow fadeInUpBig">

                    <h6 class="portfolio-sub-title">Bidang Studi</h6>

                    <h4 class="portfolio-title">
                        Kursus Administrasi Perkantoran di Surabaya
                    </h4>

                    <p class="text">
                        Kursus Administrasi Perkantoran di Surabaya dari Creative Media dirancang
                        untuk mempersiapkan Anda menghadapi kebutuhan industri modern yang
                        serba digital. Program ini cocok untuk lulusan SMA, mahasiswa,
                        staf perusahaan, PNS, pebisnis online, maupun karyawan swasta
                        yang ingin meningkatkan keterampilan di bidang administrasi
                        perkantoran dan penguasaan aplikasi perkantoran.
                    </p>

                    <p class="text">
                        Kami menyediakan pengajar dari kalangan praktisi dan dosen profesional
                        yang berpengalaman di bidangnya. Dalam program ini Anda akan belajar
                        menguasai Microsoft Office mulai dari level basic hingga advanced,
                        termasuk pengolahan data, pembuatan dokumen profesional,
                        manajemen file, serta pembuatan presentasi yang menarik.
                    </p>

                    <p class="text">
                        Materi kursus disusun berdasarkan studi kasus yang sering
                        terjadi di perusahaan sehingga peserta siap bersaing di dunia kerja
                        dan mampu mengelola data secara sistematis serta efisien.
                    </p>


                    <!-- Materi -->
                    <div class="portfolio-cdws">
                        <div class="row">

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-cdws mt-30 d-flex">
                                    <div class="cdws-icon">
                                        <i class="lni-files"></i>
                                    </div>
                                    <div class="cdws-content">
                                        <h5 class="cdws-title">Microsoft Word</h5>
                                        <p class="text">Dokumen, surat, proposal</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-cdws mt-30 d-flex">
                                    <div class="cdws-icon">
                                        <i class="lni-bar-chart"></i>
                                    </div>
                                    <div class="cdws-content">
                                        <h5 class="cdws-title">Microsoft Excel</h5>
                                        <p class="text">Rumus, pivot table, laporan</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-cdws mt-30 d-flex">
                                    <div class="cdws-icon">
                                        <i class="lni-presentation"></i>
                                    </div>
                                    <div class="cdws-content">
                                        <h5 class="cdws-title">PowerPoint</h5>
                                        <p class="text">Presentasi profesional</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-cdws mt-30 d-flex">
                                    <div class="cdws-icon">
                                        <i class="lni-envelope"></i>
                                    </div>
                                    <div class="cdws-content">
                                        <h5 class="cdws-title">Microsoft Outlook</h5>
                                        <p class="text">Konfigurasi Email</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


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
