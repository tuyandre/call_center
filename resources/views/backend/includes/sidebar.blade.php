<!-- Sidemenu -->
<div class="main-sidebar main-sidebar-sticky side-menu">
    <div class="sidemenu-logo">
        <a class="main-logo" href="{{route('home')}}">
            <img src="{{asset('frontend/img/call_centern.png')}}" class="header-brand-img desktop-logo" alt="logo">
            <img src="{{asset('frontend/img/call_centern.png')}}" class="header-brand-img icon-logo" alt="logo">
            <img src="{{asset('frontend/img/call_centern.png')}}" class="header-brand-img desktop-logo theme-logo" alt="logo">
            <img src="{{asset('frontend/img/call_centern.png')}}" class="header-brand-img icon-logo theme-logo" alt="logo">
        </a>
    </div>
    <div class="main-sidebar-body">
        <ul class="nav">
            <li class="nav-header"><span class="nav-label">Dashboard</span></li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}"><span class="shape1"></span><span class="shape2"></span>
                    <i class="ti-home sidemenu-icon"></i><span class="sidemenu-label">Dashboard</span></a>
            </li>
{{--            //check if the user is admin--}}
            @if(auth()->user()->is_admin)
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.users.allUsers')}}"><span class="shape1"></span>
                    <span class="shape2"></span><i class="ti-user sidemenu-icon"></i><span class="sidemenu-label">ALL USERS</span></a>
            </li>
            @endif


            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.staff.index')}}"><span class="shape1"></span>
                    <span class="shape2"></span><i class="ti-user sidemenu-icon"></i><span class="sidemenu-label">STAFFS</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.phones.index')}}"><span class="shape1"></span>
                    <span class="shape2"></span><i class="ti-mobile sidemenu-icon"></i><span class="sidemenu-label">DEVICES</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.staff.phones')}}"><span class="shape1"></span>
                    <span class="shape2"></span><i class="ti-mobile sidemenu-icon"></i><span class="sidemenu-label">STAFF-PHONE</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.call_records.index')}}"><span class="shape1"></span>
                    <span class="shape2"></span><i class="ti-headphone-alt sidemenu-icon"></i><span class="sidemenu-label">CALL RECORDS</span></a>
            </li>

{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="{{route('admin.calls.incomingCalls')}}"><span class="shape1"></span>--}}
{{--                    <span class="shape2"></span><i class="ti-mobile sidemenu-icon"></i><span class="sidemenu-label">INCOMING CALLS</span></a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="{{route('admin.calls.outgoingCalls')}} "><span class="shape1"></span>--}}
{{--                    <span class="shape2"></span><i class="ti-user sidemenu-icon"></i><span class="sidemenu-label">OUTGOING CALLS</span></a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="{{route('admin.calls.missedCalls')}}"><span class="shape1"></span>--}}
{{--                    <span class="shape2"></span><i class="ti-microphone-alt sidemenu-icon"></i><span class="sidemenu-label">MISSED CALLS</span></a>--}}
{{--            </li>--}}

            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.reports.index')}}"><span class="shape1"></span>
                    <span class="shape2"></span><i class="ti-files sidemenu-icon"></i><span class="sidemenu-label">CALLS REPORTS</span></a>
            </li>
        </ul>
    </div>
</div>
<!-- End Sidemenu -->        <!-- Main Header-->
