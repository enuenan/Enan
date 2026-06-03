<section id="about" class="section-padding bg-zinc-50">
    <div class="container-site">
        <div class="grid items-center gap-12 lg:grid-cols-12">
            <div class="lg:col-span-5">
                <div class="relative mx-auto max-w-md rounded-[2rem] border-[18px] border-brand/20 p-0">
                    <img src="{{ $about->image }}" class="relative -right-6 -top-8 h-[420px] w-full rounded-[1.5rem] object-cover shadow-2xl shadow-zinc-300/70 md:-right-10" alt="me">
                </div>
            </div>

            <div class="lg:col-span-7">
                <div class="max-w-3xl">
                    <p class="font-serif text-3xl font-semibold leading-snug text-zinc-900 md:text-4xl">
                        {{ $about->title }}
                    </p>
                    <p class="mt-6 text-justify text-base leading-8 text-zinc-600">
                        {{ $about->description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
