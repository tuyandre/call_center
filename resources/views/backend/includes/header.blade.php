<!-- Main Header-->
<div class="main-header side-header sticky">
    <div class="container-fluid">
        <div class="main-header-left">
            <a class="main-header-menu-icon" href="#" id="mainSidebarToggle"><span></span></a>
        </div>
        <div class="main-header-center">
            <div class="responsive-logo">
                <a href="#"><img src="{{asset('public/frontend/img/call_center2.png')}}" style="width: 50% !important;" class="mobile-logo" alt="logo"></a>
                <a href="#"><img src="{{asset('public/frontend/img/call_center2.png')}}" style="width: 50% !important;" class="mobile-logo-dark" alt="logo"></a>
            </div>
        </div>
        <div class="main-header-right">
            <div class="dropdown header-search">
                <a class="nav-link icon header-search">
                    <i class="fe fe-search header-icons"></i>
                </a>
            </div>
            <div class="dropdown d-md-flex">
                <a class="nav-link icon full-screen-link" href="#">
                    <i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
                    <i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
                </a>
            </div>
            <div class="dropdown main-profile-menu">
                <a class="d-flex" href="#">
                    <span class="main-img-user" ><img alt="avatar" src="{{asset('/public/dashboard/assets/img/users/1.jpg')}}"></span>
                </a>
                <div class="dropdown-menu">
                    <div class="header-navheading">
                        <h6 class="main-notification-title">{{Auth::user()->name}}</h6>
                        <p class="main-notification-text">{{Auth::user()->email}}</p>
                    </div>
                    <a class="dropdown-item border-top" href="#">
                        <i class="fe fe-user"></i> My Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fe fe-edit"></i> Edit Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fe fe-settings"></i> Account Settings
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fe fe-compass"></i> Activity
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fe fe-power"></i> Sign Out
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                          style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
            <div class="dropdown d-md-flex header-settings">
                <a href="#" class="nav-link icon" data-toggle="sidebar-right" data-target=".sidebar-right">
                    <i class="fe fe-align-right header-icons"></i>
                </a>
            </div>
            <button class="navbar-toggler navresponsive-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
                    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
            </button><!-- Navresponsive closed -->
        </div>
    </div>
</div>
<!-- End Main Header-->		<!-- Mobile-header -->
<div class="mobile-main-header">
    <div class="mb-1 navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark  ">
        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
            <div class="d-flex order-lg-2 ml-auto">
                <div class="dropdown header-search">
                    <a class="nav-link icon header-search">
                        <i class="fe fe-search header-icons"></i>
                    </a>
{{--                    <div class="dropdown-menu">--}}
{{--                        <div class="main-form-search p-2">--}}
{{--                            <div class="input-group">--}}
{{--                                <div class="input-group-btn search-panel">--}}
{{--                                    <select class="form-control select2-no-search">--}}
{{--                                        <option label="All categories">--}}
{{--                                        </option>--}}
{{--                                        <option value="IT Projects">--}}
{{--                                            IT Projects--}}
{{--                                        </option>--}}
{{--                                        <option value="Business Case">--}}
{{--                                            Business Case--}}
{{--                                        </option>--}}
{{--                                        <option value="Microsoft Project">--}}
{{--                                            Microsoft Project--}}
{{--                                        </option>--}}
{{--                                        <option value="Risk Management">--}}
{{--                                            Risk Management--}}
{{--                                        </option>--}}
{{--                                        <option value="Team Building">--}}
{{--                                            Team Building--}}
{{--                                        </option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                           </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <div class="dropdown ">
                    <a class="nav-link icon full-screen-link">
                        <i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
                        <i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
                    </a>
                </div>
                <div class="dropdown main-profile-menu">
                    <a class="d-flex" href="#">
                        <span class="main-img-user" ><img alt="avatar" src="{{asset('/public/dashboard/assets/img/users/1.jpg')}}"></span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="header-navheading">
                            <h6 class="main-notification-title">{{Auth::user()->name}}</h6>
                            <p class="main-notification-text">{{Auth::user()->email}}</p>
                        </div>

                        <a class="dropdown-item" href="signin.html">
                            <i class="fe fe-power"></i> Sign Out
                        </a>
                    </div>
                </div>
                <div class="dropdown  header-settings">
                    <a href="#" class="nav-link icon" data-toggle="sidebar-right" data-target=".sidebar-right">
                        <i class="fe fe-align-right header-icons"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile-header closed -->
