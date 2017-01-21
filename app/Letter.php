<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    public function artists()
    {
    	return $this->hasMany('App\Artist');
    }
}
