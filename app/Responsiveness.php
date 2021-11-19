<?php


namespace App;


use App\Models\CallLogs;
use DateInterval;
use DateTime;

class Responsiveness
{
    public function getMissedResponsiveness(){
        $calls=CallLogs::where('type','=','MISSED')->get();
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
                ->get();
            if ($check->count()==0){
                $count++;
            }

        }
        return $count;
    }
 public function getPercentage($total,$respo){
        return(($respo*100)/$total);
 }
}
