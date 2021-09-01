<!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="{{asset('assets/img/profile-img.jpg')}}" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Alex Smith</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav class="nav-menu">
        <ul>
          <li><a href="{{route('backAbout')}}"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li class="@if(request()->routeIs('backPortfolio')) active @else '' @endif"><a href="{{route('backPortfolio')}}"><i class="bx bx-book-content"></i> Portfolio</a></li>
          <li class="@if(request()->routeIs('backServices')) active @else '' @endif"><a href="{{route('backServices')}}"><i class="bx bx-server "></i> Services</a></li>
          <li class="@if(request()->routeIs('backContact')) active @else '' @endif"><a href="{{route('backContact')}}"><i class="bx bx-envelope"></i> Contact</a></li>
          <li class="@if(request()->routeIs('backFacts')) active @else '' @endif"><a href="{{route('backFacts')}}"><i class="bx bx-envelope"></i> Facts</a></li>
          <li class="@if(request()->routeIs('backSkills')) active @else '' @endif"><a href="{{route('backSkills')}}"><i class="bx bx-envelope"></i> Skills</a></li>
          <li class=" border-top border-secondary"><a href="{{route('home')}}"><i class="fas fa-tools"></i> front</a></li>
        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->


 