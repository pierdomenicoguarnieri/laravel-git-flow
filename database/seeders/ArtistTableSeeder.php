<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artist;

class ArtistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artists = config('artists');
        foreach ($artists as $artist){
          $new_artist = new Artist();
          $new_artist->name = $artist['name'];
          $new_artist->surname = $artist['surname'];
          $new_artist->date_of_birth = $artist['date_of_birth'];
          $new_artist->place_of_birth = $artist['place_of_birth'];
          $new_artist->date_of_death = $artist['date_of_death'];
          $new_artist->profession = implode(' ', $artist['profession']) ;
          $new_artist->art_movement = $artist['art_movement'];
          $new_artist->works = implode(' ',$artist['works']) ;
          $new_artist->biography = $artist['biography'];
          // dd($new_artist);
          $new_artist->save();
        }
    }
}
