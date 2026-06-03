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
<meta name="theme-color" content="#0f766e">

<link href="{{ asset('portfolio/assets/img/LogoMakr-4CEFtI.png') }}" rel="icon">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Playfair+Display:wght@600;700;900&display=swap"
    rel="stylesheet">

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

<style>
    html {
        scroll-behavior: smooth;
    }

    ::-webkit-scrollbar {
        width: 0;
    }

    .swiper-pagination-bullet {
        background: rgba(255, 255, 255, 0.7) !important;
        opacity: 1 !important;
    }

    .swiper-pagination-bullet-active {
        background: #6ee7b7 !important;
    }

    .filter-active {
        background: #6ee7b7;
        color: #020617;
    }
</style>