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
        Schema::create('museums', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('founder', 50);
            $table->string('slug')->unique();
            $table->date('construction_date');
            $table->mediumInteger('number_of_visitors')->nullable();
            $table->tinyInteger('number_of_departments')->nullable();
            $table->string('geographic_coordinates');
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
        Schema::dropIfExists('museums');
    }
};
