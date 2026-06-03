<section id="services" class="px-4 py-20 sm:px-6 lg:px-8 lg:py-28">
    <div class="mx-auto max-w-7xl">
        <div class="mb-12 grid gap-6 lg:grid-cols-12 lg:items-end">
            <div class="lg:col-span-8">
                <p class="inline-flex rounded-full border-2 border-neutral-950 bg-lime-300 px-4 py-2 text-xs font-black uppercase tracking-[0.2em] shadow-[3px_3px_0_#111827]">Tech stack</p>
                <h2 class="font-display mt-6 text-5xl font-black leading-none tracking-[-0.05em] text-neutral-950 md:text-7xl">Skills as product building blocks.</h2>
            </div>
            <p class="text-lg font-medium leading-8 text-neutral-700 lg:col-span-4">Focused tools for fast, secure, maintainable Laravel and full-stack projects.</p>
        </div>

        <div class="services-slider swiper-container overflow-hidden pb-12">
            <div class="swiper-wrapper">
                @foreach ($skills as $skill)
                    <div class="swiper-slide h-auto">
                        <article class="group flex h-full flex-col rounded-[2rem] border-2 border-neutral-950 bg-white p-7 shadow-[7px_7px_0_#111827] transition hover:-translate-y-2 hover:bg-orange-100">
                            <div class="mb-8 grid h-16 w-16 place-items-center rounded-2xl border-2 border-neutral-950 bg-orange-400 text-4xl text-neutral-950 shadow-[4px_4px_0_#111827] transition group-hover:rotate-6 [&_i]:text-4xl [&_svg]:h-10 [&_svg]:w-10">
                                {!! $skill->icon !!}
                            </div>
                            <h3 class="font-display text-2xl font-black text-neutral-950">{{ $skill->name }}</h3>
                            <p class="mt-4 text-sm font-medium leading-7 text-neutral-600">{{ $skill->description }}</p>
                        </article>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination mt-8"></div>
        </div>
    </div>
</section>
