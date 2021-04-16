<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSkill extends Model
{
    protected $table='user_skills';
    protected $fillable=[
        'skill_id',
        'user_id',
        'stage_id',
        'progress',
    ];

    public function skill()
    {
      return $this->belongsTo('App\Skill','skill_id','id');
    }

    public function user()
    {
      return $this->belongsTo('App\User','user_id','id');
    }

    public function stage()
    {
      return $this->belongsTo('App\Stage','stage_id','id');
    }
}

