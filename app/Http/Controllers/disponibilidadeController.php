<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\disponibilidade;

class disponibilidadeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('disponibilidade');
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
	public function store(Request $request)
	{
		$disp= new disponibilidade();
        $disp->disp=$request->get('disp');
        $disp->tempoInicio=$request->get('tempoInicio');
        $disp->tempoFim=$request->get('tempoFim');
        $disp->descricao=$request->get('descricao');
        $disp->save();
        return $disp;
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
        $disp = disponibilidade::find($id);
        return view("disponibilidade", ['disp' => $disp]);

    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
        $disp= disponibilidade::find($id);
        $disp->apelido= $request->get('apelido');
        $disp->outrosNomes = $request->get ('outrosNomes');
        $disp->dataNascimento= $request->get ('dataNascimento');
        $disp->nrEstudante= $request->get ('numeroEstudante');
        $disp->curso= $request->get ('curso');
        $disp->nivel= $request->get ('nivel');
        $disp->save();
        return $disp;
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
