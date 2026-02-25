<?php

namespace Database\Seeders;

use Faker\Factory;
use TheFramework\Database\Seeder;
use TheFramework\Helpers\Helper;
use TheFramework\Models\Car;

class Seeder_2026_01_30_144841_CarGalleriesSeeder extends Seeder {

    public function run() {
        $faker = Factory::create();
        Seeder::setTable('car_galleries');

        $allData = [];
        
        for ($i=1; $i <= 12; $i++) { 
            $allData[] = [
                'uid' => Helper::uuid(),
                'uid_mobil' => Car::query()->where('slug_mobil', '=', 'isuzu-elf-long')->first()['uid'],
                'photo' => 'isuzu-elf-long/picture-(' . $i . ').jpg',
            ];
        }

        for ($i=1; $i <= 4; $i++) { 
            $allData[] = [
                'uid' => Helper::uuid(),
                'uid_mobil' => Car::query()->where('slug_mobil', '=', 'toyota-hiace-commuter-hitam')->first()['uid'],
                'photo' => 'toyota-hiace-commuter-hitam/picture-(' . $i . ').jpg',
            ];
        }

        for ($i=1; $i <= 7; $i++) { 
            $allData[] = [
                'uid' => Helper::uuid(),
                'uid_mobil' => Car::query()->where('slug_mobil', '=', 'toyota-hiace-commuter')->first()['uid'],
                'photo' => 'toyota-hiace-commuter-putih/picture-(' . $i . ').jpg',
            ];
        }

        for ($i=1; $i <= 4; $i++) { 
            $allData[] = [
                'uid' => Helper::uuid(),
                'uid_mobil' => Car::query()->where('slug_mobil', '=', 'toyota-hiace-premio-elite')->first()['uid'],
                'photo' => 'toyota-hiace-premio-elite/picture-(' . $i . ').jpg',
            ];
        }

        for ($i=1; $i <= 4; $i++) { 
            $allData[] = [
                'uid' => Helper::uuid(),
                'uid_mobil' => Car::query()->where('slug_mobil', '=', 'toyota-hiace-premio-hybrid')->first()['uid'],
                'photo' => 'toyota-hiace-premio-hybrid/picture-(' . $i . ').jpg',
            ];
        }

        for ($i=1; $i <= 4; $i++) { 
            $allData[] = [
                'uid' => Helper::uuid(),
                'uid_mobil' => Car::query()->where('slug_mobil', '=', 'toyota-hiace-premio-luxury')->first()['uid'],
                'photo' => 'toyota-hiace-premio-luxury/picture-(' . $i . ').jpg',
            ];
        }

        for ($i=1; $i <= 6; $i++) { 
            $allData[] = [
                'uid' => Helper::uuid(),
                'uid_mobil' => Car::query()->where('slug_mobil', '=', 'toyota-innova-reborn')->first()['uid'],
                'photo' => 'toyota-innova-reborn-at/picture-(' . $i . ').jpg',
            ];
        }

        for ($i=1; $i <= 6; $i++) { 
            $allData[] = [
                'uid' => Helper::uuid(),
                'uid_mobil' => Car::query()->where('slug_mobil', '=', 'toyota-innova-reborn-hybrid')->first()['uid'],
                'photo' => 'toyota-innova-reborn-hybrid/picture-(' . $i . ').jpg',
            ];
        }

        for ($i=1; $i <= 6; $i++) { 
            $allData[] = [
                'uid' => Helper::uuid(),
                'uid_mobil' => Car::query()->where('slug_mobil', '=', 'toyota-innova-reborn-manual')->first()['uid'],
                'photo' => 'toyota-innova-reborn-manual/picture-(' . $i . ').jpg',
            ];
        }

        Seeder::create($allData);
    }
}
