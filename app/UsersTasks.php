<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersTasks extends Model
{
    protected $table = "users_tasks";
    protected $fillable=[
        'task_id',
        'user_id',
        'admin_id',
        'keys',
        'progress',
        'reviewed',
        'assignment_link',
    ];
    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
    public function admin()
    {
        return $this->belongsTo('App\Admin','admin_id','id');
    }
    public function task()
  {
      return $this->belongsTo('App\Task','task_id','id');
  }
}
