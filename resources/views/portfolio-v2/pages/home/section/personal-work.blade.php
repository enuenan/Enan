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

<section id="journal" class="section-padding bg-zinc-50">
    <div class="container-site">
        <div class="section-title">
            <h2><span class="title-accent">Personal</span> Work</h2>
        </div>

        <div class="grid gap-8 md:grid-cols-2">
            @foreach ($personal_works as $personal_work)
                <article class="glass-card overflow-hidden">
                    <a href="{{ $personal_work['link'] }}" target="_blank" class="block overflow-hidden">
                        <img src="{{ asset($personal_work['image']) }}" class="h-72 w-full object-cover transition duration-500 hover:scale-105" alt="{{ $personal_work['title'] }}">
                    </a>

                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-zinc-900">
                            <a href="{{ $personal_work['link'] }}" target="_blank" class="hover:text-brand">{{ $personal_work['title'] }}</a>
                        </h4>
                        <p class="mt-3 text-sm leading-7 text-zinc-500">
                            {{ $personal_work['description'] }}
                        </p>
                        <div class="mt-5 flex gap-3">
                            @if (!empty($personal_work['social']))
                                @foreach ($personal_work['social'] as $social)
                                    <a href="{{ $social['link'] }}" target="_blank" rel="noopener noreferrer" title="{{ $social['title'] }}" class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-brand/15 bg-white transition hover:-translate-y-1 hover:border-brand">
                                        <img src="{{ $social['icon'] }}" alt="{{ $social['title'] }}" class="h-7 w-7 object-contain">
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
