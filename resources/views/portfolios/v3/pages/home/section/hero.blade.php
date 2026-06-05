<section id="hero" class="relative px-4 pb-20 pt-32 sm:px-6 lg:px-8 lg:pb-28 lg:pt-40">
    <div class="mx-auto grid max-w-7xl gap-10 lg:grid-cols-12 lg:items-center">
        <div class="lg:col-span-7">
            <div
                class="inline-flex -rotate-1 items-center gap-2 rounded-full border-2 border-neutral-950 bg-lime-300 px-4 py-2 text-sm font-black uppercase tracking-[0.16em] shadow-[4px_4px_0_#111827]">
                <span class="h-2.5 w-2.5 rounded-full bg-neutral-950"></span>
                Laravel Web Developer
            </div>

            <h1
                class="font-display mt-8 max-w-5xl text-5xl font-black leading-[0.9] tracking-[-0.06em] text-neutral-950 sm:text-7xl lg:text-8xl">
                Moammer Farshid Enan
                <span class="block text-orange-600">Laravel Web Developer</span>
            </h1>

            <p class="mt-6 max-w-2xl text-lg leading-8 text-[#666]">
                I’m <span class="typed font-black text-neutral-950" data-typed-items="Moammer Farshid Enan, Laravel Web Developer"></span>,
                a Laravel web developer from Bangladesh. I build clean, secure, maintainable, and scalable web applications using Laravel, Vue,
                React, MySQL, Tailwind CSS, JavaScript, and modern frontend tools.
            </p>

            <div class="mt-10 flex flex-col gap-4 sm:flex-row">
                <a href="#portfolio"
                    class="inline-flex items-center justify-center rounded-2xl border-2 border-neutral-950 bg-orange-400 px-7 py-4 text-sm font-black uppercase tracking-[0.16em] text-neutral-950 shadow-[5px_5px_0_#111827] transition hover:-translate-y-1">
                    See Projects <i class="bi bi-arrow-right ml-3"></i>
                </a>
                <a href="#contact"
                    class="inline-flex items-center justify-center rounded-2xl border-2 border-neutral-950 bg-white px-7 py-4 text-sm font-black uppercase tracking-[0.16em] text-neutral-950 shadow-[5px_5px_0_#111827] transition hover:-translate-y-1">
                    Start a chat
                </a>
            </div>

            <ul class="mt-10 flex flex-wrap gap-3">
                <li>
                    <a href="{{ config('portfolio.social_links.github', 'https://github.com/enuenan') }}" target="_blank" rel="noopener noreferrer"
                        class="grid h-12 w-12 place-items-center rounded-xl border-2 border-neutral-950 bg-white text-xl shadow-[3px_3px_0_#111827] transition hover:-translate-y-1 hover:bg-orange-400"
                        aria-label="GitHub"><i class="bi bi-github"></i></a>
                </li>
                <li>
                    <a href="{{ config('portfolio.social_links.facebook', 'https://www.facebook.com/moammerfarshidenan') }}" target="_blank" rel="noopener noreferrer"
                        class="grid h-12 w-12 place-items-center rounded-xl border-2 border-neutral-950 bg-white text-xl shadow-[3px_3px_0_#111827] transition hover:-translate-y-1 hover:bg-orange-400"
                        aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                </li>
                <li>
                    <a href="{{ config('portfolio.social_links.twitter', 'https://twitter.com/MoammerEnan') }}" target="_blank" rel="noopener noreferrer"
                        class="grid h-12 w-12 place-items-center rounded-xl border-2 border-neutral-950 bg-white text-xl shadow-[3px_3px_0_#111827] transition hover:-translate-y-1 hover:bg-orange-400"
                        aria-label="Twitter"><i class="bi bi-twitter"></i></a>
                </li>
                <li>
                    <a href="{{ config('portfolio.social_links.instagram', 'https://www.instagram.com/__ennaaaa__/') }}" target="_blank" rel="noopener noreferrer"
                        class="grid h-12 w-12 place-items-center rounded-xl border-2 border-neutral-950 bg-white text-xl shadow-[3px_3px_0_#111827] transition hover:-translate-y-1 hover:bg-orange-400"
                        aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                </li>
                <li>
                    <a href="{{ config('portfolio.social_links.linkedin', 'https://www.linkedin.com/in/moammer-farshid/') }}" target="_blank" rel="noopener noreferrer"
                        class="grid h-12 w-12 place-items-center rounded-xl border-2 border-neutral-950 bg-white text-xl shadow-[3px_3px_0_#111827] transition hover:-translate-y-1 hover:bg-orange-400"
                        aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                </li>
            </ul>
        </div>

        <div class="relative lg:col-span-5">
            <div
                class="absolute -left-8 top-10 hidden h-32 w-32 rounded-full border-2 border-neutral-950 bg-cyan-300 shadow-[6px_6px_0_#111827] lg:block">
            </div>
            <div
                class="absolute -right-4 -top-4 h-24 w-24 rotate-12 border-2 border-neutral-950 bg-lime-300 shadow-[6px_6px_0_#111827]">
            </div>
            <div
                class="relative rotate-2 rounded-[2rem] border-2 border-neutral-950 bg-white p-4 shadow-[12px_12px_0_#111827] transition hover:rotate-0">
                <img src="{{ asset('portfolio/assets/img/pixomatic_1702137054794.png') }}" alt="Moammer Farshid Enan"
                    class="h-[520px] w-full rounded-[1.4rem] border-2 border-neutral-950 object-cover object-top max-sm:h-[420px]">
                <div
                    class="absolute bottom-8 left-8 right-8 rounded-2xl border-2 border-neutral-950 bg-[#fffaf0] p-5 shadow-[5px_5px_0_#111827]">
                    <p class="text-xs font-black uppercase tracking-[0.18em] text-orange-600">Core stack</p>
                    <p class="mt-1 font-display text-2xl font-black">Laravel · PHP · MySQL · React</p>
                </div>
            </div>
        </div>
    </div>
</section>
