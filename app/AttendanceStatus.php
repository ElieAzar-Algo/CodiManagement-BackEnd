<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttendanceStatus extends Model
{
    protected $table = "attendance_statuses";
    protected $fillable=[
        'status',
    ];
}
