<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Nivel;
use App\Curso;
use App\Vaga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;

class vagaController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {$nivel=Nivel::lists('nome','id');

        return view('gestorEmpregador')->with('nivel',$nivel);
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
        $vaga= new Vaga();
        $vaga->nome=$request->get('nome');
        $vaga->descricao=$request->get('descricao');
        $vaga->nrVagas=$request->get('nrVagas');
        $vaga->sistemaEnsino=$request->get('nivel');
        $vaga->cursos=$request->get('curso');
        $vaga->idioma=$request->get('idioma');
        $vaga->outroCurso=$request->get('outroCurso');
        $vaga->disponibilidade=$request->get('disponibilidade');
        $vaga->competencia=$request->get('competencia');
        $vaga->condicoesOferecidas=$request->get('condicaoOferecida');
        $vaga->save();
        Session::flash('message', 'Dados gravados com sucesso');
        return redirect('gestorEmpregador');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

        $vaga = Vaga::find($id);

        return view("vagaa", ['vaga' => $vaga]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {$v=new Vaga();
        $vaga = $v::find($id);

        $nivel=Nivel::lists('nome','id');
        return view("vagaEdit")->with(array('vaga'=>$vaga,'nivel'=>$nivel/*'nive'=>$nive,'curs'=>$curs*/));



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,$id)
    {
        $vaga= Vaga::find($id);
        $vaga->nome=$request->get('nome');
        $vaga->descricao=$request->get('descricao');
        $vaga->nrVagas=$request->get('nrVagas');
        $vaga->sistemaEnsino=$request->get('sistemaEnsino');
        $vaga->cursos=$request->get('cursos');
        $vaga->idioma=$request->get('idioma');
        $vaga->outroCurso=$request->get('outroCurso');
        $vaga->disponibilidade=$request->get('disponibilidade');
        $vaga->competencia=$request->get('competencia');
        $vaga->condicoesOferecidas=$request->get('condicoesOferecidas');
        $vaga->save();
        Session::flash('message', 'Dados alterados com sucesso');
        return redirect(route('visualizarVaga',['id'=>$vaga->id]));
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




    public function showVagas(){
        $vagas=Vaga::all();
        $vaga=Vaga::all()->isEmpty();
        $nivel=Nivel::lists('nome','id');
        return view("vaga")->with(array('vagas'=>$vagas,'nivel'=>$nivel,'vaga'=>$vaga));

    }

}
