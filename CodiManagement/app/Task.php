<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = "tasks";
    protected $fillable=[
        'stage_id',
        'task_name',
        'task_link',
        'task_type',
        'key_range',
        'is_teamwork',
        'start_date',
        'end_date',
    ];
}
