<!-- Main Header-->
<div class="main-header side-header sticky">
    <div class="container-fluid">
        <div class="main-header-left">
            <a href="{{url('/')}}">    <img src="{{asset('public/frontend/img/call_center2.png')}}" style="width: 50% !important;" class="mobile-logo" alt="logo"></a>
        </div>
        <div class="main-header-center">
            <div class="responsive-logo">
                <a href="{{url('/')}}"><img src="{{asset('public/frontend/img/call_center2.png')}}" style="width: 50% !important;" class="mobile-logo" alt="logo"></a>
                <a href="{{url('/')}}"><img src="{{asset('public/frontend/img/call_center2.png')}}" style="width: 50% !important;" class="mobile-logo-dark" alt="logo"></a>
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

            <div class=" d-md-flex header-settings">
                <a href="{{route('login')}}" class=" btn btn-info">
                    Login
                </a>
            </div>
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

                </div>

            </div>
        </div>
    </div>
</div>
<!-- Mobile-header closed -->
