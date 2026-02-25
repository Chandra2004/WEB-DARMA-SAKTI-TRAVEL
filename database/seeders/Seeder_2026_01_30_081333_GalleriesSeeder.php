<?php

namespace Database\Seeders;

use Faker\Factory;
use TheFramework\Database\Seeder;
use TheFramework\Helpers\Helper;

class Seeder_2026_01_30_081333_GalleriesSeeder extends Seeder {

    public function run() {
        $faker = Factory::create();
        Seeder::setTable('galleries');

        $data = [];
        for ($i=1; $i <= 66; $i++) {
            $data[] = [
                'uid' => Helper::uuid(),
                'photo' => 'gallery-' . $i . '.png',
            ];
        }

        Seeder::create($data);
    }
}
