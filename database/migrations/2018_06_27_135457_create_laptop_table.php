<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaptopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptop', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('category');
            $table->string('fact');
            $table->string('cpu');
            $table->string('ram');
            $table->string('gpu');
            $table->string('disc');
            $table->string('status');
            $table->string('mboard');
            $table->string('screen');
            $table->integer('weight');
            $table->integer('price');
            $table->mediumText('body');
            $table->string('cover_image');


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
        Schema::drop('laptop');
    }
}
