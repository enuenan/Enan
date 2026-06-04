<section id="services" class="bg-[#f7f7f7] pb-20">
    <div class="mx-auto max-w-[1140px] px-4 sm:px-6 lg:px-8">
        <h3 class="mb-4 text-[25px] font-semibold text-[#292929]"><span class="underline decoration-[#106f17] underline-offset-4" style="color: #106f17 !important">Skilled</span> at below stack</h3>
        <div class="services-slider swiper-container overflow-hidden" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                @foreach ($skills as $skill)
                    <div class="swiper-slide"><div class="py-5"><div class="mb-2.5 text-[44px] leading-[44px] text-[#106f17] [&_i]:text-[44px] [&_i]:leading-[44px] [&_svg]:h-11 [&_svg]:w-11">{!! $skill->icon !!}</div><span class="my-2.5 block text-[13px] font-medium uppercase tracking-[0.1em] text-[#292929]">{{ $skill->name }}</span><p class="m-0 text-[13px] leading-[22px] text-[#999]">{{ $skill->description }}</p></div></div>
                @endforeach
            </div>
            <div class="swiper-pagination relative mt-[30px]"></div>
        </div>
    </div>
</section>
