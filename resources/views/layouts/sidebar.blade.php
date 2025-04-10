<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ url('/') }}" class="app-brand-link">
            <img src="{{ asset('public') }}/assets/img/branding/logo.png" style="height: 40px" class="app-brand-logo ms-3">
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-item {{ Request::is('/') ? 'active' : '' }}">
            <a href="{{ url('/') }}" class="menu-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="menu-icon icon icon-tabler icons-tabler-outline icon-tabler-dashboard">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 13m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M13.45 11.55l2.05 -2.05" />
                    <path d="M6.4 20a9 9 0 1 1 11.2 0z" />
                </svg>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('admi/blogs') ? 'active' : '' }}">
            <a href="{{ url('admi/blogs') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-square"></i>
                <div data-i18n="Blogs">Blogs</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('admi/blogs') ? 'active' : '' }}">
            <a href="{{ url('admin/testimonial') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-square"></i>
                <div data-i18n="Testimonial">Testimonial</div>
            </a>
        </li>

        <li
            class="menu-item {{ Request::is('projects') || Request::is('project/edit/*') || Request::is('project/create') ? 'open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-text-wrap-disabled"></i>
                <div data-i18n="Project">Project</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('project/create') ? 'active' : '' }}">
                    <a href="{{ url('project/create') }}" class="menu-link">
                        <div data-i18n="Create">Create</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('supports') ? 'active' : '' }}">
                    <a href="{{ url('supports') }}" class="menu-link">
                        <div data-i18n="Project List">Project List</div>
                    </a>
                </li>

            </ul>
        </li>
        <li
            class="menu-item {{ Request::is('supports') || Request::is('support/details/*') || Request::is('support/create') ? 'open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-settings"></i>
                <div data-i18n="Setting">Setting</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('support/create') ? 'active' : '' }}">
                    <a href="{{ url('support/create') }}" class="menu-link">
                        <div data-i18n="About">About</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('supports') ? 'active' : '' }}">
                    <a href="{{ url('supports') }}" class="menu-link">
                        <div data-i18n="Contact Messages">Contact Messages</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('supports') ? 'active' : '' }}">
                    <a href="{{ url('supports') }}" class="menu-link">
                        <div data-i18n="Site Setting">Site Settings</div>
                    </a>
                </li>

            </ul>
        </li>
    </ul>
</aside>
