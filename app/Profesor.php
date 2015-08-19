<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model {

	
	protected $table = 'profesors';

	protected $fillable = ['cedula','nombre', 'apellido', 'cargo','direcion','telefono'];


			public function scopeName($query, $name){

	

	if(trim($name)!=""){
    
    $query->where(\DB::raw("CONCAT(nombre,'','apellido')"),"LIKE","%$name%");

	}
}

}
