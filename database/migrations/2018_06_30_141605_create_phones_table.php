<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phone', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('category');
            $table->string('system');
            $table->string('fact');
            $table->string('cpu');
            $table->string('ram');
            $table->string('disc');
            $table->string('screen');
            $table->string('camera');
            $table->string('battery');
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
        Schema::dropIfExists('phone');
    }
}
