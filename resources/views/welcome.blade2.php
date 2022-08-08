{{--@extends('frontend.master')--}}

{{--@section('title','HOME')--}}
{{--@section('css')--}}



{{--@endsection--}}
{{--@section('content')--}}

{{--    <!-- service section start -->--}}
{{--    <div data-section-scroll='2'>--}}
{{--        <div class="cc_service cc_toppadder80 cc_bottompadder50">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                        <div class="cc_heading cc_bottompadder50">--}}
{{--                            <h6>STATISTIC</h6>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">--}}
{{--                        <div class="service_section">--}}
{{--                            <div class="service_top">--}}
{{--                                <img src="{{asset('/public/dashboard/assets/img/accept.png')}}" alt="" style="height: 65px">--}}
{{--                            </div>--}}
{{--                            <h3>ALL CALLS</h3>--}}
{{--                            <p>These are all calls for our call Center.</p>--}}
{{--                            <a href="{{route('login')}}" type="button" class="cc_btn">view more</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">--}}
{{--                        <div class="service_section">--}}
{{--                            <div class="service_top">--}}
{{--                                <i class="flaticon-chat"></i>--}}
{{--                            </div>--}}
{{--                            <h3>Live Chat</h3>--}}
{{--                            <p>I sink under the weight of the splendour of these visions. A wonderful serenity Which for the bliss of souls like mine.</p>--}}
{{--                            <button type="button" class="cc_btn">view more</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">--}}
{{--                        <div class="service_section">--}}
{{--                            <div class="service_top">--}}
{{--                                <i class="flaticon-letter"></i>--}}
{{--                            </div>--}}
{{--                            <h3>Email Support</h3>--}}
{{--                            <p>I sink under the weight of the splendour of these visions. A wonderful serenity Which for the bliss of souls like mine.</p>--}}
{{--                            <button type="button" class="cc_btn">view more</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">--}}
{{--                        <div class="service_section">--}}
{{--                            <div class="service_top">--}}
{{--                                <i class="flaticon-video-camera"></i>--}}
{{--                            </div>--}}
{{--                            <h3>Help Videos</h3>--}}
{{--                            <p>I sink under the weight of the splendour of these visions. A wonderful serenity Which for the bliss of souls like mine.</p>--}}
{{--                            <button type="button" class="cc_btn">view more</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">--}}
{{--                        <div class="service_section">--}}
{{--                            <div class="service_top">--}}
{{--                                <i class="flaticon-call-center-girl"></i>--}}
{{--                            </div>--}}
{{--                            <h3>Call Center</h3>--}}
{{--                            <p>I sink under the weight of the splendour of these visions. A wonderful serenity Which for the bliss of souls like mine.</p>--}}
{{--                            <button type="button" class="cc_btn">view more</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">--}}
{{--                        <div class="service_section">--}}
{{--                            <div class="service_top">--}}
{{--                                <i class="flaticon-exam"></i>--}}
{{--                            </div>--}}
{{--                            <h3>Optimization</h3>--}}
{{--                            <p>I sink under the weight of the splendour of these visions. A wonderful serenity Which for the bliss of souls like mine.</p>--}}
{{--                            <button type="button" class="cc_btn">view more</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}




{{--@endsection--}}
{{--@section('js')--}}

{{--@endsection--}}




@extends('frontend.includes.master')

@section('title','ISHYIGA')
@section('content_title','ISHYIGA')
@section('content_target','ISHYIGA')
@section('css')

@endsection
@section('contents')

<?php

use Carbon\Carbon;

$endDate = Carbon\Carbon::now();
$endDate2 = Carbon\Carbon::now();
$startDate = $endDate2->firstOfMonth();

?>
    <div class="row row-sm">
        <div class="col-sm-12 col-lg-12 col-xl-8">
            <div class="row row-sm  mt-lg-4">
                <div class="col-sm-12 col-lg-12 col-xl-12">
                    <div class="card bg-primary custom-card card-box">
                        <div class="card-body p-4">
                            <div class="row align-items-center">
                                <div class="offset-xl-3 offset-sm-6 col-xl-8 col-sm-6 col-12 img-bg ">
                                    <h4 class="d-flex  mb-3">
                                        <span class="font-weight-bold text-white "></span>
                                    </h4>
                                    <p class="tx-white-7 mb-1">WELCOME ON ISHYIGA CALL CENTER SYSTEM  </div>
                                <img src="{{asset('/public/dashboard/assets/img/pngs/work3.png')}}" alt="user-img" class="wd-200">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--Row-->
    <div class="row row-sm">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="card-item">
                        <div class="card-item-icon card-icon">
                            <img src="{{asset('/public/dashboard/assets/img/accept.png')}}" alt="">
                        </div>
                        <div class="card-item-title mb-2">
                            <label class="main-content-label tx-13 font-weight-bold mb-1">Total Calls</label>
                            <span class="d-block tx-12 mb-0 text-muted">Total All Calls</span>
                        </div>
                        <div class="card-item-body"> -->
                            <?php $calls=\App\Models\CallLogs::whereBetween('created_at', [$startDate, $endDate])->get(); ?>
                            <?php $calls=\App\Models\CallLogs::all()->whereBetween('date', [$startDate, $endDate]); ?>
                            <div class="card-item-stat">
                                <h4 class="font-weight-bold">{{$calls->count()}}</h4>
                                <small><b class="text-success"></b> all calls</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="card-item">
                        <div class="card-item-icon card-icon">
                            <img src="{{asset('/public/dashboard/assets/img/incoming.png')}}" alt="">
                        </div>
                        <div class="card-item-title mb-2">
                            <label class="main-content-label tx-13 font-weight-bold mb-1">Incoming Calls</label>
                            <span class="d-block tx-12 mb-0 text-muted">Total Incoming Calls</span>
                        </div>
                        <div class="card-item-body">
                            <?php $incomes=\App\Models\CallLogs::where('type','=','INCOMING')->whereBetween('date', [$startDate, $endDate])->get(); ?>
                            <div class="card-item-stat">
                                <h4 class="font-weight-bold">{{$incomes->count()}}</h4>
                                <small><b class="text-success"></b> Calls</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="card-item">
                        <div class="card-item-icon card-icon">
                            <img src="{{asset('/public/dashboard/assets/img/outgoing.jpg')}}" alt="">
                        </div>
                        <div class="card-item-title  mb-2">
                            <label class="main-content-label tx-13 font-weight-bold mb-1">All Outgoing Calls</label>	<span class="d-block tx-12 mb-0 text-muted">All Outgoing Calls</span>
                        </div>
                        <div class="card-item-body">
                            <?php //$outs=\App\Models\CallLogs::where('type','=','OUTGOING')->whereBetween('date', [$startDate, $endDate])->get(); ?>
                            <div class="card-item-stat">
                                <h4 class="font-weight-bold">{{$outs->count()}}</h4>
                                <small><b class="text-danger"></b> Calls</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="card-item">
                        <div class="card-item-icon card-icon">
                            <img src="{{asset('/public/dashboard/assets/img/missed.png')}}" alt="">
                        </div>
                        <div class="card-item-title  mb-2">
                            <label class="main-content-label tx-13 font-weight-bold mb-1">All Missed Calls</label>	<span class="d-block tx-12 mb-0 text-muted">All Missed Calls</span>
                        </div>
                        <div class="card-item-body">
                            <?php $mis=\App\Models\CallLogs::where('type','=','MISSED')->whereBetween('date', [$startDate, $endDate])->get(); ?>
                            <div class="card-item-stat">
                                <h4 class="font-weight-bold">{{$mis->count()}}</h4>
                                <small><b class="text-danger"></b> Calls</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="card-item">
                        <div class="card-item-icon card-icon">

                            <img src="{{asset('/public/dashboard/assets/img/end-call.jpg')}}" alt="">
                        </div>
                        <div class="card-item-title  mb-2">
                            <label class="main-content-label tx-13 font-weight-bold mb-1">RESPONSIVENESS RATE</label>
                            <span class="d-block tx-12 mb-0 text-muted">Responsiveness Rate</span>
                        </div>
                        <div class="card-item-body">
                            <?php $missed=new \App\Responsiveness();
                            $responsess=$missed->getMissedResponsiveness();

                                                        $rate=($response*100)/$mis;

                            ?>
                            <div class="card-item-stat">
                                <h4 class="font-weight-bold"> {{ intval( $missed->getPercentage($mis->count(),$responsess))}}%</h4>
                                <small><b class="text-danger"><strong> {{$responsess}}</strong></b>  Unsupported Calls</small>
                                {{--                                <span class="d-block tx-12 mb-0 text-muted">Unsupported Calls</span>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End row-->



@endsection
@section('js')


@endsection

