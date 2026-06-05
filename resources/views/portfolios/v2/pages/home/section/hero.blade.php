<section id="hero" class="relative min-h-screen overflow-hidden px-4 pt-32 sm:px-6 lg:px-8">
    <div class="absolute inset-0 -z-10">
        <div class="absolute inset-x-0 top-0 h-96 bg-linear-to-b from-emerald-500/10 to-transparent"></div>
        <div
            class="absolute left-1/2 top-28 h-72 w-72 -translate-x-1/2 rounded-full bg-emerald-400/20 blur-3xl lg:left-auto lg:right-32 lg:translate-x-0">
        </div>
    </div>

    <div class="mx-auto grid min-h-[calc(100vh-8rem)] max-w-7xl items-center gap-14 lg:grid-cols-12">
        <div class="lg:col-span-7">
            <div
                class="mb-6 inline-flex items-center gap-3 rounded-full border border-emerald-300/20 bg-emerald-300/10 px-4 py-2 text-sm font-semibold text-emerald-200 shadow-lg shadow-emerald-950/20">
                <span class="h-2 w-2 rounded-full bg-emerald-300 shadow-[0_0_16px_rgba(110,231,183,0.9)]"></span>
                Available for Laravel & full-stack projects
            </div>

            <h1 class="max-w-5xl text-5xl font-black leading-[0.95] tracking-tight text-white sm:text-6xl lg:text-8xl">
                Building clean web products with
                <span class="bg-linear-to-r from-emerald-300 via-teal-200 to-cyan-200 bg-clip-text text-transparent">
                    Laravel.
                </span>
            </h1>

            <p class="mt-7 max-w-2xl text-lg leading-8 text-slate-300 sm:text-xl">
                I'm <span class="typed font-bold text-emerald-200"
                    data-typed-items="Moammer Farshid Enan, Laravel Web Developer"></span> — focused on secure,
                maintainable, modular web applications and polished user experiences.
            </p>

            <div class="mt-10 flex flex-col gap-4 sm:flex-row">
                <a href="#portfolio"
                    class="inline-flex items-center justify-center rounded-full bg-emerald-400 px-7 py-4 text-sm font-black uppercase tracking-[0.18em] text-slate-950 shadow-2xl shadow-emerald-500/25 transition hover:-translate-y-1 hover:bg-emerald-300">
                    View Work
                    <i class="bi bi-arrow-right ml-3"></i>
                </a>
                <a href="#contact"
                    class="inline-flex items-center justify-center rounded-full border border-white/10 bg-white/5 px-7 py-4 text-sm font-black uppercase tracking-[0.18em] text-white backdrop-blur transition hover:-translate-y-1 hover:bg-white/10">
                    Contact Me
                </a>
            </div>

            <ul class="mt-10 flex flex-wrap gap-3">
                <li><a href="{{ config('portfolio.social_links.github') }}" target="_blank" rel="noopener noreferrer"
                        class="inline-flex h-12 w-12 items-center justify-center rounded-full border border-white/10 bg-white/5 text-xl text-white transition hover:-translate-y-1 hover:border-emerald-300/40 hover:bg-emerald-300 hover:text-slate-950"
                        aria-label="GitHub"><i class="bi bi-github"></i></a></li>
                <li><a href="{{ config('portfolio.social_links.facebook') }}" target="_blank" rel="noopener noreferrer"
                        class="inline-flex h-12 w-12 items-center justify-center rounded-full border border-white/10 bg-white/5 text-xl text-white transition hover:-translate-y-1 hover:border-emerald-300/40 hover:bg-emerald-300 hover:text-slate-950"
                        aria-label="Facebook"><i class="bi bi-facebook"></i></a></li>
                <li><a href="{{ config('portfolio.social_links.twitter') }}" target="_blank" rel="noopener noreferrer"
                        class="inline-flex h-12 w-12 items-center justify-center rounded-full border border-white/10 bg-white/5 text-xl text-white transition hover:-translate-y-1 hover:border-emerald-300/40 hover:bg-emerald-300 hover:text-slate-950"
                        aria-label="Twitter"><i class="bi bi-twitter"></i></a></li>
                <li><a href="{{ config('portfolio.social_links.instagram') }}" target="_blank" rel="noopener noreferrer"
                        class="inline-flex h-12 w-12 items-center justify-center rounded-full border border-white/10 bg-white/5 text-xl text-white transition hover:-translate-y-1 hover:border-emerald-300/40 hover:bg-emerald-300 hover:text-slate-950"
                        aria-label="Instagram"><i class="bi bi-instagram"></i></a></li>
                <li><a href="{{ config('portfolio.social_links.linkedin') }}" target="_blank" rel="noopener noreferrer"
                        class="inline-flex h-12 w-12 items-center justify-center rounded-full border border-white/10 bg-white/5 text-xl text-white transition hover:-translate-y-1 hover:border-emerald-300/40 hover:bg-emerald-300 hover:text-slate-950"
                        aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a></li>
            </ul>
        </div>

        <div class="relative lg:col-span-5">
            <div
                class="absolute -inset-6 rounded-[3rem] bg-linear-to-br from-emerald-300/20 via-teal-300/10 to-transparent blur-2xl">
            </div>
            <div
                class="relative overflow-hidden rounded-4xl border border-white/10 bg-white/5 p-3 shadow-2xl shadow-black/40 backdrop-blur-xl">
                <img src="{{ asset('portfolio/assets/img/pixomatic_1702137054794.png') }}" alt="Moammer Farshid Enan"
                    class="h-130 w-full rounded-3xl object-cover object-top">
                <div
                    class="absolute bottom-6 left-6 right-6 rounded-3xl border border-white/10 bg-slate-950/75 p-5 backdrop-blur-xl">
                    <p class="text-sm font-semibold uppercase tracking-[0.22em] text-emerald-200">Specialized in</p>
                    <p class="mt-2 text-2xl font-black text-white">Laravel, PHP, MySQL, Shopify & React</p>
                </div>
            </div>
        </div>
    </div>
</section>