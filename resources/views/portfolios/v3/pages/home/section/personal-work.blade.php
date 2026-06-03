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

<section id="journal" class="px-4 py-20 sm:px-6 lg:px-8 lg:py-28">
    <div class="mx-auto max-w-7xl">
        <div class="mb-12 text-center">
            <p class="inline-flex rounded-full border-2 border-neutral-950 bg-lime-300 px-4 py-2 text-xs font-black uppercase tracking-[0.2em] shadow-[3px_3px_0_#111827]">Personal work</p>
            <h2 class="font-display mx-auto mt-6 max-w-4xl text-5xl font-black leading-none tracking-[-0.05em] text-neutral-950 md:text-7xl">Small products. Real usefulness.</h2>
        </div>

        <div class="grid gap-8 lg:grid-cols-2">
            @foreach ($personal_works as $personal_work)
                <article class="group overflow-hidden rounded-[2rem] border-2 border-neutral-950 bg-white shadow-[9px_9px_0_#111827] transition hover:-translate-y-2">
                    <a href="{{ $personal_work['link'] }}" target="_blank" class="block overflow-hidden border-b-2 border-neutral-950">
                        <img src="{{ asset($personal_work['image']) }}" class="h-80 w-full object-cover transition duration-700 group-hover:scale-105" alt="{{ $personal_work['title'] }}">
                    </a>
                    <div class="p-8">
                        <h3 class="font-display text-3xl font-black text-neutral-950">
                            <a href="{{ $personal_work['link'] }}" target="_blank" class="hover:text-orange-600">{{ $personal_work['title'] }}</a>
                        </h3>
                        <p class="mt-4 text-base font-medium leading-8 text-neutral-600">{{ $personal_work['description'] }}</p>
                        <div class="mt-6 flex gap-3">
                            @if (!empty($personal_work['social']))
                                @foreach ($personal_work['social'] as $social)
                                    <a href="{{ $social['link'] }}" target="_blank" rel="noopener noreferrer" title="{{ $social['title'] }}" class="grid h-12 w-12 place-items-center rounded-xl border-2 border-neutral-950 bg-[#fffaf0] p-2 shadow-[3px_3px_0_#111827] transition hover:-translate-y-1 hover:bg-orange-400">
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
