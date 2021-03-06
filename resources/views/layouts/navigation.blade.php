
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
        <i class="bi bi-phone"></i> +1 5589 55488 55
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Kiga-Ater</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ route('home') }}">Home</a></li>
         @isset($home)
         <li><a class="nav-link scrollto" href="#about">About</a></li>
         <li><a class="nav-link scrollto" href="#services">Services</a></li>
         <li><a class="nav-link scrollto" href="#departments">Departments</a></li>
         <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li>
         @endisset
          <li><a class="nav-link" href="{{ route('chat') }}">Chat Psikolog</a></li>

@if (Auth::id())
<li class="dropdown"><a href="#"><span>{{Auth::user()->name}}</span> <i class="bi bi-chevron-down"></i></a>
    <ul>
      
      <li><a class="nav-link" href="{{ route('profile') }}">Profile</a></li>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
    
            <li><a href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">Logout</a></li>
        </form>
    
     
    </ul>
  </li>

@endif


         
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

@if (is_null(Auth::id()))
<a href="{{ route('register') }}" class="appointment-btn scrollto"> Sign-Up</a>
<a href="{{ route('login') }}" class="appointment-btn scrollto"> Login</a>
@endif
     
    </div>
  </header><!-- End Header -->
    
