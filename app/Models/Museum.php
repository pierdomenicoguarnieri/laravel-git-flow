<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Artwork;

class Museum extends Model{
  use HasFactory;

  public function artworks(){
    $this->hasMany(Artwork::class);
  }
  
  protected $fillable = [
    'name',
    'founder',
    'construction_date',
    'number_of_visitors',
    'number_of_departments',
    'geographic_coordinates',
  ];
}
