<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendarTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendar_times', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('day_id'); //relacion 
            $table->foreign('day_id')->references('id')->on('days')->onDelete('cascade'); // llave foranea

            $table->unsignedBigInteger('hour_id'); //relacion 
            $table->foreign('hour_id')->references('id')->on('hours')->onDelete('cascade'); // llave foranea

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
        Schema::dropIfExists('calendar_times');
    }
}
