<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateEstudianteReqest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			
			'codigo'=>'required',
			'tarjeta'=>'required',
			'nombre'=>'required',
			'apellido'=>'required',
			'edad'=>'required',
			'dirrecion'=>'required',

		];
	}

}