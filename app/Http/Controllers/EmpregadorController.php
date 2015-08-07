<?php namespace App\Http\Controllers;

use App\Empregador;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

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

        $vista = 'empregador';
        return view('gestorNucleo',["vista"=>$vista]);

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
        $emp= new Empregador;
        $emp->nome= $request->get('nome');
        $emp->descricao = $request->get ('descricao');
        $emp->logotipo= $request->get ('logotipo');

        $name= $request->get ('name');
        $email= $request->get ('email');
        $password= $request->get ('password');

        $u = User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
            'tipo' => 'empregador'
        ]);

        $u->empregador()->save($emp);

        $empregadores=true;
        $vista = 'empregadorEdit';
        Session::flash('message', 'Dados gravados com sucesso');
        return view('gestorNucleo',["empregadores"=>$empregadores,"vista"=>$vista,"emp"=>$emp, 'nav'=>"empregad","user"=>$u]);
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
        return view("empregadorr", ['emp' => $emp]);
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
        $user = User::find($id);
        return view("empregadorEdit", ['emp' => $emp],['user' => $user]);

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

        $name= $request->get ('name');
        $email= $request->get ('email');
        $password= $request->get ('password');

        $u = User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
            'tipo' => 'empregador'
        ]);

        $u->empregador()->save($emp);
        $empregadores=true;
        $vista = 'empregadorEdit';
        Session::flash('message', 'Dados gravados com sucesso');
        return view('gestorNucleo',["empregadores"=>$empregadores,"vista"=>$vista,"emp"=>$emp, 'nav'=>"empregad","user"=>$u]);
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
