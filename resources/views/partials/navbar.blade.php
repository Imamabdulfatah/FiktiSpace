  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center scrollto me-auto me-lg-0">

        <h2>FiktiSpace<span>.👨‍🚀</span></h2>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/">Home</a></li>
          <li><a class="{{ $cu_about }}" href="#about">{{ $about }}</a></li>
          @auth
            @if (auth()->user()->category_id === 1)
              <li class="dropdown"><a href="/"><span>Sport</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="/event-satu">MOBILE LEGENDS</a></li>
                  <li><a href="/event-dua">FUTSAL</a></li>
                  <li><a href="/event-tiga">BASKET</a></li>
                  <li><a href="/event-empat">BADMINTON</a></li>
                </ul>
              </li>
            @else
            <li class="dropdown"><a href="#"><span>Art</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul>
                <li><a href="/event-lima">SOLO VOCAL</a></li>
                <li><a href="/event-enam">POSTER</a></li>
              </ul>
            </li>
            @endif

          @else
          <li class="dropdown"><a href="/"><span>Sport</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="/event-satu">MOBILE LEGENDS</a></li>
              <li><a href="/event-dua">FUTSAL</a></li>
              <li><a href="/event-tiga">BASKET</a></li>
              <li><a href="/event-empat">BADMINTON</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Art</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="/event-lima">SOLO VOCAL</a></li>
              <li><a href="/event-enam">POSTER</a></li>
            </ul>
          </li>
          @endauth
          
          <li><a class="{{ $cu_timeline }}" href="#timeline">{{ $timeline }}</a></li>
          <li><a class="{{ $cu_faq }}" href="#faq">{{ $faq }}</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      <ul class="navbar-nav">
      @auth

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Welcome back, {{ auth()->user()->name }}
        </a>
        <ul class="dropdown-menu">
          @if ( auth()->user()->name === "Bem FIKTI")
            <li><a class="dropdown-item" href="/admin"><i class="bi bi-columns-gap mx-2"></i>Dashboard Admin</a></li>
          @else
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-columns-gap mx-2"></i>My Dashboard</a></li>
          @endif
        

          <li>
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left mx-2"></i>Logout</button>
            </form>
          </li>
        </ul>
      </li>
          
      @else  
        <a class="btn-getstarted scrollto" href="/login">Login</a>
      @endauth
      </ul>
    </div>
  </header><!-- End Header -->


  @auth

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      Welcome back, {{ auth()->user()->name }}
    </a>
    <ul class="dropdown-menu">

      <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-columns-gap mx-2"></i>My Dashboard</a></li>
    

      <li>
        <form action="/logout" method="post">
          @csrf
          <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left mx-2"></i>Logout</button>
        </form>
      </li>
    </ul>
  </li>
      
  @else  
    <a class="btn-getstarted scrollto" href="/login">Login</a>
  @endauth