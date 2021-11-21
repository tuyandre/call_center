<div data-section-scroll='0'>
    <div class="cc_header">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-3">
                    <div class="cc_logo">
                        <a href="{{url('/')}}"><img src="{{asset('public/frontend/img/call_center2.png')}}" alt="call-center" style="height: 65px !important;"></a>
                    </div>
                    <div class="toggle_right">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8 col-md-9">
                    <div class="header_right">
                        <div class="col-lg-12 col-md-12">
                            <div class="row">
                                <div class="header_rightTop">
                                    <ul class="list-inline">
                                        <li><a><i class="fa fa-map-marker"></i>Kigali, Rwanda, Rugando - Kimihurura, NO 18, 6 Avenue KG</a></li>
                                        <li><a>Call Us Now - +250780923199</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="header_rightBottom">
                                <nav class="navbar">
                                    <div class="collapse navbar-collapse" id="myNavbar">

                                        <button type="button" class="cc_btn" data-toggle="modal" data-target="#myModal">login</button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="myModal" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <i class="flaticon-call-center-girl"></i>
                                                        <h4 class="modal-title"> &nbsp; log in &nbsp;</h4>
                                                    </div>
                                                    <form class="cc_login_form" action="{{ route('ishyiga.login') }}" method="post">
                                                        @csrf
                                                    <div class="modal-body">

                                                            <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter Your Email" class="form-control @error('email') is-invalid @enderror">
                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                        <input type="password" name="password" value="" placeholder="Enter Your Password" class="form-control @error('password') is-invalid @enderror">
                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                            <label><input type="checkbox" value="">&nbsp;&nbsp;Remember Me</label>
                                                            <ul>
                                                                <li><a href="#">forget password</a></li>
                                                                <li><a href="#">sign up</a></li>
                                                            </ul>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <input  type="submit" class="cc_btn" value="Log In" />
                                                    </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                        <!--modal-->

                                        <ul class="list-inline cc_mainMenu">
                                            <li class="active"><a href="0">home</a></li>
                                            <li><a href="1">about</a></li>
{{--                                            <li><a href="2">services</a></li>--}}
{{--                                            <li><a href="3">FAQ'S</a></li>--}}
{{--                                            <li><a href="5">contact us</a></li>--}}
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner start -->
{{--    <div class="cc_banner">--}}
{{--        <div class="owl-carousel owl-theme">--}}
{{--            <div class="item owl-item1">--}}
{{--                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 caption_position">--}}
{{--                    <div class="caption">--}}
{{--                        <div class="container">--}}

{{--                            <div id="typed-strings">--}}
{{--                                <h1>Welcome to <i>ISHYIGA CALL CENTER</i></h1>--}}
{{--                            </div>--}}
{{--                            <div class="typing_text">--}}
{{--                                <span id="typed"></span>--}}
{{--                            </div>--}}

{{--                            <h1>Thanks for Bringing this to Our Attention</h1>--}}

{{--                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-0">--}}
{{--                                <div class="row">--}}
{{--                                    <form class="b">--}}
{{--                                        <input type="search" name="search" value="" placeholder="KEYWORD" class="form-control">--}}
{{--                                        <button type="button" class="search_btn">search</button>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="item owl-item2">--}}
{{--                <div class="container">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 caption_position">--}}
{{--                            <div class="caption">--}}
{{--                                <h1 class="b">Find articles , help , and advice <br> for getting the most out of <span>ISHYIGA SOFTWARE</span></h1>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="item owl-item3">--}}
{{--                <div class="container">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 caption_position">--}}
{{--                            <div class="caption">--}}
{{--                                <h1 class="a">always available<br> for our customers</h1>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</div>
