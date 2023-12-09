@extends('admin.layouts.default', [
    'pageName1' => 'All Portfolios',
    'pageName2' => '',
    'pageDesc' => ' Portfolios',
])

@section('page-css')
    <link href="{{ asset('admin/assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <div class="panel panel-inverse">
        <!-- begin panel-heading -->
        <div class="panel-heading">
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i>
                </a>
            </div>
            <h4 class="panel-title">All Portfolios</h4>
        </div>
        <!-- end panel-heading -->
        <!-- begin panel-body -->
        <div class="panel-body">
            <a href="{{ route('portfolio.create') }}">
                <button class="btn btn-primary float-right">
                    <i class="fa-solid fa-plus"></i> Portfolio
                </button>
                <div class="clearfix mb-2"></div>
            </a>
            <table id="data-table-buttons" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th width="1%"></th>
                        <th class="text-nowrap">Name</th>
                        <th class="text-nowrap">Image</th>
                        <th class="text-nowrap">Description Title</th>
                        <th class="text-nowrap">Description</th>
                        <th width="text-nowrap">Category</th>
                        <th class="text-nowrap">Client</th>
                        <th class="text-nowrap">Project Date</th>
                        <th class="text-nowrap">Git Url</th>
                        <th class="text-nowrap">Project Url</th>
                        <th class="text-nowrap">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($portfolios as $portfolio)
                        <tr class="gradeU">
                            <td width="1%" class="f-s-600 text-inverse">{{ $loop->iteration }}</td>
                            <td>{{ $portfolio->name }}</td>
                            <td>
                                <img src="{{ $portfolio->image }}" class="img-thumbnail" alt="">
                            </td>
                            <td>{{ $portfolio->description_title }}</td>
                            <td>{{ $portfolio->description }}</td>
                            <td>{{ $portfolio->category ? $portfolio->category->name : '' }}</td>
                            <td>{{ $portfolio->client }}</td>
                            <td>{{ $portfolio->project_date }}</td>
                            <td>
                                <a href="{{ $portfolio->git_url }}" target="_blank">
                                    <i class="fa-brands fa-square-github"></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{ $portfolio->project_url }}" target="_blank">
                                    <i class="fa-solid fa-up-right-from-square"></i>
                                </a>
                            </td>

                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('portfolio.edit', $portfolio->id) }}" class="btn btn-primary"><i class="far fa-edit"></i>
                                    </a>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteClass{{ $portfolio->id }}">
                                        <i class="far fa-trash-alt"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteClass{{ $portfolio->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Deleting Portfolio
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure want to delete?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <form action="{{ route('portfolio.destroy', $portfolio->id) }}" method="POST">
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

@section('init-js')
    TableManageButtons.init();
@endsection

@section('page-js')
    <script src="{{ asset('admin/assets/plugins/DataTables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js') }}"></script>
@endsection
