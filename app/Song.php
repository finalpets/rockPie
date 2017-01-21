<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    public function albums()
    {
    	$this->belongsTo('App\Album');
    }    
}
