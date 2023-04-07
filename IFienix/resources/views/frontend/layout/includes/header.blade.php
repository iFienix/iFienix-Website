<header>
    @yield('hero')

    <div class=" menu-mobil  fa-solid fa-bars"></div>
    <div class="container">
      <nav>
        <div class="logo">
          <a href="#">
            <img src="{{ asset('assets/images/ifienixAsset.svg')}}" alt="">
          </a>
        </div>
        <ul>
          <span class="close_menu"><i class="fa-solid fa-xmark"></i></span>
          <li>
            <span class="link active-link"></span>
            <a href="{{ route('home')}}">Home page</a>
          </li>
          <li>
            <span class="link"></span>
            <a href="{{ route('our-projects')}}">Our Projects</a>
          </li>
          <li>
            <span class="link"></span>
            <a href="#our_services">Our services</a></li>
          <li>
            <span class="link"></span>
            <a href="#about-us">About Us</a></li>
          <li>
            <span class="link"></span>
            <a href="#contact_Us">Contact Us</a></li>

        </ul>
      </nav>

    </div>
  </header>
