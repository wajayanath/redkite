<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCancertypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancertypes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');
            $table->text('overview');
            $table->text('treatment');
            $table->text('causes');
            $table->text('prevention');
            $table->text('research');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cancertypes');
    }
}
