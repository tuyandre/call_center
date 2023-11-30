@extends('backend.includes.master')

@section('title','Home')
@section('css')

    <link href="{{asset('/dashboard/assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/dashboard/assets/plugins/datatable/responsivebootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/dashboard/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css')}}" rel="stylesheet" />
@endsection
@section('content_title','SYSTEM CALLS')
@section('content_target','All CALLS')
@section('contents')
    <?php

//use Carbon\Carbon;

    //get request
    $start_date = request()->input('start_date');

    $max_date = Carbon\Carbon::now()->addDays(1);
    $endDate2 = Carbon\Carbon::now();


//    $endDate2->firstOfMonth();

    $endDate = request()->input('end_date')? request()->input('end_date'):Carbon\Carbon::now();
    $startDate = request()->input('start_date')? request()->input('start_date'):Carbon\Carbon::now()->firstOfMonth();

    ?>
    <div class="row row-sm">
        <div class="col-sm-12 col-lg-10 col-xl-10">
            <!--Row-->
            <div class="row row-sm  mt-lg-4">
                <div class="col-sm-12 col-lg-12 col-xl-12">
                    <div class="card bg-primary custom-card card-box">
                        <div class="card-body p-4">
            <form action="{{route('admin.call_records.index')}}" method="get">
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="inputState">Call Type</label>
                        <select id="inputState" class="form-control" name="type">
                            <option selected>--Choose Type--</option>
                            <option value="INCOMING" {{request()->input('type') == 'INCOMING' ? 'selected':''}}>INCOMING CALL</option>
                            <option value="OUTGOING" {{request()->input('type') == 'OUTGOING' ? 'selected':''}}>OUTGOING CALL</option>
                            <option value="MISSED" {{request()->input('type') == 'MISSED' ? 'selected':''}}>MISSED CALL</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputZip">Start Date</label>
                        <input type="datetime-local" class="form-control" name="start_date" min="2022-01-01T00:00" value="{{$startDate}}">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="inputZip">End Date</label>
                        <input type="datetime-local" class="form-control" name="end_date" max="{{$max_date}}"  value="{{$endDate}}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputZip">.</label>
                        <input type="submit" class="btn btn-info" style="margin-top: 30px" value="Filter">
                    </div>
                </div>
            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>


    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div>
                        <h6 class="main-content-label mb-1">All Calls List</h6>

                    </div>
                    <div class="table-responsive table-hover">
                        <table class="table" id="CallTable">
                            <thead>
                            <tr>
{{--                                <th class="wd-20p">Caller Id</th>--}}
                                <th class="wd-20p">Staff Name</th>
                                <th class="wd-20p">Call Center Phone</th>
                                <th class="wd-20p">Client Phone</th>
                                <th class="wd-20p">Client Name</th>
                                <th class="wd-25p">Type</th>
                                <th class="wd-20p">Date</th>
                                <th class="wd-20p">Duration</th>
                                <th class="wd-20p">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($callRecords as $callRecord)
                            <tr>
                                <td>{{$callRecord->StaffPhone->callCenterStaff?->name}}</td>
                                <td>{{$callRecord->callCenterPhone->phone_number}}</td>
                                <td>{{$callRecord->client_phone}}</td>
                                <td>{{$callRecord->client_name}}</td>
                                <td>

                                    @if($callRecord->type == 'INCOMING')
                                        @php($color = 'success')
                                    @elseif($callRecord->type == 'OUTGOING')

                                        @php($color = 'info')

                                    @elseif($callRecord->type == 'MISSED')

                                            @php($color = 'warning')

                                    @endif
                                    <span class="badge badge-{{$color}} rounded-10 ">{{$callRecord->type}}</span>
                                </td>
                                <td>{{$callRecord->date}}</td>
                                <td>{{$callRecord->duration}}</td>
                                <td>
                                    <a href="{{route('admin.calls.callDetail',$callRecord->type)}}" class="btn btn-info btn-sm btn-flat js-detail" data-id="{{$callRecord->type}}" > <i class="fa fa-eye"></i>View</a>
                                </td>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
@section('js')

    <script>
        var defaultUrl = "{{ route('admin.calls.getAllCalls') }}";
        var table;
        {{--var manageTable = $("#CallTable");--}}
        {{--function myFunc() {--}}
        {{--    table = manageTable.DataTable({--}}
        {{--        ajax: {--}}
        {{--            url: defaultUrl,--}}
        {{--            dataSrc: 'calls'--}}
        {{--        },--}}
        {{--        columns: [--}}
        {{--            {data: 'client_phone'},--}}
        {{--            {data: 'client_phone'},--}}
        {{--            {data: 'client_phone'},--}}
        {{--            {data: 'client_name'},--}}
        {{--            {data: 'type'},--}}
        {{--            {data: 'date'},--}}
        {{--            {data: 'duration'},--}}
        {{--            {--}}
        {{--                data: 'client_phone',--}}
        {{--                render: function (data, type, row) {--}}
        {{--                    var url_more = '{{ route("admin.calls.callDetail", ":id") }}';--}}
        {{--                    url_more = url_more.replace(':id', row.client_phone);--}}

        {{--                        return"<a  href='"+url_more+"' class='btn btn-info btn-sm btn-flat js-detail' data-id='" + data +--}}
        {{--                            "' > <i class='fa fa-eye'></i>View</a>";--}}


        {{--                }--}}
        {{--            }--}}
        {{--        ]--}}
        {{--    });--}}
        {{--}--}}


        $(document).ready(function () {

            //initialize data table
            // myFunc();
            var manageTable = $("#CallTable");
            manageTable.DataTable();


        });

    </script>

    <!-- Internal Data Table js -->
    <script src="{{asset('/dashboard/assets/plugins/datatable/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/dashboard/assets/plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/dashboard/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('/dashboard/assets/plugins/datatable/fileexport/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('/dashboard/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/dashboard/assets/plugins/datatable/fileexport/jszip.min.js')}}"></script>
    <script src="{{asset('/dashboard/assets/plugins/datatable/fileexport/pdfmake.min.js')}}"></script>
    <script src="{{asset('/dashboard/assets/plugins/datatable/fileexport/vfs_fonts.js')}}"></script>
    <script src="{{asset('/dashboard/assets/plugins/datatable/fileexport/buttons.html5.min.js')}}"></script>
    <script src="{{asset('/dashboard/assets/plugins/datatable/fileexport/buttons.print.min.js')}}"></script>
    <script src="{{asset('/dashboard/assets/plugins/datatable/fileexport/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('/dashboard/assets/js/table-data.js')}}"></script>

@endsection

