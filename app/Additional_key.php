<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Additional_key extends Model
{
    protected $table ='additional_keys';
    protected $fillable=[
        'user_id',
        'key',
        'description'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}
