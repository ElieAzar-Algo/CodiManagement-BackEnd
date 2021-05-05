<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table="teams";
    protected $fillable=[
        'stage_id',
        'admin_id',
        'name',
        'max_members'
    ];

    public function teamUsers()
    {
        return $this->belongToMany('App\User','team_users','team_id','user_id')->with('isScrumMaster');
    }
    
}
