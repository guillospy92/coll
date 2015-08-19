<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateEstudianteReqest;
use App\Estudiante;
use App\Curso;


use Illuminate\Http\Request;

class EstudianteController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$estudiante = Estudiante::with('curso')->paginate(5);
		return view('estudiantes.index', compact('estudiante'));


	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		$est = Curso::select('nombre')->get()->toArray();
		$est = Curso::lists('nombre', 'id');

		return view('estudiantes.creat', compact('est'));
	
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateEstudianteReqest $request)
	{
		
		$Est=new Estudiante($request->all());
		$Est->estado='A';
		$Est->save();
		return \Redirect::route('estudiantes.index');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
