<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use DB;
use App\User;
use App\Idioma;

class ProcuraController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$idiomas=Idioma::lists('lingua','id');
		return view('Procurar',['idiomas'=>$idiomas]);
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

		$query=\App\Estudante::select(DB::raw('distinct estudantes.*'))
		->join('curriculos AS c', 'c.estudante_id','=','estudantes.id')
		->join('idiomas AS i','i.curriculo_id','=','c.id')
		->join('disponibilidades AS d','d.curriculo_id','=','c.id');

		if ($cursos) {
			$query = $query->whereIn('estudantes.curso',$cursos);
		}

		if ($disponibilidades) {
			$query = $query->whereIn('d.disp',$disponibilidades);
		}

		if ($niveis) {
			$query->whereIn('estudantes.nivel',$niveis);
		}

		if ($idiomas) {
			$query = $query->whereIn('i.lingua',$idiomas);
		}

		$estudantes = $query->get();

			return view("VisualizarProcura",['estudantes'=>$estudantes,"idiomas"=>$idiomas]);



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
