<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Estudante;
use DB;
use Illuminate\Support\Facades\View;

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

        $resultado=User::with((['endereco','contacto','estudante','estudante.curriculo','estudante.curriculo.disponibilidade'
            ,'estudante.curriculo.OutraQualificacao','estudante.curriculo.referencia',
            'estudante.curriculo.HabilitacaoIntelectual','estudante.curriculo.habilitacao','estudante.curriculo.experiencia',
            'estudante.curriculo.Idioma']))->where('id',$userId)->first();
        // ->join('estudantes As e','e.user_id','=','users.id')
        // ->where('e.id','=',$id)->with(['contacto','endereco'])


        //
        // $estudante=\App\Estudante::where('estudantes.id',$id)
        // ->with(['curriculo','curriculo.disponibilidade',
        // 'curriculo.OutraQualificacao','curriculo.referencia','curriculo.HabilitacaoIntelectual',
        // 'curriculo.habilitacao','curriculo.experiencia','curriculo.Idioma','utilizador','utilizador.contacto',
        // 'utilizador.endereco'])->first();


        return view("ApreciarNucleo",['resultado'=>$resultado]);
//return $estudante;

    }

    public function verCurriculo($id){
//$resultado="";
        //$userId=\App\Estudante::find($id)->user_id;
        $userId=Auth::user()->estudante->user_id;
        //$estudante=Estudante::all()->where("user_id",$userId);
        //if()
        if($id ==$userId){
           // echo $id;
           // echo $userId;
            $resultado=User::with((['endereco','contacto','estudante','estudante.curriculo','estudante.curriculo.disponibilidade'
                ,'estudante.curriculo.OutraQualificacao','estudante.curriculo.referencia',
                'estudante.curriculo.HabilitacaoIntelectual','estudante.curriculo.habilitacao','estudante.curriculo.experiencia',
                'estudante.curriculo.Idioma']))->where('id',$userId)->first();


            $parameter = array();
            $parameter['resultado'] = $resultado;

           /* $html=View::make('ApreciarPerfil')->withData($parameter);
            $dompdf=new \DOMPDF();
            $dompdf->set_base_path(public_path().'/Start/css/MeuStyle');//use style exterior
            $dompdf->load_html($html);
            $dompdf->render();
           $dompdf->stream("cv.pdf");
        }*/

            $pdf = \PDF::loadView('ApreciarPerfil',$parameter);
            return $pdf->stream('Curriculum.pdf');}
//echo $resultado;
        //return view("ApreciarPerfil",['resultado'=>$resultado]);}
else
        return "nao foi encontrado";
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
