<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Stock;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create();
        for($i=1; $i<=20; $i++){
        $stock = new stock;
        // $stock->id = $faker->unique()->numberBetween(1,20);
        $stock->name = $faker->name;
        $stock->quantity = $faker->unique()->numberBetween(1,20);
        $stock->save();
        }
    }
}
