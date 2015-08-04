<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use \App\Habilitacao;
use App\Estudante;
use App\Curriculo;
use Auth;

class HabilitacaoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$habilitacoes = Habilitacao::all();
		return view('Teste',['habilitacoes'=>$habilitacoes]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('habilitacaoGravar');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{	$user_id=Auth::user()->id;
		$estudante_id=Estudante::where('user_id','=',$user_id)->first()->id;
		$curriculo_id=Curriculo::where('estudante_id','=',$estudante_id)->first()->id;

		$hab= new Habilitacao();
		$hab->curriculo_id=$curriculo_id;
		$hab->nivel= $request->get('nivel');
		$hab->anoDeConclusao = $request->get ('anoConclusao');
		$hab->curso= $request->get ('curso');
		$hab->instituicao= $request->get ('instituicao');

		$hab->save();
			return redirect(route('visualizarHab',['id'=>$hab->id]));

			}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		$hab = Habilitacao::find($id);
		return view("habilitacaoo", ['h' => $hab]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$hab = Habilitacao::find($id);
		return view("habilitacao", ['h' => $hab, 'utilizador' => Auth::user()]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
			$hab= Habilitacao::find($id);
			$hab->nivel= $request->get('nivel');
			$hab->anoDeConclusao = $request->get ('anoConclusao');
			$hab->curso= $request->get ('curso');
			$hab->instituicao= $request->get ('instituicao');

			$hab->save();
			//return $hab;
			return redirect(route('visualizarHabilitacao',['id'=>$hab->id]));
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
