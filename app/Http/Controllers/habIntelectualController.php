<?php namespace App\Http\Controllers;

use App\HabilitacaoIntelectual;
use App\Estudante;
use App\Curriculo;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
//use App\HabilitacaoIntelectual;

use Illuminate\Http\Request;

class habIntelectualController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        //$habilitacaoI=true;
        $vista = 'habIntelectual';

        return view('gestorCurriculum',["vista"=>$vista]);

		//return view('habIntelectual');
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
	{     $user_id=Auth::user()->id;
		    $estudante_id=Estudante::where('user_id','=',$user_id)->first()->id;
				$curriculo_id=Curriculo::where('estudante_id','=',$estudante_id)->first()->id;
        $hab= new HabilitacaoIntelectual();
				$hab->curriculo_id=$curriculo_id;
        $hab->habilitacao= $request->get('habilitacao');
				$hab->save();

        $habilitacaoI=true;
        $vista = 'habilitacaoIntelectualEdit';
        Session::flash('message', 'Dados gravados com sucesso');
        return view('gestorCurriculum',["habilitacaoI"=>$habilitacaoI,"vista"=>$vista,"hab"=>$hab,'nav'=>"menu3"]);

      //  return redirect(route('visualizarHabilitacao',['id'=>$hab->id]));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $hab = HabilitacaoIntelectual::find($id);
        return view("habIntelectuall", ['hab' => $hab]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $hab = HabilitacaoIntelectual::find($id);
        return view("habilitacaoIntelectualEdit", ['hab' => $hab]);
    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{

        $user_id=Auth::user()->id;
        $estudante_id=Estudante::where('user_id','=',$user_id)->first()->id;
        $curriculo_id=Curriculo::where('estudante_id','=',$estudante_id)->first()->id;
        $hab= HabilitacaoIntelectual::find($id);
        $hab->curriculo_id=$curriculo_id;
        $hab->habilitacao= $request->get('habilitacao');
        $hab->save();

      /*  $hab->habilitacao= $request->get('habilitacao');
        $hab->save();*/
        $habilitacaoI=true;
        $vista = 'habilitacaoIntelectualEdit';
        Session::flash('message', 'Dados gravados com sucesso');
        return view('gestorCurriculum',["habilitacaoI"=>$habilitacaoI,"vista"=>$vista,"hab"=>$hab,'nav'=>"menu3"]);

        //return redirect(route('visualizarHabilitacao',['id'=>$hab->id]));



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
