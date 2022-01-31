<meta charset="utf-8" />
<title>Enan | {{ $pageName1 }}</title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

<link href="{{ asset('portfolio/assets/img/LogoMakr-4CEFtI.png') }}" rel="icon">

<!-- ================== BEGIN BASE CSS STYLE ================== -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
<link href="{{ asset('admin/assets/plugins/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet" />
<link href="{{ asset('admin/assets/plugins/bootstrap/4.0.0/css/bootstrap.min.css') }}" rel="stylesheet" />
<link href="{{ asset('admin/assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css') }}" rel="stylesheet" />
<link href="{{ asset('admin/assets/plugins/animate/animate.min.css') }}" rel="stylesheet" />
<link href="{{ asset('admin/assets/css/default/style.min.css') }}" rel="stylesheet" />
<link href="{{ asset('admin/assets/css/default/style-responsive.min.css') }}" rel="stylesheet" />
<link href="{{ asset('admin/assets/css/default/theme/default.css') }}" rel="stylesheet" id="theme" />
<!-- ================== END BASE CSS STYLE ================== -->

<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
@yield('page-css')

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">
<!-- ================== END PAGE LEVEL STYLE ================== -->

<!-- ================== BEGIN BASE JS ================== -->
<script src="{{ asset('admin/assets/plugins/pace/pace.min.js') }}"></script>
<!-- ================== END BASE JS ================== -->

<script>
    function previewFile(input) {
        var file = $("input#image").get(0).files[0];

        if (file) {
            var reader = new FileReader();

            reader.onload = function() {
                $("#previewImg").attr("src", reader.result);
                $(".previewImg").attr("src", reader.result);
            }

            reader.readAsDataURL(file);
        }
    }

    function previewFile2(input) {
        var file2 = $("input#image").get(0).files[0];
        console.log(file2);

        if (file2) {
            var reader2 = new FileReader();

            reader2.onload = function() {
                $("#previewImg2").attr("src", reader2.result);
                $(".previewImg2").attr("src", reader2.result);
            }

            reader2.readAsDataURL(file2);
        }
    }
</script>
