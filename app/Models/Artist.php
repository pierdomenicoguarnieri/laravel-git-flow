<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
    'surname',
    'date_of_birth',
    'date_of_death',
    'place_of_birth',
    'place_of_death',
    'profession',
    'art_movement',
    'works',
    'biography'
  ];
}
