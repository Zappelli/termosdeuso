<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOque extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_oque', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('end_point');
            $table->string('token');
            $table->timestamps();
            $table->integer('contratos_id')->unsigned();
            $table->foreign('contratos_id')->references('id')->on('contratos');
        });
        
        Schema::create('_oque_meta', function(Blueprint $table)
		{
            $table->increments('id');
            $table->json('meta_json');
            $table->integer('_oque_id')->unsigned();
            $table->foreign('_oque_id')->references('id')->on('_oque');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('_oque');
        Schema::drop('_oque_meta');
    }
}
