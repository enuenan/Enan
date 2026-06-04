<section id="cv-resume" class="py-[90px] pb-[50px]">
    <div class="mx-auto max-w-[1140px] px-4 sm:px-6 lg:px-8">
        <div class="mb-[70px] text-center"><h2 class="text-[25px] font-semibold uppercase tracking-[2px] text-[#292929]"><span class="underline decoration-[#106f17] underline-offset-4" style="color: #106f17 !important">CV & Resume</span></h2></div>
        @if ($cv_and_resume)
            <div class="grid gap-8 md:grid-cols-2"><div><h3 class="mb-4 text-2xl font-semibold text-[#292929]">CV</h3><iframe src="{{ $cv_and_resume->cv }}" class="h-[780px] w-full"></iframe></div><div><h3 class="mb-4 text-2xl font-semibold text-[#292929]">Resume</h3><iframe src="{{ $cv_and_resume->resume }}" class="h-[780px] w-full"></iframe></div></div>
        @endif
    </div>
</section>
