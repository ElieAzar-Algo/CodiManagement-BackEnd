<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use App\Skill;

class User extends Authenticatable implements JWTSubject
{
  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'cohort_code',
      'user_first_name', 
      'user_last_name', 
      'email', 
      'password', 
      'user_phone_number', 
      'user_emergency_number', 
      'user_birth_date', 
      'user_nationality', 
      'user_gender',
      'user_city',
      'user_address',
      'user_avatar',
      'user_discord_id',
      'user_security_level',
      'active_inactive',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'password', 'remember_token',
  ];
  
  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
      'email_verified_at' => 'datetime',
  ];
    public function cohort()
    {
      return $this->belongsTo('App\Cohort','cohort_code','id');
    }

     public function stage()
    {
      return $this->belongsTo('App\Stage','cohort_code','cohort_code')->with('task');
    }

    public function skill()
    {
      return $this->belongsToMany('App\Skill','user_skills','user_id','skill_id')
      ->withPivot('progress','stage_id');
    }
    // public function skill_stage_user()
    // {
    //     return $this->belongsToMany(Skill::class, 'user_skills');
    // }

    public function stage_skill()
    {
      return $this->belongsToMany('App\Stage','user_skills','user_id','stage_id');
      
    }
  



    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    public function setPasswordAttribute($password)
    {
        if ( !empty($password) ) {
            $this->attributes['password'] = bcrypt($password);
        }
    }    
  }