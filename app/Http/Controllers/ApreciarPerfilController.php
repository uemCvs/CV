<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;
use DB;

class ApreciarPerfilController extends Controller {

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $userId=\App\Estudante::find($id)->user_id;

        $resultado=\App\User::where('id',$userId)
            ->with(['endereco','contacto','estudante','estudante.curriculo','estudante.curriculo.disponibilidade'
                ,'estudante.curriculo.OutraQualificacao','estudante.curriculo.referencia',
                'estudante.curriculo.HabilitacaoIntelectual','estudante.curriculo.habilitacao','estudante.curriculo.experiencia',
                'estudante.curriculo.Idioma'])->first();
        // ->join('estudantes As e','e.user_id','=','users.id')
        // ->where('e.id','=',$id)->with(['contacto','endereco'])


        //
        // $estudante=\App\Estudante::where('estudantes.id',$id)
        // ->with(['curriculo','curriculo.disponibilidade',
        // 'curriculo.OutraQualificacao','curriculo.referencia','curriculo.HabilitacaoIntelectual',
        // 'curriculo.habilitacao','curriculo.experiencia','curriculo.Idioma','utilizador','utilizador.contacto',
        // 'utilizador.endereco'])->first();


        return view("ApreciarPerfil",['resultado'=>$resultado]);
//return $estudante;

    }

    public function verCurriculo($id){

        $userId=\App\Estudante::find($id)->user_id;
        if(Auth::user()->id ==$userId){
            $resultado=\App\User::where('id',$userId)
                ->with(['endereco','contacto','estudante','estudante.curriculo','estudante.curriculo.disponibilidade'
                    ,'estudante.curriculo.OutraQualificacao','estudante.curriculo.referencia',
                    'estudante.curriculo.HabilitacaoIntelectual','estudante.curriculo.habilitacao','estudante.curriculo.experiencia',
                    'estudante.curriculo.Idioma'])->first();
        }
        return view("ApreciarPerfil",['resultado'=>$resultado]);

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
