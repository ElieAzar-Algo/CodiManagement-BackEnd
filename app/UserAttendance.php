<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAttendance extends Model
{
    
    protected $table = "user_attendances";
    protected $fillable=[
        'user_id',
        'attendance_id',
        'present_absent',
        'excuse',
        'attendance_key_amount',
        'verified_date',
        'comment',
    ];
}
