<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $table = "attendances";
    protected $fillable=[
        'attendance_date',
        'admin_id',
    ];

    public function user_attendance()
    {
   
        //dd($id);
       return $this->belongsToMany('App\User', 'user_attendances','attendance_id','user_id')
       ->withPivot(
        'present_absent',
        'excuse',
        'attendance_key_amount',
        'verified_date',
        'comment',
       );
    }


    public function admin()
    {
        return $this->belongsTo('App\Admin','admin_id','id');
    }
}
