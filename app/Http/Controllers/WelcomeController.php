<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Psy\Test\CodeCleaner\MagicConstantsPassTest;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}
public function contacto(){
    $messagem=null;
    if(isset($_POST['contacto'])){
        $data=array('nome'=>Input::get('nome'),
            'email'=>Input::get('email'),
            'number'=>Input::get('number'),
            'message'=>Input::get('message')
            );
        $fromEmail='yoyogarife@gmail.com';
        $fromName='Administrador';
        Mail::send('emails.contacto',$data, function($messagem) use
        ($fromName,$fromEmail){
$messagem->to($fromEmail,$fromName);
            $messagem->from($fromEmail,$fromName);
            $messagem->subject('Novo email do contacto');
        }
        );
        $messagem='<div class="text-info">Messagem enviado com exito</div>';
    }
return view('welcome');
}
}
