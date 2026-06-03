<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>Moammer Farshid Enan - {{ $title }}</title>
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<meta name="description"
    content="I'm a Laravel Web Developer who loves clean, simple, secure easily maintainable, modular codes.">
<meta name="keywords"
    content="Laravel, Developer, Bangladeshi Laravel Developer, Website Developer, Laravel Developer, Best Laravel Developer, Programmer, PHP Framework, Laravel Website Developer, HTML, CSS, Shopify Developer, Bangladeshi Web Developer">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<meta name="revisit-after" content="10 days">
<meta name="author" content="Moammer Farshid Enan">
<meta name="theme-color" content="#106f17">

<link href="{{ asset('portfolio/assets/img/LogoMakr-4CEFtI.png') }}" rel="icon">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;900&family=Poppins:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">

{{-- Tailwind CSS v4 browser build. For production, prefer compiling through Vite. --}}
{{--
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}
@vite(['resources/css/app.css', 'resources/js/app.js'])

{{-- Icon libraries kept because existing DB/content outputs Bootstrap Icons, Boxicons, FontAwesome, and Iconify markup.
--}}
<link href="{{ asset('portfolio/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('portfolio/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">
<script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>

{{-- Optional libraries used by the existing portfolio interactions. --}}
<link href="{{ asset('portfolio/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('portfolio/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

<style type="text/tailwindcss">
    @theme {
        --font-sans: 'Poppins', ui-sans-serif, system-ui, sans-serif;
        --font-serif: 'Playfair Display', ui-serif, Georgia, serif;
        --color-brand: #106f17;
        --color-brand-dark: #0b6a7d;
    }

    @layer base {
        html { scroll-behavior: smooth; }
        body { @apply bg-white font-sans text-[15px] font-light leading-7 tracking-[0.02em] text-zinc-500 overflow-x-hidden; }
        a { @apply transition duration-300; }
        i { @apply text-brand; }
        ::-webkit-scrollbar { width: 0; }
    }

    @layer components {
        .section-padding { @apply py-20 md:py-28; }
        .container-site { @apply mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8; }
        .section-title { @apply mb-12 text-center md:mb-16; }
        .section-title h2 { @apply text-2xl font-semibold uppercase tracking-[0.18em] text-zinc-900 md:text-3xl; }
        .title-accent { @apply underline decoration-brand decoration-4 underline-offset-8 text-brand; }
        .glass-card { @apply rounded-3xl border border-white/70 bg-white/65 shadow-xl shadow-zinc-200/70 backdrop-blur-xl transition duration-300 hover:-translate-y-1 hover:shadow-2xl; }
        .nav-link { @apply text-sm font-medium text-brand hover:text-brand-dark; }
        .icon-circle { @apply inline-flex h-11 w-11 items-center justify-center rounded-full border border-brand/15 bg-brand/5 text-xl text-brand transition hover:-translate-y-1 hover:bg-brand hover:text-white; }
        .icon-circle i { @apply text-inherit; }
        .filter-chip { @apply cursor-pointer rounded-full border border-brand/15 px-4 py-2 text-xs font-semibold uppercase tracking-wider text-zinc-500 transition hover:border-brand hover:bg-brand hover:text-white; }
        .filter-active { @apply border-brand bg-brand text-white; }
        .back-to-top { @apply invisible fixed bottom-5 right-5 z-50 flex h-11 w-11 items-center justify-center rounded-full bg-brand text-white opacity-0 shadow-lg transition; }
        .back-to-top.active { @apply visible opacity-100; }
        .back-to-top i { @apply text-3xl text-white; }
    }
</style>