<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use \App\Endereco;
use Auth;
use Illuminate\Support\Facades\Session;
class EnderecoController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {$enderecos=true;
        $ende=Endereco::all();
        if($ende->isEmpty()){
        $v = 'enderecoGravar';
        return view('gestorCurriculum',['enderecos'=>$enderecos,"v"=>$v]);
    }
        else
        { $v = 'endereco';
            return view('gestorCurriculum',['enderecos'=>$enderecos,"v"=>$v]);}



        //return view('enderecoGravar');
    }


	/**
	 * Store a newly created resource in storage.
	 *

     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $end= new Endereco();
        $end->pais= $request->get('pais');
        $end->provincia = $request->get ('provincia');
        $end->distrito= $request->get ('distrito');
        $end->bairro= $request->get ('bairro');
        $end->rua= $request->get ('rua');
        $end->avenida= $request->get ('avenida');
        $end->nrDeCasa= $request->get ('nrDeCasa');
        $end->quarteirao= $request->get ('quarteirao');
        Auth::user()->endereco()->save($end);
        $vista = 'endereco';

        $enderecos=true;
        Session::flash('message', 'Dados gravados com sucesso');
        return view('gestorCurriculum',["enderecos"=>$enderecos,"vista"=>$vista,"end"=>$end,  'nav'=>"endereco"]);

    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$end = Endereco::find($id);
		return view("enderecoo", ['end' => $end]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

			$end = Endereco::find($id);
			return view("endereco", ['end' => $end]);
		}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */

     /* Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,$id)
    {
        $end = Endereco::find($id);
        $end->pais= $request->get('pais');
        $end->provincia = $request->get ('provincia');
        $end->distrito= $request->get ('distrito');
        $end->bairro= $request->get ('bairro');
        $end->rua= $request->get ('rua');
        $end->avenida= $request->get ('avenida');
        $end->nrDeCasa= $request->get ('nrDeCasa');
        $end->quarteirao= $request->get ('quarteirao');
        $end->save();
        $vista = 'endereco';
        $enderecos=true;
        Session::flash('message', 'Dados gravados com sucesso');
        return view('gestorCurriculum',["endereco"=>$enderecos,"vista"=>$vista,"end"=>$end, 'nav'=>"endereco"]);

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
