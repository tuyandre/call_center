<?php

namespace App\Http\Controllers;

use App\Models\CallLogs;
use Illuminate\Http\Request;

class ApiCallController extends Controller
{
   public function store(Request $request){

//       return response()->json(['calls' => $request->all()], 200);

       $calls=CallLogs::create([
           'caller_id' => $request->caller_id,
           'client_phone' => $request->client_phone,
           'client_name' => $request->client_name,
           'type' => $request->type,
           'date' => $request->date,
           'duration' => $request->duration,
       ]);


       return response()->json(['calls' => $calls], 200);
   }
}
