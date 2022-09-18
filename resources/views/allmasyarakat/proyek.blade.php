<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=no">

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
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="/">Kegiatan</a></li>
          <li><a class="nav-link scrollto active" href="/">Proyek</a></li>
          <li><a class="nav-link scrollto" href="/">Perangkat</a></li>
          <li><a class="nav-link scrollto" href="/login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <main class="my-5">
    <div class="container" style="margin-top: -70px;">
      <!--Section: Content-->
      <section class="text-center">
        <h4 class="mb-5" style="margin-top: -60px"><strong>Postingan Terbaru</strong></h4>
        
        <div class="row">
          @foreach ($daftarproyek as $proyek)
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card" style="height:100%;  margin-top: 80px;">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                {{-- <img src="{{ asset('storage/' . $proyek->image) }}" class="img-fluid"  style="height: 300px;"/> --}}

                {{-- jika masih local/ofline maka public nya ditulis --}}
                {{-- <img src="{{ asset('storage/public/gambar-proyek/' . $proyek->image) }}" alt="Admin" class="img-fluid" style="height: 300px">    --}}

                {{-- jika sudah online maka publiv nya di hapus --}}
                <img src="{{ asset('storage/gambar-proyek/' . $proyek->image) }}" alt="Admin" class="img-fluid" style="height: 300px">   
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">{{ $proyek->judul }}</h5>
                <p class="card-text" style="text-align: justify;">
                  {!! $proyek->excerpt !!} 
                </p>
                <a href="/isiproyek/{{ $proyek->id }}" class="btn btn-primary">Selengkapnya</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </section>      
    </div> 
  </main>

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

</body>

</html>