<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\disponibilidade;
use App\Estudante;
use App\Curriculo;
use Auth;
use Illuminate\Support\Facades\Session;


class disponibilidadeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $vista = 'disponibilidade';
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

		$disp= new disponibilidade();
		$disp->curriculo_id=$curriculo_id;
        $disp->disp=$request->get('disp');
        $disp->tempoInicio=$request->get('tempoInicio');
        $disp->tempoFim=$request->get('tempoFim');
        $disp->descricao=$request->get('descricao');
        $disp->save();
        $disponibilidades=true;
        $vista = 'disponibilidadeEdit';
        Session::flash('message', 'Dados gravados com sucesso');
        return view('gestorCurriculum',["disponibilidades"=>$disponibilidades,"vista"=>$vista,"disp"=>$disp, 'nav'=>"menu4"]);
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
        $disponibilidades=true;
        $vista = '$disponibilidadeEdit';
        Session::flash('message', 'Dados gravados com sucesso');
        return view('gestorCurriculum',["disponibilidades"=>$disponibilidades,"vista"=>$vista,"disp"=>$disp, 'nav'=>"menu4"]);
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
