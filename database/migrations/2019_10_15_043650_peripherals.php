<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Peripherals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peripherals', function (Blueprint $table){
            $table->bigincrements('id');
            $table->integer('type');
            $table->string('sapid');
            $table->string('pid');
            $table->integer('location');
            $table->boolean('is_mobile')->default(0);
            $table->string('user');
            $table->string('position');
            $table->integer('section');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
