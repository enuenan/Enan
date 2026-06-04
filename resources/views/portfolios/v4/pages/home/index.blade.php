@extends(config('portfolio.view_namespace', 'portfolio') . '::layouts.default', [
    'title' => 'Portfolio',
    'fixedheader' => '',
])

@section('content')
    @include(config('portfolio.view_namespace', 'portfolio') . '::pages.home.section.hero')
    <main id="main">
        @include(config('portfolio.view_namespace', 'portfolio') . '::pages.home.section.about')
        @include(config('portfolio.view_namespace', 'portfolio') . '::pages.home.section.services')
        @include(config('portfolio.view_namespace', 'portfolio') . '::pages.home.section.portfolio')
        @include(config('portfolio.view_namespace', 'portfolio') . '::pages.home.section.company')
        {{-- @include(config('portfolio.view_namespace', 'portfolio') . '::pages.home.section.cv_resume') --}}
        @include(config('portfolio.view_namespace', 'portfolio') . '::pages.home.section.personal-work')
        @include(config('portfolio.view_namespace', 'portfolio') . '::pages.home.section.contact')
    </main>
@endsection
