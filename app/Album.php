<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{    
	protected $fillable = ['album','year','genre_id','img','artist_id'];
	public function genres()
	{
		$this->belongsTo('App\Genre');
	}
	public function artists()
	{
		$this->belongsTo('App\Artist');
	}
	public function songs()
	{
		$this->hasMany('App\Song');
	}
}