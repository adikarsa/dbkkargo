<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('commodity');
            $table->integer('total');
            $table->double('weight', 15, 2 );
            $table->string('sender');
            $table->string('receiver');
            $table->string('origin');
            $table->string('destination');
            $table->string('note');
            $table->string('inputted_by');
            $table->string('awb')->nullable();
            $table->integer('status_id')->nullable();
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
