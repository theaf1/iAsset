<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAirconditionersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airconditioners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sapid');
            $table->string('pid');
            $table->integer('location');
            $table->boolean('is_mobile');
            $table->integer('section');
            $table->string('tel_no');
            $table->string('response_person');
            $table->integer('owner');
            $table->integer('asset_status');
            $table->integer('asset_use_status');
            $table->string('brand');
            $table->string('model');
            $table->string('serial_no');
            $table->string('refrigerant');
            $table->float('refrigerant_charge', 5, 3);
            $table->float('cooling_capacity', 8, 6);
            $table->ipAddress('device_management_address');
            $table->string('remarks');
            $table->string('issues');
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
        Schema::dropIfExists('airconditioners');
    }
}
