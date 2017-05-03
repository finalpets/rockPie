<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function () {
//     return view('rockPie');
// });

Route::resource('/','AlbumController');
Route::resource('update','fileManagerController');
Route::resource('ajaxText','AlbumController');
Route::get('settings', 'PagesController@getSettings');
Route::get('search', ['uses' => 'PagesController@getArtist' , 'as' => 'search.artist']);
Route::get('search/{id}',['uses' => 'PagesController@getAlbums', 'as' => 'search.album']);
Route::get('search_songs',['uses' => 'PagesController@getSongs', 'as' => 'search.songs']);
Route::get('search_songs_detail',['uses' => 'PagesController@getSongDetails', 'as' => 'search.songdetail']);
