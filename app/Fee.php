<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    protected $fillable = [
    	'event_id',
    	'total'
    ];

    public function event()
    {
    	return $this->belongsTo('App\Event');
    }
}
