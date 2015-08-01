<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \App\Contacto;
use \App\Email;
use \App\Telefone;
use Illuminate\Http\Request;
use Input;

class ContactoController extends Controller {

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
	{
		return view('contactoGravar');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$telefones=Input::get('telefone');
		$emails= Input::get ('email');

		$contacto = new Contacto();
		$contacto->save();

		foreach($telefones as  $telefone){
			if ($telefone != null){
				$t= new Telefone();
				$t->telefone=$telefone;
				$t->contacto()->associate($contacto);
				$t->save();
			}


		}

				foreach($emails as $email){
					if($email != null){
						$e= new Email();
						$e->email=$email;
						$e->contacto()->associate($contacto);
						$e->save();

					}
				}
	}





	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
