<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //$this->call(MusicTableSeeder::class);
         $this->call(LetterTableSeeder::class);
         $this->call(GenreTableSeeder::class);
         // $this->call(ArtistTableSeeder::class);
         // factory(App\Album::class, 100)->create();
         // factory(App\Song::class, 200)->create();

    }
}
