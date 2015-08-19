<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model {


	public function curso(){

		return $this->BelongsTo('App\Curso');
	}

	


	protected $table='estudiantes';

	protected $fillable = ['codigo', 'tarjeta','nombre','apellido','telefono','edad',
	'dirrecion','curso_id'];

}
