@extends('backend.includes.master')

@section('title','Home')
@section('css')
    <!-- Internal DataTables css-->
    <link href="{{asset('dashboard/assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('dashboard/assets/plugins/datatable/responsivebootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('dashboard/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css')}}" rel="stylesheet" />
@endsection
@section('content_title','SYSTEM REPORTS')
@section('content_target','REPORTS PAGE')
@section('contents')

    <div class="row row-sm">

        <div class="col-lg-6 col-md-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div>
                        <h6 class="main-content-label mb-1">All Reports</h6>
                        <p class="text-muted card-sub-title">get incoming, outgoing and missed calls reports.</p>
                    </div>
                    <div class="">
                        <form target="_blank"  action="{{route('admin.reports.getAllLogs')}}" method="post">
                            @csrf
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="mg-b-0">Start Date</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input class="form-control" placeholder="Start Date" type="datetime-local" required name="start_date" value="<?php today() ?>">
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="mg-b-0">End Date</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input class="form-control" required name="end_date" placeholder="End Date" type="datetime-local">
                            </div>
                        </div>
                        <div class="form-group row justify-content-end mb-0">
                            <div class="col-md-8 pl-md-2">
                                <input type="submit" class="btn ripple btn-primary pd-x-30 mg-r-5" value="Get Reports">
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <div class="col-lg-6 col-md-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div>
                        <h6 class="main-content-label mb-1">Customized Reports</h6>
                        <p class="text-muted card-sub-title">get incoming or outgoing or missed calls reports.</p>
                    </div>
                    <div class="">
                        <form  target="_blank" action="{{route('admin.reports.getCategorized')}}" method="post">
                            @csrf
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="mg-b-0">Select Category</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <select class="form-control select select2" name="category">
                                    <option label="Select Category"></option>
                                    <option value="OUTGOING">OutGoing Calls</option>
                                    <option value="INCOMING">Incoming Calls</option>
                                    <option value="MISSED">Missed Calls</option>
                                </select>


                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="mg-b-0">Start Date</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input class="form-control" placeholder="Start Date" type="datetime-local" required name="start_date" value="<?php today() ?>">
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="mg-b-0">End Date</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input class="form-control" required name="end_date" placeholder="End Date" type="datetime-local">
                            </div>
                        </div>
                        <div class="form-group row justify-content-end mb-0">
                            <div class="col-md-8 pl-md-2">
                                <input type="submit" class="btn ripple btn-primary pd-x-30 mg-r-5" value="Get Reports">
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
@section('js')







@endsection
