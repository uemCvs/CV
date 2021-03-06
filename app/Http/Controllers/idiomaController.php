<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Idioma;
use App\Estudante;
use App\Curriculo;
use Auth;
use Illuminate\Support\Facades\Session;

class idiomaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $vista = 'idioma';
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

        $idioma= new Idioma();
				$idioma->curriculo_id=$curriculo_id;
        $idioma->lingua=$request->get('lingua');
        $idioma->dominioEsc = $request->get ('dominioEsc');
        $idioma->dominioFala = $request->get ('dominioFala');
        $idioma->dominioLei = $request->get ('dominioLei');
        $idioma->save();
        $idiomas=true;
        $vista = 'idiomaEdit';
        Session::flash('message', 'Dados gravados com sucesso');
        return view('gestorCurriculum',["idiomas"=>$idiomas,"vista"=>$vista,"idioma"=>$idioma, 'nav'=>"idioma"]);

    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $idioma = Idioma::find($id);
        return view("idiomaa", ['idioma' => $idioma]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $idioma = Idioma::find($id);
        return view("idiomaEdit", ['idioma' => $idioma]);

    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
        $idioma= Idioma::find($id);
        $idioma->lingua=$request->get('lingua');
        $idioma->dominioEsc = $request->get ('dominioEsc');
        $idioma->dominioFala = $request->get ('dominioFala');
        $idioma->dominioLei = $request->get ('dominioLei');
        $idioma->save();
        $idiomas=true;
        $vista = 'idiomaEdit';
        Session::flash('message', 'Dados gravados com sucesso');
        return view('gestorCurriculum',["idiomas"=>$idiomas,"vista"=>$vista,"idioma"=>$idioma, 'nav'=>"idioma"]);
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
