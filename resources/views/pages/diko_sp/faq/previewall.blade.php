@extends('layout3.app')
@section('content')
    <section id="hero-animated" class="hero-animated d-flex align-items-center" style="background-color:#C3E2FF;">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
            data-aos="zoom-out" style="color : #144B9A;">
            <!-- <img src="assets/img/hero-carousel/hero-carousel-3.svg" class="img-fluid animated"> -->
            <p style="font-size: 15px; font-stretch: expanded;">

            </p>
            <p style="font-size: 45px; font-weight: bold; ">
                Solusi terbaik untuk manajemen keuangan bisnis Anda.</p>
            <p style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 20px;">Integrasi canggih: Inventori,
                Proyek, dan Penggajian, semua dalam satu solusi andal!</p>
            <div class="d-flex">
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
                <a href="https://youtu.be/4ZoWQeCO0CI" class="glightbox btn-watch-video d-flex align-items-center"><i
                        class="bi bi-play-circle"></i><span>Watch
                        Video</span></a>
            </div>
            <div>
                <img src="HeroBiz/assets/img/diko-sp-2.png" alt="" style="width: 100%;">
            </div>
        </div>
    </section>

    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <img src="{{ url('HeroBiz') }}/time-management.png" alt="manage" width="50"
                                    height="50">
                                <!-- <i class="bi bi-activity icon"></i> -->
                            </div>
                            <!-- <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4> -->
                            <p style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Pengelolaan keuangan menjadi lebih
                                efisien
                                dan tertib</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <img src="{{ url('HeroBiz') }}/global-network.png" alt="network" width="45"
                                    height="45">
                                <!-- <i class="bi bi-bounding-box-circles icon"></i> -->
                            </div>
                            <p style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Solusi terpadu untuk mengelola
                                jaringan
                                cabang</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <img src="{{ url('HeroBiz') }}/transaction.png" alt="transaction" width="45"
                                    height="45">
                                <!-- <i class="bi bi-calendar4-week icon"></i> -->
                            </div>
                            <!-- <h4><a href="" class="stretched-link">Magni Dolores</a></h4> -->
                            <p style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Proses transaksi bisnis lebih
                                lancar dan
                                instan</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <!-- <i class="bi bi-broadcast icon"></i> -->
                                <img src="{{ url('HeroBiz') }}/responsive-design.png" alt="device" width="45"
                                    height="45">
                            </div>
                            <!-- <h4><a href="" class="stretched-link">Nemo Enim</a></h4> -->
                            <p style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Nikmati kemudahan akses melalui
                                semua perangkat</p>
                        </div>
                    </div><!--End Service Item-->
                </div>
            </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">

                <ul class="nav nav-tabs row gy-4 d-flex justify-content-center">

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                            <i class="bi bi-cash-coin color-teal"></i>
                            <!-- <img src="{{ url('HeroBiz') }}/integration.png" alt="integration" width="50" height="50"> -->
                            <h4>Sekali Bayar</h4>
                        </a>
                    </li><!-- End Tab 1 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                            <i class="bi bi-shield-check color-cyan"></i>
                            <!-- <img src="{{ url('HeroBiz') }}/shield.png" alt="monitor" width="50" height="50"> -->
                            <h4>Keamanan</h4>
                        </a>
                    </li><!-- End Tab 2 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                            <i class="bi bi-binoculars color-indigo"></i>
                            <!-- <img src="{{ url('HeroBiz') }}/monitor.png" alt="monitor" width="50" height="50"> -->
                            <h4>Pemantauan</h4>
                        </a>
                    </li><!-- End Tab 3 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                            <i class="bi bi-clock-history color-red"></i>
                            <!-- <img src="{{ url('HeroBiz') }}/stopwatch.png" alt="monitor" width="50" height="50"> -->
                            <h4>RealTime</h4>
                        </a>
                    </li><!-- End Tab 4 Nav -->

                    <!-- <li class="nav-item col-6 col-md-4 col-lg-2">
                                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
                                              <i class="bi bi-easel color-blue"></i>
                                              <h4>Adipiscing</h4>
                                            </a>
                                          </li>End Tab 5 Nav -->

                    <!-- <li class="nav-item col-6 col-md-4 col-lg-2">
                                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-6">
                                              <i class="bi bi-map color-orange"></i>
                                              <h4>Reprehit</h4>
                                            </a>
                                          </li>End Tab 6 Nav -->

                </ul>

                <div class="tab-content">

                    <div class="tab-pane active show" id="tab-1">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                                <h3>Kemudahan Akses Pembayaran</h3>
                                <p
                                    style="font-size: 20px; color: darkgray; font-family:Verdana, Geneva, Tahoma, sans-serif;">
                                    Sebuah opsi pembayaran di mana pengguna hanya perlu membayar sekali untuk mendapatkan
                                    akses atau manfaat tertentu tanpa harus berlangganan atau membayar secara berkala.
                                    Ini adalah konsep keuangan yang bertentangan dengan model bisnis berlangganan atau
                                    pembayaran berulang seperti bulanan atau tahunan.
                                </p>
                                <!-- <ul>
                                                  <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                  </li>
                                                  <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.
                                                  </li>
                                                  <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                    Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat
                                                    nulla pariatur.</li>
                                                </ul> -->
                                <!-- <p>
                                                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                                  voluptate
                                                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                                  sunt in
                                                  culpa qui officia deserunt mollit anim id est laborum
                                                </p> -->
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">

                                <img src="{{ url('HeroBiz') }}/assets/img/new-features-3.png" alt=""
                                    class="img-fluid" style="width:200px">
                            </div>
                        </div>
                    </div><!-- End Tab Content 1 -->

                    <div class="tab-pane" id="tab-2">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>Keamanan Data Terjaga</h3>
                                <p
                                    style="font-size: 20px; color: darkgray; font-family:Verdana, Geneva, Tahoma, sans-serif;">
                                    Kenyamanan Anda dalam mengakses data di DikoSP menjadi prioritas utama kami. Kami
                                    menggunakan sistem
                                    enkripsi modern dan proteksi data yang kuat untuk memastikan keamanan data Anda tanpa
                                    memerlukan
                                    sertifikat.
                                </p>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center">
                                <img src="{{ url('HeroBiz') }}/assets/img/new-features-1.png" alt=""
                                    class="img-fluid" style="width:200px">
                            </div>
                        </div>
                    </div><!-- End Tab Content 2 -->

                    <div class="tab-pane" id="tab-3">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>Pantau Koperasi</h3>
                                <p
                                    style="font-size: 20px; color: darkgray; font-family:Verdana, Geneva, Tahoma, sans-serif;">
                                    Anda dapat dengan mudah memantau tentang arus kas, keuntungan, dan statistik. Dengan
                                    pemantauan koperasi yang akurat, dpaat mengidentifikasi peluang pertumbuhan dan
                                    mengatasi masalah dengan cepat.
                                </p>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center">

                                <img src="{{ url('HeroBiz') }}/assets/img/new-features-2.png" alt=""
                                    class="img-fluid" style="width:200px">
                            </div>
                        </div>
                    </div><!-- End Tab Content 3 -->

                    <div class="tab-pane" id="tab-4">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>Pengelolaan Simpan Pinjam yang Efisien</h3>
                                <p
                                    style="font-size: 20px; color: darkgray; font-family:Verdana, Geneva, Tahoma, sans-serif;">
                                    Simpan Pinjam dapat Anda kelola dengan mudah dan efisien secara real-time. Nikmati
                                    kemudahan pengingat
                                    jatuh tempo untuk memastikan rencana keuangan Anda tetap teratur dan terukur
                                </p>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center">
                                <img src="{{ url('HeroBiz') }}/assets/img/new-features-4.png" alt=""
                                    class="img-fluid" style="width:200px">
                            </div>
                        </div>
                    </div><!-- End Tab Content 4 -->

                    <div class="tab-pane" id="tab-5">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>Adipiscing</h3>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in
                                    voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident,
                                    sunt in
                                    culpa qui officia deserunt mollit anim id est laborum
                                </p>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et
                                    dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.
                                    </li>
                                    <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in
                                        voluptate velit.
                                    </li>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro
                                        dolore eu fugiat
                                        nulla pariatur.</li>
                                </ul>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center">
                                <img src="{{ url('HeroBiz') }}/assets/img/features-5.svg" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 5 -->

                    <div class="tab-pane" id="tab-6">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>Reprehit</h3>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in
                                    voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident,
                                    sunt in
                                    culpa qui officia deserunt mollit anim id est laborum
                                </p>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et
                                    dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.
                                    </li>
                                    <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in
                                        voluptate velit.
                                    </li>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro
                                        dolore eu fugiat
                                        nulla pariatur.</li>
                                </ul>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center">
                                <img src="{{ url('HeroBiz') }}/assets/img/features-6.svg" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 6 -->
                </div>
            </div>
        </section>

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2 style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-weight: 500;">Fitur-fitur terbaik
                        kami akan mempermudah bisnis Anda.</h2>
                    <p style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 16px; color: #666;">Perhitungan
                        Akurat,
                        Keputusan Bijak, Produk Akuntansi Terpercaya</p>
                </div>

                <div class="row gy-5">

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="service-item">
                            <div class="img">


                                {{-- <img src="{{ url('HeroBiz') }}/assets/img/register.jpg" class="img-fluid" alt="">  --}}

                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/cari.png" data-gallery="fitur-gallery"
                                    class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/cari.png" class="img-fluid"
                                        alt="">
                                </a>

                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-search"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Registrasi Nasabah</h3>
                                </a>
                                <p> Identifikasi dan kelola data nasabah dengan cepat dan akurat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->


                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="service-item">
                            <div class="img">
                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/kas.jpg" data-gallery="fitur-gallery"
                                    class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/kas.jpg" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-arrow-up"></i>
                                    <i class="bi bi-arrow-down"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Kas Bank</h3>
                                </a>
                                <p>Mencatat transaksi uang tunai masuk dan keluar untuk melacak arus kas dan memudahkan
                                    pengelolaan keuangan.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="service-item">
                            <div class="img">
                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/neraca1.png" data-gallery="fitur-gallery"
                                    class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/neraca1.png" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-bar-chart"></i> <!-- Ikon grafik batang -->
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Neraca</h3>
                                </a>
                                <p>Mencatat dan melacak semua aset yang dimiliki. Mencakup uang tunai, tabungan anggota,
                                    pinjaman yang diberikan.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
                        <div class="service-item">
                            <div class="img">
                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/simpanan1.png"
                                    data-gallery="fitur-gallery" class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/simpanan1.png" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-bounding-box-circles"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Simpanan Berjangka</h3>
                                </a>
                                <p>Membantu nasabah dalam mengelola dan mengoptimalkan simpanan mereka serta memberikan
                                    visibilitas yang lebih baik tentang kondisi keuangan</p>
                                <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
                        <div class="service-item">
                            <div class="img">
                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/kasir1.png" data-gallery="fitur-gallery"
                                    class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/kasir1.png" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-calendar4-week"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Kasir</h3>
                                </a>
                                <p>Mencatat pinjaman nasabah, menghitung total tabungan nasabah dan keterangan mutasi
                                    anggota</p>
                                <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
                        <div class="service-item">
                            <div class="img">
                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/pembukuan1.png"
                                    data-gallery="fitur-gallery" class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/pembukuan1.png" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-chat-square-text"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Pembukuan</h3>
                                </a>
                                <p>Membantu bisnis dalam melacak pendapatan, biaya, laba, dan arus kas</p>
                                <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->
                </div>
            </div>
        </section><!-- End Services Section -->

        </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Pricing</h2>
                    {{-- <p>Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam voluptas
      asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.</p> --}}
                </div>

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                        <div class="pricing-item">

                            <div class="pricing-header">
                                <h3>Free Plan</h3>
                                <h4><sup>$</sup>0<span> / month</span></h4>
                            </div>

                            <ul>
                                <li><i class="bi bi-dot"></i> <span>Quam adipiscing vitae proin</span></li>
                                <li><i class="bi bi-dot"></i> <span>Nec feugiat nisl pretium</span></li>
                                <li><i class="bi bi-dot"></i> <span>Nulla at volutpat diam uteera</span></li>
                                <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span>
                                </li>
                                <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span>
                                </li>
                            </ul>

                            <div class="text-center mt-auto">
                                <a href="#" class="buy-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="400">
                        <div class="pricing-item featured">

                            <div class="pricing-header">
                                <h3>Business Plan</h3>
                                <h4><sup>$</sup>29<span> / month</span></h4>
                            </div>

                            <ul>
                                <li><i class="bi bi-dot"></i> <span>Quam adipiscing vitae proin</span></li>
                                <li><i class="bi bi-dot"></i> <span>Nec feugiat nisl pretium</span></li>
                                <li><i class="bi bi-dot"></i> <span>Nulla at volutpat diam uteera</spa>
                                </li>
                                <li><i class="bi bi-dot"></i> <span>Pharetra massa massa ultricies</spa>
                                </li>
                                <li><i class="bi bi-dot"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                            </ul>

                            <div class="text-center mt-auto">
                                <a href="#" class="buy-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="600">
                        <div class="pricing-item">
                            <div class="pricing-header">
                                <h3>Developer Plan</h3>
                                <h4><sup>$</sup>49<span> / month</span></h4>
                            </div>
                            <ul>
                                <li><i class="bi bi-dot"></i> <span>Quam adipiscing vitae proin</span></li>
                                <li><i class="bi bi-dot"></i> <span>Nec feugiat nisl pretium</span></li>
                                <li><i class="bi bi-dot"></i> <span>Nulla at volutpat diam uteera</span></li>
                                <li><i class="bi bi-dot"></i> <span>Pharetra massa massa ultricies</span></li>
                                <li><i class="bi bi-dot"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                            </ul>
                            <div class="text-center mt-auto">
                                <a href="#" class="buy-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Pricing Section -->

        <html lang="en">

        <head>
            <!-- Masukkan tag <head> untuk mengatur CSS, judul, dll. -->
            <style>
                .grid-item {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    text-align: center;
                }
            </style>
        </head>

        <body>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    // Function to set the size of the logos
                    function setLogoSize(logoClass, width, height) {
                        const logos = document.querySelectorAll(logoClass);
                        logos.forEach((logo) => {
                            logo.style.width = width;
                            logo.style.height = height;
                        });
                    }

                    // Set the size of the logos (you can adjust the width and height values)
                    setLogoSize(".small-logo", "100px", "100px");
                });

                // Function to display the modal with the specified content
                function showModal(modalId) {
                    var modal = new bootstrap.Modal(document.getElementById(modalId));
                    modal.show();
                }


                // Logo 1 (Plugin Master Menu Bank & E-Commerce)
                document.querySelector(".col-md-3.grid-item:nth-child(1)").addEventListener("click", function() {
                    showModal("pluginMasterModal");
                });

                // Logo 2 (Plugin Master Barcode Form Add)
                document.querySelector(".col-md-3.grid-item:nth-child(2)").addEventListener("click", function() {
                    showModal("barcodeModal");
                });

                // Logo 3 (Plugin Master Golongan Jaminan)
                document.querySelector(".col-md-3.grid-item:nth-child(3)").addEventListener("click", function() {
                    showModal("golonganModal");
                });

                // Logo 4 (Plugin Master Kode Transaksi)
                document.querySelector(".col-md-3.grid-item:nth-child(4)").addEventListener("click", function() {
                    showModal("kodeModal");
                });

                function closeModal(modalId) {
                    var modal = new bootstrap.Modal(document.getElementById(modalId));
                    modal.hide();
                }
            </script>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


            <!-- Modals -->
            <div class="modal fade" id="pluginMasterModal" tabindex="-1" role="dialog"
                aria-labelledby="pluginMasterModalLabel" aria-hidden="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="pluginMasterModalLabel">Plugin Master Menu Bank & E-Commerce</h5>
                            <button type="button" class="close" data-dismiss="modal" data-target="#pluginMasterModal"
                                aria-label="Close">
                                <span aria-hidden="false">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Informasi yang ingin Anda tambahkan -->
                            <p>Plugin ini mendukung berbagai bank dan penyedia layanan pembayaran, mencakup beragam opsi
                                seperti kartu kredit, transfer bank, e-wallet, dan banyak lagi.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="barcodeModal" tabindex="-1" role="dialog" aria-labelledby="barcodeModalLabel"
                aria-hidden="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="barcodeModalLabel">Plugin Master Menu Barcode</h5>
                            <button type="button" class="close" data-dismiss="modal" data-target="#pluginMasterModal"
                                aria-label="Close">
                                <span aria-hidden="false">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Informasi yang ingin Anda tambahkan -->
                            <p>Plugin ini juga dapat terintegrasi dengan sistem POS (Point of Sale) Anda, memberikan
                                kemudahan dalam proses penjualan dan pencatatan data produk.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="barcodeModal" tabindex="-1" role="dialog" aria-labelledby="barcodeModalLabel"
                aria-hidden="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="barcodeModalLabel">Plugin Master Menu Barcode</h5>
                            <button type="button" class="close" data-dismiss="modal" data-target="#pluginMasterModal"
                                aria-label="Close">
                                <span aria-hidden="false">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Informasi yang ingin Anda tambahkan -->
                            <p>Plugin ini memberikan kemudahan dalam penyusunan laporan keuangan dan memungkinkan Anda untuk
                                membuat keputusan yang lebih baik dalam pengelolaan keuangan Anda.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="golonganModal" tabindex="-1" role="dialog"
                aria-labelledby="golonganModalLabel" aria-hidden="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="golonganModalLabel">Plugin Master Menu Golongan Pinjaman</h5>
                            <button type="button" class="close" data-dismiss="modal" data-target="#golonganModal"
                                aria-label="Close">
                                <span aria-hidden="false">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Informasi yang ingin Anda tambahkan -->
                            <p>Plugin ini memungkinkan pengguna untuk dengan mudah mengintegrasikan berbagai opsi pembayaran
                                dari berbagai bank dan penyedia layanan pembayaran dalam satu menu yang terstruktur,
                                memberikan pengalaman belanja yang lebih nyaman bagi pelanggan. </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="kodeModal" tabindex="-1" role="dialog" aria-labelledby="kodeModalLabel"
                aria-hidden="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="kodeModalLabel">Plugin Master Menu Kode Transaksi Pinjaman</h5>
                            <button type="button" class="close" data-dismiss="modal" data-target="#kodenModal"
                                aria-label="Close">
                                <span aria-hidden="false">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Informasi yang ingin Anda tambahkan -->
                            <p>Plugin ini juga memungkinkan Anda untuk dengan cepat mengidentifikasi dan membedakan berbagai
                                jenis transaksi pinjaman, seperti pinjaman pribadi, hipotek, atau bisnis.</p>
                        </div>
                    </div>
                </div>
            </div>

            <section id="plugin-menu" class="plugin-menu">
                <div class="container" data-aos="fade-up">
                    <div class="section-header">
                        <h2>Our Plugin Menu</h2>
                    </div>

                    <div class="grid-menu">
                        <div class="row">
                            <!-- Item 1 (Logo 1) -->
                            <div class="col-md-3 grid-item">
                                <div class="hidden-button">
                                    <img src="{{ url('HeroBiz') }}/assets/img/logo koperasi.png" alt="Logo 1"
                                        class="small-logo" id="showModalButton">
                                </div>
                            </div>

                            <script>
                                document.getElementById("showModalButton").addEventListener("click", function() {
                                    // Menampilkan modal ketika gambar diklik
                                    $('#pluginMasterModal').modal('show');
                                });
                            </script>


                            <!-- Item 2 (Logo 2) -->
                            <div class="col-md-3 grid-item" data-toggle="modal" data-target="#barcodeModal">
                                <img src="{{ url('HeroBiz') }}/assets/img/logo koperasi.png" alt="Logo 2"
                                    class="small-logo">
                            </div>

                            <!-- Item 3 (Logo 3) -->
                            <div class="col-md-3 grid-item" data-toggle="modal" data-target="#golonganModal">
                                <img src="{{ url('HeroBiz') }}/assets/img/logo koperasi.png" alt="Logo 3"
                                    class="small-logo">
                            </div>

                            <!-- Item 4 (Logo 4) -->
                            <div class="col-md-3 grid-item" data-toggle="modal" data-target="#kodeModal">
                                <img src="{{ url('HeroBiz') }}/assets/img/logo koperasi.png" alt="Logo 4"
                                    class="small-logo">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </body>

        </html>

        <section id="faq" class="faq">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row gy-4">
                    <div
                        class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
                        <div class="content px-xl-5">
                            <h3><strong>Pertanyaan</strong> yang sering diajukan</h3>
                        </div>

                        <div class="accordion accordion-flush px-xl-5" id="faqlist">
                            @foreach ($post as $post)
                                <!-- Mengganti $post menjadi $posts -->
                                <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq-content-{{ $post->id }}">
                                            <!-- Menggunakan $post->id -->
                                            <i class="bi bi-question-circle question-icon"></i>
                                            {{ $post->question }} <!-- Menggunakan $post->question -->
                                        </button>
                                    </h3>
                                    <div id="faq-content-{{ $post->id }}" class="accordion-collapse collapse"
                                        data-bs-parent="#faqlist">
                                        <div class="accordion-body">
                                            {{ $post->answer }} <!-- Menggunakan $post->answer -->
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                        style='background-image: url("assets/img/faq.jpg");'>&nbsp;</div>
                </div>
            </div>
        </section>
    </main>
@endsection
