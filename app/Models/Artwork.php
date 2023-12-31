<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Museum;

class Artwork extends Model
{
  use HasFactory;

  public function artists(){
    return $this->belongsToMany(Artist::class);
  }

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

  public function museum(){
    return $this->belongsTo(Museum::class);
  }
}
