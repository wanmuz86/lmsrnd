<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newusers', function (Blueprint $table) {
          $table->increments('id');
           $table->string('first_name');
           $table->string('last_name');
           $table->string('email');
           $table->date('startdate');
           $table->integer('batch_id')->unsigned();
           $table->integer('company_id')->unsigned();
           $table->integer('country_id')->unsigned();
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
        Schema::dropIfExists('newusers');
    }
}
