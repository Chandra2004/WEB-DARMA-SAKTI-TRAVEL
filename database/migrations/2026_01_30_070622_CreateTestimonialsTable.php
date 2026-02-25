<?php

namespace Database\Migrations;

use TheFramework\App\Schema;

class Migration_2026_01_30_070622_CreateTestimonialsTable
{
    public function up()
    {
        Schema::create('testimonials', function ($table) {
            $table->increments('id');
            $table->string('uid', 36)->unique();

            $table->string('nama_testimoni', 100);
            $table->string('posisi_testimoni', 100);
            $table->string('rating_testimoni', 100);
            $table->text('deskripsi_testimoni');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('testimonials');
    }
}