<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\referencia;
use Illuminate\Http\Request;
use App\Estudante;
use App\Curriculo;
use Auth;
use Illuminate\Support\Facades\Session;

class referenciaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{  $vista = 'referencia';
        return view('gestorCurriculum',["vista"=>$vista]);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

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

        $refer = new referencia();
				$refer->curriculo_id=$curriculo_id;
        $refer->referencia=$request->get('referencia');
        $refer->save();
        $referencias=true;
        $vista = 'referenciaEdit';
        Session::flash('message', 'Dados gravados com sucesso');
        return view('gestorCurriculum',["referencias"=>$referencias,"vista"=>$vista,"refer"=>$refer, 'nav'=>"menu5"]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $refer = referencia::find($id);
        return view("referenciaa", ['refer' => $refer]);

    }

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $refer = referencia::find($id);
        return view("referenciaEdit", ['refer' => $refer]);

    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
        $refer= referencia::find($id);
        $refer->referencia=$request->get('referencia');
        $refer->save();
        $referencias=true;
        $vista = 'referenciaEdit';
        Session::flash('message', 'Dados gravados com sucesso');
        return view('gestorCurriculum',["referencias"=>$referencias,"vista"=>$vista,"refer"=>$refer, 'nav'=>"menu5"]);


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
