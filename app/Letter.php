<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
	protected $fillable = ['letter'];
	
    public function artist()
    {
    	return $this->hasMany('App\Artist');
    }
}
