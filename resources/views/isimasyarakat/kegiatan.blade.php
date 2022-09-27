<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=no">

  <title>SIMDES-BUBUHAN</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('depan/img/desa.jpg') }}" rel="icon">
  {{-- <link href="{{ asset('depan/img/apple-touch-icon.png') }}" rel="apple-touch-icon"> --}}

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('depan/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('depan/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('depan/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('depan/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('depan/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('depan/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('depan/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('depan/css/isikegiatan.css') }}" rel="stylesheet">

  {{-- icon --}}
<link rel="icon" type="image/x-icon" href="{{ asset('assets/icon/logoicon.ico') }}"/>

</head>

<body>
 <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <h2 class="logo">Desa Bubuhan<span>.</span></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/">Home</a></li>
          <li><a class="nav-link scrollto active" href="/">Kegiatan</a></li>
          <li><a class="nav-link scrollto" href="/">Proyek</a></li>
          <li><a class="nav-link scrollto" href="/">Perangkat</a></li>
          <li><a class="nav-link scrollto" href="/login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
<div class="kotha-default-content">
	<div class="container">
		<div class="row">
			<div class="col-sm-10">
				<article class="single-blog">
					<div class="post-thumb" style="margin-top: 60px;">
						<a href=""><img src="{{ asset('storage/gambar-kegiatan/' . $kegiatan->image) }}" alt=""></a>
					</div>
					<div class="post-content">
						<div class="entry-header text-center text-uppercase">							
							<h2>{{ $kegiatan->judul }}</h2> <br>
              <p class="card-text"><small class="text-muted">{{ $kegiatan->created_at->diffForhumans() }}</small></p>
						</div>
						<div class="entry-content" style="margin-top: 36px; text-align:justify">
							<p>{!! $kegiatan->isi !!}</p>
						</div>
              <a href="/allkegiatan" style="font-size: 12px">Kembali Ke Halaman Kegiatan</a>
					</div>
				</article>
			</div>
		</div>
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
  <script src="{{ asset('depan/js/main.js') }}"></script>

</body>

</html>


{{-- <main class="my-5 p-5">
  <div class="container col-lg-4" style="margin-top: -70px;">
    <!--Section: Content-->
    <section class="text-center">
      <h4 class="mb-4" style="margin-top: -60px"><strong>Postingan Terbaru</strong></h4>
      
      <div class="row" style="justify-content: center">
        <div class="col-md-12 mt-10">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              {{-- <img src="{{ asset('storage/' . $kegiatan->image) }}" class="img-fluid"  style="height: 300px"/> --}}

              {{-- versi online harus di tulis public nya --}}
              {{-- <img src="{{ asset'storage/public/gambar-kegiatan/' . $kegiatan->image) }}" class="img-fluid" style="height: 300px">    --}}

              {{-- versi online harus di apus public nya  --} batas komen
              <img src="{{ asset('storage/gambar-kegiatan/' . $kegiatan->image) }}" class="img-fluid mt-5" style="height: 300px">

              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title mt-3">{{ $kegiatan->judul }}</h5>
              <p class="card-text"><small class="text-muted">{{ $kegiatan->created_at->diffForhumans() }}</small></p>
              <div class="entry-content" style="margin-top: 20px; text-align: justify;">
                <p>{!! $kegiatan->isi !!}</p>
              </div>
              <a href="/allkegiatan" style="font-size: 12px">Kembali Ke Halaman Kegiatan</a>
            </div>
        </div>
      </div>
    </section>      
  </div> 
</main> --}}
