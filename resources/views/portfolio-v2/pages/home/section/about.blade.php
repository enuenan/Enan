<section id="about" class="px-4 py-24 sm:px-6 lg:px-8 lg:py-32">
    <div class="mx-auto max-w-7xl">
        <div class="grid items-center gap-14 lg:grid-cols-12">
            <div class="lg:col-span-5">
                <div class="relative">
                    <div class="absolute -inset-4 rounded-[2.5rem] bg-emerald-300/10 blur-xl"></div>
                    <div class="relative rotate-[-2deg] overflow-hidden rounded-[2rem] border border-white/10 bg-white/5 p-3 shadow-2xl shadow-black/30 backdrop-blur-xl transition hover:rotate-0">
                        <img src="{{ $about->image }}" class="h-[440px] w-full rounded-[1.5rem] object-cover" alt="me">
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7">
                <p class="mb-4 text-sm font-black uppercase tracking-[0.25em] text-emerald-300">About me</p>
                <h2 class="font-display text-4xl font-black leading-tight text-white md:text-6xl">
                    {{ $about->title }}
                </h2>
                <p class="mt-8 text-justify text-lg leading-9 text-slate-300">
                    {{ $about->description }}
                </p>

                <div class="mt-10 grid gap-4 sm:grid-cols-3">
                    <div class="rounded-3xl border border-white/10 bg-white/5 p-5 backdrop-blur">
                        <p class="text-3xl font-black text-emerald-300">Laravel</p>
                        <p class="mt-2 text-sm text-slate-400">Backend focused</p>
                    </div>
                    <div class="rounded-3xl border border-white/10 bg-white/5 p-5 backdrop-blur">
                        <p class="text-3xl font-black text-emerald-300">Clean</p>
                        <p class="mt-2 text-sm text-slate-400">Maintainable code</p>
                    </div>
                    <div class="rounded-3xl border border-white/10 bg-white/5 p-5 backdrop-blur">
                        <p class="text-3xl font-black text-emerald-300">Secure</p>
                        <p class="mt-2 text-sm text-slate-400">Practical delivery</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
