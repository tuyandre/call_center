@extends('backend.includes.master')

@section('title','Home')
@section('css')
    <link href="{{asset('/dashboard/assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/dashboard/assets/plugins/datatable/responsivebootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/dashboard/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css')}}" rel="stylesheet" />
@endsection
@section('content_title','SYSTEM PHONES')
@section('content_target','All PHONES')
@section('action_buttons')

    <a type="button" href="{{route('admin.phones.create')}}"  class="btn btn-info my-2 btn-icon-text" id="report_exportqwe">
        <i class="fe fe-user-plus mr-2"></i> Add Device
    </a>

@endsection
@section('contents')


    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div>
                        <h6 class="main-content-label mb-1">All Staff List</h6>

                    </div>
                    <div class="table-responsive table-hover table-condensed table  ">
                        <table class="table" id="CallTable">
                            <thead>
                            <tr>
                                <th class="wd-20p">Serial Number</th>
                                <th class="wd-20p">Phone Number</th>
                                <th class="wd-20p">Brand</th>
                                <th class="wd-20p">Model</th>
                                <th class="wd-20p">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($phones as $phone)
                                <tr>
                                    <td>{{$phone->serial_number}}</td>
                                    <td>{{$phone->phone_number}}</td>
                                    <td>{{$phone->brand}}</td>
                                    <td>{{$phone->model}}</td>
                                    <td>
                                        @if($phone->phone_status == 1)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-danger">Inactive</span>
                                        @endif
                                    </td>
                                </tr>
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
        var defaultUrl = "{{ route('admin.users.getAllUsers') }}";
        var table;

        $(document).ready(function () {
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

