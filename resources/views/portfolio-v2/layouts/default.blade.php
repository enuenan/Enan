<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    @include(config('portfolio.view_namespace', 'portfolio') . '::includes.head')
</head>
<body class="min-h-screen overflow-x-hidden bg-slate-950 text-slate-200 antialiased selection:bg-emerald-400 selection:text-slate-950">
    <div class="pointer-events-none fixed inset-0 -z-10 bg-[radial-gradient(circle_at_top_left,rgba(16,185,129,0.22),transparent_34%),radial-gradient(circle_at_80%_20%,rgba(20,184,166,0.16),transparent_28%),linear-gradient(180deg,#020617_0%,#0f172a_45%,#020617_100%)]"></div>

    @include(config('portfolio.view_namespace', 'portfolio') . '::includes.header')

    @yield('content')

    <a href="#" class="back-to-top invisible fixed bottom-6 right-6 z-50 inline-flex h-12 w-12 items-center justify-center rounded-full border border-white/10 bg-emerald-400 text-slate-950 opacity-0 shadow-2xl shadow-emerald-500/30 transition duration-300 hover:-translate-y-1" aria-label="Back to top">
        <i class="bi bi-arrow-up-short text-3xl"></i>
    </a>

    @include(config('portfolio.view_namespace', 'portfolio') . '::includes.footer')
    @include(config('portfolio.view_namespace', 'portfolio') . '::includes.scripts')
</body>
</html>
