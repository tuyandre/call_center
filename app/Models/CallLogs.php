<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CallLogs extends Model
{
    use HasFactory;
    protected $fillable = [
        'caller_id',
        'client_phone',
        'client_name',
        'type',
        'date',
        'duration',
    ];
}
