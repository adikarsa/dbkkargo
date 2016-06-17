<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('status', function (Blueprint $table) {
          $table->increments('id');
          $table->string('barang_offload');
          $table->integer('total_box_offload');
          $table->double('weight_offload',15,2);
          $table->string('note_offload');
          $table->string('barang_departure');
          $table->integer('total_box_departure');
          $table->double('weight_departure',15,2);
          $table->string('note_departure');
          $table->string('id_barang');
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
