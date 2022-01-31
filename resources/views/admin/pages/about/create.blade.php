@extends('admin.layouts.default', [
'pageName1' => 'Create About',
'pageName2' => '',
'pageDesc' => ' About',
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
                        <a href="javascript:;" class="btn btn-xs btn-image btn-circle btn-warning"
                            data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                    <h4 class="panel-title">Create About</h4>
                </div>
                <!-- end panel-heading -->
                <!-- begin panel-body -->
                <div class="panel-body">
                    <form action="{{ route('about.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3" for="email"> Image </label>
                            <div class="col-md-6">
                                <input type="file" class="form-control m-b-5" id="image" name="image" placeholder="image"
                                    required onchange="previewFile(this);" />
                                @error('image')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <img src="http://via.placeholder.com/640x360" class="img-fluid" alt="" id="previewImg">
                            </div>
                        </div>
                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3" for="email">Title</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control m-b-5" id="title" name="title"
                                    placeholder="Enter title" value="{{ old('title') ? old('title') : '' }}" required />
                                @error('title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3" for="email">Description</label>
                            <div class="col-md-9">
                                <textarea type="text" class="form-control m-b-5" id="description" name="description"
                                    placeholder="Enter description"
                                    required>{{ old('description') ? old('description') : '' }}</textarea>
                                @error('description')
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
