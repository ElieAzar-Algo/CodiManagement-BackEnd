<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = "branches";
    protected $fillable=[
        'branch_name',
        'branch_country',
        'branch_location'
    ];
}
