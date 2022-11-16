<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
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
<header id="header" class="fixed-top d-flex align-items-center ">
<div class="container d-flex justify-content-between align-items-center">
<div class="logo">
  
  <!-- Uncomment below if you prefer to use an image logo -->
  <a href=""><img src="{{ URL::to('web/assets/img/logo.png')}}" alt="" class="img-fluid"></a>
</div>
<nav id="navbar" class="navbar">
  <ul>
    <li><a class="active " href="/">Home</a></li>
    <li class="dropdown"><a href="/aboutus"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
      <ul>
        <li><a href="#">Current Executive Committee</a></li>
        <li><a href="#">Previous EC</a></li>
      </ul>
    </li>
    <li><a href="/event">Events</a></li>
    <li><a href="/notice">Notice</a></li>
    <li class="dropdown"><a href="#"><span>Membership</span> <i class="bi bi-chevron-down"></i></a>
      <ul>
        <li><a href="{{ route('register') }}">Register</a></li>
        @guest
        @if (Route::has('login'))
        <li><a href="{{ route('login') }}">Login</a></li>
        @endif
        @else
        <li><a href="{{ route('login') }}">{{ Auth::user()->name }}</a></li>
        @endguest
      </ul>
    </li>
    <li><a href="/contact">Contact Us</a></li>
  </ul>
  <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->
</div>
</header><!-- End Header -->