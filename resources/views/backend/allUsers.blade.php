@extends('backend.includes.master')

@section('title','Home')
@section('css')
    <!-- Internal DataTables css-->
    <link href="{{asset('/public/dashboard/assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/public/dashboard/assets/plugins/datatable/responsivebootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/public/dashboard/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css')}}" rel="stylesheet" />
@endsection
@section('content_title','SYSTEM USERS')
@section('content_target','All USERS')
@section('action_buttons')

        <a type="button" href="{{route('admin.users.createUser')}}"  class="btn btn-info my-2 btn-icon-text" id="report_exportqwe">
            <i class="fe fe-user-plus mr-2"></i> Add User
        </a>

@endsection
@section('contents')


    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div>
                        <h6 class="main-content-label mb-1">All Users List</h6>

                    </div>
                    <div class="table-responsive table-hover">
                        <table class="table" id="CallTable">
                            <thead>
                            <tr>
                                <th class="wd-20p">User Name</th>
                                <th class="wd-20p">User Email</th>
                                <th class="wd-20p">User Username</th>
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
        var defaultUrl = "{{ route('admin.users.getAllUsers') }}";
        var table;
        var manageTable = $("#CallTable");
        function myFunc() {
            table = manageTable.DataTable({
                ajax: {
                    url: defaultUrl,
                    dataSrc: 'users'
                },
                columns: [
                    {data: 'name'},
                    {data: 'email'},
                    {data: 'username'}
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

