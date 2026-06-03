<section id="cv-resume" class="px-4 py-24 sm:px-6 lg:px-8 lg:py-32">
    <div class="mx-auto max-w-7xl">
        <div class="mb-14 text-center">
            <p class="mb-4 text-sm font-black uppercase tracking-[0.25em] text-emerald-300">Documents</p>
            <h2 class="text-4xl font-black tracking-tight text-white md:text-6xl">CV & Resume</h2>
        </div>

        @if ($cv_and_resume)
            <div class="grid gap-8 lg:grid-cols-2">
                <div class="overflow-hidden rounded-[2rem] border border-white/10 bg-white/[0.06] p-4 shadow-2xl shadow-black/20 backdrop-blur-xl">
                    <h3 class="mb-4 px-2 text-2xl font-black text-white">CV</h3>
                    <iframe src="{{ $cv_and_resume->cv }}" class="h-[780px] w-full rounded-[1.5rem] border border-white/10 bg-white"></iframe>
                </div>
                <div class="overflow-hidden rounded-[2rem] border border-white/10 bg-white/[0.06] p-4 shadow-2xl shadow-black/20 backdrop-blur-xl">
                    <h3 class="mb-4 px-2 text-2xl font-black text-white">Resume</h3>
                    <iframe src="{{ $cv_and_resume->resume }}" class="h-[780px] w-full rounded-[1.5rem] border border-white/10 bg-white"></iframe>
                </div>
            </div>
        @endif
    </div>
</section>
