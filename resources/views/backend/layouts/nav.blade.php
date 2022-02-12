    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="{{route('backend.dashboard')}}" class="b-brand">
                    {{-- <div class="b-bg">
                        <i class="feather icon-trending-up"></i>
                    </div> --}}
                    {{-- @dd(is_null(global_setting())) --}}
                    <h4>
                        <span class="b-title">{{!is_null(global_setting()) ? global_setting()->title : 'DEMO'}}</span>
                    </h4>
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
            </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                   <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project"
                        class="nav-item">
<<<<<<< HEAD
                        <a href="{{route('backend.dashboard')}}" class="nav-link"><span class="pcoded-micon"><i
=======

                        <a href="{{route('backend.dashboard')}}" class="nav-link"><span class="pcoded-micon"><i

>>>>>>> upstream/main
                                    class="feather icon-home"></i></span><span
                                class="pcoded-mtext">Dashboard</span></a>
                    </li>
                    {{-- <li class="nav-item pcoded-menu-caption">
                        <label>UI Element</label>
                    </li> --}}
                    <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds"
                        class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-box"></i></span><span
                                class="pcoded-mtext">Components</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="bc_button.html" class="">Button</a></li>
                            <li class=""><a href="bc_badges.html" class="">Badges</a></li>
                        </ul>
                    </li>
                    <li data-username="form elements advance componant validation masking wizard picker select"
                        class="nav-item">
<<<<<<< HEAD
=======

>>>>>>> upstream/main
                        <a href="{{route('category.index')}}" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-file-text"></i></span><span class="pcoded-mtext">Category</span></a>
                    </li>
                    <li data-username="form elements advance componant validation masking wizard picker select"
                        class="nav-item">
                        <a href="{{route('service.index')}}" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-file-text"></i></span><span class="pcoded-mtext">Service</span></a>
<<<<<<< HEAD
=======

>>>>>>> upstream/main
                    </li>
                    <li data-username="form elements advance componant validation masking wizard picker select"
                        class="nav-item">
                        <a href="{{route('setting.index')}}" class="nav-link "><span class="pcoded-micon">
                            <i class="fas fa-cogs"></i></span><span class="pcoded-mtext">Setting</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


