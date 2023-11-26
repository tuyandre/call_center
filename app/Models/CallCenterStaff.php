<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CallCenterStaff extends Model
{
    use HasFactory;

    public function staffPhones():HasMany
    {
        return $this->hasMany(StaffPhone::class);
    }
}
