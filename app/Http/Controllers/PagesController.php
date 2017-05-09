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
	public function getArtist(){
		$artists = Artist::all();
		return \Response::json(['artists' => $artists]);
	}
	public function getAlbums($id, Request $request){
		$request->id;
		$albums = Album::join('artists','albums.artist_id','=','artists.id')->where('artists.id',"=",$request->id)->orderBy('artists.artist_name','asc')->select('albums.*')->get();
		//$albums = Album::all();
		return \Response::json(['albums' => $albums]);	

	}
	public function getSongs(Request $request){	
	
	if($request->select_albums == null)
		return;

		$songs = Song::whereIn('album_id',$request->select_albums)->orderBy('track','asc')->get();	
		return \Response::json(['songs' => $songs]);	
	}

	public function getSongDetails(Request $request){	
		if($request->select_song == null)
			return;

		$songs = Song::where('id',$request->select_song)->get();		
		return \Response::json(['songs' => $songs]);
	}

	public function getAlbum_Songs(Request $request){	
	
		if($request->album_id == null)
			return;

		$album_result_array = array();


        array_push($album_result_array, $request->album_id);

		$songs = Song::whereIn('album_id',$album_result_array)->orderBy('track','asc')->get();	
		return \Response::json(['songs' => $songs]);	
	}

}
