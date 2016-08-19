<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFlightNumber extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('awb', function ($table) {
          $table->string('flight1');
          $table->string('flight2');
          $table->string('flight3');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('awb', function ($table) {
        $table->dropColumn('flight1');
        $table->dropColumn('flight2');
        $table->dropColumn('flight3');
      });
    }
}
