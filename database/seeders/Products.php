<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 204) as $index) {
            DB::table('products')->insert([
                'name' => $faker->name,
                'image' => '',
                'description' => $faker->paragraph($nb = 50),
                'price' => $faker->numberBetween($min = 500, $max = 8000),
            ]);
        }
    }
}
