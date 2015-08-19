<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profesors', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('cedula')->unique();
			$table->string('nombre', 50);
			$table->string('apellido', 50);
			$table->string('cargo', 50);
			$table->string('direcion', 50);
			$table->integer('telefono');
			$table->string('estado', 1);
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
		Schema::drop('profesors');
	}

}
