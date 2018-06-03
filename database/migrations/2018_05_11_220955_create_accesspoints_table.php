<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccesspointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('accesspoints', function (Blueprint $table) {
           $table->increments('ap_id');
           $table->string('Vendor');
           $table->string('Model');
           $table->string('SerialNumber');
           $table->string('Software');
           $table->string('Memory');
         });
     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accesspoints');
    }
}
