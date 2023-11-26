<?php

namespace App\Http\Controllers;

use App\Models\CallRecord;
use Illuminate\Http\Request;

class CallRecordController extends Controller
{

    //
    public function index()
    {
        $callRecords = CallRecord::with(['StaffPhone'=>(function($query){
            $query->with('callCenterStaff');
        })

        ,'callCenterPhone'])->get();
        return view('backend.call_records.index',['callRecords'=>$callRecords]);
    }
}
