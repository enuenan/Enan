<header id="header" class="fixed inset-x-0 top-0 z-50 px-3 py-3 transition-all duration-300 {{ $fixedheader }}">
    <div class="mx-auto flex max-w-7xl items-center justify-between rounded-2xl border-2 border-neutral-950 bg-[#fffaf0]/95 px-4 py-3 shadow-[6px_6px_0_#111827] backdrop-blur sm:px-6">
        <a href="{{ URL::to('/') }}" class="flex items-center gap-3" aria-label="Home">
            <span class="grid h-11 w-11 place-items-center rounded-xl border-2 border-neutral-950 bg-orange-400 p-2 shadow-[3px_3px_0_#111827]">
                <img src="{{ asset('portfolio/assets/img/LogoMakr.png') }}" alt="Moammer Farshid Enan" class="h-full w-full object-contain">
            </span>
            <span class="hidden font-display text-lg font-bold tracking-tight text-neutral-950 sm:block">Moammer.</span>
        </a>

        <button id="mobile-menu-button" type="button" class="inline-flex h-11 w-11 items-center justify-center rounded-xl border-2 border-neutral-950 bg-white text-2xl text-neutral-950 shadow-[3px_3px_0_#111827] lg:hidden" aria-label="Toggle navigation" aria-controls="navbar" aria-expanded="false">
            <i class="bi bi-list"></i>
        </button>

        <nav id="navbar" class="absolute left-3 right-3 top-[78px] hidden rounded-2xl border-2 border-neutral-950 bg-[#fffaf0] p-4 shadow-[6px_6px_0_#111827] lg:static lg:block lg:border-0 lg:bg-transparent lg:p-0 lg:shadow-none">
            <ul class="flex flex-col gap-2 lg:flex-row lg:items-center lg:gap-1">
                <li><a class="block rounded-xl px-4 py-2 text-sm font-extrabold text-neutral-800 hover:bg-orange-400 hover:text-neutral-950" href="#hero">Home</a></li>
                <li><a class="block rounded-xl px-4 py-2 text-sm font-extrabold text-neutral-800 hover:bg-orange-400 hover:text-neutral-950" href="#about">About</a></li>
                <li><a class="block rounded-xl px-4 py-2 text-sm font-extrabold text-neutral-800 hover:bg-orange-400 hover:text-neutral-950" href="#services">Skills</a></li>
                <li><a class="block rounded-xl px-4 py-2 text-sm font-extrabold text-neutral-800 hover:bg-orange-400 hover:text-neutral-950" href="#portfolio">Projects</a></li>
                <li><a class="block rounded-xl px-4 py-2 text-sm font-extrabold text-neutral-800 hover:bg-orange-400 hover:text-neutral-950" href="#journal">Products</a></li>
                <li><a class="block rounded-xl border-2 border-neutral-950 bg-lime-300 px-5 py-2 text-sm font-black text-neutral-950 shadow-[3px_3px_0_#111827] hover:-translate-y-0.5" href="#contact">Hire me</a></li>
            </ul>
        </nav>
    </div>
</header>
