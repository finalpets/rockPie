<?php

namespace App\Http\Controllers;
ini_set('memory_limit', '-1');

use Illuminate\Http\Request;
use App\Album;
use App\Genre;
use App\Artist;
use App\Letter;
use App\Song;

use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    //
    public function getSettings(){
		$letters = Letter::all();
		return view('pages.settings')->with(['letters' => $letters]);
	}
}
