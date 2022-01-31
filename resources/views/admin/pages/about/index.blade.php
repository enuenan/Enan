@extends('admin.layouts.default', [
'pageName1' => 'About',
'pageName2' => '',
'pageDesc' => ' About',
])

@section('page-css')
    <link href="{{ asset('website/assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('website/assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css') }}"
        rel="stylesheet" />
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
            <h4 class="panel-title">All Skills</h4>
        </div>
        <!-- end panel-heading -->
        <!-- begin panel-body -->
        <div class="panel-body">
            @if (empty($about))
                <a href="{{ route('about.create') }}">
                    <button class="btn btn-primary float-right">
                        <i class="fa-solid fa-plus"></i> About
                    </button>
                    <div class="clearfix mb-2"></div>
                </a>
            @endif
            <table id="data-table-buttons" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th class="text-nowrap">Image</th>
                        <th class="text-nowrap">Title</th>
                        <th class="text-nowrap">Description</th>
                        <th class="text-nowrap">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($about)
                        <tr class="gradeU">
                            <td>
                                <img src="{{ $about->image }}" class="img-thumbnail" alt="">
                            </td>
                            <td>{{ $about->title }}</td>
                            <td>{{ $about->description }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('about.edit', $about->id) }}" class="btn btn-primary"><i
                                            class="far fa-edit"></i>
                                    </a>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#deleteClass{{ $about->id }}">
                                        <i class="far fa-trash-alt"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteClass{{ $about->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Deleting about
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure want to delete?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <form action="{{ route('about.destroy', $about->id) }}" method="POST">
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
                    @else
                        <tr></tr>
                    @endif


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
    <script src="{{ asset('website/assets/plugins/DataTables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('website/assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js') }}"></script>
@endsection
