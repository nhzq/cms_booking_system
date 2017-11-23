<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    protected $fillable = [
    	'vision',
    	'mission',
    	'body',
    	'image_1',
    	'image_2'
    ];
}
