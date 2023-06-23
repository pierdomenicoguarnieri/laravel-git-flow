<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\Artwork;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistsArtworksTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    for($i = 0; $i < 20; $i++){
      $artwork = Artwork::inRandomOrder()->first();

      $artist_id = Artist::inRandomOrder()->first()->id;

      $check_artist = DB::table('artist_artwork')
        ->where('artwork_id', $artwork->id)
        ->where('artist_id', $artist_id)
        ->count();

      if (!$check_artist) {
        $artwork->artists()->attach($artist_id);
      }
    }
  }
}
