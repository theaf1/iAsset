<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (blueprint $table) {
            $table->bigincrements('id');
            $table->integer('type');
            $table->string('sapid');
            $table->string('pid');
            $table->integer('section');
            $table->boolean('is_mobile')->default(0);
            $table->string('user');
            $table->string('position');
            $table->integer('section_status');
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
        //
    }
}
