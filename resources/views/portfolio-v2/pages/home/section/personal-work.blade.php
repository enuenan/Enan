@php
    $personal_works = collect([
        [
            'image' => 'portfolio/assets/img/learn_laravel_with_enan2.png',
            'title' => 'Learn Laravel With Enan',
            'description' => 'To teach laravel other people i developed this website.',
            'link' => 'https://learn-laravel-with-enan.moammer-enan.com/',
            'social' => [
                [
                    'title' => 'Visit Website',
                    'icon' => 'portfolio/assets/img/link.png',
                    'link' => 'https://learn-laravel-with-enan.moammer-enan.com/',
                ],
            ],
        ],
        [
            'image' => 'portfolio/assets/img/Pathao_Courier_API_Integration_with_Laravel.jpg',
            'title' => 'Pathao Courier Api Integration with Laravel',
            'description' => 'A complete package for Laravel to use pathao courier merchant. Built with PHP.',
            'link' => 'https://packagist.org/packages/enan/pathao-courier',
            'social' => [
                [
                    'title' => 'Packagist',
                    'icon' => 'https://packagist.org/img/logo-small.png?v=1698835802',
                    'link' => 'https://packagist.org/packages/enan/pathao-courier',
                ],
                [
                    'title' => 'Github',
                    'icon' => 'portfolio/assets/img/git.png',
                    'link' => 'https://github.com/enuenan/pathao-courier',
                ],
            ],
        ],
    ]);
@endphp

<section id="journal" class="px-4 py-24 sm:px-6 lg:px-8 lg:py-32">
    <div class="mx-auto max-w-7xl">
        <div class="mb-14 text-center">
            <p class="mb-4 text-sm font-black uppercase tracking-[0.25em] text-emerald-300">Personal work</p>
            <h2 class="text-4xl font-black tracking-tight text-white md:text-6xl">Side projects with real utility.</h2>
        </div>

        <div class="grid gap-8 lg:grid-cols-2">
            @foreach ($personal_works as $personal_work)
                <article class="group overflow-hidden rounded-[2rem] border border-white/10 bg-white/[0.06] shadow-2xl shadow-black/20 backdrop-blur-xl transition duration-300 hover:-translate-y-2 hover:border-emerald-300/30">
                    <a href="{{ $personal_work['link'] }}" target="_blank" class="block overflow-hidden">
                        <img src="{{ asset($personal_work['image']) }}" class="h-80 w-full object-cover transition duration-700 group-hover:scale-105" alt="{{ $personal_work['title'] }}">
                    </a>
                    <div class="p-8">
                        <h3 class="text-2xl font-black text-white">
                            <a href="{{ $personal_work['link'] }}" target="_blank" class="transition hover:text-emerald-300">{{ $personal_work['title'] }}</a>
                        </h3>
                        <p class="mt-4 text-base leading-8 text-slate-400">{{ $personal_work['description'] }}</p>
                        <div class="mt-6 flex gap-3">
                            @if (!empty($personal_work['social']))
                                @foreach ($personal_work['social'] as $social)
                                    <a href="{{ $social['link'] }}" target="_blank" rel="noopener noreferrer" title="{{ $social['title'] }}" class="inline-flex h-12 w-12 items-center justify-center rounded-full border border-white/10 bg-white p-2 transition hover:-translate-y-1 hover:border-emerald-300">
                                        <img src="{{ $social['icon'] }}" alt="{{ $social['title'] }}" class="h-8 w-8 object-contain">
                                    </a>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
