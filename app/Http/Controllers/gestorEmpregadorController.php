<?php namespace App\Http\Controllers;

use App\Nivel;
use App\Vaga;

class gestorEmpregadorController extends Controller{

    public function showVagas(){
        $vagas=Vaga::all();
        $vaga=Vaga::all()->isEmpty();
        $nivel=Nivel::lists('nome','id');
        return view("gestorEmpregador")->with(array('vagas'=>$vagas,'nivel'=>$nivel,'vaga'=>$vaga));

    }



}