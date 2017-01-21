<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{    
    public function letters()
    {
    	return $this->belongsTo('App\Letter');
    }
    public function albums()
    {
    	return $this->hasMany('App\Album');
    }

}
