<?php

use Illuminate\Database\Seeder;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genre = new \App\Genre([
		'name' => 'Rock'
		]);
        $genre->save();

        $genre = new \App\Genre([
		'name' => 'Pop'
		]);
        $genre->save();

        $genre = new \App\Genre([
		'name' => 'Regeton'
		]);
        $genre->save();
    }
}
