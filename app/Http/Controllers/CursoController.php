<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateRequestCurso;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;
use App\Curso;

class CursoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	
	$cursos=Curso::all();

	return view('cursos.index',compact('cursos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('cursos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateRequestCurso $request)
	{

		$cursos= new Curso($request->all());
		$cursos->estado='A';
		$cursos->save();
		return \Redirect::route('cursos.index');
		
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

	$curso=Curso::findOrFail($id);
	return view('cursos.edit',compact('curso'));


	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(CreateRequestCurso $request, $id)
	{
	
	$curso=Curso::findOrFail($id);
	$curso->fill($request->all());
	$curso->estado='A';
	$curso->save();

	return Rederict::route('cursos.index');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy( $id)
	{
		
    $profesor=Curso::findOrFail($id);
    $profesor->delete();
    return Redirect::route('cursos.index');

	}

}
