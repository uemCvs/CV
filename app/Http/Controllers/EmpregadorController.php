<?php namespace App\Http\Controllers;

use App\Empregador;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;
use Auth;

class EmpregadorController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('empregador');
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
        $emp= new Empregador();
        $emp->nome= $request->get('nome');
        $emp->descricao = $request->get ('descricao');
        $emp->logotipo= $request->get ('logotipo');
        Auth::user()->empregador()->save($emp);
        $user=new User();
        $user->name= $request->get ('name');
        $user->email= $request->get ('email');
        $user->password= $request->get ('password');
        $user->tipo= 'empregador';
        $user->remember_token= $request->get ('remember_token');
        $user->save();
        $emp->save();
        return $emp;
        //return redirect(route('visualizarEstudante',['id'=>$est->id]));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $emp = Empregador::find($id);
        return view("empregadorr", ['est' => $emp]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $emp = Empregador::find($id);
        return view("empregadorEdit", ['emp' => $emp]);

    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
        $emp= Empregador::find($id);
        $emp->nome= $request->get('nome');
        $emp->descricao = $request->get ('descricao');
        $emp->logotipo= $request->get ('logotipo');
        Auth::user()->empregador()->save($emp);

        $user=new User();
        $user->name= $request->get ('name');
        $user->email= $request->get ('email');
        $user->password= $request->get ('password');
        $user->tipo='empregador';
        $user->remember_token= $request->get ('remember_token');
        $user->save();
        $emp->save();

        return $emp;

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
