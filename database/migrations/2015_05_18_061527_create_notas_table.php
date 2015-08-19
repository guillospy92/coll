<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->decimal('calificacion');
			$table->string('estado',1);
			$table->integer('estudiante_id')->unsigned();
			$table->integer('asignatura_id')->unsigned();
			$table->foreign('estudiante_id')
			->references('id') ->on('estudiantes')
			->onUpdate('CASCADE')
			->onDelete('CASCADE');
			$table->foreign('asignatura_id')
			->references('id') ->on('asignaturas')
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
		Schema::drop('notas');
	}

}
