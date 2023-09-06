@extends('layouts.main')

@section('container')
<section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
      <img src="{{ $image }}" class="img-fluid animated">
      <h2>Welcome to <span>{{ $title }}</span></h2>
      <p>{{ $description }}</p>
      <div class="d-flex">
        @foreach ($openclose as $oc)
            @if ($oc->status === "open")
                @auth
                    <a href="/dashboard" class="btn-get-started scrollto ">My Dashboard</a>
                @else  
                    <a href="/registration" class="btn-get-started scrollto ">{{ $daftar }}</a>
                @endauth
                
            @else
                <a href="" class="btn-get-started scrollto disable">Pendaftaran Tutup</a>
            @endif
           
        @endforeach
        
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
                <div class="icon"><i class="bi bi-ticket icon"></i></div>
                <h4><a href="" class="stretched-link">{{ $tiket }}</a></h4>
                {{-- <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> --}}
            </div>
            </div><!-- End Service Item -->

            <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
            <div class="service-item position-relative">
                <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
                <h4><a href="" class="stretched-link">{{ $platform }}</a></h4>
                {{-- <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p> --}}
            </div>
            </div><!-- End Service Item -->

            <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
            <div class="service-item position-relative">
                <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                <h4><a href="" class="stretched-link">{{ $tanggal }}
                </a></h4>
            </div>
            </div><!-- End Service Item -->

            <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
            <div class="service-item position-relative">
                <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                <h4><a href="" class="stretched-link">{{ $lokasi }}</a></h4>
            </div>
            </div><!-- End Service Item -->

        </div>

        </div>
    </section><!-- End Featured Services Section -->



    <!-- ======= Call To Action Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-out">

            <div class="row g-5">

            <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
                <h3>DESCRIPTION</h3>
                <p> {{ $Description }}</p>
                <h3><em>RULES</em></h3>
              
                <p>{{ $rules1 }}</p>
                <p>{{ $rules2 }}</p>
                <p>{{ $rules3 }}</p>
                <p>{{ $rules4 }}</p>
                <h3>{{ $berkas }}</h3>
                <p>{{ $rules5 }}</p>
                <p>{{ $rules6 }}</p>
                <p>{{ $rules7 }}</p>
                <a class="cta-btn align-self-start" href="#">Selengkapnya</a>
                
                <h4 class="mt-3 text-bold text-primary">Contact Person</h4>
                <p>{{ $contact1 }}</p>
                <p>{{ $contact2 }}</p>
               
               
            </div>

            <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
                <div class="img">
                {{-- <img src="/img/cta.jpg" alt="" class="img-fluid"> --}}
                <img src="/img/internet/3.jpg" alt="" class="img-fluid">
                </div>
            </div>

            </div>

        </div>
    </section><!-- End Call To Action Section -->
  </main>

  @endSection