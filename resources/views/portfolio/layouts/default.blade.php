<!DOCTYPE html>
<html lang="en">

<head>
    @include('portfolio.includes.head2')
</head>

<body>

    <!-- ======= Header ======= -->
    @include('portfolio.includes.header')
    <!-- End Header -->

    @yield('content')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- ======= Footer ======= -->
    @include('portfolio.includes.footer')
    <!-- End Footer -->

    @include('portfolio.includes.scripts')
</body>

</html>
