<x-portfolios.common-meta :title="$title ?? 'Laravel Web Developer'" theme-color="#f97316" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700;800;900&family=Space+Grotesk:wght@500;600;700&display=swap"
    rel="stylesheet">

@vite(['resources/css/app.css', 'resources/js/app.js'])

<link href="{{ asset('portfolio/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('portfolio/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">
<script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
<link href="{{ asset('portfolio/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('portfolio/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

<style>
    body {
        font-family: 'DM Sans', ui-sans-serif, system-ui, sans-serif;
    }

    .font-display {
        font-family: 'Space Grotesk', ui-sans-serif, system-ui, sans-serif;
    }

    ::-webkit-scrollbar {
        width: 0;
    }
</style>

<style>
    body {
        font-family: 'DM Sans', ui-sans-serif, system-ui, sans-serif;
    }

    .font-display {
        font-family: 'Space Grotesk', ui-sans-serif, system-ui, sans-serif;
    }

    ::-webkit-scrollbar {
        width: 0;
    }
</style>