<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeysTarget extends Model
{
    protected $table="keys_targets";
    protected $fillable=[
        'cohort_id',
        'target'
    ];
}
