<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{    
	protected $fillable = ['artist_name'];	
	protected $with = ['Letter'];
    public function letter()
    {    	
    	return $this->belongsTo('App\Letter');
    }
    public function album()
    {
    	return $this->hasMany('App\Album');
    }

}
