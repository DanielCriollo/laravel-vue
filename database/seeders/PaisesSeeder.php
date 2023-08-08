<?php

namespace Database\Seeders;

use App\Models\Pais;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PaisesSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        
        for ($i = 0; $i < 10; $i++) {
            Pais::create([
                'nombre' => $faker->country,
            ]);
        }
    }
}
