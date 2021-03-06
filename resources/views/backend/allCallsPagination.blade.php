@extends('backend.includes.master')

@section('title','Home')
@section('css')
    <!-- Internal DataTables css-->
{{--    <link href="{{asset('/public/dashboard/assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />--}}
{{--    <link href="{{asset('/public/dashboard/assets/plugins/datatable/responsivebootstrap4.min.css')}}" rel="stylesheet" />--}}
{{--    <link href="{{asset('/public/dashboard/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css')}}" rel="stylesheet" />--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

@endsection
@section('content_title','SYSTEM CALLS')
@section('content_target','All CALLS')
@section('contents')


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
                                <th class="wd-20p">Client Phone</th>
                                <th class="wd-20p">Client Name</th>
                                <th class="wd-25p">Type</th>
                                <th class="wd-20p">Date</th>
                                <th class="wd-20p">Duration</th>
                                <th class="wd-20p">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($data) && $data->count())
                                @foreach($data as $key => $value)
                                    <tr>
                                        <td>{{ $value->client_phone }}</td>
                                        <td>{{ $value->client_name }}</td>
                                        <td>{{ $value->type }}</td>
                                        <td>{{ $value->date }}</td>
                                        <td>{{ $value->duration }}</td>
                                        <td>
                                            <a  href="{{ route("admin.calls.callDetail", ['id',$value->id]) }}" class="btn btn-info btn-sm btn-flat js-detail" > <i class='fa fa-eye'></i>View</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="10">There are no data.</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                        {{ $data->links() }}
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
        var manageTable = $("#CallTabless");
        function myFunc() {
            table = manageTable.DataTable({
                ajax: {
                    url: defaultUrl,
                    dataSrc: 'calls'
                },
                columns: [
                    {data: 'client_phone'},
                    {data: 'client_name'},
                    {data: 'type'},
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
{{--    <script src="{{asset('/public/dashboard/assets/plugins/datatable/jquery.dataTables.min.js')}}"></script>--}}
{{--    <script src="{{asset('/public/dashboard/assets/plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>--}}
{{--    <script src="{{asset('/public/dashboard/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>--}}
{{--    <script src="{{asset('/public/dashboard/assets/plugins/datatable/fileexport/dataTables.buttons.min.js')}}"></script>--}}
{{--    <script src="{{asset('/public/dashboard/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.js')}}"></script>--}}
{{--    <script src="{{asset('/public/dashboard/assets/plugins/datatable/fileexport/jszip.min.js')}}"></script>--}}
{{--    <script src="{{asset('/public/dashboard/assets/plugins/datatable/fileexport/pdfmake.min.js')}}"></script>--}}
{{--    <script src="{{asset('/public/dashboard/assets/plugins/datatable/fileexport/vfs_fonts.js')}}"></script>--}}
{{--    <script src="{{asset('/public/dashboard/assets/plugins/datatable/fileexport/buttons.html5.min.js')}}"></script>--}}
{{--    <script src="{{asset('/public/dashboard/assets/plugins/datatable/fileexport/buttons.print.min.js')}}"></script>--}}
{{--    <script src="{{asset('/public/dashboard/assets/plugins/datatable/fileexport/buttons.colVis.min.js')}}"></script>--}}
    <script src="{{asset('/public/dashboard/assets/js/table-data.js')}}"></script>

@endsection

