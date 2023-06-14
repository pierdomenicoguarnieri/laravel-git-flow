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
      Schema::create('artists', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('surname');
        $table->date('date_of_birth');
        $table->date('date_of_death')->nullable();
        $table->string('place_of_birth');
        $table->string('place_of_death')->nullable();
        $table->string('profession');
        $table->string('art_movement');
        $table->text('works');
        $table->text('biography')->nullable();
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
      Schema::dropIfExists('artists');
    }
};
