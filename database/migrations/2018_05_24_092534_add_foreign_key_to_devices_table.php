<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('firewalls', function($table) {
        $table->integer('assistance_id')->unsigned();
        $table->foreign('assistance_id')->references('id')->on('assistance_regime');
      });
      Schema::table('switches', function($table) {
        $table->integer('assistance_id')->unsigned();
        $table->foreign('assistance_id')->references('id')->on('assistance_regime');
      });
      Schema::table('accesspoints', function($table) {
        $table->integer('assistance_id')->unsigned();
        $table->foreign('assistance_id')->references('id')->on('assistance_regime');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('firewalls', function($table) {
        $table->dropColumn('assistance_id');
      });
      Schema::table('switches', function($table) {
        $table->dropColumn('assistance_id');
      });
      Schema::table('accesspoints', function($table) {
        $table->dropColumn('assistance_id');
      });
    }
}
