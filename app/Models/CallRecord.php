<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CallRecord extends Model
{
    use HasFactory;
    protected $table = 'call_records';
    protected $fillable = [
        'call_center_phone_id',
        'staff_phone_id',
        'date',
        'duration',
        'type',
        'client_phone',
        'client_name',
    ];

    public function callCenterPhone(){
        return $this->belongsTo(CallCenterPhone::class);
    }

    public function StaffPhone(){
        return $this->belongsTo(StaffPhone::class);
    }

    public function callCenterStaff(){
        return $this->belongsTo(CallCenterStaff::class);
    }
}
