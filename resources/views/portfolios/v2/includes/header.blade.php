<header id="header" class="fixed left-0 right-0 top-0 z-50 px-4 py-4 transition duration-300 {{ $fixedheader }}">
    <div class="mx-auto flex max-w-7xl items-center justify-between rounded-full border border-white/10 bg-slate-950/70 px-4 py-3 shadow-2xl shadow-black/20 backdrop-blur-2xl sm:px-6">
        <a href="{{ URL::to('/') }}" class="group inline-flex items-center gap-3" aria-label="Home">
            <span class="grid h-11 w-11 place-items-center rounded-full bg-white p-2 shadow-lg shadow-emerald-500/10">
                <img src="{{ asset('portfolio/assets/img/LogoMakr.png') }}" alt="Moammer Farshid Enan" class="h-full w-full object-contain">
            </span>
            <span class="hidden text-sm font-bold uppercase tracking-[0.22em] text-white sm:inline">Enan</span>
        </a>

        <button id="mobile-menu-button" type="button" class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-white/10 bg-white/5 text-2xl text-white transition hover:bg-white/10 lg:hidden" aria-label="Toggle navigation" aria-controls="navbar" aria-expanded="false">
            <i class="bi bi-list"></i>
        </button>

        <nav id="navbar" class="absolute left-4 right-4 top-[82px] hidden rounded-3xl border border-white/10 bg-slate-950/95 p-5 shadow-2xl shadow-black/50 backdrop-blur-2xl lg:static lg:block lg:border-0 lg:bg-transparent lg:p-0 lg:shadow-none">
            <ul class="flex flex-col gap-3 lg:flex-row lg:items-center lg:gap-2">
                <li><a class="block rounded-full px-4 py-2 text-sm font-semibold text-slate-300 transition hover:bg-white/10 hover:text-white" href="#hero">Home</a></li>
                <li><a class="block rounded-full px-4 py-2 text-sm font-semibold text-slate-300 transition hover:bg-white/10 hover:text-white" href="#about">About</a></li>
                <li><a class="block rounded-full px-4 py-2 text-sm font-semibold text-slate-300 transition hover:bg-white/10 hover:text-white" href="#services">Skills</a></li>
                <li><a class="block rounded-full px-4 py-2 text-sm font-semibold text-slate-300 transition hover:bg-white/10 hover:text-white" href="#portfolio">Portfolio</a></li>
                <li><a class="block rounded-full px-4 py-2 text-sm font-semibold text-slate-300 transition hover:bg-white/10 hover:text-white" href="#journal">Work</a></li>
                <li><a class="block rounded-full bg-emerald-400 px-5 py-2 text-sm font-bold text-slate-950 transition hover:-translate-y-0.5 hover:bg-emerald-300" href="#contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
