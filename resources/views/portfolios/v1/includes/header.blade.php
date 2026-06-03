<header id="header" class="fixed-top {{ $fixedheader }}">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="{{ URL::to('/') }}" class="logo">
            <img src="{{ asset('portfolio/assets/img/LogoMakr.png') }}" alt="" class="img-fluid">
        </a>
        <!-- Uncomment below if you prefer to use an text logo -->
        <!-- <h1 class="logo"><a href="index.html">Folio</a></h1> -->

        <nav id="navbar" class="navbar">
            <ul>
                <li>
                    <a class="nav-link scrollto active" href="#hero" style="color: #106f17 !important">Home</a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="#about" style="color: #106f17 !important">About</a>
                </li>
                <li>
                    <a class="nav-link  scrollto" href="#portfolio" style="color: #106f17 !important">Portfolio</a>
                </li>
                <li>
                    <a class="nav-link  scrollto" href="#journal" style="color: #106f17 !important">Personal Work</a>
                </li>
                <li><a class="nav-link scrollto" href="#contact" style="color: #106f17 !important">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
