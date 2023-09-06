@extends('layouts.main')

@section('container')
  <section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
      <img src="/img/hero-carousel/hero-carousel-3.svg" class="img-fluid animated">
      <h2>Welcome to <span>{{ $title }}</span></h2>
      {{-- <p>Et voluptate esse accusantium accusamus natus reiciendis quidem voluptates similique aut.</p> --}}
      <div class="d-flex">
        <a href="/login" class="btn-get-started scrollto">Get Started</a>
        {{-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> --}}
      </div>
    </div>
  </section>

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services ">
      <div class="container  d-flex h-100">
        <div class="col-xl-2 col-md-6 d-flex" data-aos="zoom-out">
            <div class="service-item position-relative">
              <div class="icon"><img width="95" src="images/logo-ml1.png" alt="ml logo"></div>
              <h4><a href="/event-satu" class="stretched-link">Mobile Legends</a></h4>
            </div>
          <!-- End Service Item -->

            <div class="service-item position-relative">
              <div class="icon"><img width="80" src="images/logo-futsal1.png" alt=""></div>
              <h4><a href="/event-dua" class="stretched-link">Futsal</a></h4>
            </div>

            <div class="service-item position-relative">
              <div class="icon"><img width="80" src="images/logo-basket1.png" alt="point blank"></div>
              <h4><a href="/event-tiga" class="stretched-link">Basket</a></h4>
            </div>

            <div class="service-item position-relative">
              <div class="icon"><img width="80" src="images/logo-badminton1.png" alt="photografy"></div>
              <h4><a href="/event-empat" class="stretched-link" >Badminton</a></h4>
            </div>

            <div class="service-item position-relative">
              {{-- <div class="icon"><i class="bi bi-broadcast icon"></i></div> --}}
              <div class="icon"><img width="90" src="images/logo-poster1.png" alt=""></div>
              <h4><a href="/event-lima" class="stretched-link">Poster</a></h4>
            </div>

            <div class="service-item position-relative">
              {{-- <div class="icon"><i class="bi bi-broadcast icon"></i></div> --}}
              <div class="icon"><img width="70" src="images/logo-song2.png" alt=""></div>
              <h4><a href="/event-enam" class="stretched-link">Solo Vocal</a></h4>
            </div>
          <!-- End Service Item -->
        </div>
      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>About Us</h2>
          <p>FIKTI Sport and Art Championship merupakan program kerja dari Bidang olahraga dan Seni Budaya BEM FIKTI UG Universitas Gunadarma yang dikolaborasikan dengan dua program kerja BEM FIKTI UG sebelumnya yaitu FOSC dan FAF yang berisikan sebuah rangkaian kompetisi olahraga dan Seni Budaya</p>
        </div>
        <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-5">
            <div class="about-img">
              <img src="/img/internet/8.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-7">
            <h3 class="pt-0 pt-lg-5">Tujuan dari kompetisi sport dan art</h3>
            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">SPORT & ART</a></li>
              {{-- <li><a class="nav-link" data-bs-toggle="pill" href="#tab2">ART</a></li> --}}
            </ul><!-- End Tabs -->
            <!-- Tab Content -->
            <div class="tab-content">
              <div class="tab-pane fade show active" id="tab1">
                {{-- <p class="fst-italic">Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p> --}}
                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Menjadi wadah bagi Mahasiswa/i Universitas Gunadarma untuk menyalurkan minat dan
                    bakatnya di bidang olahraga dan seni.</h4>
                </div>
                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Menumbuhkan jiwa sportivitas dalam bidang olahraga dan seni.</h4>
                </div>
                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Sebagai ajang penemuan mahasiswa/i unggul di bidang olahraga dan seni serta dapat
                    bersaing di tingkat yang lebih tinggi.</h4>
                </div>
                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Meningkatkan rasa semangat dan daya juang mahasiswa/i dalam meraih prestasi di bidang
                    non akademik.</h4>
                </div>
                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Menumbuhkan rasa cinta mahasiswa/i terhadap kesenian dan kebudayaan Indonesia.</h4>
                </div>
             
              </div><!-- End Tab 1 Content -->
             
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= On Focus Section ======= -->
    <section id="onfocus" class="onfocus">
      <div class="container-fluid p-0" data-aos="fade-up">
        <div class="row g-0">
          <div class="col-lg-6 video-play position-relative">
            {{-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a> --}}
          </div>
          <div class="col-lg-6">
            <div class="content d-flex flex-column justify-content-center h-100">
              <h3>Ayo ikuti FIKTI SPACE sekarang sebelum ketinggalan</h3>
              <a href="/registration" class="read-more align-self-start"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End On Focus Section -->

    <!-- End Features Section -->
    <section id="timeline" class="features">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-timeline">
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <span class="timeline-year">1</span>
                            <div class="timeline-icon">
                                <i class="fa fa-globe"></i>
                            </div>
                            <h3 class="title">Pendaftaran</h3>
                            <p>23 Mei 2023 s.d 10 Juni 2023</p>
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <span class="timeline-year">2</span>
                            <div class="timeline-icon">
                                <i class="fa fa-rocket"></i>
                            </div>
                            <h3 class="title">Technical Meeting</h3>
                            <p>Sabtu, 10 Juni 2023</p>
                        </a>
                    </div>
                    <div class="timeline">
                      <a href="#" class="timeline-content">
                          <span class="timeline-year">3</span>
                          <div class="timeline-icon">
                              <i class="fa fa-globe"></i>
                          </div>
                          <h3 class="title">Pembukaan & Kompetisi</h3>
                          <p>Sabtu, 17 Juni 2023</p>
                      </a>
                  </div>
                  <div class="timeline">
                      <a href="#" class="timeline-content">
                          <span class="timeline-year">4</span>
                          <div class="timeline-icon">
                              <i class="fa fa-rocket"></i>
                          </div>
                          <h3 class="title">Penutupan</h3>
                          <p>Sabtu, 24 Juni 2023</p>
                      </a>
                  </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
          @auth
            @if (auth()->user()->category_id === 1)
            <div class="section-header">
              <h2>Sport</h2>
              <p>Detail Mengenai Kompetisi Sport FIKTI SPACE</p>
            </div>
            <div class="row gy-5">
              <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="500">
                <div class="service-item">
                  <div class="img">
                    <img src="/img/internet/bg-badminton.png" class="img-fluid" alt="">
                  </div>
                  <div class="details position-relative">
                    <div class="icon">
                      <i class="bi bi-bounding-box-circles"></i>
                    </div>
                    <a href="/event-empat" class="stretched-link">
                      <h3>Badminton</h3>
                    </a>
                    <p>Lomba badminton adalah sebuah kompetisi olahraga yang melibatkan pemain individu atau tim yang bertujuan untuk mencapai prestasi terbaik dalam olahraga ini.</p>
                    {{-- <a href="#" class="stretched-link"></a> --}}
                    <a href="/event-empat" class="mt-4 read-more align-self-start"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div><!-- End Service Item -->
          
              <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="service-item">
                  <div class="img">
                    <img src="/img/internet/bg-futsal.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="details position-relative">
                    <div class="icon">
                      <i class="bi bi-broadcast"></i>
                    </div>
                    <a href="/event-dua" class="stretched-link">
                      <h3>Futsal</h3>
                    </a>
                    <p>Lomba futsal adalah turnamen olahraga yang melibatkan tim-tim kecil dalam permainan sepak bola yang dimainkan di lapangan indoor dengan aturan yang disesuaikan, mengutamakan kecepatan, kelincahan, dan teknik individu.
                    </p>
                    <a href="/event-dua" class="mt-4 read-more align-self-start"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div><!-- End Service Item -->

              <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                <div class="service-item">
                  <div class="img">
                    <img src="/img/internet/bg-basket.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="details position-relative">
                    <div class="icon">
                      <i class="bi bi-easel"></i>
                    </div>
                    <a href="event-tiga" class="stretched-link">
                      <h3>Basket</h3>
                    </a>
                    <p>Lomba basket adalah kompetisi olahraga yang melibatkan dua tim yang bertarung untuk mencetak poin dengan melempar bola ke keranjang lawan, memadukan kekuatan fisik, kecepatan, ketangkasan, dan strategi tim.</p>
                    <a href="event-tiga" class="mt-4 read-more align-self-start"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div><!-- End Service Item -->

              <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="service-item">
                  <div class="img">
                    <img src="/img/internet/ds_ml.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="details position-relative">
                    <div class="icon">
                      <i class="bi bi-activity"></i>
                    </div>
                    <a href="/event-satu" class="stretched-link">
                      <h3>Mobile Legends</h3>
                    </a>
                    <p>Lomba Mobile Legends adalah kompetisi esports yang melibatkan pemain-pemain yang bermain secara tim dalam permainan mobile MOBA yang intens dan strategis.</p>
                    <a href="/event-satu" class="mt-4 read-more align-self-start"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div><!-- End Service Item -->
            @else
            <div class="container" data-aos="fade-up">
              <div class="section-header">
                <h2>Art</h2>
                <p>Detail Mengenai Kompetisi Art FIKTI SPACE</p>
              </div>
              <div class="row gy-5">
              <div class="col-xl-6 col-md-6" data-aos="zoom-in" data-aos-delay="600">
                <div class="service-item">
                  <div class="img">
                    <img src="/img/internet/ds_sv.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="details position-relative">
                    <div class="icon">
                      <i class="bi bi-calendar4-week"></i>
                    </div>
                    <a href="/event-lima" class="stretched-link">
                      <h3>Solo Vocal</h3>
                    </a>
                    <p>Lomba solo vocal adalah ajang kompetisi di mana para peserta tampil secara individu untuk memperlihatkan bakat menyanyi mereka dengan suara yang indah, ekspresi yang mendalam, dan kemampuan vokal yang memukau.</p>
                    <a href="/event-lima" class="mt-4 read-more align-self-start"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div><!-- End Service Item -->

              <div class="col-xl-6 col-md-6" data-aos="zoom-in" data-aos-delay="700">
                <div class="service-item">
                  <div class="img">
                    <img src="/img/internet/ds_ph.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="details position-relative">
                    <div class="icon">
                      <i class="bi bi-chat-square-text"></i>
                    </div>
                    <a href="/event-enam" class="stretched-link">
                      <h3>Poster</h3>
                    </a>
                    <p>Lomba poster adalah kompetisi di mana peserta berkompetisi untuk menciptakan poster kreatif dan informatif yang menggunakan desain visual dan elemen grafis untuk menyampaikan pesan yang kuat dan menarik perhatian.</p>
                    <a href="/event-enam" class="mt-4 read-more align-self-start"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div><!-- End Service Item -->          
            @endif

          @else
          <div class="container" data-aos="fade-up">
            <div class="section-header">
              <h2>Sport & Art</h2>
              <p>Detail Mengenai Kompetisi Sport dan Art FIKTI SPACE</p>
            </div>
            <div class="row gy-5">
            <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
              <div class="service-item">
                <div class="img">
                  <img src="/img/internet/bg-badminton.png" class="img-fluid" alt="">
                </div>
                <div class="details position-relative">
                  <div class="icon">
                    <i class="bi bi-bounding-box-circles"></i>
                  </div>
                  <a href="/event-empat" class="stretched-link">
                    <h3>Badminton</h3>
                  </a>
                  <p>Lomba badminton adalah sebuah kompetisi olahraga yang melibatkan pemain individu atau tim yang bertujuan untuk mencapai prestasi terbaik dalam olahraga ini.</p>
                  {{-- <a href="#" class="stretched-link"></a> --}}
                  <a href="/event-empat" class="mt-4 read-more align-self-start"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div><!-- End Service Item -->
        
            <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
              <div class="service-item">
                <div class="img">
                  <img src="/img/internet/bg-futsal.jpg" class="img-fluid" alt="">
                </div>
                <div class="details position-relative">
                  <div class="icon">
                    <i class="bi bi-broadcast"></i>
                  </div>
                  <a href="/event-dua" class="stretched-link">
                    <h3>Futsal</h3>
                  </a>
                  <p>Lomba futsal adalah turnamen olahraga yang melibatkan tim-tim kecil dalam permainan sepak bola yang dimainkan di lapangan indoor dengan aturan yang disesuaikan, mengutamakan kecepatan, kelincahan, dan teknik individu.
                  </p>
                  <a href="/event-dua" class="mt-4 read-more align-self-start"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div><!-- End Service Item -->

            <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
              <div class="service-item">
                <div class="img">
                  <img src="/img/internet/bg-basket.jpg" class="img-fluid" alt="">
                </div>
                <div class="details position-relative">
                  <div class="icon">
                    <i class="bi bi-easel"></i>
                  </div>
                  <a href="event-tiga" class="stretched-link">
                    <h3>Basket</h3>
                  </a>
                  <p>Lomba basket adalah kompetisi olahraga yang melibatkan dua tim yang bertarung untuk mencetak poin dengan melempar bola ke keranjang lawan, memadukan kekuatan fisik, kecepatan, ketangkasan, dan strategi tim.</p>
                  <a href="event-tiga" class="mt-4 read-more align-self-start"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div><!-- End Service Item -->

            <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
              <div class="service-item">
                <div class="img">
                  <img src="/img/internet/ds_ml.jpg" class="img-fluid" alt="">
                </div>
                <div class="details position-relative">
                  <div class="icon">
                    <i class="bi bi-activity"></i>
                  </div>
                  <a href="/event-satu" class="stretched-link">
                    <h3>Mobile Legends</h3>
                  </a>
                  <p>Lomba Mobile Legends adalah kompetisi esports yang melibatkan pemain-pemain yang bermain secara tim dalam permainan mobile MOBA yang intens dan strategis.</p>
                  <a href="/event-satu" class="mt-4 read-more align-self-start"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div><!-- End Service Item -->

            <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
              <div class="service-item">
                <div class="img">
                  <img src="/img/internet/ds_sv.jpg" class="img-fluid" alt="">
                </div>
                <div class="details position-relative">
                  <div class="icon">
                    <i class="bi bi-calendar4-week"></i>
                  </div>
                  <a href="/event-lima" class="stretched-link">
                    <h3>Solo Vocal</h3>
                  </a>
                  <p>Lomba solo vocal adalah ajang kompetisi di mana para peserta tampil secara individu untuk memperlihatkan bakat menyanyi mereka dengan suara yang indah, ekspresi yang mendalam, dan kemampuan vokal yang memukau.</p>
                  <a href="/event-lima" class="mt-4 read-more align-self-start"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div><!-- End Service Item -->

            <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
              <div class="service-item">
                <div class="img">
                  <img src="/img/internet/ds_ph.jpg" class="img-fluid" alt="">
                </div>
                <div class="details position-relative">
                  <div class="icon">
                    <i class="bi bi-chat-square-text"></i>
                  </div>
                  <a href="/event-enam" class="stretched-link">
                    <h3>Poster</h3>
                  </a>
                  <p>Lomba poster adalah kompetisi di mana peserta berkompetisi untuk menciptakan poster kreatif dan informatif yang menggunakan desain visual dan elemen grafis untuk menyampaikan pesan yang kuat dan menarik perhatian.</p>
                  <a href="/event-enam" class="mt-4 read-more align-self-start"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div><!-- End Service Item -->
          @endauth
          
        </div>
      </div>
    </section>
    <!-- End Services Section -->
    
    <!-- ======= Clients Section ======= -->
    {{-- <section id="clients" class="clients">
      <div class="section-header">
        <h2>Media Parther</h2>
      </div>
      <div class="container" data-aos="zoom-out">
        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>
    </section> --}}
    <!-- End Clients Section -->

    <!-- ======= Clients Section ======= -->
    {{-- <section id="clients" class="clients">
      <div class="section-header">
        <h2>Sponsor</h2>
      </div>
      <div class="container" data-aos="zoom-out">
        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
        </div>
      </div>
    </section> --}}
    <!-- End Clients Section -->


    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content px-xl-5">
              <h3><strong>Questions</strong></h3>
              <p>
                Keterangan mengenai Kompetisi Fikti Space
              </p>
            </div>

            <div class="accordion accordion-flush px-xl-5" id="faqlist">

              <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <i class="bi bi-question-circle question-icon"></i>
                    Bagaimana Cara Registrasi ?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Masuk ke lomba yang dipilih dinavbar atau sport & art kemudian klik daftar isi datadiri untuk akun selanjutnya Login dengan email dan password masukan datadiri yang mengikuti lomba dan ke berkas dan pembayaran untuk upload bukti berkas dan biaya lomba pendaftaran selesai tinggal menunggu konfirmasi dan informasi lebih lanjut
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <i class="bi bi-question-circle question-icon"></i>
                    Siapa saja yang boleh mengikuti Fiksti Space ?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    <p> - Semua siswa SMA Sederajat dan mahasiswa se-indonesia untuk lomba Poster dan SoloVocal</p>
                    <p> - Mahasiswa FIKTI(Fakulatas Ilmu komputer dan Teknologi Informasi) Universitas Gunadarma untuk lomba Futsal, Basket dan Badminton</p>
                    <p> - Seluruh Mahasiswa Universitas Gunadarma untuk Mobile Legends </p> 
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <i class="bi bi-question-circle question-icon"></i>
                    Apa saja syarat mengikuti Fikti Space ?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    <p>  - Scan kartu pelajar atau KTM dan Pas Foto 3 X 4(background Bebas) untuk lomba Solo Vocal dan Poster</p>
                    <p>     - KRS atau blanko pembayaran untuk lomba Mobile legend, Futsal, Basket, Badminton</p>
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <i class="bi bi-question-circle question-icon"></i>
                   Apa saja manfaat mengikuti Fikti Space ?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    <i class="bi bi-question-circle question-icon"></i>
                      Akan ada hadiah serta sertifikat bagi pemenang lomba serta dapat bertemu teman dan relasi baru 
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <i class="bi bi-question-circle question-icon"></i>
                   Apakah ada biaya mengikuti Fikti Space ?
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                      <p>Untuk  Mobile legends akan di kenakan biaya Rp. 50.000/tim </p>
                      <p>Untuk futsal, basket akan dikenakan biaya Rp. 100,00/tim</p>
                      <p>Untuk Badminton akan dikenakan biaya Rp. 30.000/tim</p>
                      <p>Untuk Solo Vocal dan Poster akan dikenakan biaya Rp. 30.00/Orang</p>
                      
                  </div>
                </div>
              </div><!-- # Faq item-->

            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("/img/faq.jpg");'>&nbsp;</div>
        </div>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-header">
          <h2>Contact Us</h2>
          <p>Contact digunakan untuk memberikan tanggapan mengenai website, kendala penggunaan, mereview website dan lainnya </p>
        </div>
      </div>
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.31712394597!2d106.83528272469783!3d-6.352975993636921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec38d4f7cf23%3A0xac6a328c299b269d!2sUniversitas%20Gunadarma%20Kampus%20H!5e0!3m2!1sid!2sid!4v1682266626511!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div><!-- End Google Maps -->
      <div class="container">
        <div class="row gy-5 gx-lg-5">
          <div class="alert alert-success alert-dismissible fade show d-none alert-saya" role="alert">
            <strong>Terimakasih Pesan dan masukan Anda Sudah diterima</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <div class="col-lg-4">
            <div class="info">
              <h3>Dapatkan Informasi Lomba</h3>
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>Sport Center Kampus H, Universitas Gunadarma , Depok</p>
                </div>
              </div><!-- End Info Item -->
              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>pti.bemfikti@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>Whatsapp : Mila (085822082131)</p>
                  <p>Line :Selpiyana @selpiyanaaa</p>
                </div>
              </div><!-- End Info Item -->
            </div>
          </div>
         
          <div class="col-lg-8">
            <form name="contact-fikti-space" action="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" id="message" name="message" placeholder="Message" required></textarea>
              </div>
               <label for="slider" class="my-2 text-xl text-bold">Silahkan Beri penilaian [Dengan Mengeser slider] :</label>
                      <input name="penilaian" id="large-range" type="range" min="1" max="10" value="1" class="w-full h-3 bg-gray-200 rounded-lg appearance-none cursor-pointer range-lg dark:bg-gray-700" >
                      <p class=" text-xl text-bold ml-42">Nilai : <span id="value">1</span></p>
              {{-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> --}}
              <div class="text-center">
                <button class="btn btn-primary btn-kirim" type="submit">Kirim</button>
                <button class="btn btn-primary d-none btn-loading" type="button" disabled>
                  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                  Loading...
                </button>
              </div>
            </form>
          </div><!-- End Contact Form -->
        </div>
      </div>
    </section>
    <!-- End Contact Section -->

  </main><!-- End #main -->
 @endSection