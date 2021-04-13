<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $table = "attendances";
    protected $fillable=[
        'attendance_date',
        'cohort_id',
    ];

    public function user_attendance()
    {
   
        // dd(2);
       return $this->belongsToMany('App\User', 'user_attendances','attendance_id','user_id')
    
       ->with('cohort')
       ->withPivot(
        'present_absent',
        'attendance_key_amount',
        'verified_date',
        'comment',
       );
    }


    
}
