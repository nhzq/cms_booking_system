<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['name'];

    public function trainings()
    {
    	return $this->hasMany('App\Training');
    }
}
