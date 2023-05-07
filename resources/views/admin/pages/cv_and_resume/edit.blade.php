@extends('admin.layouts.default', [
    'pageName1' => 'Edit Cv And Resume',
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
                    <h4 class="panel-name">Edit Cv And Resume</h4>
                </div>
                <!-- end panel-heading -->
                <!-- begin panel-body -->
                <div class="panel-body">
                    <form action="{{ route('cv-and-resume.update', $cv_and_resume->id) }}" method="post">
                        {{ csrf_field() }}
                        @method('PUT')

                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-2" for="email">Show</label>
                            <div class="col-md-6">
                                <select class="custom-select" name="show">
                                    <option selected>Change the view mode</option>
                                    <option value="1" {{ $cv_and_resume->show == 1 ? 'selected' : '' }}>Show</option>
                                    <option value="0" {{ $cv_and_resume->show == 0 ? 'selected' : '' }}>Hide</option>
                                </select>
                                @error('show')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-2" for="email">Cv</label>
                            <div class="col-md-6">
                                <input type="file" class="form-control m-b-5" id="cv" name="cv" placeholder="Enter cv link src"
                                    value="{{ old('cv') ? old('cv') : $cv_and_resume->cv }}" />
                                @error('cv')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <iframe src="{{ $cv_and_resume->cv }}" class="w-100" height="550"></iframe>
                            </div>
                        </div>

                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-2" for="email">Resume</label>
                            <div class="col-md-6">
                                <input type="file" class="form-control m-b-5" id="resume" name="resume" placeholder="Enter resume link src"
                                    value="{{ old('resume') ? old('resume') : $cv_and_resume->resume }}" />
                                @error('resume')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <iframe src="{{ $cv_and_resume->resume }}" class="w-100" height="550"></iframe>
                            </div>
                        </div>
                        <div class="row m-b-15">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9">
                                <button class="btn btn-primary">Update</button>
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
