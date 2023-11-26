<?php

namespace App\Http\Controllers;

use App\Models\CallCenterPhone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CallCenterPhoneController extends Controller
{
    //index
    public function index(){
        //reurn with data
        $phones=CallCenterPhone::all();
        return view('backend.callCenterPhone', [
            'phones' => $phones
        ]);
    }

    //create
    public function create(){
        return view('backend.add_devices');
    }

    //store
    public function store(Request $request){

        $validated = Validator::make($request->all(),[
            'phone_number' => 'required|string|max:255|unique:call_center_phones',
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'serial_number' => 'required|string|max:255|unique:call_center_phones',
        ]);


        $phone=new CallCenterPhone();
        $phone->phone_number=$request['phone_number'];
        $phone->phone_type="Mobile";
        $phone->phone_status=$request['phone_status'];
        $phone->brand=$request['brand'];
        $phone->model=$request['model'];
        $phone->serial_number=$request['serial_number'];
        $phone->save();
        return redirect()->back()->with('message',"Phone Saved Successful");
    }
}
