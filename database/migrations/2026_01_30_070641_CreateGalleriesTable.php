<?php

namespace Database\Migrations;

use TheFramework\App\Schema;

class Migration_2026_01_30_070641_CreateGalleriesTable
{
    public function up()
    {
        Schema::create('galleries', function ($table) {
            $table->increments('id');
            $table->string('uid', 36)->unique();

            $table->string('photo')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('galleries');
    }
}