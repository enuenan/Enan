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

<div id="journal" class="text-left paddsection">

    <div class="container">
        <div class="section-title text-center">
            <h2>
                <span class="text-decoration-underline" style="color: #106f17 !important">Companies</span>
                I have worked for:
            </h2>
        </div>
    </div>

    <div class="container">
        <div class="journal-block">
            <div class="row">
                @foreach ($companies as $company)
                    <div class="col-lg-4 col-md-6">
                        <div class="journal-info">

                            <div class="glass {{ $loop->first ? 'border-success' : '' }}">
                                <a href="{{ $company['link'] }}" target="_blank">
                                    <img src="{{ asset($company['image']) }}" class="img-fluid mx-auto d-block" style="height: 200px;" alt="img">
                                </a>
                            </div>

                            <div class="journal-txt text-center">
                                <h4>
                                    <a href="{{ $company['link'] }}" target="_blank">
                                        {{ $company['name'] }}
                                    </a>
                                </h4>
                                <p class="separator">
                                    {{ $company['worked_as'] }}
                                    <br>
                                    {{ $company['period'] }}
                                    <br>
                                    @foreach (explode(', ', $company['keywords']) as $keyword)
                                        <span class="badge rounded-pill" style="background-color: #198754b5; font-weight: 100 !important;">
                                            {{ $keyword }}
                                        </span>
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
