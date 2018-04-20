<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productos', function(Blueprint $table)
		{
			$table->integer('id_art', true);
			$table->string('articulo', 20);
			$table->string('descripcion', 250);
			$table->string('tipo_tela', 250);
			$table->string('colores', 250);
			$table->string('talles', 250);
			$table->string('img', 250);
			$table->integer('precio');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('productos');
	}

}
