<?php namespace App\Http\Controllers;

use App\Contacto;
use App\Email;
use App\Http\Requests;
use App\Telefone;
use Auth;
use DB;
use Illuminate\Http\Request;
use Input;
use Illuminate\Support\Facades\Session;

class ContactoController extends Controller
{

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
        $vista = 'contactoGravar';
        return view('gestorCurriculum', ["vista" => $vista]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $telefone = Input::get('telefone');
        $email = Input::get('email');

        $contacto = new Contacto();
        Auth::user()->contacto()->save($contacto);


        $t = new Telefone();
        $t->telefone = $telefone;
        $t->contacto()->associate($contacto);
        $t->save();


        $e = new Email();
        $e->email = $email;
        $e->contacto()->associate($contacto);
        $e->save();

        $contactos = true;
        $vista = 'contacto';
        Session::flash('message', 'Dados gravados com sucesso');
        return view('gestorCurriculum', ["contactos" => $contactos, "cont"=>$contacto,"vista" => $vista, 'nav'=>'contacto']);

        //return redirect(route('visualizarContacto',['id'=>$contacto->id]));
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $cont = Contacto::find($id);
        $telefone = Telefone::where('contacto_id', '=', $id)->pluck('telefone');
        $email = Email::where('contacto_id', '=', $id)->pluck('email');
        return view("contactoo", ['cont' => $cont, 'telefone' => $telefone, 'email' => $email]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {

        $cont = Contacto::find($id);
        $telefones = Telefone::where('contacto_id', '=', $id)->get();
        $emails = Email::where('contacto_id', '=', $id)->get();

        return view("contacto", ['cont' => $cont]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        $contacto = Contacto::find($id);
        //Auth::user()->contacto()->save($contacto);
        $e = $contacto->email()->first();
        $t = $contacto->telefone()->first();

        $telefone = Input::get('telefone');
        $email = Input::get('email');

        $t->telefone=$telefone;
        //$t->contacto()->associate($contacto);
        $t->save();

        $e->email=$email;
        //$e->contacto()->associate($contacto);
        $e->save();

        $contactos = true;
        $vista = 'contacto';
        Session::flash('message', 'Dados gravados com sucesso');
        return view('gestorCurriculum',  ["contactos" => $contactos, "cont"=>$contacto,"vista" => $vista,'nav'=>'contacto']);

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {

    }

}
