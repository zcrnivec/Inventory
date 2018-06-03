<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servers', function (Blueprint $table) {
          $table->increments('server_id');
          $table->string('Vendor');
          $table->string('Model');
          $table->string('SerialNumber');
          $table->string('Hypervisor');
          $table->string('Cpu');
          $table->string('Memory');
          $table->integer('Storage');
          $table->integer('Disks');
          $table->integer('assistance_id')->unsigned();
          $table->foreign('assistance_id')->references('assistance_id')->on('assistance_regime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servers');
    }
}
