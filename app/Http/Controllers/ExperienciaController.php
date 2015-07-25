<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use \App\Experiencia;

class ExperienciaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('experienciaGravar');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request  $request)
	{

		$exp= new Experiencia();
	//	$exp-> = $request->get('nomeCurso');
		$exp->instituicao = $request->get ('nomeInstituicao');
		$exp->cargo= $request->get ('cargo');
		$exp->anoIngresso = $request->get ('anoIngresso');
		$exp->anoTermino= $request->get ('anoConclusao');

		$exp->save();
			return $exp;
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
		$exp = Experiencia::find($id);
		return view("experiencia", ['exp' => $exp]);

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$exp = Experiencia::find($id);
		$exp->instituicao = $request->get ('nomeInstituicao');
		$exp->cargo= $request->get ('cargo');
		$exp->anoIngresso = $request->get ('anoIngresso');
		$exp->anoTermino= $request->get ('anoConclusao');

		$exp->save();
			return $exp;
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
