@extends('admin.layouts.default', [
'pageName1' => 'Settings',
'pageName2' => '',
'pageDesc' => ' Update your profile here.',
])

@section('content')
    <!-- begin nav-pills -->
    <ul class="nav nav-pills">
        <li class="nav-items">
            <a href="#nav-pills-tab-1" data-toggle="tab" class="nav-link active">
                <span class="d-sm-none">Profile Settings</span>
                <span class="d-sm-block d-none">Profile Settings</span>
            </a>
        </li>
        <li class="nav-items">
            <a href="#nav-pills-tab-2" data-toggle="tab" class="nav-link">
                <span class="d-sm-none">Change Password</span>
                <span class="d-sm-block d-none">Change Password</span>
            </a>
        </li>
    </ul>
    <!-- end nav-pills -->
    <!-- begin tab-content -->
    <div class="tab-content">
        <!-- begin tab-pane -->
        @include('admin.pages.settings.profile_settings')
        <!-- end tab-pane -->
        <!-- begin tab-pane -->
        @include('admin.pages.settings.change_password')
        <!-- end tab-pane -->
    </div>
    <!-- end tab-content -->
@endsection
