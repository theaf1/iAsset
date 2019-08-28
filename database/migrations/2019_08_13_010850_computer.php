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
            $table->ipAddress('IP_Address');
            $table->string('LAN_Outlet_No')->nullable();
            $table->macAddress('MAC_Address');
            $table->string('LAN_TYPE');
            $table->string('Computer_name');
            $table->string('OS');
            $table->string('OS_version');
            $table->string('MS_Office_Version');
            $table->string('Anti_virus');
            $table->string('PDF_reader');
            $table->string('IE_version');
            $table->string('Chrome_version');
            $table->string('SPSS_version');
            $table->string('endnote_Version');
            $table->boolean('E_his');
            $table->boolean('SiPAC');
            $table->boolean('si_iscan');
            $table->boolean('buddyscan');
            $table->boolean('eclair');
            $table->boolean('UR_ward');
            $table->boolean('admission_notes');
            $table->boolean('SiNet');
            $table->string('Other_application');
            $table->string('issue')->nullable(); //ปัญหาในการใช้งาน
            $table->string('Remarks')->nullable(); //หมายเหตุ
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
