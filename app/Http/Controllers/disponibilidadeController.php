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
        return redirect(route('visualizarDisponibilidade',['id'=>$disp->id]));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $disp = disponibilidade::find($id);
        return view("gestorCurriculumView", ['disp' => $disp]);
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
        return view("disponibilidadeEdit", ['disp' => $disp]);

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
        $disp->disp=$request->get('disp');
        $disp->tempoInicio=$request->get('tempoInicio');
        $disp->tempoFim=$request->get('tempoFim');
        $disp->descricao=$request->get('descricao');
        $disp->save();
        return redirect(route('visualizarDisponibilidade',['id'=>$disp->id]));
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
