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
    Schema::create('artworks', function (Blueprint $table) {
      $table->id();
      $table->string('title');
      $table->year('year')->nullable();
      $table->string('artist')->nullable();
      $table->string('image_path')->nullable();
      $table->string('image_name')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('artworks');
  }
};
