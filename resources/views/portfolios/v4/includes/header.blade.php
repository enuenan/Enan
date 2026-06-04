<header id="header" class="fixed left-0 right-0 top-0 z-[997] -translate-y-full bg-white py-4 shadow-[0_2px_25px_rgba(0,0,0,0.08)] transition-all duration-500 {{ $fixedheader }}">
    <div class="mx-auto flex max-w-[1140px] items-center justify-between px-4 sm:px-6 lg:px-8">
        <a href="{{ URL::to('/') }}" class="inline-flex items-center" aria-label="Home">
            <img src="{{ asset('portfolio/assets/img/LogoMakr.png') }}" alt="" class="h-10 w-auto">
        </a>
        <button id="mobile-nav-toggle" type="button" class="inline-flex text-[28px] leading-none text-[#4b4a4a] lg:hidden" aria-label="Toggle navigation" aria-controls="navbar" aria-expanded="false"><i class="bi bi-list"></i></button>
        <nav id="navbar" class="pointer-events-none fixed inset-0 hidden overflow-hidden bg-black/80 opacity-0 transition duration-300 lg:pointer-events-auto lg:static lg:block lg:bg-transparent lg:opacity-100">
            <ul class="absolute inset-x-4 bottom-4 top-[55px] overflow-y-auto rounded-[10px] bg-white py-3 lg:static lg:flex lg:items-center lg:gap-0 lg:overflow-visible lg:rounded-none lg:bg-transparent lg:p-0">
                <li><a class="block px-5 py-2.5 text-[15px] font-medium text-[#106f17] transition hover:text-[#0b6a7d] lg:flex lg:items-center lg:px-0 lg:py-2.5 lg:pl-[30px] lg:text-sm" href="#hero">Home</a></li>
                <li><a class="block px-5 py-2.5 text-[15px] font-medium text-[#106f17] transition hover:text-[#0b6a7d] lg:flex lg:items-center lg:px-0 lg:py-2.5 lg:pl-[30px] lg:text-sm" href="#about">About</a></li>
                <li><a class="block px-5 py-2.5 text-[15px] font-medium text-[#106f17] transition hover:text-[#0b6a7d] lg:flex lg:items-center lg:px-0 lg:py-2.5 lg:pl-[30px] lg:text-sm" href="#portfolio">Portfolio</a></li>
                <li><a class="block px-5 py-2.5 text-[15px] font-medium text-[#106f17] transition hover:text-[#0b6a7d] lg:flex lg:items-center lg:px-0 lg:py-2.5 lg:pl-[30px] lg:text-sm" href="#journal">Personal Work</a></li>
                <li><a class="block px-5 py-2.5 text-[15px] font-medium text-[#106f17] transition hover:text-[#0b6a7d] lg:flex lg:items-center lg:px-0 lg:py-2.5 lg:pl-[30px] lg:text-sm" href="#contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
