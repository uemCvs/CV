<?php namespace App\Http\Controllers;
use Auth;

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
             $est=Auth::user()->estudante()->first();
						$dadosPessoais=true;
						$vista = 'estudante';
						return view('gestorCurriculum',["dadosPessoais"=>$dadosPessoais,"vista"=>$vista,"est"=>$est]);

           //return redirect(route('visualizarEstudante', ['id'=>$estudante]));

        }
		return redirect(route('curriculo'));
//return view('home');
	}

}
