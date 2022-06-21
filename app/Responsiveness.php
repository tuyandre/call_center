<?php


namespace App;


use App\Models\CallLogs;
use Carbon;
use DateInterval;
use DateTime;

class Responsiveness
{
    public function getMissedResponsiveness(){
        $endDate = Carbon\Carbon::now();
        $endDate2 = Carbon\Carbon::now();
        $startDate = $endDate2->firstOfMonth();
        $calls=CallLogs::where('type','=','MISSED')->whereBetween('date', [$startDate, $endDate])->get();
        $times=30;
        $count=0;


        foreach ($calls as $call){
            $time = new DateTime($call->date);
            $time->add(new DateInterval('PT' . $times . 'M'));

            $stamp = $time->format('yyyy-MM-dd hh:mm');
            $check=CallLogs::where('client_phone','=',$call->client_phone)
                ->where('date','>',$call->date)
                ->where('date','<',$stamp)
                ->where('type','!=','MISSED')
                ->whereBetween('date', [$startDate, $endDate])
                ->get();
            if ($check->count()==0){
                $count++;
            }

        }
        return $count;
    }
 public function getPercentage($total,$respo){
        if ($total>0){
            return(($respo*100)/$total);
        }else{
            return 0;
        }
        return(($respo*100)/$total);
 }
    public function getMissedResponsivenessFilter($startDate,$endDate){
        $endDate = $endDate;
        $startDate = $startDate;
        $calls=CallLogs::where('type','=','MISSED')->whereBetween('date', [$startDate, $endDate])->get();
        $times=30;
        $count=0;


        foreach ($calls as $call){
            $time = new DateTime($call->date);
            $time->add(new DateInterval('PT' . $times . 'M'));

            $stamp = $time->format('yyyy-MM-dd hh:mm');
            $check=CallLogs::where('client_phone','=',$call->client_phone)
                ->where('date','>',$call->date)
                ->where('date','<',$stamp)
                ->where('type','!=','MISSED')
                ->whereBetween('date', [$startDate, $endDate])
                ->get();
            if ($check->count()==0){
                $count++;
            }

        }
        return $count;
    }
}
