<?php
use App\Models\Section;
$sections = Section::sections();
// echo '<pre>';
//     print_r($sections);
//     die;
?>


<header>
    <!-- Top-Header -->
    <div class="full-layer-outer-header">
        <div class="container clearfix">
            <nav>
                <ul class="primary-nav g-nav">
                    <li>
                        <a href="tel:01965885389">
                            <i class="fas fa-phone u-c-brand u-s-m-r-9"></i>
                            Telephone:019 6588 5389</a>
                    </li>
                    <li>
                        <a href="mailto:info@sitemakers.in">
                            <i class="fas fa-envelope u-c-brand u-s-m-r-9"></i>
                            E-mail: abdullah.rafi9000@gmail.com
                        </a>
                    </li>
                </ul>
            </nav>
            <nav>
                <ul class="secondary-nav g-nav">
                    <li>
                        <a>
                            @if (Auth::check())
                                My Account
                            @else
                                Login/Register
                            @endif
                            <i class="fas fa-chevron-down u-s-m-l-9"></i>
                        </a>
                        <ul class="g-dropdown" style="width:200px">
                            <li>
                                <a href="{{ url('admin/login') }}">
                                    <i class="fas fa-cog u-s-m-r-9"></i>
                                    Dashboard</a>
                            </li>


                            @if (Auth::check())
                                <li>
                                    <a href="{{ url('user/account') }}">
                                        <i class="fas fa-sign-in-alt u-s-m-r-9"></i>
                                        My Account</a>
                                </li>
                                <li>
                                    <a href="{{ url('user/logout') }}">
                                        <i class="fas fa-sign-in-alt u-s-m-r-9"></i>
                                        Logout</a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ url('user/login-register') }}">
                                        <i class="fas fa-sign-in-alt u-s-m-r-9"></i>
                                        User Login without loading</a>
                                </li>
                                <li>
                                    <a href="{{ url('vendor/login-register') }}">
                                        <i class="fas fa-sign-in-alt u-s-m-r-9"></i>
                                        Sub Admin Login</a>
                                </li>
                            @endif

                        </ul>
                    </li>
                    <li>

                    </li>
                    <li>


                </ul>
            </nav>
        </div>
    </div>

</header>
