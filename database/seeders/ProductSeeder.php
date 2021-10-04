<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Generator as Faker; 
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
        DB::table('products')->insert([
            'name' => $faker->word,
            'detail' => $faker->sentence,
            'image' => $faker->image(public_path('images'),400,300, null, false),
        ]);
    }
    }
}
