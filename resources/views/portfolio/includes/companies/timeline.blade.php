{{-- @foreach ($companies as $company)
    <!-- timeline item {{ $loop->iteration }} -->
    <x-company.card side='{{ $loop->odd ? 'right' : 'left' }}' active='{{ $loop->first ? 'true' : 'false' }}' />
@endforeach --}}

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
            'link' => 'http://dynamicflowit.com/',
            'period' => 'Sep 2021 - Nov 2022',
            'worked_as' => 'Fullstack',
            'keywords' => 'Laravel, Shopify, Craft CMS',
        ],
        [
            'image' => 'portfolio/assets/img/top5way.jpg',
            'name' => 'Top5Way',
            'link' => 'https://www.top5way.com/',
            'period' => 'June 2020 - Nov 2021',
            'worked_as' => 'Laravel Backend',
            'keywords' => 'Laravel, Livewire, MySQL',
        ],
    ]);
@endphp

@foreach ($companies as $company)
    @include('portfolio.includes.companies.card', [
        'side' => $loop->odd ? 'right' : 'left',
        'active' => $loop->last ? 'true' : 'false',
    ])
@endforeach
