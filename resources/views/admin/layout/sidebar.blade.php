<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a @if (Session::get('page') == 'dashboard') style="background: #4B49AC !important; color: #fff !important;" @endif
                class="nav-link" href="{{ url('admin/dashboard') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        @if (Auth::guard('admin')->user()->type == 'vendor')
            <li class="nav-item">
                <a @if (Session::get('page') == 'update_admin_password' ||
                        Session::get('page') == 'update_personal_details' ||
                        Session::get('page') == 'update_business_details' ||
                        Session::get('page') == 'update_bank_details') style="background: #4B49AC !important; color: #fff !important;" @endif
                    class="nav-link" data-toggle="collapse" href="#ui-vendors" aria-expanded="false"
                    aria-controls="ui-vendors">
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">Vendor Setings</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-vendors">
                    <ul class="nav flex-column sub-menu"
                        style="background: #fff !important; color: #4B49AC !important;">
                        <li class="nav-item"> <a
                                @if (Session::get('page') == 'update_admin_password') style="background: #4B49AC !important; color: #fff !important;"
                        @else style="background: #fff !important; color: #4B49AC !important;" @endif
                                class="nav-link" href="{{ url('admin/update-admin-password') }}"> Update Password </a>
                        </li>
                        <li class="nav-item"> <a
                                @if (Session::get('page') == 'update_personal_details') style="background: #4B49AC !important; color: #fff !important;"
                        @else style="background: #fff !important; color: #4B49AC !important;" @endif
                                class="nav-link" href="{{ url('admin/update-vendor-details/personal') }}"> Personal
                                Details </a></li>
                        <li class="nav-item"> <a
                                @if (Session::get('page') == 'update_business_details') style="background: #4B49AC !important; color: #fff !important;"
                        @else style="background: #fff !important; color: #4B49AC !important;" @endif
                                class="nav-link" href="{{ url('admin/update-vendor-details/business') }}"> Business
                                Details </a></li>
                        <li class="nav-item"> <a
                                @if (Session::get('page') == 'update_bank_details') style="background: #4B49AC !important; color: #fff !important;"
                        @else style="background: #fff !important; color: #4B49AC !important;" @endif
                                class="nav-link" href="{{ url('admin/update-vendor-details/bank') }}"> Bank Details </a>
                        </li>
                    </ul>
                </div>
            </li>
        @else
            <li class="nav-item">
                <a @if (Session::get('page') == 'update_admin_password' || Session::get('page') == 'update_admin_details') style="background: #4B49AC !important; color: #fff !important;" @endif
                    class="nav-link" data-toggle="collapse" href="#ui-settings" aria-expanded="false"
                    aria-controls="ui-settings">
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">setings</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-settings">
                    <ul class="nav flex-column sub-menu"
                        style="background: #fff !important; color: #4B49AC !important;">
                        <li class="nav-item"> <a
                                @if (Session::get('page') == 'update_admin_password') style="background: #4B49AC !important; color: #fff !important;"
                        @else style="background: #fff !important; color: #4B49AC !important;" @endif
                                class="nav-link" href="{{ url('admin/update-admin-password') }}"> Update Password </a>
                        </li>
                        <li class="nav-item"> <a
                                @if (Session::get('page') == 'update_admin_details') style="background: #4B49AC !important; color: #fff !important;"
                        @else style="background: #fff !important; color: #4B49AC !important;" @endif
                                class="nav-link" href="{{ url('admin/update-admin-details') }}"> Update Details </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a @if (Session::get('page') == 'view_admins' ||
                        Session::get('page') == 'view_subadmins' ||
                        Session::get('page') == 'view_vendors' ||
                        Session::get('page') == 'view_all') style="background: #4B49AC !important; color: #fff !important;" @endif
                    class="nav-link" data-toggle="collapse" href="#ui-admins" aria-expanded="false"
                    aria-controls="ui-admins">
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">Admin Management</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-admins">
                    <ul class="nav flex-column sub-menu"
                        style="background: #fff !important; color: #4B49AC !important;">

                        <li class="nav-item"> <a
                                @if (Session::get('page') == 'view_vendors') style="background: #4B49AC !important; color: #fff !important;"
                        @else style="background: #fff !important; color: #4B49AC !important;" @endif
                                class="nav-link" href="{{ url('admin/admins/vendor') }}"> Vendors </a></li>
                        <li class="nav-item"> <a
                                @if (Session::get('page') == 'view_all') style="background: #4B49AC !important; color: #fff !important;"
                        @else style="background: #fff !important; color: #4B49AC !important;" @endif
                                class="nav-link" href="{{ url('admin/admins') }}"> All </a></li>
                    </ul>
                </div>
            </li>
        @endif
        <li class="nav-item">
            <a @if (Session::get('page') == 'user') style="background: #4B49AC !important; color: #fff !important;" @endif
                class="nav-link" href="{{ url('admin/view-user-details') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">User</span>
            </a>
        </li>


    </ul>
</nav>
