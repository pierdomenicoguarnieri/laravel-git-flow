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
}
