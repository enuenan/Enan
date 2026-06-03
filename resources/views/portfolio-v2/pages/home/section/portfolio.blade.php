<section id="portfolio" class="section-padding bg-white">
    <div class="container-site">
        <div class="section-title">
            <h2>My <span class="title-accent">Portfolio</span></h2>
        </div>

        <div class="mb-10 flex justify-center">
            <ul id="portfolio-flters" class="flex flex-wrap justify-center gap-3">
                <li data-filter="*" class="filter-chip filter-active">All</li>
                @foreach ($categories as $category)
                    <li data-filter=".filter-{{ $category->name }}" class="filter-chip">{{ $category->name }}</li>
                @endforeach
            </ul>
        </div>

        <div class="portfolio-container -m-3 flex flex-wrap justify-center">
            @foreach ($portfolios as $portfolio)
                <div class="portfolio-item filter-{{ $portfolio->category ? $portfolio->category->name : 'no-category' }} w-full p-3 md:w-1/2 lg:w-1/3">
                    <article class="glass-card group h-full overflow-hidden">
                        <div class="relative overflow-hidden">
                            <img src="{{ $portfolio->image }}" class="h-64 w-full object-cover transition duration-500 group-hover:scale-105" alt="{{ $portfolio->name }}">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent opacity-0 transition group-hover:opacity-100"></div>
                        </div>
                        <div class="p-6">
                            <h4 class="text-lg font-semibold text-zinc-900">
                                <a href="{{ $portfolio->project_url }}" target="_blank" class="hover:text-brand">
                                    {{ $portfolio->name }} <i class="fa-solid fa-up-right-from-square ml-1 text-sm"></i>
                                </a>
                            </h4>
                            <p class="mt-3 text-sm leading-7 text-zinc-500">
                                {{ $portfolio->description_title }}
                            </p>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>
