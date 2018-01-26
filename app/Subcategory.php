<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
	protected $fillable = ['name', 'category_id', 'slug'];

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function trainings()
    {
    	return $this->hasMany('App\Training');
    }
}
