<?php

namespace Database\Migrations;

use TheFramework\App\Schema;

class Migration_2026_01_30_073510_CreateCarGalleriesTable
{
    public function up()
    {
        Schema::create('car_galleries', function ($table) {
            $table->increments('id');
            $table->string('uid', 36)->unique();

            $table->string('uid_mobil', 36);
            $table->string('photo')->nullable();

            $table->timestamps();

            $table->foreign('uid_mobil')->references('uid')->on('cars')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('car_galleries');
    }
}