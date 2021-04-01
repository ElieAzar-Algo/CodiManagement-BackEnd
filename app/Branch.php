<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Branch extends Model
{
    protected $table = "branches";
    protected $fillable=[
        'branch_name',
        'branch_country',
        'branch_location'
    ];

    public function cohorts()
    {
        return $this->hasMany('App\Cohort','branch_id','id')->with('users');
    }

    public function admins()
    {
        return $this->hasMany('App\Admin','branch_id','id')->where('active_inactive',1);
    }

}

