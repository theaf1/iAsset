<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Servers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servers', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->string('sapid');
            $table->string('pid');
            $table->string('location');
            $table->integer('section');
            $table->boolean('is_mobile')->default(0);
            $table->string('tel_no');
            $table->string('response_person');
            $table->integer('owner');
            $table->integer('asset_status');
            $table->integer('asset_use_status');
            $table->string('brand');
            $table->string('model');
            $table->integer('form_factor');
            $table->string('serial_no');
            $table->string('cpu_model');
            $table->float('cpu_speed', 4, 2);
            $table->integer('cpu_socket_no');
            $table->float('ram_size', 4, 2);
            $table->boolean('is_raid')->default(0);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropifexists('servers');
    }
}
