<section id="cv-resume" class="section-padding bg-white">
    <div class="container-site">
        <div class="section-title">
            <h2><span class="title-accent">CV & Resume</span></h2>
        </div>

        @if ($cv_and_resume)
            <div class="grid gap-8 lg:grid-cols-2">
                <div class="glass-card overflow-hidden p-4">
                    <h3 class="mb-4 text-xl font-semibold text-zinc-900">CV</h3>
                    <iframe src="{{ $cv_and_resume->cv }}" class="h-[780px] w-full rounded-2xl border border-zinc-100"></iframe>
                </div>

                <div class="glass-card overflow-hidden p-4">
                    <h3 class="mb-4 text-xl font-semibold text-zinc-900">Resume</h3>
                    <iframe src="{{ $cv_and_resume->resume }}" class="h-[780px] w-full rounded-2xl border border-zinc-100"></iframe>
                </div>
            </div>
        @endif
    </div>
</section>
