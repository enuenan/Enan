<section id="cv-resume" class="px-4 py-20 sm:px-6 lg:px-8 lg:py-28">
    <div class="mx-auto max-w-7xl">
        <div class="mb-12 text-center">
            <p class="inline-flex rounded-full border-2 border-neutral-950 bg-cyan-300 px-4 py-2 text-xs font-black uppercase tracking-[0.2em] shadow-[3px_3px_0_#111827]">Documents</p>
            <h2 class="font-display mx-auto mt-6 max-w-4xl text-5xl font-black leading-none tracking-[-0.05em] text-neutral-950 md:text-7xl">CV & Resume</h2>
        </div>

        @if ($cv_and_resume)
            <div class="grid gap-8 lg:grid-cols-2">
                <div class="rounded-[2rem] border-2 border-neutral-950 bg-white p-4 shadow-[8px_8px_0_#111827]">
                    <h3 class="mb-4 font-display text-3xl font-black text-neutral-950">CV</h3>
                    <iframe src="{{ $cv_and_resume->cv }}" class="h-[780px] w-full rounded-[1.5rem] border-2 border-neutral-950 bg-white"></iframe>
                </div>
                <div class="rounded-[2rem] border-2 border-neutral-950 bg-white p-4 shadow-[8px_8px_0_#111827]">
                    <h3 class="mb-4 font-display text-3xl font-black text-neutral-950">Resume</h3>
                    <iframe src="{{ $cv_and_resume->resume }}" class="h-[780px] w-full rounded-[1.5rem] border-2 border-neutral-950 bg-white"></iframe>
                </div>
            </div>
        @endif
    </div>
</section>
