@extends('admin.layouts.default', [
'pageName1' => 'All Companies',
'pageName2' => '',
'pageDesc' => ' Companies',
])

@section('page-css')
    <link href="{{ asset('admin/assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('admin/assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css') }}"
        rel="stylesheet" />

    <style>
        .company-image {
            max-height: 80px;
            max-width: 80px;
            object-fit: contain;
        }
    </style>
@endsection

@section('content')
    <div class="panel panel-inverse">
        <!-- begin panel-heading -->
        <div class="panel-heading">
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i
                        class="fa fa-minus"></i>
                </a>
            </div>
            <h4 class="panel-title">All Companies</h4>
        </div>
        <!-- end panel-heading -->
        <!-- begin panel-body -->
        <div class="panel-body">
            <a href="{{ route('companies.create') }}">
                <button class="btn btn-primary float-right">Add New Company</button>
                <div class="clearfix mb-2"></div>
            </a>
            <table id="data-table-buttons" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th width="1%">#</th>
                        <th class="text-nowrap">Image</th>
                        <th class="text-nowrap">Company Name</th>
                        <th class="text-nowrap">Position</th>
                        <th class="text-nowrap">Period</th>
                        <th class="text-nowrap">Keywords</th>
                        <th class="text-nowrap">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $company)
                        <tr class="gradeU">
                            <td width="1%" class="f-s-600 text-inverse">{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ asset($company->image) }}" alt="{{ $company->name }}" class="company-image">
                            </td>
                            <td>{{ $company->name }}</td>
                            <td>{{ $company->worked_as }}</td>
                            <td>{{ $company->period }}</td>
                            <td>
                                <small>{{ substr($company->keywords, 0, 50) }}{{ strlen($company->keywords) > 50 ? '...' : '' }}</small>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-primary btn-sm"><i
                                            class="far fa-edit"></i>
                                    </a>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#deleteClass{{ $company->id }}">
                                        <i class="far fa-trash-alt"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteClass{{ $company->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Delete Company
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete <strong>{{ $company->name }}</strong>?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Cancel</button>
                                                    <form action="{{ route('companies.destroy', $company->id) }}"
                                                        method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- end panel-body -->
    </div>
@endsection
