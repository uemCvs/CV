<?php namespace App\Http\Controllers;

use App\disponibilidade;
use App\Estudante;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use DB;
use App\User;
use App\Idioma;

session_start();

class ProcuraController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
     *
     *
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

        $curso = "";
        $nivel ="";
        $disponibilidade="";

          $estudantes = DB::table('estudantes')->where('curso','like',"%$curso%")->where('nivel','like',"%$nivel%")->
              join('curriculos','estudantes.id','=','curriculos.id')->
              join('disponibilidades','curriculos.id','=','disponibilidades.curriculo_id')
                  ->where('disponibilidades.disp','like',"%$disponibilidade%")->get();

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
