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

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {         
        // $albums = Album::orderBy('id','asc')->offset(0)->limit(16)->get();   
        // $songs = Song::orderBy('track','asc')->get();
        // $artists = Artist::orderBy('artist_name','asc')->get();       

        //$users = Album::paginate();
        //dd($users->nextPageUrl());
       //  foreach($albums as $album){

       //                  foreach($artists as $artist){
                            
       //                    if($album->artist->artist_name == $artist->artist_name)
       //                      {    
       //                          $artist->letter->letter;
       //                          //dd( $artist->letter->letter);
       //                      }

       //                  }
       // }
        // foreach($albums as $al)     
        // {
        //     dd($al->genres);
        // }

        if($request->ajax()){           
            $albums = Album::orderBy('id','asc')->offset($request->offset)->limit(16)->get();   
            $songs = Song::orderBy('track','asc')->get();
            $artists = Artist::orderBy('artist_name','asc')->get();              
         //   dd($request->stream_active);

            $response = array(
            'status' => 'success',
            'msg' => 'Setting created successfully',
            );

            return \Response::json(['albums' => $albums ,'songs' => $songs, 'artists' => $artists]);

            }
         return view('rockPie');
       //return view('rockPie')->with('albums',$albums)->with('songs',$songs)->with('artists',$artists);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
