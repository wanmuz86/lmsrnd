<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
             $table->string('course_name');
             $table->integer('category_id')->unsigned();
             $table->string('course_desc');
             $table->integer('is_active')->unsigned();
             $table->date('activation_date');
             $table->date('end_date');
             $table->integer('trainer_id')->unsigned();
             $table->string('course_logo');
             $table->string('price');
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
        Schema::dropIfExists('courses');
    }
}
