<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\OutraQualificacao;

use Illuminate\Http\Request;

class qualificacaoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('qualificacao');
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
        $qual= new OutraQualificacao();
        $qual->nomeCurso=$request->get('nomeCurso');
        $qual->nomeInstituicao = $request->get ('nomeInstituicao');
        $qual->anoConclusao = $request->get ('anoConclusao');
        $qual->save();
        return redirect(route('visualizarQualificacao',['id'=>$qual->id]));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $qual = OutraQualificacao::find($id);
        return view("Qualificacaoo", ['qual' => $qual]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $qual = OutraQualificacao::find($id);
        return view("QualificacaoEdit", ['qual' => $qual]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{

        $qual= OutraQualificacao::find($id);
        $qual->nomeCurso=$request->get('nomeCurso');
        $qual->nomeInstituicao = $request->get ('nomeInstituicao');
        $qual->anoConclusao = $request->get ('anoConclusao');
        $qual->save();
        return redirect(route('visualizarQualificacao',['id'=>$qual->id]));
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
