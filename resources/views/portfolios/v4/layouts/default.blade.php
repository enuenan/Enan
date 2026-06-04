<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    @include(config('portfolio.view_namespace', 'portfolio') . '::includes.head')
</head>
<body class="mx-auto overflow-x-hidden bg-white p-0 font-['Poppins',helvetica] text-[15px] font-light leading-5 tracking-[0.02em] text-[#898989] antialiased">
    @include(config('portfolio.view_namespace', 'portfolio') . '::includes.header')
    @yield('content')
    <a href="#" class="back-to-top invisible fixed bottom-[15px] right-[15px] z-[996] flex h-10 w-10 items-center justify-center rounded bg-[#106f17] text-white opacity-0 transition duration-300 hover:bg-[#0b6a7d]" aria-label="Back to top"><i class="bi bi-arrow-up-short text-[28px] leading-none text-white"></i></a>
    @include(config('portfolio.view_namespace', 'portfolio') . '::includes.footer')
    @include(config('portfolio.view_namespace', 'portfolio') . '::includes.scripts')
</body>
</html>
