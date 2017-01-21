<?php

use Illuminate\Database\Seeder;

class MusicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    	
        //
        $music = new \App\Music([
        	'artist' => 'Metallica',
        	'album' => 'Master Of puppets',
        	'song' => 'Battery',
        	'track' => 01,
        	'year' => 1986,
        	'genre' => 'Rock',
        	'letter' => 'M',
        	'image' => 'public/music/audio',
        	'url_song' => 'public/music'
        	]);
        $music->save();
        $music = new \App\Music([
        	'artist' => 'Metallica',
        	'album' => 'Master Of puppets',
        	'song' => 'Master Of puppets',
        	'track' => 02,
        	'year' => 1986,
        	'genre' => 'Rock',
        	'letter' => 'M',
        	'image' => 'public/music/audio',
        	'url_song' => 'public/music'
        	]);
        $music->save();
        $music = new \App\Music([
        	'artist' => 'Metallica',
        	'album' => 'Master Of puppets',
        	'song' => 'The Thing That Should Not Be',
        	'track' => 03,
        	'year' => 1986,
        	'genre' => 'Rock',
        	'letter' => 'M',
        	'image' => 'public/music/audio',
        	'url_song' => 'public/music'
        	]);
        $music->save();
        $music = new \App\Music([
        	'artist' => 'Metallica',
        	'album' => 'Master Of puppets',
        	'song' => 'Welcome Home (Sanitarium)',
        	'track' => 04,
        	'year' => 1986,
        	'genre' => 'Rock',
        	'letter' => 'M',
        	'image' => 'public/music/audio',
        	'url_song' => 'public/music'
        	]);
        $music->save();
        $music = new \App\Music([
        	'artist' => 'Metallica',
        	'album' => 'Master Of puppets',
        	'song' => 'Disposable Heroes',
        	'track' => 05,
        	'year' => 1986,
        	'genre' => 'Rock',
        	'letter' => 'M',
        	'image' => 'public/music/audio',
        	'url_song' => 'public/music'
        	]);
        $music->save();
        $music = new \App\Music([
        	'artist' => 'Metallica',
        	'album' => 'Master Of puppets',
        	'song' => 'Leper Messiah',
        	'track' => 06,
        	'year' => 1986,
        	'genre' => 'Rock',
        	'letter' => 'M',
        	'image' => 'public/music/audio',
        	'url_song' => 'public/music'
        	]);
        $music->save();
        $music = new \App\Music([
        	'artist' => 'Metallica',
        	'album' => 'Master Of puppets',
        	'song' => 'Orion',
        	'track' => 07,
        	'year' => 1986,
        	'genre' => 'Rock',
        	'letter' => 'M',
        	'image' => 'public/music/audio',
        	'url_song' => 'public/music'
        	]);
        $music->save();
    }
}