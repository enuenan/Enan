@php
    use Illuminate\Support\Str;

    $social = config('portfolio.social_links', []);
    $sameAs = [];

    foreach ($social as $s) {
        if (is_string($s) && Str::startsWith($s, ['http://', 'https://'])) {
            $sameAs[] = $s;
        }
    }

    $jsonLd = [
        '@context' => 'https://schema.org',
        '@type' => 'Person',
        'name' => 'Moammer Farshid Enan',
        'jobTitle' => 'Laravel Web Developer',
        'url' => 'https://moammer-enan.com/',
        'description' => "I'm Moammer Farshid Enan, a Laravel web developer from Bangladesh. I build clean, secure, maintainable, and scalable web applications using Laravel, Vue, React, MySQL, Tailwind CSS, JavaScript, and modern frontend tools.",
        'sameAs' => $sameAs,
    ];
@endphp

<script type="application/ld+json">
{!! json_encode($jsonLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
