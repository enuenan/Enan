@php
    $companies = collect([
        ['image' => 'portfolio/assets/img/talent_pro-removedbg.png', 'name' => 'Talent Pro', 'link' => 'https://talentpro.global/', 'period' => 'Nov 2022 - Present', 'worked_as' => 'Laravel Backend', 'keywords' => 'Laravel, Inertia, React, MySQL'],
        ['image' => 'portfolio/assets/img/Dynamicflow.png', 'name' => 'Dynamicflowit', 'link' => 'https://dynamicflowit.com/', 'period' => 'Sep 2021 - Oct 2022', 'worked_as' => 'Fullstack', 'keywords' => 'Laravel, Shopify, Craft CMS, MySQL, Maizzle, React'],
        ['image' => 'portfolio/assets/img/top5way.jpg', 'name' => 'Top5Way', 'link' => 'https://www.top5way.com/', 'period' => 'June 2020 - Nov 2021', 'worked_as' => 'Fullstack', 'keywords' => 'Laravel, Livewire, MySQL'],
    ]);
@endphp
<section id="journal" class="bg-[#f7f7f7] py-[90px] pb-[60px] text-left">
    <div class="mx-auto max-w-[1140px] px-4 sm:px-6 lg:px-8">
        <div class="mb-[70px] text-center"><h2 class="text-[25px] font-semibold uppercase tracking-[2px] text-[#292929]"><span class="underline decoration-[#106f17] underline-offset-4" style="color: #106f17 !important">Companies</span> I have worked for:</h2></div>
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($companies as $company)
                <div><div class="rounded-xl border border-white/20 bg-[#106f17]/[0.07] p-0 backdrop-blur-xl {{ $loop->first ? 'border-[#198754]' : '' }}"><a href="{{ $company['link'] }}" target="_blank" class="block"><img src="{{ asset($company['image']) }}" class="mx-auto block h-[200px] max-w-full object-contain" alt="img"></a></div><div class="py-[25px] text-center"><h4 class="m-0 text-sm font-semibold text-[#292929]"><a href="{{ $company['link'] }}" target="_blank" class="block text-[19px] font-medium leading-6 text-[#292929] transition hover:text-[#106f17]">{{ $company['name'] }}</a></h4><p class="m-0 text-sm leading-6 text-[#999]">{{ $company['worked_as'] }}<br>{{ $company['period'] }}<br>@foreach (explode(', ', $company['keywords']) as $keyword)<span class="inline-block rounded-full bg-[#198754b5] px-2.5 py-1 text-xs font-light text-white">{{ $keyword }}</span> @endforeach</p></div></div>
            @endforeach
        </div>
    </div>
</section>
