<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 bg-slate-900 fixed-start " id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand d-flex align-items-center m-0"
            href="#" target="_blank">
            <span class="font-weight-bold text-lg">{{ trans('panel.site_title') }}</span>
        </a>
    </div>
    <div class="collapse navbar-collapse px-4 w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link  {{ request()->is('admin') ? 'active' : '' }}"
                    href="{{ route('admin.home') }}">
                    <div class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                    </div>
                    <span class="nav-link-text ms-1">{{ __('Dashboard') }}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/permissions*') || request()->is('admin/roles*')  || request()->is('admin/users*') ? 'active' : '' }}" data-bs-toggle="collapse" aria-expanded="true" href="#user_management">
                    <div class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
                        <i class="fa-fw fas fa-users"></i>
                    </div>
                    <span class="nav-link-text ms-1">{{ trans('cruds.user_management.title') }}</span>
                </a>
                <div class="collapse show" id="user_management">
                    <ul class="navbar-nav">
                        @can('permission_access')
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}" href="{{ route("admin.permissions.index") }}">
                                <div class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
                                    <i class="fa-fw fas fa-unlock-alt"></i>
                                </div>
                                <span class="nav-link-text ms-1">{{ trans('cruds.permission.title') }}</span>
                            </a>
                        </li>
                        @endcan
                        @can('role_access')
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}" href="{{ route("admin.roles.index") }}">
                                <div class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
                                    <i class="fa-fw fas fa-briefcase"></i>
                                </div>
                                <span class="nav-link-text ms-1">{{ trans('cruds.role.title') }}</span>
                            </a>
                        </li>
                        @endcan
                        @can('user_access')
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}" href="{{ route("admin.users.index") }}">
                                <div class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
                                    <i class="fa-fw fas fa-user"></i>
                                </div>
                                <span class="nav-link-text ms-1">{{ trans('cruds.user.title') }}</span>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer mx-4 ">
    </div>
</aside>
