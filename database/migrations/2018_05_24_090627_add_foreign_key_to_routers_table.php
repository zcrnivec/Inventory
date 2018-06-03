<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToRoutersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('routers', function($table) {
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
      Schema::table('routers', function($table) {
        $table->dropColumn('assistance_id');
      });
    }
}
