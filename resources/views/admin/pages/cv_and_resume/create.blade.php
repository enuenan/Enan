@extends('admin.layouts.default', [
    'pageName1' => 'Create Cv And Resume',
    'pageName2' => '',
    'pageDesc' => ' Cv And Resume',
])

@section('content')
    <div class="row">
        <!-- begin col-6 -->
        <div class="col-lg-12">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                <!-- begin panel-heading -->
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-image btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                    <h4 class="panel-name">Create Cv And Resume</h4>
                </div>
                <!-- end panel-heading -->
                <!-- begin panel-body -->
                <div class="panel-body">
                    <form action="{{ route('cv-and-resume.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <input type="text" name="show" value="1" hidden id="">

                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3" for="email">Cv Link</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control m-b-5" id="cv" name="cv" placeholder="Enter cv link src"
                                    value="{{ old('cv') ? old('cv') : '' }}" required />
                                @error('cv')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3" for="email">Resume Link</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control m-b-5" id="resume" name="resume" placeholder="Enter resume link src"
                                    value="{{ old('resume') ? old('resume') : '' }}" required />
                                @error('resume')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row m-b-15">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end panel-body -->
                <!-- begin hljs-wrapper -->
                <!-- end hljs-wrapper -->
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-6 -->
    </div>
@endsection
