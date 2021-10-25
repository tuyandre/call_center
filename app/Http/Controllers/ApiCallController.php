<?php

namespace App\Http\Controllers;

use App\Models\CallLogs;
use Illuminate\Http\Request;

class ApiCallController extends Controller
{
   public function store(Request $request){

       return response()->json(['calls' => $request->client_phone], 200);
       $check=CallLogs::where('client_phone','=',$request->client_phone)
                        ->where('date','=',$request->date)
                        ->first();
       if (!$check){
           $calls=CallLogs::create([
               'caller_id' => $request->caller_id,
               'client_phone' => $request->client_phone,
               'client_name' => $request->client_name,
               'type' => $request->type,
               'date' => $request->date,
               'duration' => $request->duration,
           ]);
       }
       return response()->json(['calls' => "done"], 200);
   }
}
