@extends('backend.includes.master')

@section('title','Home')
@section('css')
    <link href="{{asset('/dashboard/assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/dashboard/assets/plugins/datatable/responsivebootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/dashboard/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css')}}" rel="stylesheet" />
@endsection
@section('content_title','SYSTEM STAFFS')
@section('content_target','All STAFFS')
@section('action_buttons')

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-info my-2 btn-icon-text btn_addStaff" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="fe fe-user-plus mr-2"></i>   Assign Staff
    </button>
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
                                <th class="wd-20p">Staff Id</th>
                                <th class="wd-20p">Staff Name</th>
                                <th class="wd-20p">Phone Brand &Model</th>
                                <th class="wd-20p">Phone Number</th>
                                <th class="wd-20p">Assigned Date</th>
                                <th class="wd-20p">Replaced Date</th>
                                <th class="wd-20p">Assigned By</th>
                                <th class="wd-20p">Status</th>
                                <th class="wd-20p">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($staff_phones as $staff_phone)
                                <tr>
                                    <td>{{$staff_phone->callCenterStaff->staff_external}}</td>
                                    <td>{{$staff_phone->callCenterStaff->name}}</td>
                                    <td>{{$staff_phone->callCenterPhone->brand}} & {{$staff_phone->callCenterPhone->model}}</td>
                                    <td>{{$staff_phone->callCenterPhone->phone_number}}</td>
                                    <td>{{$staff_phone->assigned_at}}</td>
                                    <td>{{$staff_phone->returned_at}}</td>
                                    <td>{{$staff_phone->assignedBy->name}}</td>
                                    <td>
                                        @if($staff_phone->status == 1)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                        </div>
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



    <div class="modal fade" id="StaffModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="Post" action="{{route('admin.staff.phones.store')}}">
                    @csrf
                <div class="modal-body">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Staff:</label>
                            <select class="form-control select2" aria-hidden="true" id="recipient-name" name="call_center_staff_id" required>
                                <option value="">Select Staff</option>
                                @foreach($staffs as $staff)
                                    <option value="{{$staff->id}}">{{$staff->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Phone:</label>

                            <select class="form-control select2" id="message-text" name="call_center_phone_id" required>
                                <option value="">Select Phone</option>
                                @foreach($phones as $phone)
                                    <option value="{{$phone->id}}">{{$phone->brand}} & {{$phone->model}}</option>
                                @endforeach
                            </select>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Assign">
                </div>
                </form>
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

            //display modal by btn_addStaff
            $('.btn_addStaff').on('click',function () {
                $('#StaffModal').modal('show');
            });
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

