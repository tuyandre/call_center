<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffPhone extends Model
{
    use HasFactory;


    public function callCenterStaff(){
        return $this->belongsTo(CallCenterStaff::class);
    }

    public function callCenterPhone(){
        return $this->belongsTo(CallCenterPhone::class);
    }

    public function assignedBy(){
        return $this->belongsTo(User::class,'assigned_by');
    }
}
