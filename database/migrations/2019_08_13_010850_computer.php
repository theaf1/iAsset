<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Computer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('SAPID');
            $table->string('PID'); 
            $table->string('Brand');
            $table->string('Model');
            $table->string('Vendor_SN');
            $table->string('CPU_model');
            $table->decimal('CPU_Speed', 3, 2);
            $table->integer('CPU_Core_No');
            $table->integer('RAM_Size');
            $table->enum('HDD_type', ['SSD', 'HDD']);
            $table->decimal('HDD_Size', 8, 5); //HDD size in TB or GB
            $table->string('SAPID_Display');
            $table->string('PID_Display');
            $table->decimal('Screen_size', 3, 2);
            $table->string('Screen_ratio');
            $table->string('User');
            $table->string('Function');
            $table->string('Position');
            $table->string('Section');
            $table->string('Tel_No');
            $table->string('Locate_Building');
            $table->integer('Locate_floor');
            $table->string('Locate_room');
            $table->boolean('Accessibility');
            $table->string('Owner');
            $table->ipAddress('IP_Address');
            $table->string('LAN_Outlet_No')->nullable();
            $table->macAddress('MAC_Address');
            $table->string('LAN_TYPE');
            $table->string('Computer_name');
            $table->string('Remarks'); //หมายเหตุ
            $table->string('OS');
            $table->string('OS_version');
            $table->timestamp('date_created');
            $table->timestamp('date_updated');
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
