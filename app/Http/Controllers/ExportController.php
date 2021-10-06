<?php

namespace App\Http\Controllers;

use App\Exports\AllReportExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function exportAll($data){
        return Excel::download(new AllReportExport(), 'all_calls_reports.xlsx');

        return response()->json(['users' => json_decode($data)], 200);
    }
    public function exportCustomized(Request $request){
        return response()->json(['users' => $request->all()], 200);
    }
}
