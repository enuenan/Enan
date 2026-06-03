@extends(config('portfolio.view_namespace', 'portfolio') . '::layouts.default', [
    'title' => 'Portfolio',
    'fixedheader' => '',
])

@section('content')
    <!-- ======= Hero Section ======= -->
    @include(config('portfolio.view_namespace', 'portfolio') . '::pages.home.section.hero')
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        @include(config('portfolio.view_namespace', 'portfolio') . '::pages.home.section.about')
        <!-- End About Section -->


        <!-- ======= Services Section ======= -->
        @include(config('portfolio.view_namespace', 'portfolio') . '::pages.home.section.services')
        <!-- End Services Section -->


        <!-- ======= Portfolio Section ======= -->
        @include(config('portfolio.view_namespace', 'portfolio') . '::pages.home.section.portfolio')
        <!-- End Portfolio Section -->


        <!-- ======= Company ======= -->
        @include(config('portfolio.view_namespace', 'portfolio') . '::pages.home.section.company')
        <!-- End Company -->


        <!-- ======= CV AND RESUME ======= -->

        {{-- @include(config('portfolio.view_namespace', 'portfolio') . '::pages.home.section.cv_resume') --}}

        <!-- End CV AND RESUME -->


        <!-- ======= Personal Work ======= -->
        @include(config('portfolio.view_namespace', 'portfolio') . '::pages.home.section.personal-work')
        <!-- End Personal Work -->


        <!-- ======= Contact Section ======= -->
        @include(config('portfolio.view_namespace', 'portfolio') . '::pages.home.section.contact')
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->
@endsection
