<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SIMDES-BUBUHAN</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="depan/img/desa.jpg" rel="icon">
  <link href="depan/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="depan/vendor/aos/aos.css" rel="stylesheet">
  <link href="depan/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="depan/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="depan/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="depan/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="depan/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="depan/css/style.css" rel="stylesheet">

  {{-- icon --}}
<link rel="icon" type="image/x-icon" href="{{ asset('assets/icon/logoicon.ico') }}"/>

  
</head>

<style>

  h2{
      position: relative;
      font-size: 5rem;
      font-family: sans-serif;
      /* -webkit-text-stroke: 0.3vw #080808; */
      text-transform: uppercase;
  }

  h2::before{
      content: attr(data-text);
      position: absolute;
      top: 0;
      left: 0;
      width: 0%;
      height: 100%;
      color: #ffffff;
      /* -webkit-text-stroke: 0vw #863b3b; */
      /* border-right: 2px solid #4fed51; */
      overflow: hidden;
      animation: animate 6s linear infinite;
      -webkit-animation: animate 6s linear infinite;

  }

  @keyframes animate{
      0%{
          width: 0;
      }
      70%{
          width: 100%;
      }
  }

      #intro {
        /* Margin to fix overlapping fixed navbar */
        margin-top: 58px;
      }
      @media (max-width: 991px) {
        #intro {
          /* Margin to fix overlapping fixed navbar */
          margin-top: 45px;
        }
      }


</style>

<body>

 <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h2 class="logo">Desa Bubuhan<span>.</span></h1>
        {{-- <a href="skrskck" target="_blank">download</a> --}}
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Kegiatan</a></li>
          <li><a class="nav-link scrollto" href="#services">Proyek</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Perangkat</a></li>
          <li><a class="nav-link scrollto" href="/login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h2 data-text="Selamat Datang Di Aplikasi" style="font-size:30px; color:rgba(0, 0, 0, 0.7)">Selamat Datang Di Aplikasi</h2>
      <h2 data-text="Tata Kelola Dan Pelayanan Desa Bubuhan">Tata Kelola Dan Pelayanan Desa Bubuhan</h2>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <h3>Kegiatan</h3>
                <div class="carousel-inner mt-4">
                  @foreach ($datakegiata as $kegiatan)
                  <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : '' }}">
                    {{-- <img src="{{ asset('storage/' . $kegiatan->image) }}" style="height: 450px ; background-size:cover" class="d-block w-100" alt="..."> --}}

                    {{-- versi ofline publicnya di tulis --}}
                    {{-- <img src="{{ asset('storage/public/gambar-kegiatan/' . $kegiatan->image) }}" alt="Admin" class="rounded-circle" width="150">    --}}

                    {{-- versi online publicnya di ilangin --}}
                    <img src="{{ asset('storage/gambar-kegiatan/' . $kegiatan->image) }}" style="height: 450px ; background-size:cover" class="d-block w-100">   
                  </div>
                  @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>

            <div class="col-md-6 p-5  pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="100">
              <h3>Agenda.</h3>
              <ul>
                <li>
                  {{-- <i class="bx bx-store-alt"></i> --}}                  
                  @foreach ($daftaragenda as $agenda)            
                  <div>
                    <h5>{{ $agenda->tanggalagenda->isoFormat('DD MMMM Y') }}</h5>
                    <p>{{ $agenda->judulagenda }}</p>
                  </div>
                  @endforeach
                  <div class="container" style="margin-top: 40px">
                    <a href="/allagenda" class="">show all agenda</a>
                    </div> 
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
      <div class="container" style="margin-top: 40px">
      <a href="/allkegiatan" class="btn btn-primary">show all kegiatan</a>
      </div> 
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <main class="my-5">
        <div class="container" style="margin-top: -70px;">
          <!--Section: Content-->
          <section class="text-center">
            <h4 class="mb-5" style="margin-top: -60px"><strong>Postingan Terbaru</strong></h4>
    
            
            
            <div class="row">
              @foreach ($daftarproyek as $proyek)
              <div class="col-lg-4 col-md-12 mb-4">
                <div class="card" style="height:100%;">
                  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    {{-- <img src="{{ asset('storage/' . $proyek->image) }}" class="img-fluid"   style="height: 300px; width:100%;"/> --}}

                    {{-- versi ofline public nya di tulis --}}
                    {{-- <img src="{{ asset('storage/public/gambar-proyek/' . $proyek->image) }}" alt="Admin" class="rounded-circle" width="150">    --}}

                    {{-- versi online public nya di ilangin --}}
                    <img src="{{ asset('storage/gambar-proyek/' . $proyek->image) }}" class="img-fluid"   style="height: 300px; width:100%;">   
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">{{ $proyek->judul }}</h5>
                    <p class="card-text"><small class="text-muted">{{ $proyek->created_at->diffForhumans() }}</small></p>
                    <p class="card-text" style="text-align: justify;">
                      {!! $proyek->excerpt !!} 
                    </p>
                    {{-- /postproyek/{{ $postproyek->id }} --}}
                    <a href="/isiproyek/{{ $proyek->id }}" class="btn btn-primary">Selengkapnya</a>
                  </div>
                </div>
              </div>
              @endforeach
    
              
            </div>
          </section>
          <!--Section: Content-->
    
          <!-- Pagination -->
          
        </div> 
        <div class="container" style="margin-top: -50px; margin-bottom: -100px;">
          <a href="/allproyek" class="btn btn-primary">show all Proyek</a> 
        </div>
      </main>
      
      
    </section><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="zoom-in">      
              <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">      
                    @foreach ($dataperangkat as $perangkat)                    
                  <div class="swiper-slide  {{ $loop->iteration == 1 ? 'active' : '' }}">
                    <div class="testimonial-item">
                      {{-- <i class="bx bxs-quote-alt-left quote-icon-left"></i> --}}
                      {{-- <span class="fa fa-user-o"></span> --}}
                      {{-- <img src=" {{ asset('storage/' . $perangkat->image) }}" class="testimonial-img" alt=""> --}}

                      {{-- untuk yang versi ofline pakai public  --}}
                      {{-- <img src="{{ asset('storage/public/gambar-perangkat/' . $perangkat->image) }}" alt="Admin" class="rounded-circle" width="150">   --}}

                      {{-- untuk versi yang online tidak pakai public --}}
                      <img src="{{ asset('storage/gambar-perangkat/' . $perangkat->image) }}" class="testimonial-img">   
                     
                      <h3>{{ $perangkat->nama }}</h3>
                      <h3>{{ $perangkat->jabatan }}</h3>
                      <h3>
                        {{ $perangkat->notelpon }}
                        {{-- <i class="bx bxs-quote-alt-right quote-icon-right"></i> --}}
                      </h3>
                    </div>
                </div><!-- End testimonial item -->      
                @endforeach
                </div>
                {{-- <div class="swiper-pagination"></div> --}}
              </div>      
            </div>
        </section>
        <div class="container" style="margin-top:40px">
          <a href="/allperangkat" class="btn btn-primary">show all</a> 
          </div>
        {{-- <a href="/allperangkat" class="btn btn-primary">show</a> --}}
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->
  <div class="container py-4 text-center">
    <div class="copyright">
      &copy; Copyright <strong><span>Hidayatullah</span></strong>.
    </div>
  </div>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="depan/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="depan/vendor/aos/aos.js"></script>
  <script src="depan/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="depan/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="depan/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="depan/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="depan/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="depan/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="depan/js/main.js"></script>
  <script src="depan/js/proyek.js"></script>

</body>

</html>

