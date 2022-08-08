<!-- Main Header-->
<div class="main-header side-header sticky">
    <div class="container-fluid">
        <div class="main-header-left">
            <a href="{{url('/')}}">    <img src="{{asset('frontend/img/call_center2.png')}}" style="width: 50% !important;" class="mobile-logo" alt="logo"></a>
        </div>
        <div class="main-header-center">
            <div class="responsive-logo">
                <a href="{{route('dashboard')}}"><img src="{{asset('frontend/img/call_center2.png')}}" style="width: 50% !important;" class="mobile-logo" alt="logo"></a>
                <a href="{{route('dashboard')}}"><img src="{{asset('frontend/img/call_center2.png')}}" style="width: 50% !important;" class="mobile-logo-dark" alt="logo"></a>
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
           <div class="main-profile-menu">
               <a class="d-flex btn btn-info" href="{{route('login')}}">LOGIN</a>
           </div>

            <a href="{{route('login')}}" class="navresponsive-toggler btn btn-info" type="button">
                LOGIN
               <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
            </a>
            <!-- Navresponsive closed -->
        </div>
    </div>
</div>
<!-- End Main Header-->		<!-- Mobile-header -->
<div class="mobile-main-header">
    <div class="mb-1 navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark  ">

    </div>
</div>
<!-- Mobile-header closed -->
