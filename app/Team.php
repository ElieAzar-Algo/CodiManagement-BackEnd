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
        return $this->belongsToMany('App\User','team_users','team_id','user_id')->withPivot('id','isScrumMaster');
    }

    public function admin()
    {
        return $this->belongsTo('App\Admin','admin_id','id');
    }
    
}
