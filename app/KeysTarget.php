<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeysTarget extends Model
{
    protected $table="keys_targets";
    protected $fillable=[
        'stage_id',
        'target'
    ];
}
