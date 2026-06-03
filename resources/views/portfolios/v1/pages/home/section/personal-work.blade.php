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

<div id="journal" class="text-left paddsection">

    <div class="container">
        <div class="section-title text-center">
            <h2>
                <span class="text-decoration-underline" style="color: #106f17 !important">Personal</span> Work
            </h2>
        </div>
    </div>

    <div class="container">
        <div class="journal-block">
            <div class="row">

                @foreach ($personal_works as $personal_work)
                    <div class="col-md-6 mt-1" style="he">
                        <div class="journal-info">
                            <div class="glass p-2">

                                <a href="{{ $personal_work['link'] }}" target="_blank">
                                    <img src="{{ asset($personal_work['image']) }}" class="img-fluid" alt="img">
                                </a>

                                <div class="journal-txt">
                                    <h4>
                                        <a href="{{ $personal_work['link'] }}" target="_blank">
                                            {{ $personal_work['title'] }}
                                        </a>
                                    </h4>
                                    <p class="separator">
                                        {{ $personal_work['description'] }}
                                    </p>
                                    <div class="d-flex mt-1">
                                        @if (!empty($personal_work['social']))
                                            @foreach ($personal_work['social'] as $social)
                                                <a href="{{ $social['link'] }}" class="me-2" target="_blank" rel="noopener noreferrer"
                                                    title="{{ $social['title'] }}">
                                                    <img src="{{ $social['icon'] }}" alt="" class="img-fluid" srcset=""
                                                        style="height: 35px; width: 35px;">
                                                </a>
                                            @endforeach
                                        @endif
                                    </div>
                                    {{-- <iframe src="https://drive.google.com/file/d/1OSOLw_BRKkpQLwhcfqLU8RL3TyxHuHqA/preview" width="640" height="480"
                                    allow="autoplay"></iframe> --}}
                                    {{-- <iframe src="https://drive.google.com/file/d/18F6DPRgEEku2kS0shYVgwpJtHgpFIaLs/preview" width="640" height="480"
                                    allow="autoplay"></iframe> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
