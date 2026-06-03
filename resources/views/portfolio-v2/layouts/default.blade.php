<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    @include(config('portfolio.view_namespace', 'portfolio') . '.includes.head')
</head>

<body class="bg-white text-zinc-600 antialiased">
    @include(config('portfolio.view_namespace', 'portfolio') . '.includes.header')

    @yield('content')

    <a href="#" class="back-to-top" aria-label="Back to top">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    @include(config('portfolio.view_namespace', 'portfolio') . '.includes.footer')
    @include(config('portfolio.view_namespace', 'portfolio') . '.includes.scripts')
</body>

</html>