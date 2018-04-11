<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->truncate();

        $reviews = [];
        $faker = Factory::create();

        for ($i = 1; $i <= 10; $i++)
        {
            $reviews[] = [
                'content_id'  => rand(1, 10),
                'client'  => $faker->lastName,
                'review'  =>  $faker->sentence(rand(5, 10)),
                'star'  =>  $faker->numberBetween(0,5),
            ];
        }

        DB::table('reviews')->insert($reviews);
    }
}
