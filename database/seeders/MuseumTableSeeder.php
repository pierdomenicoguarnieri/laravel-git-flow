<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Museums;

class MuseumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $museums = config('museums');

        foreach($museums as $museum){
          $newMuseum = new Museum();
          $newMuseum->name = $museum['name'];
          $newMuseum->founder = $museum['founder'];
          $newMuseum->construction_date = $museum['construction_date'];
          $newMuseum->number_of_visitors = $museum['number_of_visitors'];
          $newMuseum->number_of_departments = $museum['number_of_departments'];
          $newMuseum->geographic_coordinates = $museum['geographic_coordinates'];
          $newMuseum->save();
        }
    }
}
