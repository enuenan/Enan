<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    @include(config('portfolio.view_namespace', 'portfolio') . '::includes.head')
</head>
<body class="min-h-screen overflow-x-hidden bg-[#fffaf0] text-neutral-900 antialiased selection:bg-orange-400 selection:text-neutral-950">
    <div class="pointer-events-none fixed inset-0 -z-10 opacity-70" style="background-image: linear-gradient(#11182712 1px, transparent 1px), linear-gradient(90deg, #11182712 1px, transparent 1px); background-size: 36px 36px;"></div>

    @include(config('portfolio.view_namespace', 'portfolio') . '::includes.header')

    @yield('content')

    <a href="#" class="back-to-top invisible fixed bottom-6 right-6 z-50 grid h-12 w-12 place-items-center rounded-xl border-2 border-neutral-950 bg-lime-300 text-neutral-950 opacity-0 shadow-[4px_4px_0_#111827] transition hover:-translate-y-1" aria-label="Back to top">
        <i class="bi bi-arrow-up-short text-3xl"></i>
    </a>

    @include(config('portfolio.view_namespace', 'portfolio') . '::includes.footer')
    @include(config('portfolio.view_namespace', 'portfolio') . '::includes.scripts')
</body>
</html>
