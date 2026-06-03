<header id="header" class="fixed top-0 left-0 right-0 z-50 bg-white/90 py-4 shadow-sm shadow-zinc-200/80 backdrop-blur-xl transition-transform duration-300 {{ $fixedheader }}">
    <div class="container-site flex items-center justify-between">
        <a href="{{ URL::to('/') }}" class="inline-flex items-center" aria-label="Home">
            <img src="{{ asset('portfolio/assets/img/LogoMakr.png') }}" alt="Moammer Farshid Enan" class="h-10 w-auto">
        </a>

        <button id="mobile-menu-button" type="button" class="inline-flex h-11 w-11 items-center justify-center rounded-xl border border-brand/20 text-2xl text-brand lg:hidden" aria-label="Toggle navigation" aria-controls="navbar" aria-expanded="false">
            <i class="bi bi-list"></i>
        </button>

        <nav id="navbar" class="hidden absolute left-4 right-4 top-[72px] rounded-3xl border border-zinc-100 bg-white p-5 shadow-xl lg:static lg:block lg:border-0 lg:bg-transparent lg:p-0 lg:shadow-none">
            <ul class="flex flex-col gap-4 lg:flex-row lg:items-center lg:gap-8">
                <li><a class="nav-link scrollto" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
                <li><a class="nav-link scrollto" href="#journal">Personal Work</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
