@extends('backend.includes.master')

@section('title','Home')
@section('css')

    <link href="{{asset('/dashboard/assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/dashboard/assets/plugins/datatable/responsivebootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/dashboard/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css')}}" rel="stylesheet" />
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
    @if(session()->has('error'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
{{--            //check if is array--}}
            @if(is_array(session()->get('error'))||is_object(session()->get('error')))
                @foreach(session()->get('error') as $error)
                    {{ $error }}<br/>
                @endforeach
            @else
                {{ session()->get('error') }}
            @endif
        </div>
    @endif

    <div class="row row-sm">

        <div class="col-lg-8 col-md-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div>
                        <h6 class="main-content-label mb-1">Add Staff</h6>
                        <p class="text-muted card-sub-title">Fill All Information for this Staff.</p>
                    </div>
                    <div class="">
                        <form   action="{{route('admin.staff.store')}}" method="post">
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
                                        <input class="form-control" required name="email" placeholder="Email" type="email" >

                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-4">
                                    <label class="mg-b-0">Phone</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input class="form-control" required name="phone" placeholder="Phone" type="text"  >
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-4">
                                    <label class="mg-b-0">Algo Id</label>
                                </div>
                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                    <input class="form-control" required name="staff_external" placeholder="Algo id (ALG00000001)" type="text">
                                </div>
                            </div>
                            <div class="form-group row justify-content-end mb-0">
                                <div class="col-md-8 pl-md-2">
                                    <input type="submit" class="btn ripple btn-primary pd-x-30 mg-r-5" value="Save Staff">
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
