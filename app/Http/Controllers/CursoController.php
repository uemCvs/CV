<?php namespace App\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: Yola
 * Date: 8/3/2015
 * Time: 7:49 PM
 */
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Curso;
use App\Nivel;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

class CursoController extends Controller{
public  function showCurso(){
    $nivel=Nivel::lists('nome', 'id');
    return view('curso')->with('nivel',$nivel);
}
    public function createCurso(Request $request)
    {
        $curso = new Curso();
        $curso->nome = $request->input('curso');
        $nivel = Nivel::find($request->input('nivel'));
        $curso = $nivel->cursos()->save($curso);
        Session::flash('message', 'Dados gravados com sucesso');
        return Redirect('curso');
    }

    public function getCursos($id){
        $nivel=Nivel::find($id);
        $curso=$nivel->cursos()->getQuery()->get(['id','nome']);

        return Response::json($curso);

    }
}