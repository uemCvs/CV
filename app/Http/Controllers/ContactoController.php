<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \App\Contacto;
use \App\Email;
use \App\Telefone;
use Illuminate\Http\Request;
use Input;
use DB;
use Auth;
use stdClass;

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
		$telefone=Input::get('telefone');
		$email= Input::get ('email');

		$contacto = new Contacto();
		Auth::user()->contacto()->save($contacto);


				$t= new Telefone();
				$t->telefone=$telefone;
				$t->contacto()->associate($contacto);
				$t->save();


					$e= new Email();
						$e->email=$email;
						$e->contacto()->associate($contacto);
						$e->save();

	return redirect(route('visualizarContacto',['id'=>$contacto->id]));
	}





	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$cont = Contacto::find($id);
		$telefones = Telefone::where('contacto_id', '=', $id)->get();
		$emails = Email::where('contacto_id', '=', $id)->get();
		return view("contactoo", ['cont' => $cont,'telefones' => $telefones, 'emails' => $emails]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

        $cont = Contacto::find($id);
        $telefones = Telefone::where('contacto_id', '=', $id)->get();
        $emails = Email::where('contacto_id', '=', $id)->get();

        return view("contacto", ['cont' => $cont,'telefones' => $telefones, 'emails' => $emails]);


	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$contacto = Contacto::find($id);
		$telefone=Input::get('telefone');
		$email= Input::get ('email');


		$t->telefone=$telefone;
		$t->contacto()->associate($contacto);
		$t->save();

				$e->email=$email;
				$e->contacto()->associate($contacto);
				$e->save();

				return redirect(route('visualizarContacto',['id'=>$contacto->id]));
				}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

	}

}
