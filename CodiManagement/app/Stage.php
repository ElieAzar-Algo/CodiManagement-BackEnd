<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    protected $table="stages";
    protected $fillable=[
        'cohort_code',
        'prairie',
        'stage_name',
        'start_date',
        'end_date',
        'active_inactive'
    ];
}
