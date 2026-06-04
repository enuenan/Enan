@php
    $personal_works = collect([
        ['image' => 'portfolio/assets/img/learn_laravel_with_enan2.png', 'title' => 'Learn Laravel With Enan', 'description' => 'To teach laravel other people i developed this website.', 'link' => 'https://learn-laravel-with-enan.moammer-enan.com/', 'social' => [['title' => 'Visit Website', 'icon' => 'portfolio/assets/img/link.png', 'link' => 'https://learn-laravel-with-enan.moammer-enan.com/']]],
        ['image' => 'portfolio/assets/img/Pathao_Courier_API_Integration_with_Laravel.jpg', 'title' => 'Pathao Courier Api Integration with Laravel', 'description' => 'A complete package for Laravel to use pathao courier merchant. Built with PHP.', 'link' => 'https://packagist.org/packages/enan/pathao-courier', 'social' => [['title' => 'Packagist', 'icon' => 'https://packagist.org/img/logo-small.png?v=1698835802', 'link' => 'https://packagist.org/packages/enan/pathao-courier'], ['title' => 'Github', 'icon' => 'portfolio/assets/img/git.png', 'link' => 'https://github.com/enuenan/pathao-courier']]],
    ]);
@endphp
<section id="journal-personal" class="bg-[#f7f7f7] py-[90px] pb-[60px] text-left">
    <div class="mx-auto max-w-[1140px] px-4 sm:px-6 lg:px-8">
        <div class="mb-[70px] text-center"><h2 class="text-[25px] font-semibold uppercase tracking-[2px] text-[#292929]"><span class="underline decoration-[#106f17] underline-offset-4" style="color: #106f17 !important">Personal</span> Work</h2></div>
        <div class="grid gap-8 md:grid-cols-2">
            @foreach ($personal_works as $personal_work)
                <div><div class="rounded-xl border border-white/20 bg-[#106f17]/[0.07] p-2 backdrop-blur-xl"><a href="{{ $personal_work['link'] }}" target="_blank"><img src="{{ asset($personal_work['image']) }}" class="h-auto max-w-full" alt="img"></a><div class="py-[25px]"><h4 class="m-0 text-sm font-semibold text-[#292929]"><a href="{{ $personal_work['link'] }}" target="_blank" class="block text-[19px] font-medium leading-6 text-[#292929] transition hover:text-[#106f17]">{{ $personal_work['title'] }}</a></h4><p class="m-0 text-sm leading-6 text-[#999]">{{ $personal_work['description'] }}</p><div class="mt-1 flex">@if (!empty($personal_work['social'])) @foreach ($personal_work['social'] as $social)<a href="{{ $social['link'] }}" class="mr-2" target="_blank" rel="noopener noreferrer" title="{{ $social['title'] }}"><img src="{{ $social['icon'] }}" alt="" class="h-[35px] w-[35px] object-contain"></a>@endforeach @endif</div></div></div></div>
            @endforeach
        </div>
    </div>
</section>
