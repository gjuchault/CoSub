<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function ($table) {
            $table->increments('id');
            $table->string('name', 255)->unique();
            $table->string('description', 255);
            $table->integer('show')->unsigned();
            $table->integer('language')->unsigned();
            $table->integer('season')->unsigned()->nullable();
            $table->integer('episode')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('show')->references('id')->on('shows');
            $table->foreign('language')->references('id')->on('languages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }

}
