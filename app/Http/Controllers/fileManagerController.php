<?php

namespace App\Http\Controllers;
ini_set('max_execution_time', -1);
use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem\Filesystem;

use Storage;
use App\Library\PhpId3\Id3TagsReader;
use App\Library\Utils\UtilsLibrary;
use App\Artist;
use App\Letter;
use App\Album;
use App\Song;


class fileManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getMusicPath($letter){

        $files =Storage::disk('letter'.'_'.$letter)->allfiles();
        return $files;
    }
    public function index()
    {
        dd("HELLO");
       // return view('settings.index');
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {        

        //
      //Supported files for the program
        $supported_files = array(
            'mp3',
            'jpg',
            'jpeg',
            'png'
        );
        //Supported musics files for show in the Album
        $supported_music = array(
            'mp3',
            'mp4'
        );
         $supported_img = array(
            'png',
            'jpg'
        );

        //$files = Storage::allFiles();
        //$exists = Storage::disk('public')->exists('05 - Tifa no Theme (Piano Version).mp3');
        //dd($exists);
        //05 - Tifa no Theme (Piano Version)
        //$id3 = new Id3TagsReader(fopen("C:\\Users\\peter.leyva\\Documents\\laravel-projects\\rockPie\\public\\music\\01 - Hit The Lights.mp3", "rb"));
        //$files = Storage::disk('public')->get('01 - Hit The Lights.mp3');
       // dd(public_path().'/music/'.'01 - Hit The Lights.mp3');


        //$id3 = new Id3TagsReader(fopen(public_path().'/music/'.'01 - Hit The Lights.mp3', 'rb'));       

        //$id3->readAllTags();

        //dd($id3);
      
            //$files = Storage::disk('public')->allfiles();
        $files = $this->getMusicPath($request->letter);
        // if($request->letter == 'A')
        // {    
        //    // $files =Storage::disk('letter_A')->allfiles();
        //     $letter = "A";
        //     $files = $this->getMusicPath($request->letter);
        // }
        // else
        //     $files = Storage::disk('public')->allfiles();

        if($request->letter != "ALL")
        {
            $letter = $request->letter;
            foreach ($files as $file) {
                $completeURL = $letter."/";
                $fullstring = $file;
                $ext = strtolower(pathinfo($fullstring, PATHINFO_EXTENSION));
                if (in_array($ext, $supported_files)) {
                    //print_r('ext:'.$ext);
                    //$parsedArtist = strstr($email, '@', true);
                    $parsedArtist = strstr($fullstring, '/', true);
                    //dd($parsedArtist);

                    //$parsedArtist = UtilsLibrary::get_string_between($fullstring, '/', '/');
                    
                    $album = UtilsLibrary::get_string_between($fullstring, '/', '/');
                    //dd($album);
                    //$parsedAlbum = UtilsLibrary::get_string_between($album, '/', '/');

                    $song = substr( $fullstring, strlen($album) + strlen($parsedArtist) + 2);
                    //dd($song);
                    $song_withOut_mp3 = str_replace(".mp3", "",$song);
                    $song_withOut_mp3 = str_replace(".Mp3", "",$song_withOut_mp3);
                    $song_withOut_mp3 = str_replace(".MP3", "",$song_withOut_mp3);
                    $song_withOut_mp3 = str_replace(".mP3", "",$song_withOut_mp3);
                   // dd($song_withOut_mp3);


                    $cover = substr( $fullstring, 0,strlen($parsedArtist)+strlen($album) + 1 ); //get the cover of the album
                    //dd($cover);
                    //$cover = substr( $fullstring, strlen($parsedArtist)+ strlen($album) + strlen($parsedArtist) + 4);
                    $cover = $cover.'/cover'; 
                    //dd($cover);

                    //$letter = $file[0];
                    //dd($completeURL);
                    /*ARTIST SECTION*/
                    $artistExist = false;
                    $check_allArtists = Artist::all();
                    foreach ($check_allArtists as $check_allArtist) {
                        if($check_allArtist->artist_name == $parsedArtist)
                        {
                            $artistExist = true;
                            //dd("Exist");
                        }
                    }
                    if($artistExist != true)
                    {
                        $db_artist = new Artist;
                        $db_artist->artist_name = $parsedArtist;

                        $db_letters = Letter::all();
                         foreach ($db_letters as $db_letter) {
                            if($db_letter->letter == $letter)
                            {                    
                               // print_r('Succes:'.$db_letter->letter);
                                $db_artist->letter_id = $db_letter->id;
                            }
                         }
                         $db_artist->save();
                    }

                    /*ALBUM SECTION*/
                    $albumExist = false;
                    //$check_allAlbums = Album::all();
                    $check_allAlbums = Album::join('artists','albums.artist_id','=','artists.id')->where('artists.artist_name',"=",$parsedArtist)->orderBy('artists.artist_name','asc')->select('albums.*')->get();
                    
                    foreach ($check_allAlbums as $check_allAlbum) {
                        if($check_allAlbum->album_name == $album)
                        {
                            $albumExist = true;
                        }
                    }
                    if($albumExist != true)
                    {
                        $db_album = new Album;
                        $db_album->album_name = $album;
                        $db_album->year = 0;
                        $db_album->genre_id = 1;
                        $db_album->img =  $completeURL.$cover;
                        $check_allArtists = Artist::all();
                        foreach ($check_allArtists as $check_allArtist) {
                            if($check_allArtist->artist_name == $parsedArtist)
                            {
                                $db_album->artist_id = $check_allArtist->id;
                            }
                        }
                        $db_album->save();
                    }

                    /*SONG SECTION*/

                    $url_songExist = false;
                    $check_allSongs = Song::all();
                    foreach ($check_allSongs as $check_allSong) {

                        if($check_allSong->song_url == $completeURL.$fullstring)
                        {
                            $url_songExist = true;
                        }
                    }
                    if (in_array($ext, $supported_music)) //Only Add Mp3 songs not Jpg npg for the Album
                        if($url_songExist != true)
                        {                
                            $db_song = new Song;    
                            $db_song->track = 00;
                            $db_song->title = $song_withOut_mp3;
                            //dd($completeURL.$fullstring);
                            $db_song->song_url = $completeURL.$fullstring;
                            $check_allAlbums = Album::all();
                            foreach ($check_allAlbums as $check_allAlbum) {
                                if($check_allAlbum->album_name == $album)
                                {
                                    $db_song->album_id = $check_allAlbum->id;
                                }
                            }                
                            $db_song->save();
                        }
                } //End supported 
            }
        } //end if letter is A                    
        else 
        {
            foreach ($files as $file) {
                //dd($file);

               // dd(strlen($file));
                $fullstring = $file;
                $ext = strtolower(pathinfo($fullstring, PATHINFO_EXTENSION));
                if (in_array($ext, $supported_files)) 
                {
                    $parsedArtist = UtilsLibrary::get_string_between($fullstring, '/', '/');
                    
                    $album = substr( $fullstring, strlen($parsedArtist) + 2);
                    //dd($album);
                    $parsedAlbum = UtilsLibrary::get_string_between($album, '/', '/');

                    $song = substr( $fullstring, strlen($parsedAlbum) + strlen($parsedArtist) + 4);
                    //remove MP3 in the SONG NAME
                    $song_withOut_mp3 = str_replace(".mp3", "",$song);
                    $song_withOut_mp3 = str_replace(".Mp3", "",$song_withOut_mp3);
                    $song_withOut_mp3 = str_replace(".MP3", "",$song_withOut_mp3);
                    $song_withOut_mp3 = str_replace(".mP3", "",$song_withOut_mp3);
                    //dd($song2);
                    //$cover = $fullstring;
                   // $cover = $parsedArtist;
                    $cover = substr( $fullstring, 0,strlen($parsedArtist)+strlen($parsedAlbum)+3 ); //get the cover of the album
                    //$cover = substr( $fullstring, strlen($parsedArtist)+ strlen($album) + strlen($parsedArtist) + 4);
                    $cover = $cover.'/cover'; 
                    //print_r('Cover":'.$cover);

                    // print_r('Character1:'.strlen($parsedArtist));
                    // print_r('Character2:'.strlen($parsedAlbum));

                    //$parsedSong = UtilsLibrary::get_string_between($song, '/', '/');

                    // print_r('Artist:'.$parsedArtist);  
                    // print_r('Album:'.$parsedAlbum); 
                    // print_r('Song:'.$song_withOut_mp3); 
                    $letter = $file[0];

                    /*ARTIST SECTION*/
                    $artistExist = false;
                    $check_allArtists = Artist::all();
                    foreach ($check_allArtists as $check_allArtist) {
                        if($check_allArtist->artist_name == $parsedArtist)
                        {
                            $artistExist = true;
                        }
                    }
                    //dd($artistExist);
                    if($artistExist != true)
                    {
                        $db_artist = new Artist;
                        $db_artist->artist_name = $parsedArtist;

                        $db_letters = Letter::all();
                         foreach ($db_letters as $db_letter) {
                            if($db_letter->letter == $letter)
                            {                    
                                //print_r('Succes:'.$db_letter->letter);
                                $db_artist->letter_id = $db_letter->id;
                            }
                         }
                         $db_artist->save();
                    }
                    //dd($artistExist);
                    /*ALBUM SECTION*/
                    $albumExist = false;
                    //$check_allAlbums = Album::all();
                    $check_allAlbums = Album::join('artists','albums.artist_id','=','artists.id')->where('artists.artist_name',"=",$parsedArtist)->orderBy('artists.artist_name','asc')->select('albums.*')->get();
                    foreach ($check_allAlbums as $check_allAlbum) {
                        if($check_allAlbum->album_name == $parsedAlbum)
                        {
                            $albumExist = true;
                        }
                    }
                    if($albumExist != true)
                    {
                        $db_album = new Album;
                        $db_album->album_name = $parsedAlbum;
                        $db_album->year = 0;
                        $db_album->genre_id = 1;
                        $db_album->img =  $cover;
                        $check_allArtists = Artist::all();
                        foreach ($check_allArtists as $check_allArtist) {
                            if($check_allArtist->artist_name == $parsedArtist)
                            {
                                $db_album->artist_id = $check_allArtist->id;
                            }
                        }
                        $db_album->save();
                    }
                    //dd($artistExist);
                    /*SONG SECTION*/

                    $url_songExist = false;
                    $check_allSongs = Song::all();
                    foreach ($check_allSongs as $check_allSong) {

                        if($check_allSong->song_url == $fullstring)
                        {
                            $url_songExist = true;
                        }
                    }
                    if (in_array($ext, $supported_music)) //Only Add Mp3 songs not Jpg npg for the Album
                        if($url_songExist != true)
                        {                
                            $db_song = new Song;    
                            $db_song->track = 00;
                            $db_song->title = $song_withOut_mp3;
                            $db_song->song_url = $fullstring;
                            $check_allAlbums = Album::all();
                            foreach ($check_allAlbums as $check_allAlbum) {
                                if($check_allAlbum->album_name == $parsedAlbum)
                                {
                                    $db_song->album_id = $check_allAlbum->id;
                                }
                            }                
                            $db_song->save();
                        }
                }
            }
        }//endif 
        if($request->ajax()){
            
            $response = array(
            'status' => 'success',
            'msg' => 'Setting created successfully',
            'letter' => $request->letter,
            );

            return \Response::json(['response' => $response]);
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd("HELLO2");
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
    public function destroy(Request $request, $id)
    {

        if($id == "1")
        {
            print_r("request id:".$request->letter_id);
            $check_allAlbums = Album::join('artists','albums.artist_id','=','artists.id')->where('artists.letter_id',"=","3")->select('albums.*')->get();


            $album_result_array = array();


                    foreach ($check_allAlbums as $album) {
                       print_r($album->id."\n");
                        echo '<br/>';
                       array_push($album_result_array, $album->id);
                       //array_push($artist_result_array, $album->artist_id);
                   
                }
                $songs = Song::whereIn('album_id',$album_result_array);

                

                $check_allAlbums = Album::join('artists','albums.artist_id','=','artists.id')->where('artists.letter_id',"=","3")->select('albums.*');

             //$songs->album()->detach();
            $check_allAlbums->delete();
            $songs->delete();

            // foreach ($check_allAlbums as $check_allAlbum) {
            //         print_r("ALBUM: \n".$check_allAlbum->album_name);    
            //         echo '<br/>';
                                
            //         }

        }
        else
            print_r("id:".$id);

       // $check_allAlbums->delete();
        //dd("DESTOY");
    }
}
