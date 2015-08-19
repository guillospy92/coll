<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoletinsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('boletins', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('periodo',10);
			$table->integer('estudiante_id')->unsigned();
			$table->integer('curso_id')->unsigned();
			$table->integer('asignatura_id')->unsigned();
			$table->integer('nota_id')->unsigned();
			$table->integer('logro_id')->unsigned();
			$table->foreign('estudiante_id')
			->references('id')
			->on('estudiantes')
			->onUpdate('CASCADE')
			->onDelete('CASCADE');
			$table->foreign('curso_id')
			->references('id')
			->on('cursos')
			->onUpdate('CASCADE')
			->onDelete('CASCADE');
			$table->foreign('asignatura_id')
			->references('id')
			->on('asignaturas')
			->onUpdate('CASCADE')
			->onDelete('CASCADE');
			$table->foreign('nota_id')
			->references('id')
			->on('notas')
			->onUpdate('CASCADE')
			->onDelete('CASCADE');
			$table->foreign('logro_id')
			->references('id')
			->on('logros')
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
		Schema::drop('boletins');
	}

}
