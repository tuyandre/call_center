<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CallCenterPhone;
use App\Models\CallCenterStaff;
use App\Models\CallRecord;
use App\Models\StaffPhone;
use Illuminate\Http\Request;

class CallRecordController extends Controller
{

    //api for post call record
    public function postCallRecord(Request $request)
    {
        $calls=$request->all();

        foreach ($calls as $call){
            $check1=CallCenterPhone::where('phone_number',$call['caller_phone'])->first();

            if ($check1) {
                $check2 = StaffPhone::where('call_center_phone_id', $check1->id)
                    ->where('phone_status', 'Active')
                    ->where('returned_at', null)->first();
                $check3 = CallRecord::where('client_phone','=', $call['client_phone'])
                    ->where('date','=', $call['date'])
                    ->first();
                if (!$check3) {
                    if ($check2) {
                        $call_record = CallRecord::create([
                            'staff_phone_id' => $check2->id,
                            'client_phone' => $call['client_phone'],
                            'client_name' => $call['client_name'],
                            'type' => $call['type'],
                            'date' => $call['date'],
                            'duration' => $call['duration'],
                            'call_center_phone_id' => $check1->id,
                            'call_center_staff_id' => $check2->call_center_staff_id,
                        ]);
                    }else{
                    $call_record = CallRecord::create([
                        'client_phone' => $call['caller_phone'],
                        'client_name' => $call['caller_name'],
                        'type' => $call['type'],
                        'date' => $call['date'],
                        'duration' => $call['duration'],
                        'call_center_phone_id' => $check1->id,
//                        'call_center_staff_id' => $check2->call_center_staff_id,
                    ]);
                }
            }
            }
            else{
                return response()->json([
                    'message' => "Not Found",
                    'status' => 'ERROR',
                    'date' => $call,
                ], 200);
            }

        }

        return response()->json([
            'message' => "ASSIGNED",
            'status' => 'SUCCESS',
        ], 200);

    }
}
