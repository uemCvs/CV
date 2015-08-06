<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\OutraQualificacao;

use Illuminate\Http\Request;
use App\Estudante;
use App\Curriculo;
use Auth;
use Illuminate\Support\Facades\Session;


class qualificacaoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{  $vista = 'qualificacao';
        return view('gestorCurriculum',["vista"=>$vista]);

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
		$user_id=Auth::user()->id;
			$estudante_id=Estudante::where('user_id','=',$user_id)->first()->id;
			$curriculo_id=Curriculo::where('estudante_id','=',$estudante_id)->first()->id;

        $qual= new OutraQualificacao();
				$qual->curriculo_id=$curriculo_id;
        $qual->nomeCurso=$request->get('nomeCurso');
        $qual->nomeInstituicao = $request->get ('nomeInstituicao');
        $qual->anoConclusao = $request->get ('anoConclusao');
        $qual->save();
        $qualificacoes=true;
        $vista = 'qualificacaoEdit';
        Session::flash('message', 'Dados gravados com sucesso');
        return view('gestorCurriculum',["qualificacoes"=>$qualificacoes,"vista"=>$vista,"qual"=>$qual, 'nav'=>"quali"]);
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
        return view("qualificacaoo", ['qual' => $qual]);
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
        $qualificacoes=true;
        $vista = 'qualificacaoEdit';
        Session::flash('message', 'Dados gravados com sucesso');
        return view('gestorCurriculum',["qualificacoes"=>$qualificacoes,"vista"=>$vista,"qual"=>$qual, 'nav'=>"quali"]);
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
