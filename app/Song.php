<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
	protected $with = ['Album'];
    public function album()
    {
    	return $this->belongsTo('App\Album');
    }    
}
