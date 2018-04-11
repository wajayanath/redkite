<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset the contents table
        DB::table('contents')->truncate();

        // generate 10 dummy contents data
        $contents = [];
        $faker = Factory::create();

        for ($i = 1; $i <= 10; $i++)
        {
            $contents[] = [
                'user_id'  => rand(1, 3),
                'cancertype_id'  => rand(1, 4),
                'treatment_stage_id'  => rand(1, 5),
                'category_id'  => rand(1, 4),
                'title'        => $faker->sentence(rand(5, 10)),
                'body'         => $faker->paragraphs(rand(10, 15), true),
            ];
        }

        DB::table('contents')->insert($contents);
    }
}
