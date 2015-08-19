<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model {


	public function estudiantes() {

		return $this->hasMany('App\Estudiante');
	}

	
	protected $table = 'cursos';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nombre', 'cupos'];


}
