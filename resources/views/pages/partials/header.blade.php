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