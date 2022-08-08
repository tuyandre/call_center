@extends('backend.includes.master')

@section('title','Home')
@section('css')
    <!-- Internal DataTables css-->
    <link href="{{asset('dashboard/assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('dashboard/assets/plugins/datatable/responsivebootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('dashboard/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css')}}" rel="stylesheet" />
@endsection
@section('content_title','SYSTEM USER')
@section('content_target','USER PAGE')
@section('contents')

    @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ session()->get('message') }}
        </div>
    @endif

    <div class="row row-sm">

        <div class="col-lg-8 col-md-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div>
                        <h6 class="main-content-label mb-1">Add User</h6>
                        <p class="text-muted card-sub-title">Fill All Information for this User.</p>
                    </div>
                    <div class="">
                        <form   action="{{route('admin.users.save_user')}}" method="post">
                            @csrf
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-4">
                                    <label class="mg-b-0">Full Name</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input class="form-control" placeholder="Full Name" type="text" required name="name" >
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-4">
                                    <label class="mg-b-0">Email</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input class="form-control" required name="email" placeholder="Email" type="email">
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-4">
                                    <label class="mg-b-0">Password</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input class="form-control" required name="password" placeholder="Password" type="password">
                                </div>
                            </div>
                            <div class="form-group row justify-content-end mb-0">
                                <div class="col-md-8 pl-md-2">
                                    <input type="submit" class="btn ripple btn-primary pd-x-30 mg-r-5" value="Save User">
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
