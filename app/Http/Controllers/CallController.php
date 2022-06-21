<?php

namespace App\Http\Controllers;

use App\Models\CallLogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CallController extends Controller
{
    public function allCalls(){
        return view('backend.allCalls');
    }
    public function getAllCalls(){
        if (Auth::check()){
            $calls=CallLogs::all();
            return response()->json(['calls' => $calls], 200);
        }else{
            return view('welcome');
        }

    }
    public function missedCalls(){
        return view('backend.missedCalls');
    }
    public function getMissedCalls(){
        if (Auth::check()){
            $calls=CallLogs::where('type','=','MISSED')->get();
            return response()->json(['calls' => $calls], 200);
        }else{
            return view('welcome');
        }

    }
    public function incomingCalls(){
        return view('backend.incomingCalls');
    }
    public function getIncomingCalls(){
        if (Auth::check()){
            $calls=CallLogs::where('type','=','INCOMING')->get();
            return response()->json(['calls' => $calls], 200);
        }else{
            return view('welcome');
        }

    }
    public function outgoingCalls(){
        return view('backend.outgoingCalls');
    }
    public function getOutgoingCalls(){
        if (Auth::check()){
            $calls=CallLogs::where('type','=','OUTGOING')->get();
            return response()->json(['calls' => $calls], 200);
        }else{
            return view('welcome');
        }

    }
    public function callDetail($id){
        return view('backend.callDetail',["call"=>$id])->with("call",$id);

    }
    public function getCallDetail($id){
        if (Auth::check()){
            $calls=CallLogs::where('client_phone','=',$id)->get();
            return response()->json(['calls' => $calls], 200);
        }else{
            return view('welcome');
        }

    }
    public function FilterDate(Request $request){
//        $data=array('startDate'=>$request['start_date'], 'endDate'=>$request['end_date']);

        return view('dashboard2',['start_data'=>$request['start_date'],'end_date'=>$request['end_date']]);


    }
    public function allCallsPagination()
    {
//        $data = CallLogs::paginate(20);
        $data = DB::table('call_logs')->orderBy('date', 'desc')->paginate(20);
        return view('backend.allCallsPagination',compact('data'));
    }
}
