<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GeneralData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_data', function (Blueprint $table){
            $table->bigincrements('id');
            $table->string('SAPID');
            $table->string('PID');
            $table->string('Locate_Building');
            $table->number('Locate_floor');
            $table->string('Locate_Room');
            $table->string('Tel_no');
            $table->string('Asset_class');
            $table->string('Type');
            $table->string('Owner');
            $table->string('User');
            $table->string('Position');
            $table->boolean('Accessiblity');
            $table->string('Section');
            $table->string('Function');
            $table->string('remarks');
            $table->string('Issues');
            $table->string('SAPID');
            $table->string('Section_status');
            $table->string('Status');

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
