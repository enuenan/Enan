@extends('admin.layouts.default', [
'pageName1' => 'Create Company',
'pageName2' => '',
'pageDesc' => ' Company',
])

@section('content')
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-lg-12">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                <!-- begin panel-heading -->
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                            data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                    <h4 class="panel-title">Create Company</h4>
                </div>
                <!-- end panel-heading -->
                <!-- begin panel-body -->
                <div class="panel-body">
                    <form action="{{ route('companies.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        
                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3" for="name">Company Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control m-b-5" id="name" name="name" 
                                    placeholder="Enter company name" value="{{ old('name') }}" required />
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3" for="image">Company Image</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control m-b-5" id="image" name="image" 
                                    accept="image/*" required />
                                @error('image')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3" for="link">Company Link</label>
                            <div class="col-md-9">
                                <input type="url" class="form-control m-b-5" id="link" name="link" 
                                    placeholder="https://example.com" value="{{ old('link') }}" required />
                                @error('link')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3" for="worked_as">Position/Role</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control m-b-5" id="worked_as" name="worked_as" 
                                    placeholder="e.g., Laravel Backend, Fullstack" value="{{ old('worked_as') }}" required />
                                @error('worked_as')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3" for="period">Work Period</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control m-b-5" id="period" name="period" 
                                    placeholder="e.g., Nov 2022 - Present" value="{{ old('period') }}" required />
                                @error('period')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3" for="keywords">Technologies (comma separated)</label>
                            <div class="col-md-9">
                                <textarea class="form-control m-b-5" id="keywords" name="keywords" 
                                    placeholder="e.g., Laravel, Inertia, React, MySQL" rows="3" required>{{ old('keywords') }}</textarea>
                                @error('keywords')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row m-b-15">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary">Create Company</button>
                                <a href="{{ route('companies.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end panel-body -->
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-12 -->
    </div>
@endsection
