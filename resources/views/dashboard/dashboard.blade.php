@extends('backend.includes.master')

@section('title','Home')
@section('content_title','SYSTEM DASHBOARD')
@section('content_target','DASHBOARD')
@section('css')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
@endsection
@section('contents')
<?php

//use Carbon\Carbon;

$endDate = Carbon\Carbon::now();
$endDate2 = Carbon\Carbon::now();
$startDate = $endDate2->firstOfMonth();

?>
    <div class="row row-sm">
        <div class="col-sm-8 col-lg-8 col-xl-8">
            <!--Row-->
            <div class="row row-sm  mt-lg-4">
                <div class="col-sm-12 col-lg-12 col-xl-12">
                    <div class="card bg-primary custom-card card-box">
                        <div class="card-body p-4">
                            <div class="row align-items-center">
                                <div class="offset-xl-3 offset-sm-6 col-xl-8 col-sm-6 col-12 img-bg ">
                                    <h4 class="d-flex  mb-3">
                                        <span class="font-weight-bold text-white ">{{Auth::user()->name}}</span>
                                    </h4>
                                    <p class="tx-white-7 mb-1">WELCOME ON ISHYIGA CALL CENTER SYSTEM  <b class="text-warning">&</b> <br> <strong>{{Auth::user()->email}}</strong></div>
                                <img src="{{asset('dashboard/assets/img/pngs/work3.png')}}" alt="user-img" class="wd-200">

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--Row -->
        </div>

        <div class="col-sm-4 col-lg-4 col-xl-4">
            <!--Row-->
            <div class="row row-sm  mt-lg-4">
                <div class="col-sm-12 col-lg-12 col-xl-12">
                    <div class="card bg-primary custom-card card-box">
                        <div class="card-body p-4">
                            <form action="{{route('admin.filter.date')}}" method="post">
                                @csrf
                            <div class="row align-items-center">
                                <div class="input-group input-daterange">
                                    <input type="datetime-local" class="form-control" name="start_date" value="2012-04-05">
                                    <div class="input-group-addon">to</div>
                                    <input type="datetime-local" class="form-control" name="end_date" value="2012-04-19">
                                    <input type="submit" class="btn btn-info" value="Filter">
                                </div>

                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--Row -->
        </div>
    </div>





    <!--Row-->
    <div class="row row-sm">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="card-item">
                        <div class="card-item-icon card-icon">
                            <i class="ti-user sidemenu-icon ti-3x"></i>

                        </div>
                        <div class="card-item-title mb-2">
                            <label class="main-content-label tx-13 font-weight-bold mb-1">Call Center Staff</label>
                            <span class="d-block tx-12 mb-0 text-muted">Call Center Staff</span>
                        </div>
                        <div class="card-item-body">
                            <?php $calls=\App\Models\CallCenterStaff::all() ?>
                            <div class="card-item-stat">
                                <h4 class="font-weight-bold">{{$calls->count()}}</h4>
                                <small><b class="text-success"></b> all call center Staff</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="card-item">
                        <div class="card-item-icon card-icon">
                            <i class="ti-mobile sidemenu-icon"></i>
                        </div>
                        <div class="card-item-title mb-2">
                            <label class="main-content-label tx-13 font-weight-bold mb-1">Total Devices</label>
                            <span class="d-block tx-12 mb-0 text-muted">Call Center Phones</span>
                        </div>
                        <div class="card-item-body">
                            <?php $calls=\App\Models\CallCenterPhone::all() ?>
                            <div class="card-item-stat">
                                <h4 class="font-weight-bold">{{$calls->count()}}</h4>
                                <small><b class="text-success"></b> all call center Phones</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="card-item">
                        <div class="card-item-icon card-icon">
                            <img src="{{asset('dashboard/assets/img/accept.png')}}" alt="">
                        </div>
                        <div class="card-item-title mb-2">
                            <label class="main-content-label tx-13 font-weight-bold mb-1">Total Calls</label>
                            <span class="d-block tx-12 mb-0 text-muted">Total All Calls</span>
                        </div>
                        <div class="card-item-body">
                            <?php $calls=\App\Models\CallRecord::all()->whereBetween('date', [$startDate, $endDate]); ?>
                            <div class="card-item-stat">
                                <h4 class="font-weight-bold">{{$calls->count()}}</h4>
                                <small><b class="text-success"></b> all calls</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="card-item">
                        <div class="card-item-icon card-icon">
                            <img src="{{asset('dashboard/assets/img/incoming.png')}}" alt="">
                        </div>
                        <div class="card-item-title mb-2">
                            <label class="main-content-label tx-13 font-weight-bold mb-1">Incoming Calls</label>
                            <span class="d-block tx-12 mb-0 text-muted">Total Incoming Calls</span>
                        </div>
                        <div class="card-item-body">
                            <?php $incomes=\App\Models\CallRecord::where('type','=','INCOMING')->whereBetween('date', [$startDate, $endDate])->get(); ?>
                            <div class="card-item-stat">
                                <h4 class="font-weight-bold">{{$incomes->count()}}</h4>
                                <small><b class="text-success"></b> Calls</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="card-item">
                        <div class="card-item-icon card-icon">
                            <img src="{{asset('dashboard/assets/img/outgoing.jpg')}}" alt="">
                        </div>
                        <div class="card-item-title  mb-2">
                            <label class="main-content-label tx-13 font-weight-bold mb-1">All Outgoing Calls</label>	<span class="d-block tx-12 mb-0 text-muted">All Outgoing Calls</span>
                        </div>
                        <div class="card-item-body">
                            <?php $outs=\App\Models\CallRecord::where('type','=','OUTGOING')->whereBetween('date', [$startDate, $endDate])->get(); ?>
                            <div class="card-item-stat">
                                <h4 class="font-weight-bold">{{$outs->count()}}</h4>
                                <small><b class="text-danger"></b> Calls</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="card-item">
                        <div class="card-item-icon card-icon">
                            <img src="{{asset('dashboard/assets/img/missed.png')}}" alt="">
                        </div>
                        <div class="card-item-title  mb-2">
                            <label class="main-content-label tx-13 font-weight-bold mb-1">All Missed Calls</label>	<span class="d-block tx-12 mb-0 text-muted">All Missed Calls</span>
                        </div>
                        <div class="card-item-body">
                            <?php $mis=\App\Models\CallRecord::where('type','=','MISSED')->whereBetween('date', [$startDate, $endDate])->get(); ?>
                            <div class="card-item-stat">
                                <h4 class="font-weight-bold">{{$mis->count()}}</h4>
                                <small><b class="text-danger"></b> Calls</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="card-item">
                        <div class="card-item-icon card-icon">

                            <img src="{{asset('dashboard/assets/img/end-call.jpg')}}" alt="">
                        </div>
                        <div class="card-item-title  mb-2">
                            <label class="main-content-label tx-13 font-weight-bold mb-1">RESPONSIVENESS RATE</label>
                            <span class="d-block tx-12 mb-0 text-muted">Responsiveness Rate</span>
                        </div>
                        <div class="card-item-body">
                            <?php $missed=new \App\Responsiveness();
                            $responsess=$missed->getMissedResponsiveness();

//                            $rate=($response*100)/$mis;

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

