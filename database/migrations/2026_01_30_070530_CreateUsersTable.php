<?php

namespace Database\Migrations;

use TheFramework\App\Schema;

class Migration_2026_01_30_070530_CreateUsersTable {
    public function up()
    {
        Schema::create('users', function ($table) {
            $table->increments('id');
            $table->string('uid', 36)->unique();

            $table->string('username', 50)->unique();
            $table->string('email', 100)->unique();
            $table->string('password', 255);
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}