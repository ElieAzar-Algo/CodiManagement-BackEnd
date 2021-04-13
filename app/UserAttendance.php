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
       
        'attendance_key_amount',
        'verified_date',
        'comment',
    ];

    public function user()
    {
        return $this->hasOne('App\User','id','user_id');
    }

    public function attendanceStatus()
    {
        return $this->hasOne('App\AttendanceStatus','id','present_absent');
    }
}
