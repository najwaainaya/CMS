@extends('layout3.app')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero-animated" class="hero-animated d-flex align-items-center" style="background-color: #fff;">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
            data-aos="zoom-out">
            <img src="{{ asset('HeroBiz/assets/img/DIKO TRANSPARANT.png') }}" class="img-fluid animated" style="width: 370px;">
            <h2>Selamat Datang di <span>DIKO POS</span></h2>
            <p>Kelola Pinjaman dan Laporan Keuangan dengan Lebih Mudah!</p>
            <div class="d-flex">
                <a href="#about" class="btn-get-started scrollto" style="background-color: #144B9A;">Get Started</a>
                <a href="https://youtu.be/4ZoWQeCO0CI" class="glightbox btn-watch-video d-flex align-items-center"
                    style="color: #144B9A;"><i class="bi bi-play-circle" style="color: #144B9A;"></i><span>Watch
                        Video</span></a>
            </div>
        </div>
    </section><!-- End Clients Section -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about" style="background-color: #485664; margin-top: 10px;">
            <div class="container" data-aos="fade-up">
                <div class="flex" style="background-color: #485664;">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('HeroBiz/mockup-1.png') }}" class="img-fluid animated fill-shadow"
                                alt="Gambar DIKO POS">
                        </div>
                        <div class="col-md-6">
                            <h2 style="color: #fff;">Bagaimana Diko POS membantu Anda?</h2>
                            <ul class="list-group" style="color: #fff;">
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="bi bi-check-circle text-success me-2"></i>
                                    <span>Pelayanan terbaik dengan kejujuran dan profesionalisme dalam setiap
                                        transaksi.</span>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="bi bi-check-circle text-success me-2"></i>
                                    <span>Layanan simpan pinjam yang terintegrasi dengan sistem inventori, proyek, dan
                                        penggajian.</span>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="bi bi-check-circle text-success me-2"></i>
                                    <span>Keamanan operasional dengan hak akses menggunakan fitur tertentu</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
        </section><!-- End About Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Fitur Diko POS</h2>
                </div>
                <ul class="nav nav-tabs row gy-4 d-flex justify-content-center">
                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                            <i class="bi bi-cash-coin color-teal"></i>
                            <h4>Sekali Bayar</h4>
                        </a>
                    </li><!-- End Tab 1 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                            <i class="bi bi-shield-check color-cyan"></i>
                            <h4>Keamanan</h4>
                        </a>
                    </li><!-- End Tab 2 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                            <i class="bi bi-binoculars color-indigo"></i>
                            <h4>Pemantauan</h4>
                        </a>
                    </li><!-- End Tab 3 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                            <i class="bi bi-clock-history color-red"></i>
                            <h4>Realtime</h4>
                        </a>
                    </li><!-- End Tab 4 Nav -->
                </ul>

                <div class="tab-content">

                    <div class="tab-pane active show" id="tab-1">
                        <div class="row gy-4 justify-content-center">
                            <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                                <h3>Kemudahan Akses Pembayaran</h3>
                                <p class="fst-italic">
                                    Anggota koperasi untuk melakukan pembayaran atau transaksi sekali bayar dengan mudah.
                                    Ini dapat mencakup pembelian saham, pembayaran pinjaman, atau pembelian produk dan
                                    layanan lainnya yang ditawarkan oleh koperasi.
                                    Memungkinkan anggota untuk melihat riwayat transaksi mereka, sehingga mereka dapat
                                    melacak semua pembayaran dan transaksi yang telah mereka lakukan.
                                </p>
                            </div>
                            <div class="col-lg-2 order-1 text-center" data-aos="fade-up" data-aos-delay="200">
                                <img src="{{ asset('HeroBiz/assets/img/new-features-1.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 1 -->

                    <div class="tab-pane" id="tab-2">
                        <div class="row gy-4 justify-content-center">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>Keamanan Data Terjaga</h3>
                                <p class="fst-italic">
                                    Sistem keamanan yang kuat akan memerlukan otorisasi dan autentikasi yang tepat untuk
                                    mengakses informasi atau melakukan transaksi.
                                    Hal ini dapat mencakup verifikasi dua faktor, kata sandi yang kuat, dan kontrol akses
                                    yang baik.
                                </p>
                            </div>
                            <div class="col-lg-2 order-1 text-center">
                                <img src="{{ asset('HeroBiz/assets/img/new-features-2.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 2 -->

                    <div class="tab-pane" id="tab-3">
                        <div class="row gy-4 justify-content-center">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>Pantau Transaksi</h3>
                                <p class="fst-italic">
                                    Fitur pemantauan akan memungkinkan pengelola koperasi untuk memantau aktivitas di situs
                                    web, termasuk transaksi yang terjadi.
                                    Ini membantu mendeteksi potensi kecurangan atau aktivitas yang mencurigakan.
                                </p>
                            </div>
                            <div class="col-lg-2 order-1 text-center">
                                <img src="{{ asset('HeroBiz/assets/img/new-features-3.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 3 -->

                    <div class="tab-pane" id="tab-4">
                        <div class="row gy-4 justify-content-center">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>Pengelolaan Simpan Pinjam yang Efisien</h3>
                                <p class="fst-italic">
                                    Fitur ini memastikan bahwa informasi di situs web selalu diperbarui secara real-time.
                                    Ini penting terutama dalam hal saldo akun anggota, informasi produk, dan suku bunga yang
                                    berubah.
                                </p>
                            </div>
                            <div class="col-lg-2 order-1 text-center">
                                <img src="{{ asset('HeroBiz/assets/img/new-features-4.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 4 -->
                </div>
            </div>
        </section><!-- End Features Section -->

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
                                <!-- <img src="{{ url('HeroBiz') }}/assets/img/register.jpg" class="img-fluid" alt=""> -->
                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/pos1.png" data-gallery="fitur-gallery"
                                    class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/pos1.png" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-search"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Master</h3>
                                </a>
                                <p> Mengelola data-data inti yang mencakup informasi produk atau layanan yang ditawarkan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->


                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="service-item">
                            <div class="img">
                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/pos2.png" data-gallery="fitur-gallery"
                                    class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/pos2.png" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-arrow-up"></i>
                                    <i class="bi bi-arrow-down"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Kasir</h3>
                                </a>
                                <p>Mencatat transaksi uang tunai masuk dan keluar untuk melacak arus kas dan memudahkan
                                    pengelolaan keuangan.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="service-item">
                            <div class="img">
                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/pos3.pngg" data-gallery="fitur-gallery"
                                    class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/pos3.png" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-bar-chart"></i> <!-- Ikon grafik batang -->
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Pembelian</h3>
                                </a>
                                <p>Mencatat tahapan penting dalam menghasilkan pendapatan dan memastikan pelanggan
                                    mendapatkan layanan yang mereka inginkan dengan cara aman dan efisien.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
                        <div class="service-item">
                            <div class="img">
                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/pos4.png" data-gallery="fitur-gallery"
                                    class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/pos4.png" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-bounding-box-circles"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Penjualan</h3>
                                </a>
                                <p>Membantu menyimpan riwayat penjualan pengguna yang memungkinkan mereka untuk melihat
                                    stock yang telah terjual.</p>
                                <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
                        <div class="service-item">
                            <div class="img">
                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/pos5.png" data-gallery="fitur-gallery"
                                    class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/pos5.png" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-calendar4-week"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Transaksi Stock</h3>
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
                                <a href="{{ url('HeroBiz') }}/assets/img/fitur/pos6.png" data-gallery="fitur-gallery"
                                    class="glightbox preview-link">
                                    <img src="{{ url('HeroBiz') }}/assets/img/fitur/pos6.png" class="img-fluid"
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

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services" style="background-color:#C3E2FF;">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
                        <div class="service-item position-relative">
                            <div class="icon" style="text-align: center;">
                                <img src="{{ asset('HeroBiz/time-management.png') }}" alt="manage" width="50"
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
                            <div class="icon" style="text-align: center;">
                                <img src="{{ asset('HeroBiz/global-network.png') }}" alt="network" width="45"
                                    height="45">
                                <!-- <i class="bi bi-bounding-box-circles icon"></i> -->
                            </div>
                            <!-- <h4><a href="" class="stretched-link">Sed ut perspici</a></h4> -->
                            <p style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Solusi terpadu untuk mengelola
                                jaringan
                                cabang</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon" style="text-align: center;">
                                <img src="{{ asset('HeroBiz/transaction.png') }}" alt="transaction" width="45"
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
                            <div class="icon" style="text-align: center;">
                                <!-- <i class="bi bi-broadcast icon"></i> -->
                                <img src="{{ asset('HeroBiz/responsive-design.png') }}" alt="device" width="45"
                                    height="45">
                            </div>
                            <!-- <h4><a href="" class="stretched-link">Nemo Enim</a></h4> -->
                            <p style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Nikmati kemudahan akses melalui
                                semua
                                perangkat</p>
                        </div>
                    </div><!--End Service Item-->

                </div>

            </div>
        </section><!-- End Featured Services Section -->

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



