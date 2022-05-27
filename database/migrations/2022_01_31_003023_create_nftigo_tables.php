<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNftigoTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nftigos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nftId');   
            $table->string('name');
            $table->float('price');
            $table->integer('supply');
            $table->integer('dividend');
            $table->dateTime('endDate');
            $table->text('description');
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
