<section id="portfolio" class="px-4 py-20 sm:px-6 lg:px-8 lg:py-28">
    <div class="mx-auto max-w-7xl">
        <div class="mb-12 text-center">
            <p
                class="inline-flex rounded-full border-2 border-neutral-950 bg-cyan-300 px-4 py-2 text-xs font-black uppercase tracking-[0.2em] shadow-[3px_3px_0_#111827]">
                Selected work</p>
            <h2
                class="font-display mx-auto mt-6 max-w-4xl text-5xl font-black leading-none tracking-[-0.05em] text-neutral-950 md:text-7xl">
                Projects with personality and purpose.</h2>
        </div>

        <div class="mb-12 flex justify-center">
            <ul id="portfolio-flters"
                class="flex max-w-5xl flex-wrap justify-center gap-3 rounded-2xl border-2 border-neutral-950 bg-white p-3 shadow-[6px_6px_0_#111827]">
                <li data-filter="*"
                    class="cursor-pointer rounded-xl border-2 border-neutral-950 bg-orange-400 px-5 py-3 text-xs font-black uppercase tracking-[0.16em] text-neutral-950">
                    All</li>
                @foreach ($categories as $category)
                    <li data-filter=".filter-{{ $category->name }}"
                        class="cursor-pointer rounded-xl border-2 border-neutral-950 bg-white px-5 py-3 text-xs font-black uppercase tracking-[0.16em] text-neutral-800 transition hover:bg-orange-400 hover:text-neutral-950">
                        {{ $category->name }}</li>
                @endforeach
            </ul>
        </div>

        <div class="portfolio-container -m-4 flex flex-wrap justify-center">
            @foreach ($portfolios as $portfolio)
                <div
                    class="portfolio-item filter-{{ $portfolio->category ? $portfolio->category->name : 'no-category' }} w-full p-4 md:w-1/2 lg:w-1/3">
                    <article
                        class="group h-full overflow-hidden rounded-[2rem] border-2 border-neutral-950 bg-white shadow-[8px_8px_0_#111827] transition duration-300 hover:-translate-y-2 hover:bg-lime-50">
                        <a href="{{ $portfolio->project_url }}" target="_blank" rel="noopener noreferrer"
                            class="relative block overflow-hidden border-b-2 border-neutral-950">
                            <img src="{{ $portfolio->image }}"
                                class="h-72 w-full object-cover transition duration-700 group-hover:scale-105"
                                alt="{{ $portfolio->name }}">
                            <span
                                class="absolute right-5 top-5 grid h-12 w-12 place-items-center rounded-xl border-2 border-neutral-950 bg-orange-400 text-neutral-950 shadow-[3px_3px_0_#111827]">
                                <i class="fa-solid fa-up-right-from-square text-sm"></i>
                            </span>
                        </a>
                        <div class="p-7">
                            <h3 class="font-display text-2xl font-black text-neutral-950">
                                <a href="{{ $portfolio->project_url }}" target="_blank" rel="noopener noreferrer"
                                    class="transition hover:text-orange-600">{{ $portfolio->name }}</a>
                            </h3>
                            <p class="mt-4 text-sm font-medium leading-7 text-neutral-600">
                                {{ $portfolio->description_title }}</p>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>