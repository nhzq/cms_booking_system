<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $dates = ['start_date', 'end_date'];
    protected $fillable = [
    	'category_id',
    	'subcategory_id',
    	'location_id',
    	'start_date',
        'end_date'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function subcategory()
    {
        return $this->belongsTo('App\Subcategory');
    }

    public function location()
    {
    	return $this->belongsTo('App\Location');
    }

}
