<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use DB;
use App\User;

class ProcuraController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('Procurar');
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
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		$cursos=Input::get('cursos');
		$disponibilidades=Input::get ('disponibilidades');
		$niveis=Input::get('niveis');
		$idiomas= Input::get ('idiomas');

		$query=DB::table('users')
		->join('estudantes', 'estudantes.user_id','=','users.id')
		->join('curriculos', 'curriculos.estudante_id','=','estudantes.id')
		->join('idiomas','idiomas.curriculo_id','=','curriculos.id')
		->join('disponibilidades','disponibilidades.curriculo_id','=','curriculos.id');
		$query = $query->select(DB::raw('estudantes.*'));

		if($cursos){
			$query->whereIn('estudantes.curso',$cursos);
		}

		if($disponibilidades){
			$query->whereIn('disponibilidades.disp',$disponibilidades);
		}

		if($niveis){
			$query->whereIn('estudantes.nivel',$niveis);
		}

		if($idiomas){
			$query->whereIn('idiomas.lingua',$idiomas);
		}

		$estudantes=$query->get();
			//	return view("VisualizarProcura",['cursos'=>$cursos],['disponibilidades'=>$disponibilidades],['niveis'=>$niveis],['idiomas'=>$idiomas]);

			return view("VisualizarProcura",['estudantes'=>$estudantes]);


	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
