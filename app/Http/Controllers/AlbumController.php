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
        if($request->letter_id == 'LA')
            $letter_id = 1;
        else
            if($request->letter_id == 'LB')
                $letter_id = 2;
            else
                if($request->letter_id == 'LC')
                    $letter_id=3;
                else
                    if($request->letter_id == 'LD')
                        $letter_id=4;
                    else
                        if($request->letter_id == 'LE')
                            $letter_id=5;
                        else
                            if($request->letter_id == 'LF')
                                $letter_id=6;
                            else
                                if($request->letter_id == 'LG')
                                    $letter_id=7;
                                else
                                    if($request->letter_id == 'LH')
                                        $letter_id=8;
                                    else
                                        if($request->letter_id == 'LI')
                                            $letter_id=9;
                                        else
                                            if($request->letter_id == 'LJ')
                                                $letter_id=10;
                                            else
                                                if($request->letter_id == 'LK')
                                                    $letter_id=11;
                                                else
                                                    if($request->letter_id == 'LL')
                                                        $letter_id=12;
                                                    else
                                                        if($request->letter_id == 'LM')
                                                            $letter_id=13;
                                                        else
                                                            if($request->letter_id == 'LN')
                                                                $letter_id=14;
                                                            else
                                                                if($request->letter_id == 'LO')
                                                                    $letter_id=15;
                                                                else
                                                                    if($request->letter_id == 'LP')
                                                                        $letter_id=16;
                                                                    else
                                                                        if($request->letter_id == 'LQ')
                                                                            $letter_id=17;
                                                                        else
                                                                            if($request->letter_id == 'LR')
                                                                                $letter_id=18;
                                                                            else
                                                                                if($request->letter_id == 'LS')
                                                                                    $letter_id=19;
                                                                                else
                                                                                    if($request->letter_id == 'LT')
                                                                                        $letter_id=20;
                                                                                    else
                                                                                        if($request->letter_id == 'LU')
                                                                                            $letter_id=21;
                                                                                        else
                                                                                            if($request->letter_id == 'LV')
                                                                                                $letter_id=22;
                                                                                            else
                                                                                                if($request->letter_id == 'LW')
                                                                                                    $letter_id=23;
                                                                                                else
                                                                                                    if($request->letter_id == 'LX')
                                                                                                        $letter_id=24;
                                                                                                    else
                                                                                                        if($request->letter_id == 'LY')
                                                                                                            $letter_id=25;
                                                                                                        else
                                                                                                            if($request->letter_id == 'LY')
                                                                                                                $letter_id=26;

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
             //$albums = Album::all();
             // $albums->load(['artists' => function($query)
             // {
             //    $query->orderBy('letter_id', 'asc')->offset($request->offset)->limit(16)->get();
             // }]);       
            if($request->letter_id == 'LALL')
            {

            
                 $albums = Album::join('artists','albums.artist_id','=','artists.id')
                 ->orderBy('artists.artist_name','asc')->select('albums.*')->offset($request->offset)->limit(10)->get();
                //$albums = Album::orderBy('id','asc')->offset($request->offset)->limit(16)->get();   
                $songs = Song::orderBy('track','asc')->get();
                $artists = Artist::orderBy('artist_name','asc')->get();              
             //   dd($request->stream_active);

                $response = array(
                'status' => 'success',
                'msg' => 'Setting created successfully',
                'letter_id' => $request->letter_id,
                );

                return \Response::json(['albums' => $albums ,'songs' => $songs, 'artists' => $artists , 'letter_id' => $request->letter_id]);
            }
            else
                //if($request->letter_id == 'LA')
                {
                    $albums = Album::join('artists','albums.artist_id','=','artists.id')->where('artists.letter_id',"=",$letter_id)->orderBy('artists.artist_name','asc')->select('albums.*')->offset($request->offset)->limit(10)->get();
                    //$albums = Album::orderBy('id','asc')->offset($request->offset)->limit(16)->get();   
                    $songs = Song::orderBy('track','asc')->get();
                    $artists = Artist::orderBy('artist_name','asc')->get();              
                 //   dd($request->stream_active);

                    $response = array(
                    'status' => 'success',
                    'msg' => 'Setting created successfully',
                    'letter_id' => $request->letter_id,
                    );

                    return \Response::json(['albums' => $albums ,'songs' => $songs, 'artists' => $artists , 'letter_id' => $request->letter_id]);

                }
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
