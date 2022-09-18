
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SIMDES-BUBUHAN</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="depan/vendor/aos/aos.css" rel="stylesheet">
        <link href="depan/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="depan/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="depan/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="depan/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="depan/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
      
        <!-- Template Main CSS File -->
        <link href="{{ asset('depan/css/style.css') }}" rel="stylesheet">

        {{-- icon --}}
<link rel="icon" type="image/x-icon" href="{{ asset('assets/icon/logoicon.ico') }}"/>

    </head>
    {{-- <style type="text/css">
    
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins' sans-serif;
        }

        body{
            /* background: #FEFBF6;
            background: #E0EAFC; */

        }
        
        .card{
            /* margin-top: 180px;
            margin-left: 100px; */
            position: relative;
            width: 350px;
            height: 190px;
            background: #F9F9F9;
            border-radius: 20px;
            /* box-shadow: 0 35px 80px rgba(0,0,0,0,15); */
            transition: 0.5s;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.35);
        }

        .card:hover{
            height: 300px;
        }

        .imgBx{
            position: absolute;
            left: 50%;
            top: -50px;
            transform: translateX(-50%);
            width: 170px;
            height: 150px;
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.35);
            overflow: hidden;
        }

        .card:hover .imgBx{
            width: 200px;
            height: 200px;
        }

        .imgBx img{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* transition: 0.5s; */
        }

        .card .content{
            position: absolute;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: flex-end;
        }

        .card .content .details{
            padding: 40px;
            text-align: center;
            width: 100%;
            transition: 0.5s;
        }

        .card .content .details h2{
            font-size: 1.25em;
            font-weight: 600;
            color: #555;
            line-height: 1.2em
        }

        .card .content .details h2 span{
            font-size: 0.75em;
            font-weight: 500;
            opacity: 0.5;;
        }

    </style> --}}
    <style>
            /* Importing fonts from Google */
                /* @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap'); */

                /* Reseting */
                /* * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                    font-family: 'Poppins', sans-serif;
                } */

                /* body {
                    min-height: 100vh;
                    /* background: linear-gradient(to bottom, #000428, #004683); *
                } */

                /* .container {
                    margin-top: 100px;
                } */

                .container .row .col-lg-4 {
                    display: flex;
                    justify-content: center;
                }

                .card {
                    position: relative;
                    padding: 0;
                    margin: 0 !important;
                    border-radius: 20px;
                    overflow: hidden;
                    max-width: 280px;
                    max-height: 340px;
                    cursor: pointer;
                    border: none;
                    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);

                }

                .card .card-image {
                    width: 100%;
                    max-height: 340px;
                }

                .card .card-image img {
                    width: 100%;
                    max-height: 340px;
                    object-fit: cover;
                }

                .card .card-content {
                    position: absolute;
                    bottom: -180px;
                    color: rgb(12, 11, 11);
                    background: rgba(255, 255, 255, 0.2);
                    backdrop-filter: blur(15px);
                    min-height: 140px;
                    width: 100%;
                    transition: bottom .4s ease-in;
                    box-shadow: 0 -10px 10px rgba(255, 255, 255, 0.1);
                    border-top: 1px solid rgba(255, 255, 255, 0.2);
                }

                .card:hover .card-content {
                    bottom: 0px;
                }

                .card:hover .card-content h4,
                .card:hover .card-content h5 {
                    transform: translateY(10px);
                    opacity: 1;
                }

                .card .card-content h4,
                .card .card-content h5 {
                    font-size: 1.1rem;
                    text-transform: uppercase;
                    letter-spacing: 3px;
                    text-align: center;
                    transition: 0.8s;
                    font-weight: 500;
                    opacity: 0;
                    transform: translateY(-40px);
                    transition-delay: 0.2s;
                }

                .card .card-content h5 {
                    transition: 0.5s;
                    font-weight: 200;
                    font-size: 0.8rem;
                    letter-spacing: 2px;
                }

                .card .card-content .social-icons {
                    list-style: none;
                    padding: 0;
                }


                .card .card-content .social-icons li {
                    margin: 10px;
                    transition: 0.5s;
                    transition-delay: calc(0.15s * var(--i));
                    transform: translateY(50px);
                }


                .card:hover .card-content .social-icons li {
                    transform: translateY(20px);
                }

                .card .card-content .social-icons li a {
                    color: #fff;
                }

                .card .card-content .social-icons li a span {
                    font-size: 1.3rem;
                }

                @media(max-width: 991.5px) {
                    .container {
                        margin-top: 20px;
                    }

                    .container .row .col-lg-4 {
                        margin: 20px 0px;
                    }
                }
    </style>
        
    <body id="home">
        <!-- Navigation-->
 <!-- ======= Header ======= -->
 <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <h2 class="logo">Desa Bubuhan<span>.</span></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="/">Kegiatan</a></li>
          <li><a class="nav-link scrollto" href="/">Proyek</a></li>
          <li><a class="nav-link scrollto active" href="/">Perangkat</a></li>
          <li><a class="nav-link scrollto" href="/login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
        

     <section class="mb-5 container" id="perangkat" style="margin-top:50px">
        <div class="container">
            <div class="row">
                @foreach ($daftarperangkat as $perangkat)
                    <div class="col-lg-4 p-5">
                        <div class="card p-0">
                            <div class="card-image">
                                {{-- <img src="{{ asset('storage/' . $perangkat->image) }}" alt=""> --}}

                                {{-- jika masih menggunakan local maka public nya di tulis --}}
                                {{-- <img src="{{ asset('storage/public/gambar-perangkat/' . $perangkat->image) }}" alt="Admin" class="rounded-circle" width="150">    --}}

                                {{-- jika sudah online maka public nya di hapus --}}
                                <img src="{{ asset('storage/gambar-perangkat/' . $perangkat->image) }}">   
                            </div>
                            <div class="card-content d-flex flex-column align-items-center">
                                <h4 class="pt-2">{{ $perangkat->nama }}</h4>
                                <h5>{{ $perangkat->jabatan }}</h5>
                                <h5>{{ $perangkat->notelpon }}</h5>        
                                <ul class="social-icons d-flex justify-content-center">
                                    <li style="--i:1">
                                        <a href="#">
                                            <span class="fab fa-facebook"></span>
                                        </a>
                                    </li>
                                    <li style="--i:2">
                                        <a href="#">
                                            <span class="fab fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li style="--i:3">
                                        <a href="#">
                                            <span class="fab fa-instagram"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-lg-4">
                    <div class="card p-0">
                        <div class="card-image">
                            <img src="gambar/dayat.jpg"
                                alt="">
                        </div>
                        <div class="card-content d-flex flex-column align-items-center">
                            <h4 class="pt-2">SomeOne Famous</h4>
                            <h5>Creative Desinger</h5>
    
                            <ul class="social-icons d-flex justify-content-center">
                                <li style="--i:1">
                                    <a href="#">
                                        <span class="fab fa-facebook"></span>
                                    </a>
                                </li>
                                <li style="--i:2">
                                    <a href="#">
                                        <span class="fab fa-twitter"></span>
                                    </a>
                                </li>
                                <li style="--i:3">
                                    <a href="#">
                                        <span class="fab fa-instagram"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card p-0">
                        <div class="card-image">
                            <img src="gambar/dayat.jpg"
                                alt="">
                        </div>
                        <div class="card-content d-flex flex-column align-items-center">
                            <h4 class="pt-2">SomeOne Famous</h4>
                            <h5>Creative Desinger</h5>
    
                            <ul class="social-icons d-flex justify-content-center">
                                <li style="--i:1">
                                    <a href="#">
                                        <span class="fab fa-facebook"></span>
                                    </a>
                                </li>
                                <li style="--i:2">
                                    <a href="#">
                                        <span class="fab fa-twitter"></span>
                                    </a>
                                </li>
                                <li style="--i:3">
                                    <a href="#">
                                        <span class="fab fa-instagram"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>    
                <div class="col-lg-4">
                    <div class="card p-0">
                        <div class="card-image">
                            <img src="gambar/dayat.jpg"
                                alt="">
                        </div>
                        <div class="card-content d-flex flex-column align-items-center">
                            <h4 class="pt-2">SomeOne Famous</h4>
                            <h5>Creative Desinger</h5>
    
                            <ul class="social-icons d-flex justify-content-center">
                                <li style="--i:1">
                                    <a href="#">
                                        <span class="fab fa-facebook"></span>
                                    </a>
                                </li>
                                <li style="--i:2">
                                    <a href="#">
                                        <span class="fab fa-twitter"></span>
                                    </a>
                                </li>
                                <li style="--i:3">
                                    <a href="#">
                                        <span class="fab fa-instagram"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>     --}}
            </div>
        </div>
        {{-- <div class="container px-4 px-lg-5"> --}}
            {{-- <div class="row">
                @foreach ($daftarperangkat as $perangkat)
                    <div class="p-3 col-md-4" style=" height: 400px;">
                        <div class="card">
                            <div class="imgBx">
                                <img src="{{ asset('storage/' . $perangkat->image) }}">
                            </div>
                            <div class="content">
                                <div class="details">
                                    <h2>{{ $perangkat->nama }}<br>
                                        <span>{{ $perangkat->jabatan }}</span><br>    
                                        <span>{{ $perangkat->notelpon }}</span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> --}}
    </section>
    {{-- javascript --}}
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
    
    
    
    
    
    
    
  
        
    