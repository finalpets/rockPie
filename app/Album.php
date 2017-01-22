<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{    
	protected $fillable = ['album','year','genre_id','img','artist_id'];
	public function genre()
	{		
		return $this->belongsTo('App\Genre');
	}
	public function artist()
	{
		return $this->belongsTo('App\Artist');
	}
	public function song()
	{
		return $this->hasMany('App\Song');
	}
}
