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
        Schema::create('computers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('Status',[]);
            $table->string('SAPID');
            $table->string('PID'); 
            $table->string('issue'); //ปัญหาในการใช้งาน
            $table->string('Remarks'); //หมายเหตุ
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
