<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'name',
        'email',
        'location_id',
        'plan_id',
        'telephone',

    ];

    public function location(){
        return $this->belongsTo('App\Location');
    }

    public function plan(){
        return $this->belongsTo('App\Plan');
    }
}
