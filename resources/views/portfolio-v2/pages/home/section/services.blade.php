<section id="services" class="section-padding bg-zinc-50">
    <div class="container-site">
        <div class="mb-10">
            <h3 class="text-2xl font-semibold uppercase tracking-[0.15em] text-zinc-900">
                <span class="title-accent">Skilled</span> at below stack
            </h3>
        </div>

        <div class="services-slider swiper-container overflow-hidden" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                @foreach ($skills as $skill)
                    <div class="swiper-slide h-auto">
                        <div class="glass-card h-full p-8 text-center">
                            <div class="mb-5 flex justify-center text-5xl text-brand [&_i]:text-5xl [&_svg]:h-12 [&_svg]:w-12">
                                {!! $skill->icon !!}
                            </div>
                            <span class="block text-sm font-semibold uppercase tracking-[0.2em] text-zinc-900">{{ $skill->name }}</span>
                            <p class="mt-4 text-sm leading-7 text-zinc-500">
                                {{ $skill->description }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination mt-8"></div>
        </div>
    </div>
</section>
