<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignaturasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('asignaturas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre',50);
			$table->integer('horario');
			$table->string('estado',1);
			$table->integer('profesor_id')->unsigned();
			$table->integer('curso_id')->unsigned();
			$table->foreign('profesor_id')
			->references('id') ->on('profesors')
			->onUpdate('CASCADE')
			->onDelete('CASCADE');
			$table->foreign('curso_id')
			->references('id') ->on('cursos')
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
		Schema::drop('asignaturas');
	}

}
