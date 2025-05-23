@if (Auth::check())
    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
        id="layout-navbar">
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="ti ti-menu-2 ti-sm"></i>
            </a>
        </div>

        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            @if (Auth::check() && Route::currentRouteName() === 'library.index')
                <!-- Search -->
                <div class="navbar-nav align-items-center">
                    <div class="nav-item navbar-search-wrapper mb-0">
                        <a class="nav-item nav-link search-toggler d-flex align-items-center px-0"
                            href="javascript:void(0);">
                            <i class="ti ti-search ti-md me-2"></i>
                            <span class="d-none d-md-inline-block text-muted">Search Library Books</span>
                        </a>
                    </div>
                </div>
                <!-- /Search -->
            @endif

            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Style Switcher -->
                <li class="nav-item me-2 me-xl-0">
                    <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
                        <i class="ti ti-md"></i>
                    </a>
                </li>
                <!--/ Style Switcher -->
                <!-- Notification -->
                @if (in_array(Auth::user()->role, ['staff', 'admin', 'super']))
                    <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <i class="ti ti-bell ti-md"></i>
                            <span class="badge bg-danger rounded-pill badge-notifications"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end py-0">
                            <li class="dropdown-menu-header border-bottom">
                                <div class="dropdown-header d-flex align-items-center py-3">
                                    <h5 class="text-body mb-0 me-auto">Notification</h5>
                                    <a href="javascript:void(0)" class="dropdown-notifications-all text-body"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i
                                            class="ti ti-mail-opened fs-4"></i></a>
                                </div>
                            </li>
                            <li class="dropdown-notifications-list scrollable-container">
                                <ul class="list-group list-group-flush" id="notification-list">
                                </ul>
                            </li>
                            <li class="dropdown-menu-footer border-top">
                                <a href="{{ url('notification/list') }}"
                                    class="dropdown-item d-flex justify-content-center text-primary p-2 h-px-40 mb-1 align-items-center">
                                    View all notifications
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif
                <!--/ Notification -->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                            <div class="avatar avatar-online">
                                <img src="{{ asset('public') }}/assets/img/icons/brands/html-label.png" alt class="h-auto rounded-circle" />
                            </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                            <div class="avatar avatar-online">
                                                <img src="{{ asset('public') }}/img/icons/brands/html-label.png" alt
                                                    class="h-auto rounded-circle" />
                                            </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                                        <small class="text-muted">Admin</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('profile/update-about/' . Auth::id()) }}">
                                <i class="ti ti-settings me-2 ti-sm"></i>
                                <span class="align-middle">Settings</span>
                            </a>
                        </li>
                        <li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);"
                                onclick="document.getElementById('logoutForm').submit();">
                                <i class="ti ti-logout me-2 ti-sm"></i>
                                <span class="align-middle">Log Out</span>
                            </a>
                            <form id="logoutForm" method="POST" action="{{ url('/logout') }}">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
                <!--/ User -->
            </ul>
        </div>

        @if (Auth::check() && Route::currentRouteName() === 'library.index')
            <form action="{{ route('library.index') }}" class="d-flex flex-column flex-md-row align-items-center"
                id="searchForm" method="GET">
                <div class="input-group w-100 w-md-75 mb-3 mb-md-0 ms-5" style="position: relative;">
                    <input class="form-control me-2" type="search" style="margin-left: -40%;" name="search"
                        value="{{ request('search') }}" aria-label="Search"
                        id="searchInput" placeholder="Type This.."/>
                    <!-- Clear Icon inside the input field -->
                    <button type="button" class="btn btn-outline-primary" id="clearSearch"
                    style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); border: none; background: transparent;">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                </div>
                <!-- Search Submit Button -->
                <button class="btn btn-primary w-md-auto" type="submit">Search</button>
            </form>
        @endif
    </nav>
@else
    <nav class="layout-navbar container-xxl navbar navbar-detached  bg-navbar-theme">
        <div class="navbar-brand-box">
            <a href="" class="logo logo-dark">
                <span class="logo-lg">
                    <img src="{{ asset('public') }}/assets/img/branding/logo.png" alt="" height="40">
                </span>
            </a>
        </div>
    </nav>
  
@endif
<script>
    document.getElementById('clearSearch').addEventListener('click', function() {
        document.getElementById('searchInput').value = '';
        document.getElementById('searchForm').submit();
    });

    document.querySelector('.search-toggler').addEventListener('click', function () {
    const searchForm = document.getElementById('searchForm');
    searchForm.classList.toggle('d-none');
});
</script>
