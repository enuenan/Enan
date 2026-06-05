<section id="portfolio" class="relative z-10 clear-both border-b border-[#106f17]/10 bg-white py-[90px] pb-[110px]">
    <div class="mx-auto max-w-[1140px] px-4 sm:px-6 lg:px-8">
        <div class="mb-[70px] text-center">
            <h2 class="text-[25px] font-semibold uppercase tracking-[2px] text-[#292929]">My <span
                    class="underline decoration-[#106f17] underline-offset-4"
                    style="color: #106f17 !important">Portfolio</span></h2>
        </div>
        <div class="mb-[35px] flex justify-center">
            <ul id="portfolio-flters" class="m-0 flex flex-wrap justify-center rounded-full px-[15px] py-0 text-center">
                <li data-filter="*"
                    class="filter-active mb-1 cursor-pointer px-[15px] pb-2 pt-2.5 text-sm font-semibold uppercase leading-none text-[#106f17] transition">
                    All</li>@foreach ($categories as $category)<li data-filter=".filter-{{ $category->name }}"
                        class="mb-1 cursor-pointer px-[15px] pb-2 pt-2.5 text-sm font-semibold uppercase leading-none text-[#999] transition hover:text-[#106f17]">
                    {{ $category->name }}</li>@endforeach
            </ul>
        </div>
        <div class="portfolio-container relative flex min-h-[320px] flex-wrap justify-center gap-2">
            @foreach ($portfolios as $portfolio)
                <div
                    class="portfolio-item filter-{{ $portfolio->category ? $portfolio->category->name : 'no-category' }} mb-[30px] w-full rounded-xl border border-white/20 bg-[#106f17]/[0.07] p-2 backdrop-blur-xl transition md:w-[48%] lg:w-[32%]">
                    <img src="{{ $portfolio->image }}" class="mt-2 h-auto w-full"
                        alt="{{ $portfolio->name }} - portfolio screenshot" loading="lazy">
                    <div class="pb-[25px] pl-1 pt-4">
                        <h4 class="m-0 text-sm font-semibold text-[#292929]"><a
                                href="{{ $portfolio->project_url ?? 'http://www.edventurebd.com/' }}" target="_blank"
                                rel="noopener noreferrer"
                                class="block text-[19px] font-medium leading-6 text-[#292929] transition hover:text-[#106f17]">{{ $portfolio->name }}
                                <i class="fa-solid fa-up-right-from-square text-[#106f17]"></i></a></h4>
                        <p class="m-0 mt-[13px] text-sm leading-6 text-[#999]">{{ $portfolio->description_title }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>