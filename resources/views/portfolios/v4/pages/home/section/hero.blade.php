<section id="hero" class="min-h-screen bg-top bg-cover bg-no-repeat md:bg-contain lg:bg-cover"
    style="background-image: url('{{ asset('portfolio/assets/img/imgonline-com-ua-retouch-h8qj9vhVGszy.jpg') }}');">
    <div class="mx-auto max-w-[1140px] px-4 sm:px-6 lg:px-8">
        <div
            class="flex min-h-screen w-full flex-col justify-center text-left max-md:justify-end max-md:pb-[90px] max-sm:pb-[60px]">
            <h1 class="mb-2.5 min-h-[100px] text-[40px] font-bold uppercase leading-tight text-[#0b6a7d] max-sm:text-[32px]">
                I'm <span class="typed" data-typed-items="Moammer Farshid Enan, Laravel Web Developer"></span>
            </h1>

            <p class="mb-[30px] mt-0 max-w-2xl text-base font-medium capitalize leading-8 tracking-[3px] text-[#106f17]">
                <strong>Laravel Web Developer</strong>
            </p>

            <ul class="flex flex-wrap gap-5 p-0">
                <li><a href="{{ config('portfolio.social_links.github', 'https://github.com/enuenan') }}" target="_blank" rel="noopener noreferrer"><i
                            class="bi bi-github text-xl text-[#106f17]"></i></a></li>
                <li><a href="{{ config('portfolio.social_links.facebook', 'https://www.facebook.com/moammerfarshidenan') }}" target="_blank"
                        rel="noopener noreferrer"><i class="bi bi-facebook text-xl text-[#106f17]"></i></a></li>
                <li><a href="{{ config('portfolio.social_links.twitter', 'https://twitter.com/MoammerEnan') }}" target="_blank"
                        rel="noopener noreferrer"><i class="bi bi-twitter text-xl text-[#106f17]"></i></a></li>
                <li><a href="{{ config('portfolio.social_links.instagram', 'https://www.instagram.com/__ennaaaa__/') }}" target="_blank"
                        rel="noopener noreferrer"><i class="bi bi-instagram text-xl text-[#106f17]"></i></a></li>
                <li><a href="{{ config('portfolio.social_links.linkedin', 'https://www.linkedin.com/in/moammer-farshid/') }}" target="_blank"
                        rel="noopener noreferrer"><i class="bi bi-linkedin text-xl text-[#106f17]"></i></a></li>
            </ul>
        </div>
    </div>
</section>
