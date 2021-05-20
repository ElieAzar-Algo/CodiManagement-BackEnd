<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassKey extends Model
{
    protected $table="class_keys";
    protected $fillable=[
        'cohort_id',
        'stage_id',
        'team',
        'key',
        'description'
    ];
    
}
