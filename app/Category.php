<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = ['name'];

	public function trainings()
	{
		return $this->hasMany('App\Training');
	}
	
    public function subcategories()
    {
    	return $this->hasMany('App\Subcategory');
    }
}
