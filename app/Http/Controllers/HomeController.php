<?php namespace App\Http\Controllers;
use App\Empregador;
use App\Vaga;
use App\lingua;
use App\Nivel;
use App\Curso;
use App\Idioma;
use Auth;
use \App\User;
use Illuminate\Support\Facades\Session;
class HomeController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders your application's "dashboard" for users that
    | are authenticated. Of course, you are free to change or remove the
    | controller as you wish. It is just here to get your app started!
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {
        if (Auth::user()->estudante()->first()){
            $estudante=Auth::user()->estudante()->first();
$d=true;
            $vista='estudante';
            return view('gestorCurriculum', ['d'=>$d,'est'=>$estudante,'vista'=>$vista]);

        }

        $idiomas=lingua::all();
        $_SESSION['estudante']=true;
        $vagas=Vaga::all();
        $cursos=\App\curso::all();
        $nivel = Nivel::lists('nome', 'id');
        $vaga = Vaga::all()->isEmpty();
        $fillable = Auth::user()->get();
        $fillable2=Auth::user()->tipo;
        //$emp=Auth::user()->empregador()->first;
        $vista='estudanteGravar';
        if($fillable2=='estudante')
            return view('gestorCurriculum',['vista'=>$vista]);

        elseif($fillable2=='empregador')
        { $vista='empregador';
            $vaga = Vaga::all()->isEmpty();
            return view('gestorEmpregador',['vagas'=>$vagas,'idiomas'=>$idiomas,'vaga'=>$vaga,'nivel'=>$nivel,'cursos'=>$cursos,'vista'=>$vista]);
        }else
        {
            $idiomas=Idioma::lists('lingua');
            $vaga=Vaga::all();
            return view('Procurar',["vaga"=>$vaga,"idiomas"=>$idiomas]);}


        /*  if($fillable.isEmpty()){
              return view('gestorEmpregador',['vaga'=>$vaga]);

          }else
              return view('gestorCurriculum');*/


//return view('home');

    }

}
