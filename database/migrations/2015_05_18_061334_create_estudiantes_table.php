<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estudiantes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('codigo');
			$table->integer('tarjeta');
			$table->string('nombre',50);
			$table->string('apellido',50);
			$table->string('telefono',10);
			$table->integer('edad');
			$table->string('dirrecion');
			$table->string('estado',1);
			$table->integer('curso_id')->unsigned();
			$table->foreign('curso_id')
			->references('id')->on('cursos')
			->onUpdate('CASCADE')
			->onDelete('CASCADE');

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
		Schema::drop('estudiantes');
	}

}
