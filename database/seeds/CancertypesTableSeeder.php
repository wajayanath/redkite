<?php

use Illuminate\Database\Seeder;

class CancertypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
        DB::table('cancertypes')->truncate();

        // generate 4 cancertypes
        DB::table('cancertypes')->insert([
            [
                'category' => "Breast",
                'overview' => "Breast",
                'treatment' => "Breast",
                'causes' => "Breast",
                'prevention' => "Breast",
                'research' => "Breast",
            ],
            [
                'category' => "Lung",
                'overview' => "Lung",
                'treatment' => "Lung",
                'causes' => "Lung",
                'prevention' => "Lung",
                'research' => "Lung",
            ],
            [
                'category' => "Brain",
                'overview' => "Brain",
                'treatment' => "Brain",
                'causes' => "Brain",
                'prevention' => "Brain",
                'research' => "Brain",
            ],
            [
                'category' => "Clonal",
                'overview' => "Clonal",
                'treatment' => "Clonal",
                'causes' => "Clonal",
                'prevention' => "Clonal",
                'research' => "Clonal",
            ],
        ]);
    }
}
