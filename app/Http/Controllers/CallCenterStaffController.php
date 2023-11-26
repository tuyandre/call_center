<?php

namespace App\Http\Controllers;

use App\Models\CallCenterStaff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CallCenterStaffController extends Controller
{
    //index
    public function index(){
        //reurn with data
        $staffs=CallCenterStaff::all();
        return view('backend.callCenterStaff', [
            'staffs' => $staffs
        ]);
    }

    //create
    public function create(){
        return view('backend.add_staff');
    }

    //store
    public function store(Request $request){
     $VALIDATE=  Validator::make($request->all(),[
            'email' => 'required|email|string|max:255|unique:call_center_staff',
            'phone' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'staff_external' => 'required|string|max:255|unique:call_center_staff',
        ]);
     if ($VALIDATE->fails()){
         return redirect()->back()->with('error',$VALIDATE->errors());
        }
        $staff=new CallCenterStaff();
        $staff->name=$request['name'];
        $staff->email=$request['email'];
        $staff->staff_external=$request['staff_external'];
        $staff->phone=$request['phone'];
        $staff->save();
        return redirect()->back()->with('message',"Staff Saved Successful");
    }
}
