<?php

namespace App\Http\Controllers;

use App\Models\CallLogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
