<?php

namespace App\Http\Controllers;

use App\Models\CallCenterPhone;
use App\Models\CallCenterStaff;
use App\Models\StaffPhone;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StaffPhoneController extends Controller
{
    //index
    public function index()
    {
        $phones = CallCenterPhone::whereDoesntHave('staffPhones', function ($query) {
            $query->where('phone_status', 'Active');
        })->where('phone_status', 'Working')->get();

        $staffs = CallCenterStaff::where('status', 'Active')->get();

        $data= StaffPhone::with('callCenterStaff','callCenterPhone','assignedBy')->get();
        return view('backend.staffPhoneList', [
            'staff_phones' => $data,
            'phones' => $phones,
            'staffs' => $staffs
        ]);
    }

    //store
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'call_center_staff_id' => 'required|exists:call_center_staff,id',
            'call_center_phone_id' => 'required|exists:call_center_phones,id',
        ]);

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors())->withInput();
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
