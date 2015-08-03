<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Vaga;
use Illuminate\Http\Request;

class vagaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$cursos=\App\curso::all();
		if(count($cursos) != 0){
			return view('vaga',['cursos'=>$cursos]);
		} else{
			echo "Nao tem cursos disponíveis";
		}

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
        $vaga= new Vaga();
        $vaga->nome=$request->get('nome');
        $vaga->descricao=$request->get('descricao');
        $vaga->nrVagas=$request->get('nrVagas');
        $vaga->sistemaEnsino=$request->get('sistemaEnsino');
        $vaga->idioma=$request->get('idioma');
        $vaga->outroCurso=$request->get('outroCurso');
        $vaga->disponibilidade=$request->get('disponibilidade');
        $vaga->competencia=$request->get('competencia');
        $vaga->condicoesOferecidas=$request->get('condicoesOferecidas');
        $vaga->save();

				$vaga->cursos=$request->get('cursos');
        return redirect(route('visualizarVaga',['id'=>$vaga->id]));

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

        $vaga = Vaga::find($id);
        return view("vagaa", ['vaga' => $vaga]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $vaga = Vaga::find($id);
        return view("vagaEdit", ['vaga' => $vaga]);

    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
        $vaga= Vaga::find($id);
        $vaga->nome=$request->get('nome');
        $vaga->descricao=$request->get('descricao');
        $vaga->nrVagas=$request->get('nrVagas');
        $vaga->sistemaEnsino=$request->get('sistemaEnsino');
        $vaga->cursos=$request->get('cursos');
        $vaga->idioma=$request->get('idioma');
        $vaga->outroCurso=$request->get('outroCurso');
        $vaga->disponibilidade=$request->get('disponibilidade');
        $vaga->competencia=$request->get('competencia');
        $vaga->condicoesOferecidas=$request->get('condicoesOferecidas');
        $vaga->save();
        return redirect(route('visualizarVaga',['id'=>$vaga->id]));
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
