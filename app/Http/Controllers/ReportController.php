<?php

namespace App\Http\Controllers;

use App\Models\CallLogs;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('backend.report');
    }
    public function getCategorized(Request $request){
        $calls=CallLogs::where('type','=',$request->input('category'))
        ->whereBetween('date',[$request->input('start_date'),$request->input('end_date')])->get();
        return view('backend.customized_reports',['calls'=>$calls,'cat'=>$request->input('category'),'start_date'=>$request->input('start_date'),'end_date'=>$request->input('end_date')])->with('calss',$calls);

    }
    public function getAllLogs(Request $request){

        $calls=CallLogs::whereBetween('date',[$request->input('start_date'),$request->input('end_date')])->get();
        return view('backend.report_list',['calls'=>$calls,'start_date'=>$request->input('start_date'),'end_date'=>$request->input('end_date')])->with('calss',$calls);
    }
}
