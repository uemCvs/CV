<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Idioma;

class idiomaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('Idioma');
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
        $idioma= new Idioma();
        $idioma->lingua=$request->get('lingua');
        $idioma->dominioEsc = $request->get ('dominioEsc');
        $idioma->dominioFala = $request->get ('dominioFala');
        $idioma->dominioLei = $request->get ('dominioLei');
        $idioma->save();
        return $idioma;
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
        return $idioma;
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
