<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Peripheral extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Peripherals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Status');
            $table->string('SAPID');
            $table->string('PID'); 
            $table->string('issue'); //ปัญหาในการใช้งาน
            $table->string('Remarks'); //หมายเหตุ
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
