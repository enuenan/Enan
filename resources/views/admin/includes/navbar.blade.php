<div id="header" class="header navbar-default">
    <!-- begin navbar-header -->
    <div class="navbar-header">
        <a href="{{ route('/') }}" class="navbar-brand" target="_blank" id="homeLink" data-toggle="tooltip" data-placement="top" title="View Website">
            <img src="{{ asset('portfolio/assets/img/LogoMakr.png') }}" class="img-fluid" width="40%">
            Portfolio
        </a>
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
                <img src="{{ asset('portfolio/assets/img/LogoMakr-4CEFtI.png') }}" class="img-thumnail" alt="" height="150" width="200">
                <span class="d-none d-md-inline">{{ session()->get('userName') }}</span>
                <b class="caret"></b>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{ route('/') }}" class="dropdown-item" target="_blank"">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i> Open app
                </a>
                <a href="{{ route('settings') }}" class="dropdown-item">
                    <i class="fa-solid fa-gear"></i> Settings
                </a>
                <div class="dropdown-divider"></div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                        <i class="me-2 icon-xxs dropdown-item-icon" data-feather="power"></i>
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        {{ __('Logout') }}
                    </a>
                </form>
            </div>
        </li>
    </ul>
    <!-- end header navigation right -->
</div>
