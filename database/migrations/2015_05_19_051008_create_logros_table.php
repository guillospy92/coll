<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('logros', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('descripcion',500);
			$table->integer('asignatura_id')->unsigned();
			$table->foreign('asignatura_id')
			->references('id')
			->on('asignaturas')
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
		Schema::drop('logros');
	}

}
