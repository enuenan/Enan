<div id="header" class="header navbar-default">
    <!-- begin navbar-header -->
    <div class="navbar-header">
        <a href="{{ route('admin.dashboard') }}" class="navbar-brand"><span class="navbar-logo"></span>
            <b>Baker's</b> Admin</a>
        <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <!-- end navbar-header -->

    <!-- begin header-nav -->
    <ul class="navbar-nav navbar-right">
        <li class="dropdown navbar-user">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                <img src="https://dummyimage.com/200x150/d9e0e7/aaa" class="img-thumnail" alt="" height="150"
                    width="200">
                <span class="d-none d-md-inline">{{ session()->get('userName') }}</span>
                <b class="caret"></b>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{ route('settings') }}" class="dropdown-item">Settings</a>
                <div class="dropdown-divider"></div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        <i class="me-2 icon-xxs dropdown-item-icon" data-feather="power"></i>
                        {{ __('Logout') }}
                    </a>
                </form>
            </div>
        </li>
    </ul>
    <!-- end header navigation right -->
</div>
