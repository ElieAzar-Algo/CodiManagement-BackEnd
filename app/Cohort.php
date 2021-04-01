<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cohort extends Model
{
    protected $table = "cohorts";
    protected $fillable=[
        'branch_id',
        'cohort_code',
        'start_date',
        'end_date',
    ];

    public function users()
    {
        return $this->hasMany('App\User','cohort_code','id');
    }

    public function deleteHasRelations()
    {
        //delete all hasMany and hasOne data that related to the Cohort data deleted
        $this->users()->delete();

        return parent::delete();
    }
}
