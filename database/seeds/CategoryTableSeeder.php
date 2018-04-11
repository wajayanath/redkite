<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('categories')->truncate();

        // generate 4 categories
        DB::table('categories')->insert([
            [
                'name' => "Article",
                'desc' => "Article",
            ],
            [
                'name' => "Video",
                'desc' => "Video",
            ],
            [
                'name' => "Podcast",
                'desc' => "Podcast",
            ],
            [
                'name' => "Other Media",
                'desc' => "Other Media",
            ],
        ]);
    }
}
