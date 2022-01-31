@extends('portfolio.layouts.default', [
'title' => 'Portfolio',
'fixedheader' => '',
])

@section('content')
    <!-- ======= Hero Section ======= -->
    @include('portfolio.pages.home.section.hero')
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        @include('portfolio.pages.home.section.about')
        <!-- End About Section -->


        <!-- ======= Services Section ======= -->
        @include('portfolio.pages.home.section.services')
        <!-- End Services Section -->


        <!-- ======= Portfolio Section ======= -->
        @include('portfolio.pages.home.section.portfolio')
        <!-- End Portfolio Section -->


        <!-- ======= Personal Work ======= -->
        @include('portfolio.pages.home.section.company')
        <!-- End Personal Work -->


        <!-- ======= Personal Work ======= -->
        @include('portfolio.pages.home.section.personal-work')
        <!-- End Personal Work -->


        <!-- ======= Contact Section ======= -->
        @include('portfolio.pages.home.section.contact')
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->
@endsection
