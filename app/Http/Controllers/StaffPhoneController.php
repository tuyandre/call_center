<?php

namespace App\Http\Controllers;

use App\Models\StaffPhone;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StaffPhoneController extends Controller
{
    //index
    public function index()
    {
        $data= StaffPhone::all();
        return view('backend.staffPhoneList', [
            'staffs' => $data
        ]);
    }

    //store
    public function store(Request $request)
    {
        $request = Validator::make($request->all(),[
            'call_center_staff_id' => 'required|exists:call_center_staff,id',
            'call_center_phone_id' => 'required|exists:call_center_phones,id',
        ]);

        if ($request->fails()) {
            return redirect()->back()->withErrors($request->errors())->withInput();
        }

        $staffPhone = new StaffPhone();
        $staffPhone->call_center_phone_id = $request['call_center_phone_id'];
        $staffPhone->call_center_staff_id = $request['call_center_staff_id'];
        $staffPhone->phone_status = 'Active';
        $staffPhone->assigned_at = Carbon::now();
        $staffPhone->assigned_by = auth()->user()->id;
        $staffPhone->save();
        return redirect()->back()->with('message', 'Staff Phone Added Successfully');
    }
}
