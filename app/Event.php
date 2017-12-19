<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
    	'name',
        'address',
        'reg_no',
        'phone',
        'email',
        'website',
        'person',
        'position',
        'training_id',
        'status'
    ];

    public function training()
    {
    	return $this->belongsTo('App\Training');
    }

    public function participants()
    {
    	return $this->hasMany('App\Participant');
    }

    public function fee()
    {
        return $this->hasOne('App\Fee');
    }
}
