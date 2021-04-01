<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSkill extends Model
{
    protected $table='user_skills';
    protected $fillable=[
        'skill_id',
        'user_id',
        'progress',
    ];
}
