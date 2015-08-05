<?php namespace App\Http\Controllers;
use App\Vaga;
use Auth;
use \App\User;
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
        //  if (Auth::user()->estudante()->first()){
        //      $est=Auth::user()->estudante()->first();
				// 		$dadosPessoais=true;
				// 		$vista = 'estudante';
				// 		return view('gestorCurriculum',["dadosPessoais"=>$dadosPessoais,"vista"=>$vista,"est"=>$est]);
				//
        //    //return redirect(route('visualizarEstudante', ['id'=>$estudante]));
				//
        //      $estudante=Auth::user()->estudante()->first();
				//
        //      $vista='estudante';
        //    return view('gestorCurriculum', ['est'=>$estudante,'vista'=>$vista]);

        }

        $_SESSION['estudante']=true;
        $vaga=Vaga::all();
        $fillable = Auth::user()->get();
        $fillable2=Auth::user()->tipo;
        $vista='estudanteGravar';
        $v='endereco';
        if($fillable2=='estudante')
            return view('gestorCurriculum',['vista'=>$vista,'v'=>$v]);

        else
            return view('gestorEmpregador',['vaga'=>$vaga]);

      /*  if($fillable.isEmpty()){
            return view('gestorEmpregador',['vaga'=>$vaga]);

        }else
            return view('gestorCurriculum');*/


//return view('home');

	}

}
