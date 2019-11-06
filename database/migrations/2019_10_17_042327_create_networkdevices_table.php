<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNetworkdevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('networkdevices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sapid')->nullable();
            $table->string('pid')->nullable();
            $table->boolean('is_mobile')->default(0);
            $table->integer('asset_status');
            $table->integer('asset_use_status');
            $table->integer('device_subtype');
            $table->string('brand');
            $table->string('model');
            $table->integer('port_count');
            $table->integer('psu_count');
            $table->ipAddress('device_management_address');
            $table->string('software_version');
            $table->string('issues');
            $table->string('remarks');
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
        Schema::dropIfExists('networkdevices');
    }
}
