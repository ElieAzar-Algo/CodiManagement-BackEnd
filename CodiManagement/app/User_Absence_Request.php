<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Absence_Request extends Model
{
   
    protected $table = "user__absence__requests";
    protected $fillable=[
        'user_id',
        'absence_reason',
        'absence_requested_date',
        'absence_start_date',
        'absence_end_date',
        'absence_approved',
    ];
    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}
