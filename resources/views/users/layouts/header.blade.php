<div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header"
    data-kt-sticky-offset="{default: '200px', lg: '300px'}">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center flex-equal">
                <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none"
                    id="kt_landing_menu_toggle">
                    <i class="ki-duotone ki-abstract-14 fs-2hx">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </button>
                <a href="{{ route('users.home') }}">
                    <img alt="Logo" src="{{ asset('assets/media/logos/landing.svg') }}"
                        class="logo-default h-25px h-lg-30px" />
                    <img alt="Logo" src="{{ asset('assets/media/logos/landing-dark.svg') }}"
                        class="logo-sticky h-20px h-lg-25px" />
                </a>
            </div>
            <div class="d-lg-block" id="kt_header_nav_wrapper">
                <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true"
                    data-kt-drawer-name="landing-menu"
                    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                    data-kt-drawer-width="200px" data-kt-drawer-direction="start"
                    data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true"
                    data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                    <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-600 menu-state-title-primary nav nav-flush fs-5 fw-semibold"
                        id="kt_landing_menu">
                        <div class="menu-item">
                            <a class="menu-link nav-link active py-3 px-4 px-xxl-6" href="#kt_body"
                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Home</a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#how-it-works"
                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">How it
                                Works</a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#achievements"
                                data-kt-scroll-toggle="true"
                                data-kt-drawer-dismiss="true">Achievements</a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#team"
                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Team</a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#portfolio"
                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Portfolio</a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#pricing"
                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Pricing</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-equal text-end ms-1">
                @if(Auth::check())
                    <div class="dropdown">
                        <a class="text-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Xin chào: {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{ route('users.userInfo') }}">Thông tin</a></li>
                        @if(Auth::user()->role == '1')
                            <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Trang Admin</a></li>
                        @endif
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="btn btn-success">Sign
                    In</a>
                @endif
            </div>
        </div>
    </div>
</div>
