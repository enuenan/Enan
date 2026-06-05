<section id="about" class="px-4 py-20 sm:px-6 lg:px-8 lg:py-28">
    <div class="mx-auto max-w-7xl">
        <div class="grid gap-10 lg:grid-cols-12 lg:items-start">
            <div class="lg:col-span-4">
                <div class="sticky top-28 rounded-[2rem] border-2 border-neutral-950 bg-cyan-200 p-4 shadow-[9px_9px_0_#111827]">
                    <img src="{{ $about->image ?? asset('portfolio/assets/img/pixomatic_1702137054794.png') }}" class="h-[420px] w-full rounded-[1.5rem] border-2 border-neutral-950 object-cover" alt="me">
                </div>
            </div>

            <div class="lg:col-span-8">
                <p class="inline-flex rounded-full border-2 border-neutral-950 bg-orange-400 px-4 py-2 text-xs font-black uppercase tracking-[0.2em] shadow-[3px_3px_0_#111827]">About</p>
                <h2 class="font-display mt-8 text-5xl font-black leading-none tracking-[-0.05em] text-neutral-950 md:text-7xl">
                    {{ $about->title ?? 'Laravel developer building clean web products.' }}
                </h2>
                <p class="mt-8 max-w-4xl text-justify text-lg font-medium leading-9 text-neutral-700">
                    {{ $about->description ?? 'I build secure, maintainable, and scalable web applications with Laravel and modern frontend tools.' }}
                </p>

                <div class="mt-10 grid gap-4 sm:grid-cols-3">
                    <div class="rounded-2xl border-2 border-neutral-950 bg-white p-6 shadow-[5px_5px_0_#111827]">
                        <p class="font-display text-4xl font-black text-orange-600">01</p>
                        <p class="mt-3 font-black text-neutral-950">Backend logic</p>
                        <p class="mt-2 text-sm leading-6 text-neutral-600">Laravel features built for clarity.</p>
                    </div>
                    <div class="rounded-2xl border-2 border-neutral-950 bg-lime-300 p-6 shadow-[5px_5px_0_#111827]">
                        <p class="font-display text-4xl font-black text-neutral-950">02</p>
                        <p class="mt-3 font-black text-neutral-950">Clean code</p>
                        <p class="mt-2 text-sm leading-6 text-neutral-700">Readable, modular, maintainable.</p>
                    </div>
                    <div class="rounded-2xl border-2 border-neutral-950 bg-white p-6 shadow-[5px_5px_0_#111827]">
                        <p class="font-display text-4xl font-black text-cyan-600">03</p>
                        <p class="mt-3 font-black text-neutral-950">Delivery</p>
                        <p class="mt-2 text-sm leading-6 text-neutral-600">Practical builds that ship.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
