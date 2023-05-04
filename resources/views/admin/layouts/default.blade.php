<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    @include('admin.includes.head')
</head>

<body>
    {{-- @include('admin.includes.page-loader') --}}
    <!-- begin #page-container -->
    <div id="page-container" class="page-container fade page-sidebar-fixed page-header-fixed">
        <!-- begin #header -->
        @include('admin.includes.navbar')
        <!-- end #header -->

        <!-- begin #sidebar -->
        @include('admin.includes.sidebar')
        <!-- end #sidebar -->

        <!-- begin #content -->
        <div id="content" class="content">
            @include('admin.includes.breadcrumbs')
            @include('admin.includes.alert')

            <!-- begin panel -->
            @yield('content')
            <!-- end panel -->
        </div>
        <!-- end #content -->

        <!-- begin scroll to top btn -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i
                class="fa fa-angle-up"></i></a>
        <!-- end scroll to top btn -->
    </div>
    <!-- end page container -->

    <!-- ================== BEGIN BASE JS ================== -->
    @include('admin.includes.scripts')
    <!-- ================== END BASE JS ================== -->

    <script>
        $(document).ready(function() {
            App.init();
            @yield('init-js')

            $('#homeLink').tooltip(options)
        });
    </script>
</body>

</html>
