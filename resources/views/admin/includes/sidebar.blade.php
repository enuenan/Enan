<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <a href="javascript:;" data-toggle="nav-profile">
                    <div class="cover with-shadow"></div>
                    <div class="image">
                        <img src="{{ asset('portfolio/assets/img/LogoMakr-4CEFtI.png') }}" class="img-thumnail" alt="" height="150"
                            width="200">
                    </div>
                    <div class="info">
                        <b class="caret pull-right"></b>
                        {{ auth()->user()->name }}
                    </div>
                </a>
            </li>
            <li>
                <ul class="nav nav-profile">
                    {{-- <li><a href="{{ route('settings') }}"><i class="fa fa-cog"></i> Settings</a></li> --}}
                </ul>
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav">
            <li class="nav-header">Navigation</li>
            <li class="has-sub {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}"><i class="fa fa-th-large"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li
                class="has-sub {{ request()->is('admin/about') ? 'active' : '' }} 
                {{ request()->is('admin/about/create') ? 'active' : '' }}
                {{ request()->is('admin/about/*/edit') ? 'active' : '' }}">
                <a href="{{ route('about.index') }}"><i class="fa fa-th-large"></i>
                    <span>About</span>
                </a>
            </li>
            <li
                class="has-sub {{ request()->is('admin/skills') ? 'active' : '' }} 
                {{ request()->is('admin/skills/create') ? 'active' : '' }}
                {{ request()->is('admin/skills/*/edit') ? 'active' : '' }}">
                <a href="{{ route('skills.index') }}"><i class="fa fa-th-large"></i>
                    <span>Skills</span>
                </a>
            </li>
            {{-- <li
                class="has-sub {{ request()->is('admin/portfolios') ? 'active' : '' }} 
                {{ request()->is('admin/portfolios/create') ? 'active' : '' }}
                {{ request()->is('admin/portfolios/*/edit') ? 'active' : '' }}">
                <a href="{{ route('portfolios.index') }}"><i class="fa fa-th-large"></i>
                    <span>Portfolios</span>
                </a>
            </li> --}}
            <li
                class="has-sub {{ request()->is('admin/portfolio') ? 'active' : '' }} 
                        {{ request()->is('admin/portfolio/create') ? 'active' : '' }}
                        {{ request()->is('admin/portfolio/*/edit') ? 'active' : '' }}
                        {{ request()->is('admin/category') ? 'active' : '' }} 
                        {{ request()->is('admin/category/create') ? 'active' : '' }}
                        {{ request()->is('admin/category/*/edit') ? 'active' : '' }}
                        ">
                <a href="javascript:;">
                    <b class="caret"></b><i class="fa fa-th-large"></i>
                    <span>Portfolios</span>
                </a>
                <ul class="sub-menu">
                    <li
                        class="{{ request()->is('admin/category') ? 'active' : '' }} 
                            {{ request()->is('admin/category/create') ? 'active' : '' }}
                            {{ request()->is('admin/category/*/edit') ? 'active' : '' }}">
                        <a href="{{ route('category.index') }}">Category</a>
                    </li>
                    <li
                        class="{{ request()->is('admin/portfolio') ? 'active' : '' }} 
                            {{ request()->is('admin/portfolio/create') ? 'active' : '' }}
                            {{ request()->is('admin/portfolio/*/edit') ? 'active' : '' }}">
                        <a href="{{ route('portfolio.index') }}">
                            <span>Portfolios</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li
                class="has-sub {{ request()->is('admin/cv-and-resume') ? 'active' : '' }} 
                {{ request()->is('admin/cv-and-resume/create') ? 'active' : '' }}
                {{ request()->is('admin/cv-and-resume/*/edit') ? 'active' : '' }}">
                <a href="{{ route('cv-and-resume.index') }}"><i class="fa fa-th-large"></i>
                    <span>CV and Resume</span>
                </a>
            </li>

            {{-- <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <span>Dashboard</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="index.html">Dashboard v1</a></li>
                    <li><a href="index_v2.html">Dashboard v2</a></li>
                </ul>
            </li> --}}
            <!-- begin sidebar minify button -->
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
            <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
