<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use \App\Estudante;
use Auth;

class EstudanteController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('estudanteGravar');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$est= new Estudante();
		$est->apelido= $request->get('apelido');
		$est->outrosNomes = $request->get ('outrosNomes');
		$est->dataNascimento= $request->get ('dataNascimento');
		$est->nrEstudante= $request->get ('numeroEstudante');
		$est->curso= $request->get ('curso');
		$est->nivel= $request->get ('nivel');
	//	$est->user_id= Auth::user()->id;
		Auth::user()->estudante()->save($est);
		return redirect(route('visualizarEstudante',['id'=>$est->id]));
	//$est->utilizador()->associate(Auth::user());
	//	$est->save();

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$estudante = Estudante::find($id);
		return view("estudantee", ['est' => $estudante]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$est = Estudante::find($id);
		return view("estudante", ['est' => $est]);

			}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$est= Estudante::find($id);
		$est->apelido= $request->get('apelido');
		$est->outrosNomes = $request->get ('outrosNomes');
		$est->dataNascimento= $request->get ('dataNascimento');
		$est->nrEstudante= $request->get ('numeroEstudante');
		$est->curso= $request->get ('curso');
		$est->nivel= $request->get ('nivel');
		$est->save();
		return redirect(route('visualizarEstudante',['id'=>$est->id]));
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
