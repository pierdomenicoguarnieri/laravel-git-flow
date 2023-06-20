<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
  use HasFactory;

  protected $fillable = [
    'title',
    'type',
    'description',
    'year',
    'artist',
    'image_path',
    'profession',
    'image_name',
  ];
}
