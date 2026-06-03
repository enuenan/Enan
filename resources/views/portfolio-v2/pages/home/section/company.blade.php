@php
    $companies = collect([
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

<section id="companies" class="section-padding bg-zinc-50">
    <div class="container-site">
        <div class="section-title">
            <h2><span class="title-accent">Companies</span> I have worked for:</h2>
        </div>

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($companies as $company)
                <article class="glass-card h-full p-6 {{ $loop->first ? 'ring-2 ring-brand/30' : '' }}">
                    <a href="{{ $company['link'] }}" target="_blank" class="flex h-52 items-center justify-center rounded-2xl bg-white/70 p-6">
                        <img src="{{ asset($company['image']) }}" class="max-h-44 w-auto object-contain" alt="{{ $company['name'] }}">
                    </a>

                    <div class="pt-6 text-center">
                        <h4 class="text-xl font-semibold text-zinc-900">
                            <a href="{{ $company['link'] }}" target="_blank" class="hover:text-brand">{{ $company['name'] }}</a>
                        </h4>
                        <p class="mt-3 text-sm leading-7 text-zinc-500">
                            {{ $company['worked_as'] }}<br>
                            {{ $company['period'] }}
                        </p>
                        <div class="mt-4 flex flex-wrap justify-center gap-2">
                            @foreach (explode(', ', $company['keywords']) as $keyword)
                                <span class="rounded-full bg-brand/10 px-3 py-1 text-xs font-medium text-brand">{{ $keyword }}</span>
                            @endforeach
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
