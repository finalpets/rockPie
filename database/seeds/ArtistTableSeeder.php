<?php

use Illuminate\Database\Seeder;

class ArtistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artist = new \App\Artist([
		'artist_name' => 'Metallica',
		'letter_id' => 13
		]);
        $artist->save();

        $artist = new \App\Artist([
		'artist_name' => 'Nirvana',
		'letter_id' => 14
		]);
        $artist->save();

        $artist = new \App\Artist([
		'artist_name' => 'Pantera',
		'letter_id' => 20
		]);
        $artist->save();

        $artist = new \App\Artist([
		'artist_name' => 'Judas Priest',
		'letter_id' => 10
		]);
        $artist->save();

        $artist = new \App\Artist([
		'artist_name' => 'Iron Maiden',
		'letter_id' => 6
		]);
        $artist->save();

        $artist = new \App\Artist([
		'artist_name' => 'Jason Becker',
		'letter_id' => 6
		]);
        $artist->save();

        $artist = new \App\Artist([
		'artist_name' => 'Cacophony',
		'letter_id' => 3
		]);
        $artist->save();

        $artist = new \App\Artist([
		'artist_name' => 'Van Halen',
		'letter_id' => 33
		]);
        $artist->save();
    }
}
