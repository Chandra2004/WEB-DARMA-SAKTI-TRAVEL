<?php

namespace Database\Seeders;

use Faker\Factory;
use TheFramework\Database\Seeder;
use TheFramework\Helpers\Helper;

class Seeder_2026_01_24_040507_UsersSeeder extends Seeder
{

    public function run()
    {
        $faker = Factory::create();
        Seeder::setTable('users');

        Seeder::create([
            'uid' => Helper::uuid(36),
            'username' => 'admin',
            'email' => 'admindarma@gmail.com',
            'password' => Helper::hash_password('darmasewa2026'),
        ]);
    }
}
