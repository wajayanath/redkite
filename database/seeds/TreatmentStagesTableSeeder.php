<?php

use Illuminate\Database\Seeder;

class TreatmentStagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('treatment_stages')->truncate();

        // generate 4 treatment_stages
        DB::table('treatment_stages')->insert([
            [
                'stage_group' => "Stage 0",
                'treatment' => "Surgery",
                'info' => "Surgery",
            ],
            [
                'stage_group' => "Stage I",
                'treatment' => "Radiation Theraphy",
                'info' => "Radiation Theraphy",
            ],
            [
                'stage_group' => "Stage II",
                'treatment' => "Chemotherapy",
                'info' => "Chemotherapy",
            ],
            [
                'stage_group' => "Stage III",
                'treatment' => "Hormonal therapy",
                'info' => "Hormonal therapy",
            ],
            [
                'stage_group' => "Stage IV",
                'treatment' => "Targeted therapy",
                'info' => "Targeted therapy",
            ],
        ]);
    }
}
