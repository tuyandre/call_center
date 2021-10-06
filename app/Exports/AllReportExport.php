<?php

namespace App\Exports;

use App\Models\CallLogs;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use SebastianBergmann\Timer\Duration;

class AllReportExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
//    protected $request;
//
//    function __construct(Request $request) {
//        $this->request = $request;
//    }
    public function headings(): array
    {
        return [
            'Count',
            'Caller Id',
            'Client Phone',
            'Client Name',
            'Type',
            'Date',
            'Duration',
        ];
    }
    public function map($calls): array
    {
        return [
            $calls->caller_id,
            $calls->client_phone,
            $calls->client_name,
            $calls->type,
            Date::dateTimeToExcel($calls->date),
            Duration::dateTimeToExcel($calls->duration),
        ];
    }
    public function collection()
    {
//        return CallLogs::whereBetween('date',[$this->request['start_date'],$this->request['end_date']])->get();
        return CallLogs::all();
        /*you can use condition in query to get required result
         return Bulk::query()->whereRaw('id > 5');*/
    }
}
