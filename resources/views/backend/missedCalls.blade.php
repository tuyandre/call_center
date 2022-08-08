@extends('backend.includes.master')

@section('title','Home')
@section('css')
    <!-- Internal DataTables css-->
    <link href="{{asset('/public/dashboard/assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/public/dashboard/assets/plugins/datatable/responsivebootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/public/dashboard/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css')}}" rel="stylesheet" />
@endsection
@section('content_title','SYSTEM CALLS')
@section('content_target','MISSED CALLS')
@section('contents')


    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div>
                        <h6 class="main-content-label mb-1">Missed Calls List</h6>

                    </div>
                    <div class="table-responsive table-hover">
                        <table class="table" id="CallTable">
                            <thead>
                            <tr>
{{--                                <th class="wd-20p">Caller Id</th>--}}
                                <th class="wd-20p">Client Phone</th>
                                <th class="wd-20p">Client Name</th>
                                <th class="wd-20p">Date</th>
                                <th class="wd-20p">Duration</th>
                                <th class="wd-20p">Action</th>
                            </tr>
                            </thead>
                            <tbody>

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
        var defaultUrl = "{{ route('admin.calls.getMissedCalls') }}";
        var table;
        var manageTable = $("#CallTable");
        function myFunc() {
            table = manageTable.DataTable({
                ajax: {
                    url: defaultUrl,
                    dataSrc: 'calls'
                },
                columns: [
                    {data: 'client_phone'},
                    {data: 'client_name'},
                    {data: 'date'},
                    {data: 'duration'},
                    {
                        data: 'client_phone',
                        render: function (data, type, row) {
                            var url_more = '{{ route("admin.calls.callDetail", ":id") }}';
                            url_more = url_more.replace(':id', row.client_phone);

                            return"<a  href='"+url_more+"' class='btn btn-info btn-sm btn-flat js-detail' data-id='" + data +
                                "' > <i class='fa fa-eye'></i>View</a>";


                        }
                    }
                ]
            });
        }


        $(document).ready(function () {

            //initialize data table
            myFunc();


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

