<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirewallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('firewalls', function (Blueprint $table) {
           $table->increments('firewall_id');
           $table->string('Vendor');
           $table->string('Model');
           $table->string('SerialNumber');
           $table->string('Software');
           $table->string('Memory');
           $table->integer('Modules');
           $table->integer('Interfaces');
         });
     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('firewalls');
    }
}
