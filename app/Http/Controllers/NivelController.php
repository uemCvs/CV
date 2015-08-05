<?php namespace App\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: Yola
 * Date: 8/3/2015
 * Time: 7:49 PM
 */
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Nivel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

class NivelController extends Controller{
public function showNivel(){
    return view('nivel');
}
    public function createNivel()
    {

        $nivel = new Nivel();
        $nivel->nome = Input::get('nome');
        $nivel->save();
        Session::flash('message', 'Dados gravados com sucesso');
        return Redirect('nivel');

    }
}