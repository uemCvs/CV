<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Idioma;
use App\Nivel;
use App\Vaga;
use App\IdiomaVaga;
use App\lingua;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;

class vagaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $cursos=\App\curso::all();
        $idiomas=lingua::lists('idioma','id');
        $vaga = Vaga::all()->isEmpty();
$vista='vaga';
        $nivel = Nivel::lists('nome', 'id');
        $vagas = Vaga::all();
        return view('gestorEmpregador')->with(['nivel' => $nivel, 'vagas' => $vagas,'idiomas'=>$idiomas,'vaga'=>$vaga,'cursos'=>$cursos,'vista'=>$vista]);
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
        // $vaga->idioma=$request->get('idioma');
        $vaga->outroCurso=$request->get('outroCurso');
        $vaga->disponibilidade=$request->get('disponibilidade');
        $vaga->competencia=$request->get('competencia');
        $vaga->condicoesOferecidas=$request->get('condicaoOferecida');
        $vaga->save();
        Session::flash('message', 'Dados gravados com sucesso');

        $v = Vaga::all();
        $t = sizeof($v);
        $vg = $v[--$t];
$idioma=lingua::lists('idioma','id');
        $cursos = $request->get('curso');
        $idiomas = $request->get('idioma');
        for ($i=0;$i<count($cursos);$i++) {
            $cv = new \App\CursoVaga;
            $cv->curso_id = $cursos[$i];
            $cv->vaga_id = $vg['id'];
            $cv->save();
        }
        for ($i=0;$i<count($idiomas);$i++) {
            $iv = new IdiomaVaga;
            $iv->idioma_id = $idiomas[$i];
            $iv->vaga_id = $vg['id'];
            $iv->save();

        }

$nivel=Nivel::lists('nome','id');
        $vaga->nome = $request->get('nome');
        $vaga->descricao = $request->get('descricao');
        $vaga->nrVagas = $request->get('nrVagas');
        $vaga->sistemaEnsino = $request->get('nivel');
        // $vaga->cursos = $request->get('cursos');
        // $vaga->idioma = $request->get('idioma');
        $vaga->outroCurso = $request->get('outroCurso');
        $vaga->disponibilidade = $request->get('disponibilidade');
        $vaga->competencia = $request->get('competencia');
        $vaga->condicoesOferecidas = $request->get('condicoesOferecidas');
        $vaga->save();


        $vagasR=true;
        $vista = 'vagaEdit';
        Session::flash('message', 'Dados gravados com sucesso');
        return view('gestorEmpregador',["vagasR"=>$vagasR,"vista"=>$vista,'idioma'=>$idiomas,'idiomas'=>$idioma,'vagas'=>$v,'cursos'=>$cursos,'nivel'=>$nivel,'nav'=>'vagaR']);


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
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
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $v = new Vaga();
        $vaga = $v::find($id);
$idiomas=lingua::lists('idioma','id');
        $nivel = Nivel::lists('nome', 'id');
        return view("gestorEmpregador")->with(array('vaga' => $vaga, 'nivel' => $nivel,'idiomas'=>$idiomas));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {$idiomas=lingua::lists('idioma','id');
        $nivel = Nivel::lists('nome', 'id');

        $vaga = Vaga::find($id);
        $vaga->nome = $request->get('nome');
        $vaga->descricao = $request->get('descricao');
        $vaga->nrVagas = $request->get('nrVagas');
        $vaga->sistemaEnsino = $request->get('nivel');
       // $vaga->cursos = $request->get('cursos');
       // $vaga->idioma = $request->get('idioma');
        $vaga->outroCurso = $request->get('outroCurso');
        $vaga->disponibilidade = $request->get('disponibilidade');
        $vaga->competencia = $request->get('competencia');
        $vaga->condicoesOferecidas = $request->get('condicoesOferecidas');
        $vaga->save();
        $vagasR=true;
        $vista = 'vagaEdit';
        Session::flash('message', 'Dados gravados com sucesso');
        return view('gestorEmpregador',["vagasR"=>$vagasR,"vista"=>$vista,'vaga'=>$vaga,'nivel'=>$nivel,'idiomas'=>$idiomas,'nav'=>'vagaR']);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


    public function showVagas()
    {
        $vagas = Vaga::all();
        $vaga = Vaga::all()->isEmpty();
        $nivel = Nivel::lists('nome', 'id');
        return view("vaga")->with(array('vagas' => $vagas, 'nivel' => $nivel, 'vaga' => $vaga));

    }

}
