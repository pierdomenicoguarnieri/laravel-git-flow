<?php

namespace Database\Seeders;

use App\Models\Artwork;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtworksTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $artworks = config('artworks');

    foreach ($artworks as $artwork){
      $new_artwork = new Artwork();
      $new_artwork->title = $artwork['title'];
      $new_artwork->type = $artwork['type'];
      $new_artwork->description = $artwork['description'];
      $new_artwork->year = $artwork['year'];
      $new_artwork->artist = $artwork['artist'];
      $new_artwork->save();
    }
  }
}
