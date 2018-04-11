<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTreatmentStageToContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contents', function (Blueprint $table) {
            $table->integer('treatment_stage_id')->unsigned();
            $table->foreign('treatment_stage_id')->references('id')->on('treatment_stages')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contents', function (Blueprint $table) {
           $table->dropForeign(['treatment_stage_id']);
           $table->dropColumn('treatment_stage_id');
        });
    }
}
