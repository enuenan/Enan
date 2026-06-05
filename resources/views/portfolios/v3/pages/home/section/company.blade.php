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

<section id="companies" class="px-4 py-20 sm:px-6 lg:px-8 lg:py-28">
    <div class="mx-auto max-w-7xl">
        <div class="mb-12 grid gap-6 lg:grid-cols-12 lg:items-end">
            <div class="lg:col-span-8">
                <p class="inline-flex rounded-full border-2 border-neutral-950 bg-orange-400 px-4 py-2 text-xs font-black uppercase tracking-[0.2em] shadow-[3px_3px_0_#111827]">Experience</p>
                <h2 class="font-display mt-6 text-5xl font-black leading-none tracking-[-0.05em] text-neutral-950 md:text-7xl">Companies I have worked with.</h2>
            </div>
            <p class="text-lg font-medium leading-8 text-neutral-700 lg:col-span-4">A timeline of production work across Laravel, Shopify, React, CMS, and backend systems.</p>
        </div>

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($companiesData as $company)
                <article class="group rounded-4xl border-2 border-neutral-950 bg-white p-6 shadow-[8px_8px_0_#111827] transition hover:-translate-y-2 {{ $loop->first ? 'bg-lime-100' : '' }}">
                        <a href="{{ $company['link'] }}" target="_blank" rel="noopener noreferrer" class="flex h-56 items-center justify-center rounded-[1.5rem] border-2 border-neutral-950 bg-[#fffaf0] p-8 transition group-hover:bg-cyan-100">
                            <img src="{{ asset($company['image']) }}" class="max-h-40 w-auto object-contain" alt="{{ $company['name'] }}">
                        </a>
                    <div class="pt-7">
                        <p class="text-xs font-black uppercase tracking-[0.18em] text-orange-600">{{ $company['period'] }}</p>
                        <h3 class="font-display mt-3 text-3xl font-black text-neutral-950">
                               <a href="{{ $company['link'] }}" target="_blank" rel="noopener noreferrer" class="hover:text-orange-600">{{ $company['name'] }}</a>
                        </h3>
                        <p class="mt-2 text-base font-black text-neutral-700">{{ $company['worked_as'] }}</p>
                        <div class="mt-5 flex flex-wrap gap-2">
                            @foreach (explode(', ', $company['keywords']) as $keyword)
                                <span class="rounded-full border-2 border-neutral-950 bg-white px-3 py-1 text-xs font-black text-neutral-800">{{ $keyword }}</span>
                            @endforeach
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
