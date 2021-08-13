<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendar', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('classroom_id'); //relacion 
            $table->foreign('classroom_id')->references('id')->on('classrooms')->onDelete('cascade'); // llave foranea

            $table->unsignedBigInteger('course_id'); //relacion 
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade'); // llave foranea

            $table->json('times');

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
        Schema::dropIfExists('calendar');
    }
}
