<?php

namespace Database\Migrations;

use TheFramework\App\Schema;

class Migration_2026_01_30_073422_CreateCarsTable
{
    public function up()
    {
        Schema::create('cars', function ($table) {
            $table->increments('id');
            $table->string('uid', 36)->unique();

            $table->string('photo')->nullable();
            $table->string('nama_mobil', 255);
            $table->string('slug_mobil', 255);
            $table->string('merk_mobil', 255);
            $table->string('transmisi_mobil', 255);
            $table->string('kursi_mobil', 255);
            $table->string('bagasi_mobil', 255);
            $table->text('deskripsi_mobil');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cars');
    }
}