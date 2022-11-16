<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'title') }}</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="{{ URL::to('web/assets/img/favicon.png')}}" rel="icon">
<link href="{{ URL::to('web/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="{{ asset('web/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
<link href="{{ asset('web/assets/vendor/aos/aos.css')}}" rel="stylesheet">
<link href="{{ asset('web/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ asset('web/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
<link href="{{ asset('web/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
<link href="{{ asset('web/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
<link href="{{ asset('web/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="{{ asset('web/assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
  <div class="container d-flex justify-content-between align-items-center">

    <div class="logo">
      
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html"><img src="{{ URL::to('web/assets/img/dufa.png')}}" alt="" class="img-fluid"></a>-->
    </div>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="active " href="index.html">Dashboard</a></li>
        <li class="dropdown"><a href="#"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">Current Executive Committee</a></li>
            <li><a href="#">Previous EC</a></li>
          </ul>
        </li>
        <li><a href="services.html">Events</a></li>
        <li><a href="portfolio.html">News</a></li>
        <li><a href="team.html">Notice</a></li>
        <li><a href="blog.html">Photo Gallery</a></li>
        <li class="dropdown"><a href="#"><span>Membership</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="{{ route('register') }}">Register</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
          </ul>
        </li>
        <li><a href="contact.html">Contact Us</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-cntent-center align-items-center">
  <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

    <!-- Slide 1 -->
    <div class="carousel-item active">
      <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">Dhaka University Friends Alliance <span>DUFA</span></h2>
        <p class="animate__animated animate__fadeInUp">DUFA is the association of undergraduate program students of "Dhaka University".</p>
        <a href="about.blade.php" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
      </div>
    </div>


    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
    </a>

  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= Services Section ======= -->
  <section class="services">
    <div class="container">

      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
          <div class="icon-box icon-box-pink">
            <div class="icon"><i class="bx bx-credit-card"></i></div>
            <h4 class="title"><a href="">DUFA Membership Card</a></h4>
            <p class="description">DUFA registered members get membership card at free cost.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="icon-box icon-box-cyan">
            <div class="icon"><i class="bx bx-home-smile"></i></div>
            <h4 class="title"><a href="">Events Entrance</a></h4>
            <p class="description">Different events are organized by DUFA in every year. Only DUFA members are allowed into those events.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
          <div class="icon-box icon-box-pink">
            <div class="icon"><i class="bx bx-donate-blood"></i></div>
            <h4 class="title"><a href="">Blood Donation</a></h4>
            <p class="description">DUFA members help each other by donating blood on emergency medical situation.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
          <div class="icon-box icon-box-pink">
            <div class="icon"><i class="bx bx-book-add"></i></div>
            <h4 class="title"><a href="">Children Educare</a></h4>
            <p class="description">We take care of our friends family who died. We assure their children good education.</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Why Us Section ======= -->
  <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
    <div class="container">

      <div class="row">
        <div class="col-lg-6 video-box">
          <img src="{{ asset('web/assets/img/why-us.jpg')}}" class="img-fluid" alt="">
          <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
        </div>

        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

          <div class="icon-box">
            <div class="icon"><i class="bx bx-world"></i></div>
            <h4 class="title"><a href="">Mission</a></h4>
            <p class="description">Mission To develop the friendship of DUFA members and to lead and deliver DUFA contribution to Bangladesh.</p>
          </div>

          <div class="icon-box">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4 class="title"><a href="">Vision</a></h4>
            <p class="description">To lead the development of a vibrant, sustainable and successful organization and leading society in Bangladesh.</p>
          </div>

        </div>
      </div>

    </div>
  </section><!-- End Why Us Section -->


</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Dashboard</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">DUFA Membership Card</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Events Entrance</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Blood Donation Management</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Children Educare</a></li>
           
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-contact">
          <h4>Contact Us</h4>
          <p>
            58/9, Barek Mansion (1st Floor), Block D Free School Street, <br>
            Panthapath, Kalabagan,<br>
            Dhaka 1205 <br><br>
            <strong>Phone:</strong> 01312389596<br>
            <strong>Email:</strong> info@dufa9596.org<br>
          </p>

        </div>

        <div class="col-lg-3 col-md-6 footer-info">
          <h3>About Dufa</h3>
          <p>The DUFA 95-96 is the association of undergraduate students of the Dhaka University, Bangladesh whose session was 95-96.</p>

          <div class="social-links mt-3">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>Dufa 95-96</span></strong>. All Rights Reserved
    </div>
    <div class="credits">

      Designed by <a href="">Tiger Soft BD</a>
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('web/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{ asset('web/assets/vendor/aos/aos.js')}}"></script>
<script src="{{ asset('web/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('web/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{ asset('web/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('web/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{ asset('web/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
<script src="{{ asset('web/assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('web/assets/js/main.js')}}"></script>


</body>

</html>