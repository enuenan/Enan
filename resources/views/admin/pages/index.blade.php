@extends('admin.layouts.default', [
'pageName1' => 'Admin',
'pageName2' => '',
'pageDesc' => ' Admin Dashboard',
])

@section('content')
    <div class="row">
        <!-- begin col-3 -->
        <div class="col-md-12 d-flex justify-content-center align-items-center">
            <lottie-player src="https://assets10.lottiefiles.com/private_files/lf30_BX96aR.json" background="transparent"
                speed="1" style="width: 600px; height: 500px;" loop autoplay></lottie-player>
        </div>
        <!-- end col-3 -->
    </div>
@endsection

@section('page-css')
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
@endsection
