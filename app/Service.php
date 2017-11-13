<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
    	'intro',
    	'intro_image',
    	'body',
    	'body_image'
    ];
}
