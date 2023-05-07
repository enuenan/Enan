@extends('admin.layouts.default', [
    'pageName1' => 'Create Portfolio',
    'pageName2' => '',
    'pageDesc' => ' Portfolio',
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
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                    <h4 class="panel-title">Create Portfolio</h4>
                </div>
                <!-- end panel-heading -->
                <!-- begin panel-body -->
                <div class="panel-body">
                    {{-- Name	Image	Description Title	Description	Category	Client	Project Date	Git Url	Project Url	 --}}
                    <form action="{{ route('portfolio.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3" for="email">Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control m-b-5" id="name" name="name" placeholder="Enter name"
                                    value="{{ old('name') ? old('name') : '' }}" required />
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3" for="image">Image</label>
                            <div class="col-md-9">
                                <div id="menu_name_show">
                                    <input type="file" class="form-control m-b-5" id="image" name="image" placeholder="Enter image"
                                        value="{{ old('image') ? old('image') : '' }}" required />
                                </div>
                                @error('image')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3" for="email">Category</label>
                            <div class="col-md-9">
                                <select class="custom-select" name="category-id">
                                    <option selected>Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3" for="email">Description Title</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control m-b-5" id="description_title" name="description_title"
                                    placeholder="Enter description" value="{{ old('description_title') ? old('description_title') : '' }}" required />
                                @error('description_title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3" for="email">Description</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control m-b-5" id="description" name="description" placeholder="Enter description"
                                    value="{{ old('description') ? old('description') : '' }}" required />
                                @error('description')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3" for="email">Client</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control m-b-5" id="client" name="client" placeholder="Enter client"
                                    value="{{ old('client') ? old('client') : '' }}" required />
                                @error('client')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3" for="email">Project Date</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control m-b-5" id="project_date" name="project_date" placeholder="Enter Project Date"
                                    value="{{ old('project_date') ? old('project_date') : '' }}" required />
                                @error('project_date')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3" for="email">Git URL</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control m-b-5" id="git_url" name="git_url" placeholder="Enter Git URL"
                                    value="{{ old('git_url') ? old('git_url') : '' }}" />
                                @error('git_url')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3" for="email">Project URL</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control m-b-5" id="project_url" name="project_url" placeholder="Enter Project URL"
                                    value="{{ old('project_url') ? old('project_url') : '' }}" />
                                @error('project_url')
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
