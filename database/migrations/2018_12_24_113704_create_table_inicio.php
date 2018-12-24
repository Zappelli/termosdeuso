<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInicio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_inicio', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('tipo');
            $table->string('tipo_hospedagem');
            $table->json('dispositivos');
            $table->boolean('uso_comercial');
            $table->timestamps();
            $table->integer('contratos_id')->unsigned();
            $table->foreign('contratos_id')->references('id')->on('contratos');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('_inicio');
    }
}
