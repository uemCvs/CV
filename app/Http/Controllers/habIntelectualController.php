<?php namespace App\Http\Controllers;

use App\HabilitacaoIntelectual;
use App\Http\Requests;
use App\Http\Controllers\Controller;
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
		return view('habIntelectual');
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
        $hab= new HabilitacaoIntelectual();
        $hab->habilitacao= $request->get('habilitacao');
        $hab->save();
        return redirect(route('visualizarHabilitacao',['id'=>$hab->id]));
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
        return view("habIntelectuall", ['h' => $hab]);
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
        $hab= HabilitacaoIntelectual::find($id);
        $hab->habilitacao= $request->get('habilitacao');
        $hab->save();
        return $hab;



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
