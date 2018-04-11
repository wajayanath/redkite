<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ContentsTableSeeder::class);
        $this->call(CancertypesTableSeeder::class);
        $this->call(TreatmentStagesTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(ReviewTableSeeder::class);
    }
}
