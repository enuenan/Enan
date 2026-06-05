@php
    $companiesData = $companies ?? collect([
        [
            'image' => 'portfolio/assets/img/talent_pro-removedbg.png',
            'name' => 'Talent Pro',
            'link' => 'https://talentpro.global/',
            'period' => 'Nov 2022 - Present',
            'worked_as' => 'Laravel Backend',
            'keywords' => 'Laravel, Inertia, React, MySQL',
        ],
        [
            'image' => 'portfolio/assets/img/Dynamicflow.png',
            'name' => 'Dynamicflowit',
            'link' => 'https://dynamicflowit.com/',
            'period' => 'Sep 2021 - Oct 2022',
            'worked_as' => 'Fullstack',
            'keywords' => 'Laravel, Shopify, Craft CMS, MySQL, Maizzle, React',
        ],
        [
            'image' => 'portfolio/assets/img/top5way.jpg',
            'name' => 'Top5Way',
            'link' => 'https://www.top5way.com/',
            'period' => 'June 2020 - Nov 2021',
            'worked_as' => 'Fullstack',
            'keywords' => 'Laravel, Livewire, MySQL',
        ],
    ]);
@endphp

<section id="companies" class="px-4 py-24 sm:px-6 lg:px-8 lg:py-32">
    <div class="mx-auto max-w-7xl">
        <div class="mb-14 text-center">
            <p class="mb-4 text-sm font-black uppercase tracking-[0.25em] text-emerald-300">Experience</p>
            <h2 class="text-4xl font-black tracking-tight text-white md:text-6xl">Companies I have worked with.</h2>
        </div>

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($companiesData as $company)
                <article
                    class="group relative overflow-hidden rounded-[2rem] border border-white/10 bg-white/[0.06] p-6 shadow-2xl shadow-black/20 backdrop-blur-xl transition duration-300 hover:-translate-y-2 hover:border-emerald-300/30 {{ $loop->first ? 'ring-2 ring-emerald-300/20' : '' }}">
                    <div
                        class="absolute -right-20 -top-20 h-48 w-48 rounded-full bg-emerald-300/10 blur-3xl transition group-hover:bg-emerald-300/20">
                    </div>
                    <a href="{{ $company['link'] }}" target="_blank" rel="noopener noreferrer"
                        class="relative flex h-56 items-center justify-center rounded-[1.5rem] border border-white/10 bg-white p-8">
                        <img src="{{ asset($company['image']) }}" class="max-h-40 w-auto object-contain"
                            alt="{{ $company['name'] }}">
                    </a>
                    <div class="relative pt-7">
                        <h3 class="text-2xl font-black text-white">
                            <a href="{{ $company['link'] }}" target="_blank" rel="noopener noreferrer"
                                class="transition hover:text-emerald-300">{{ $company['name'] }}</a>
                        </h3>
                        <p class="mt-3 text-sm font-semibold text-emerald-200">{{ $company['worked_as'] }}</p>
                        <p class="mt-1 text-sm text-slate-400">{{ $company['period'] }}</p>
                        <div class="mt-5 flex flex-wrap gap-2">
                            @foreach (explode(', ', $company['keywords']) as $keyword)
                                <span
                                    class="rounded-full border border-emerald-300/20 bg-emerald-300/10 px-3 py-1 text-xs font-bold text-emerald-200">{{ $keyword }}</span>
                            @endforeach
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>