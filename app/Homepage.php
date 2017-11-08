<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    protected $fillable = [
    	'company_name', 
    	'header_image', 
    	'headline',
    	'headline_brief',
    	'services_brief',
    	'service_1',
    	'service_2',
    	'service_3',
    	'service_4',
    	'phone',
    	'email'
    ];
}
