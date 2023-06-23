<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('artist_artwork', function (Blueprint $table) {
      $table->unsignedBigInteger('artist_id');
      $table->foreign('artist_id')
        ->references('id')
        ->on('artists')
        ->cascadeOnDelete();

      $table->unsignedBigInteger('artwork_id');
      $table->foreign('artwork_id')
        ->references('id')
        ->on('artworks')
        ->cascadeOnDelete();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('artist_artwork');
  }
};
