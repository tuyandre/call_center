<?php

namespace App\Http\Controllers;

use App\Models\CallRecord;
use Illuminate\Http\Request;

class CallRecordController extends Controller
{

    //
    public function index(Request $request)
    {
        $callRecords = CallRecord::with(['StaffPhone'=>(function($query){
            $query->with('callCenterStaff');
        })

        ,'callCenterPhone'])
            ->when($request->has('start_date') && $request->has('end_date'),function($query) use ($request){
                $query->whereBetween('date',[$request->start_date,$request->end_date]);
            })
            ->when($request->has('start_date') ,function($query) use ($request){
                $query->where('date','>=',$request->start_date);
            })
            ->when($request->has('end_date') ,function($query) use ($request){
                $query->where('date','<=',$request->end_date);
            })
            ->when($request->has('type'),function($query) use ($request){
                $query->where('type',$request->type);
            })

            ->get();
        return view('backend.call_records.index',['callRecords'=>$callRecords]);
    }
}
