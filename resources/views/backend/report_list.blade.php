@extends('backend.includes.master')

@section('title','Home')
@section('css')
    <!-- Internal DataTables css-->
    <link href="{{asset('/public/dashboard/assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/public/dashboard/assets/plugins/datatable/responsivebootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/public/dashboard/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css')}}" rel="stylesheet" />
@endsection
@section('content_title','SYSTEM Reports')
@section('content_target','Reports')
@section('action_buttons')
{{--    <?php--}}
{{--    $vars = array('start_date'=>$start_date,'end_date'=>$end_date);--}}
{{--    $qs = http_build_query($vars);--}}
{{--    ?>--}}
{{--    <a type="button" href="{{route('admin.reports.exportAll',['data'=>$qs])}}"  target="_blank" class="btn btn-secondary my-2 btn-icon-text" id="report_exportqwe">--}}
{{--        <i class="fe fe-download-cloud mr-2"></i> Export Report--}}
{{--    </a>--}}

@endsection
@section('contents')


    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div>
                        <h6 class="main-content-label mb-1">All Calls Reports from  <strong style="color:green;">{{$start_date}} </strong>  to <strong style="color:green;"> {{$end_date}}</strong></h6>

                    </div>
                    <div class="table-responsive table-hover">
                        <table class="table" id="CallTable">
                            <thead>
                            <tr>
{{--                                <th class="wd-20p">Caller Id</th>--}}
                                <th class="wd-20p">Client Phone</th>
                                <th class="wd-20p">Client Name</th>
                                <th class="wd-25p">Type</th>
                                <th class="wd-20p">Date</th>
                                <th class="wd-20p">Duration</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($calls as $call)
                                <tr>
{{--                                <td>{{$call->caller_id}}</td>--}}
                                <td>{{$call->client_phone}}</td>
                                <td>{{$call->client_name}}</td>
                                <td>{{$call->type}}</td>
                                <td>{{$call->date}}</td>
                                <td>{{$call->duration}}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <input type="hidden" value="{{ Session::token() }}" id="token">


@endsection
@section('js')

    <script>

        var start_date="{{$start_date}}";
        var end_date="{{$end_date}}";
        console.log("satrt date::",start_date)
        {{--var export_url="{{route('admin.reports.exportAll')}}";--}}

        $(document).ready(function () {
            $('#CallTable').DataTable();

            $("#report_export").click(function () {

                var formData = new FormData();
                formData.append('start_date', start_date);
                formData.append('end_date', end_date);
                formData.append('_token', $('#token').val());
                $.ajax({
                    type: 'POST',
                    url: export_url,
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        var blob = new Blob([data], { type: "application/octetstream" });
                        // console.log("SUCCESS : ", response);
                        var isIE = false || !!document.documentMode;
                        if (isIE) {
                            window.navigator.msSaveBlob(blob, fileName);
                        } else {
                            var url = window.URL || window.webkitURL;
                            link = url.createObjectURL(blob);
                            var a = $("<a />");
                            a.attr("download", data);
                            a.attr("href", link);
                            $("body").append(a);
                            a[0].click();
                            $("body").remove(a);
                        }
                    }
                });
            });

        });

    </script>

    <!-- Internal Data Table js -->
    <script src="{{asset('/public/dashboard/assets/plugins/datatable/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/public/dashboard/assets/plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/public/dashboard/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('/public/dashboard/assets/plugins/datatable/fileexport/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('/public/dashboard/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/public/dashboard/assets/plugins/datatable/fileexport/jszip.min.js')}}"></script>
    <script src="{{asset('/public/dashboard/assets/plugins/datatable/fileexport/pdfmake.min.js')}}"></script>
    <script src="{{asset('/public/dashboard/assets/plugins/datatable/fileexport/vfs_fonts.js')}}"></script>
    <script src="{{asset('/public/dashboard/assets/plugins/datatable/fileexport/buttons.html5.min.js')}}"></script>
    <script src="{{asset('/public/dashboard/assets/plugins/datatable/fileexport/buttons.print.min.js')}}"></script>
    <script src="{{asset('/public/dashboard/assets/plugins/datatable/fileexport/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('/public/dashboard/assets/js/table-data.js')}}"></script>

@endsection

