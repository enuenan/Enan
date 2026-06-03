<section id="services" class="px-4 py-24 sm:px-6 lg:px-8 lg:py-32">
    <div class="mx-auto max-w-7xl">
        <div class="mb-12 flex flex-col justify-between gap-6 md:flex-row md:items-end">
            <div>
                <p class="mb-4 text-sm font-black uppercase tracking-[0.25em] text-emerald-300">Tech stack</p>
                <h2 class="max-w-3xl text-4xl font-black tracking-tight text-white md:text-6xl">
                    Skills that turn ideas into products.
                </h2>
            </div>
            <p class="max-w-md text-base leading-8 text-slate-400">A focused stack for building fast, maintainable, and production-ready web experiences.</p>
        </div>

        <div class="services-slider swiper-container overflow-hidden">
            <div class="swiper-wrapper">
                @foreach ($skills as $skill)
                    <div class="swiper-slide h-auto">
                        <article class="group h-full rounded-[2rem] border border-white/10 bg-white/[0.06] p-8 shadow-xl shadow-black/20 backdrop-blur-xl transition duration-300 hover:-translate-y-2 hover:border-emerald-300/30 hover:bg-white/[0.09]">
                            <div class="mb-7 inline-flex h-16 w-16 items-center justify-center rounded-2xl bg-emerald-300/10 text-4xl text-emerald-300 ring-1 ring-emerald-300/20 transition group-hover:bg-emerald-300 group-hover:text-slate-950 [&_i]:text-4xl [&_svg]:h-10 [&_svg]:w-10">
                                {!! $skill->icon !!}
                            </div>
                            <h3 class="text-xl font-black text-white">{{ $skill->name }}</h3>
                            <p class="mt-4 text-sm leading-7 text-slate-400">{{ $skill->description }}</p>
                        </article>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination mt-10"></div>
        </div>
    </div>
</section>
