@extends('admin.layouts.default', [
'pageName1' => 'Edit Skill',
'pageName2' => '',
'pageDesc' => ' Skill',
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
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                            data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                    <h4 class="panel-title">Edit Skill</h4>
                </div>
                <!-- end panel-heading -->
                <!-- begin panel-body -->
                <div class="panel-body">
                    <form action="{{ route('skills.update', $skill) }}" method="post">
                        {{ csrf_field() }}
                        @method('PUT')
                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3" for="email">Icon</label>
                            <div class="col-md-9">
                                <div id="menu_name_show">
                                    <input type="text" class="form-control m-b-5" id="icon" name="icon"
                                        placeholder="Enter icon" value="{{ old('icon') ? old('icon') : $skill->icon }}"
                                        required />
                                </div>
                                @error('icon')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3" for="email">Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control m-b-5" id="name" name="name" placeholder="Enter name"
                                    value="{{ old('name') ? old('name') : $skill->name }}" required />
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3" for="email">Description</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control m-b-5" id="description" name="description"
                                    placeholder="Enter description"
                                    value="{{ old('description') ? old('description') : $skill->description }}"
                                    required />
                                @error('description')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
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
