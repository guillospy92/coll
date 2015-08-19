<?php namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProfesorRequest;
use App\Http\Requests\EditUserRequest;
use App\Profesor;

//use App\Http\Requests\Request;
//use App\Http\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
//use Illuminate\Support\Facades\Request;

class ProfesorController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		
		$profesor=Profesor::name($request->get('name'))->orderBy('id','DESC')->Paginate(15);

		return view('profesores.index',compact('profesor'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		
		return view('profesores/create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateProfesorRequest $request)
	{

		$profesor = new Profesor($request->all());
		$profesor->estado = 'A';
		$profesor->save();
		return \Redirect::route('profesores.index');



		
	
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
		$profesor = Profesor::findOrFail($id);

		return view('profesores/edit', compact('profesor'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(CreateProfesorRequest $request, $id )
	{
		$profesor = Profesor::findOrFail($id);

		$profesor->fill($request->all());
		$profesor->estado = 'A';
		$profesor->save();
		return \Redirect::route('profesores.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$profesor = Profesor::findOrFail($id);
		$profesor->delete();

		return \Redirect::route('profesores.index');

	}

}
