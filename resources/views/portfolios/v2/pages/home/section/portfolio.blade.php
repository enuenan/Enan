<section id="portfolio" class="px-4 py-24 sm:px-6 lg:px-8 lg:py-32">
    <div class="mx-auto max-w-7xl">
        <div class="mb-12 text-center">
            <p class="mb-4 text-sm font-black uppercase tracking-[0.25em] text-emerald-300">Selected projects</p>
            <h2 class="text-4xl font-black tracking-tight text-white md:text-6xl">Portfolio that proves the work.</h2>
        </div>

        <div class="mb-12 flex justify-center">
            <ul id="portfolio-flters"
                class="flex max-w-4xl flex-wrap justify-center gap-3 rounded-full border border-white/10 bg-white/5 p-2 backdrop-blur-xl">
                <li data-filter="*"
                    class="filter-active cursor-pointer rounded-full px-5 py-3 text-xs font-black uppercase tracking-[0.18em] transition">
                    All</li>
                @foreach ($categories as $category)
                    <li data-filter=".filter-{{ $category->name }}"
                        class="cursor-pointer rounded-full px-5 py-3 text-xs font-black uppercase tracking-[0.18em] text-slate-300 transition hover:bg-white/10 hover:text-white">
                        {{ $category->name }}</li>
                @endforeach
            </ul>
        </div>

        <div class="portfolio-container -m-4 flex flex-wrap justify-center">
            @foreach ($portfolios as $portfolio)
                <div
                    class="portfolio-item filter-{{ $portfolio->category ? $portfolio->category->name : 'no-category' }} w-full p-4 md:w-1/2 lg:w-1/3">
                    <article
                        class="group h-full overflow-hidden rounded-[2rem] border border-white/10 bg-white/[0.06] shadow-2xl shadow-black/20 backdrop-blur-xl transition duration-300 hover:-translate-y-2 hover:border-emerald-300/30">
                        <a href="{{ $portfolio->project_url }}" target="_blank" rel="noopener noreferrer"
                            class="relative block overflow-hidden">
                            <img src="{{ $portfolio->image }}"
                                class="h-72 w-full object-cover transition duration-700 group-hover:scale-110"
                                alt="{{ $portfolio->name }}">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/10 to-transparent opacity-80">
                            </div>
                            <span
                                class="absolute right-5 top-5 inline-flex h-11 w-11 items-center justify-center rounded-full bg-white text-slate-950 opacity-0 shadow-xl transition group-hover:opacity-100">
                                <i class="fa-solid fa-up-right-from-square text-sm"></i>
                            </span>
                        </a>
                        <div class="p-7">
                            <h3 class="text-xl font-black text-white">
                                <a href="{{ $portfolio->project_url }}" target="_blank" rel="noopener noreferrer"
                                    class="transition hover:text-emerald-300">{{ $portfolio->name }}</a>
                            </h3>
                            <p class="mt-4 text-sm leading-7 text-slate-400">{{ $portfolio->description_title }}</p>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>