<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClausulasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clausulas', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('nome', 150);
			$table->longText('descricao');
			$table->integer('categoria_id')->unsigned();
			$table->timestamps();

			$table->foreign('categoria_id')->references('id')->on('clausula_categorias');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clausulas');
	}

}
