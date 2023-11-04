@extends('layout2.app')
@section('content')
   
    <section id="hero" class="d-flex align-items-center">

        <div class="container-fluid" data-aos="fade-up">
          <div class="row justify-content-center">
            <!-- <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>
      
              <div class="carousel-inner">
                <div class="item active">
                  <img src="https://img.freepik.com/free-vector/accountant-concept-illustration_114360-5938.jpg?w=740&t=st=1694069725~exp=1694070325~hmac=ae9befa1f5d6396173dcd61b01f74619f7596529369aee47c5d52bfd0da2762d" alt="">
                </div>
      
                <div class="item">
                  <img src="https://img.freepik.com/free-vector/isometric-accounting-flowchart-composition-with-isolated-images-accountants-workspace-elements-people-with-text-captions-vector-illustration_1284-30663.jpg?w=1060&t=st=1694069769~exp=1694070369~hmac=74c4aaa7d4e05962027f205b9970688a4a1f877cb17a6961e2aee7e09f43191c" alt="">
                </div>
      
                <div class="item">
                  <img src="https://img.freepik.com/free-vector/ambulance-isometric-set-reanimobiles-medical-personnel-providing-first-aid-patients-isolated-vector-illustration_1284-72291.jpg?t=st=1694069800~exp=1694070400~hmac=26d0421ccec341cd275cc74c47a3576d85f68846ab309c20ab9699bb37c94502" alt="">
                </div>
              </div>
      
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div> -->
            <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
              <h1 style="opacity: 1;">
              Bergabunglah dengan Koperasi Simpan Pinjam Kami 
              </h1>
              <h2>Meningkatkan Efisiensi, Aksesibilitas, dan Keamanan Transaksi Koperasi</h2>
              
            </div>
            <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
              <img src="{{url('Techie')}}/assets/img/landingg.png" class="img-fluid animated" alt="">
            </div>
          </div>
        </div>
      
      
            <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">
      
      </section><!-- End Hero -->
      
      <main id="main">
      
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
          <div class="container">
      
            <div class="row">
              <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
                <img src="{{url('Techie')}}/assets/img/2.png" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                <h3>Mudahkan Laporan Akuntansi Anda dengan</h3>
                <ul>
                  <li><i class="bi bi-check-circle"></i>Akses yang mudah</li>
                  <li><i class="bi bi-check-circle"></i>Biaya yang terjangkau</li>
                  <li><i class="bi bi-check-circle"></i>Pengelolaan yang mudah</li>
                  <li><i class="bi bi-check-circle"></i>Backup dan keamanan data</li>
                </ul>
                <a href="#" class="read-more">Read More <i class="bi bi-long-arrow-right"></i></a>
              </div>
            </div>
      
          </div>
        </section><!-- End About Section -->
      
      
        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
          <div class="container">
      
            <div class="row counters">
      
              <div class="col-lg-4 col-7 text-center">
                <span data-purecounter-start="0" data-purecounter-end="14800" data-purecounter-duration="1" class="purecounter"></span>
                <p>Pengusaha</p>
              </div>
      
              <div class="col-lg-4 col-7 text-center">
                <span data-purecounter-start="0" data-purecounter-end="347" data-purecounter-duration="1" class="purecounter"></span>
                <p>Kota/Kabupaten</p>
              </div>
      
              <div class="col-lg-4 col-7 text-center">
                <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
                <p>Bidang Usaha</p>
              </div>
            </div>
        </section><!-- End Counts Section -->
      
        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
          <div class="container" data-aos="fade-up">
      
            <div class="section-title">
              <h2>Lebih dari sekedar aplikasi pencatatan keuangan</h2>
            </div>
      
            <div class="row gy-4 justify-content-center">
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box iconbox-blue">
                  <div class="icon">
                    <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                      <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                    </svg>
                    <i class="bi bi-currency-exchange"></i>
                  </div>
                  <h4><a href="">Multi mata uang</a></h4>
                  <p>Transaksi menggunakan mata uang saja dan laporan keuangan dapat tetap dalam rupiah</p>
                </div>
              </div>
      
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box iconbox-orange ">
                  <div class="icon">
                    <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                      <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                    </svg>
                    <i class="bi bi-credit-card-2-back"></i>
                  </div>
                  <h4><a href="">Transaksi berulang</a></h4>
                  <p>Jadwalkan pencatatan transaksi rutin sehingga memudahkan pekerjaan Anda.</p>
                </div>
              </div>
      
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box iconbox-pink">
                  <div class="icon">
                    <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                      <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                    </svg>
                    <i class="bi bi-cloud-check"></i>
                  </div>
                  <h4><a href="">Backup otomatis</a></h4>
                  <p>Anda terbebas dari rasa khawatir kehilangan data pembukuan.</p>
                </div>
              </div>
      
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box iconbox-red">
                  <div class="icon">
                    <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                      <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                    </svg>
                    <i class="bi bi-shield-check"></i>
                  </div>
                  <h4><a href="">Keamanan Data</a></h4>
                  <p>Data Anda dilindungi dengan sistem keamanan enkripsi secara perbankan.</p>
                </div>
              </div>
              </div> 
            </div>
          </div>
        </section><!-- End Services Section -->
      
        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
          <div class="container" data-aos="fade-up">
      
            <div class="section-title">
              <h2>Motto</h2>
            </div>
      
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column align-items-lg-center">
                <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4>Percayakan tugas Anda kepada tim Kami</h4>
                  <p>Serahkan kegiatan Administrasi pada tim dan Anda dapat fokus mengembangkan bisnis. Dengan akses multi-user, Anda dapat membagi tugas kepada anggota tim sesuai dengan kebutuhan.</p>
                </div>
                <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Kerja tanpa batasan ruang</h4>
                  <p>Selesaikan pekerjaan Anda dari mana saja untuk memberikan hasil kerja yang lebih efisien seperti membuat faktur penjualan dan pembelian, cek stok barang, hingga, persetujuan transaksi.</p>
                </div>
                <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-images"></i>
                  <h4>Lihat laporan keuangan setiap saat</h4>
                  <p>Kini Anda tidak perlu menunggu hingga akhir bulan untuk mengetahui kondisi keuangan perusahaan. Lakukan analisa dan pengambilan keputusan lebih cepat untuk kemajuan bisnis Anda.</p>
                </div>
              </div>
              <div class="image col-lg-6 order-1 order-lg-2 " data-aos="zoom-in" data-aos-delay="100">
                <img src="{{url('Techie')}}/assets/img/landing3.png" alt="" class="img-fluid">
              </div>
            </div>
      
          </div>
        </section><!-- End Features Section -->
      
        <section id="features" class="features">
          <!-- Your existing content goes here -->
      
          <!-- New section for clickable content -->
          
          <div class="container" data-aos="fade-up">
            <div class="section-title">
              <h2>Kelola aktivitas koperasi Anda secara menyeluruh</h2>
            </div>
            <div class="row">
              <div class="col-lg-15" data-aos="zoom-in" data-aos-delay="100">
                <div class="clickable-content" onclick="toggleContent()">
                  <img src="{{url('Techie')}}/assets/img/landingbaru.png" alt="Clickable Image" class="img-fluid">
                  <!-- <p id="hidden-content" style="display: none;">This is the hidden content that appears when you click the image.</p> -->
                </div>
              </div>
            </div>
          </div>
          
        </section>
      
      
        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
          <div class="container" data-aos="fade-up">
      
            <div class="section-title">
              <h2>Software akuntansi dapat digunakan di berbagai jenis usaha</h2>
              <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
            </div>
      
            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">
      
                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      Lihat informasi stok dan catat transaksi penjualan dengan perhitungan biaya rata-rata
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                  
                    <h3>Usaha Dagang</h3>
                  </div>
                </div><!-- End testimonial item -->
      
                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      Kelola pelanggan dan memantau nilai piutang serta waktu jatuh tempo piutang dengan mudah, cepat dan akurat
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                   
                    <h3>Usaha Jasa</h3>
                  </div>
                </div><!-- End testimonial item -->
      
                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      Memudahkan kelola proyek dari pembuatan Rencana Anggaran Biaya hingga formulir penyelesaian proyek
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    
                    <h3>Usaha Kontraktor</h3>
                  </div>
                </div><!-- End testimonial item -->
      
                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      Menghitung biaya dan varian produksi secara otomatis untuk dapat memudahkan operasional bisnis Anda
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                   
                    <h3>Usaha Manufaktur</h3>
                  </div>
                </div><!-- End testimonial item -->
      
               
      
              </div>
              <div class="swiper-pagination"></div>
            </div>
      
          </div>
        </section><!-- End Testimonials Section -->
      

    <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
            </div>
            <div class="faq-list">
                <ul>
                    @foreach ($post as $posts)
                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> 
                        <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-{{ $posts->id }}">
                            {{ $posts->question }}
                            <i class="bx bx-chevron-down icon-show"></i>
                            <i class="bx bx-chevron-up icon-close"></i>
                        </a>
                        <div id="faq-list-{{ $posts->id }}" class="collapse show" data-bs-parent=".faq-list">
                            <p>
                                {{ $posts->answer }}
                            </p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    </main>
@endsection