<!DOCTYPE html>
<html lang="en">

<head>
    @include(config('portfolio.view_namespace', 'portfolio') . '::includes.head')
</head>

<body>

    <!-- ======= Header ======= -->
    @include(config('portfolio.view_namespace', 'portfolio') . '::includes.header')
    <!-- End Header -->

    @yield('content')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- ======= Footer ======= -->
    @include(config('portfolio.view_namespace', 'portfolio') . '::includes.footer')
    <!-- End Footer -->

    @include(config('portfolio.view_namespace', 'portfolio') . '::includes.scripts')
</body>

</html>
