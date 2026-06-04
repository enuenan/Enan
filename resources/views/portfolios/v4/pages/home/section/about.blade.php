<section id="about" class="bg-[#f7f7f7] py-[90px] pt-[120px]">
    <div class="mx-auto max-w-[1140px] px-4 sm:px-6 lg:px-8">
        <div class="grid items-center justify-between gap-10 lg:grid-cols-12">
            <div class="lg:col-span-4"><div class="border-[20px] border-[#b8a07e] pb-[30px] max-lg:border-0 max-lg:pb-0"><img src="{{ $about->image }}" class="ml-10 mt-[-60px] h-[400px] w-full object-cover shadow-[0_0_85px_0_rgba(0,0,0,0.14)] max-lg:ml-0 max-lg:mt-0" alt="me"></div></div>
            <div class="lg:col-span-7"><p class="m-0 font-['Playfair_Display',serif] text-[28px] leading-snug text-[#292929] max-lg:text-xl">{{ $about->title }}</p><p class="mb-0 mt-[25px] max-w-[80%] text-justify text-[15px] leading-7 text-[#999] max-lg:max-w-full">{{ $about->description }}</p></div>
        </div>
    </div>
</section>
